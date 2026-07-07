<?php
$page_title       = 'Canal de denuncias para criptoactivos | EticAlert';
$page_description = 'PSAV, CASP y MiCA: triple obligación para empresas de criptoactivos. Canal exigido desde el primer día con licencia CNMV.';
$page_canonical   = 'https://eticalert.com/blog/canal-denuncias-criptoactivos';
$page_og_type           = 'article';
$page_article_published = '2026-05-26T00:00:00+01:00';
$page_article_modified  = '2026-06-10T00:00:00+02:00';
include '../includes/header.php';
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "Canal de denuncias para empresas de criptoactivos: PSAV, MiCA y obligación whistleblowing",
  "description": "Los PSAV y CASP bajo MiCA son sujetos obligados PBC y están en el ámbito de la normativa UE de servicios financieros. La obligación de canal de denuncias aplica independientemente de su plantilla.",
  "image": {"@type":"ImageObject","url":"https://eticalert.com/img/og-image.php","width":1200,"height":630},
  "url": "https://eticalert.com/blog/canal-denuncias-criptoactivos",
  "datePublished": "2026-05-26","dateModified": "2026-06-10",
  "author": {"@type":"Organization","name":"EticAlert"},
  "publisher": {"@type":"Organization","name":"EticAlert","url":"https://eticalert.com"},
  "keywords": "canal denuncias criptoactivos, canal denuncias exchange crypto, canal denuncias PSAV, canal denuncias MiCA, whistleblowing criptomonedas obligatorio"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Inicio","item":"https://eticalert.com/"},
    {"@type":"ListItem","position":2,"name":"Blog","item":"https://eticalert.com/blog/"},
    {"@type":"ListItem","position":3,"name":"Canal de denuncias para criptoactivos","item":"https://eticalert.com/blog/canal-denuncias-criptoactivos"}
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"¿Están obligados los exchanges de criptomonedas a tener canal de denuncias?","acceptedAnswer":{"@type":"Answer","text":"Sí. Los exchanges y demás proveedores de servicios de criptoactivos (PSAV) registrados en el Banco de España son sujetos obligados por la Ley 10/2010 de prevención del blanqueo. La Directiva Whistleblowing los incluye en el ámbito de obligación de canal de denuncias con independencia del número de empleados. Con la plena aplicación del Reglamento MiCA, esta obligación se extiende a todos los CASP (Crypto-Asset Service Providers) autorizados en cualquier país de la UE."}},
    {"@type":"Question","name":"¿El canal de denuncias de la Ley 2/2023 cubre también los requisitos de reporte interno de MiCA?","acceptedAnswer":{"@type":"Answer","text":"Parcialmente. El Reglamento MiCA exige procedimientos de comunicación interna para reportar infracciones al CASP. El canal del SII de la Ley 2/2023 puede servir para ese fin si está correctamente configurado. Sin embargo, MiCA también exige que el personal pueda reportar directamente al organismo competente (CNMV en España), lo que requiere procedimientos adicionales de reporte externo que van más allá del canal interno."}},
    {"@type":"Question","name":"¿Los contractors y freelances de una empresa cripto pueden usar el canal de denuncias?","acceptedAnswer":{"@type":"Answer","text":"Sí. La Ley 2/2023 protege a los trabajadores autónomos y colaboradores que conocen infracciones en un contexto profesional, con independencia de su país de residencia. Si parte del equipo del CASP español trabaja como contractor desde el extranjero, el canal debe estar accesible para ellos (idealmente también en inglés)."}},
    {"@type":"Question","name":"¿DORA añade requisitos al canal de denuncias de un CASP?","acceptedAnswer":{"@type":"Answer","text":"No regula el canal directamente, pero amplía su materia: la ocultación o clasificación incorrecta de incidentes TIC graves que deberían notificarse bajo DORA es una infracción de normativa europea de servicios financieros, comunicable a través del canal interno. El protocolo del canal debería prever la derivación de estos hallazgos al responsable de riesgo TIC."}}
  ]
}
</script>
<main id="main-content">
  <div class="legal-page" style="padding-top:100px;">
    <div class="container">
      <nav class="breadcrumb" aria-label="Migas de pan">
        <a href="/">Inicio</a><span class="breadcrumb-sep">›</span>
        <a href="/blog/">Blog</a><span class="breadcrumb-sep">›</span>
        <span>Canal de denuncias para criptoactivos</span>
      </nav>
      <div class="article-content" style="margin:0 auto;">
        <span class="blog-badge badge-sectores">Por sector</span>
        <h1>Canal de denuncias para empresas de criptoactivos: PSAV, MiCA y obligación whistleblowing</h1>
        <p style="font-size:1.125rem;color:var(--text-secondary);margin:1rem 0 0.5rem;">Actualizado a junio 2026 · 10 minutos de lectura</p>
        <p style="font-size:0.875rem;color:var(--text-muted);margin-bottom:2.5rem;">Publicado el <time datetime="2026-05-26">26 de mayo de 2026</time> por el equipo de EticAlert</p>

        <p>El sector de criptoactivos es el que tiene el stack regulatorio de mayor crecimiento en la UE. Entre 2023 y 2025 se han acumulado tres marcos normativos que generan, directa o indirectamente, una <strong>obligación de canal de denuncias para prácticamente cualquier empresa del sector</strong>: la Ley 10/2010 (PBC), el Reglamento MiCA y la Ley 2/2023 (Whistleblowing). Y la obligación no depende del tamaño: una startup de criptoactivos de 10 personas puede estar plenamente obligada.</p>

        <h2 id="triple-obligacion">La triple vía de obligación</h2>

        <h3>1. Sujeto obligado PBC (Ley 10/2010 + 5AMLD)</h3>
        <p>Los <strong>PSAV (Proveedores de Servicios de Activos Virtuales)</strong> registrados en el Banco de España son sujetos obligados por la Ley 10/2010, en aplicación de la 5ª Directiva Antiblaqueo (AMLD5). Esto les obliga a aplicar medidas de diligencia debida (KYC/AML), a comunicar operaciones sospechosas al SEPBLAC y, por esta misma condición de sujeto PBC, a tener canal de denuncias conforme a la Directiva Whistleblowing.</p>

        <h3>2. CASP bajo el Reglamento MiCA</h3>
        <p>El Reglamento (UE) 2023/1114 sobre Mercados de Criptoactivos (MiCA) es el marco regulatorio europeo que reemplaza los regímenes nacionales y crea la categoría de <strong>CASP (Crypto-Asset Service Provider)</strong>. MiCA exige que los CASP dispongan de <em>«procedimientos para el tratamiento interno de las denuncias presentadas por el personal»</em> (art. 62.2.f). Esto crea una obligación de canal de denuncias interno paralela a la de la Directiva Whistleblowing.</p>

        <h3>3. Normativa UE de servicios financieros → Directiva Whistleblowing</h3>
        <p>Los CASP operan en el ámbito de la normativa de la Unión sobre mercados de instrumentos financieros y servicios financieros. La Directiva 2019/1937 y la Ley 2/2023 los incluyen en el ámbito de obligación de canal de denuncias con independencia del número de empleados.</p>

        <div class="callout">
          <p><strong>Resumen:</strong> un exchange de criptomonedas con 8 empleados y registro PSAV tiene tres obligaciones concurrentes de canal/reporte interno: la Ley 10/2010 (PBC), MiCA (art. 62) y la Ley 2/2023 (Whistleblowing). El canal del SII puede cubrir las tres si está bien configurado.</p>
        </div>

        <h2 id="que-puede-llegar">¿Qué comunicaciones recibirá el canal?</h2>
        <p>El perfil de riesgo del sector de criptoactivos es muy específico:</p>
        <ul>
          <li><strong>Incumplimientos KYC/AML:</strong> onboarding de clientes sin verificación adecuada de identidad, aceptación de clientes de alto riesgo sin aprobación del MLRO, sistema de monitorización de transacciones desactivado o con umbrales manipulados.</li>
          <li><strong>Manipulación del mercado:</strong> wash trading, pump and dump coordinado por la propia empresa, operaciones de front-running sobre los pedidos de los clientes.</li>
          <li><strong>Custodia inadecuada de activos:</strong> mezcla de activos propios con los de clientes (commingling), uso de los fondos de clientes para operaciones propias.</li>
          <li><strong>Incidentes de seguridad no reportados:</strong> hackeos, pérdidas de claves privadas o brechas de datos que no se notifican al Banco de España o a la AEPD.</li>
          <li><strong>Presión para ocultar transacciones sospechosas:</strong> directivos que instruyen al MLRO a no comunicar al SEPBLAC ciertas operaciones de clientes VIP.</li>
          <li><strong>Incumplimientos del Travel Rule:</strong> transferencias de criptoactivos ejecutadas sin adjuntar la información de ordenante y beneficiario que exige el Reglamento (UE) 2023/1113, o con los controles de contraparte desactivados para corredores de alto volumen.</li>
          <li><strong>Promociones engañosas:</strong> campañas y comunicaciones comerciales sobre criptoactivos que omiten las advertencias de riesgo exigidas (en España, bajo la supervisión de la CNMV), o pagos a influencers no declarados como publicidad.</li>
        </ul>

        <h2 id="dora-travel-rule">DORA y el Travel Rule: dos capas más del mismo stack</h2>
        <p>A las tres vías de obligación se les han sumado dos marcos que el canal debe tener en el radar:</p>
        <ul>
          <li><strong>DORA (Reglamento UE 2022/2554).</strong> Los CASP son entidades financieras a efectos de DORA: gestión de riesgo TIC, notificación de incidentes graves y pruebas de resiliencia. Para el canal, esto añade un tipo de comunicación de alto valor: el empleado de ingeniería que sabe que un incidente grave no se clasificó como tal para no notificarlo, o que las pruebas de resiliencia se "maquillaron". Son infracciones de normativa europea de servicios financieros: materia del canal.</li>
          <li><strong>Travel Rule (Reglamento UE 2023/1113).</strong> Obliga a acompañar cada transferencia de criptoactivos con datos del ordenante y del beneficiario, sin umbral mínimo. Su incumplimiento sistemático es una infracción PBC — y quien mejor lo conoce es el equipo de operaciones, no el regulador.</li>
        </ul>

        <h2 id="transicion-mica">La autorización CASP: el canal como activo en el expediente</h2>
        <p>Las empresas españolas del sector están transitando del registro PSAV del Banco de España a la <strong>autorización CASP ante la CNMV</strong> bajo MiCA. En ese expediente, la CNMV revisa la gobernanza interna — y el art. 62.2.f exige expresamente procedimientos para que el personal comunique infracciones internamente. Llegar a la solicitud con un canal operativo, con RSII notificado a la AIPI, protocolo escrito y libro-registro en marcha convierte un posible requerimiento en un punto resuelto del expediente. Lo contrario — montar el canal a toda prisa cuando la CNMV lo pide — retrasa la autorización y deja constancia de una gobernanza inmadura.</p>

        <h2 id="equipos-remotos">El reto real: equipos remotos, contractors y anonimato creíble</h2>
        <p>La empresa cripto típica española no se parece a una entidad financiera tradicional: 10-40 personas, equipos distribuidos en varios países, una parte de la plantilla como contractors y comunicación asíncrona en Slack o Discord. Eso condiciona el canal:</p>
        <ul>
          <li><strong>Los contractors también son informantes protegidos.</strong> La Ley 2/2023 cubre a autónomos y colaboradores que conocen infracciones en contexto profesional. Si la mitad del equipo factura como freelance desde fuera de España, siguen necesitando acceso al canal del CASP español.</li>
          <li><strong>El anonimato tiene que ser técnico, no prometido.</strong> En un equipo de 15 personas, decir "es confidencial" no tranquiliza a nadie — menos aún a perfiles técnicos que saben lo que registra un servidor. Un canal sin registro de IP, con comunicación por código de seguimiento y con hash verificable de la denuncia es el único tipo de anonimato que un ingeniero se cree.</li>
          <li><strong>Multi-idioma desde el día uno.</strong> Si el equipo opera en español e inglés, el formulario y las comunicaciones del RSII deben funcionar en ambos. Un canal solo en español excluye de facto a parte de la plantilla.</li>
          <li><strong>El RSII en estructuras planas.</strong> En una startup sin departamento de compliance separado, el RSII suele ser el responsable de cumplimiento/MLRO. El protocolo debe prever el sustituto para denuncias que le afecten — típicamente un cofundador no operativo o un asesor externo.</li>
        </ul>

        <div style="background:var(--bg-card);border:1px solid var(--border-accent);border-radius:var(--radius-lg);padding:1.75rem;margin:2.5rem 0;">
          <h3 style="margin-bottom:0.5rem;">Canal de denuncias para PSAV y CASP desde 9€/mes</h3>
          <p style="color:var(--text-secondary);margin-bottom:1.5rem;">Hash SHA-256 verificable, cifrado AES-256 en base de datos, sin cookies ni tracking. Compatible con los requisitos de MiCA art. 62 y la Ley 2/2023 de whistleblowing. Registro en el Banco de España con el canal activo desde día 1.</p>
          <div style="display:flex;gap:1rem;flex-wrap:wrap;">
            <a href="/registro" class="btn btn-primary">Activar mi canal →</a>
            <a href="/funcionalidades" class="btn btn-secondary">Ver funcionalidades de seguridad</a>
          </div>
          <p style="margin-top:1rem;font-size:0.8125rem;color:var(--text-muted);">15 días de prueba gratuita · Sin permanencia</p>
        </div>

        <div class="related-articles">
          <h3>Artículos relacionados</h3>
          <div class="related-grid">
            <a href="/blog/canal-denuncias-fintech" class="related-card">
              <span class="blog-badge badge-sectores">Por sector</span>
              <h4>Canal de denuncias para fintech reguladas</h4>
            </a>
            <a href="/blog/canal-denuncias-sujetos-obligados-pbc" class="related-card">
              <span class="blog-badge badge-sectores">Por sector</span>
              <h4>Canal de denuncias para sujetos obligados PBC</h4>
            </a>
            <a href="/blog/obligados-menos-50-empleados" class="related-card">
              <span class="blog-badge badge-marco-legal">Marco legal</span>
              <h4>¿Obligado aunque tengas menos de 50 empleados?</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include '../includes/footer.php'; ?>
