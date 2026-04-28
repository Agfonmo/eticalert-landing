<?php
$page_title       = 'Funcionalidades del canal de denuncias | EticAlert';
$page_description = 'Las funcionalidades clave de EticAlert: cifrado en base de datos, hash verificable, exclusión de gestoras, plazos automáticos y plan gratuito permanente. Cumple la Ley 2/2023.';
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
  "offers": {"@type": "Offer", "price": "0", "priceCurrency": "EUR"},
  "featureList": "Canal anónimo, Cifrado AES-256 en base de datos, Hash verificable, Exclusión preventiva de gestoras, Plazos automatizados Ley 2/2023, Registro append-only, Documentos legales PDF, RLS PostgreSQL, Plan Free permanente",
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
        <p style="font-size:1.0625rem;color:var(--text-secondary);margin:0.875rem 0 0;">Canal de denuncias conforme a la Ley 2/2023. Funcionalidades de seguridad que la mayoría de competidores no tienen.</p>
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
            <span class="func-name">Plan Free permanente</span>
            <span class="badge-unico">Único</span>
          </div>
          <p class="func-desc">Hasta 20 empleados, gratis indefinidamente, con todas las funcionalidades activas. Sin caducidad ni restricciones.</p>
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
          ['Seguridad',   'RLS en base de datos'],
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
              <th>Plan Free</th>
              <th>Precio/mes</th>
            </tr>
          </thead>
          <tbody>
            <tr style="background:var(--accent-subtle);">
              <td><strong>EticAlert</strong></td>
              <td class="check">✓</td><td class="check">✓</td><td class="check">✓</td>
              <td class="check">✓</td><td class="check">✓</td>
              <td class="check"><strong>desde 19€</strong></td>
            </tr>
            <tr>
              <td>EQS IntegrityLine</td>
              <td class="check">✓</td><td class="cross">✗</td><td class="cross">✗</td>
              <td class="check">✓</td><td class="cross">✗</td><td>~129€</td>
            </tr>
            <tr>
              <td>WhistleBlower Software</td>
              <td class="check">✓</td><td class="cross">✗</td><td class="cross">✗</td>
              <td>Parcial</td><td class="cross">✗</td><td>desde 99€</td>
            </tr>
            <tr>
              <td>WhistleOn</td>
              <td class="cross">✗</td><td class="cross">✗</td><td class="cross">✗</td>
              <td>Parcial</td><td class="cross">✗</td><td>desde 69€</td>
            </tr>
            <tr>
              <td>ithikios</td>
              <td class="cross">✗</td><td class="cross">✗</td><td class="cross">✗</td>
              <td class="cross">✗</td><td class="cross">✗</td><td>desde 29€</td>
            </tr>
            <tr>
              <td>mysecway</td>
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
          <a href="/registro" class="btn btn-primary">Empezar gratis →</a>
          <a href="/precios" class="btn btn-secondary">Ver precios</a>
          <a href="/como-funciona" class="btn btn-secondary">Cómo funciona</a>
        </div>
      </div>

    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
