<?php
$page_title       = 'Funcionalidades del canal de denuncias: qué incluye EticAlert 2026';
$page_description = 'Las funcionalidades clave de EticAlert: cifrado en base de datos, hash verificable, exclusión de gestoras, plazos automáticos. Plan Starter desde 9€/mes. Cumple la Ley 2/2023.';
$page_canonical   = 'https://eticalert.com/funcionalidades';
include 'includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "EticAlert",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Web",
  "url": "https://eticalert.com",
  "offers": {"@type": "Offer", "price": "9", "priceCurrency": "EUR"},
  "featureList": "Canal anónimo, Cifrado AES-256 en base de datos, Hash verificable, Exclusión preventiva de gestoras, Plazos automatizados Ley 2/2023, Registro append-only, Documentos legales PDF, Plan Starter desde 9€/mes",
  "description": "Plataforma SaaS de canal de denuncias conforme a la Ley 2/2023."
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Inicio","item":"https://eticalert.com/"},
    {"@type":"ListItem","position":2,"name":"Funcionalidades","item":"https://eticalert.com/funcionalidades"}
  ]
}
</script>

<main id="main-content">
  <div class="legal-page" style="padding-top:100px;">
    <div class="container" style="max-width:900px;">

      <!-- HERO -->
      <div style="max-width:660px;margin-bottom:3rem;" class="fade-up">
        <span class="overline">Funcionalidades</span>
        <h1 style="font-size:clamp(1.875rem,4vw,2.5rem);">Qué hace EticAlert y en qué se diferencia</h1>
        <p style="font-size:1.0625rem;color:var(--text-secondary);margin:0.875rem 0 0;">Canal de denuncias conforme a la <a href="/blog/ley-2-2023-canal-de-denuncias" style="color:var(--accent);">Ley 2/2023</a>. Funcionalidades de seguridad que la mayoría de competidores no tienen.</p>
      </div>

      <!-- ============================================================ -->
      <!-- 1. ÚNICOS EN EL MERCADO -->
      <!-- ============================================================ -->
      <h2 style="font-size:1.125rem;font-weight:700;margin-bottom:1rem;color:var(--text-primary);">Únicos en el mercado español</h2>

      <div class="func-unicos">

        <div class="func-card func-card-unico">
          <div class="func-card-header">
            <span class="func-name">Exclusión preventiva de gestoras</span>
            <span class="badge-unico">Único</span>
          </div>
          <p class="func-desc">El informante bloquea personas concretas del equipo gestor en el momento de enviar la denuncia. Las excluidas no ven el caso ni pueden ser asignadas.</p>
        </div>

        <div class="func-card func-card-unico">
          <div class="func-card-header">
            <span class="func-name">Hash SHA-256 verificable</span>
            <span class="badge-unico">Único</span>
          </div>
          <p class="func-desc">Cada denuncia tiene un hash criptográfico verificable en <a href="https://app.eticalert.com/verificar" target="_blank" rel="noopener" style="color:var(--accent);">app.eticalert.com/verificar</a> que prueba que no ha sido alterada desde su recepción.</p>
        </div>

        <div class="func-card func-card-unico">
          <div class="func-card-header">
            <span class="func-name">Plan Starter desde 9€/mes</span>
            <span class="badge-unico">Único</span>
          </div>
          <p class="func-desc">Admin + 2 usuarios desde 9€/mes (81€/año), con todas las funcionalidades activas. El precio más bajo del mercado para sujetos obligados y pymes.</p>
        </div>

      </div>

      <!-- ============================================================ -->
      <!-- 2. DIFERENCIADORES -->
      <!-- ============================================================ -->
      <h2 style="font-size:1.125rem;font-weight:700;margin-bottom:0.25rem;color:var(--text-primary);">Lo que nos diferencia</h2>
      <p style="font-size:0.875rem;color:var(--text-secondary);margin-bottom:1.25rem;">Funcionalidades que tenemos y la mayoría de competidores no ofrecen.</p>

      <div class="diff-compact">

        <?php
        $diffs = [
          ['Canal',       'Sin cookies ni tracking'],
          ['Canal',       'Mensajería anónima cifrada'],
          ['Seguridad',   'Cifrado en base de datos'],
          ['Seguridad',   'URLs de adjuntos firmadas (TTL 30 min)'],
          ['Plazos',      'Acuse automático en 7 días (art. 18)'],
          ['Plazos',      'Alerta de vencimiento a 3 meses'],
          ['Auditoría',   'Registro append-only'],
          ['Auditoría',   'Trazabilidad de lecturas'],
          ['Documentos',  'Generación de documentos legales PDF'],
        ];
        foreach ($diffs as [$cat, $name]):
        ?>
        <div class="diff-compact-item">
          <span class="diff-category"><?= htmlspecialchars($cat) ?></span>
          <span class="diff-name"><?= htmlspecialchars($name) ?></span>
        </div>
        <?php endforeach; ?>

      </div>

      <!-- ============================================================ -->
      <!-- 3. COMPARATIVA -->
      <!-- ============================================================ -->
      <h2 style="font-size:1.125rem;font-weight:700;margin-bottom:0.25rem;color:var(--text-primary);">Comparativa con competidores</h2>
      <p style="font-size:0.875rem;color:var(--text-secondary);margin-bottom:1.25rem;">En las funcionalidades que más importan para el cumplimiento real de la Ley 2/2023.</p>

      <div style="overflow-x:auto;margin-bottom:0.625rem;">
        <table class="comparison">
          <thead>
            <tr>
              <th>Solución</th>
              <th>Cifrado en BD</th>
              <th>Exclusión gestoras</th>
              <th>Hash verificable</th>
              <th>Plazos auto</th>
              <th>Plan Starter</th>
              <th>Precio/mes</th>
            </tr>
          </thead>
          <tbody>
            <tr style="background:var(--accent-subtle);">
              <td><strong>EticAlert</strong></td>
              <td class="check">✓</td><td class="check">✓</td><td class="check">✓</td>
              <td class="check">✓</td><td class="check">✓</td>
              <td class="check"><strong>desde 9€</strong></td>
            </tr>
            <tr>
              <td><a href="/blog/alternativa-eqs-integrityline" style="color:var(--accent);">EQS IntegrityLine</a></td>
              <td class="check">✓</td><td class="cross">✗</td><td class="cross">✗</td>
              <td class="check">✓</td><td class="cross">✗</td><td>~129€</td>
            </tr>
            <tr>
              <td><a href="/blog/alternativa-whistleblower-software" style="color:var(--accent);">WhistleBlower Software</a></td>
              <td class="check">✓</td><td class="cross">✗</td><td class="cross">✗</td>
              <td>Parcial</td><td class="cross">✗</td><td>desde 99€</td>
            </tr>
            <tr>
              <td><a href="/blog/alternativa-whistleon" style="color:var(--accent);">WhistleOn</a></td>
              <td class="cross">✗</td><td class="cross">✗</td><td class="cross">✗</td>
              <td>Parcial</td><td class="cross">✗</td><td>desde 69€</td>
            </tr>
            <tr>
              <td><a href="/blog/alternativa-ithikios" style="color:var(--accent);">ithikios</a></td>
              <td class="cross">✗</td><td class="cross">✗</td><td class="cross">✗</td>
              <td class="cross">✗</td><td class="cross">✗</td><td>desde 29€</td>
            </tr>
            <tr>
              <td><a href="/blog/alternativa-mysecway" style="color:var(--accent);">mysecway</a></td>
              <td class="cross">✗</td><td class="cross">✗</td><td class="cross">✗</td>
              <td class="cross">✗</td><td class="cross">✗</td><td>7,95€/gestor</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size:0.8125rem;color:var(--text-muted);margin-bottom:3rem;">Datos públicos a abril de 2026. Verifica los precios actualizados en cada proveedor.</p>

      <!-- CTA -->
      <div style="padding:2rem;background:var(--bg-card);border:1px solid var(--border-subtle);border-radius:var(--radius-lg);margin-bottom:4rem;">
        <h3 style="margin-bottom:0.5rem;">Canal operativo en 5 minutos</h3>
        <p style="color:var(--text-secondary);margin-bottom:1.5rem;">Sin tarjeta de crédito. Sin permanencia. Sin llamadas comerciales.</p>
        <div style="display:flex;gap:1rem;flex-wrap:wrap;">
          <a href="/registro" class="btn btn-primary">Activar mi canal →</a>
          <a href="/precios" class="btn btn-secondary">Ver precios</a>
          <a href="/como-funciona" class="btn btn-secondary">Cómo funciona</a>
        </div>
      </div>

    </div>
  </div>
</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Qué hace único a EticAlert respecto a otros canales de denuncias del mercado español?",
      "acceptedAnswer": {"@type": "Answer", "text": "EticAlert tiene tres funcionalidades únicas en el mercado español: la exclusión preventiva de gestoras (el informante bloquea personas del equipo gestor al enviar su denuncia), el hash SHA-256 verificable públicamente que prueba la integridad de cada denuncia, y un plan Starter desde 9€/mes para admin + 2 usuarios con todas las funcionalidades activas."}
    },
    {
      "@type": "Question",
      "name": "¿EticAlert cifra los datos almacenados en base de datos?",
      "acceptedAnswer": {"@type": "Answer", "text": "Sí. EticAlert aplica cifrado AES-256 tanto en tránsito como en reposo, incluyendo los datos almacenados en base de datos. Las URLs de archivos adjuntos son firmadas con TTL de 30 minutos. Los datos se alojan en servidores de la Unión Europea y el cumplimiento del RGPD es nativo."}
    },
    {
      "@type": "Question",
      "name": "¿EticAlert automatiza el cumplimiento de los plazos de la Ley 2/2023?",
      "acceptedAnswer": {"@type": "Answer", "text": "Sí. EticAlert automatiza los plazos obligatorios: acuse de recibo al informante en 7 días (art. 18 de la Ley 2/2023) y alertas proactivas antes de que venza el plazo de resolución de 3 meses. El registro de auditoría es append-only, lo que significa que ninguna acción puede borrarse retroactivamente, y se puede exportar en PDF para la AIPI."}
    }
  ]
}
</script>

<?php include 'includes/footer.php'; ?>
