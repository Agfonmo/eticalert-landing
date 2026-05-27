<?php
$page_title       = 'Precios del canal de denuncias | EticAlert — desde 9€/mes';
$page_description = 'Precio transparente sin sorpresas. Canal de denuncias desde 9€/mes. Plan Starter para pymes y sujetos obligados. Compara planes y activa el tuyo hoy.';
$page_canonical   = 'https://eticalert.com/precios';
include 'includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Inicio","item":"https://eticalert.com/"},
    {"@type":"ListItem","position":2,"name":"Precios","item":"https://eticalert.com/precios"}
  ]
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
  "areaServed": {"@type": "Country", "name": "ES"},
  "availableLanguage": "Spanish",
  "offers": [
    {"@type":"Offer","name":"Starter","price":"9","priceCurrency":"EUR","description":"Hasta 20 empleados. 9€/mes o 81€/año."},
    {"@type":"Offer","name":"Business","price":"19","priceCurrency":"EUR","description":"De 21 a 49 empleados. Facturación anual: 190€/año."},
    {"@type":"Offer","name":"Company","price":"39","priceCurrency":"EUR","description":"De 50 a 150 empleados. Facturación anual: 390€/año."},
    {"@type":"Offer","name":"Enterprise","price":"0","priceCurrency":"EUR","description":"Más de 150 empleados. Precio personalizado."}
  ]
}
</script>

<main id="main-content">

  <!-- HERO PRECIOS -->
  <section style="padding: 140px 0 80px;">
    <div class="container">
      <div style="text-align:center; max-width:640px; margin:0 auto;" class="fade-up">
        <h1 style="margin-bottom:0.75rem;">Precios claros. Sin sorpresas.</h1>
        <p style="font-size:1.125rem; color:var(--text-secondary); margin-bottom:2.5rem;">Pruébalo gratis durante 15 días. No necesitas tarjeta de crédito. Precio fijo por empresa. Sin coste adicional por usuario.</p>
      </div>

      <!-- Toggle mensual/anual -->
      <div class="billing-toggle fade-up">
        <label class="billing-label-monthly active" for="billing-toggle">Mensual</label>
        <label class="toggle-switch">
          <input type="checkbox" id="billing-toggle" aria-label="Cambiar a facturación anual">
          <span class="toggle-slider"></span>
        </label>
        <label class="billing-label-annual" for="billing-toggle">Anual</label>
        <span class="billing-badge">Ahorra 2 meses</span>
      </div>

      <!-- Pricing cards -->
      <div class="pricing-grid">

        <!-- Starter -->
        <div class="pricing-card fade-up">
          <div class="pricing-header">
            <div class="plan-name">Starter</div>
            <div class="plan-subtitle">Hasta 20 empleados</div>
          </div>
          <div class="pricing-price" data-price-monthly>
            <span class="price-amount">9€</span>
            <span class="price-period">/mes</span>
          </div>
          <div class="pricing-price" data-price-annual style="display:none;">
            <span class="price-amount">81€</span>
            <span class="price-period">/año · 3 meses gratis</span>
          </div>
          <ul class="pricing-features">
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>1 empresa</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Canal anónimo con código de seguimiento</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Acuse de recibo automático (7 días)</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Control de plazos legales (3 meses)</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Mensajería anónima cifrada</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Cifrado AES-256</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Registro de auditoría</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Soporte por email</span></li>
          </ul>
          <div class="pricing-footer">
            <a href="/registro" class="btn btn-secondary">Activar Starter →</a>
            <p class="pricing-note" data-price-monthly>81€/año (ahorra 27€)</p>
            <p class="pricing-note" data-price-annual style="display:none;">81€/año · Sin permanencia</p>
          </div>
        </div>

        <!-- Business -->
        <div class="pricing-card fade-up delay-1">
          <div class="pricing-header">
            <div class="plan-name">Business</div>
            <div class="plan-subtitle">De 21 a 49 empleados</div>
          </div>
          <div class="pricing-price" data-price-monthly>
            <span class="price-amount">19€</span>
            <span class="price-period">/mes</span>
          </div>
          <div class="pricing-price" data-price-annual style="display:none;">
            <span class="price-amount">190€</span>
            <span class="price-period">/año · 2 meses gratis</span>
          </div>
          <ul class="pricing-features">
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Todo lo incluido en Starter</span></li>
            <li class="pricing-feature separator"><span>Mayor capacidad:</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Misma funcionalidad completa</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Hasta 49 empleados</span></li>
          </ul>
          <div class="pricing-footer">
            <a href="/registro" class="btn btn-secondary">Empezar con Business →</a>
            <p class="pricing-note" data-price-monthly>190€/año (ahorra 2 meses)</p>
            <p class="pricing-note" data-price-annual style="display:none;">190€/año · Sin permanencia</p>
          </div>
        </div>

        <!-- Company (featured) -->
        <div class="pricing-card featured fade-up delay-2">
          <span class="pricing-badge">Más popular</span>
          <div class="pricing-header">
            <div class="plan-name">Company</div>
            <div class="plan-subtitle">De 50 a 150 empleados</div>
          </div>
          <div class="pricing-price" data-price-monthly>
            <span class="price-amount">39€</span>
            <span class="price-period">/mes</span>
          </div>
          <div class="pricing-price" data-price-annual style="display:none;">
            <span class="price-amount">390€</span>
            <span class="price-period">/año · 2 meses gratis</span>
          </div>
          <ul class="pricing-features">
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Todo lo incluido en Business</span></li>
            <li class="pricing-feature separator"><span>Mayor capacidad:</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Misma funcionalidad completa</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Hasta 150 empleados</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Cumplimiento <a href="/blog/ley-2-2023-canal-de-denuncias" style="color:var(--accent);">Ley 2/2023</a> ✓</span></li>
          </ul>
          <div class="pricing-footer">
            <a href="/registro" class="btn btn-primary">Empezar con Company →</a>
            <p class="pricing-note" data-price-monthly>390€/año (ahorra 2 meses)</p>
            <p class="pricing-note" data-price-annual style="display:none;">390€/año · Sin permanencia</p>
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
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Todo lo incluido en Company</span></li>
            <li class="pricing-feature separator"><span>Además incluye:</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Multiempresa (grupos)</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>SSO / SAML</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>API de integración</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>SLA por contrato</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Onboarding y formación dedicada</span></li>
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Gestor de cuenta asignado</span></li>
          </ul>
          <div class="pricing-footer">
            <a href="mailto:info@eticalert.com" class="btn btn-secondary">Contactar →</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- PRUEBA SOCIAL — CREDENCIALES Y COMPARATIVA -->
  <section style="padding:56px 0; background:var(--bg-secondary); border-top:1px solid var(--border); border-bottom:1px solid var(--border);">
    <div class="container">

      <!-- Credenciales técnicas -->
      <div class="fade-up" style="text-align:center; margin-bottom:3rem;">
        <p style="font-size:0.75rem; text-transform:uppercase; letter-spacing:0.1em; color:var(--text-muted); margin-bottom:1.75rem;">Tecnología y cumplimiento en los que confiar</p>
        <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; align-items:stretch;">

          <div style="display:flex; align-items:center; gap:0.6rem; background:var(--bg-primary); border:1px solid var(--border); border-radius:10px; padding:0.75rem 1.25rem;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span style="font-size:0.875rem; font-weight:600; color:var(--text-primary);">Cifrado AES-256</span>
          </div>

          <div style="display:flex; align-items:center; gap:0.6rem; background:var(--bg-primary); border:1px solid var(--border); border-radius:10px; padding:0.75rem 1.25rem;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            <span style="font-size:0.875rem; font-weight:600; color:var(--text-primary);">RGPD cumplido</span>
          </div>

          <div style="display:flex; align-items:center; gap:0.6rem; background:var(--bg-primary); border:1px solid var(--border); border-radius:10px; padding:0.75rem 1.25rem;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            <span style="font-size:0.875rem; font-weight:600; color:var(--text-primary);">Datos en la UE</span>
          </div>

          <div style="display:flex; align-items:center; gap:0.6rem; background:var(--bg-primary); border:1px solid var(--border); border-radius:10px; padding:0.75rem 1.25rem;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
            <span style="font-size:0.875rem; font-weight:600; color:var(--text-primary);">Adaptado Ley 2/2023 + AIPI</span>
          </div>

          <div style="display:flex; align-items:center; gap:0.6rem; background:var(--bg-primary); border:1px solid var(--border); border-radius:10px; padding:0.75rem 1.25rem;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" aria-hidden="true"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
            <span style="font-size:0.875rem; font-weight:600; color:var(--text-primary);">Pagos seguros vía Stripe</span>
          </div>

        </div>
      </div>

      <!-- Comparativa de precio vs competencia -->
      <div class="fade-up" style="display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:1rem; max-width:900px; margin:0 auto;">

        <div style="background:var(--bg-primary); border:1px solid var(--border); border-radius:12px; padding:1.5rem;">
          <p style="font-size:0.75rem; text-transform:uppercase; letter-spacing:0.08em; color:var(--text-muted); margin-bottom:0.5rem;">vs Sesame HR · Factorial · Personio</p>
          <p style="font-size:1.5rem; font-weight:800; color:var(--accent); margin-bottom:0.25rem;">14x más económico</p>
          <p style="font-size:0.875rem; color:var(--text-secondary);">Para 100 empleados: suites RRHH cobran ~550€/mes por usuario. EticAlert Company: 39€/mes precio fijo.</p>
        </div>

        <div style="background:var(--bg-primary); border:1px solid var(--border); border-radius:12px; padding:1.5rem;">
          <p style="font-size:0.75rem; text-transform:uppercase; letter-spacing:0.08em; color:var(--text-muted); margin-bottom:0.5rem;">vs soluciones internacionales</p>
          <p style="font-size:1.5rem; font-weight:800; color:var(--accent); margin-bottom:0.25rem;">3–5x más económico</p>
          <p style="font-size:0.875rem; color:var(--text-secondary);">WhistleB, WBS o Whistlelink cuestan desde 99–149€/mes y no están adaptados a la normativa española.</p>
        </div>

        <div style="background:var(--bg-primary); border:1px solid var(--border); border-radius:12px; padding:1.5rem;">
          <p style="font-size:0.75rem; text-transform:uppercase; letter-spacing:0.08em; color:var(--text-muted); margin-bottom:0.5rem;">sin fricciones de configuración</p>
          <p style="font-size:1.5rem; font-weight:800; color:var(--accent); margin-bottom:0.25rem;">Canal en 5 minutos</p>
          <p style="font-size:0.875rem; color:var(--text-secondary);">Sin integración técnica, sin instalación, sin consultor externo. Wizard guiado: logo, categorías, RSII. Listo.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- TESTIMONIOS -->
  <section style="padding:72px 0;">
    <div class="container">
      <div class="section-header fade-up">
        <h2>Lo que dicen nuestros clientes</h2>
        <p style="color:var(--text-secondary);">Empresas que ya cumplen la Ley 2/2023 con EticAlert.</p>
      </div>
      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:1.5rem;" class="fade-up">

        <!-- Testimonio 1 — Siempre Energía -->
        <div style="background:var(--bg-secondary); border:1px solid var(--border); border-radius:16px; padding:1.75rem; display:flex; flex-direction:column; gap:1.25rem;">
          <svg width="28" height="20" viewBox="0 0 28 20" fill="var(--accent)" opacity="0.4" aria-hidden="true"><path d="M0 20V12.727C0 5.455 4.667 1.212 14 0l1.867 2.909C11.2 4.03 8.756 6.333 8.4 10h5.6V20H0zm14 0V12.727C14 5.455 18.667 1.212 28 0l1.867 2.909C25.2 4.03 22.756 6.333 22.4 10H28V20H14z"/></svg>
          <p style="font-size:1rem; color:var(--text-primary); line-height:1.6; flex:1;">"Teníamos la obligación legal pero no sabíamos por dónde empezar. Con EticAlert en 5 minutos teníamos el canal activo y el RSII notificado ante la AIPI. Muy recomendable para cualquier pyme."</p>
          <div style="display:flex; align-items:center; gap:1rem;">
            <div style="width:44px; height:44px; border-radius:50%; background:rgba(74,222,128,0.15); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:1rem; color:var(--accent); flex-shrink:0;">CR</div>
            <div>
              <p style="font-weight:700; font-size:0.9rem; color:var(--text-primary); margin-bottom:0.1rem;">Carlos Rubio</p>
              <p style="font-size:0.8rem; color:var(--text-muted);">CEO · Siempre Energía</p>
            </div>
            <img src="https://siempreenergia.com/wp-content/uploads/thegem-logos/logo_74adbe5fccad397a94f1797e320d67bc_1x.png" alt="Siempre Energía" loading="lazy" style="height:28px; width:auto; object-fit:contain; margin-left:auto; opacity:0.75; filter:grayscale(1);">
          </div>
        </div>

        <!-- Testimonio 2 — Flutic -->
        <div style="background:var(--bg-secondary); border:1px solid var(--border); border-radius:16px; padding:1.75rem; display:flex; flex-direction:column; gap:1.25rem;">
          <svg width="28" height="20" viewBox="0 0 28 20" fill="var(--accent)" opacity="0.4" aria-hidden="true"><path d="M0 20V12.727C0 5.455 4.667 1.212 14 0l1.867 2.909C11.2 4.03 8.756 6.333 8.4 10h5.6V20H0zm14 0V12.727C14 5.455 18.667 1.212 28 0l1.867 2.909C25.2 4.03 22.756 6.333 22.4 10H28V20H14z"/></svg>
          <p style="font-size:1rem; color:var(--text-primary); line-height:1.6; flex:1;">"Llevábamos meses buscando una solución que cumpliera la ley sin convertirse en un proyecto de implementación. EticAlert lo teníamos operativo en una tarde. Limpio, bien construido y sin sorpresas en el precio."</p>
          <div style="display:flex; align-items:center; gap:1rem;">
            <div style="width:44px; height:44px; border-radius:50%; background:rgba(74,222,128,0.15); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:1rem; color:var(--accent); flex-shrink:0;">AF</div>
            <div>
              <p style="font-weight:700; font-size:0.9rem; color:var(--text-primary); margin-bottom:0.1rem;">Agustín Fontecha</p>
              <p style="font-size:0.8rem; color:var(--text-muted);">Co-founder · Flutic</p>
            </div>
            <img src="https://cdn.prod.website-files.com/61f3a6add7423fda50f35248/68f4271583f453d8faf645aa_PNG%20image.png" alt="Flutic" loading="lazy" style="height:24px; width:auto; object-fit:contain; margin-left:auto; opacity:0.75; filter:grayscale(1);">
          </div>
        </div>

        <!-- Testimonio 3 — Tadatic -->
        <div style="background:var(--bg-secondary); border:1px solid var(--border); border-radius:16px; padding:1.75rem; display:flex; flex-direction:column; gap:1.25rem;">
          <svg width="28" height="20" viewBox="0 0 28 20" fill="var(--accent)" opacity="0.4" aria-hidden="true"><path d="M0 20V12.727C0 5.455 4.667 1.212 14 0l1.867 2.909C11.2 4.03 8.756 6.333 8.4 10h5.6V20H0zm14 0V12.727C14 5.455 18.667 1.212 28 0l1.867 2.909C25.2 4.03 22.756 6.333 22.4 10H28V20H14z"/></svg>
          <p style="font-size:1rem; color:var(--text-primary); line-height:1.6; flex:1;">"En una empresa de selección de talento la confidencialidad es crítica. EticAlert nos ofrece canal anónimo real con cifrado AES-256 y cumplimiento total, por una fracción de lo que cobran las soluciones enterprise."</p>
          <div style="display:flex; align-items:center; gap:1rem;">
            <div style="width:44px; height:44px; border-radius:50%; background:rgba(74,222,128,0.15); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:1rem; color:var(--accent); flex-shrink:0;">JC</div>
            <div>
              <p style="font-weight:700; font-size:0.9rem; color:var(--text-primary); margin-bottom:0.1rem;">Javier Cadierno</p>
              <p style="font-size:0.8rem; color:var(--text-muted);">Co-founder · Tadatic</p>
            </div>
            <img src="https://tadatic.com/favicon.ico" alt="Tadatic" loading="lazy" style="height:28px; width:28px; object-fit:contain; margin-left:auto; opacity:0.75; filter:grayscale(1); border-radius:6px;">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- TABLA COMPARATIVA COMPLETA -->
  <section class="section section-alt" aria-labelledby="tabla-heading">
    <div class="container">
      <div class="section-header fade-up">
        <h2 id="tabla-heading">Comparativa completa de planes</h2>
      </div>
      <div style="overflow-x:auto;" class="fade-up">
        <table class="comparison" style="min-width:700px;">
          <thead>
            <tr>
              <th>Característica</th>
              <th>Starter</th>
              <th>Business</th>
              <th>Company</th>
              <th>Enterprise</th>
            </tr>
          </thead>
          <tbody>
            <tr><td colspan="5" style="font-size:0.8rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--text-muted);padding-top:1.25rem;">Capacidad</td></tr>
            <tr><td>Máximo de empleados</td><td>20</td><td>49</td><td>150</td><td class="check">Sin límite</td></tr>
            <tr><td>Empresas incluidas</td><td>1</td><td>1</td><td>1</td><td class="check">Multiempresa</td></tr>

            <tr><td colspan="5" style="font-size:0.8rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--text-muted);padding-top:1.25rem;">Canal público</td></tr>
            <tr><td>Canal anónimo con código de seguimiento</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>URL personalizada por empresa</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>Sin cookies en el canal público</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>Adjuntar documentos en la denuncia</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>Logo y colores corporativos</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>

            <tr><td colspan="5" style="font-size:0.8rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--text-muted);padding-top:1.25rem;">Cumplimiento legal</td></tr>
            <tr><td>Acuse de recibo automático en 7 días</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>Control de plazos de 3 meses</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>Alertas por plazo vencido</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>Registro de auditoría append-only</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>

            <tr><td colspan="5" style="font-size:0.8rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--text-muted);padding-top:1.25rem;">Gestión interna</td></tr>
            <tr><td>Panel de administración</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>Mensajería anónima cifrada</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>Etiquetado y categorización de casos</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>

            <tr><td colspan="5" style="font-size:0.8rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--text-muted);padding-top:1.25rem;">Seguridad y datos</td></tr>
            <tr><td>Cifrado AES-256 en tránsito y reposo</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>Datos alojados en la UE</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>Cumplimiento RGPD nativo</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>SSO / SAML</td><td class="cross">—</td><td class="cross">—</td><td class="cross">—</td><td class="check">✓</td></tr>
            <tr><td>API REST de integración</td><td class="cross">—</td><td class="cross">—</td><td class="cross">—</td><td class="check">✓</td></tr>

            <tr><td colspan="5" style="font-size:0.8rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--text-muted);padding-top:1.25rem;">Soporte</td></tr>
            <tr><td>Soporte por email</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
            <tr><td>SLA garantizado</td><td class="cross">—</td><td class="cross">—</td><td class="cross">—</td><td class="check">✓</td></tr>
            <tr><td>Onboarding y formación dedicada</td><td class="cross">—</td><td class="cross">—</td><td class="cross">—</td><td class="check">✓</td></tr>
            <tr><td>Gestor de cuenta asignado</td><td class="cross">—</td><td class="cross">—</td><td class="cross">—</td><td class="check">✓</td></tr>
          </tbody>
        </table>
      </div>
      <div style="text-align:center;margin-top:1.25rem;">
        <a href="/funcionalidades" style="font-size:0.9375rem;color:var(--accent);font-weight:600;text-decoration:none;">Ver las 48 funcionalidades →</a>
      </div>
    </div>
  </section>

  <!-- ¿POR QUÉ PRECIO FIJO? -->
  <section class="section" aria-labelledby="precio-fijo-heading">
    <div class="container" style="max-width:800px;">
      <div class="fade-up">
        <h2 id="precio-fijo-heading">¿Por qué precio fijo por empresa?</h2>
        <p style="margin-top:1rem;">La mayoría de plataformas cobra por usuario o por empleado. Eso significa que cuanto más grande es tu equipo, más pagas —aunque el canal de denuncias lo usen las mismas personas.</p>
        <p>En EticAlert creemos que el cumplimiento legal no debería costar más simplemente porque tienes más empleados. Tu empresa tiene una sola obligación: tener el canal operativo y gestionado correctamente.</p>
        <p>Por eso, un precio fijo por empresa. Sin coste adicional por número de usuarios, número de denuncias recibidas ni por idiomas activos. Lo que ves es lo que pagas.</p>
      </div>
    </div>
  </section>

  <!-- SERVICIOS LEGALES OPCIONALES -->
  <section class="section section-alt" aria-labelledby="servicios-heading">
    <div class="container" style="max-width:800px;">
      <div class="fade-up">
        <span class="overline">Servicios opcionales</span>
        <h2 id="servicios-heading">Instrucción de denuncias con despacho partner</h2>
        <p style="margin-top:1rem;">EticAlert es infraestructura técnica, no consultoría jurídica. Nos ocupamos de que tu canal esté activo, documentado y conforme a la ley.</p>
        <p>Si necesitas instruir una denuncia concreta —investigar los hechos, tomar declaraciones, emitir un informe de resolución— ofrecemos un servicio opcional con un <strong>despacho partner especializado en <a href="/blog/compliance-penal-canal-etico" style="color:var(--accent);">compliance laboral</a></strong>:</p>
        <ul style="margin-top:1rem;display:flex;flex-direction:column;gap:0.625rem;">
          <li style="display:flex;gap:0.75rem;align-items:flex-start;font-size:1rem;color:var(--text-secondary);"><span style="color:var(--accent);flex-shrink:0;">→</span>Instrucción básica de denuncia: desde <strong style="color:var(--text-primary);">150€/caso</strong></li>
          <li style="display:flex;gap:0.75rem;align-items:flex-start;font-size:1rem;color:var(--text-secondary);"><span style="color:var(--accent);flex-shrink:0;">→</span>Informe de resolución completo: desde <strong style="color:var(--text-primary);">350€/caso</strong></li>
          <li style="display:flex;gap:0.75rem;align-items:flex-start;font-size:1rem;color:var(--text-secondary);"><span style="color:var(--accent);flex-shrink:0;">→</span>Retainer mensual para empresas con volumen: precio a consultar</li>
        </ul>
        <p style="margin-top:1.25rem;">Estos servicios son completamente opcionales. La plataforma EticAlert funciona de forma autónoma para el día a día del canal.</p>
        <a href="mailto:info@eticalert.com" class="btn btn-secondary" style="margin-top:1.5rem;">Consultar servicios jurídicos →</a>
      </div>
    </div>
  </section>

  <!-- FAQ DE PRECIOS -->
  <section class="section" aria-labelledby="faq-precios-heading">
    <div class="container">
      <div class="section-header fade-up">
        <h2 id="faq-precios-heading">Preguntas sobre precios</h2>
      </div>
      <div class="faq-list fade-up">

        <div class="faq-item">
          <button class="faq-question">
            ¿Hay permanencia?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer"><p>No. Puedes cancelar cuando quieras, sin penalizaciones. El acceso se mantiene hasta el final del período facturado.</p></div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            ¿Puedo cambiar de plan?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer"><p>Sí. Puedes hacer upgrade o downgrade en cualquier momento desde tu panel de administración. Los cambios se aplican al siguiente ciclo de facturación.</p></div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            ¿Qué métodos de pago aceptáis?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer"><p>Tarjeta de crédito/débito y domiciliación bancaria SEPA, gestionados de forma segura a través de Stripe. No almacenamos datos de tarjeta en nuestros servidores.</p></div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            ¿Hay descuento para asesorías que gestionen varios clientes?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer"><p>Sí. Tenemos un programa de partners para <a href="/blog/canal-denuncias-asesorias-despachos" style="color:var(--accent);">asesorías laborales, despachos y consultoras</a> que gestionan el canal de denuncias de varios clientes. Contacta con nosotros en <a href="mailto:info@eticalert.com" style="color:var(--accent);">info@eticalert.com</a> para conocer las condiciones.</p></div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            ¿Los precios incluyen IVA?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer"><p>No. Los precios mostrados no incluyen IVA (21%). El IVA se añadirá en la factura conforme a la normativa fiscal aplicable.</p></div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="cta-final">
    <div class="container">
      <div class="fade-up">
        <h2>Sin excusas. Canal operativo en 5 minutos.</h2>
        <p>Prueba 15 días gratis. Sin permanencia. Sin llamadas.</p>
        <a href="/registro" class="btn btn-primary btn-lg">Crear mi canal →</a>
      </div>
    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Hay permanencia en los planes de EticAlert?",
      "acceptedAnswer": {"@type": "Answer", "text": "No. Puedes cancelar cuando quieras, sin penalizaciones. El acceso se mantiene hasta el final del período facturado."}
    },
    {
      "@type": "Question",
      "name": "¿Puedo cambiar de plan en EticAlert?",
      "acceptedAnswer": {"@type": "Answer", "text": "Sí. Puedes hacer upgrade o downgrade en cualquier momento desde tu panel de administración. Los cambios se aplican al siguiente ciclo de facturación."}
    },
    {
      "@type": "Question",
      "name": "¿Qué métodos de pago acepta EticAlert?",
      "acceptedAnswer": {"@type": "Answer", "text": "Tarjeta de crédito/débito y domiciliación bancaria SEPA, gestionados de forma segura a través de Stripe. EticAlert no almacena datos de tarjeta en sus servidores."}
    },
    {
      "@type": "Question",
      "name": "¿Hay descuento para asesorías que gestionen varios clientes con EticAlert?",
      "acceptedAnswer": {"@type": "Answer", "text": "Sí. EticAlert tiene un programa de partners para asesorías laborales, despachos y consultoras que gestionan el canal de denuncias de varios clientes. Contacta en info@eticalert.com para conocer las condiciones."}
    },
    {
      "@type": "Question",
      "name": "¿Los precios de EticAlert incluyen IVA?",
      "acceptedAnswer": {"@type": "Answer", "text": "No. Los precios mostrados no incluyen IVA (21%). El IVA se añadirá en la factura conforme a la normativa fiscal aplicable."}
    }
  ]
}
</script>

<?php include 'includes/footer.php'; ?>
