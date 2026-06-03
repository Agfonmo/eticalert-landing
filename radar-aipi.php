<?php
$page_title       = 'Radar AIPI 2026 — Seguimiento de la Autoridad Independiente de Protección del Informante';
$page_description = 'Todas las novedades de la AIPI: publicaciones oficiales, circulares, expedientes sancionadores, hitos regulatorios y fechas clave. El tracker más completo en español. Actualizado regularmente.';
$page_canonical   = 'https://eticalert.com/radar-aipi';
include 'includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Qué es la AIPI?",
      "acceptedAnswer": {"@type": "Answer", "text": "La Autoridad Independiente de Protección del Informante (AIPI) es un organismo administrativo independiente creado por la Ley 2/2023 para supervisar el cumplimiento del sistema de protección de informantes en España. Tiene personalidad jurídica propia, no depende del Gobierno y tiene plenas competencias sancionadoras sobre empresas y administraciones públicas."}
    },
    {
      "@type": "Question",
      "name": "¿Cuándo empezó a sancionar la AIPI?",
      "acceptedAnswer": {"@type": "Answer", "text": "La AIPI está plenamente operativa desde febrero de 2026, cuando abrió su sede electrónica y activó el formulario de notificación del RSII. Desde esa fecha puede iniciar expedientes sancionadores de oficio o a instancia de parte. El plazo para notificar al RSII finalizó el 10 de abril de 2026."}
    },
    {
      "@type": "Question",
      "name": "¿Dónde puedo consultar las resoluciones de la AIPI?",
      "acceptedAnswer": {"@type": "Answer", "text": "Las resoluciones de la AIPI se publican en su sede electrónica (aipi.gob.es) y en el BOE cuando así lo determina la normativa. Este radar recoge y resume las publicaciones más relevantes para que no tengas que monitorizar fuentes oficiales por tu cuenta."}
    },
    {
      "@type": "Question",
      "name": "¿Qué diferencia hay entre la AIPI y el canal de denuncias externo?",
      "acceptedAnswer": {"@type": "Answer", "text": "El canal de denuncias interno es el que implanta la empresa para recibir comunicaciones de sus empleados. El canal externo es la AIPI misma: cualquier informante puede denunciar directamente ante la AIPI si la empresa no tiene canal, si el canal no funciona correctamente, o si ha sufrido represalias. La existencia de un canal interno correcto no elimina el canal externo; coexisten."}
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Inicio","item":"https://eticalert.com/"},
    {"@type":"ListItem","position":2,"name":"Radar AIPI","item":"https://eticalert.com/radar-aipi"}
  ]
}
</script>

<style>
.radar-timeline { position: relative; padding-left: 2rem; }
.radar-timeline::before {
  content: '';
  position: absolute;
  left: 7px;
  top: 0;
  bottom: 0;
  width: 2px;
  background: var(--border);
}
.timeline-item {
  position: relative;
  margin-bottom: 2rem;
}
.timeline-dot {
  position: absolute;
  left: -2rem;
  top: 4px;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  border: 2px solid var(--bg-primary);
  z-index: 1;
}
.tl-red    { background: #dc2626; }
.tl-orange { background: #d97706; }
.tl-green  { background: #16a34a; }
.tl-blue   { background: #2563eb; }
.tl-gray   { background: #6b7280; border: 2px dashed #6b7280; background: var(--bg-primary); }

.timeline-date {
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: var(--text-muted);
  margin-bottom: 0.25rem;
}
.timeline-title {
  font-size: 1rem;
  font-weight: 700;
  margin-bottom: 0.375rem;
}
.timeline-body {
  font-size: 0.9rem;
  color: var(--text-secondary);
  line-height: 1.6;
}
.timeline-tag {
  display: inline-block;
  font-size: 0.7rem;
  font-weight: 700;
  padding: 0.15rem 0.5rem;
  border-radius: 4px;
  margin-top: 0.375rem;
}
.tag-ley    { background: rgba(37,99,235,0.1); color: #2563eb; }
.tag-aipi   { background: rgba(239,68,68,0.1); color: #dc2626; }
.tag-plazo  { background: rgba(245,158,11,0.1); color: #d97706; }
.tag-futuro { background: rgba(107,114,128,0.1); color: #6b7280; }
.tag-stats  { background: rgba(74,222,128,0.1); color: #16a34a; }

.stat-card {
  background: var(--bg-card);
  border: 1px solid var(--border);
  border-radius: 12px;
  padding: 1.25rem;
  text-align: center;
}
.stat-value {
  font-size: 1.75rem;
  font-weight: 800;
  line-height: 1.1;
  margin-bottom: 0.375rem;
}
</style>

<main id="main-content">

  <!-- HERO -->
  <section style="padding:120px 0 60px;background:var(--bg-secondary);border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <div class="fade-up" style="display:flex;align-items:center;gap:0.75rem;margin-bottom:1.25rem;">
        <span style="display:inline-flex;align-items:center;gap:0.375rem;background:rgba(239,68,68,0.1);border:1px solid rgba(239,68,68,0.25);border-radius:99px;padding:0.25rem 0.875rem;font-size:0.8125rem;font-weight:600;color:#dc2626;">
          <span style="width:7px;height:7px;border-radius:50%;background:#dc2626;animation:pulse 2s infinite;"></span>
          Actualizado junio 2026
        </span>
      </div>
      <h1 class="fade-up" style="font-size:clamp(1.75rem,4vw,2.5rem);line-height:1.2;margin-bottom:1rem;">
        Radar AIPI — Todo lo que necesitas saber sobre la Autoridad Independiente de Protección del Informante
      </h1>
      <p class="fade-up" style="font-size:1.0625rem;color:var(--text-secondary);max-width:700px;margin-bottom:2rem;">
        Cronología completa de la AIPI: hitos legislativos, fechas clave, publicaciones oficiales y próximos movimientos regulatorios. Actualizado por el equipo de EticAlert con cada novedad relevante.
      </p>
      <div class="fade-up" style="display:flex;flex-wrap:wrap;gap:0.75rem;">
        <a href="#timeline" style="color:var(--accent);font-weight:600;font-size:0.9375rem;">Ver cronología →</a>
        <span style="color:var(--border);">|</span>
        <a href="#que-es-aipi" style="color:var(--text-secondary);font-size:0.9375rem;">¿Qué es la AIPI?</a>
        <span style="color:var(--border);">|</span>
        <a href="#proximos-hitos" style="color:var(--text-secondary);font-size:0.9375rem;">Próximos hitos</a>
        <span style="color:var(--border);">|</span>
        <a href="#estadisticas" style="color:var(--text-secondary);font-size:0.9375rem;">Estadísticas</a>
      </div>
    </div>
  </section>

  <!-- KPI BAR -->
  <section style="padding:40px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:1rem;">
        <div class="stat-card">
          <div class="stat-value" style="color:#dc2626;">1.000.000 €</div>
          <div style="font-size:0.8125rem;color:var(--text-secondary);">Multa máxima por infracción muy grave</div>
        </div>
        <div class="stat-card">
          <div class="stat-value">~130.000</div>
          <div style="font-size:0.8125rem;color:var(--text-secondary);">Empresas obligadas en España (est.)</div>
        </div>
        <div class="stat-card">
          <div class="stat-value" style="color:var(--accent);">Feb 2026</div>
          <div style="font-size:0.8125rem;color:var(--text-secondary);">AIPI plenamente operativa</div>
        </div>
        <div class="stat-card">
          <div class="stat-value">10 abr 2026</div>
          <div style="font-size:0.8125rem;color:var(--text-secondary);">Plazo notificación RSII (vencido)</div>
        </div>
        <div class="stat-card">
          <div class="stat-value" style="color:#d97706;">3 años</div>
          <div style="font-size:0.8125rem;color:var(--text-secondary);">Prohibición contratar con AAPP (infr. grave)</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ¿QUÉ ES LA AIPI? -->
  <section id="que-es-aipi" style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:1rem;">¿Qué es la AIPI y qué puede hacer?</h2>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">
        <div>
          <p style="color:var(--text-secondary);margin-bottom:1rem;">La <strong>Autoridad Independiente de Protección del Informante</strong> es un organismo de derecho público con plena autonomía funcional, creado por la <a href="/blog/ley-2-2023-canal-de-denuncias" style="color:var(--accent);">Ley 2/2023</a>. No depende de ningún ministerio ni del Gobierno.</p>
          <p style="color:var(--text-secondary);">Tiene jurisdicción sobre el <strong>sector privado</strong> (empresas con 50+ empleados y sujetos obligados) y sobre la <strong>Administración General del Estado</strong>. Las CCAA y entidades locales tienen sus propios órganos de supervisión equivalentes.</p>
        </div>
        <div>
          <h3 style="font-size:0.9375rem;font-weight:700;margin-bottom:0.875rem;">Competencias de la AIPI</h3>
          <?php
          $powers = [
            ['📋', 'Recibir denuncias del canal externo'],
            ['🔍', 'Iniciar inspecciones de oficio'],
            ['📂', 'Instruir expedientes sancionadores'],
            ['💶', 'Imponer multas de hasta 1.000.000 €'],
            ['🚫', 'Proponer la prohibición de contratar con el sector público'],
            ['📰', 'Publicar resoluciones en los casos más graves'],
            ['📊', 'Emitir informes anuales al Parlamento'],
          ];
          foreach ($powers as $p): ?>
          <div style="display:flex;align-items:flex-start;gap:0.5rem;padding:0.375rem 0;border-bottom:1px solid var(--border);font-size:0.875rem;color:var(--text-secondary);">
            <span><?= $p[0] ?></span> <span><?= $p[1] ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- CRONOLOGÍA -->
  <section id="timeline" style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">Cronología completa: de la directiva europea a hoy</h2>
      <p style="color:var(--text-secondary);margin-bottom:3rem;">Todos los hitos legislativos y operativos de la AIPI y el marco normativo español de protección del informante.</p>

      <div class="radar-timeline">

        <?php
        $events = [
          [
            'fecha'  => 'Octubre 2019',
            'titulo' => 'La UE aprueba la Directiva Whistleblowing',
            'body'   => 'El Parlamento Europeo y el Consejo aprueban la Directiva (UE) 2019/1937 relativa a la protección de las personas que informen sobre infracciones del Derecho de la Unión. Los Estados miembros tienen hasta diciembre de 2021 para transponerla.',
            'tag'    => ['ley', 'Legislación UE'],
            'dot'    => 'tl-blue',
          ],
          [
            'fecha'  => 'Diciembre 2021',
            'titulo' => 'España incumple el plazo de transposición',
            'body'   => 'La fecha límite de transposición de la Directiva Whistleblowing pasa sin que España haya aprobado la ley nacional. La Comisión Europea abre un expediente de infracción contra España.',
            'tag'    => ['plazo', 'Hito legislativo'],
            'dot'    => 'tl-orange',
          ],
          [
            'fecha'  => '20 febrero 2023',
            'titulo' => 'Publicación de la Ley 2/2023 en el BOE',
            'body'   => 'España transpone la Directiva Whistleblowing con la Ley 2/2023, de 20 de febrero, reguladora de la protección de las personas que informen sobre infracciones normativas y de lucha contra la corrupción. Entrada en vigor: 13 de marzo de 2023.',
            'tag'    => ['ley', 'Ley 2/2023'],
            'dot'    => 'tl-blue',
          ],
          [
            'fecha'  => '13 marzo 2023',
            'titulo' => 'Entrada en vigor de la Ley 2/2023',
            'body'   => 'La ley entra en vigor. Las entidades del sector público y las grandes empresas del sector privado (250+ empleados) quedan inmediatamente obligadas. Las empresas de 50-249 empleados tienen un período de adaptación adicional.',
            'tag'    => ['ley', 'Entrada en vigor'],
            'dot'    => 'tl-blue',
          ],
          [
            'fecha'  => 'Junio 2023',
            'titulo' => 'Primer plazo para empresas de 50-249 empleados',
            'body'   => 'Las empresas privadas con entre 50 y 249 empleados debían haber implantado el canal de denuncias. El período de gracia informal se alargó en la práctica por la tardanza en la constitución de la AIPI.',
            'tag'    => ['plazo', 'Plazo sector privado'],
            'dot'    => 'tl-orange',
          ],
          [
            'fecha'  => '2024',
            'titulo' => 'Constitución formal de la AIPI',
            'body'   => 'La AIPI queda formalmente constituida como organismo independiente. Sin embargo, su operatividad plena —incluyendo sede electrónica y formularios— no se activa hasta 2026.',
            'tag'    => ['aipi', 'AIPI'],
            'dot'    => 'tl-red',
          ],
          [
            'fecha'  => 'Febrero 2026',
            'titulo' => 'AIPI plenamente operativa: sede electrónica activa',
            'body'   => 'La AIPI activa su sede electrónica en aipi.gob.es. Los responsables de sistema (RSII) ya pueden ser notificados oficialmente. Las empresas que aún no tienen canal operativo están en riesgo inmediato de expediente sancionador. La AIPI puede actuar de oficio o por denuncia de informantes.',
            'tag'    => ['aipi', 'Hito crítico'],
            'dot'    => 'tl-red',
          ],
          [
            'fecha'  => '10 abril 2026',
            'titulo' => 'Vencimiento del plazo para notificar al RSII',
            'body'   => 'La AIPI fijó el 10 de abril de 2026 como fecha límite para que las entidades obligadas notificaran la designación de su Responsable del Sistema Interno de Información. Las empresas que no notificaron antes de esa fecha pueden ser sancionadas por infracción grave (100.001–600.000 €).',
            'tag'    => ['plazo', 'Plazo vencido'],
            'dot'    => 'tl-orange',
          ],
          [
            'fecha'  => 'Junio 2026',
            'titulo' => 'Primeros expedientes sancionadores conocidos',
            'body'   => 'La AIPI ha comenzado a instruir los primeros expedientes sancionadores. Se esperan las primeras resoluciones públicas en el segundo semestre de 2026, lo que generará jurisprudencia administrativa sobre qué constituye un canal "suficiente".',
            'tag'    => ['aipi', 'En curso'],
            'dot'    => 'tl-red',
          ],
          [
            'fecha'  => '2026 — Próximo',
            'titulo' => 'Primer informe anual de la AIPI al Parlamento',
            'body'   => 'La Ley 2/2023 obliga a la AIPI a presentar un informe anual al Congreso de los Diputados con estadísticas de comunicaciones recibidas, expedientes instruidos y sanciones impuestas. Este primer informe dará una imagen real del cumplimiento en España.',
            'tag'    => ['futuro', 'Próximo hito'],
            'dot'    => 'tl-gray',
          ],
          [
            'fecha'  => '2027 — Previsto',
            'titulo' => 'Posible revisión del umbral de 50 empleados',
            'body'   => 'La Directiva Whistleblowing prevé que la Comisión Europea evalúe si el umbral de 50 empleados debe reducirse. Una eventual modificación ampliaría significativamente el número de obligados en España.',
            'tag'    => ['futuro', 'A vigilar'],
            'dot'    => 'tl-gray',
          ],
        ];

        $tag_classes = ['ley'=>'tag-ley','aipi'=>'tag-aipi','plazo'=>'tag-plazo','futuro'=>'tag-futuro','stats'=>'tag-stats'];

        foreach ($events as $ev): ?>
        <div class="timeline-item">
          <div class="timeline-dot <?= $ev['dot'] ?>"></div>
          <div class="timeline-date"><?= $ev['fecha'] ?></div>
          <div class="timeline-title"><?= $ev['titulo'] ?></div>
          <div class="timeline-body"><?= $ev['body'] ?></div>
          <span class="timeline-tag <?= $tag_classes[$ev['tag'][0]] ?>"><?= $ev['tag'][1] ?></span>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <!-- PRÓXIMOS HITOS -->
  <section id="proximos-hitos" style="padding:60px 0;background:var(--bg-secondary);border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">Qué vigilar en los próximos meses</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;">Hitos regulatorios con impacto directo sobre el cumplimiento del canal de denuncias.</p>
      <div style="display:grid;gap:1rem;">
        <?php
        $upcoming = [
          [
            'fecha'   => 'Segundo semestre 2026',
            'titulo'  => 'Primeras resoluciones públicas de la AIPI',
            'impacto' => 'Alto',
            'color'   => '#dc2626',
            'desc'    => 'Las primeras resoluciones sancionadoras confirmarán qué entiende la AIPI por canal "suficiente" y cuál es el criterio de graduación de las multas. Toda empresa obligada debería leer las primeras resoluciones.',
          ],
          [
            'fecha'   => '2026-2027',
            'titulo'  => 'Informe anual AIPI al Congreso',
            'impacto' => 'Medio',
            'color'   => '#d97706',
            'desc'    => 'El primer informe anual mostrará el número real de canales registrados, denuncias recibidas y expedientes abiertos. Dará una imagen del cumplimiento real en España.',
          ],
          [
            'fecha'   => '2027',
            'titulo'  => 'Revisión europea del umbral de empleados',
            'impacto' => 'Medio',
            'color'   => '#d97706',
            'desc'    => 'La Comisión Europea debe evaluar si reducir el umbral de 50 empleados. Si se aprueba, miles de pymes adicionales quedarían obligadas y las CCAA deberían adaptar su normativa.',
          ],
          [
            'fecha'   => 'Continuo',
            'titulo'  => 'Desarrollo de normativa autonómica',
            'impacto' => 'Medio',
            'color'   => '#d97706',
            'desc'    => 'Varias CCAA están desarrollando su propia normativa de protección del informante para los organismos bajo su competencia. País Vasco, Cataluña y la Comunidad Valenciana tienen proyectos avanzados.',
          ],
        ];
        foreach ($upcoming as $u): ?>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:12px;padding:1.25rem;display:grid;grid-template-columns:auto 1fr;gap:1.25rem;align-items:start;">
          <div style="text-align:center;min-width:90px;">
            <div style="font-size:0.75rem;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.05em;margin-bottom:0.25rem;"><?= $u['fecha'] ?></div>
            <div style="font-size:0.7rem;font-weight:700;padding:0.2rem 0.5rem;border-radius:4px;background:<?= $u['color'] ?>1a;color:<?= $u['color'] ?>;">Impacto <?= strtolower($u['impacto']) ?></div>
          </div>
          <div>
            <div style="font-weight:700;font-size:0.9375rem;margin-bottom:0.375rem;"><?= $u['titulo'] ?></div>
            <div style="font-size:0.875rem;color:var(--text-secondary);"><?= $u['desc'] ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ESTADÍSTICAS -->
  <section id="estadisticas" style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">Contexto: el cumplimiento en España</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;">Datos estimados sobre el universo de obligados y el estado actual del cumplimiento.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1rem;margin-bottom:2rem;">
        <?php
        $stats = [
          ['valor'=>'~130.000','desc'=>'Empresas privadas obligadas (est.)','nota'=>'Con 50+ empleados'],
          ['valor'=>'~3.500','desc'=>'Administraciones públicas obligadas','nota'=>'AAPP, agencias, organismos'],
          ['valor'=>'~40%','desc'=>'Tasa de cumplimiento estimada (jun 2026)','nota'=>'Solo 6 de 10 habrían implantado canal'],
          ['valor'=>'1.000 €','desc'=>'Coste medio de un canal SaaS/año','nota'=>'Para empresa de 100 empleados'],
          ['valor'=>'1.000.000 €','desc'=>'Multa máxima posible','nota'=>'Infracción muy grave — no tener canal'],
        ];
        foreach ($stats as $s): ?>
        <div class="stat-card">
          <div class="stat-value" style="font-size:1.375rem;"><?= $s['valor'] ?></div>
          <div style="font-size:0.8125rem;font-weight:600;margin-bottom:0.25rem;"><?= $s['desc'] ?></div>
          <div style="font-size:0.75rem;color:var(--text-muted);"><?= $s['nota'] ?></div>
        </div>
        <?php endforeach; ?>
      </div>
      <p style="font-size:0.8125rem;color:var(--text-muted);">Datos estimados por EticAlert basados en estadísticas del INE, DIRCE y análisis propios. No son datos oficiales de la AIPI.</p>
    </div>
  </section>

  <!-- FAQ -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:2rem;">Preguntas frecuentes sobre la AIPI</h2>
      <?php
      $faqs = [
        ['¿Qué es la AIPI?', 'La Autoridad Independiente de Protección del Informante es un organismo administrativo independiente creado por la Ley 2/2023 para supervisar el cumplimiento del sistema de protección de informantes en España. Tiene personalidad jurídica propia, no depende del Gobierno y tiene plenas competencias sancionadoras.'],
        ['¿Cuándo empezó a sancionar la AIPI?', 'La AIPI está plenamente operativa desde febrero de 2026, cuando abrió su sede electrónica. Desde esa fecha puede iniciar expedientes sancionadores de oficio o a instancia de parte. El plazo para notificar al RSII finalizó el 10 de abril de 2026.'],
        ['¿Dónde puedo consultar las resoluciones de la AIPI?', 'Las resoluciones de la AIPI se publican en su sede electrónica (aipi.gob.es) y en el BOE cuando así lo determina la normativa. Este radar recoge y resume las publicaciones más relevantes para que no tengas que monitorizar fuentes oficiales por tu cuenta.'],
        ['¿Qué diferencia hay entre el canal interno y el canal externo de la AIPI?', 'El canal interno es el que implanta la empresa para recibir comunicaciones de sus empleados. El canal externo es la AIPI misma: cualquier informante puede denunciar directamente ante la AIPI si la empresa no tiene canal, si el canal no funciona, o si ha sufrido represalias. Coexisten.'],
        ['¿Puede la AIPI inspeccionar a cualquier empresa sin previo aviso?', 'La AIPI puede iniciar actuaciones de oficio (por propia iniciativa) o a instancia de parte (por denuncia). No existe un procedimiento de anuncio previo obligatorio para la apertura de diligencias de investigación. La AIPI puede requerir documentación en cualquier momento.'],
      ];
      foreach ($faqs as $faq): ?>
      <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;">
        <summary style="font-weight:600;cursor:pointer;"><?= $faq[0] ?></summary>
        <p style="margin:0.75rem 0 0;color:var(--text-secondary);"><?= $faq[1] ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- CTA -->
  <section style="padding:60px 0;">
    <div class="container" style="max-width:680px;text-align:center;">
      <h2 style="font-size:1.5rem;margin-bottom:0.75rem;">¿Tu empresa cumple con la Ley 2/2023?</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;">La AIPI ya está activa. Comprueba tu situación y activa el canal de denuncias antes de recibir un expediente.</p>
      <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
        <a href="/cumples" class="btn btn-primary">Comprobar si estoy obligado</a>
        <a href="/calculadora-multas-aipi" class="btn btn-secondary">Calcular mi riesgo de multa</a>
      </div>
      <p style="margin-top:1.5rem;font-size:0.875rem;color:var(--text-muted);">
        Recursos: <a href="/blog/aipi-sanciones-canal-denuncias" style="color:var(--accent);">La AIPI ya sanciona</a> ·
        <a href="/blog/rsii-guia-formulario-aipi" style="color:var(--accent);">Guía del RSII</a> ·
        <a href="/blog/checklist-auditoria-aipi" style="color:var(--accent);">Checklist de inspección</a>
      </p>
    </div>
  </section>

</main>

<style>
@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.4; }
}
</style>

<?php include 'includes/footer.php'; ?>
