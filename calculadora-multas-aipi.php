<?php
$page_title       = 'Calculadora de Multas AIPI 2026 | EticAlert';
$page_description = 'Calcula en segundos cuánto te puede sancionar la AIPI por no tener canal de denuncias. Multas de hasta 1.000.000€ según tipo de infracción.';
$page_canonical   = 'https://eticalert.com/calculadora-multas-aipi';
include 'includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Calculadora de multas AIPI — Canal de denuncias",
  "url": "https://eticalert.com/calculadora-multas-aipi",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Web",
  "description": "Herramienta gratuita para calcular el rango de sanción que puede imponer la AIPI por incumplir la obligación del canal de denuncias según la Ley 2/2023.",
  "offers": {"@type": "Offer", "price": "0", "priceCurrency": "EUR"},
  "publisher": {"@type": "Organization", "name": "EticAlert", "url": "https://eticalert.com"}
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cómo calcula la AIPI la cuantía de la multa?",
      "acceptedAnswer": {"@type": "Answer", "text": "La AIPI aplica el régimen sancionador del Título IX de la Ley 2/2023. La cuantía exacta dentro del rango se determina según la gravedad del daño causado, el beneficio obtenido, el grado de intencionalidad, la reincidencia y el tamaño de la empresa. Esta calculadora muestra el rango legal máximo y mínimo, no la cuantía exacta."}
    },
    {
      "@type": "Question",
      "name": "¿Las multas de la AIPI son acumulables?",
      "acceptedAnswer": {"@type": "Answer", "text": "Sí. La AIPI puede sancionar por cada infracción detectada de forma independiente. Si una empresa no tiene canal Y ha ejercido represalias contra un informante, puede recibir dos expedientes sancionadores distintos, con sus correspondientes multas acumuladas."}
    },
    {
      "@type": "Question",
      "name": "¿Puede el administrador de la empresa ser sancionado personalmente?",
      "acceptedAnswer": {"@type": "Answer", "text": "Sí. La Ley 2/2023 establece responsabilidad personal para los administradores y directivos cuando el incumplimiento sea consecuencia de su conducta dolosa o negligente. Las sanciones personales pueden alcanzar 300.000€ en infracciones muy graves, 200.000€ en graves y 25.000€ en leves."}
    },
    {
      "@type": "Question",
      "name": "¿Cuánto cuesta un canal de denuncias que cumpla la Ley 2/2023?",
      "acceptedAnswer": {"@type": "Answer", "text": "Con EticAlert, el canal de denuncias cuesta desde 9€/mes para empresas de hasta 20 empleados. El plan Company (50-150 empleados) cuesta 39€/mes. Frente a una multa grave de mínimo 100.001€, el coste de cumplir representa menos del 0,5% de la sanción mínima en ese rango."}
    },
    {
      "@type": "Question",
      "name": "¿Qué pasa si regularizo mi situación antes de que la AIPI inspeccione?",
      "acceptedAnswer": {"@type": "Answer", "text": "La regularización voluntaria antes de la apertura de un expediente sancionador es un factor atenuante que la AIPI puede tener en cuenta para reducir la cuantía de la multa. Sin embargo, no exime de la sanción si el incumplimiento ya se ha producido y existe constancia de él."}
    }
  ]
}
</script>

<style>
.calc-wrap {
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: 2rem;
  align-items: start;
}
@media (max-width: 860px) {
  .calc-wrap { grid-template-columns: 1fr; }
  .calc-result-sticky { position: static !important; }
}
.calc-section {
  background: var(--bg-card);
  border: 1px solid var(--border);
  border-radius: 12px;
  padding: 1.5rem;
  margin-bottom: 1.25rem;
}
.calc-section h3 {
  font-size: 0.9375rem;
  font-weight: 700;
  margin-bottom: 1rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.calc-check {
  display: flex;
  align-items: flex-start;
  gap: 0.75rem;
  padding: 0.75rem;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.15s;
  margin-bottom: 0.375rem;
}
.calc-check:hover { background: var(--bg-secondary); }
.calc-check input[type=checkbox] {
  width: 18px;
  height: 18px;
  min-width: 18px;
  margin-top: 2px;
  accent-color: var(--accent);
  cursor: pointer;
}
.calc-check-label { font-size: 0.9rem; line-height: 1.4; }
.calc-check-badge {
  font-size: 0.7rem;
  font-weight: 700;
  padding: 0.15rem 0.4rem;
  border-radius: 4px;
  white-space: nowrap;
}
.badge-muy-grave { background: rgba(239,68,68,0.15); color: #dc2626; }
.badge-grave     { background: rgba(245,158,11,0.15); color: #d97706; }
.badge-leve      { background: rgba(107,114,128,0.15); color: #6b7280; }

.calc-result-sticky {
  position: sticky;
  top: 100px;
}
.calc-result {
  background: var(--bg-card);
  border: 1px solid var(--border);
  border-radius: 16px;
  padding: 1.75rem;
}
.result-empty {
  text-align: center;
  padding: 2rem 0;
  color: var(--text-muted);
}
.result-empty svg { opacity: 0.25; display: block; margin: 0 auto 1rem; }
.result-severity {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 0.8125rem;
  font-weight: 700;
  padding: 0.25rem 0.75rem;
  border-radius: 99px;
  margin-bottom: 1rem;
}
.sev-muy-grave { background: rgba(239,68,68,0.12); color: #dc2626; }
.sev-grave     { background: rgba(245,158,11,0.12); color: #d97706; }
.sev-leve      { background: rgba(107,114,128,0.12); color: #6b7280; }

.result-range {
  font-size: 1.625rem;
  font-weight: 800;
  line-height: 1.2;
  margin-bottom: 0.375rem;
}
.result-range-sub {
  font-size: 0.8125rem;
  color: var(--text-muted);
  margin-bottom: 1.25rem;
}
.result-vs {
  background: rgba(74,222,128,0.08);
  border: 1px solid var(--accent-border);
  border-radius: 10px;
  padding: 1rem;
  margin: 1.25rem 0;
}
.result-vs-ratio {
  font-size: 1.375rem;
  font-weight: 800;
  color: var(--accent);
  line-height: 1.2;
}
.result-vs-label {
  font-size: 0.8125rem;
  color: var(--text-secondary);
  margin-top: 0.25rem;
}
.result-personal {
  background: var(--bg-secondary);
  border-radius: 8px;
  padding: 0.875rem;
  font-size: 0.875rem;
  margin-bottom: 1.25rem;
}
.infraction-list {
  list-style: none;
  padding: 0;
  margin: 0 0 1.25rem;
}
.infraction-list li {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 0.8125rem;
  color: var(--text-secondary);
  padding: 0.25rem 0;
  border-bottom: 1px solid var(--border);
}
.infraction-list li:last-child { border-bottom: none; }
</style>

<main id="main-content">
  <section style="padding:120px 0 40px;">
    <div class="container">

      <div style="max-width:680px;margin-bottom:2.5rem;" class="fade-up">
        <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(239,68,68,0.1);border:1px solid rgba(239,68,68,0.25);border-radius:99px;padding:0.25rem 0.875rem;font-size:0.8125rem;font-weight:600;color:#dc2626;margin-bottom:1rem;">
          Herramienta gratuita
        </div>
        <h1 style="font-size:clamp(1.625rem,4vw,2.25rem);line-height:1.2;margin-bottom:1rem;">
          Calculadora de multas AIPI 2026
        </h1>
        <p style="font-size:1.0625rem;color:var(--text-secondary);max-width:560px;">
          Selecciona los incumplimientos que tiene tu empresa y calcula al instante el rango de sanción que puede aplicar la AIPI según la <a href="/blog/ley-2-2023-canal-de-denuncias" style="color:var(--accent);">Ley 2/2023</a>.
        </p>
        <p style="font-size:0.8125rem;color:var(--text-muted);margin-top:0.5rem;">
          Esta calculadora es orientativa. Las cuantías exactas las fija la AIPI según las circunstancias de cada caso.
        </p>
      </div>

      <div class="calc-wrap fade-up">

        <!-- ── Columna izquierda: formulario ── -->
        <div>

          <!-- Sección 1: Empleados -->
          <div class="calc-section">
            <h3>① ¿Cuántos empleados tiene tu empresa?</h3>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(130px,1fr));gap:0.625rem;" id="emp-selector">
              <?php
              $emp_options = [
                ['value'=>'<20',   'label'=>'Menos de 20'],
                ['value'=>'20-49', 'label'=>'20 – 49'],
                ['value'=>'50-149','label'=>'50 – 149'],
                ['value'=>'150+',  'label'=>'150 o más'],
              ];
              foreach ($emp_options as $opt): ?>
              <label class="emp-btn" data-value="<?= $opt['value'] ?>" style="display:block;border:1px solid var(--border);border-radius:8px;padding:0.625rem 0.75rem;text-align:center;cursor:pointer;font-size:0.875rem;transition:all 0.15s;user-select:none;">
                <input type="radio" name="empleados" value="<?= $opt['value'] ?>" style="display:none;">
                <?= $opt['label'] ?>
              </label>
              <?php endforeach; ?>
            </div>
            <p id="emp-warning" style="display:none;font-size:0.8125rem;color:var(--text-muted);margin-top:0.75rem;background:var(--bg-secondary);padding:0.625rem;border-radius:6px;">
              ⚠️ Con menos de 50 empleados, la obligación general no aplica — <strong>salvo que operes en un sector regulado</strong> (financiero, auditoría, notarías, PBC…). <a href="/cumples" style="color:var(--accent);">Comprueba si tu empresa está obligada →</a>
            </p>
          </div>

          <!-- Sección 2: Incumplimientos muy graves -->
          <div class="calc-section">
            <h3>② Infracciones muy graves <span style="font-weight:400;font-size:0.8125rem;color:var(--text-muted);">(multa empresa: 600.001 – 1.000.000 €)</span></h3>
            <?php
            $muy_graves = [
              ['id'=>'no-canal',     'label'=>'Mi empresa no tiene canal de denuncias operativo.'],
              ['id'=>'represalias',  'label'=>'He tomado medidas contra un empleado que denunció (despido, traslado, sanción…).'],
              ['id'=>'conf-breach',  'label'=>'Se ha revelado la identidad del informante a personas no autorizadas.'],
            ];
            foreach ($muy_graves as $item): ?>
            <label class="calc-check" for="<?= $item['id'] ?>">
              <input type="checkbox" id="<?= $item['id'] ?>" class="infraction-check" data-severity="muy-grave" data-label="<?= htmlspecialchars($item['label']) ?>">
              <span class="calc-check-label">
                <?= $item['label'] ?>
                <span class="calc-check-badge badge-muy-grave" style="display:inline-block;margin-left:0.375rem;">Muy grave</span>
              </span>
            </label>
            <?php endforeach; ?>
          </div>

          <!-- Sección 3: Infracciones graves -->
          <div class="calc-section">
            <h3>③ Infracciones graves <span style="font-weight:400;font-size:0.8125rem;color:var(--text-muted);">(multa empresa: 100.001 – 600.000 €)</span></h3>
            <?php
            $graves = [
              ['id'=>'no-anonimo',  'label'=>'El canal no permite comunicaciones anónimas cuando el informante lo solicita.'],
              ['id'=>'no-rsii',     'label'=>'No he designado RSII o no lo he notificado a la AIPI.'],
              ['id'=>'no-plazo',    'label'=>'No acuso recibo en 7 días hábiles o no respondo en 3 meses.'],
              ['id'=>'no-registro', 'label'=>'No tengo libro-registro de comunicaciones (art. 26 Ley 2/2023).'],
              ['id'=>'no-externo',  'label'=>'No acepto denuncias por escrito, verbalmente O en persona (los 3 canales son obligatorios).'],
            ];
            foreach ($graves as $item): ?>
            <label class="calc-check" for="<?= $item['id'] ?>">
              <input type="checkbox" id="<?= $item['id'] ?>" class="infraction-check" data-severity="grave" data-label="<?= htmlspecialchars($item['label']) ?>">
              <span class="calc-check-label">
                <?= $item['label'] ?>
                <span class="calc-check-badge badge-grave" style="display:inline-block;margin-left:0.375rem;">Grave</span>
              </span>
            </label>
            <?php endforeach; ?>
          </div>

          <!-- Sección 4: Infracciones leves -->
          <div class="calc-section">
            <h3>④ Infracciones leves <span style="font-weight:400;font-size:0.8125rem;color:var(--text-muted);">(multa empresa: hasta 100.000 €)</span></h3>
            <?php
            $leves = [
              ['id'=>'no-url',       'label'=>'La URL del canal no está publicada de forma visible en mi web corporativa.'],
              ['id'=>'no-politica',  'label'=>'La Política del Sistema Interno de Información no existe o no está actualizada.'],
              ['id'=>'no-formacion', 'label'=>'No he informado a los trabajadores de la existencia y uso del canal.'],
            ];
            foreach ($leves as $item): ?>
            <label class="calc-check" for="<?= $item['id'] ?>">
              <input type="checkbox" id="<?= $item['id'] ?>" class="infraction-check" data-severity="leve" data-label="<?= htmlspecialchars($item['label']) ?>">
              <span class="calc-check-label">
                <?= $item['label'] ?>
                <span class="calc-check-badge badge-leve" style="display:inline-block;margin-left:0.375rem;">Leve</span>
              </span>
            </label>
            <?php endforeach; ?>
          </div>

          <!-- Sección 5: Responsabilidad personal -->
          <div class="calc-section">
            <h3>⑤ ¿Eres administrador, consejero o directivo responsable del incumplimiento?</h3>
            <label class="calc-check" for="admin-check">
              <input type="checkbox" id="admin-check">
              <span class="calc-check-label">Sí — quiero ver también la exposición personal a sanción.</span>
            </label>
          </div>

        </div>

        <!-- ── Columna derecha: resultado sticky ── -->
        <div class="calc-result-sticky">
          <div class="calc-result" id="result-box">

            <!-- Estado vacío -->
            <div class="result-empty" id="result-empty">
              <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><circle cx="12" cy="16" r="0.5" fill="currentColor"/>
              </svg>
              <p style="font-size:0.9375rem;font-weight:600;margin-bottom:0.25rem;">Selecciona incumplimientos</p>
              <p style="font-size:0.8125rem;margin:0;">El resultado aparecerá aquí al instante.</p>
            </div>

            <!-- Resultado activo (oculto hasta selección) -->
            <div id="result-content" style="display:none;">
              <p style="font-size:0.75rem;font-weight:600;text-transform:uppercase;letter-spacing:0.05em;color:var(--text-muted);margin-bottom:0.75rem;">Resultado estimado</p>

              <div id="result-severity-badge"></div>

              <p style="font-size:0.8125rem;color:var(--text-muted);margin-bottom:0.5rem;">Multa empresa (rango legal)</p>
              <div class="result-range" id="result-range-empresa">—</div>
              <div class="result-range-sub" id="result-range-sub">Ley 2/2023, Título IX</div>

              <div class="result-personal" id="result-personal" style="display:none;">
                <span style="font-weight:600;">Exposición personal del directivo:</span>
                <span id="result-range-admin"></span>
              </div>

              <div style="margin-bottom:1rem;">
                <p style="font-size:0.75rem;font-weight:600;text-transform:uppercase;letter-spacing:0.05em;color:var(--text-muted);margin-bottom:0.5rem;">Infracciones detectadas</p>
                <ul class="infraction-list" id="infraction-list"></ul>
              </div>

              <div class="result-vs" id="result-vs">
                <p style="font-size:0.75rem;font-weight:600;text-transform:uppercase;letter-spacing:0.05em;color:var(--text-muted);margin-bottom:0.5rem;">vs. coste de cumplir</p>
                <div class="result-vs-ratio" id="result-vs-ratio"></div>
                <div class="result-vs-label" id="result-vs-label"></div>
              </div>

              <a href="/registro" class="btn btn-primary" style="display:block;text-align:center;margin-top:1.25rem;">Activar mi canal de denuncias →</a>
              <a href="/precios" style="display:block;text-align:center;font-size:0.8125rem;color:var(--text-muted);margin-top:0.625rem;">Ver planes desde 9€/mes</a>
            </div>

          </div>

          <!-- Nota legal -->
          <p style="font-size:0.75rem;color:var(--text-muted);margin-top:1rem;line-height:1.5;">
            Calculadora orientativa basada en los arts. 63-68 de la Ley 2/2023. La cuantía exacta la determina la AIPI caso por caso. No constituye asesoramiento jurídico.
          </p>
        </div>

      </div><!-- .calc-wrap -->

    </div>
  </section>

  <!-- CÓMO FUNCIONA LA CALCULADORA -->
  <section style="background:var(--bg-secondary);border-top:1px solid var(--border);padding:60px 0;">
    <div class="container" style="max-width:800px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">Cómo determina la AIPI la cuantía de la multa</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;">Esta calculadora muestra el rango legal. La AIPI gradúa la cuantía exacta según estos criterios (art. 66 Ley 2/2023):</p>

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1rem;margin-bottom:2rem;">
        <?php
        $criteria = [
          ['icono'=>'📊','titulo'=>'Gravedad del daño','desc'=>'¿Se produjo perjuicio real al informante o a la organización?'],
          ['icono'=>'💰','titulo'=>'Beneficio obtenido','desc'=>'¿Se evitó algún coste o se obtuvo ventaja por el incumplimiento?'],
          ['icono'=>'🎯','titulo'=>'Intencionalidad','desc'=>'¿El incumplimiento fue deliberado o negligente?'],
          ['icono'=>'🔄','titulo'=>'Reincidencia','desc'=>'¿Ha habido infracciones previas de la Ley 2/2023 o similares?'],
          ['icono'=>'📏','titulo'=>'Tamaño empresa','desc'=>'El volumen de negocio puede modular la cuantía.'],
          ['icono'=>'✅','titulo'=>'Regularización','desc'=>'Corregir la situación antes de la resolución es un atenuante.'],
        ];
        foreach ($criteria as $c): ?>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:10px;padding:1.25rem;">
          <div style="font-size:1.375rem;margin-bottom:0.5rem;"><?= $c['icono'] ?></div>
          <h3 style="font-size:0.9375rem;margin-bottom:0.375rem;"><?= $c['titulo'] ?></h3>
          <p style="font-size:0.8125rem;color:var(--text-secondary);margin:0;"><?= $c['desc'] ?></p>
        </div>
        <?php endforeach; ?>
      </div>

      <div style="background:rgba(74,222,128,0.08);border:1px solid var(--accent-border);border-radius:12px;padding:1.25rem;">
        <p style="margin:0;font-size:0.9375rem;"><strong>Nota importante:</strong> las infracciones son acumulables. Si tu empresa no tiene canal <em>y</em> ha ejercido represalias, la AIPI puede instruir dos expedientes independientes. El total de sanciones podría superar el millón de euros.</p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section style="padding:60px 0;">
    <div class="container" style="max-width:800px;">
      <h2 style="font-size:1.5rem;margin-bottom:2rem;">Preguntas frecuentes sobre las sanciones de la AIPI</h2>

      <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;">
        <summary style="font-weight:600;cursor:pointer;">¿Cómo calcula la AIPI la cuantía de la multa?</summary>
        <p style="margin:0.75rem 0 0;color:var(--text-secondary);">La AIPI aplica el régimen sancionador del Título IX de la Ley 2/2023. La cuantía exacta dentro del rango se determina según la gravedad del daño causado, el beneficio obtenido, el grado de intencionalidad, la reincidencia y el tamaño de la empresa. Esta calculadora muestra el rango legal máximo y mínimo, no la cuantía exacta.</p>
      </details>
      <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;">
        <summary style="font-weight:600;cursor:pointer;">¿Las multas de la AIPI son acumulables?</summary>
        <p style="margin:0.75rem 0 0;color:var(--text-secondary);">Sí. La AIPI puede sancionar por cada infracción detectada de forma independiente. Si una empresa no tiene canal Y ha ejercido represalias contra un informante, puede recibir dos expedientes sancionadores distintos, con sus correspondientes multas acumuladas.</p>
      </details>
      <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;">
        <summary style="font-weight:600;cursor:pointer;">¿Puede el administrador de la empresa ser sancionado personalmente?</summary>
        <p style="margin:0.75rem 0 0;color:var(--text-secondary);">Sí. La Ley 2/2023 establece responsabilidad personal para los administradores y directivos cuando el incumplimiento sea consecuencia de su conducta dolosa o negligente. Las sanciones personales pueden alcanzar 300.000€ en infracciones muy graves, 200.000€ en graves y 25.000€ en leves.</p>
      </details>
      <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;">
        <summary style="font-weight:600;cursor:pointer;">¿Qué pasa si regularizo mi situación antes de que la AIPI inspeccione?</summary>
        <p style="margin:0.75rem 0 0;color:var(--text-secondary);">La regularización voluntaria antes de la apertura de un expediente sancionador es un factor atenuante que la AIPI puede tener en cuenta para reducir la cuantía de la multa. Sin embargo, no exime de la sanción si el incumplimiento ya se ha producido y existe constancia de él.</p>
      </details>
      <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;">
        <summary style="font-weight:600;cursor:pointer;">¿Cuánto cuesta un canal de denuncias que cumpla la Ley 2/2023?</summary>
        <p style="margin:0.75rem 0 0;color:var(--text-secondary);">Con EticAlert, el canal de denuncias cuesta desde 9€/mes para empresas de hasta 20 empleados. El plan Company (50-150 empleados) cuesta 39€/mes. Frente a una multa grave de mínimo 100.001€, el coste de cumplir representa menos del 0,5% de la sanción mínima en ese rango.</p>
      </details>

      <div style="margin-top:2.5rem;text-align:center;">
        <p style="margin-bottom:1rem;color:var(--text-secondary);">¿Quieres ver la tabla de sanciones completa?</p>
        <a href="/sanciones-canal-de-denuncias" style="color:var(--accent);font-weight:600;">Ver desglose completo de sanciones →</a>
        &nbsp;·&nbsp;
        <a href="/blog/checklist-auditoria-aipi" style="color:var(--accent);font-weight:600;">Qué verifica la AIPI en una inspección →</a>
      </div>
    </div>
  </section>

</main>

<script>
(function () {
  // ── Datos de sanciones ──
  const SANCTIONS = {
    'muy-grave': {
      empresaMin: 600001, empresaMax: 1000000,
      adminMax: 300000,
      label: 'Infracción muy grave',
      cssClass: 'sev-muy-grave',
      emoji: '🔴'
    },
    'grave': {
      empresaMin: 100001, empresaMax: 600000,
      adminMax: 200000,
      label: 'Infracción grave',
      cssClass: 'sev-grave',
      emoji: '🟡'
    },
    'leve': {
      empresaMin: 1, empresaMax: 100000,
      adminMax: 25000,
      label: 'Infracción leve',
      cssClass: 'sev-leve',
      emoji: '🟢'
    }
  };

  // EticAlert plan costs (monthly)
  const ETICALERT_PLANS = [
    { label: 'Starter (hasta 20 emp.)', monthly: 9 },
    { label: 'Business (21-49 emp.)', monthly: 19 },
    { label: 'Company (50-150 emp.)', monthly: 39 }
  ];

  const severityOrder = ['muy-grave', 'grave', 'leve'];

  function formatEuro(n) {
    if (n === 1) return '1 €';
    return n.toLocaleString('es-ES') + ' €';
  }

  function getWorstSeverity(checked) {
    for (const sev of severityOrder) {
      if (checked.some(c => c.severity === sev)) return sev;
    }
    return null;
  }

  function getPlanForEmployees(empVal) {
    if (empVal === '<20' || empVal === null) return ETICALERT_PLANS[0];
    if (empVal === '20-49') return ETICALERT_PLANS[1];
    return ETICALERT_PLANS[2];
  }

  function update() {
    const checks = Array.from(document.querySelectorAll('.infraction-check:checked'));
    const checked = checks.map(el => ({
      severity: el.dataset.severity,
      label: el.dataset.label
    }));

    const adminIncluded = document.getElementById('admin-check').checked;

    const empSelected = document.querySelector('input[name="empleados"]:checked');
    const empVal = empSelected ? empSelected.value : null;

    // Show/hide employer warning
    const empWarning = document.getElementById('emp-warning');
    empWarning.style.display = (empVal === '<20') ? 'block' : 'none';

    const empty = document.getElementById('result-empty');
    const content = document.getElementById('result-content');

    if (checked.length === 0) {
      empty.style.display = '';
      content.style.display = 'none';
      return;
    }

    empty.style.display = 'none';
    content.style.display = '';

    const worst = getWorstSeverity(checked);
    const sanction = SANCTIONS[worst];

    // Severity badge
    document.getElementById('result-severity-badge').innerHTML =
      `<div class="result-severity ${sanction.cssClass}">${sanction.emoji} ${sanction.label}</div>`;

    // Range empresa
    document.getElementById('result-range-empresa').textContent =
      sanction.empresaMin === 1
        ? `Hasta ${formatEuro(sanction.empresaMax)}`
        : `${formatEuro(sanction.empresaMin)} – ${formatEuro(sanction.empresaMax)}`;

    document.getElementById('result-range-sub').textContent =
      `Multa para la empresa · Ley 2/2023, arts. 63-68`;

    // Personal liability
    const personalBox = document.getElementById('result-personal');
    if (adminIncluded) {
      personalBox.style.display = '';
      document.getElementById('result-range-admin').textContent =
        ` hasta ${formatEuro(sanction.adminMax)} adicionales`;
    } else {
      personalBox.style.display = 'none';
    }

    // Infraction list
    const ul = document.getElementById('infraction-list');
    ul.innerHTML = checked.map(c => {
      const s = SANCTIONS[c.severity];
      return `<li><span class="calc-check-badge ${c.severity === 'muy-grave' ? 'badge-muy-grave' : c.severity === 'grave' ? 'badge-grave' : 'badge-leve'}">${s.emoji}</span> ${c.label}</li>`;
    }).join('');

    // vs EticAlert cost
    const plan = getPlanForEmployees(empVal);
    const minFine = sanction.empresaMin === 1 ? 10000 : sanction.empresaMin; // practical leve minimum
    const yearsEquivalent = Math.round(minFine / (plan.monthly * 12));

    document.getElementById('result-vs-ratio').textContent =
      yearsEquivalent >= 100
        ? `+${yearsEquivalent} años de EticAlert`
        : `${yearsEquivalent} años de EticAlert`;

    document.getElementById('result-vs-label').textContent =
      `La multa mínima equivale a ${yearsEquivalent} años del plan ${plan.label} (${plan.monthly * 12}€/año).`;

  }

  // ── Event listeners ──
  document.querySelectorAll('.infraction-check, #admin-check').forEach(el => {
    el.addEventListener('change', update);
  });

  // Employee selector (visual toggle)
  document.querySelectorAll('.emp-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      document.querySelectorAll('.emp-btn').forEach(b => {
        b.style.background = '';
        b.style.borderColor = '';
        b.style.fontWeight = '';
        b.style.color = '';
      });
      this.style.background = 'rgba(74,222,128,0.12)';
      this.style.borderColor = 'var(--accent)';
      this.style.fontWeight = '600';
      this.querySelector('input[type=radio]').checked = true;
      update();
    });
  });

})();
</script>

<?php include 'includes/footer.php'; ?>
