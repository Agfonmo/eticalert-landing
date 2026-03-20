<?php
// ============================================================
// EticAlert — registro.php
// ============================================================
require_once __DIR__ . '/config.php';
session_start();

$errors  = [];
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';

// CSRF token
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

// Rate limiting básico: máx 5 intentos por sesión en 10 min
if (!isset($_SESSION['reg_attempts'])) $_SESSION['reg_attempts'] = [];
$_SESSION['reg_attempts'] = array_filter($_SESSION['reg_attempts'], fn($t) => $t > time() - 600);

$plan_map = ['1-20' => 'FREE', '21-49' => 'BUSINESS', '50-150' => 'COMPANY', '150+' => 'ENTERPRISE'];

$sectors = [
  'Agricultura y ganadería','Alimentación y bebidas','Automoción',
  'Comercio y retail','Comunicación y medios','Construcción e inmobiliaria',
  'Consultoría y asesoría','Deporte y ocio','Educación y formación',
  'Energía y utilities','Industria y manufactura','Legal y jurídico',
  'Logística y transporte','Marketing y publicidad','ONG y asociaciones',
  'Recursos humanos','Salud y farmacia','Seguridad','Seguros',
  'Servicios financieros y banca','Tecnología e informática',
  'Turismo y hostelería','Administración pública','Otro',
];

if ($submitted) {
  // Honeypot: si viene relleno es un bot
  if (!empty($_POST['website'])) { http_response_code(400); exit; }

  // CSRF
  if (!hash_equals($csrf_token, $_POST['csrf_token'] ?? '')) {
    $errors['csrf'] = 'Token de seguridad inválido. Recarga la página.';
  }

  // Rate limiting
  if (count($_SESSION['reg_attempts']) >= 5) {
    $errors['rate'] = 'Demasiados intentos. Espera unos minutos e inténtalo de nuevo.';
  }

  // Sanitizar
  $nombre    = trim(htmlspecialchars($_POST['nombre']    ?? '', ENT_QUOTES, 'UTF-8'));
  $email     = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
  $empresa   = trim(htmlspecialchars($_POST['empresa']   ?? '', ENT_QUOTES, 'UTF-8'));
  $cif       = strtoupper(trim(preg_replace('/[\s\-]/', '', $_POST['cif'] ?? '')));
  $sector    = trim(htmlspecialchars($_POST['sector']    ?? '', ENT_QUOTES, 'UTF-8'));
  $empleados = trim(htmlspecialchars($_POST['empleados'] ?? '', ENT_QUOTES, 'UTF-8'));
  $billing   = ($_POST['billing'] ?? 'monthly') === 'annual' ? 'annual' : 'monthly';
  $accept_privacy  = isset($_POST['acceptTermsAndPrivacy']);
  $accept_contract = isset($_POST['acceptCompanyAdminContract']);

  // Validaciones servidor
  if (empty($nombre)) $errors['nombre'] = 'El nombre es obligatorio.';

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Introduce un email corporativo válido.';
  } else {
    $free_domains = ['gmail.com','googlemail.com','hotmail.com','hotmail.es','outlook.com',
      'outlook.es','live.com','live.es','yahoo.com','yahoo.es','icloud.com','me.com',
      'mac.com','aol.com','protonmail.com','proton.me','tutanota.com','gmx.com','gmx.es'];
    $domain = strtolower(explode('@', $email)[1] ?? '');
    if (in_array($domain, $free_domains)) {
      $errors['email'] = 'Usa tu email corporativo, no un email personal.';
    }
  }

  if (strlen($empresa) < 2 || strlen($empresa) > 150) $errors['empresa'] = 'El nombre de empresa es obligatorio.';

  if (!preg_match('/^[ABCDEFGHJNPQRSUVW]\d{7}[0-9A-J]$/i', $cif)) {
    $errors['cif'] = 'El CIF no tiene el formato correcto (ej: B12345678).';
  }

  if (strlen($sector) < 2 || !in_array($sector, $sectors)) {
    $errors['sector'] = 'Selecciona un sector de la lista.';
  }

  if (empty($empleados) || !isset($plan_map[$empleados])) {
    $errors['empleados'] = 'Selecciona un plan para continuar.';
  }

  if (!$accept_privacy)  $errors['acceptTermsAndPrivacy']      = 'Debes aceptar la política de privacidad y los términos de uso.';
  if (!$accept_contract) $errors['acceptCompanyAdminContract'] = 'Debes aceptar el contrato de administrador para continuar.';

  if (empty($errors)) {
    $_SESSION['reg_attempts'][] = time();

    $plan = $plan_map[$empleados];

    // ---- Llamada a la API de app ----
    $api_payload = json_encode([
      'companyName'               => $empresa,
      'cif'                       => $cif,
      'sector'                    => $sector,
      'adminEmail'                => $email,
      'plan'                      => $plan,
      'billing'                   => $billing,
      'acceptTermsAndPrivacy'     => true,
      'acceptCompanyAdminContract'=> true,
    ], JSON_UNESCAPED_UNICODE);

    $api_ok = false;
    $api_error_msg = '';

    if (function_exists('curl_init')) {
      $ch = curl_init(API_REGISTER);
      curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $api_payload,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json', 'Accept: application/json'],
        CURLOPT_TIMEOUT        => 10,
        CURLOPT_SSL_VERIFYPEER => true,
      ]);
      $api_response = curl_exec($ch);
      $api_status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      $curl_error   = curl_error($ch);
      curl_close($ch);

      // Log para diagnóstico
      $log_line = date('Y-m-d H:i:s') . " | status={$api_status} | curl_err={$curl_error} | response=" . substr($api_response, 0, 500) . "\n";
      @file_put_contents(__DIR__ . '/data/api_log.txt', $log_line, FILE_APPEND | LOCK_EX);

      if ($api_status >= 200 && $api_status < 300) {
        $api_ok = true;
      } else {
        $body = json_decode($api_response, true);
        $api_error_msg = $body['message'] ?? $body['error'] ?? 'Error HTTP ' . $api_status;
        if ($curl_error) $api_error_msg = 'Error de conexión: ' . $curl_error;

        if ($api_status === 409) {
          $errors['email'] = 'Ya existe una cuenta con este email. <a href="' . APP_LOGIN_URL . '">Accede aquí →</a>';
        } else {
          $errors['api'] = $api_error_msg;
        }
      }
    }

    // ---- Fallback CSV (siempre, para auditoría) ----
    $csv_file = __DIR__ . '/data/registros.csv';
    if (!is_dir(__DIR__ . '/data')) @mkdir(__DIR__ . '/data', 0700, true);
    $csv_line = implode(';', [
      date('Y-m-d H:i:s'), $nombre, $email, $empresa, $cif,
      $sector, $empleados, $billing, $api_ok ? 'api_ok' : 'api_fail',
      $_SERVER['REMOTE_ADDR'] ?? ''
    ]) . "\n";
    @file_put_contents($csv_file, $csv_line, FILE_APPEND | LOCK_EX);

    // ---- Email admin (solo si API falla, para que no pierda el lead) ----
    if (!$api_ok && empty($errors['api']) === false) {
      $admin_body = "Lead no procesado por API — requiere atención manual\n\n"
        . "Nombre: {$nombre}\nEmail: {$email}\nEmpresa: {$empresa}\nCIF: {$cif}\n"
        . "Sector: {$sector}\nPlan: {$plan}\nBilling: {$billing}\n"
        . "Error API: {$api_error_msg}\nFecha: " . date('Y-m-d H:i:s') . "\n";
      @mail('info@eticalert.com', "⚠️ Lead sin procesar: {$empresa}", $admin_body,
        "From: no-reply@eticalert.com\r\nContent-Type: text/plain; charset=UTF-8\r\n");
    }

    if ($api_ok) {
      header('Location: /registro-confirmacion?empresa=' . urlencode($empresa));
      exit;
    }
  }
}

// Variables para la página
$page_title       = 'Activa tu canal de denuncias | EticAlert';
$page_description = 'Crea tu cuenta EticAlert y activa tu canal de denuncias en minutos. Cumple la Ley 2/2023.';
$page_canonical   = 'https://eticalert.com/registro';
include 'includes/header.php';

function field_error($field, $errors) {
  if (isset($errors[$field])) {
    echo '<p class="field-error">' . $errors[$field] . '</p>';
  }
}
function field_value($field, $default = '') {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    return htmlspecialchars($_POST[$field] ?? $default, ENT_QUOTES, 'UTF-8');
  }
  return $default;
}
?>

<main id="main-content">
  <div class="form-page">
    <div class="container">
      <div class="form-wrapper">

        <div class="form-card fade-up">

          <?php if ($submitted && isset($errors['api'])): ?>
          <div class="callout callout-error" role="alert" style="margin-bottom:1.5rem;">
            <p><strong>Error al crear la cuenta:</strong> <?= htmlspecialchars($errors['api']) ?></p>
            <p style="margin-top:0.5rem;font-size:0.875rem;">Si el problema persiste, escríbenos a <a href="mailto:info@eticalert.com" style="color:var(--accent);">info@eticalert.com</a></p>
          </div>
          <?php elseif ($submitted && !empty($errors)): ?>
          <div class="callout" role="alert" style="margin-bottom:1.5rem;">
            <p><strong>Revisa los campos marcados</strong> para continuar con el registro.</p>
          </div>
          <?php endif; ?>

          <form id="registro-form" method="POST" action="/registro" novalidate>
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token) ?>">
            <input type="hidden" name="empleados"  id="empleados-hidden" value="<?= field_value('empleados') ?>">
            <input type="hidden" name="billing"    id="billing-hidden"   value="<?= field_value('billing', 'monthly') ?>">
            <!-- Honeypot anti-bot (oculto con CSS) -->
            <div style="position:absolute;left:-9999px;opacity:0;pointer-events:none;" aria-hidden="true">
              <input type="text" name="website" tabindex="-1" autocomplete="off">
            </div>

            <!-- ========== PASO 1: Tus datos ========== -->
            <div class="form-step" id="step-1">

              <div class="step-indicator">
                <span class="step-label">Paso 1 de 2</span>
                <div class="step-progress-bar"><div class="step-progress-fill" style="width:50%"></div></div>
              </div>

              <h1>Crea tu canal de denuncias</h1>
              <p class="form-subtitle">Completa el formulario y recibirás acceso para configurar tu canal.</p>

              <div class="form-group">
                <label for="nombre">Nombre completo <span style="color:var(--accent);">*</span></label>
                <input type="text" id="nombre" name="nombre" required autocomplete="name"
                       placeholder="María García López"
                       value="<?= field_value('nombre') ?>"
                       class="<?= isset($errors['nombre']) ? 'error' : '' ?>">
                <?php field_error('nombre', $errors); ?>
              </div>

              <div class="form-group">
                <label for="email">Email corporativo <span style="color:var(--accent);">*</span></label>
                <input type="email" id="email" name="email" required autocomplete="email"
                       placeholder="maria@tuempresa.com"
                       value="<?= field_value('email') ?>"
                       class="<?= isset($errors['email']) ? 'error' : '' ?>">
                <?php field_error('email', $errors); ?>
              </div>

              <div class="form-group">
                <label for="empresa">Nombre de empresa <span style="color:var(--accent);">*</span></label>
                <input type="text" id="empresa" name="empresa" required autocomplete="organization"
                       placeholder="Empresa S.L."
                       value="<?= field_value('empresa') ?>"
                       class="<?= isset($errors['empresa']) ? 'error' : '' ?>">
                <?php field_error('empresa', $errors); ?>
              </div>

              <div class="form-group">
                <label for="cif">CIF <span style="color:var(--accent);">*</span></label>
                <input type="text" id="cif" name="cif" required autocomplete="off"
                       placeholder="B12345678"
                       value="<?= field_value('cif') ?>"
                       class="<?= isset($errors['cif']) ? 'error' : '' ?>">
                <?php field_error('cif', $errors); ?>
              </div>

              <!-- Sector buscador -->
              <div class="form-group">
                <label for="sector-input">Sector <span style="color:var(--accent);">*</span></label>
                <div class="sector-wrapper <?= isset($errors['sector']) ? 'error' : '' ?>">
                  <input type="text" id="sector-input" autocomplete="off"
                         placeholder="Buscar sector…"
                         value="<?= field_value('sector') ?>"
                         class="sector-search-input <?= isset($errors['sector']) ? 'error' : '' ?>">
                  <input type="hidden" id="sector" name="sector" value="<?= field_value('sector') ?>">
                  <ul class="sector-dropdown" id="sector-dropdown" role="listbox" hidden>
                    <?php foreach ($sectors as $s): ?>
                    <li role="option" data-value="<?= htmlspecialchars($s) ?>"><?= htmlspecialchars($s) ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <?php field_error('sector', $errors); ?>
              </div>

              <button type="button" id="btn-step1-next" class="btn btn-primary"
                      style="width:100%;justify-content:center;font-size:1rem;padding:16px 28px;">
                Siguiente →
              </button>

            </div><!-- /step-1 -->

            <!-- ========== PASO 2: Elegir plan ========== -->
            <div class="form-step" id="step-2" style="display:none;">

              <div class="step-indicator">
                <span class="step-label">Paso 2 de 2</span>
                <div class="step-progress-bar"><div class="step-progress-fill" style="width:100%"></div></div>
              </div>

              <h2 class="form-step2-title">Elige tu plan</h2>
              <p class="form-subtitle">Mostramos precios por segmento. Validaremos el tier final tras revisar el Informe de Plantilla Media durante la prueba de 15 días.</p>

              <div class="billing-toggle" style="justify-content:flex-start;margin-bottom:1.25rem;">
                <label id="lbl-monthly" class="active">Mensual</label>
                <label class="toggle-switch">
                  <input type="checkbox" id="billing-toggle-input">
                  <span class="toggle-slider"></span>
                </label>
                <label id="lbl-annual">Anual <span class="billing-badge">-20%</span></label>
              </div>

              <div class="plan-grid">
                <div class="plan-card <?= field_value('empleados') === '1-20'   ? 'selected' : '' ?>" data-value="1-20"
                     data-monthly="0 EUR/mes" data-annual="0 EUR/mes" data-plan="FREE">
                  <div class="plan-name">Free</div>
                  <div class="plan-price"><span class="plan-price-val">0 EUR/mes</span></div>
                  <div class="plan-range">Hasta 20 empleados</div>
                </div>
                <div class="plan-card <?= field_value('empleados') === '21-49'  ? 'selected' : '' ?>" data-value="21-49"
                     data-monthly="19 EUR/mes" data-annual="190 EUR/año" data-plan="BUSINESS">
                  <div class="plan-name">Business</div>
                  <div class="plan-price"><span class="plan-price-val">19 EUR/mes</span></div>
                  <div class="plan-range">De 21 a 49 empleados</div>
                </div>
                <div class="plan-card <?= field_value('empleados') === '50-150' ? 'selected' : '' ?>" data-value="50-150"
                     data-monthly="39 EUR/mes" data-annual="390 EUR/año" data-plan="COMPANY">
                  <div class="plan-name">Company</div>
                  <div class="plan-price"><span class="plan-price-val">39 EUR/mes</span></div>
                  <div class="plan-range">De 50 a 150 empleados</div>
                </div>
                <div class="plan-card <?= field_value('empleados') === '150+'   ? 'selected' : '' ?>" data-value="150+"
                     data-monthly="Consultar" data-annual="Consultar" data-plan="ENTERPRISE">
                  <div class="plan-name">Enterprise</div>
                  <div class="plan-price"><span class="plan-price-val">Consultar</span></div>
                  <div class="plan-range">Acuerdo comercial</div>
                </div>
              </div>
              <p id="plan-error" class="field-error" style="display:none;margin-bottom:1rem;"><?php if (isset($errors['empleados'])) echo htmlspecialchars($errors['empleados']); ?></p>

              <label class="form-checkbox <?= isset($errors['acceptTermsAndPrivacy']) ? 'error-label' : '' ?>" style="margin-top:1.25rem;">
                <input type="checkbox" id="cb-privacy" name="acceptTermsAndPrivacy" value="1" disabled
                       <?= (isset($_POST['acceptTermsAndPrivacy'])) ? 'checked' : '' ?>>
                <span>Acepto la <a href="/privacidad" target="_blank" class="doc-link" data-unlocks="cb-privacy" data-key="privacidad">política de privacidad</a> y los <a href="/legal" target="_blank" class="doc-link" data-unlocks="cb-privacy" data-key="legal">términos de uso</a> de EticAlert.</span>
              </label>
              <?php field_error('acceptTermsAndPrivacy', $errors); ?>

              <label class="form-checkbox <?= isset($errors['acceptCompanyAdminContract']) ? 'error-label' : '' ?>" style="margin-top:0.75rem;">
                <input type="checkbox" id="cb-contract" name="acceptCompanyAdminContract" value="1" disabled
                       <?= (isset($_POST['acceptCompanyAdminContract'])) ? 'checked' : '' ?>>
                <span>Acepto el <a href="/legal#contrato-administrador" target="_blank" class="doc-link" data-unlocks="cb-contract" data-key="contrato">contrato de administrador</a> como responsable del canal de denuncias de mi empresa.</span>
              </label>
              <?php field_error('acceptCompanyAdminContract', $errors); ?>

              <p class="doc-hint" id="hint-docs"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg> Abre los documentos enlazados para poder aceptar</p>

              <div class="form-step-nav" style="margin-top:1.5rem;">
                <button type="button" id="btn-step2-back" class="btn btn-secondary">← Volver</button>
                <button type="submit" class="btn btn-primary" style="font-size:1rem;padding:16px 28px;">
                  Iniciar prueba de 15 días →
                </button>
              </div>

              <div class="form-benefits" style="margin-top:1.5rem;">
                <div class="form-benefit">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                  Sin tarjeta de crédito
                </div>
                <div class="form-benefit">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                  Sin permanencia
                </div>
                <div class="form-benefit">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                  Soporte incluido en todos los planes
                </div>
              </div>

            </div><!-- /step-2 -->

          </form>
        </div>

        <!-- Información lateral -->
        <div class="form-info fade-up delay-2">

          <div class="form-info-card">
            <h3>¿Qué pasa después?</h3>
            <ol style="list-style:none;display:flex;flex-direction:column;gap:0.75rem;margin-top:0.75rem;">
              <li style="display:flex;gap:0.75rem;align-items:flex-start;font-size:0.9rem;color:var(--text-secondary);">
                <span style="background:var(--accent-subtle);border:1px solid var(--accent-border);color:var(--accent);font-size:0.75rem;font-weight:700;width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;">1</span>
                Recibes un email de confirmación con el acceso a la plataforma.
              </li>
              <li style="display:flex;gap:0.75rem;align-items:flex-start;font-size:0.9rem;color:var(--text-secondary);">
                <span style="background:var(--accent-subtle);border:1px solid var(--accent-border);color:var(--accent);font-size:0.75rem;font-weight:700;width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;">2</span>
                Configuras tu canal con el wizard guiado: logo, categorías, RSII.
              </li>
              <li style="display:flex;gap:0.75rem;align-items:flex-start;font-size:0.9rem;color:var(--text-secondary);">
                <span style="background:var(--accent-subtle);border:1px solid var(--accent-border);color:var(--accent);font-size:0.75rem;font-weight:700;width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;">3</span>
                Publicas la URL en tu web. Tu canal está operativo y cumples la ley.
              </li>
            </ol>
          </div>

          <div class="form-info-card">
            <h3>Seguridad y privacidad</h3>
            <p>Tus datos se tratan conforme al RGPD. Solo se utilizan para gestionar tu acceso a la plataforma. No compartimos información con terceros. <a href="/privacidad" style="color:var(--accent);">Leer política completa →</a></p>
          </div>

          <div class="form-info-card">
            <h3>¿Tienes preguntas?</h3>
            <p>Escríbenos a <a href="mailto:info@eticalert.com" style="color:var(--accent);">info@eticalert.com</a> y te respondemos en menos de 24 horas.</p>
          </div>

        </div>

      </div>
    </div>
  </div>
</main>

<script src="/js/registro.js?v=20260320a" defer></script>
<?php include 'includes/footer.php'; ?>
