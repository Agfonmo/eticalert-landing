<?php
$page_title       = 'Canal de denuncias para notarías y registros: obligación Ley 2/2023 | EticAlert';
$page_description = 'Notarios y registradores de la propiedad son sujetos obligados PBC y deben tener canal de denuncias según la Ley 2/2023 independientemente de su tamaño.';
$page_canonical   = 'https://eticalert.com/blog/canal-denuncias-notarias-registros';
$page_og_type           = 'article';
$page_article_published = '2026-05-26T00:00:00+01:00';
$page_article_modified  = '2026-05-26T00:00:00+01:00';
include '../includes/header.php';
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "Canal de denuncias para notarías y registros: obligación Ley 2/2023",
  "description": "Notarios y registradores son sujetos obligados PBC (Ley 10/2010) y están obligados a tener canal de denuncias por la Ley 2/2023, con independencia del número de empleados.",
  "image": {"@type":"ImageObject","url":"https://eticalert.com/img/og-image.php","width":1200,"height":630},
  "url": "https://eticalert.com/blog/canal-denuncias-notarias-registros",
  "datePublished": "2026-05-26","dateModified": "2026-05-26",
  "author": {"@type":"Organization","name":"EticAlert"},
  "publisher": {"@type":"Organization","name":"EticAlert","url":"https://eticalert.com"},
  "keywords": "canal denuncias notaría, canal denuncias notario, canal denuncias registro propiedad, notarios obligados canal denuncias"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Inicio","item":"https://eticalert.com/"},
    {"@type":"ListItem","position":2,"name":"Blog","item":"https://eticalert.com/blog/"},
    {"@type":"ListItem","position":3,"name":"Canal de denuncias para notarías","item":"https://eticalert.com/blog/canal-denuncias-notarias-registros"}
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"¿Están obligados los notarios a tener canal de denuncias?","acceptedAnswer":{"@type":"Answer","text":"Sí. Los notarios son sujetos obligados por la Ley 10/2010 de prevención del blanqueo (art. 2.1.ñ). La Directiva Whistleblowing y la Ley 2/2023 extienden la obligación de canal a los sujetos del ámbito normativo PBC con independencia de cuántos empleados tengan. Una notaría con 3 empleados puede estar tan obligada como una gran empresa."}},
    {"@type":"Question","name":"¿Qué puede denunciarse en el canal de una notaría?","acceptedAnswer":{"@type":"Answer","text":"Las comunicaciones más habituales en una notaría serían: autorización de escrituras con signos evidentes de precio inferior al real para evadir impuestos; identificación insuficiente o ficticia de los comparecientes; instrumentación de operaciones sospechosas de blanqueo sin proceder a la comunicación al SEPBLAC; presión del notario a su personal para no reportar internamente anomalías detectadas."}}
  ]
}
</script>
<main id="main-content">
  <div class="legal-page" style="padding-top:100px;">
    <div class="container">
      <nav class="breadcrumb" aria-label="Migas de pan">
        <a href="/">Inicio</a><span class="breadcrumb-sep">›</span>
        <a href="/blog/">Blog</a><span class="breadcrumb-sep">›</span>
        <span>Canal de denuncias para notarías y registros</span>
      </nav>
      <div class="article-content" style="margin:0 auto;">
        <span class="blog-badge badge-sectores">Por sector</span>
        <h1>Canal de denuncias para notarías y registros: obligación y cómo cumplir</h1>
        <p style="font-size:1.125rem;color:var(--text-secondary);margin:1rem 0 0.5rem;">Actualizado a mayo 2026 · 6 minutos de lectura</p>
        <p style="font-size:0.875rem;color:var(--text-muted);margin-bottom:2.5rem;">Publicado el <time datetime="2026-05-26">26 de mayo de 2026</time> por el equipo de EticAlert</p>

        <p>Las notarías y los registros de la propiedad y mercantiles tienen una obligación de canal de denuncias que deriva no del tamaño de la organización, sino de su posición como <strong>sujetos obligados por la Ley 10/2010 de prevención del blanqueo de capitales (PBC)</strong>. Una notaría con el notario titular y cuatro oficiales de notaría puede estar plenamente obligada.</p>

        <h2 id="base-legal">Base legal: sujetos obligados PBC</h2>
        <p>El artículo 2 de la Ley 10/2010 incluye expresamente entre los sujetos obligados a:</p>
        <ul>
          <li><strong>Notarios</strong> (art. 2.1.ñ).</li>
          <li><strong>Registradores de la propiedad, mercantiles y de bienes muebles</strong> (art. 2.1.o).</li>
        </ul>
        <p>Ambos actúan como nodos de control en operaciones de alto valor económico —transmisiones de inmuebles, constitución de sociedades, ampliaciones de capital, pignoración de activos— que son vías clásicas de blanqueo de capitales. Su inclusión en la Ley 10/2010 no es accidental.</p>
        <p>La Directiva (UE) 2019/1937 (Whistleblowing) obliga a los sujetos del ámbito normativo PBC a tener canal de denuncias interno. La <a href="/blog/ley-2-2023-canal-de-denuncias" style="color:var(--accent);">Ley 2/2023</a> transpone esa directiva al derecho español. El resultado es que notarios y registradores deben tener canal de denuncias <strong>con independencia del número de empleados</strong>.</p>

        <h2 id="que-riesgos">Los riesgos específicos del sector</h2>
        <p>Las notarías y los registros están expuestos a patrones de riesgo muy concretos que justifican la existencia de un canal confidencial:</p>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:1rem;margin:1.5rem 0;">
          <?php
          $riesgos = [
            ['🏠','Operaciones inmobiliarias con precio ficticio','Escrituras con precio de compraventa manifiestamente inferior al real para reducir la tributación. El personal de la notaría lo detecta pero no tiene canal seguro para comunicarlo.'],
            ['🪪','Identificación deficiente de comparecientes','Partes en la escritura con documentación de identidad dudosa o caducada que no son rechazadas por el notario por razones comerciales o de relación personal.'],
            ['🔄','Operaciones sospechosas no reportadas al SEPBLAC','El personal detecta señales de alerta de blanqueo en una operación, pero el notario o registrador decide no comunicarlo al Servicio Ejecutivo de la Comisión de PBC.'],
            ['🏢','Constituciones de sociedades instrumentales','Creación masiva de estructuras societarias sin finalidad económica aparente, con titulares beneficiarios opacos o testaferros, sin que se adopten medidas de diligencia debida reforzada.'],
            ['⚡','Conflictos de interés del titular','El notario o registrador titular tiene relación personal o económica con alguna de las partes de una operación y no declara el conflicto ni redirige la operación.'],
          ];
          foreach ($riesgos as [$ico,$tit,$desc]):?>
          <div style="background:var(--bg-secondary);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.25rem;">
            <p style="margin:0;font-size:1.25rem;"><?= $ico ?></p>
            <p style="margin:0.5rem 0 0;font-weight:600;font-size:0.9375rem;"><?= $tit ?></p>
            <p style="margin:0.375rem 0 0;font-size:0.8125rem;color:var(--text-secondary);"><?= $desc ?></p>
          </div>
          <?php endforeach; ?>
        </div>

        <h2 id="quien-puede-comunicar">¿Quién puede usar el canal en una notaría?</h2>
        <p>El canal de denuncias de la notaría o registro no es solo para los empleados directos. La Ley 2/2023 garantiza acceso a cualquier persona vinculada a la organización: oficiales y auxiliares de notaría, personal administrativo, practicantes o alumnos en periodo de formación, colaboradores externos y cualquier persona que haya tenido relación laboral o profesional con la organización.</p>
        <p>No incluye a los comparecientes o clientes de la notaría, que tienen otros canales para reportar irregularidades (AIPI, Consejo General del Notariado, organismos judiciales).</p>

        <h2 id="rsii-notaria">El RSII en una notaría o registro</h2>
        <p>La designación del Responsable del Sistema Interno de Información (RSII) en una notaría es una cuestión práctica relevante. El RSII debe tener autonomía funcional y carecer de conflicto de interés. En una notaría con pocos empleados, puede ser:</p>
        <ul>
          <li>El propio notario titular, si la firma es pequeña y no tiene directivo de compliance.</li>
          <li>El oficial de notaría de mayor rango, si tiene la formación adecuada.</li>
          <li>Un RSII externo designado a través de una asesoría o consultoría de compliance.</li>
        </ul>
        <p>La designación debe comunicarse a la <a href="/blog/aipi-sanciones-canal-denuncias" style="color:var(--accent);">AIPI</a> a través de su sede electrónica. EticAlert incluye la plantilla de la política del SII y el procedimiento de designación y notificación del RSII.</p>

        <div style="background:var(--bg-card);border:1px solid var(--border-accent);border-radius:var(--radius-lg);padding:1.75rem;margin:2.5rem 0;">
          <h3 style="margin-bottom:0.5rem;">Canal operativo para notarías desde 9€/mes</h3>
          <p style="color:var(--text-secondary);margin-bottom:1.5rem;">Sin técnicos ni consultores. El canal se activa en 5 minutos con cifrado, anonimato y plazos automáticos. Política del SII y documentación AIPI incluidas.</p>
          <div style="display:flex;gap:1rem;flex-wrap:wrap;">
            <a href="/registro" class="btn btn-primary">Activar mi canal →</a>
            <a href="/precios" class="btn btn-secondary">Ver planes</a>
          </div>
          <p style="margin-top:1rem;font-size:0.8125rem;color:var(--text-muted);">15 días de prueba gratuita · Sin permanencia</p>
        </div>

        <div class="related-articles">
          <h3>Artículos relacionados</h3>
          <div class="related-grid">
            <a href="/blog/canal-denuncias-sujetos-obligados-pbc" class="related-card">
              <span class="blog-badge badge-sectores">Por sector</span>
              <h4>Canal de denuncias para sujetos obligados PBC</h4>
            </a>
            <a href="/blog/obligados-menos-50-empleados" class="related-card">
              <span class="blog-badge badge-marco-legal">Marco legal</span>
              <h4>¿Obligado aunque tengas menos de 50 empleados?</h4>
            </a>
            <a href="/blog/canal-denuncias-despachos-abogados" class="related-card">
              <span class="blog-badge badge-sectores">Por sector</span>
              <h4>Canal de denuncias para despachos de abogados</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include '../includes/footer.php'; ?>
