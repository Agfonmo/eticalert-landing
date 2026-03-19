<?php
$page_title       = 'Canal de denuncias para empresas | EticAlert — Cumple la Ley 2/2023';
$page_description = 'Activa tu canal de denuncias en minutos. EticAlert es la plataforma para pymes: segura, conforme a ley, desde 39€/mes. Sin llamadas, sin complicaciones.';
$page_canonical   = 'https://eticalert.com/';
include 'includes/header.php';
?>

<!-- Schema: WebSite + SoftwareApplication -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "EticAlert",
  "url": "https://eticalert.com",
  "description": "Canal de denuncias SaaS para pymes españolas que necesitan cumplir la Ley 2/2023",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://eticalert.com/blog/?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "EticAlert",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Web",
  "url": "https://eticalert.com",
  "offers": {
    "@type": "Offer",
    "price": "39",
    "priceCurrency": "EUR",
    "priceSpecification": {
      "@type": "UnitPriceSpecification",
      "price": "39",
      "priceCurrency": "EUR",
      "unitCode": "MON"
    }
  },
  "description": "Plataforma SaaS de canal de denuncias para pymes españolas. Cumple la Ley 2/2023 en menos de 5 minutos desde 39€/mes."
}
</script>

<main id="main-content">

  <!-- ==========================================================
       1. HERO — v2 con fondo rejilla + mockup de producto
       ========================================================== -->
  <section class="hero hero-v2" aria-labelledby="hero-heading">

    <!-- Fondo decorativo -->
    <div class="hero-bg" aria-hidden="true">
      <div class="hero-grid-pattern"></div>
      <div class="hero-glow hero-glow-1"></div>
      <div class="hero-glow hero-glow-2"></div>
    </div>

    <div class="container">
      <div class="hero-grid">

        <!-- ── Columna izquierda ── -->
        <div class="hero-content fade-up">

          <h1 id="hero-heading">
            El canal de denuncias<br>
            <span class="hero-h1-accent">que te protege de sanciones</span><br>
            en solo 5&nbsp;minutos.
          </h1>

          <p class="hero-subtitle">
            Cumple la Ley 2/2023 con un clic. Activa tu Sistema Interno de Información sin integraciones técnicas y protege a tu empresa frente a multas de hasta 1.000.000€.
          </p>

          <div class="btn-group">
            <a href="/registro" class="btn btn-primary btn-lg">
              Prueba gratis 15 días
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="/como-funciona" class="btn btn-secondary btn-lg">Ver cómo funciona</a>
          </div>

          <!-- Social proof strip -->
          <div class="hero-proof">
            <div class="hero-proof-item">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
              Cifrado AES-256
            </div>
            <div class="hero-proof-sep" aria-hidden="true"></div>
            <div class="hero-proof-item">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
              Alojado en la UE (RGPD)
            </div>
            <div class="hero-proof-sep" aria-hidden="true"></div>
            <div class="hero-proof-item">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
              Sin coste por usuario
            </div>
          </div>
        </div>

        <!-- ── Columna derecha: mockup del panel ── -->
        <div class="hero-mockup fade-up delay-2" aria-hidden="true">

          <!-- Cromo del navegador -->
          <div class="mockup-chrome">
            <div class="mockup-dots">
              <span></span><span></span><span></span>
            </div>
            <div class="mockup-url">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
              app.eticalert.com/panel
            </div>
          </div>

          <!-- Contenido del mockup -->
          <div class="mockup-body">

            <!-- Header del panel -->
            <div class="mockup-panel-header">
              <span class="mockup-panel-title">Panel de gestión</span>
              <span class="mockup-status-live">
                <span class="mockup-live-dot"></span>
                En vivo
              </span>
            </div>

            <!-- Métricas mini -->
            <div class="mockup-metrics">
              <div class="mockup-metric">
                <span class="mockup-metric-val">3</span>
                <span class="mockup-metric-lbl">Activas</span>
              </div>
              <div class="mockup-metric">
                <span class="mockup-metric-val">7d</span>
                <span class="mockup-metric-lbl">Próx. plazo</span>
              </div>
              <div class="mockup-metric mockup-metric-ok">
                <span class="mockup-metric-val">✓</span>
                <span class="mockup-metric-lbl">RSII notif.</span>
              </div>
            </div>

            <!-- Lista de denuncias simuladas -->
            <div class="mockup-list">

              <div class="mockup-item">
                <div class="mockup-item-left">
                  <span class="mockup-anon-icon">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/></svg>
                  </span>
                  <div>
                    <div class="mockup-item-title">Denuncia anónima #0047</div>
                    <div class="mockup-item-sub">Fraude contractual · hace 2h</div>
                  </div>
                </div>
                <span class="mockup-badge mockup-badge-new">Nueva</span>
              </div>

              <div class="mockup-item">
                <div class="mockup-item-left">
                  <span class="mockup-anon-icon">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                  </span>
                  <div>
                    <div class="mockup-item-title">Denuncia #0046</div>
                    <div class="mockup-item-sub">Acoso laboral · hace 1d</div>
                  </div>
                </div>
                <span class="mockup-badge mockup-badge-progress">En curso</span>
              </div>

              <div class="mockup-item">
                <div class="mockup-item-left">
                  <span class="mockup-anon-icon">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/></svg>
                  </span>
                  <div>
                    <div class="mockup-item-title">Denuncia anónima #0045</div>
                    <div class="mockup-item-sub">Seguridad · hace 3d</div>
                  </div>
                </div>
                <span class="mockup-badge mockup-badge-resolved">Resuelta</span>
              </div>

            </div>

            <!-- Alerta de plazo -->
            <div class="mockup-alert">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
              <span>Acuse de recibo automático enviado en <strong>7 días</strong></span>
            </div>

            <!-- URL pública -->
            <div class="mockup-url-bar">
              <span class="mockup-url-label">Canal público activo</span>
              <span class="mockup-url-value">eticalert.com/d/<strong>acme-sl</strong></span>
            </div>

          </div><!-- /mockup-body -->
        </div><!-- /hero-mockup -->

      </div><!-- /hero-grid -->
    </div><!-- /container -->
  </section>

  <!-- ==========================================================
       2. MÉTRICAS / TRUST BAR
       ========================================================== -->
  <section class="metrics" aria-label="Indicadores clave">
    <div class="container">
      <div class="metrics-grid">
        <div class="metric-item fade-up">
          <div class="metric-value">5 min</div>
          <div class="metric-label">Activación inmediata</div>
        </div>
        <div class="metric-item fade-up delay-1">
          <div class="metric-value">Ley 2/2023</div>
          <div class="metric-label">100% conforme</div>
        </div>
        <div class="metric-item fade-up delay-2">
          <div class="metric-value">AES-256</div>
          <div class="metric-label">Cifrado extremo a extremo</div>
        </div>
        <div class="metric-item fade-up delay-3">
          <div class="metric-value">0 cookies</div>
          <div class="metric-label">Canal público sin tracking</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================
       2b. CARRUSEL DE CLIENTES
       Para activar: eliminar class="clients-carousel--hidden"
       Para añadir logos reales: sustituir .client-logo por <img>
       ========================================================== -->
  <section class="clients-carousel clients-carousel--hidden" aria-label="Empresas clientes">
    <div class="container">
      <p class="clients-carousel__label">Empresas que ya cumplen con EticAlert</p>
    </div>
    <div class="clients-track-wrapper">
      <!-- Fade lateral -->
      <div class="clients-fade clients-fade--left" aria-hidden="true"></div>
      <div class="clients-fade clients-fade--right" aria-hidden="true"></div>
      <!-- Track duplicado para loop infinito -->
      <div class="clients-track" aria-hidden="true">
        <div class="clients-set">
          <div class="client-logo"><span>Empresa 1</span></div>
          <div class="client-logo"><span>Empresa 2</span></div>
          <div class="client-logo"><span>Empresa 3</span></div>
          <div class="client-logo"><span>Empresa 4</span></div>
          <div class="client-logo"><span>Empresa 5</span></div>
          <div class="client-logo"><span>Empresa 6</span></div>
          <div class="client-logo"><span>Empresa 7</span></div>
        </div>
        <!-- Copia para loop sin saltos -->
        <div class="clients-set" aria-hidden="true">
          <div class="client-logo"><span>Empresa 1</span></div>
          <div class="client-logo"><span>Empresa 2</span></div>
          <div class="client-logo"><span>Empresa 3</span></div>
          <div class="client-logo"><span>Empresa 4</span></div>
          <div class="client-logo"><span>Empresa 5</span></div>
          <div class="client-logo"><span>Empresa 6</span></div>
          <div class="client-logo"><span>Empresa 7</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================
       3. PROBLEMA → SOLUCIÓN
       ========================================================== -->
  <section class="section" aria-labelledby="problems-heading">
    <div class="container">
      <div class="section-header fade-up">
        <h2 id="problems-heading">¿Por qué necesitas un canal de denuncias?</h2>
      </div>
      <div class="problems-grid">

        <div class="card fade-up">
          <div class="card-icon" aria-hidden="true">
            <i data-lucide="alert-triangle"></i>
          </div>
          <h3>Es obligatorio por ley</h3>
          <p>La Ley 2/2023 obliga a toda empresa con 50+ empleados a tener un canal de denuncias operativo. La AIPI ya supervisa y sanciona activamente.</p>
        </div>

        <div class="card fade-up delay-1">
          <div class="card-icon" aria-hidden="true">
            <i data-lucide="trending-up"></i>
          </div>
          <h3>El 73% de pymes no cumple</h3>
          <p>La mayoría de empresas no ha actuado. Las que se adelantan evitan sanciones de hasta 1.000.000€ y demuestran cultura ética ante clientes y proveedores.</p>
        </div>

        <div class="card fade-up delay-2">
          <div class="card-icon" aria-hidden="true">
            <i data-lucide="zap"></i>
          </div>
          <h3>Se activa en minutos</h3>
          <p>Sin consultores, sin técnicos, sin llamadas comerciales. Configuras tu canal, publicas la URL y empiezas a recibir denuncias de forma segura.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================
       4. CÓMO FUNCIONA (pasos)
       ========================================================== -->
  <section class="section section-alt" aria-labelledby="steps-heading">
    <div class="container">
      <div class="section-header fade-up">
        <h2 id="steps-heading">Así de fácil es cumplir</h2>
      </div>
      <div class="steps-grid">

        <div class="step fade-up">
          <span class="step-number">01</span>
          <div class="step-content">
            <h3>Regístrate</h3>
            <p>Email corporativo y datos de empresa. 2 minutos.</p>
          </div>
        </div>

        <div class="step fade-up delay-1">
          <span class="step-number">02</span>
          <div class="step-content">
            <h3>Configura tu canal</h3>
            <p>Wizard guiado: logo, categorías de denuncia, RSII.</p>
          </div>
        </div>

        <div class="step fade-up delay-2">
          <span class="step-number">03</span>
          <div class="step-content">
            <h3>Publica la URL</h3>
            <p>Pega el enlace en tu web. Tu canal está activo.</p>
          </div>
        </div>

        <div class="step fade-up delay-3">
          <span class="step-number">04</span>
          <div class="step-content">
            <h3>Gestiona y cumple</h3>
            <p>Recibe denuncias, controla plazos, documenta para auditoría.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================
       5. FEATURES (2x3)
       ========================================================== -->
  <section class="section" aria-labelledby="features-heading">
    <div class="container">
      <div class="section-header fade-up">
        <h2 id="features-heading">Todo lo que necesitas para cumplir</h2>
      </div>
      <div class="features-grid">

        <div class="feature-card fade-up">
          <div class="feature-icon" aria-hidden="true"><i data-lucide="eye-off"></i></div>
          <div class="feature-body">
            <h4>Canal anónimo</h4>
            <p>Denuncias anónimas con código de seguimiento seguro. El informante puede consultar el estado sin revelar su identidad.</p>
          </div>
        </div>

        <div class="feature-card fade-up delay-1">
          <div class="feature-icon" aria-hidden="true"><i data-lucide="clock"></i></div>
          <div class="feature-body">
            <h4>Acuse automático</h4>
            <p>Acuse de recibo en 7 días conforme a ley. Automático, sin intervención manual.</p>
          </div>
        </div>

        <div class="feature-card fade-up delay-2">
          <div class="feature-icon" aria-hidden="true"><i data-lucide="calendar-check"></i></div>
          <div class="feature-body">
            <h4>Control de plazos</h4>
            <p>Alertas automáticas para el plazo de 3 meses. No se te pasa ningún deadline legal.</p>
          </div>
        </div>

        <div class="feature-card fade-up">
          <div class="feature-icon" aria-hidden="true"><i data-lucide="users"></i></div>
          <div class="feature-body">
            <h4>Roles y permisos</h4>
            <p>Admin, coordinador y resolutor. Cada rol ve solo lo que debe. Confidencialidad real.</p>
          </div>
        </div>

        <div class="feature-card fade-up delay-1">
          <div class="feature-icon" aria-hidden="true"><i data-lucide="file-lock"></i></div>
          <div class="feature-body">
            <h4>Auditoría inmutable</h4>
            <p>Registro append-only de todas las acciones. Documentación completa para inspección.</p>
          </div>
        </div>

        <div class="feature-card fade-up delay-2">
          <div class="feature-icon" aria-hidden="true"><i data-lucide="shield-check"></i></div>
          <div class="feature-body">
            <h4>Cifrado E2E</h4>
            <p>AES-256 en tránsito y en reposo. Datos alojados en la UE. RGPD nativo.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================
       6. PRICING
       ========================================================== -->
  <section class="section section-alt" id="precios" aria-labelledby="pricing-heading">
    <div class="container">
      <div class="section-header fade-up pricing-intro">
        <h2 id="pricing-heading">Precios claros. Sin letra pequeña.</h2>
        <p>Precio fijo por empresa. Sin coste por usuario ni por empleado.</p>
      </div>

      <div class="pricing-grid">

        <!-- Free -->
        <div class="pricing-card fade-up">
          <div class="pricing-header">
            <div class="plan-name">Free</div>
            <div class="plan-subtitle">Hasta 20 empleados</div>
          </div>
          <div class="pricing-price">
            <span class="price-amount">0€</span>
            <span class="price-period">/mes</span>
          </div>
          <ul class="pricing-features">
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>1 empresa</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Canal anónimo con código de seguimiento</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Acuse de recibo automático (7 días)</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Control de plazos legales (3 meses)</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Mensajería anónima cifrada</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Cifrado AES-256</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Registro de auditoría</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Soporte por email</span></li>
          </ul>
          <div class="pricing-footer">
            <a href="/registro" class="btn btn-secondary">Empezar gratis →</a>
            <p class="pricing-note">Sin tarjeta de crédito</p>
          </div>
        </div>

        <!-- Business -->
        <div class="pricing-card fade-up delay-1">
          <div class="pricing-header">
            <div class="plan-name">Business</div>
            <div class="plan-subtitle">De 21 a 49 empleados</div>
          </div>
          <div class="pricing-price">
            <span class="price-amount">19€</span>
            <span class="price-period">/mes</span>
          </div>
          <ul class="pricing-features">
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Todo lo incluido en Free</span></li>
            <li class="pricing-feature separator"><span>Mayor capacidad:</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Misma funcionalidad</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Hasta 49 empleados</span></li>
          </ul>
          <div class="pricing-footer">
            <a href="/registro" class="btn btn-secondary">Empezar con Business →</a>
            <p class="pricing-note">190€/año (ahorra 2 meses)</p>
          </div>
        </div>

        <!-- Company (featured) -->
        <div class="pricing-card featured fade-up delay-2">
          <span class="pricing-badge">Más popular</span>
          <div class="pricing-header">
            <div class="plan-name">Company</div>
            <div class="plan-subtitle">De 50 a 150 empleados</div>
          </div>
          <div class="pricing-price">
            <span class="price-amount">39€</span>
            <span class="price-period">/mes</span>
          </div>
          <ul class="pricing-features">
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Todo lo incluido en Business</span></li>
            <li class="pricing-feature separator"><span>Mayor capacidad:</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Misma funcionalidad</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Hasta 150 empleados</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Obligatorio Ley 2/2023 ✓</span></li>
          </ul>
          <div class="pricing-footer">
            <a href="/registro" class="btn btn-primary">Empezar con Company →</a>
            <p class="pricing-note">390€/año (ahorra 2 meses)</p>
          </div>
        </div>

        <!-- Enterprise -->
        <div class="pricing-card fade-up delay-3">
          <div class="pricing-header">
            <div class="plan-name">Enterprise</div>
            <div class="plan-subtitle">Más de 150 empleados</div>
          </div>
          <div class="pricing-price">
            <span class="price-custom">Personalizado</span>
          </div>
          <ul class="pricing-features">
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Todo lo incluido en Company</span></li>
            <li class="pricing-feature separator"><span>Además incluye:</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Multiempresa (grupos)</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>SSO / SAML</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>API de integración</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>SLA por contrato</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Onboarding y formación dedicada</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Gestor de cuenta asignado</span></li>
          </ul>
          <div class="pricing-footer">
            <a href="mailto:info@eticalert.com" class="btn btn-secondary">Contactar →</a>
          </div>
        </div>

      </div>

      <!-- Comparativa toggle -->
      <div class="comparison-table-wrapper fade-up">
        <button class="comparison-toggle-btn" aria-expanded="false">
          <span>Ver comparativa completa</span>
          <svg class="comparison-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="comparison-table-body" role="region" aria-label="Comparativa de planes">
          <table class="comparison">
            <thead>
              <tr>
                <th>Característica</th>
                <th>Free</th>
                <th>Business</th>
                <th>Company</th>
                <th>Enterprise</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Canal anónimo con código de seguimiento</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
              <tr><td>Acuse de recibo automático (7 días)</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
              <tr><td>Control de plazos legales (3 meses)</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
              <tr><td>Mensajería anónima cifrada</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
              <tr><td>Cifrado AES-256 E2E</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
              <tr><td>Registro de auditoría append-only</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
              <tr><td>Soporte por email</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
              <tr><td>Máximo de empleados</td><td>20</td><td>49</td><td>150</td><td class="check">Sin límite</td></tr>
              <tr><td>Multiempresa (grupos)</td><td class="cross">—</td><td class="cross">—</td><td class="cross">—</td><td class="check">✓</td></tr>
              <tr><td>SSO / SAML</td><td class="cross">—</td><td class="cross">—</td><td class="cross">—</td><td class="check">✓</td></tr>
              <tr><td>API de integración</td><td class="cross">—</td><td class="cross">—</td><td class="cross">—</td><td class="check">✓</td></tr>
              <tr><td>SLA por contrato</td><td class="cross">—</td><td class="cross">—</td><td class="cross">—</td><td class="check">✓</td></tr>
              <tr><td>Onboarding y formación dedicada</td><td class="cross">—</td><td class="cross">—</td><td class="cross">—</td><td class="check">✓</td></tr>
              <tr><td>Gestor de cuenta asignado</td><td class="cross">—</td><td class="cross">—</td><td class="cross">—</td><td class="check">✓</td></tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>

  <!-- ==========================================================
       7. URGENCIA / AIPI
       ========================================================== -->
  <section class="urgency" aria-labelledby="urgency-heading">
    <div class="container">
      <div class="section-header fade-up">
        <h2 id="urgency-heading">La AIPI ya sanciona. ¿Estás preparado?</h2>
      </div>
      <div class="urgency-grid">
        <div class="urgency-stat fade-up">
          <div class="urgency-stat-value">10 abr. 2026</div>
          <div class="urgency-stat-label">Fecha límite para notificar tu RSII a la AIPI</div>
        </div>
        <div class="urgency-stat fade-up delay-1">
          <div class="urgency-stat-value">1.000.000€</div>
          <div class="urgency-stat-label">Sanción máxima por no tener canal operativo</div>
        </div>
        <div class="urgency-stat fade-up delay-2">
          <div class="urgency-stat-value">73,4%</div>
          <div class="urgency-stat-label">De pymes que aún no han actuado</div>
        </div>
      </div>
      <div class="urgency-body fade-up">
        <p>El periodo de gracia ha terminado. Desde febrero de 2026, la Autoridad Independiente de Protección del Informante supervisa activamente el cumplimiento.</p>
      </div>
      <div style="text-align:center;" class="fade-up">
        <a href="/registro" class="btn btn-primary btn-lg">Activa tu canal antes del plazo →</a>
      </div>
    </div>
  </section>

  <!-- ==========================================================
       8. FAQ
       ========================================================== -->
  <section class="section" aria-labelledby="faq-heading">
    <div class="container">
      <div class="section-header fade-up">
        <h2 id="faq-heading">Preguntas frecuentes</h2>
      </div>

      <div class="faq-list fade-up" role="list">

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-controls="faq-1">
            ¿Quién está obligado a tener canal de denuncias?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer" id="faq-1"><p>Toda empresa privada con 50 o más trabajadores, entidades del sector público, partidos políticos, sindicatos, y personas jurídicas con facturación superior a 10M€. La obligación viene de la Ley 2/2023.</p></div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-controls="faq-2">
            ¿Qué es la AIPI y qué puede hacer?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer" id="faq-2"><p>La Autoridad Independiente de Protección del Informante es el organismo encargado de supervisar que las empresas cumplan con la ley. Desde febrero de 2026 está operativa y puede requerir documentación, inspeccionar el sistema y aplicar sanciones de hasta 1.000.000€.</p></div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-controls="faq-3">
            ¿Se pueden recibir denuncias anónimas?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer" id="faq-3"><p>Sí. La Ley 2/2023 permite denuncias anónimas. EticAlert genera un código de seguimiento seguro para que el informante pueda consultar el estado de su denuncia sin revelar su identidad.</p></div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-controls="faq-4">
            ¿Qué pasa si no tengo canal de denuncias?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer" id="faq-4"><p>Te expones a sanciones de hasta 1.000.000€ para personas jurídicas y 300.000€ para personas físicas (administradores y directivos). Además de la sanción económica, hay riesgo reputacional y responsabilidad personal.</p></div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-controls="faq-5">
            ¿Cuánto se tarda en activar EticAlert?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer" id="faq-5"><p>Menos de 5 minutos. Te registras, configuras tu canal con el wizard guiado (logo, categorías, RSII) y publicas la URL en tu web. Sin técnicos ni consultores.</p></div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-controls="faq-6">
            ¿Necesito contratar un abogado o consultor?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer" id="faq-6"><p>No para activar el canal. EticAlert cubre todos los requisitos técnicos de la ley. Si necesitas instruir denuncias complejas, ofrecemos un servicio opcional con un despacho partner desde 150€/caso.</p></div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-controls="faq-7">
            ¿Qué es el RSII y cómo lo notifico?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer" id="faq-7"><p>El Responsable del Sistema Interno de Información es la persona encargada de gestionar el canal con independencia. Debes designarlo formalmente y notificarlo a la AIPI a través de su sede electrónica antes del 10 de abril de 2026.</p></div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-controls="faq-8">
            ¿EticAlert cumple con el RGPD?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer" id="faq-8"><p>Sí. Datos alojados en la UE, cifrado AES-256 en tránsito y en reposo, minimización de datos, y conservación conforme a los plazos legales. Toda la arquitectura está diseñada con privacy-by-design.</p></div>
        </div>

      </div>
    </div>
  </section>

  <!-- Schema FAQ -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {"@type":"Question","name":"¿Quién está obligado a tener canal de denuncias?","acceptedAnswer":{"@type":"Answer","text":"Toda empresa privada con 50 o más trabajadores, entidades del sector público, partidos políticos, sindicatos, y personas jurídicas con facturación superior a 10M€. La obligación viene de la Ley 2/2023."}},
      {"@type":"Question","name":"¿Qué es la AIPI y qué puede hacer?","acceptedAnswer":{"@type":"Answer","text":"La Autoridad Independiente de Protección del Informante supervisa el cumplimiento de la Ley 2/2023. Desde febrero de 2026 está operativa y puede sancionar hasta 1.000.000€."}},
      {"@type":"Question","name":"¿Se pueden recibir denuncias anónimas?","acceptedAnswer":{"@type":"Answer","text":"Sí. La Ley 2/2023 permite denuncias anónimas. EticAlert genera un código de seguimiento seguro para que el informante consulte el estado sin revelar su identidad."}},
      {"@type":"Question","name":"¿Cuánto se tarda en activar EticAlert?","acceptedAnswer":{"@type":"Answer","text":"Menos de 5 minutos. Te registras, configuras tu canal con el wizard guiado y publicas la URL en tu web. Sin técnicos ni consultores."}}
    ]
  }
  </script>

  <!-- ==========================================================
       9. CTA FINAL
       ========================================================== -->
  <section class="cta-final" aria-labelledby="cta-heading">
    <div class="container">
      <div class="fade-up">
        <h2 id="cta-heading">Cumple la ley en 5 minutos</h2>
        <p>Activa tu canal de denuncias. Sin tarjeta de crédito. Sin permanencia. Sin llamadas.</p>
        <a href="/registro" class="btn btn-primary btn-lg">Crear mi canal →</a>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
