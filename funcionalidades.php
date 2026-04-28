<?php
$page_title       = 'Funcionalidades del canal de denuncias | EticAlert — 55 funciones incluidas';
$page_description = 'Las 55 funcionalidades de EticAlert: cifrado en base de datos, hash verificable, exclusión de gestoras, documentos legales automáticos, RLS y plan gratuito permanente. Cumple la Ley 2/2023.';
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
  "featureList": "Canal anónimo, Cifrado AES-256 en base de datos, Hash verificable, Exclusión preventiva de gestoras, Conflicto de interés, Plazos automatizados Ley 2/2023, Registro append-only, Documentos legales PDF, RLS PostgreSQL, Exportación PDF y CSV, API REST, Plan Free permanente, Multiempresa",
  "description": "Plataforma SaaS de canal de denuncias conforme a la Ley 2/2023. 55 funcionalidades incluidas desde el primer día."
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
            55 funcionalidades incluidas
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
          <div class="callout" style="margin-bottom:2.5rem;">
            <p style="font-weight:700;margin-bottom:0.75rem;color:var(--text-primary);">Los 3 diferenciadores únicos en el mercado español</p>
            <ul style="display:flex;flex-direction:column;gap:0.5rem;margin:0;">
              <li><strong>Hash SHA-256 verificable públicamente</strong> — el contenido de cada denuncia tiene un hash criptográfico que demuestra que no ha sido alterado. Ningún competidor lo ofrece.</li>
              <li><strong>Conflicto de interés integrado</strong> — el gestor puede declarar su relación con el caso e inhibirse automáticamente. Cubre el art. 9 de la Ley 2/2023. Exclusivo.</li>
              <li><strong>Plan Free completo permanente</strong> — hasta 20 empleados, gratis indefinidamente, con todas las funcionalidades. Ningún competidor listado lo ofrece.</li>
            </ul>
          </div>

          <!-- ================================================== -->
          <h2 id="canal-publico">Canal público</h2>
          <p class="func-category-intro">La interfaz que ven los informantes: empleados, proveedores, clientes y terceros que acceden a denunciar.</p>

          <div class="func-grid">

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Canal anónimo con código</span>
              </div>
              <p class="func-desc">Denuncia sin revelar la identidad; el sistema emite un código alfanumérico único como credencial de seguimiento.</p>
              <p class="func-value">Elimina el principal freno para denunciar: el miedo a represalias.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Canal identificado</span>
              </div>
              <p class="func-desc">El informante puede optar por identificarse voluntariamente si lo desea.</p>
              <p class="func-value">Facilita la instrucción del caso sin forzarlo como única vía.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">URL personalizada por empresa</span>
              </div>
              <p class="func-desc">Cada empresa recibe su propia URL pública (eticalert.com/d/tu-empresa) lista para publicar en web o QR.</p>
              <p class="func-value">Cumple la obligación de "publicar el canal" sin desarrollo propio.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Branding corporativo</span>
              </div>
              <p class="func-desc">El informante ve el logo y colores de su empresa, no una pantalla genérica de terceros.</p>
              <p class="func-value">Aumenta la confianza y adopción del canal internamente.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Sin cookies ni tracking</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">El canal público no instala ninguna cookie ni ejecuta scripts de analítica que pudieran revelar que el usuario visitó el canal.</p>
              <p class="func-value">Protege activamente al informante de ser rastreado. Requisito RGPD implícito.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Adjuntar evidencias</span>
              </div>
              <p class="func-desc">El informante puede subir archivos (imágenes, PDFs, documentos) directamente en el formulario de denuncia.</p>
              <p class="func-value">Incrementa la calidad y accionabilidad de las denuncias desde el primer momento.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Seguimiento de estado</span>
              </div>
              <p class="func-desc">Con el código recibido, el informante consulta el estado de su denuncia en cualquier momento, sin registro.</p>
              <p class="func-value">Cierra el ciclo de comunicación exigido por el art. 20 de la Ley 2/2023.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Mensajería anónima cifrada</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Canal de mensajes bidireccional entre el informante (anónimo) y el gestor interno, preservando el anonimato.</p>
              <p class="func-value">Permite pedir aclaraciones o comunicar la resolución sin romper la confidencialidad.</p>
            </div>

            <div class="func-card" style="grid-column:1/-1;">
              <div class="func-card-header">
                <span class="func-name">Exclusión preventiva de gestoras por el informante</span>
                <span class="badge-unico">Único en España</span>
              </div>
              <p class="func-desc">Al crear la denuncia, el informante puede seleccionar qué personas concretas del equipo gestor quedan bloqueadas de su caso: coordinador, resolutores y COMPANY_ADMIN con rol RSII. Las personas excluidas no ven el caso en listados, no acceden al detalle, no reciben notificaciones y no pueden ser asignadas.</p>
              <p class="func-value">Mecanismo complementario al conflicto de interés del gestor (C5): el informante actúa de forma preventiva, sin depender de que el propio gestor se declare incompatible. Cubre situaciones donde el informante conoce el conflicto pero el gestor no lo declararía.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Validación antiabuso (Turnstile)</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">El formulario de denuncia y el panel de seguimiento integran Cloudflare Turnstile. Sin token válido, la API rechaza el envío.</p>
              <p class="func-value">Protege el canal ante campañas automatizadas de denuncia falsa sin añadir fricción al informante legítimo.</p>
            </div>

          </div>

          <!-- ================================================== -->
          <h2 id="multicanal">Recepción multicanal</h2>
          <p class="func-category-intro">La Ley 2/2023 exige admitir denuncias también por vía oral o presencial. EticAlert lo integra en el mismo sistema auditado.</p>

          <div class="func-grid">

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Entrada manual por RSII</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">El responsable registra denuncias recibidas por email, teléfono o presencialmente, indicando el origen con texto libre.</p>
              <p class="func-value">Unifica todos los canales en un único registro auditado. El origen queda documentado aunque no sea digital.</p>
            </div>

          </div>

          <!-- ================================================== -->
          <h2 id="gestion">Gestión de casos</h2>
          <p class="func-category-intro">El flujo interno completo para instruir, asignar y resolver cada denuncia con trazabilidad total.</p>

          <div class="func-grid">

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Panel de administración</span>
              </div>
              <p class="func-desc">Interfaz centralizada donde el RSII ve todas las denuncias, su estado, plazos y actividad reciente.</p>
              <p class="func-value">Sustituye hojas de cálculo y bandejas de email; todo el equipo gestor ve el mismo estado en tiempo real.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Asignación de casos</span>
              </div>
              <p class="func-desc">El administrador asigna una denuncia a un coordinador o resolutor específico, quedando registrado en auditoría.</p>
              <p class="func-value">Permite estructurar el flujo interno según la organización de la empresa.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Etiquetado de casos</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Añade etiquetas personalizadas a cada denuncia: "acoso", "fraude financiero", "proveedor", etc.</p>
              <p class="func-value">Facilita filtros, reporting interno y análisis de patrones a lo largo del tiempo.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Gestión de estados</span>
              </div>
              <p class="func-desc">Ciclo de vida completo: recibida → en instrucción → pendiente → resuelta / archivada.</p>
              <p class="func-value">Visibilidad clara para todo el equipo gestor con traza auditable de cada transición.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Autoasignación inteligente</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Al recibirse una denuncia, el sistema intenta asignarla automáticamente si existe exactamente un resolutor compatible con la categoría y no excluido por el informante.</p>
              <p class="func-value">Elimina la cola de casos sin asignar en empresas con un solo resolutor por área. El coordinador solo interviene cuando hay ambigüedad real.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Topics por resolutor</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Cada gestor tiene asignadas las categorías de denuncia que puede instruir. La compatibilidad temática controla quién puede ser asignado a cada caso; si no hay match, el coordinador activa un override explícito.</p>
              <p class="func-value">Garantiza que casos de acoso laboral no llegan a alguien de cumplimiento financiero, y viceversa. Compartimentación funcional por especialidad.</p>
            </div>

            <div class="func-card" style="grid-column:1/-1;">
              <div class="func-card-header">
                <span class="func-name">Conflicto de interés</span>
                <span class="badge-unico">Único en España</span>
              </div>
              <p class="func-desc">El gestor asignado puede declarar que tiene relación directa con el caso o el denunciado, inhibiéndose automáticamente y derivando a otro responsable.</p>
              <p class="func-value">Cubre el requisito de independencia del art. 9 de la Ley 2/2023. Sin este mecanismo la empresa queda expuesta ante la AIPI. Ningún competidor lo incluye.</p>
            </div>

          </div>

          <!-- ================================================== -->
          <h2 id="roles">Roles y permisos</h2>
          <p class="func-category-intro">Tres niveles de acceso con compartimentación real. Cada rol ve y puede hacer exactamente lo que le corresponde, ni más ni menos.</p>

          <div class="func-grid">

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Rol Administrador</span>
              </div>
              <p class="func-desc">Gestiona la configuración del canal, el equipo, la facturación y el soporte. Por defecto <strong>no accede al contenido de las denuncias</strong>. Solo cuando actúa como RSII (responsable del sistema) hereda la capacidad de leer casos, gestionar asignaciones y prioridades — con las mismas reglas que el coordinador.</p>
              <p class="func-value">El administrador que no es RSII nunca ve información sensible de un caso. Separación de poderes entre gestión empresarial e instrucción del expediente.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Rol Coordinador (RSII)</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Lee el contenido completo de <strong>todos los casos</strong> (salvo los que el informante le ha bloqueado explícitamente). Gestiona asignaciones y prioridades en cualquier expediente. Solo puede responder al informante o cambiar el estado de un caso cuando ese caso está asignado a él.</p>
              <p class="func-value">Visibilidad total para coordinar, acción restringida para instruir. El coordinador organiza sin poder actuar donde no le corresponde.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Rol Resolutor</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Ve únicamente los casos asignados a él. Lee el contenido completo, responde al informante y mueve el estado del expediente. No puede ver ni tocar casos de otros resolutores ni reasignarse casos.</p>
              <p class="func-value">Compartimentación máxima: cada resolutor trabaja en su propio espacio sin acceso lateral al resto del sistema. Principio "need to know" aplicado con rigor.</p>
            </div>

          </div>

          <!-- ================================================== -->
          <h2 id="plazos">Plazos legales automatizados</h2>
          <p class="func-category-intro">La Ley 2/2023 establece plazos concretos con sanciones graves por incumplimiento. EticAlert los gestiona sin intervención manual.</p>

          <div class="func-grid">

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Acuse automático en 7 días</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">El sistema envía el acuse de recibo al informante dentro del plazo legal (art. 18 Ley 2/2023), sin intervención manual.</p>
              <p class="func-value">El incumplimiento es infracción grave. Automatizarlo elimina el riesgo de olvido humano.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Alerta de vencimiento de 3 meses</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Notificación proactiva al gestor cuando se acerca el plazo para comunicar las medidas adoptadas al informante.</p>
              <p class="func-value">Sin esta alerta el gestor depende de su propio calendario. El incumplimiento es infracción grave.</p>
            </div>

            <div class="func-card" style="grid-column:1/-1;">
              <div class="func-card-header">
                <span class="func-name">Historial de plazos auditado</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Cada plazo (7 días, 3 meses) queda registrado con timestamp en el audit log: cuándo se cumplió y cómo.</p>
              <p class="func-value">Evidencia documental directamente exportable cuando la AIPI inspeccione. La combinación de automatización + registro auditado no la tienen los competidores básicos.</p>
            </div>

          </div>

          <!-- ================================================== -->
          <h2 id="seguridad">Seguridad y cifrado</h2>
          <p class="func-category-intro">Protección técnica en todas las capas. No solo en el transporte: también en la base de datos y en los metadatos.</p>

          <div class="func-grid">

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Cifrado AES-256 en tránsito y reposo</span>
              </div>
              <p class="func-desc">Toda la comunicación usa TLS; los datos almacenados están cifrados con AES-256.</p>
              <p class="func-value">Cumple los requisitos técnicos de confidencialidad de la Ley 2/2023 y el RGPD.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Cifrado en base de datos</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Los campos sensibles (identidad, contenido de denuncia) están cifrados dentro de la propia BD, no solo a nivel de disco.</p>
              <p class="func-value">Protege ante brechas de BD directas: SQL injection, acceso físico al servidor, acceso interno no autorizado.</p>
            </div>

            <div class="func-card" style="grid-column:1/-1;">
              <div class="func-card-header">
                <span class="func-name">Hash SHA-256 verificable públicamente</span>
                <span class="badge-unico">Único en España</span>
              </div>
              <p class="func-desc">El contenido de cada denuncia tiene un hash criptográfico verificable en /verificar que demuestra que no ha sido alterado desde su recepción.</p>
              <p class="func-value">Garantía de integridad ante disputa legal o inspección de la AIPI. Demuestra que la empresa no ha manipulado el contenido. Ningún competidor lo ofrece.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Datos alojados en la UE</span>
              </div>
              <p class="func-desc">Todos los datos se almacenan en servidores dentro de la Unión Europea.</p>
              <p class="func-value">Cumplimiento inmediato de las restricciones de transferencia internacional del RGPD.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">URLs de adjuntos firmadas (TTL 30 min)</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Los enlaces a archivos adjuntos expiran automáticamente a los 30 minutos. No son URLs permanentes y compartibles.</p>
              <p class="func-value">Impide que un enlace filtrado por error dé acceso indefinido a evidencias confidenciales.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">RLS en base de datos</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Row Level Security de PostgreSQL: políticas de acceso a nivel de fila en la base de datos, independientes de la lógica de la aplicación.</p>
              <p class="func-value">Segunda capa de seguridad autónoma. Aunque un bug ejecutara una query incorrecta, la BD devuelve solo los datos accesibles al usuario. Aislamiento total entre empresas garantizado a nivel de motor de datos.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Validación de email corporativo en registro</span>
              </div>
              <p class="func-desc">El sistema rechaza dominios personales (gmail, hotmail), temporales y dominios sin registros MX activos durante el alta de empresa.</p>
              <p class="func-value">Solo se registran empresas reales con infraestructura de correo corporativo. Reduce ruido y abuso del canal de registro.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Validación de CIF con dígito de control</span>
              </div>
              <p class="func-desc">El CIF español se valida en formato y dígito de control en el alta. No se admiten CIFs malformados ni duplicados por empresa.</p>
              <p class="func-value">Cada empresa ocupa un único espacio en la plataforma. Garantiza que la evidencia laboral se asocia siempre a la entidad correcta.</p>
            </div>

          </div>

          <!-- ================================================== -->
          <h2 id="auditoria">Auditoría e integridad</h2>
          <p class="func-category-intro">Trazabilidad completa de todo lo que ocurre en el sistema. Sin posibilidad de manipulación retroactiva.</p>

          <div class="func-grid">

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Registro append-only</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Ninguna acción del sistema puede borrarse ni modificarse retroactivamente. El log solo crece.</p>
              <p class="func-value">La AIPI puede verificar que no se han eliminado evidencias. Protege a la empresa ante acusaciones de manipulación.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Timestamps inmutables</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Cada acción (lectura, asignación, cambio de estado, mensaje) lleva timestamp firmado y no editable.</p>
              <p class="func-value">Cadena de custodia verificable. Requisito implícito de la Ley 2/2023 para el registro de actuaciones.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Trazabilidad de lecturas</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">El sistema registra quién leyó cada denuncia y cuándo, a nivel individual.</p>
              <p class="func-value">Detecta accesos no autorizados a información confidencial. Permite demostrar compartimentación ante la AIPI.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Historial de nombramientos RSII</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Cada cambio en la designación del RSII queda registrado automáticamente: quién fue nombrado, quién lo nombró, cuándo y cuándo fue revocado.</p>
              <p class="func-value">Trazabilidad legal del Art. 8 Ley 2/2023. Si la AIPI pregunta quién era el RSII en una fecha concreta, el historial lo acredita con timestamps inmutables.</p>
            </div>

          </div>

          <!-- ================================================== -->
          <h2 id="reporting">Reporting y exportación</h2>
          <p class="func-category-intro">Documentación lista para auditoría, abogados o la AIPI. Sin trabajo manual de recopilación.</p>

          <div class="func-grid">

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Exportación PDF de caso</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Genera un PDF del historial completo: cronología, mensajes, cambios de estado, decisiones tomadas.</p>
              <p class="func-value">Documento listo para entregar a la AIPI, a un abogado o como evidencia en un procedimiento.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Historial de plazos en el PDF</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">El PDF incluye la cronología de plazos legales: recepción, acuse, resolución con sus fechas exactas.</p>
              <p class="func-value">Prueba documental de cumplimiento de la Ley 2/2023, lista para auditoría. Pocos competidores lo incluyen.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Export CSV de metadatos</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">El administrador exporta el listado completo de casos en CSV con sus metadatos (código, categoría, estado, fechas, resolutor) sin incluir contenido sensible.</p>
              <p class="func-value">Permite análisis interno de patrones, reporting al consejo de administración y auditorías sin exponer el contenido cifrado de las denuncias.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Informe de compliance mensual</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">El sistema genera automáticamente un informe periódico de actividad del canal: volumen de casos, estados, tiempos de respuesta y cumplimiento de plazos.</p>
              <p class="func-value">Sin intervención manual. El RSII dispone de métricas de cumplimiento listas para presentar al órgano de gobierno.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Purga RGPD de casos archivados</span>
              </div>
              <p class="func-desc">El administrador puede eliminar de forma permanente e irreversible los expedientes archivados que han superado el período de retención legal.</p>
              <p class="func-value">Cumplimiento del principio de minimización de datos del RGPD. Confirma al informante que sus datos no se conservan indefinidamente.</p>
            </div>

          </div>

          <!-- ================================================== -->
          <h2 id="configuracion">Configuración y puesta en marcha</h2>
          <p class="func-category-intro">De cero a canal operativo en menos de 5 minutos. Sin consultores, sin llamadas, sin técnicos.</p>

          <div class="func-grid">

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Wizard de configuración guiado</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Proceso paso a paso: datos de empresa, logo, categorías de denuncia, RSII designado. Menos de 5 minutos.</p>
              <p class="func-value">EQS y WhistleBlower requieren implantación asistida con precios opacos. EticAlert es self-service.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Categorías de denuncia configurables</span>
              </div>
              <p class="func-desc">Selecciona qué tipologías activas según tu sector: corrupción, acoso, fraude, GDPR, etc.</p>
              <p class="func-value">Adapta el canal al perfil de riesgo concreto de tu empresa. El informante ve opciones claras, no un campo en blanco.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Precio fijo por empresa</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Un precio mensual independiente del número de usuarios, gestores o denuncias recibidas.</p>
              <p class="func-value">Coste predecible. Elimina el desincentivo de añadir más gestores por miedo al coste adicional.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Prueba gratuita 15 días</span>
              </div>
              <p class="func-desc">Acceso completo a la plataforma durante 15 días sin tarjeta de crédito.</p>
              <p class="func-value">Verifica el cumplimiento antes de comprometerte económicamente.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Preview 1:1 del canal en tiempo real</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Desde los ajustes de branding, el administrador ve en tiempo real cómo queda el canal público antes de guardar, reproduciendo logo, colores, textos y modos claro/oscuro.</p>
              <p class="func-value">Elimina el riesgo de publicar un canal con errores visuales. Lo que ves en preview es exactamente lo que verá el informante.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Dominio propio personalizado</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">El canal público puede publicarse bajo un dominio corporativo propio en lugar de eticalert.com/d/slug.</p>
              <p class="func-value">Refuerza la confianza del informante al ver la URL de su propia empresa. Requerido por algunas políticas de compliance corporativo.</p>
            </div>

            <div class="func-card" style="grid-column:1/-1;">
              <div class="func-card-header">
                <span class="func-name">Generación de documentos legales PDF</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">El sistema genera automáticamente tres documentos legales con los datos reales de la empresa: (1) Reglamento del canal de denuncias, (2) Nombramiento formal del RSII conforme al Art. 8 Ley 2/2023, (3) Cláusula informativa para empleados.</p>
              <p class="func-value">Documentación legal lista para firmar y archivar, sin necesidad de abogado para la redacción base. Reduce semanas de trabajo a un clic.</p>
            </div>

            <div class="func-card" style="grid-column:1/-1;">
              <div class="func-card-header">
                <span class="func-name">Plan Free completo permanente</span>
                <span class="badge-unico">Único en España</span>
              </div>
              <p class="func-desc">Hasta 20 empleados, gratis indefinidamente, con todas las funcionalidades activas.</p>
              <p class="func-value">Las empresas por debajo del umbral legal pueden adoptar el canal sin coste. Ningún competidor listado ofrece un plan permanentemente gratuito con funcionalidad completa.</p>
            </div>

          </div>

          <!-- ================================================== -->
          <h2 id="enterprise">Capacidades Enterprise</h2>
          <p class="func-category-intro">Para grupos empresariales y organizaciones con requisitos IT avanzados.</p>

          <div class="func-grid">

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Multiempresa para grupos</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Una sola cuenta gestiona canales de varias empresas del mismo grupo desde un único panel.</p>
              <p class="func-value">Grupos con varias subsidiarias obligadas centralizan la gestión de compliance. Reduce coste y fragmentación.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">SSO / SAML</span>
              </div>
              <p class="func-desc">Inicio de sesión único integrado con Azure AD, Okta u otros proveedores de identidad corporativos.</p>
              <p class="func-value">Elimina la gestión de credenciales separadas. Facilita la adopción en empresas con políticas IT estrictas.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">API REST de integración</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">API para conectar EticAlert con sistemas internos: ERP, SIEM, herramientas de compliance o GRC.</p>
              <p class="func-value">Automatiza flujos: crear caso en Jira al recibir denuncia, sincronizar estado con sistema GRC. Ningún competidor básico tiene API pública documentada.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">SLA por contrato</span>
              </div>
              <p class="func-desc">Garantía de disponibilidad y tiempos de respuesta formalizados contractualmente.</p>
              <p class="func-value">Requerido por grandes empresas con dependencia regulatoria del canal. Cubre el riesgo de downtime durante una denuncia activa.</p>
            </div>

          </div>

          <!-- ================================================== -->
          <h2 id="partners">Partners y servicios legales</h2>
          <p class="func-category-intro">Cuando la denuncia requiere abogados: escalado directo desde la plataforma, sin buscar asesoramiento externo.</p>

          <div class="func-grid">

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Programa de partners</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Descuentos y condiciones para asesorías laborales, despachos y consultoras que gestionan el canal de varios clientes.</p>
              <p class="func-value">El asesor añade el canal como servicio gestionado para sus clientes sin infraestructura propia.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Instrucción jurídica de denuncias</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Servicio opcional con despacho partner para instruir formalmente una denuncia concreta. Desde 150€/caso.</p>
              <p class="func-value">La empresa escala a abogados especializados sin buscarlos por su cuenta. El expediente ya está en la plataforma.</p>
            </div>

            <div class="func-card">
              <div class="func-card-header">
                <span class="func-name">Informe de resolución</span>
                <span class="badge-diff">Diferenciador</span>
              </div>
              <p class="func-desc">Redacción del informe formal de resolución por despacho partner. Desde 350€/caso.</p>
              <p class="func-value">Documento jurídicamente sólido para archivar en el expediente y para posible defensa ante la AIPI o un juzgado.</p>
            </div>

          </div>

          <!-- ================================================== -->
          <h2 id="comparativa">Comparativa ampliada</h2>
          <p class="func-category-intro">EticAlert frente a los principales competidores en las funcionalidades que más importan para el cumplimiento real de la Ley 2/2023.</p>

          <div style="overflow-x:auto; margin:1.5rem 0;">
            <table class="comparison">
              <thead>
                <tr>
                  <th>Solución</th>
                  <th>Cifrado en BD</th>
                  <th>Sin marca de agua</th>
                  <th>Conflicto de interés</th>
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

<?php include 'includes/footer.php'; ?>
