<?php
// ============================================================
// EticAlert — registro.php
// Procesamiento del formulario de registro de leads
// ============================================================

$errors   = [];
$success  = false;
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($submitted) {
  // Sanitizar y validar campos
  $nombre   = trim(htmlspecialchars($_POST['nombre']   ?? '', ENT_QUOTES, 'UTF-8'));
  $email    = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
  $empresa  = trim(htmlspecialchars($_POST['empresa']  ?? '', ENT_QUOTES, 'UTF-8'));
  $cif      = trim(htmlspecialchars($_POST['cif']      ?? '', ENT_QUOTES, 'UTF-8'));
  $empleados = trim(htmlspecialchars($_POST['empleados'] ?? '', ENT_QUOTES, 'UTF-8'));
  $telefono = trim(htmlspecialchars($_POST['telefono'] ?? '', ENT_QUOTES, 'UTF-8'));
  $privacidad = isset($_POST['privacidad']);

  // Validaciones
  if (empty($nombre)) {
    $errors['nombre'] = 'El nombre es obligatorio.';
  }

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Introduce un email corporativo válido.';
  }

  if (empty($empresa)) {
    $errors['empresa'] = 'El nombre de empresa es obligatorio.';
  }

  if (empty($cif)) {
    $errors['cif'] = 'El CIF es obligatorio.';
  }

  if (empty($empleados)) {
    $errors['empleados'] = 'Selecciona el número de empleados.';
  }

  if (!$privacidad) {
    $errors['privacidad'] = 'Debes aceptar la política de privacidad para continuar.';
  }

  if (empty($errors)) {
    // ---- Enviar email de notificación al admin ----
    $admin_email   = 'info@eticalert.com'; // cambiar por el email real
    $subject       = "Nuevo registro EticAlert: {$empresa}";
    $email_headers = "From: no-reply@eticalert.com\r\nContent-Type: text/plain; charset=UTF-8\r\n";
    $body = "Nuevo registro en EticAlert\n\n"
          . "Nombre: {$nombre}\n"
          . "Email: {$email}\n"
          . "Empresa: {$empresa}\n"
          . "CIF: " . ($cif ?: '—') . "\n"
          . "Empleados: {$empleados}\n"
          . "Teléfono: " . ($telefono ?: '—') . "\n"
          . "Fecha: " . date('Y-m-d H:i:s') . "\n"
          . "IP: " . ($_SERVER['REMOTE_ADDR'] ?? '—') . "\n";

    @mail($admin_email, $subject, $body, $email_headers);

    // ---- Email de confirmación al usuario ----
    $confirm_subject = 'Tu canal de denuncias EticAlert está en camino';
    $confirm_body    = "Hola {$nombre},\n\n"
                     . "Hemos recibido tu solicitud de registro para {$empresa}.\n\n"
                     . "En menos de 24 horas recibirás las instrucciones para acceder a\n"
                     . "app.eticalert.com y configurar tu canal de denuncias.\n\n"
                     . "Si tienes alguna duda, escríbenos a info@eticalert.com.\n\n"
                     . "El equipo de EticAlert\n"
                     . "https://eticalert.com";

    @mail($email, $confirm_subject, $confirm_body, "From: EticAlert <no-reply@eticalert.com>\r\nContent-Type: text/plain; charset=UTF-8\r\n");

    // ---- Guardar en CSV de backup ----
    $csv_file = __DIR__ . '/data/registros.csv';
    if (!is_dir(__DIR__ . '/data')) {
      @mkdir(__DIR__ . '/data', 0700, true);
    }
    $csv_line = implode(';', [
      date('Y-m-d H:i:s'),
      $nombre, $email, $empresa, $cif, $empleados, $telefono,
      $_SERVER['REMOTE_ADDR'] ?? ''
    ]) . "\n";
    @file_put_contents($csv_file, $csv_line, FILE_APPEND | LOCK_EX);

    // ---- Redirigir a confirmación ----
    header('Location: /registro-confirmacion?empresa=' . urlencode($empresa));
    exit;
  }
}

// Variables para la página
$page_title       = 'Activa tu canal de denuncias | EticAlert';
$page_description = 'Crea tu cuenta EticAlert y activa tu canal de denuncias en minutos. Cumple la Ley 2/2023 desde 39€/mes.';
$page_canonical   = 'https://eticalert.com/registro';
include 'includes/header.php';

// Helper para mostrar errores
function field_error($field, $errors) {
  if (isset($errors[$field])) {
    echo '<p class="field-error">' . htmlspecialchars($errors[$field]) . '</p>';
  }
}

// Helper para conservar valores en caso de error
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

        <!-- Formulario -->
        <div class="form-card fade-up">

          <?php if ($submitted && !empty($errors)): ?>
          <div class="callout" role="alert" style="margin-bottom:1.5rem;">
            <p><strong>Revisa los campos marcados</strong> para continuar con el registro.</p>
          </div>
          <?php endif; ?>

          <form id="registro-form" method="POST" action="/registro" novalidate>

            <!-- El plan elegido en el paso 2 rellena este campo oculto -->
            <input type="hidden" name="empleados" id="empleados-hidden" value="<?= field_value('empleados') ?>">

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

              <div class="form-group">
                <label for="telefono">Teléfono <span style="color:var(--text-muted);font-weight:400;">(opcional)</span></label>
                <input type="tel" id="telefono" name="telefono" autocomplete="tel"
                       placeholder="+34 600 000 000"
                       value="<?= field_value('telefono') ?>">
              </div>

              <button type="button" id="btn-step1-next" class="btn btn-primary" style="width:100%;justify-content:center;font-size:1rem;padding:16px 28px;">
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

              <div class="plan-grid">
                <div class="plan-card <?= field_value('empleados') === '1-20'   ? 'selected' : '' ?>" data-value="1-20">
                  <div class="plan-name">Free</div>
                  <div class="plan-price">0 EUR/mes</div>
                  <div class="plan-range">Hasta 20 empleados</div>
                </div>
                <div class="plan-card <?= field_value('empleados') === '21-49'  ? 'selected' : '' ?>" data-value="21-49">
                  <div class="plan-name">Business</div>
                  <div class="plan-price">19 EUR/mes</div>
                  <div class="plan-range">De 21 a 49 empleados</div>
                </div>
                <div class="plan-card <?= field_value('empleados') === '50-150' ? 'selected' : '' ?>" data-value="50-150">
                  <div class="plan-name">Company</div>
                  <div class="plan-price">39 EUR/mes</div>
                  <div class="plan-range">De 50 a 150 empleados</div>
                </div>
                <div class="plan-card <?= field_value('empleados') === '150+'   ? 'selected' : '' ?>" data-value="150+">
                  <div class="plan-name">Enterprise</div>
                  <div class="plan-price">Precio a medida</div>
                  <div class="plan-range">Acuerdo comercial</div>
                </div>
              </div>
              <p id="plan-error" class="field-error" style="display:none;margin-bottom:1rem;"><?php if (isset($errors['empleados'])) echo htmlspecialchars($errors['empleados']); ?></p>

              <label class="form-checkbox <?= isset($errors['privacidad']) ? 'error-label' : '' ?>">
                <input type="checkbox" name="privacidad" value="1"
                       <?= (isset($_POST['privacidad']) && $_SERVER['REQUEST_METHOD'] === 'POST') ? 'checked' : '' ?>>
                <span>Acepto la <a href="/privacidad" target="_blank">política de privacidad</a> y los <a href="/legal" target="_blank">términos de uso</a> de EticAlert.</span>
              </label>
              <?php field_error('privacidad', $errors); ?>

              <div class="form-step-nav">
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

<script src="/js/registro.js?v=20260319c" defer></script>
<?php include 'includes/footer.php'; ?>
