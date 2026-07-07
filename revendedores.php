<?php
$page_title       = 'Programa de Partners | EticAlert';
$page_description = 'Ofrece canal de denuncias a tus clientes como asesoría o despacho. Comisión recurrente del 20% y materiales de venta listos.';
$page_canonical   = 'https://eticalert.com/revendedores';
include 'includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Programa de Partners EticAlert",
  "description": "Programa de revendedores para asesorías, despachos y consultoras que quieran ofrecer canal de denuncias a sus clientes con comisión recurrente del 20% y opción white-label.",
  "provider": {"@type": "Organization", "name": "EticAlert", "url": "https://eticalert.com"},
  "areaServed": {"@type": "Country", "name": "ES"},
  "url": "https://eticalert.com/revendedores"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cuánto cobra un partner de EticAlert por cada cliente?",
      "acceptedAnswer": {"@type": "Answer", "text": "Los partners reciben una comisión del 20% mensual recurrente durante toda la vida del cliente. Por ejemplo, un cliente en el plan Company (39€/mes) genera 7,80€/mes para el partner, todos los meses, sin límite de tiempo."}
    },
    {
      "@type": "Question",
      "name": "¿Puedo ofrecer EticAlert con mi propia marca?",
      "acceptedAnswer": {"@type": "Answer", "text": "Sí. Los partners con opción white-label pueden presentar el canal de denuncias con su propio nombre y logo. El cliente ve la marca del partner, no la de EticAlert. Disponible en planes Partner Pro y superiores."}
    },
    {
      "@type": "Question",
      "name": "¿Necesito conocimientos técnicos para ser partner?",
      "acceptedAnswer": {"@type": "Answer", "text": "No. EticAlert es una plataforma SaaS sin instalación. El partner solo necesita conocer los requisitos legales (que como asesoría ya conoce) y usar el panel de partners para gestionar sus clientes. Toda la parte técnica la gestiona EticAlert."}
    },
    {
      "@type": "Question",
      "name": "¿Qué materiales de venta proporciona EticAlert a sus partners?",
      "acceptedAnswer": {"@type": "Answer", "text": "Los partners reciben un kit completo: presentación en PowerPoint personalizable, email templates para comunicar la obligación a sus clientes, guía de argumentario de ventas, acceso a cuenta demo ilimitada y sesión de onboarding con el equipo de EticAlert."}
    }
  ]
}
</script>

<main id="main-content">

  <!-- HERO -->
  <section style="padding:120px 0 80px;background:var(--bg-secondary);border-bottom:1px solid var(--border);">
    <div class="container">
      <div style="max-width:700px;" class="fade-up">
        <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(74,222,128,0.1);border:1px solid var(--accent-border);border-radius:99px;padding:0.25rem 0.875rem;font-size:0.8125rem;font-weight:600;color:var(--accent);margin-bottom:1.25rem;">
          Para asesorías, despachos y consultoras
        </div>
        <h1 style="font-size:clamp(1.75rem,4vw,2.75rem);line-height:1.15;margin-bottom:1.25rem;">
          Tus clientes ya te están preguntando por el canal de denuncias.<br>
          <span style="color:var(--accent);">Ofrécelo tú antes de que lo contraten en otro sitio.</span>
        </h1>
        <p style="font-size:1.125rem;color:var(--text-secondary);margin-bottom:2rem;max-width:600px;">
          El programa de partners de EticAlert te permite ofrecer canal de denuncias a tus clientes con tu propia marca, sin trabajo técnico y con una comisión recurrente del 20% mes a mes.
        </p>
        <div style="display:flex;flex-wrap:wrap;gap:1rem;">
          <a href="mailto:partners@eticalert.com?subject=Quiero ser partner de EticAlert" class="btn btn-primary">Solicitar información de partnership →</a>
          <a href="#como-funciona" class="btn btn-secondary">Ver cómo funciona</a>
        </div>
      </div>
    </div>
  </section>

  <!-- EL PROBLEMA -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;text-align:center;">La oportunidad que tienes delante</h2>
      <p style="color:var(--text-secondary);text-align:center;margin-bottom:3rem;max-width:580px;margin-left:auto;margin-right:auto;">La Ley 2/2023 obliga a ~130.000 empresas en España. La mayoría todavía no cumple. La mayoría se lo va a pedir a su asesoría.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.5rem;">
        <?php
        $problems = [
          [
            'n'    => '01',
            'title'=> 'Tus clientes ya tienen la obligación',
            'desc' => 'Cualquier cliente tuyo con 50+ empleados lleva más de 3 años obligado. Muchos aún no han actuado. La AIPI está activa desde febrero de 2026.',
          ],
          [
            'n'    => '02',
            'title'=> 'Te lo van a pedir a ti',
            'desc' => 'Tu asesoría es su primer punto de contacto para obligaciones legales. Si no lo ofreces tú, lo contratan en otro sitio — y pierdes esa conversación.',
          ],
          [
            'n'    => '03',
            'title'=> 'Es un ingreso recurrente',
            'desc' => 'A diferencia de un servicio puntual, el canal de denuncias se paga todos los meses. Tu comisión es recurrente mientras el cliente siga activo.',
          ],
        ];
        foreach ($problems as $p): ?>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:1.75rem;">
          <div style="font-size:2rem;font-weight:900;color:var(--accent);opacity:0.4;line-height:1;margin-bottom:0.75rem;"><?= $p['n'] ?></div>
          <h3 style="font-size:1rem;font-weight:700;margin-bottom:0.5rem;"><?= $p['title'] ?></h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin:0;"><?= $p['desc'] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PLANES DE PARTNERSHIP -->
  <section id="planes" style="padding:60px 0;border-bottom:1px solid var(--border);background:var(--bg-secondary);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;text-align:center;">Dos formas de ser partner</h2>
      <p style="color:var(--text-secondary);text-align:center;margin-bottom:3rem;">Elige la modalidad que encaja mejor con tu modelo de negocio.</p>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">

        <!-- Referral -->
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:2rem;">
          <div style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.05em;color:var(--text-muted);margin-bottom:0.75rem;">Partner Referral</div>
          <h3 style="font-size:1.5rem;font-weight:800;margin-bottom:0.375rem;">Recomienda y cobra</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin-bottom:1.5rem;">Recomendas EticAlert a tus clientes. Ellos contratan con EticAlert. Tú cobras comisión mes a mes.</p>
          <div style="border-top:1px solid var(--border);padding-top:1.25rem;margin-bottom:1.5rem;">
            <?php
            $referral_features = [
              '20% de comisión recurrente mensual',
              'Sin límite de tiempo mientras el cliente esté activo',
              'Panel de partners para ver tus clientes y comisiones',
              'Kit de materiales de venta (PPT, emails, argumentario)',
              'Cuenta demo ilimitada para tus presentaciones',
              'Sesión de onboarding de 30 minutos',
            ];
            foreach ($referral_features as $f): ?>
            <div style="display:flex;align-items:flex-start;gap:0.625rem;padding:0.4rem 0;font-size:0.875rem;border-bottom:1px solid var(--border);">
              <span style="color:var(--accent);font-weight:700;min-width:16px;">✓</span>
              <span style="color:var(--text-secondary);"><?= $f ?></span>
            </div>
            <?php endforeach; ?>
          </div>
          <a href="mailto:partners@eticalert.com?subject=Partner Referral — Información" class="btn btn-secondary" style="display:block;text-align:center;">Solicitar información</a>
        </div>

        <!-- White-label -->
        <div style="background:var(--bg-card);border:2px solid var(--accent);border-radius:16px;padding:2rem;position:relative;">
          <div style="position:absolute;top:-13px;left:50%;transform:translateX(-50%);background:var(--accent);color:#000;font-size:0.75rem;font-weight:700;padding:0.2rem 0.875rem;border-radius:99px;white-space:nowrap;">Más popular entre asesorías</div>
          <div style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.05em;color:var(--text-muted);margin-bottom:0.75rem;">Partner White-label</div>
          <h3 style="font-size:1.5rem;font-weight:800;margin-bottom:0.375rem;">Tu marca, nuestro motor</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin-bottom:1.5rem;">El canal de denuncias se presenta con el nombre y logo de tu asesoría. Tus clientes ven tu marca en todo momento.</p>
          <div style="border-top:1px solid var(--border);padding-top:1.25rem;margin-bottom:1.5rem;">
            <?php
            $wl_features = [
              'Todo lo del plan Referral, más:',
              'Canal con tu nombre y logo (white-label)',
              'URL personalizada (canal.tuasesorí­a.com)',
              'Emails de notificación con tu marca',
              'Margen libre: fija el precio que quieras a tus clientes',
              'Soporte técnico prioritario',
              'Formación anual para tu equipo',
            ];
            foreach ($wl_features as $i => $f): ?>
            <div style="display:flex;align-items:flex-start;gap:0.625rem;padding:0.4rem 0;font-size:0.875rem;border-bottom:1px solid var(--border);">
              <span style="color:var(--accent);font-weight:700;min-width:16px;"><?= $i === 0 ? '—' : '✓' ?></span>
              <span style="color:<?= $i === 0 ? 'var(--text-muted)' : 'var(--text-secondary)' ?>;<?= $i === 0 ? 'font-style:italic;' : '' ?>"><?= $f ?></span>
            </div>
            <?php endforeach; ?>
          </div>
          <a href="mailto:partners@eticalert.com?subject=Partner White-label — Información" class="btn btn-primary" style="display:block;text-align:center;">Hablar con el equipo →</a>
        </div>

      </div>
      <p style="text-align:center;font-size:0.8125rem;color:var(--text-muted);margin-top:1.5rem;">Los precios y condiciones exactas se acuerdan individualmente según el volumen de clientes. Escríbenos a partners@eticalert.com.</p>
    </div>
  </section>

  <!-- CÓMO FUNCIONA -->
  <section id="como-funciona" style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:860px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">Cómo funciona en la práctica</h2>
      <p style="color:var(--text-secondary);margin-bottom:2.5rem;">Desde que decides ser partner hasta que cobras tu primera comisión.</p>
      <div style="display:grid;gap:1.25rem;">
        <?php
        $steps = [
          ['paso'=>'1','titulo'=>'Solicitas unirte al programa','desc'=>'Nos escribes a partners@eticalert.com. En 24-48h te enviamos el contrato de partnership y acceso al panel de partners.'],
          ['paso'=>'2','titulo'=>'Onboarding de 30 minutos','desc'=>'Sesión online con el equipo de EticAlert: te explicamos el producto, las obligaciones legales clave y cómo presentarlo a tus clientes. Te entregamos el kit de materiales.'],
          ['paso'=>'3','titulo'=>'Identificas clientes obligados','desc'=>'Usas el argumentario y los materiales para detectar qué clientes tienen la obligación. En la mayoría de carteras de asesoría hay 5-20 clientes obligados inmediatamente.'],
          ['paso'=>'4','titulo'=>'Activas el canal para cada cliente','desc'=>'Desde tu panel de partners, creas el canal para cada cliente en 5 minutos. Ellos lo tienen activo ese mismo día.'],
          ['paso'=>'5','titulo'=>'Cobras comisión cada mes','desc'=>'EticAlert te abona el 20% de cada factura de tus clientes activos, automáticamente, todos los meses. Sin gestiones adicionales.'],
        ];
        foreach ($steps as $s): ?>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:12px;padding:1.25rem;display:grid;grid-template-columns:48px 1fr;gap:1.25rem;align-items:start;">
          <div style="width:48px;height:48px;border-radius:50%;background:rgba(74,222,128,0.1);border:2px solid var(--accent-border);display:flex;align-items:center;justify-content:center;font-size:1.125rem;font-weight:800;color:var(--accent);"><?= $s['paso'] ?></div>
          <div>
            <div style="font-weight:700;margin-bottom:0.25rem;"><?= $s['titulo'] ?></div>
            <div style="font-size:0.875rem;color:var(--text-secondary);"><?= $s['desc'] ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CALCULADORA DE INGRESOS -->
  <section style="padding:60px 0;background:var(--bg-secondary);border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:860px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;">¿Cuánto puedes ganar?</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;">Estimación de ingresos recurrentes según el número de clientes que actives.</p>
      <div style="overflow-x:auto;">
        <table style="width:100%;border-collapse:collapse;font-size:0.9375rem;">
          <thead>
            <tr style="background:var(--bg-card);">
              <th style="padding:0.875rem 1rem;border:1px solid var(--border);text-align:left;">Clientes activos</th>
              <th style="padding:0.875rem 1rem;border:1px solid var(--border);text-align:center;">Plan medio asumido</th>
              <th style="padding:0.875rem 1rem;border:1px solid var(--border);text-align:right;">Ingreso mensual partner</th>
              <th style="padding:0.875rem 1rem;border:1px solid var(--border);text-align:right;">Ingreso anual partner</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $rows = [
              [5,  'Business (19€)', 19, 5],
              [10, 'Business (19€)', 19, 10],
              [20, 'Business (19€)', 19, 20],
              [20, 'Company (39€)',  39, 20],
              [50, 'Company (39€)',  39, 50],
            ];
            foreach ($rows as $i => $r):
              $monthly = round($r[2] * $r[3] * 0.20, 0);
              $annual  = $monthly * 12;
            ?>
            <tr <?= $i % 2 ? 'style="background:var(--bg-card);"' : '' ?>>
              <td style="padding:0.75rem 1rem;border:1px solid var(--border);font-weight:600;"><?= $r[3] ?> clientes</td>
              <td style="padding:0.75rem 1rem;border:1px solid var(--border);text-align:center;color:var(--text-secondary);"><?= $r[1] ?></td>
              <td style="padding:0.75rem 1rem;border:1px solid var(--border);text-align:right;font-weight:700;color:var(--accent);"><?= number_format($monthly, 0, ',', '.') ?> €/mes</td>
              <td style="padding:0.75rem 1rem;border:1px solid var(--border);text-align:right;font-weight:700;"><?= number_format($annual, 0, ',', '.') ?> €/año</td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <p style="font-size:0.8125rem;color:var(--text-muted);margin-top:0.75rem;">Estimación orientativa. Las comisiones exactas se establecen en el contrato de partnership. Sin límite de clientes ni de ingresos.</p>
    </div>
  </section>

  <!-- PARA QUIÉN ES -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:860px;">
      <h2 style="font-size:1.5rem;margin-bottom:2rem;">¿Es para mi despacho o asesoría?</h2>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">
        <div>
          <h3 style="font-size:1rem;font-weight:700;color:var(--accent);margin-bottom:1rem;">✓ Es para ti si…</h3>
          <?php
          $yes = [
            'Tienes clientes con 50+ empleados',
            'Ofreces servicios de gestoría, asesoría laboral, fiscal o jurídica',
            'Quieres ampliar tu cartera de servicios sin aumentar costes fijos',
            'Buscas ingresos recurrentes más allá de la cuota mensual de asesoría',
            'Quieres posicionarte como referente en compliance para tus clientes',
          ];
          foreach ($yes as $y): ?>
          <div style="display:flex;gap:0.5rem;padding:0.4rem 0;border-bottom:1px solid var(--border);font-size:0.875rem;color:var(--text-secondary);">
            <span style="color:var(--accent);">✓</span><?= $y ?>
          </div>
          <?php endforeach; ?>
        </div>
        <div>
          <h3 style="font-size:1rem;font-weight:700;color:#dc2626;margin-bottom:1rem;">✗ No es para ti si…</h3>
          <?php
          $no = [
            'Todos tus clientes tienen menos de 20 empleados y no son sujetos obligados PBC',
            'No tienes interés en ofrecer servicios de compliance',
            'Prefieres que tus clientes gestionen esto por su cuenta',
          ];
          foreach ($no as $n): ?>
          <div style="display:flex;gap:0.5rem;padding:0.4rem 0;border-bottom:1px solid var(--border);font-size:0.875rem;color:var(--text-secondary);">
            <span style="color:#dc2626;">✗</span><?= $n ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:860px;">
      <h2 style="font-size:1.5rem;margin-bottom:2rem;">Preguntas frecuentes</h2>
      <?php
      $faqs = [
        ['¿Cuánto cobra un partner por cada cliente?', 'Los partners reciben una comisión del 20% mensual recurrente durante toda la vida del cliente. Por ejemplo, un cliente en el plan Company (39€/mes) genera 7,80€/mes para el partner, todos los meses, sin límite de tiempo.'],
        ['¿Puedo ofrecer EticAlert con mi propia marca?', 'Sí. Los partners con opción white-label pueden presentar el canal de denuncias con su propio nombre y logo. El cliente ve la marca del partner, no la de EticAlert. Disponible en el plan Partner White-label.'],
        ['¿Necesito conocimientos técnicos para ser partner?', 'No. EticAlert es una plataforma SaaS sin instalación. El partner solo necesita conocer los requisitos legales (que como asesoría ya conoce) y usar el panel de partners para gestionar sus clientes.'],
        ['¿Qué materiales de venta proporciona EticAlert?', 'Los partners reciben un kit completo: presentación en PowerPoint personalizable, email templates para comunicar la obligación a sus clientes, guía de argumentario de ventas, acceso a cuenta demo ilimitada y sesión de onboarding.'],
        ['¿Cuánto tiempo lleva activar el canal para un cliente?', 'Menos de 10 minutos desde el panel de partners. El cliente puede empezar a recibir denuncias ese mismo día.'],
        ['¿Hay una cuota para ser partner?', 'No. El programa de partnership no tiene coste de entrada. Solo cobramos cuando el cliente paga, y te transferimos tu comisión automáticamente.'],
      ];
      foreach ($faqs as $faq): ?>
      <details style="border:1px solid var(--border);border-radius:8px;padding:1rem;margin:0.75rem 0;">
        <summary style="font-weight:600;cursor:pointer;"><?= $faq[0] ?></summary>
        <p style="margin:0.75rem 0 0;color:var(--text-secondary);"><?= $faq[1] ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section style="padding:80px 0;">
    <div class="container" style="max-width:620px;text-align:center;">
      <h2 style="font-size:1.75rem;margin-bottom:1rem;">¿Hablamos?</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;font-size:1.0625rem;">Escríbenos explicando brevemente tu asesoría y cuántos clientes obligados crees que tienes. Te respondemos en menos de 24 horas con una propuesta personalizada.</p>
      <a href="mailto:partners@eticalert.com?subject=Quiero ser partner de EticAlert" class="btn btn-primary" style="font-size:1.0625rem;padding:0.875rem 2.5rem;">
        Escribir a partners@eticalert.com →
      </a>
      <p style="margin-top:1.25rem;font-size:0.875rem;color:var(--text-muted);">Sin compromiso · Respuesta en 24h · Contrato simple</p>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
