<?php
$page_title       = 'Funcionalidades del canal de denuncias | EticAlert — 48 funciones incluidas';
$page_description = 'Las 48 funcionalidades de EticAlert: cifrado en base de datos, hash verificable, exclusión de gestoras, documentos legales automáticos, RLS y plan gratuito permanente. Cumple la Ley 2/2023.';
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
  "featureList": "Canal anónimo, Cifrado AES-256 en base de datos, Hash verificable, Exclusión preventiva de gestoras, Plazos automatizados Ley 2/2023, Registro append-only, Documentos legales PDF, RLS PostgreSQL, Exportación PDF y CSV, Plan Free permanente",
  "description": "Plataforma SaaS de canal de denuncias conforme a la Ley 2/2023. 48 funcionalidades incluidas desde el primer día."
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
    <div class="container" style="max-width:960px;">

      <!-- HERO -->
      <div style="max-width:680px;margin-bottom:3.5rem;" class="fade-up">
        <span class="overline">Funcionalidades</span>
        <h1 style="font-size:clamp(2rem,4vw,2.75rem);">Qué hace EticAlert y en qué se diferencia</h1>
        <p style="font-size:1.0625rem;color:var(--text-secondary);margin:1rem 0 1.5rem;">48 funcionalidades incluidas desde el primer día. Sin módulos de pago adicionales, sin letra pequeña.</p>
        <div style="display:flex;gap:0.75rem;flex-wrap:wrap;">
          <span style="display:inline-flex;align-items:center;gap:0.4rem;background:var(--accent-subtle);color:var(--accent);border:1px solid var(--accent-border);border-radius:99px;padding:0.35rem 0.875rem;font-size:0.8125rem;font-weight:700;">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="m9 12 2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>
            48 funciones incluidas
          </span>
          <span style="display:inline-flex;align-items:center;gap:0.4rem;background:var(--bg-tertiary);color:var(--text-muted);border:1px solid var(--border-subtle);border-radius:99px;padding:0.35rem 0.875rem;font-size:0.8125rem;font-weight:600;">
            3 únicos en el mercado español
          </span>
        </div>
      </div>

      <!-- ============================================================ -->
      <!-- 1. ÚNICOS EN EL MERCADO -->
      <!-- ============================================================ -->
      <h2 style="font-size:1.25rem;margin-bottom:1rem;">Únicos en el mercado español</h2>

      <div class="func-unicos">

        <div class="func-card func-card-unico">
          <div class="func-card-header">
            <span class="func-name">Exclusión preventiva de gestoras</span>
            <span class="badge-unico">Único</span>
          </div>
          <p class="func-desc">Al enviar la denuncia, el informante puede bloquear a personas concretas del equipo gestor. Las personas excluidas no ven el caso, no reciben notificaciones y no pueden ser asignadas.</p>
          <p class="func-value">El informante actúa de forma preventiva sin depender de que el gestor se declare incompatible.</p>
        </div>

        <div class="func-card func-card-unico">
          <div class="func-card-header">
            <span class="func-name">Hash SHA-256 verificable</span>
            <span class="badge-unico">Único</span>
          </div>
          <p class="func-desc">El contenido de cada denuncia tiene un hash criptográfico verificable en <a href="https://app.eticalert.com/verificar" target="_blank" rel="noopener" style="color:var(--accent);">app.eticalert.com/verificar</a> que demuestra que no ha sido alterado desde su recepción.</p>
          <p class="func-value">Garantía de integridad ante disputa legal o inspección de la AIPI.</p>
        </div>

        <div class="func-card func-card-unico">
          <div class="func-card-header">
            <span class="func-name">Plan Free permanente</span>
            <span class="badge-unico">Único</span>
          </div>
          <p class="func-desc">Hasta 20 empleados, gratis indefinidamente, con todas las funcionalidades activas.</p>
          <p class="func-value">Las empresas por debajo del umbral legal adoptan el canal sin coste y sin caducidad.</p>
        </div>

      </div>

      <!-- ============================================================ -->
      <!-- 2. DIFERENCIADORES -->
      <!-- ============================================================ -->
      <h2 style="font-size:1.25rem;margin-bottom:0.375rem;">Lo que nos diferencia</h2>
      <p style="font-size:0.9rem;color:var(--text-secondary);margin-bottom:0;">Funcionalidades que tenemos y la mayoría de competidores no.</p>

      <div class="diff-grid">

        <div class="diff-item">
          <span class="diff-category">Canal público</span>
          <span class="diff-name">Sin cookies ni tracking</span>
          <p class="diff-desc">El canal no instala cookies ni ejecuta scripts de analítica. El informante no puede ser rastreado.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Canal público</span>
          <span class="diff-name">Mensajería anónima cifrada</span>
          <p class="diff-desc">Canal bidireccional entre el informante anónimo y el gestor. Aclaraciones sin romper la confidencialidad.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Canal público</span>
          <span class="diff-name">Validación antiabuso (Turnstile)</span>
          <p class="diff-desc">Cloudflare Turnstile en el formulario y panel de seguimiento. Sin fricción para el informante legítimo.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Recepción</span>
          <span class="diff-name">Entrada manual por RSII</span>
          <p class="diff-desc">El responsable registra denuncias recibidas por teléfono o presencialmente en el mismo sistema auditado.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Gestión</span>
          <span class="diff-name">Etiquetado de casos</span>
          <p class="diff-desc">Etiquetas personalizadas por denuncia para filtros, reporting y análisis de patrones.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Gestión</span>
          <span class="diff-name">Autoasignación inteligente</span>
          <p class="diff-desc">Si existe un único resolutor compatible y no excluido, el sistema lo asigna automáticamente.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Gestión</span>
          <span class="diff-name">Topics por resolutor</span>
          <p class="diff-desc">Cada gestor tiene asignadas las categorías que puede instruir. Compartimentación funcional por especialidad.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Roles</span>
          <span class="diff-name">Rol Coordinador (RSII)</span>
          <p class="diff-desc">Visibilidad total para coordinar, acción restringida a los casos asignados. No actúa donde no le corresponde.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Roles</span>
          <span class="diff-name">Rol Resolutor</span>
          <p class="diff-desc">Ve únicamente los casos asignados a él. Principio "need to know" — no ve ni toca casos de otros.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Plazos legales</span>
          <span class="diff-name">Acuse automático en 7 días</span>
          <p class="diff-desc">El acuse de recibo se envía dentro del plazo del art. 18 Ley 2/2023 sin intervención manual.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Plazos legales</span>
          <span class="diff-name">Alerta de vencimiento de 3 meses</span>
          <p class="diff-desc">Notificación proactiva cuando se acerca el plazo para comunicar medidas adoptadas al informante.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Plazos legales</span>
          <span class="diff-name">Historial de plazos auditado</span>
          <p class="diff-desc">Cada plazo queda registrado con timestamp inmutable. Evidencia exportable para inspección de la AIPI.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Seguridad</span>
          <span class="diff-name">Cifrado en base de datos</span>
          <p class="diff-desc">Campos sensibles cifrados dentro de la BD, no solo en disco. Protege ante SQL injection y acceso físico.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Seguridad</span>
          <span class="diff-name">URLs de adjuntos firmadas (TTL 30 min)</span>
          <p class="diff-desc">Los enlaces a archivos adjuntos expiran a los 30 minutos. Un enlace filtrado no da acceso indefinido.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Seguridad</span>
          <span class="diff-name">RLS en base de datos</span>
          <p class="diff-desc">Row Level Security de PostgreSQL: aislamiento total entre empresas a nivel de motor de datos.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Auditoría</span>
          <span class="diff-name">Registro append-only</span>
          <p class="diff-desc">Ninguna acción puede borrarse ni modificarse retroactivamente. El log solo crece.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Auditoría</span>
          <span class="diff-name">Timestamps inmutables</span>
          <p class="diff-desc">Cada acción lleva timestamp firmado y no editable. Cadena de custodia verificable.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Auditoría</span>
          <span class="diff-name">Trazabilidad de lecturas</span>
          <p class="diff-desc">El sistema registra quién leyó cada denuncia y cuándo. Detecta accesos no autorizados.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Auditoría</span>
          <span class="diff-name">Historial de nombramientos RSII</span>
          <p class="diff-desc">Cada cambio en la designación del RSII queda registrado con timestamps inmutables. Art. 8 Ley 2/2023.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Reporting</span>
          <span class="diff-name">Exportación PDF de caso</span>
          <p class="diff-desc">PDF del historial completo: cronología, mensajes, cambios de estado. Listo para la AIPI o un abogado.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Reporting</span>
          <span class="diff-name">Export CSV de metadatos</span>
          <p class="diff-desc">Listado de casos con metadatos sin contenido sensible. Para análisis interno y reporting al consejo.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Reporting</span>
          <span class="diff-name">Informe de compliance mensual</span>
          <p class="diff-desc">Métricas generadas automáticamente: volumen, estados, tiempos de respuesta y cumplimiento de plazos.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Configuración</span>
          <span class="diff-name">Precio fijo por empresa</span>
          <p class="diff-desc">Un precio mensual independiente del número de usuarios, gestores o denuncias.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Configuración</span>
          <span class="diff-name">Generación de documentos legales PDF</span>
          <p class="diff-desc">Reglamento del canal, nombramiento del RSII y cláusula para empleados generados automáticamente.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Configuración</span>
          <span class="diff-name">Preview 1:1 del canal en tiempo real</span>
          <p class="diff-desc">El administrador ve exactamente cómo queda el canal antes de publicarlo.</p>
        </div>

        <div class="diff-item">
          <span class="diff-category">Partners</span>
          <span class="diff-name">Instrucción jurídica de denuncias</span>
          <p class="diff-desc">Servicio opcional con despacho partner para instruir formalmente una denuncia. Desde 150€/caso.</p>
        </div>

      </div>

      <!-- ============================================================ -->
      <!-- 3. TODO LO QUE INCLUYE -->
      <!-- ============================================================ -->
      <h2 style="font-size:1.25rem;margin-bottom:0.375rem;">Todo lo que incluye</h2>
      <p style="font-size:0.9rem;color:var(--text-secondary);margin-bottom:0;">Funcionalidades estándar incluidas en todos los planes.</p>

      <div class="features-all">
        <?php
        $std = [
          'Canal anónimo con código de seguimiento',
          'Canal identificado (voluntario)',
          'URL pública personalizada por empresa',
          'Branding corporativo (logo y colores)',
          'Adjuntar evidencias en el formulario',
          'Seguimiento de estado con código',
          'Panel de administración centralizado',
          'Asignación manual de casos',
          'Gestión de estados (recibida → resuelta)',
          'Rol Administrador (ciego por defecto)',
          'Cifrado AES-256 en tránsito y reposo',
          'Datos alojados en la Unión Europea',
          'Validación de email corporativo en registro',
          'Validación de CIF con dígito de control',
          'Historial de plazos incluido en PDF',
          'Purga RGPD de casos archivados',
          'Prueba gratuita 15 días (sin tarjeta)',
          'Programa de partners para asesorías',
          'Informe de resolución con despacho partner',
        ];
        $chk = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>';
        foreach ($std as $f):
        ?>
        <div class="features-all-item"><?= $chk ?><span><?= htmlspecialchars($f) ?></span></div>
        <?php endforeach; ?>
      </div>

      <!-- ============================================================ -->
      <!-- 4. ENTERPRISE -->
      <!-- ============================================================ -->
      <h2 style="font-size:1.25rem;margin-bottom:0.375rem;">Enterprise · a demanda</h2>
      <p style="font-size:0.9rem;color:var(--text-secondary);margin-bottom:1rem;">Para grupos empresariales con requisitos IT avanzados.</p>
      <div style="display:flex;flex-wrap:wrap;gap:0.5rem;margin-bottom:3rem;">
        <?php foreach (['Multiempresa para grupos', 'SSO / SAML', 'API REST de integración', 'SLA por contrato'] as $e): ?>
        <span style="display:inline-flex;align-items:center;gap:0.4rem;background:var(--bg-card);border:1px solid var(--border-subtle);border-radius:99px;padding:0.3rem 0.875rem;font-size:0.8125rem;color:var(--text-secondary);">
          <?= $chk ?><?= htmlspecialchars($e) ?>
        </span>
        <?php endforeach; ?>
      </div>

      <!-- ============================================================ -->
      <!-- 5. COMPARATIVA -->
      <!-- ============================================================ -->
      <h2 style="font-size:1.25rem;margin-bottom:0.375rem;">Comparativa con competidores</h2>
      <p style="font-size:0.9rem;color:var(--text-secondary);margin-bottom:1.5rem;">En las funcionalidades que más importan para el cumplimiento real de la Ley 2/2023.</p>

      <div style="overflow-x:auto;margin-bottom:0.75rem;">
        <table class="comparison">
          <thead>
            <tr>
              <th>Solución</th>
              <th>Cifrado en BD</th>
              <th>Exclusión de gestoras</th>
              <th>Hash verificable</th>
              <th>Control plazos auto</th>
              <th>Precio plano</th>
              <th>Plan Free</th>
              <th>Precio/mes</th>
            </tr>
          </thead>
          <tbody>
            <tr style="background:var(--accent-subtle);">
              <td><strong>EticAlert</strong></td>
              <td class="check">✓</td><td class="check">✓</td><td class="check">✓</td>
              <td class="check">✓</td><td class="check">✓</td><td class="check">✓</td>
              <td class="check"><strong>desde 19€</strong></td>
            </tr>
            <tr>
              <td>EQS IntegrityLine</td>
              <td class="check">✓</td><td class="cross">✗</td><td class="cross">✗</td>
              <td class="check">✓</td><td>—</td><td class="cross">✗</td><td>~129€</td>
            </tr>
            <tr>
              <td>WhistleBlower Software</td>
              <td class="check">✓</td><td class="cross">✗</td><td class="cross">✗</td>
              <td>Parcial</td><td class="cross">✗</td><td class="cross">✗</td><td>desde 99€</td>
            </tr>
            <tr>
              <td>WhistleOn</td>
              <td class="cross">✗</td><td class="cross">✗</td><td class="cross">✗</td>
              <td>Parcial</td><td class="cross">✗</td><td class="cross">✗</td><td>desde 69€</td>
            </tr>
            <tr>
              <td>ithikios</td>
              <td class="cross">✗</td><td class="cross">✗</td><td class="cross">✗</td>
              <td class="cross">✗</td><td>—</td><td class="cross">✗</td><td>desde 29€</td>
            </tr>
            <tr>
              <td>mysecway</td>
              <td class="cross">✗</td><td class="cross">✗</td><td class="cross">✗</td>
              <td class="cross">✗</td><td class="cross">✗</td><td class="cross">✗</td><td>7,95€/gestor</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size:0.8125rem;color:var(--text-muted);margin-bottom:3rem;">Datos públicos a abril de 2026. Verifica los precios actualizados en cada proveedor.</p>

      <!-- CTA -->
      <div style="padding:2rem;background:var(--bg-card);border:1px solid var(--border-subtle);border-radius:var(--radius-lg);margin-bottom:4rem;">
        <h3 style="margin-bottom:0.75rem;">Canal operativo en 5 minutos</h3>
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
