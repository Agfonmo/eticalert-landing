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
  "featureList": "Canal anónimo, Cifrado AES-256 en base de datos, Hash verificable, Exclusión preventiva de gestoras, Plazos automatizados Ley 2/2023, Registro append-only, Documentos legales PDF, RLS PostgreSQL, Exportación PDF y CSV, Plan Free permanente, Multiempresa",
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
    <div class="container">

      <!-- HERO -->
      <div style="max-width:740px;margin-bottom:3rem;" class="fade-up">
        <span class="overline">Producto completo</span>
        <h1>Todo lo que incluye EticAlert</h1>
        <p style="font-size:1.125rem;color:var(--text-secondary);margin:1rem 0 1.5rem;">Las funcionalidades de las plataformas corporativas al coste de las soluciones básicas. Sin letra pequeña, sin módulos de pago adicionales.</p>
        <div style="display:flex;gap:0.75rem;flex-wrap:wrap;align-items:center;">
          <span style="display:inline-flex;align-items:center;gap:0.4rem;background:var(--accent-subtle);color:var(--accent);border:1px solid var(--accent-border);border-radius:99px;padding:0.375rem 0.875rem;font-size:0.875rem;font-weight:700;">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="m9 12 2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>
            48 funcionalidades incluidas
          </span>
          <span style="display:inline-flex;align-items:center;gap:0.4rem;background:var(--bg-tertiary);color:var(--text-secondary);border:1px solid var(--border-medium);border-radius:99px;padding:0.375rem 0.875rem;font-size:0.875rem;font-weight:700;">
            3 únicos en el mercado español
          </span>
        </div>
      </div>

      <div class="article-layout with-toc">

        <!-- TOC SIDEBAR -->
        <nav class="toc" aria-label="Tabla de contenidos">
          <h4>Categorías</h4>
          <ol>
            <li><a href="#canal-publico">Canal público</a></li>
            <li><a href="#multicanal">Recepción multicanal</a></li>
            <li><a href="#gestion">Gestión de casos</a></li>
            <li><a href="#roles">Roles y permisos</a></li>
            <li><a href="#plazos">Plazos legales</a></li>
            <li><a href="#seguridad">Seguridad y cifrado</a></li>
            <li><a href="#auditoria">Auditoría e integridad</a></li>
            <li><a href="#reporting">Reporting y exportación</a></li>
            <li><a href="#configuracion">Configuración</a></li>
            <li><a href="#enterprise">Enterprise</a></li>
            <li><a href="#partners">Partners y servicios</a></li>
            <li><a href="#comparativa">Comparativa ampliada</a></li>
          </ol>
        </nav>

        <!-- ARTICLE -->
        <article class="article-content" id="article">

          <!-- DESTACADOS -->
          <div class="callout" style="margin-bottom:2rem;">
            <p style="font-weight:700;margin-bottom:0.75rem;color:var(--text-primary);">Los 3 diferenciadores únicos en el mercado español</p>
            <ul style="display:flex;flex-direction:column;gap:0.5rem;margin:0;">
              <li><strong>Hash SHA-256 verificable públicamente</strong> — el contenido de cada denuncia tiene un hash criptográfico que demuestra que no ha sido alterado. Ningún competidor lo ofrece.</li>
              <li><strong>Exclusión preventiva de gestoras por el informante</strong> — al enviar la denuncia, el informante puede bloquear a personas concretas del equipo gestor. Ningún competidor lo ofrece.</li>
              <li><strong>Plan Free completo permanente</strong> — hasta 20 empleados, gratis indefinidamente, con todas las funcionalidades. Ningún competidor listado lo ofrece.</li>
            </ul>
          </div>

          <?php
          $chevron = '<svg class="func-section-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
          $check   = '<svg class="func-item-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>';
          ?>

          <!-- ================================================== -->
          <details class="func-section" id="canal-publico" open>
            <summary>
              <span class="func-section-title">Canal público</span>
              <span class="func-section-count">10 funciones</span>
              <?= $chevron ?>
            </summary>
            <div class="func-section-body">
              <p class="func-section-intro">La interfaz que ven los informantes: empleados, proveedores, clientes y terceros que acceden a denunciar.</p>

              <div class="func-card func-card-unico">
                <div class="func-card-header">
                  <span class="func-name">Exclusión preventiva de gestoras por el informante</span>
                  <span class="badge-unico">Único en España</span>
                </div>
                <p class="func-desc">Al crear la denuncia, el informante puede bloquear a personas concretas del equipo gestor. Las personas excluidas no ven el caso, no reciben notificaciones y no pueden ser asignadas.</p>
                <p class="func-value">El informante actúa de forma preventiva sin depender de que el gestor se declare incompatible. Ningún competidor lo ofrece.</p>
              </div>

              <ul class="func-list">
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Sin cookies ni tracking</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">El canal público no instala cookies ni ejecuta scripts de analítica. El informante no puede ser rastreado. Requisito RGPD implícito.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Mensajería anónima cifrada</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Canal bidireccional entre el informante anónimo y el gestor interno. Permite aclaraciones y comunicar la resolución sin romper la confidencialidad.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Validación antiabuso (Turnstile)</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Cloudflare Turnstile integrado en el formulario y el panel de seguimiento. Sin fricción para el informante legítimo.</p>
                  </div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Canal anónimo con código</span></div></div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Canal identificado</span></div></div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">URL personalizada por empresa</span></div></div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Branding corporativo</span></div></div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Adjuntar evidencias</span></div></div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Seguimiento de estado con código</span></div></div>
                </li>
              </ul>
            </div>
          </details>

          <!-- ================================================== -->
          <details class="func-section" id="multicanal">
            <summary>
              <span class="func-section-title">Recepción multicanal</span>
              <span class="func-section-count">1 función</span>
              <?= $chevron ?>
            </summary>
            <div class="func-section-body">
              <p class="func-section-intro">La Ley 2/2023 exige admitir denuncias también por vía oral o presencial. EticAlert lo integra en el mismo sistema auditado.</p>
              <ul class="func-list">
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Entrada manual por RSII</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">El responsable registra denuncias recibidas por email, teléfono o presencialmente. Unifica todos los canales en un único registro auditado.</p>
                  </div>
                </li>
              </ul>
            </div>
          </details>

          <!-- ================================================== -->
          <details class="func-section" id="gestion">
            <summary>
              <span class="func-section-title">Gestión de casos</span>
              <span class="func-section-count">6 funciones</span>
              <?= $chevron ?>
            </summary>
            <div class="func-section-body">
              <p class="func-section-intro">El flujo interno completo para instruir, asignar y resolver cada denuncia con trazabilidad total.</p>
              <ul class="func-list">
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Etiquetado de casos</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Etiquetas personalizadas por denuncia ("acoso", "fraude financiero"…). Facilita filtros, reporting y análisis de patrones.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Autoasignación inteligente</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Si existe exactamente un resolutor compatible y no excluido por el informante, el sistema lo asigna automáticamente.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Topics por resolutor</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Cada gestor tiene asignadas las categorías que puede instruir. Garantiza compartimentación funcional por especialidad.</p>
                  </div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Panel de administración centralizado</span></div></div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Asignación manual de casos</span></div></div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Gestión de estados (recibida → resuelta)</span></div></div>
                </li>
              </ul>
            </div>
          </details>

          <!-- ================================================== -->
          <details class="func-section" id="roles">
            <summary>
              <span class="func-section-title">Roles y permisos</span>
              <span class="func-section-count">3 funciones</span>
              <?= $chevron ?>
            </summary>
            <div class="func-section-body">
              <p class="func-section-intro">Tres niveles de acceso con compartimentación real. Cada rol ve y puede hacer exactamente lo que le corresponde.</p>
              <ul class="func-list">
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Rol Coordinador (RSII)</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Lee todos los casos salvo los bloqueados por el informante. Gestiona asignaciones en cualquier expediente, pero solo actúa en los que tiene asignados.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Rol Resolutor</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Ve únicamente los casos asignados a él. Principio "need to know" aplicado con rigor — no puede ver ni tocar casos de otros.</p>
                  </div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Rol Administrador (ciego por defecto)</span></div></div>
                </li>
              </ul>
            </div>
          </details>

          <!-- ================================================== -->
          <details class="func-section" id="plazos">
            <summary>
              <span class="func-section-title">Plazos legales automatizados</span>
              <span class="func-section-count">3 funciones</span>
              <?= $chevron ?>
            </summary>
            <div class="func-section-body">
              <p class="func-section-intro">La Ley 2/2023 establece plazos concretos con sanciones graves por incumplimiento. EticAlert los gestiona sin intervención manual.</p>
              <ul class="func-list">
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Acuse automático en 7 días</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">El acuse de recibo se envía dentro del plazo legal (art. 18 Ley 2/2023) sin intervención manual. El incumplimiento es infracción grave.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Alerta de vencimiento de 3 meses</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Notificación proactiva al gestor cuando se acerca el plazo para comunicar las medidas adoptadas al informante.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Historial de plazos auditado</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Cada plazo queda registrado con timestamp en el audit log. Evidencia exportable directamente para inspección de la AIPI.</p>
                  </div>
                </li>
              </ul>
            </div>
          </details>

          <!-- ================================================== -->
          <details class="func-section" id="seguridad">
            <summary>
              <span class="func-section-title">Seguridad y cifrado</span>
              <span class="func-section-count">8 funciones</span>
              <?= $chevron ?>
            </summary>
            <div class="func-section-body">
              <p class="func-section-intro">Protección técnica en todas las capas. No solo en el transporte: también en la base de datos y en los metadatos.</p>

              <div class="func-card func-card-unico">
                <div class="func-card-header">
                  <span class="func-name">Hash SHA-256 verificable públicamente</span>
                  <span class="badge-unico">Único en España</span>
                </div>
                <p class="func-desc">El contenido de cada denuncia tiene un hash criptográfico verificable en <a href="https://app.eticalert.com/verificar" target="_blank" rel="noopener" style="color:var(--accent);">app.eticalert.com/verificar</a> que demuestra que no ha sido alterado desde su recepción.</p>
                <p class="func-value">Garantía de integridad ante disputa legal o inspección de la AIPI. Ningún competidor lo ofrece.</p>
              </div>

              <ul class="func-list">
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Cifrado en base de datos</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Los campos sensibles están cifrados dentro de la BD, no solo a nivel de disco. Protege ante SQL injection y acceso físico al servidor.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">URLs de adjuntos firmadas (TTL 30 min)</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Los enlaces a archivos adjuntos expiran a los 30 minutos. Un enlace filtrado no da acceso indefinido a evidencias.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">RLS en base de datos (PostgreSQL)</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Row Level Security: políticas de acceso a nivel de fila independientes de la lógica de la aplicación. Aislamiento total entre empresas a nivel de motor de datos.</p>
                  </div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Cifrado AES-256 en tránsito y reposo</span></div></div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Datos alojados en la UE</span></div></div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Validación de email corporativo en registro</span></div></div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Validación de CIF con dígito de control</span></div></div>
                </li>
              </ul>
            </div>
          </details>

          <!-- ================================================== -->
          <details class="func-section" id="auditoria">
            <summary>
              <span class="func-section-title">Auditoría e integridad</span>
              <span class="func-section-count">4 funciones</span>
              <?= $chevron ?>
            </summary>
            <div class="func-section-body">
              <p class="func-section-intro">Trazabilidad completa de todo lo que ocurre en el sistema. Sin posibilidad de manipulación retroactiva.</p>
              <ul class="func-list">
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Registro append-only</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Ninguna acción puede borrarse ni modificarse retroactivamente. La AIPI puede verificar que no se han eliminado evidencias.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Timestamps inmutables</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Cada acción lleva timestamp firmado y no editable. Cadena de custodia verificable exigida implícitamente por la Ley 2/2023.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Trazabilidad de lecturas</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">El sistema registra quién leyó cada denuncia y cuándo. Detecta accesos no autorizados y demuestra compartimentación ante la AIPI.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Historial de nombramientos RSII</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Cada cambio en la designación del RSII queda registrado con timestamps inmutables. Trazabilidad legal del Art. 8 Ley 2/2023.</p>
                  </div>
                </li>
              </ul>
            </div>
          </details>

          <!-- ================================================== -->
          <details class="func-section" id="reporting">
            <summary>
              <span class="func-section-title">Reporting y exportación</span>
              <span class="func-section-count">5 funciones</span>
              <?= $chevron ?>
            </summary>
            <div class="func-section-body">
              <p class="func-section-intro">Documentación lista para auditoría, abogados o la AIPI. Sin trabajo manual de recopilación.</p>
              <ul class="func-list">
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Exportación PDF de caso</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">PDF del historial completo: cronología, mensajes, cambios de estado, decisiones. Listo para entregar a la AIPI o a un abogado.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Historial de plazos en el PDF</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">El PDF incluye la cronología de plazos legales con sus fechas exactas. Prueba documental de cumplimiento lista para auditoría.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Export CSV de metadatos</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Listado de casos con metadatos sin incluir contenido sensible. Para análisis interno y reporting al órgano de gobierno.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Informe de compliance mensual automático</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Métricas generadas automáticamente: volumen, estados, tiempos de respuesta y cumplimiento de plazos.</p>
                  </div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Purga RGPD de casos archivados</span></div></div>
                </li>
              </ul>
            </div>
          </details>

          <!-- ================================================== -->
          <details class="func-section" id="configuracion">
            <summary>
              <span class="func-section-title">Configuración y puesta en marcha</span>
              <span class="func-section-count">5 funciones</span>
              <?= $chevron ?>
            </summary>
            <div class="func-section-body">
              <p class="func-section-intro">De cero a canal operativo en menos de 5 minutos. Sin consultores, sin llamadas, sin técnicos.</p>

              <div class="func-card func-card-unico">
                <div class="func-card-header">
                  <span class="func-name">Plan Free completo permanente</span>
                  <span class="badge-unico">Único en España</span>
                </div>
                <p class="func-desc">Hasta 20 empleados, gratis indefinidamente, con todas las funcionalidades activas.</p>
                <p class="func-value">Las empresas por debajo del umbral legal adoptan el canal sin coste. Ningún competidor ofrece un plan permanentemente gratuito con funcionalidad completa.</p>
              </div>

              <ul class="func-list">
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Precio fijo por empresa</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Un precio mensual independiente del número de usuarios, gestores o denuncias. Coste predecible sin desincentivo de añadir gestores.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Generación de documentos legales PDF</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Genera: Reglamento del canal, Nombramiento formal del RSII (Art. 8 Ley 2/2023) y Cláusula informativa para empleados. Listos para firmar, sin abogado.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Preview 1:1 del canal en tiempo real</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">El administrador ve exactamente cómo queda el canal público antes de guardar: logo, colores y modos claro/oscuro.</p>
                  </div>
                </li>
                <li class="func-item">
                  <?= $check ?>
                  <div class="func-item-body"><div class="func-item-title"><span class="func-item-name">Prueba gratuita 15 días (sin tarjeta)</span></div></div>
                </li>
              </ul>
            </div>
          </details>

          <!-- ================================================== -->
          <details class="func-section" id="enterprise">
            <summary>
              <span class="func-section-title">Capacidades Enterprise</span>
              <span class="func-section-count">4 funciones · a demanda</span>
              <?= $chevron ?>
            </summary>
            <div class="func-section-body">
              <p class="func-section-intro">Disponibles a demanda para grupos empresariales y organizaciones con requisitos IT avanzados. Contáctanos para activarlas.</p>
              <ul class="func-list">
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Multiempresa para grupos</span>
                      <span class="badge-diff">A demanda</span>
                    </div>
                    <p class="func-item-desc">Una sola cuenta gestiona canales de varias empresas del mismo grupo desde un único panel.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">SSO / SAML</span>
                      <span class="badge-diff">A demanda</span>
                    </div>
                    <p class="func-item-desc">Inicio de sesión único con Azure AD, Okta u otros proveedores de identidad corporativos.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">API REST de integración</span>
                      <span class="badge-diff">A demanda</span>
                    </div>
                    <p class="func-item-desc">Conecta EticAlert con ERP, SIEM o herramientas GRC. Automatiza flujos como crear caso en Jira al recibir una denuncia.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">SLA por contrato</span>
                      <span class="badge-diff">A demanda</span>
                    </div>
                    <p class="func-item-desc">Garantía de disponibilidad y tiempos de respuesta formalizados contractualmente.</p>
                  </div>
                </li>
              </ul>
            </div>
          </details>

          <!-- ================================================== -->
          <details class="func-section" id="partners">
            <summary>
              <span class="func-section-title">Partners y servicios legales</span>
              <span class="func-section-count">3 funciones</span>
              <?= $chevron ?>
            </summary>
            <div class="func-section-body">
              <p class="func-section-intro">Cuando la denuncia requiere abogados: escalado directo desde la plataforma, sin buscar asesoramiento externo.</p>
              <ul class="func-list">
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Programa de partners</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Condiciones para asesorías, despachos y consultoras que gestionan el canal de varios clientes como servicio gestionado.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Instrucción jurídica de denuncias</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Servicio opcional con despacho partner para instruir formalmente una denuncia. Desde 150€/caso.</p>
                  </div>
                </li>
                <li class="func-item func-item-diff">
                  <?= $check ?>
                  <div class="func-item-body">
                    <div class="func-item-title">
                      <span class="func-item-name">Informe de resolución</span>
                      <span class="badge-diff">Diferenciador</span>
                    </div>
                    <p class="func-item-desc">Redacción del informe formal de resolución por despacho partner. Desde 350€/caso.</p>
                  </div>
                </li>
              </ul>
            </div>
          </details>

          <!-- ================================================== -->
          <h2 id="comparativa" style="margin-top:2.5rem;">Comparativa ampliada</h2>
          <p class="func-category-intro">EticAlert frente a los principales competidores en las funcionalidades que más importan para el cumplimiento real de la Ley 2/2023.</p>

          <div style="overflow-x:auto; margin:1.5rem 0;">
            <table class="comparison">
              <thead>
                <tr>
                  <th>Solución</th>
                  <th>Cifrado en BD</th>
                  <th>Sin marca de agua</th>
                  <th>Exclusión de gestoras</th>
                  <th>Hash verificable</th>
                  <th>Entrada multicanal</th>
                  <th>Control plazos auto</th>
                  <th>Precio plano</th>
                  <th>Plan Free</th>
                  <th>Precio/mes</th>
                </tr>
              </thead>
              <tbody>
                <tr style="background:var(--accent-subtle);">
                  <td><strong>EticAlert</strong></td>
                  <td class="check">✓</td>
                  <td class="check">✓</td>
                  <td class="check">✓</td>
                  <td class="check">✓</td>
                  <td class="check">✓</td>
                  <td class="check">✓</td>
                  <td class="check">✓</td>
                  <td class="check">✓</td>
                  <td class="check"><strong>desde 19€</strong></td>
                </tr>
                <tr>
                  <td>EQS IntegrityLine</td>
                  <td class="check">✓</td>
                  <td class="check">✓</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td class="check">✓</td>
                  <td class="check">✓</td>
                  <td>—</td>
                  <td class="cross">✗</td>
                  <td>~129€</td>
                </tr>
                <tr>
                  <td>WhistleBlower Software</td>
                  <td class="check">✓</td>
                  <td class="check">✓</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td class="check">✓</td>
                  <td>Parcial</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td>desde 99€</td>
                </tr>
                <tr>
                  <td>WhistleOn</td>
                  <td class="cross">✗</td>
                  <td class="check">✓</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td>—</td>
                  <td>Parcial</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td>desde 69€</td>
                </tr>
                <tr>
                  <td>ithikios</td>
                  <td class="cross">✗</td>
                  <td class="check">✓</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td>—</td>
                  <td class="cross">✗</td>
                  <td>desde 29€</td>
                </tr>
                <tr>
                  <td>mysecway</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td class="cross">✗</td>
                  <td>7,95€/gestor</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size:0.875rem;color:var(--text-secondary);margin-bottom:0.5rem;">EticAlert ofrece las funcionalidades de las plataformas corporativas al precio de las soluciones básicas.</p>
          <p style="font-size:0.8125rem;color:var(--text-muted);">Datos públicos a abril de 2026. Verifica los precios actualizados en cada proveedor.</p>

          <!-- CTA -->
          <div style="margin-top:3rem;padding:2rem;background:var(--bg-card);border:1px solid var(--border-subtle);border-radius:var(--radius-lg);">
            <h3 style="margin-bottom:0.75rem;">Canal operativo en 5 minutos</h3>
            <p style="color:var(--text-secondary);margin-bottom:1.5rem;">Sin tarjeta de crédito. Sin permanencia. Sin llamadas comerciales.</p>
            <div style="display:flex;gap:1rem;flex-wrap:wrap;">
              <a href="/registro" class="btn btn-primary">Empezar gratis →</a>
              <a href="/precios" class="btn btn-secondary">Ver precios</a>
              <a href="/como-funciona" class="btn btn-secondary">Cómo funciona</a>
            </div>
          </div>

        </article>
      </div>
    </div>
  </div>
</main>

<script>
/* Abre el acordeón al hacer clic en el TOC */
document.querySelectorAll('.toc a').forEach(function(link) {
  link.addEventListener('click', function() {
    var id = this.getAttribute('href').slice(1);
    var target = document.getElementById(id);
    if (target && target.tagName === 'DETAILS') {
      target.setAttribute('open', '');
    }
  });
});
</script>

<?php include 'includes/footer.php'; ?>
