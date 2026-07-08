<?php
$page_title       = 'Programa Partner | EticAlert';
$page_description = 'Recomienda EticAlert a tus clientes y genera crédito por cada oportunidad activada. Para asesorías, proveedores B2B y partners sectoriales.';
$page_canonical   = 'https://eticalert.com/partners';
include 'includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Programa Partner EticAlert",
  "description": "Programa de partners para asesorías, proveedores B2B y partners sectoriales que recomiendan EticAlert a sus clientes y generan crédito por cada oportunidad activada, aplicable como beneficio propio o para mejorar la propuesta al cliente final.",
  "provider": {"@type": "Organization", "name": "EticAlert", "url": "https://eticalert.com"},
  "areaServed": {"@type": "Country", "name": "ES"},
  "url": "https://eticalert.com/partners"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cómo se genera el crédito del programa partner?",
      "acceptedAnswer": {"@type": "Answer", "text": "Cuando un cliente que has recomendado contrata EticAlert, el programa reconoce esa recomendación con crédito para el partner. Las condiciones exactas (importe, plazos) se comparten de forma personalizada al solicitar información, según tu volumen de cartera y el tipo de partnership."}
    },
    {
      "@type": "Question",
      "name": "¿Qué puedo hacer con el crédito generado?",
      "acceptedAnswer": {"@type": "Answer", "text": "Dos opciones. Puedes retirarlo como beneficio propio por cada cliente activado, o aplicarlo a favor del cliente final para hacer más atractiva la propuesta y acelerar su decisión de compra. La modalidad se confirma al activar el acuerdo de partnership."}
    },
    {
      "@type": "Question",
      "name": "¿Qué tipo de empresas pueden ser partner de EticAlert?",
      "acceptedAnswer": {"@type": "Answer", "text": "Tres perfiles principales: asesores (despachos, consultoras y profesionales que acompañan a empresas en cumplimiento o procesos internos), proveedores B2B con cartera de clientes que quieren ampliar su propuesta de valor, y partners sectoriales que detectan oportunidades y quieren derivarlas de forma trazable."}
    },
    {
      "@type": "Question",
      "name": "¿Necesito conocimientos técnicos para ser partner?",
      "acceptedAnswer": {"@type": "Answer", "text": "No. EticAlert es una plataforma SaaS sin instalación. El partner identifica la oportunidad y acompaña al cliente; EticAlert facilita el proceso comercial y la activación técnica."}
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
          Programa Partner
        </div>
        <h1 style="font-size:clamp(1.75rem,4vw,2.75rem);line-height:1.15;margin-bottom:1.25rem;">
          Crece recomendando EticAlert.<br>
          <span style="color:var(--accent);">Valor para tus clientes, retorno para tu empresa.</span>
        </h1>
        <p style="font-size:1.125rem;color:var(--text-secondary);margin-bottom:2rem;max-width:600px;">
          Un programa para partners que quieren aportar una solución útil a sus clientes y generar retorno por cada oportunidad activada. Recomienda EticAlert, acompaña a tus clientes con una solución especializada y solicita las condiciones del programa.
        </p>
        <div style="display:flex;flex-wrap:wrap;gap:1rem;">
          <a href="mailto:partners@eticalert.com?subject=Quiero solicitar las condiciones del programa partner" class="btn btn-primary">Solicitar condiciones del programa →</a>
          <a href="#como-funciona" class="btn btn-secondary">Ver cómo funciona</a>
        </div>
      </div>
    </div>
  </section>

  <!-- QUIÉN PUEDE BENEFICIARSE -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;text-align:center;">Para empresas que ya tienen la confianza del cliente</h2>
      <p style="color:var(--text-secondary);text-align:center;margin-bottom:3rem;max-width:620px;margin-left:auto;margin-right:auto;">El programa está pensado para partners que quieren recomendar una solución útil, sencilla de explicar y alineada con necesidades reales de sus clientes.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1.5rem;">
        <?php
        $quien = [
          ['Asesores', 'Despachos, consultoras y profesionales que acompañan a empresas en cumplimiento, gestión o procesos internos.'],
          ['Proveedores B2B', 'Empresas con cartera de clientes que buscan ampliar valor sin desarrollar una solución propia.'],
          ['Partners sectoriales', 'Organizaciones que detectan oportunidades y quieren derivarlas con una propuesta clara y trazable.'],
        ];
        foreach ($quien as $q): ?>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:1.75rem;">
          <h3 style="font-size:1.0625rem;font-weight:700;margin-bottom:0.5rem;color:var(--accent);"><?= $q[0] ?></h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin:0;"><?= $q[1] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CALIDAD DEL PRODUCTO -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);background:var(--bg-secondary);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;text-align:center;">Un producto serio para recomendar</h2>
      <p style="color:var(--text-secondary);text-align:center;margin-bottom:3rem;max-width:620px;margin-left:auto;margin-right:auto;">EticAlert no se presenta como una herramienta genérica: ayuda al cliente a activar un canal comprensible, profesional y alineado con una necesidad real de cumplimiento.</p>
      <div class="grid-2up">
        <?php
        $calidad = [
          ['Especialización', 'Foco claro en canal de denuncias, cumplimiento y gestión de comunicaciones sensibles.'],
          ['Confianza', 'Mensaje comercial fácil de explicar: seguridad, seriedad y tranquilidad para el cliente.'],
          ['Trazabilidad', 'El cliente entiende qué se recibe, cómo se gestiona y por qué necesita orden interno.'],
          ['Activación', 'Una propuesta pensada para reducir fricción y acelerar la decisión de implantación.'],
        ];
        foreach ($calidad as $c): ?>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:12px;padding:1.25rem;">
          <h3 style="font-size:0.9375rem;font-weight:700;margin-bottom:0.5rem;"><?= $c[0] ?></h3>
          <p style="font-size:0.8125rem;color:var(--text-secondary);margin:0;"><?= $c[1] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <p style="text-align:center;color:var(--text-secondary);margin-top:2rem;max-width:640px;margin-left:auto;margin-right:auto;font-size:0.9375rem;">El partner gana credibilidad cuando recomienda una solución concreta, útil y fácil de justificar ante dirección.</p>
    </div>
  </section>

  <!-- VALOR PARA EL CLIENTE FINAL -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;text-align:center;">El cliente recibe una solución útil, no solo una recomendación</h2>
      <p style="color:var(--text-secondary);text-align:center;margin-bottom:3rem;max-width:620px;margin-left:auto;margin-right:auto;">EticAlert ayuda a transformar una necesidad sensible en un proceso más claro, más controlado y más fácil de activar.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1.5rem;">
        <?php
        $valor_cliente = [
          ['Claridad', 'Entiende qué problema resuelve, cómo se activa y por qué puede ser relevante para su organización.'],
          ['Control', 'Incorpora una herramienta que ordena una necesidad crítica y facilita una gestión más trazable.'],
          ['Tranquilidad', 'Cuenta con una solución especializada que reduce incertidumbre y refuerza la confianza interna.'],
        ];
        foreach ($valor_cliente as $v): ?>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:1.75rem;">
          <h3 style="font-size:1.0625rem;font-weight:700;margin-bottom:0.5rem;color:var(--accent);"><?= $v[0] ?></h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin:0;"><?= $v[1] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <p style="text-align:center;color:var(--text-secondary);margin-top:2rem;max-width:640px;margin-left:auto;margin-right:auto;font-size:0.9375rem;">Cuando el cliente percibe valor real, la recomendación del partner se convierte en una oportunidad más fácil de defender.</p>
    </div>
  </section>

  <!-- NECESIDAD REAL DE CUMPLIMIENTO -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);background:var(--bg-secondary);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;text-align:center;">Un canal de denuncias con respaldo normativo claro</h2>
      <p style="color:var(--text-secondary);text-align:center;margin-bottom:3rem;max-width:640px;margin-left:auto;margin-right:auto;">EticAlert ayuda a las organizaciones a abordar una obligación sensible: recibir, ordenar y tratar comunicaciones internas con confidencialidad, rigor y protección del informante.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1.5rem;">
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:1.75rem;">
          <h3 style="font-size:1rem;font-weight:700;margin-bottom:0.5rem;">Ley 2/2023</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin:0;">Marco español de protección de informantes y sistemas internos de información.</p>
        </div>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:1.75rem;">
          <h3 style="font-size:1rem;font-weight:700;margin-bottom:0.5rem;">Directiva (UE) 2019/1937</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin:0;">Impulsa canales internos efectivos para comunicar infracciones de forma segura y confidencial.</p>
        </div>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:1.75rem;">
          <h3 style="font-size:1rem;font-weight:700;margin-bottom:0.5rem;">Protección frente a represalias</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin:0;">La conversación con el cliente se apoya en confidencialidad, investigación adecuada y confianza organizativa.</p>
        </div>
      </div>
      <p style="text-align:center;color:var(--text-secondary);margin-top:2rem;max-width:640px;margin-left:auto;margin-right:auto;font-size:0.9375rem;">Para el partner, el canal de denuncias convierte una recomendación comercial en una propuesta de valor vinculada a cumplimiento y dirección.</p>
    </div>
  </section>

  <!-- VALOR PARA EL PARTNER -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;text-align:center;">Una recomendación que refuerza tu relación comercial</h2>
      <p style="color:var(--text-secondary);text-align:center;margin-bottom:3rem;max-width:620px;margin-left:auto;margin-right:auto;">EticAlert permite ofrecer una solución especializada sin fricción operativa, manteniendo al partner como prescriptor de confianza.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1.5rem;">
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:1.75rem;">
          <div style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.05em;color:var(--text-muted);margin-bottom:0.5rem;">Diferenciación</div>
          <h3 style="font-size:1.0625rem;font-weight:700;margin-bottom:0.5rem;">Amplía tu propuesta</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin:0;">Incorpora una solución complementaria que ayuda al cliente a resolver una necesidad concreta.</p>
        </div>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:1.75rem;">
          <div style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.05em;color:var(--text-muted);margin-bottom:0.5rem;">Fidelización</div>
          <h3 style="font-size:1.0625rem;font-weight:700;margin-bottom:0.5rem;">Aporta utilidad real</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin:0;">La recomendación genera conversación, continuidad y una razón adicional para permanecer cerca del cliente.</p>
        </div>
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:1.75rem;">
          <div style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.05em;color:var(--text-muted);margin-bottom:0.5rem;">Retorno</div>
          <h3 style="font-size:1.0625rem;font-weight:700;margin-bottom:0.5rem;">Convierte interés en valor</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin:0;">Cada oportunidad activada puede generar crédito dentro del programa partner, sujeto a condiciones.</p>
        </div>
      </div>
      <p style="text-align:center;color:var(--text-secondary);margin-top:2rem;max-width:640px;margin-left:auto;margin-right:auto;font-size:0.9375rem;">El objetivo es simple: que tus clientes accedan a EticAlert con acompañamiento y que tu empresa obtenga un beneficio por prescribirlo.</p>
    </div>
  </section>

  <!-- PROGRAMA DE CRÉDITO -->
  <section id="como-funciona" style="padding:60px 0;border-bottom:1px solid var(--border);background:var(--bg-secondary);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;text-align:center;">Crédito partner por oportunidades activadas</h2>
      <p style="color:var(--text-secondary);text-align:center;margin-bottom:1rem;max-width:620px;margin-left:auto;margin-right:auto;">Cuando un cliente recomendado contrata EticAlert, el partner puede generar crédito. Las condiciones aplicables se comparten de forma personalizada bajo solicitud.</p>
      <div class="grid-2up" style="margin-top:2.5rem;gap:2.5rem;">
        <?php
        $mecanica = [
          ['1', 'Recomiendas', 'Identificas una empresa que puede beneficiarse de EticAlert.'],
          ['2', 'Acompañas', 'EticAlert facilita el proceso comercial y la activación del cliente.'],
          ['3', 'Se activa', 'El cliente incorpora la solución y queda vinculado al partner prescriptor.'],
          ['4', 'Obtienes crédito', 'El programa reconoce la recomendación conforme a las condiciones vigentes.'],
        ];
        foreach ($mecanica as $m): ?>
        <div style="display:flex;align-items:flex-start;gap:1rem;background:var(--bg-card);border:1px solid var(--border);border-radius:12px;padding:1.5rem;">
          <div style="flex-shrink:0;width:36px;height:36px;border-radius:50%;background:rgba(74,222,128,0.1);border:2px solid var(--accent-border);display:flex;align-items:center;justify-content:center;font-size:0.9375rem;font-weight:800;color:var(--accent);"><?= $m[0] ?></div>
          <div>
            <h3 style="font-size:0.9375rem;font-weight:700;margin-bottom:0.375rem;"><?= $m[1] ?></h3>
            <p style="font-size:0.8125rem;color:var(--text-secondary);margin:0;"><?= $m[2] ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- USO DEL CRÉDITO -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:900px;">
      <h2 style="font-size:1.5rem;margin-bottom:0.5rem;text-align:center;">Elige cómo aprovechar el crédito generado</h2>
      <p style="color:var(--text-secondary);text-align:center;margin-bottom:3rem;max-width:620px;margin-left:auto;margin-right:auto;">El programa puede adaptarse a tu estrategia comercial: monetizar la recomendación o hacer más atractiva la propuesta para el cliente final.</p>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;padding:2rem;">
          <div style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.05em;color:var(--text-muted);margin-bottom:0.75rem;">Opción Partner</div>
          <h3 style="font-size:1.25rem;font-weight:800;margin-bottom:0.75rem;">Retirarlo como beneficio</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin-bottom:0.75rem;">El partner puede acumular crédito por clientes activados y solicitar su aplicación conforme a las condiciones del programa.</p>
          <p style="font-size:0.8125rem;color:var(--text-muted);margin:0;">Pensado para generar retorno directo por prescripción.</p>
        </div>
        <div style="background:var(--bg-card);border:2px solid var(--accent);border-radius:16px;padding:2rem;">
          <div style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.05em;color:var(--text-muted);margin-bottom:0.75rem;">Opción Cliente</div>
          <h3 style="font-size:1.25rem;font-weight:800;margin-bottom:0.75rem;">Aplicarlo al cliente final</h3>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin-bottom:0.75rem;">El crédito también puede utilizarse para mejorar la propuesta comercial del cliente recomendado y facilitar la contratación.</p>
          <p style="font-size:0.8125rem;color:var(--text-muted);margin:0;">Pensado para acelerar la decisión de compra.</p>
        </div>
      </div>
      <p style="text-align:center;font-size:0.8125rem;color:var(--text-muted);margin-top:2rem;">Las modalidades concretas se confirman al solicitar condiciones del programa partner.</p>
    </div>
  </section>

  <!-- FAQ -->
  <section style="padding:60px 0;border-bottom:1px solid var(--border);">
    <div class="container" style="max-width:860px;">
      <h2 style="font-size:1.5rem;margin-bottom:2rem;">Preguntas frecuentes</h2>
      <?php
      $faqs = [
        ['¿Cómo se genera el crédito del programa partner?', 'Cuando un cliente que has recomendado contrata EticAlert, el programa reconoce esa recomendación con crédito para el partner. Las condiciones exactas se comparten de forma personalizada al solicitar información, según tu volumen de cartera y el tipo de partnership.'],
        ['¿Qué puedo hacer con el crédito generado?', 'Dos opciones: retirarlo como beneficio propio por cada cliente activado, o aplicarlo a favor del cliente final para hacer más atractiva la propuesta y acelerar su decisión de compra. La modalidad se confirma al activar el acuerdo.'],
        ['¿Qué tipo de empresas pueden ser partner?', 'Tres perfiles principales: asesores (despachos, consultoras y profesionales de cumplimiento), proveedores B2B con cartera de clientes, y partners sectoriales que detectan oportunidades y quieren derivarlas de forma trazable.'],
        ['¿Necesito conocimientos técnicos para ser partner?', 'No. EticAlert es una plataforma SaaS sin instalación. El partner identifica la oportunidad y acompaña al cliente; EticAlert facilita el proceso comercial y la activación técnica.'],
        ['¿Hay una cuota para ser partner?', 'No. El programa no tiene coste de entrada. El crédito se genera solo cuando una recomendación se convierte en cliente activo.'],
        ['¿Cómo solicito las condiciones completas?', 'Escribe a partners@eticalert.com o responde a la propuesta que hayas recibido. Revisamos juntos cómo encaja EticAlert con tu cartera de clientes y te compartimos las condiciones vigentes.'],
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
      <h2 style="font-size:1.75rem;margin-bottom:1rem;">Hablemos de tu programa partner</h2>
      <p style="color:var(--text-secondary);margin-bottom:2rem;font-size:1.0625rem;">Solicita las condiciones y revisamos juntos cómo encaja EticAlert con tu cartera de clientes.</p>
      <a href="mailto:partners@eticalert.com?subject=Quiero solicitar las condiciones del programa partner" class="btn btn-primary" style="font-size:1.0625rem;padding:0.875rem 2.5rem;">
        Solicitar condiciones →
      </a>
      <p style="margin-top:1.25rem;font-size:0.875rem;color:var(--text-muted);">Sin coste de entrada · Respuesta personalizada</p>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
