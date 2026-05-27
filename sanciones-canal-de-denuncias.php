<?php
$page_title       = 'Sanciones por no tener canal de denuncias | Hasta 1.000.000 € | EticAlert';
$page_description = '¿Tienes 50+ empleados y no tienes canal de denuncias? Multas de hasta 1.000.000 € y exclusión de licitaciones. Comprueba tu riesgo y actúa hoy.';
$page_canonical   = 'https://eticalert.com/sanciones-canal-de-denuncias';
include 'includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Inicio","item":"https://eticalert.com/"},
    {"@type":"ListItem","position":2,"name":"Sanciones canal de denuncias","item":"https://eticalert.com/sanciones-canal-de-denuncias"}
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cuánto es la multa por no tener canal de denuncias?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No disponer de canal de denuncias siendo empresa obligada (50+ empleados) es una infracción muy grave según la Ley 2/2023. La multa para la empresa puede alcanzar 1.000.000 euros. Los administradores responsables pueden ser sancionados personalmente con hasta 300.000 euros adicionales."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué empresas están obligadas a tener canal de denuncias?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Todas las empresas con 50 o más trabajadores están obligadas por la Ley 2/2023 a implantar un Sistema Interno de Información (canal de denuncias). También están obligadas todas las entidades del sector público, independientemente de su tamaño, y empresas de sectores regulados como servicios financieros o prevención del blanqueo de capitales."
      }
    },
    {
      "@type": "Question",
      "name": "¿La AIPI ya está sancionando empresas sin canal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí. La Autoridad Independiente de Protección del Informante (AIPI) tiene plenas competencias sancionadoras desde 2024 y ha iniciado expedientes contra empresas que no cumplen la Ley 2/2023. El período de tolerancia ha terminado."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuánto cuesta evitar la sanción?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Con EticAlert, el canal de denuncias que cumple la Ley 2/2023 cuesta desde 9 euros al mes. Frente a una multa mínima de 100.000 euros, el coste de cumplir es prácticamente cero."
      }
    }
  ]
}
</script>

<main id="main-content">

  <!-- HERO: urgencia inmediata -->
  <section style="background:var(--bg-secondary);padding:100px 0 60px;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:860px;">
      <nav class="breadcrumb" aria-label="Migas de pan" style="margin-bottom:1.5rem;">
        <a href="/">Inicio</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span>Sanciones canal de denuncias</span>
      </nav>
      <span class="blog-badge badge-marco-legal" style="margin-bottom:1rem;display:inline-block;">Marco legal · Ley 2/2023</span>
      <h1 style="font-size:clamp(1.75rem,4vw,2.5rem);line-height:1.2;margin-bottom:1rem;">Sanciones por no tener canal de denuncias: multas de hasta <span style="color:var(--accent);">1.000.000 €</span></h1>
      <p style="font-size:1.125rem;color:var(--text-secondary);max-width:680px;margin-bottom:2rem;">Si tu empresa tiene 50 o más empleados y no tiene canal de denuncias operativo, ya incumple la Ley 2/2023. La AIPI está sancionando. El riesgo es real y el coste de cumplir es mínimo.</p>
      <div style="display:flex;gap:1rem;flex-wrap:wrap;">
        <a href="/registro" class="btn btn-primary btn-lg">Activa tu canal hoy — desde 9€/mes</a>
        <a href="#riesgo" class="btn btn-secondary btn-lg">¿Está mi empresa en riesgo?</a>
      </div>
    </div>
  </section>

  <!-- TABLA RESUMEN DE SANCIONES -->
  <section style="padding:60px 0;">
    <div class="container" style="max-width:860px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">Cuadro de sanciones Ley 2/2023</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;">Las multas son acumulables. Una empresa puede recibir sanciones de varias categorías a la vez.</p>

      <div style="overflow-x:auto;">
        <table style="width:100%;border-collapse:collapse;font-size:0.9375rem;">
          <thead>
            <tr style="background:var(--bg-tertiary);">
              <th style="padding:0.75rem 1rem;text-align:left;border-bottom:2px solid var(--border);font-weight:600;">Tipo de infracción</th>
              <th style="padding:0.75rem 1rem;text-align:left;border-bottom:2px solid var(--border);font-weight:600;">Ejemplos</th>
              <th style="padding:0.75rem 1rem;text-align:right;border-bottom:2px solid var(--border);font-weight:600;">Multa empresa</th>
              <th style="padding:0.75rem 1rem;text-align:right;border-bottom:2px solid var(--border);font-weight:600;">Multa admin.</th>
            </tr>
          </thead>
          <tbody>
            <tr style="background:rgba(239,68,68,0.06);">
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);font-weight:700;color:#dc2626;">🔴 Muy grave</td>
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);color:var(--text-secondary);">No tener canal, represalias al informante, vulnerar confidencialidad</td>
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);text-align:right;font-weight:700;color:#dc2626;">600.001 – 1.000.000 €</td>
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);text-align:right;font-weight:700;color:#dc2626;">Hasta 300.000 €</td>
            </tr>
            <tr style="background:rgba(245,158,11,0.06);">
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);font-weight:700;color:#d97706;">🟡 Grave</td>
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);color:var(--text-secondary);">Sin RSII, canal sin anonimato, no responder en 3 meses, sin libro-registro</td>
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);text-align:right;font-weight:700;color:#d97706;">100.001 – 600.000 €</td>
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);text-align:right;font-weight:700;color:#d97706;">Hasta 200.000 €</td>
            </tr>
            <tr>
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);font-weight:700;color:var(--text-secondary);">🟢 Leve</td>
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);color:var(--text-secondary);">Política del SII desactualizada, URL del canal no publicada en la web</td>
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);text-align:right;font-weight:700;">Hasta 100.000 €</td>
              <td style="padding:0.875rem 1rem;border-bottom:1px solid var(--border);text-align:right;font-weight:700;">Hasta 25.000 €</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="margin-top:1rem;font-size:0.8125rem;color:var(--text-muted);">Fuente: Ley 2/2023, Título IX, artículos 63-68. Las cuantías se aplican a personas jurídicas. Los administradores pueden ser sancionados personal y adicionalmente.</p>
    </div>
  </section>

  <!-- CONSECUENCIAS MÁS ALLÁ DE LA MULTA -->
  <section style="background:var(--bg-secondary);padding:60px 0;border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:860px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">Más allá de la multa: consecuencias que pueden ser peores</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;">Las empresas que concurren a licitaciones o reciben subvenciones tienen aún más que perder.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1.25rem;">
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.5rem;">
          <div style="font-size:1.5rem;margin-bottom:0.75rem;">🏛️</div>
          <h3 style="font-size:1rem;margin-bottom:0.5rem;">Exclusión de contratación pública</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);">Infracciones graves o muy graves pueden prohibirte contratar con el sector público <strong>hasta 3 años</strong>.</p>
        </div>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.5rem;">
          <div style="font-size:1.5rem;margin-bottom:0.75rem;">💶</div>
          <h3 style="font-size:1rem;margin-bottom:0.5rem;">Pérdida de subvenciones</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);">Imposibilidad de obtener subvenciones, ayudas o financiación pública <strong>hasta 4 años</strong>.</p>
        </div>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.5rem;">
          <div style="font-size:1.5rem;margin-bottom:0.75rem;">📰</div>
          <h3 style="font-size:1rem;margin-bottom:0.5rem;">Daño reputacional</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);">La AIPI publica las resoluciones en los casos más graves. La sanción aparece en buscadores y medios.</p>
        </div>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.5rem;">
          <div style="font-size:1.5rem;margin-bottom:0.75rem;">⚖️</div>
          <h3 style="font-size:1rem;margin-bottom:0.5rem;">Indemnización al informante</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);">Si hubo represalias, la empresa puede ser condenada a indemnizar al denunciante en vía judicial.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CHECKLIST DE RIESGO -->
  <section id="riesgo" style="padding:60px 0;">
    <div class="container" style="max-width:860px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">¿Está tu empresa en riesgo?</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;">Si responde SÍ a alguna de estas preguntas, ya hay incumplimiento.</p>
      <div style="display:flex;flex-direction:column;gap:0.875rem;">
        <?php
        $checks = [
          ['icon'=>'🔴','text'=>'Tu empresa tiene 50 o más empleados y no tiene canal de denuncias operativo.','label'=>'Infracción muy grave'],
          ['icon'=>'🔴','text'=>'El canal existe pero no permite comunicaciones anónimas cuando el informante lo solicita.','label'=>'Infracción grave'],
          ['icon'=>'🟡','text'=>'No has designado un RSII (Responsable del Sistema Interno de Información) ni lo has notificado a la AIPI.','label'=>'Infracción grave'],
          ['icon'=>'🟡','text'=>'No acusas recibo de las denuncias en 7 días o no das respuesta al informante en 3 meses.','label'=>'Infracción grave'],
          ['icon'=>'🟢','text'=>'La URL del canal no está publicada de forma visible en tu web corporativa.','label'=>'Infracción leve'],
          ['icon'=>'🟢','text'=>'La Política del Sistema Interno de Información no existe o no está actualizada.','label'=>'Infracción leve'],
        ];
        foreach ($checks as $c): ?>
        <div style="display:flex;align-items:flex-start;gap:1rem;background:var(--bg-secondary);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1rem 1.25rem;">
          <span style="font-size:1.125rem;flex-shrink:0;margin-top:2px;"><?= $c['icon'] ?></span>
          <div>
            <p style="margin:0;font-size:0.9375rem;"><?= $c['text'] ?></p>
            <span style="font-size:0.8125rem;color:var(--text-muted);margin-top:0.25rem;display:inline-block;"><?= $c['label'] ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA CENTRAL -->
  <section style="background:var(--bg-secondary);padding:60px 0;border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:680px;text-align:center;">
      <h2 style="font-size:1.75rem;margin-bottom:1rem;">La multa mínima es 100.000 €.<br>EticAlert cuesta desde <span style="color:var(--accent);">9€/mes</span>.</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;font-size:1.0625rem;">Starter 9€/mes (3 usuarios) · Business 19€/mes (4 usuarios) · Company 39€/mes (6 usuarios). Operativo en 5 minutos. Cumple la Ley 2/2023 desde hoy.</p>
      <div style="display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;">
        <a href="/registro" class="btn btn-primary btn-lg">Activar mi canal ahora →</a>
        <a href="/precios" class="btn btn-secondary btn-lg">Ver precios</a>
      </div>
      <p style="margin-top:1.5rem;font-size:0.875rem;color:var(--text-muted);">15 días de prueba gratuita · Configuración en minutos · Soporte incluido</p>
    </div>
  </section>

  <!-- FAQ -->
  <section style="padding:60px 0;">
    <div class="container" style="max-width:860px;">
      <h2 style="font-size:1.5rem;margin-bottom:2rem;">Preguntas frecuentes sobre sanciones</h2>

      <div style="display:flex;flex-direction:column;gap:1.25rem;">

        <details style="background:var(--bg-secondary);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.25rem 1.5rem;">
          <summary style="font-weight:600;cursor:pointer;font-size:1rem;">¿La AIPI ya está sancionando activamente?</summary>
          <p style="margin-top:0.75rem;color:var(--text-secondary);margin-bottom:0;">Sí. La Autoridad Independiente de Protección del Informante tiene plenas competencias sancionadoras y ha iniciado expedientes. El período de gracia informal ha terminado. Cualquier empresa con 50+ empleados que no tenga canal operativo está expuesta.</p>
        </details>

        <details style="background:var(--bg-secondary);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.25rem 1.5rem;">
          <summary style="font-weight:600;cursor:pointer;font-size:1rem;">¿Pueden sancionar al administrador personalmente, además de a la empresa?</summary>
          <p style="margin-top:0.75rem;color:var(--text-secondary);margin-bottom:0;">Sí. La Ley 2/2023 establece responsabilidad personal del administrador cuando el incumplimiento deriva de su negligencia o falta de supervisión. Puede enfrentarse a sanciones de hasta 300.000 € adicionales a la sanción corporativa.</p>
        </details>

        <details style="background:var(--bg-secondary);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.25rem 1.5rem;">
          <summary style="font-weight:600;cursor:pointer;font-size:1rem;">¿Tenemos plazo para ponernos al día sin sanción?</summary>
          <p style="margin-top:0.75rem;color:var(--text-secondary);margin-bottom:0;">No existe un plazo oficial de regularización sin consecuencias. El plazo de adaptación venció en 2023. Regularizar cuanto antes reduce el riesgo, pero no elimina retroactivamente el incumplimiento pasado si ya existe un expediente abierto.</p>
        </details>

        <details style="background:var(--bg-secondary);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.25rem 1.5rem;">
          <summary style="font-weight:600;cursor:pointer;font-size:1rem;">¿Una empresa de 45 empleados está obligada?</summary>
          <p style="margin-top:0.75rem;color:var(--text-secondary);margin-bottom:0;">No, el umbral legal son 50 empleados. Sin embargo, si tu empresa está en crecimiento o en la frontera, implantar el canal ahora evita tener que hacerlo con urgencia. Además, muchos clientes y licitadores ya lo exigen contractualmente por debajo del umbral legal.</p>
        </details>

        <details style="background:var(--bg-secondary);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.25rem 1.5rem;">
          <summary style="font-weight:600;cursor:pointer;font-size:1rem;">¿Un buzón de email o formulario web cuenta como canal de denuncias?</summary>
          <p style="margin-top:0.75rem;color:var(--text-secondary);margin-bottom:0;">No. La Ley 2/2023 exige que el sistema permita comunicaciones anónimas, garantice la confidencialidad, acuse recibo en 7 días y gestione los plazos de respuesta. Un email no cumple ninguno de estos requisitos técnicos. La AIPI puede considerarlo incumplimiento incluso si "existe algo".</p>
        </details>

      </div>

      <p style="margin-top:2rem;font-size:0.9375rem;">Para el desglose legal completo de cada infracción, consulta: <a href="/blog/sanciones-canal-denuncias-desglose" style="color:var(--accent);">Sanciones Ley 2/2023: desglose completo por tipo de infracción →</a></p>
    </div>
  </section>

  <!-- INTERNAL LINKS -->
  <section style="background:var(--bg-secondary);padding:40px 0;border-top:1px solid var(--border);">
    <div class="container" style="max-width:860px;">
      <h3 style="font-size:1rem;margin-bottom:1.25rem;color:var(--text-secondary);">También te puede interesar</h3>
      <div style="display:flex;flex-wrap:wrap;gap:0.75rem;">
        <a href="/canal-de-denuncias" style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:0.625rem 1rem;font-size:0.9375rem;color:var(--text-primary);text-decoration:none;">Canal de denuncias: guía completa →</a>
        <a href="/canal-de-denuncias-obligatorio" style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:0.625rem 1rem;font-size:0.9375rem;color:var(--text-primary);text-decoration:none;">¿Está tu empresa obligada? →</a>
        <a href="/precio-canal-de-denuncias" style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:0.625rem 1rem;font-size:0.9375rem;color:var(--text-primary);text-decoration:none;">Precio canal de denuncias →</a>
        <a href="/precios" style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:0.625rem 1rem;font-size:0.9375rem;color:var(--text-primary);text-decoration:none;">Planes y precios EticAlert →</a>
        <a href="/blog/aipi-sanciones-canal-denuncias" style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:0.625rem 1rem;font-size:0.9375rem;color:var(--text-primary);text-decoration:none;">La AIPI ya sanciona →</a>
        <a href="/registro" style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:0.625rem 1rem;font-size:0.9375rem;color:var(--accent);text-decoration:none;font-weight:600;">Activar canal →</a>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
