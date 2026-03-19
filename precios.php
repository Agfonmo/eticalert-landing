<?php
$page_title       = 'Precios del canal de denuncias | EticAlert — Gratis hasta 20 empleados';
$page_description = 'Precio transparente sin sorpresas. Canal de denuncias gratis hasta 20 empleados. Planes desde 19€/mes. Compara planes y activa el tuyo hoy.';
$page_canonical   = 'https://eticalert.com/precios';
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
  "offers": [
    {"@type":"Offer","name":"Free","price":"0","priceCurrency":"EUR","description":"Hasta 20 empleados. Sin tarjeta de crédito."},
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
        <span class="overline">Precios</span>
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

        <!-- Free -->
        <div class="pricing-card fade-up">
          <div class="pricing-header">
            <div class="plan-name">Free</div>
            <div class="plan-subtitle">Hasta 20 empleados</div>
          </div>
          <div class="pricing-price" data-price-monthly>
            <span class="price-amount">0€</span>
            <span class="price-period">/mes</span>
          </div>
          <div class="pricing-price" data-price-annual style="display:none;">
            <span class="price-amount">0€</span>
            <span class="price-period">/año</span>
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
          <div class="pricing-price" data-price-monthly>
            <span class="price-amount">19€</span>
            <span class="price-period">/mes</span>
          </div>
          <div class="pricing-price" data-price-annual style="display:none;">
            <span class="price-amount">190€</span>
            <span class="price-period">/año · 2 meses gratis</span>
          </div>
          <ul class="pricing-features">
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Todo lo incluido en Free</span></li>
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
            <li class="pricing-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg><span>Cumplimiento Ley 2/2023 ✓</span></li>
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
              <th>Free</th>
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
        <p>Si necesitas instruir una denuncia concreta —investigar los hechos, tomar declaraciones, emitir un informe de resolución— ofrecemos un servicio opcional con un <strong>despacho partner especializado en compliance laboral</strong>:</p>
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
          <div class="faq-answer"><p>Sí. Tenemos un programa de partners para asesorías laborales, despachos y consultoras que gestionan el canal de denuncias de varios clientes. Contacta con nosotros en <a href="mailto:info@eticalert.com" style="color:var(--accent);">info@eticalert.com</a> para conocer las condiciones.</p></div>
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
        <p>Empieza gratis hoy. Sin tarjeta de crédito. Sin permanencia. Sin llamadas.</p>
        <a href="/registro" class="btn btn-primary btn-lg">Crear mi canal →</a>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
