<?php
$page_title       = '¿Estás obligado a tener canal de denuncias? Compruébalo en 60 segundos | EticAlert';
$page_description = 'Responde 3 preguntas y descubre si tu empresa está legalmente obligada a tener canal de denuncias por la Ley 2/2023, sector, o financiación pública. Gratis, sin registro.';
$page_canonical   = 'https://eticalert.com/cumples';
include 'includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Inicio","item":"https://eticalert.com/"},
    {"@type":"ListItem","position":2,"name":"¿Cumples la Ley 2/2023?","item":"https://eticalert.com/cumples"}
  ]
}
</script>

<main id="main-content">

  <!-- HERO -->
  <section style="background:var(--bg-secondary);padding:100px 0 56px;border-bottom:1px solid var(--border-subtle);">
    <div class="container" style="max-width:760px;text-align:center;">
      <span class="blog-badge badge-marco-legal" style="margin-bottom:1.25rem;display:inline-block;">Ley 2/2023 · AIPI operativa</span>
      <h1 style="font-size:clamp(1.75rem,4vw,2.625rem);line-height:1.2;margin-bottom:1rem;">¿Está tu empresa obligada a tener canal de denuncias?</h1>
      <p style="font-size:1.125rem;color:var(--text-secondary);max-width:620px;margin:0 auto 2rem;">3 preguntas. 60 segundos. Sabrás con certeza si debes cumplir la Ley 2/2023 — y qué hacer si es así.</p>
      <a href="#comprobador" class="btn btn-primary btn-lg">Comprobar ahora →</a>
    </div>
  </section>

  <!-- COMPROBADOR INTERACTIVO -->
  <section id="comprobador" style="padding:64px 0 80px;">
    <div class="container" style="max-width:700px;">

      <!-- Progress -->
      <div class="step-indicator" id="quiz-progress" style="margin-bottom:2.5rem;">
        <span class="step-label" id="progress-label">Paso 1 de 3</span>
        <div class="step-progress-bar"><div class="step-progress-fill" id="progress-fill" style="width:33%"></div></div>
      </div>

      <!-- ===== STEP 1: TAMAÑO ===== -->
      <div id="step-1" class="quiz-step">
        <p style="font-size:0.8125rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-muted);margin-bottom:0.625rem;">Criterio 1 · Tamaño</p>
        <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">¿Cuántos trabajadores tiene tu empresa?</h2>
        <p style="color:var(--text-secondary);margin-bottom:1.75rem;">Media de los últimos 12 meses, incluidos a tiempo parcial de forma proporcional.</p>
        <div style="display:flex;flex-direction:column;gap:0.875rem;">
          <button class="quiz-option" onclick="selectOption(1,'obligado','tamaño — 50 o más trabajadores')">
            <span class="quiz-option-icon">👥</span>
            <span class="quiz-option-text"><strong>50 o más trabajadores</strong></span>
            <span class="quiz-option-badge obligado-badge">OBLIGADO</span>
          </button>
          <button class="quiz-option" onclick="nextStep(2)">
            <span class="quiz-option-icon">👤</span>
            <span class="quiz-option-text"><strong>Menos de 50 trabajadores</strong></span>
            <span class="quiz-option-arrow">›</span>
          </button>
        </div>
      </div>

      <!-- ===== STEP 2: SECTOR ===== -->
      <div id="step-2" class="quiz-step" style="display:none;">
        <p style="font-size:0.8125rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-muted);margin-bottom:0.625rem;">Criterio 2 · Sector</p>
        <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">¿Opera tu empresa en alguno de estos sectores?</h2>
        <p style="color:var(--text-secondary);margin-bottom:1.75rem;">Estas actividades crean obligación <strong>independientemente del número de empleados.</strong></p>
        <div style="display:flex;flex-direction:column;gap:0.875rem;">
          <button class="quiz-option" onclick="selectOption(2,'obligado','sector — PBC / Ley 10/2010')">
            <span class="quiz-option-icon">🏦</span>
            <span class="quiz-option-text">
              <strong>Prevención del blanqueo (PBC · Ley 10/2010)</strong>
              <span class="quiz-option-sub">Asesorías, notarías, inmobiliarias, casinos, cripto, auditores…</span>
            </span>
            <span class="quiz-option-badge obligado-badge">OBLIGADO</span>
          </button>
          <button class="quiz-option" onclick="selectOption(2,'obligado','sector — finanzas reguladas UE')">
            <span class="quiz-option-icon">💳</span>
            <span class="quiz-option-text">
              <strong>Finanzas reguladas UE</strong>
              <span class="quiz-option-sub">Gestoras, fintech, corredurías de seguros, entidades de pago, banca…</span>
            </span>
            <span class="quiz-option-badge obligado-badge">OBLIGADO</span>
          </button>
          <button class="quiz-option" onclick="selectOption(2,'obligado','sector — transporte regulado')">
            <span class="quiz-option-icon">✈️</span>
            <span class="quiz-option-text">
              <strong>Transporte regulado</strong>
              <span class="quiz-option-sub">Aerolíneas con AOC, navieras SOLAS, ferroviarias reguladas…</span>
            </span>
            <span class="quiz-option-badge obligado-badge">OBLIGADO</span>
          </button>
          <button class="quiz-option" onclick="selectOption(2,'obligado','sector — medioambiente industrial')">
            <span class="quiz-option-icon">🌿</span>
            <span class="quiz-option-text">
              <strong>Medioambiente industrial</strong>
              <span class="quiz-option-sub">Instalaciones SEVESO III, AAI, operadores EU ETS, gestores de residuos…</span>
            </span>
            <span class="quiz-option-badge obligado-badge">OBLIGADO</span>
          </button>
          <button class="quiz-option quiz-option-neutral" onclick="nextStep(3)">
            <span class="quiz-option-icon">—</span>
            <span class="quiz-option-text"><strong>Ninguno de los anteriores</strong></span>
            <span class="quiz-option-arrow">›</span>
          </button>
        </div>
      </div>

      <!-- ===== STEP 3: PÚBLICA / SUBVENCIONES ===== -->
      <div id="step-3" class="quiz-step" style="display:none;">
        <p style="font-size:0.8125rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-muted);margin-bottom:0.625rem;">Criterio 3 · Naturaleza pública o fondos públicos</p>
        <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">¿Tu entidad es pública o recibe financiación pública?</h2>
        <p style="color:var(--text-secondary);margin-bottom:1.75rem;">Estas condiciones crean obligación <strong>sin umbral de tamaño.</strong></p>
        <div style="display:flex;flex-direction:column;gap:0.875rem;">
          <button class="quiz-option" onclick="selectOption(3,'obligado','entidad pública')">
            <span class="quiz-option-icon">🏛️</span>
            <span class="quiz-option-text">
              <strong>Es una entidad del sector público</strong>
              <span class="quiz-option-sub">Administración, organismo autónomo, universidad pública, municipio &gt;10.000 hab.…</span>
            </span>
            <span class="quiz-option-badge obligado-badge">OBLIGADO</span>
          </button>
          <button class="quiz-option" onclick="selectOption(3,'obligado','partido / sindicato / fundación con fondos públicos')">
            <span class="quiz-option-icon">🏢</span>
            <span class="quiz-option-text">
              <strong>Partido político, sindicato, organización empresarial o fundación</strong>
              <span class="quiz-option-sub">Que reciban o gestionen fondos públicos.</span>
            </span>
            <span class="quiz-option-badge obligado-badge">OBLIGADO</span>
          </button>
          <button class="quiz-option" onclick="selectOption(3,'recomendado','receptor de subvenciones o fondos europeos')">
            <span class="quiz-option-icon">🇪🇺</span>
            <span class="quiz-option-text">
              <strong>Recibimos subvenciones o fondos europeos</strong>
              <span class="quiz-option-sub">NGEU, FEDER, FSE+, Plan de Recuperación… Las convocatorias exigen medidas antifraude.</span>
            </span>
            <span class="quiz-option-badge recomendado-badge">RECOMENDADO</span>
          </button>
          <button class="quiz-option quiz-option-neutral" onclick="selectOption(3,'no-obligado','ninguno de los criterios aplica')">
            <span class="quiz-option-icon">—</span>
            <span class="quiz-option-text"><strong>No, ninguna de las anteriores</strong></span>
            <span class="quiz-option-arrow">›</span>
          </button>
        </div>
      </div>

      <!-- ===== RESULTADO: OBLIGADO ===== -->
      <div id="result-obligado" style="display:none;">
        <div style="background:rgba(239,68,68,0.07);border:1.5px solid rgba(239,68,68,0.35);border-radius:var(--radius-lg);padding:2rem;margin-bottom:1.5rem;">
          <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:1rem;">
            <span style="font-size:1.75rem;">⚠️</span>
            <span style="background:#dc2626;color:#fff;font-size:0.8125rem;font-weight:800;padding:0.3rem 0.875rem;border-radius:100px;letter-spacing:0.04em;">ESTÁS OBLIGADO</span>
          </div>
          <h2 style="font-size:1.375rem;margin-bottom:0.625rem;">Tu empresa debe tener canal de denuncias operativo</h2>
          <p style="color:var(--text-secondary);margin-bottom:0.5rem;">Motivo: <strong id="result-reason" style="color:var(--text-primary);"></strong></p>
          <p style="color:var(--text-secondary);font-size:0.9375rem;">La Ley 2/2023 está en vigor y la AIPI sanciona. El incumplimiento puede suponer multas de hasta <strong>1.000.000 €</strong> y responsabilidad personal de administradores.</p>
        </div>
        <div style="background:var(--bg-card);border:1px solid var(--border-accent);border-radius:var(--radius-lg);padding:1.75rem;margin-bottom:1.25rem;">
          <h3 style="font-size:1.125rem;margin-bottom:0.5rem;">Activa tu canal hoy mismo</h3>
          <p style="color:var(--text-secondary);font-size:0.9375rem;margin-bottom:1.25rem;">Con EticAlert tienes un canal operativo y conforme en menos de 5 minutos. Sin instalaciones, sin configuración técnica.</p>
          <div style="display:flex;gap:0.875rem;flex-wrap:wrap;">
            <a href="/registro" class="btn btn-primary">Activar canal — desde 9€/mes →</a>
            <a href="/precios" class="btn btn-secondary">Ver planes</a>
          </div>
        </div>
        <p style="text-align:center;font-size:0.875rem;color:var(--text-muted);">
          <button onclick="resetQuiz()" style="background:none;border:none;color:var(--accent);cursor:pointer;font-size:0.875rem;text-decoration:underline;">Volver a empezar</button>
        </p>
      </div>

      <!-- ===== RESULTADO: RECOMENDADO ===== -->
      <div id="result-recomendado" style="display:none;">
        <div style="background:rgba(245,158,11,0.07);border:1.5px solid rgba(245,158,11,0.35);border-radius:var(--radius-lg);padding:2rem;margin-bottom:1.5rem;">
          <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:1rem;">
            <span style="font-size:1.75rem;">📋</span>
            <span style="background:#d97706;color:#fff;font-size:0.8125rem;font-weight:800;padding:0.3rem 0.875rem;border-radius:100px;letter-spacing:0.04em;">MUY RECOMENDADO</span>
          </div>
          <h2 style="font-size:1.375rem;margin-bottom:0.625rem;">No estás en el umbral legal directo, pero las condiciones de tus subvenciones probablemente lo exigen</h2>
          <p style="color:var(--text-secondary);font-size:0.9375rem;">Los fondos europeos (NGEU, FEDER, FSE+) y muchas convocatorias nacionales y autonómicas requieren que los beneficiarios dispongan de medidas antifraude que incluyen un canal de denuncia. Revisa el pliego o resolución de cada convocatoria.</p>
        </div>
        <div style="background:var(--bg-card);border:1px solid var(--border-accent);border-radius:var(--radius-lg);padding:1.75rem;margin-bottom:1.25rem;">
          <h3 style="font-size:1.125rem;margin-bottom:0.5rem;">Actívalo ahora y evita problemas</h3>
          <p style="color:var(--text-secondary);font-size:0.9375rem;margin-bottom:1.25rem;">Desde 9€/mes tienes el canal activo y puedes acreditar el cumplimiento ante la entidad concedente en cualquier momento.</p>
          <div style="display:flex;gap:0.875rem;flex-wrap:wrap;">
            <a href="/registro" class="btn btn-primary">Activar canal — desde 9€/mes →</a>
            <a href="/precios" class="btn btn-secondary">Ver planes</a>
          </div>
        </div>
        <p style="text-align:center;font-size:0.875rem;color:var(--text-muted);">
          <button onclick="resetQuiz()" style="background:none;border:none;color:var(--accent);cursor:pointer;font-size:0.875rem;text-decoration:underline;">Volver a empezar</button>
        </p>
      </div>

      <!-- ===== RESULTADO: NO OBLIGADO ===== -->
      <div id="result-no-obligado" style="display:none;">
        <div style="background:var(--bg-secondary);border:1.5px solid var(--border-medium);border-radius:var(--radius-lg);padding:2rem;margin-bottom:1.5rem;">
          <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:1rem;">
            <span style="font-size:1.75rem;">✅</span>
            <span style="background:var(--text-muted);color:#fff;font-size:0.8125rem;font-weight:800;padding:0.3rem 0.875rem;border-radius:100px;letter-spacing:0.04em;">DE MOMENTO NO</span>
          </div>
          <h2 style="font-size:1.375rem;margin-bottom:0.625rem;">Según tus respuestas, no estás obligado ahora mismo</h2>
          <p style="color:var(--text-secondary);font-size:0.9375rem;">Si en algún momento superas los 50 trabajadores, cambias de sector o recibes subvenciones públicas, la obligación se activa de forma inmediata.</p>
        </div>
        <div style="background:var(--bg-card);border:1px solid var(--border-subtle);border-radius:var(--radius-lg);padding:1.75rem;margin-bottom:1.25rem;">
          <h3 style="font-size:1.125rem;margin-bottom:0.5rem;">Considera activarlo igualmente</h3>
          <p style="color:var(--text-secondary);font-size:0.9375rem;margin-bottom:1.25rem;">Muchos clientes corporativos y procesos de homologación ya exigen que sus proveedores dispongan de canal de denuncias, independientemente del tamaño. El coste es mínimo desde 9€/mes.</p>
          <div style="display:flex;gap:0.875rem;flex-wrap:wrap;">
            <a href="/precios" class="btn btn-primary">Ver planes →</a>
            <a href="/canal-de-denuncias" class="btn btn-secondary">Saber más</a>
          </div>
        </div>
        <p style="text-align:center;font-size:0.875rem;color:var(--text-muted);">
          <button onclick="resetQuiz()" style="background:none;border:none;color:var(--accent);cursor:pointer;font-size:0.875rem;text-decoration:underline;">Volver a empezar</button>
        </p>
      </div>

    </div>
  </section>

  <!-- NOTA LEGAL -->
  <section style="padding:0 0 16px;">
    <div class="container" style="max-width:700px;">
      <p style="font-size:0.8125rem;color:var(--text-muted);border-top:1px solid var(--border-subtle);padding-top:1.25rem;">Este comprobador es orientativo y no constituye asesoramiento jurídico. La determinación exacta de las obligaciones depende de la actividad concreta de cada organización. En caso de duda, consulta con un asesor legal especializado.</p>
    </div>
  </section>

  <!-- CONTENIDO ESTÁTICO INDEXABLE -->
  <section style="padding:48px 0 80px;background:var(--bg-secondary);border-top:1px solid var(--border-subtle);">
    <div class="container" style="max-width:760px;">
      <h2 style="font-size:1.5rem;margin-bottom:1.5rem;">Cómo funciona la obligación del canal de denuncias en España</h2>

      <p>La <a href="/blog/ley-2-2023-canal-de-denuncias" style="color:var(--accent);">Ley 2/2023, de 20 de febrero</a>, transpone la Directiva Europea 2019/1937 (Directiva Whistleblowing) al ordenamiento jurídico español. Establece tres criterios independientes de obligación: el tamaño de la plantilla, el sector de actividad y la naturaleza pública o el uso de fondos públicos. Cumplir cualquiera de los tres genera la obligación de disponer de un canal de denuncias operativo.</p>

      <h3 style="font-size:1.125rem;margin:2rem 0 0.75rem;">Criterio 1: Tamaño — 50 o más trabajadores</h3>
      <p>El umbral general es de <strong>50 trabajadores</strong> o más, calculado como media del año natural incluyendo trabajadores a tiempo parcial de forma proporcional, trabajadores fijos-discontinuos durante los períodos de actividad y empleados cedidos por ETT computados en la empresa usuaria. La obligación nace en el momento en que se supera el umbral, no al cierre del ejercicio fiscal. No hay período de gracia desde que se cruza el límite.</p>
      <p>Las empresas de entre 50 y 249 trabajadores podían compartir canal con otras entidades del mismo grupo hasta el 1 de diciembre de 2023. A partir de esa fecha, cada empresa debe disponer de su propio canal individual o contratar uno gestionado por un proveedor externo.</p>

      <h3 style="font-size:1.125rem;margin:2rem 0 0.75rem;">Criterio 2: Sector regulado — obligación sin umbral de empleados</h3>
      <p>La Directiva Whistleblowing incluye en su ámbito a todas las entidades que operan en sectores cubiertos por el derecho de la Unión Europea sobre mercados financieros, servicios financieros, productos y mercados financieros, prevención del blanqueo de capitales y la financiación del terrorismo, seguridad del transporte, protección del medio ambiente, seguridad nuclear y protección radiológica, inocuidad de los alimentos y piensos, bienestar animal, salud pública, protección de los consumidores y protección de la intimidad y los datos personales.</p>
      <p>En la práctica, esto afecta —entre otros— a todos los <strong>sujetos obligados por la Ley 10/2010</strong> de prevención del blanqueo (asesorías, notarías, gestorías, inmobiliarias, joyerías, auditores, entidades de crédito, aseguradoras, casinos) y a cualquier empresa bajo supervisión de la CNMV, el Banco de España o la DGSFP, sin importar el número de empleados. Un exchange de criptomonedas con 8 personas puede estar plenamente obligado si está registrado como PSAV en el Banco de España.</p>

      <h3 style="font-size:1.125rem;margin:2rem 0 0.75rem;">Criterio 3: Sector público y entidades con financiación pública</h3>
      <p>Todas las <strong>administraciones públicas</strong> —estatales, autonómicas y locales— están obligadas a disponer de canal de denuncias con independencia de su tamaño. Los municipios de más de 10.000 habitantes tienen obligación expresa desde la entrada en vigor de la ley. Los partidos políticos, sindicatos, organizaciones empresariales y fundaciones que reciban o gestionen fondos públicos también están obligados.</p>
      <p>Los beneficiarios de fondos europeos (NGEU, FEDER, FSE+, Fondo de Cohesión) están sujetos a las condiciones antifraude de la Comisión Europea, que en la mayoría de los programas incluyen la existencia de canales de denuncia como medida preventiva exigible.</p>

      <h3 style="font-size:1.125rem;margin:2rem 0 0.75rem;">Qué puede ocurrir si no se cumple</h3>
      <p>La <strong>Autoridad Independiente de Protección del Informante (AIPI)</strong> es el organismo supervisor y sancionador estatal, plenamente operativa desde febrero de 2026. La no disposición de canal de denuncias cuando existe obligación legal está tipificada como infracción <em>muy grave</em>, con multa de hasta <strong>1.000.000 de euros</strong> para personas jurídicas y hasta 300.000 euros para personas físicas. Las infracciones graves —canal existente pero que incumple los requisitos de la ley— pueden sancionarse con hasta 600.000 euros. Además, la infracción muy grave conlleva la prohibición de contratar con el sector público durante un período de hasta tres años.</p>
      <p>Si quieres calcular tu exposición exacta según el tipo de infracción y el tamaño de tu empresa, usa nuestra <a href="/calculadora-multas-aipi" style="color:var(--accent);">calculadora de multas AIPI →</a></p>

      <p style="margin-top:2rem;font-size:0.875rem;color:var(--text-muted);">Más información: <a href="/blog/ley-2-2023-canal-de-denuncias" style="color:var(--accent);">Guía completa de la Ley 2/2023</a> · <a href="/blog/obligados-menos-50-empleados" style="color:var(--accent);">¿Obligado con menos de 50 empleados?</a> · <a href="/calculadora-multas-aipi" style="color:var(--accent);">Calculadora de multas AIPI</a></p>
    </div>
  </section>

</main>

<style>
.quiz-option {
  display: flex;
  align-items: center;
  gap: 1rem;
  width: 100%;
  background: var(--bg-card);
  border: 1.5px solid var(--border-subtle);
  border-radius: var(--radius-lg);
  padding: 1.125rem 1.25rem;
  cursor: pointer;
  text-align: left;
  transition: border-color 0.18s, background 0.18s, transform 0.12s;
  color: var(--text-primary);
  font-family: inherit;
}
.quiz-option:hover {
  border-color: var(--accent-border);
  background: var(--accent-subtle);
  transform: translateY(-1px);
}
.quiz-option-neutral:hover {
  border-color: var(--border-medium);
  background: var(--bg-secondary);
  transform: none;
}
.quiz-option-icon {
  font-size: 1.25rem;
  flex-shrink: 0;
  width: 28px;
  text-align: center;
}
.quiz-option-text {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 0.2rem;
}
.quiz-option-sub {
  font-size: 0.8125rem;
  color: var(--text-secondary);
  font-weight: 400;
}
.obligado-badge {
  flex-shrink: 0;
  background: #dc2626;
  color: #fff;
  font-size: 0.6875rem;
  font-weight: 800;
  padding: 0.2rem 0.625rem;
  border-radius: 100px;
  letter-spacing: 0.04em;
  white-space: nowrap;
}
.recomendado-badge {
  flex-shrink: 0;
  background: #d97706;
  color: #fff;
  font-size: 0.6875rem;
  font-weight: 800;
  padding: 0.2rem 0.625rem;
  border-radius: 100px;
  letter-spacing: 0.04em;
  white-space: nowrap;
}
.quiz-option-arrow {
  flex-shrink: 0;
  font-size: 1.25rem;
  color: var(--text-muted);
}
</style>

<script>
(function () {
  var steps = [1, 2, 3];
  var progressLabels = ['Paso 1 de 3', 'Paso 2 de 3', 'Paso 3 de 3'];
  var progressWidths = ['33%', '66%', '100%'];

  window.nextStep = function (n) {
    steps.forEach(function (s) {
      document.getElementById('step-' + s).style.display = 'none';
    });
    document.getElementById('step-' + n).style.display = 'block';
    document.getElementById('progress-label').textContent = progressLabels[n - 1];
    document.getElementById('progress-fill').style.width = progressWidths[n - 1];
    document.getElementById('comprobador').scrollIntoView({ behavior: 'smooth', block: 'start' });
  };

  window.selectOption = function (step, result, reason) {
    steps.forEach(function (s) {
      document.getElementById('step-' + s).style.display = 'none';
    });
    document.getElementById('quiz-progress').style.display = 'none';

    if (result === 'obligado') {
      document.getElementById('result-reason').textContent = reason.charAt(0).toUpperCase() + reason.slice(1) + '.';
      document.getElementById('result-obligado').style.display = 'block';
    } else if (result === 'recomendado') {
      document.getElementById('result-recomendado').style.display = 'block';
    } else {
      document.getElementById('result-no-obligado').style.display = 'block';
    }
    document.getElementById('comprobador').scrollIntoView({ behavior: 'smooth', block: 'start' });
  };

  window.resetQuiz = function () {
    ['result-obligado', 'result-recomendado', 'result-no-obligado'].forEach(function (id) {
      document.getElementById(id).style.display = 'none';
    });
    steps.forEach(function (s) {
      document.getElementById('step-' + s).style.display = 'none';
    });
    document.getElementById('quiz-progress').style.display = 'flex';
    document.getElementById('step-1').style.display = 'block';
    document.getElementById('progress-label').textContent = 'Paso 1 de 3';
    document.getElementById('progress-fill').style.width = '33%';
    document.getElementById('comprobador').scrollIntoView({ behavior: 'smooth', block: 'start' });
  };
})();
</script>

<?php include 'includes/footer.php'; ?>
