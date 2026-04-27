<?php
$page_title       = 'Canal de denuncias y RGPD | Protección de datos en el canal interno';
$page_description = 'Cómo cumplir con el RGPD al gestionar un canal de denuncias. Datos recogidos, base legal, plazos de conservación, derechos del denunciante y del denunciado.';
$page_canonical   = 'https://eticalert.com/blog/canal-denuncias-rgpd-proteccion-datos';
$page_og_type           = 'article';
$page_article_published = '2026-02-28T00:00:00+01:00';
$page_article_modified  = '2026-02-28T00:00:00+01:00';
include '../includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Canal de denuncias y RGPD: cómo cumplir con protección de datos",
  "description": "Cómo cumplir con el RGPD al gestionar un canal de denuncias. Datos recogidos, base legal, plazos de conservación y derechos de los interesados.",
  "url": "https://eticalert.com/blog/canal-denuncias-rgpd-proteccion-datos",
  "datePublished": "2026-02-28",
  "dateModified": "2026-02-28",
  "author": {"@type":"Organization","name":"EticAlert"},
  "publisher": {"@type":"Organization","name":"EticAlert","url":"https://eticalert.com"},
  "keywords": "canal denuncias RGPD, protección de datos canal denuncias, base legal denuncia, EIPD canal denuncias"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Inicio","item":"https://eticalert.com/"},
    {"@type":"ListItem","position":2,"name":"Blog","item":"https://eticalert.com/blog/"},
    {"@type":"ListItem","position":3,"name":"Guías","item":"https://eticalert.com/blog/"},
    {"@type":"ListItem","position":4,"name":"Canal de denuncias y RGPD","item":"https://eticalert.com/blog/canal-denuncias-rgpd-proteccion-datos"}
  ]
}
</script>

<main id="main-content">
  <div class="legal-page" style="padding-top:100px;">
    <div class="container">

      <nav class="breadcrumb" aria-label="Migas de pan">
        <a href="/">Inicio</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <a href="/blog/">Blog</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <a href="/blog/">Guías</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span>Canal de denuncias y RGPD</span>
      </nav>

      <div class="article-content" style="margin:0 auto;">

        <span class="blog-badge badge-guias">Guías</span>
        <h1>Canal de denuncias y RGPD: cómo cumplir con protección de datos</h1>
        <p style="font-size:1.125rem;color:var(--text-secondary);margin:1rem 0 0.5rem;">Actualizado a febrero 2026 · 8 minutos de lectura</p>
        <p style="font-size:0.875rem; color:var(--text-muted); margin-bottom:2.5rem;">Publicado el <time datetime="2026-02-28">28 de febrero de 2026</time> por el equipo de EticAlert</p>

        <p>Un canal de denuncias trata datos personales de forma intensiva: datos del denunciante (a menudo sensibles), datos del denunciado (que pueden afectar a su honor y carrera profesional) y datos de terceros mencionados en la denuncia. Cumplir con el Reglamento General de Protección de Datos (RGPD) no es optativo: es una obligación que debe diseñarse desde el principio, no añadirse a posteriori. Este artículo te explica todo lo que necesitas saber.</p>

        <h2 id="datos-recogidos">¿Qué datos recoge un canal de denuncias?</h2>
        <p>Dependiendo de la denuncia concreta, el canal puede tratar categorías muy distintas de datos personales:</p>
        <ul>
          <li><strong>Datos del informante:</strong> si la denuncia no es anónima, nombre, apellidos, cargo, email, teléfono. Si es anónima, no se recogen datos identificativos pero sí puede haber metadatos (fecha, hora, tipo de dispositivo).</li>
          <li><strong>Datos del denunciado:</strong> nombre, cargo, área, descripción de la conducta irregular. Estos datos pueden incluir información sobre salud (ej. acoso por discapacidad), orientación sexual (acoso por este motivo) u otras categorías especialmente protegidas del artículo 9 RGPD.</li>
          <li><strong>Datos de terceros:</strong> testigos, víctimas o personas mencionadas en la descripción de los hechos.</li>
          <li><strong>Documentación adjunta:</strong> correos, facturas, fotografías u otros archivos que el informante aporte como prueba.</li>
        </ul>
        <p>El principio de <strong>minimización de datos</strong> del RGPD es especialmente importante aquí: el canal solo debe recoger los datos estrictamente necesarios para tramitar y investigar la denuncia.</p>

        <h2 id="base-legal">Base legal del tratamiento (art. 6.1.c RGPD)</h2>
        <p>La base legal para tratar los datos de un canal de denuncias en el contexto de la Ley 2/2023 es el <strong>artículo 6.1.c del RGPD: cumplimiento de una obligación legal</strong>. Al ser una obligación impuesta por la Ley 2/2023, la empresa no necesita obtener el consentimiento del informante ni del denunciado para tratar sus datos en el contexto de la tramitación de la denuncia.</p>
        <p>Esta base legal tiene implicaciones prácticas importantes:</p>
        <ul>
          <li>No es posible invocar el derecho de supresión (derecho al olvido) mientras la denuncia está activa o dentro del plazo de conservación obligatorio.</li>
          <li>No es posible retirar el "consentimiento" porque el tratamiento no se basa en él.</li>
          <li>La empresa sí debe informar a los interesados sobre el tratamiento, conforme al artículo 13 o 14 RGPD.</li>
        </ul>
        <p>Cuando la denuncia incluye datos de categorías especiales (datos de salud, orientación sexual, opiniones políticas, origen étnico), la base legal adicional es el artículo 9.2.b RGPD (tratamiento en el ámbito laboral) o el artículo 9.2.g (interés público esencial).</p>

        <h2 id="acceso-datos">¿Quién puede acceder a los datos?</h2>
        <p>La Ley 2/2023 es muy estricta en este punto: el acceso a los datos de una denuncia debe estar restringido al mínimo número de personas imprescindible para tramitarla.</p>
        <ul>
          <li><strong>El RSII</strong> tiene acceso pleno como responsable del sistema.</li>
          <li><strong>Las personas expresamente autorizadas</strong> por el RSII para colaborar en una investigación concreta, y solo durante esa investigación.</li>
          <li><strong>Los asesores externos</strong> (abogados, auditores) que el RSII contrate para una investigación específica, que deben firmar acuerdos de confidencialidad y actuar como encargados del tratamiento conforme al artículo 28 RGPD.</li>
          <li><strong>La AIPI</strong> puede solicitar acceso durante una inspección. Es la única excepción obligatoria.</li>
        </ul>
        <p>Está expresamente prohibido el acceso del área de RRHH general, del área investigada o de la dirección si son parte del asunto investigado. La separación funcional es un requisito de cumplimiento, no solo una recomendación.</p>

        <h2 id="plazos">Plazos de conservación: máximo 10 años</h2>
        <p>La Ley 2/2023, en su artículo 26, establece que los datos del canal de denuncias deben conservarse <strong>durante el tiempo necesario para la instrucción del expediente</strong>. Una vez concluida la tramitación:</p>
        <ul>
          <li>Si la denuncia fue archivada o desestimada sin investigación: los datos deben suprimirse en <strong>3 meses</strong> desde el acuse de recibo (aunque puede conservarse un registro anonimizado para estadísticas).</li>
          <li>Si se abrió investigación: los datos se conservan mientras dure la investigación y, una vez concluida, durante el tiempo necesario para que puedan derivarse acciones legales.</li>
          <li>En todo caso, el <strong>plazo máximo de conservación es de 10 años</strong>, plazo vinculado a la posible prescripción de delitos graves.</li>
        </ul>
        <p>Es fundamental que el sistema técnico permita la supresión automática o al menos la revisión periódica de los datos conservados.</p>

        <h2 id="derechos-denunciante">Derechos del denunciante</h2>
        <p>El informante tiene los derechos habituales del RGPD: acceso, rectificación, supresión, limitación del tratamiento y portabilidad. Sin embargo, el ejercicio de estos derechos tiene particularidades:</p>
        <ul>
          <li><strong>Derecho de acceso:</strong> el informante puede conocer qué datos suyos se tratan, pero no puede acceder a información que revele la identidad del denunciado ni el estado de la investigación si pudiera obstaculizarla.</li>
          <li><strong>Derecho de supresión:</strong> no aplica mientras la denuncia esté en tramitación activa o dentro del plazo de conservación obligatorio.</li>
          <li><strong>Derecho a la información:</strong> el canal debe incluir una cláusula informativa conforme al art. 13 RGPD antes de enviar la denuncia.</li>
        </ul>

        <h2 id="derechos-denunciado">Derechos del denunciado (limitados para no obstaculizar la investigación)</h2>
        <p>El denunciado también tiene derechos RGPD, pero su ejercicio puede limitarse durante la fase de investigación para no comprometer la eficacia de esta. La jurisprudencia europea y las directrices de las autoridades de protección de datos reconocen esta limitación temporal.</p>
        <ul>
          <li>El denunciado no debe ser informado de la denuncia mientras la investigación pueda verse comprometida por esa información.</li>
          <li>Una vez concluida la fase de investigación y adoptadas medidas, sí debe ser informado si la denuncia ha afectado a sus datos personales.</li>
          <li>Si la denuncia resulta ser infundada, el denunciado tiene derecho a que sus datos sean suprimidos del sistema o, al menos, a que conste que fue exonerado.</li>
        </ul>

        <div style="border-left:3px solid var(--accent);background:var(--bg-tertiary);padding:1.25rem 1.5rem;border-radius:0 8px 8px 0;margin:2rem 0;">
          <strong style="color:var(--accent);">Importante:</strong> Informar prematuramente al denunciado puede destruir evidencias, generar represalias contra el informante o entorpecer la investigación. La limitación temporal del derecho de información del denunciado está respaldada por el RGPD y por las directrices de la AEPD.
        </div>

        <h2 id="eipd">¿Se necesita Evaluación de Impacto (EIPD)?</h2>
        <p>La Evaluación de Impacto en la Protección de Datos (EIPD o DPIA, por sus siglas en inglés) es una obligación del artículo 35 RGPD cuando el tratamiento supone un alto riesgo para los derechos de las personas.</p>
        <p>Un canal de denuncias típicamente sí requiere EIPD porque cumple varios de los criterios que la hacen necesaria:</p>
        <ul>
          <li>Trata datos de categorías especiales (potencialmente).</li>
          <li>Puede tratar datos de personas vulnerables (empleados en situación de dependencia laboral).</li>
          <li>Las consecuencias del tratamiento pueden ser graves para el denunciado (pérdida de empleo, daño reputacional).</li>
        </ul>
        <p>La EIPD debe realizarse antes de activar el canal, no después. Si utilizas una plataforma SaaS como EticAlert, el proveedor puede facilitarte documentación técnica que simplifique considerablemente la EIPD.</p>

        <h2 id="dpo">El papel del DPO</h2>
        <p>Si tu empresa tiene obligación de designar un Delegado de Protección de Datos (DPO), este debe estar involucrado en la implantación del canal de denuncias. Sus funciones específicas incluyen:</p>
        <ul>
          <li>Asesorar sobre la base legal y la configuración del tratamiento.</li>
          <li>Revisar la EIPD y validar las medidas técnicas y organizativas.</li>
          <li>Ser el punto de contacto para ejercicio de derechos por parte de informantes y denunciados.</li>
          <li>Supervisar que el canal cumple el principio de privacy by design.</li>
        </ul>
        <p>Si tu empresa no tiene DPO obligatorio pero quieres asegurarte de cumplir el RGPD, puedes contar con un DPO externo o con el asesoramiento de tu abogado especialista en protección de datos.</p>

        <h2 id="eticalert-rgpd">Cómo ayuda EticAlert con el RGPD</h2>
        <p>EticAlert ha sido diseñado siguiendo el principio de <em>privacy by design</em> desde su arquitectura técnica:</p>
        <ul>
          <li><strong>Datos almacenados exclusivamente en la Unión Europea</strong>, en servidores certificados conforme a estándares de seguridad europeos.</li>
          <li><strong>Cifrado AES-256</strong> para todos los datos en reposo y TLS 1.3 para los datos en tránsito.</li>
          <li><strong>Anonimato real</strong>: el sistema no registra la IP del denunciante ni cookies de identificación en el formulario de denuncia.</li>
          <li><strong>Separación de roles</strong> técnicamente implementada: el RSII ve solo lo que debe ver.</li>
          <li><strong>Supresión automática</strong> configurable según los plazos de conservación legales.</li>
          <li><strong>Registro de auditoría</strong> inmutable (append-only) para demostrar cumplimiento ante la AIPI o la AEPD.</li>
          <li>Documentación técnica disponible para facilitar la EIPD.</li>
        </ul>

        <div style="background:var(--bg-card);border:1px solid var(--accent-border);border-radius:16px;padding:2rem;margin:3rem 0;">
          <h3 style="margin-bottom:0.75rem;font-size:1.125rem;">Cumple la Ley 2/2023 y el RGPD con una sola herramienta</h3>
          <p style="font-size:0.9375rem;margin-bottom:1.25rem;">EticAlert integra el cumplimiento de la Ley 2/2023 y el RGPD en una sola plataforma. Gratis hasta 20 empleados · desde 19€/mes.</p>
          <a href="/registro" class="btn btn-primary">Cumple la Ley 2/2023 y el RGPD con una sola herramienta →</a>
        </div>

        <p>Recursos relacionados:</p>
        <ul>
          <li><a href="/registro" style="color:var(--accent);">Crear mi canal de denuncias →</a></li>
          <li><a href="/blog/ley-2-2023-canal-de-denuncias" style="color:var(--accent);">Ley 2/2023: guía completa →</a></li>
          <li><a href="/canal-de-denuncias" style="color:var(--accent);">Qué es un canal de denuncias →</a></li>
          <li><a href="/blog/proteccion-informante-ley" style="color:var(--accent);">Protección del informante según la Ley 2/2023 →</a></li>
        </ul>

        <div class="related-articles">
          <h3>Artículos relacionados</h3>
          <div class="related-grid">
            <a href="/blog/ley-2-2023-canal-de-denuncias" class="related-card">
              <span class="blog-badge badge-marco-legal">Marco legal</span>
              <h4>Ley 2/2023: todo lo que tu empresa necesita saber</h4>
            </a>
            <a href="/blog/proteccion-informante-ley" class="related-card">
              <span class="blog-badge badge-cultura-etica">Cultura ética</span>
              <h4>Protección del informante: garantías de la Ley 2/2023</h4>
            </a>
            <a href="/blog/como-implantar-canal-denuncias" class="related-card">
              <span class="blog-badge badge-guias">Guías</span>
              <h4>Cómo implantar un canal de denuncias: guía paso a paso</h4>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>

<?php include '../includes/footer.php'; ?>
