<?php
require_once 'config.php';
$empresa_param = trim(htmlspecialchars($_GET['utm_content'] ?? '', ENT_QUOTES, 'UTF-8'));
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Canal de Denuncias para Empresas — Actívalo en 5 min | EticAlert</title>
  <meta name="description" content="Canal de denuncias homologado, seguro y fácil de implantar. Cumple la Ley 2/2023 desde 9€/mes. Sin contratos ni integraciones. Actívalo en 5 minutos.">
  <meta name="robots" content="noindex, nofollow">
  <link rel="canonical" href="https://eticalert.com/empezar">
  <link rel="stylesheet" href="/css/styles.css">
  <!-- Consent Mode v2 -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('consent', 'default', {
      'analytics_storage':'denied','ad_storage':'denied',
      'ad_user_data':'denied','ad_personalization':'denied','wait_for_update':500
    });
    (function(){
      var c = localStorage.getItem('eticalert_cookies_accepted');
      if (c === 'all') gtag('consent','update',{'analytics_storage':'granted','ad_storage':'granted','ad_user_data':'granted','ad_personalization':'granted'});
    })();
  </script>
  <!-- GA4 -->
  <script>
    window.addEventListener('load', function() {
      var s = document.createElement('script');
      s.async = true;
      s.src = 'https://www.googletagmanager.com/gtag/js?id=G-X2J4XCG9WY';
      document.head.appendChild(s);
      s.onload = function() {
        gtag('js', new Date());
        gtag('config', 'G-X2J4XCG9WY', { 'content_group': 'landing-ads' });
      };
    });
  </script>
</head>
<body>

<!-- ============================================================
     NAV MÍNIMO — sin menú, sin distracciones
     ============================================================ -->
<header style="position:sticky; top:0; z-index:100; background:var(--bg-primary); border-bottom:1px solid var(--border); padding:0.875rem 0;">
  <div class="container" style="display:flex; align-items:center; justify-content:space-between;">
    <a href="/" aria-label="EticAlert — inicio" style="display:flex; align-items:center; gap:0.5rem; text-decoration:none;">
      <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" width="28" height="28" aria-hidden="true">
        <rect width="28" height="28" rx="7" fill="#141F19"/>
        <path d="M7 14C7 10.134 10.134 7 14 7C17.866 7 21 10.134 21 14C21 17.866 17.866 21 14 21" stroke="#4ADE80" stroke-width="2" stroke-linecap="round"/>
        <path d="M14 21C12.343 21 11 19.657 11 18C11 16.343 12.343 15 14 15C15.657 15 17 16.343 17 18" stroke="#4ADE80" stroke-width="2" stroke-linecap="round"/>
        <circle cx="14" cy="14" r="1.5" fill="#4ADE80"/>
      </svg>
      <span style="font-size:1.125rem; font-weight:700; color:var(--text-primary);">Etic<span style="color:var(--accent);">Alert</span></span>
    </a>
    <a href="<?= APP_LOGIN_URL ?>" target="_blank" rel="noopener" class="btn btn-secondary" style="font-size:0.875rem; padding:0.5rem 1rem;">Ya soy cliente → Acceder</a>
  </div>
</header>

<main id="main-content">

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section style="padding:80px 0 64px; text-align:center;">
    <div class="container" style="max-width:720px;">
      <div class="fade-up">
        <span style="display:inline-block; background:rgba(74,222,128,0.12); color:var(--accent); font-size:0.8rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; padding:0.35rem 0.9rem; border-radius:99px; margin-bottom:1.25rem;">Para RRHH, Legal y Compliance · Ley 2/2023</span>
        <h1 style="font-size:clamp(2rem,5vw,3rem); line-height:1.15; margin-bottom:1.25rem;">
          El canal de denuncias que tu equipo<br>implanta solo, en 5 minutos.
        </h1>
        <p style="font-size:1.125rem; color:var(--text-secondary); margin-bottom:0.75rem; max-width:560px; margin-left:auto; margin-right:auto;">
          Sin proyecto de IT. Sin consultores. Sin contratos anuales. Desde <strong style="color:var(--text-primary);">9€/mes</strong>.
        </p>
        <p style="font-size:0.95rem; color:var(--text-muted); margin-bottom:2rem; max-width:480px; margin-left:auto; margin-right:auto;">
          Listo para presentar a dirección el mismo día que lo activas.
        </p>
        <a href="/registro" class="btn btn-primary btn-lg">Activar mi canal →</a>
        <p style="font-size:0.8rem; color:var(--text-muted); margin-top:0.75rem;">15 días de prueba gratuita · Cancela cuando quieras</p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       4 BENEFICIOS CLAVE
       ============================================================ -->
  <section style="padding:48px 0; background:var(--bg-secondary); border-top:1px solid var(--border); border-bottom:1px solid var(--border);">
    <div class="container">
      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:1.5rem;">

        <div style="display:flex; gap:1rem; align-items:flex-start;">
          <div style="flex-shrink:0; width:40px; height:40px; border-radius:10px; background:rgba(74,222,128,0.12); display:flex; align-items:center; justify-content:center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div>
            <p style="font-weight:700; color:var(--text-primary); margin-bottom:0.25rem;">Cumplimiento 100% Ley 2/2023</p>
            <p style="font-size:0.875rem; color:var(--text-secondary);">RSII, AIPI, plazos de 3 meses y registro de auditoría incluidos en todos los planes.</p>
          </div>
        </div>

        <div style="display:flex; gap:1rem; align-items:flex-start;">
          <div style="flex-shrink:0; width:40px; height:40px; border-radius:10px; background:rgba(74,222,128,0.12); display:flex; align-items:center; justify-content:center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div>
            <p style="font-weight:700; color:var(--text-primary); margin-bottom:0.25rem;">Cifrado AES-256 de extremo a extremo</p>
            <p style="font-size:0.875rem; color:var(--text-secondary);">Mensajes cifrados en tránsito y en reposo. Datos alojados en la UE. RGPD cumplido.</p>
          </div>
        </div>

        <div style="display:flex; gap:1rem; align-items:flex-start;">
          <div style="flex-shrink:0; width:40px; height:40px; border-radius:10px; background:rgba(74,222,128,0.12); display:flex; align-items:center; justify-content:center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <div>
            <p style="font-weight:700; color:var(--text-primary); margin-bottom:0.25rem;">Canal operativo en 5 minutos</p>
            <p style="font-size:0.875rem; color:var(--text-secondary);">Wizard guiado: logo, categorías y RSII. Sin integración técnica ni consultor externo.</p>
          </div>
        </div>

        <div style="display:flex; gap:1rem; align-items:flex-start;">
          <div style="flex-shrink:0; width:40px; height:40px; border-radius:10px; background:rgba(74,222,128,0.12); display:flex; align-items:center; justify-content:center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          </div>
          <div>
            <p style="font-weight:700; color:var(--text-primary); margin-bottom:0.25rem;">Precio fijo por empresa</p>
            <p style="font-size:0.875rem; color:var(--text-secondary);">Sin coste por usuario ni por denuncia. Lo que ves es lo que pagas — 14x más barato que las suites de RRHH.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       RIESGO / MULTAS — ¿Qué pasa si no cumplo?
       ============================================================ -->
  <section style="padding:56px 0; background:rgba(239,68,68,0.04); border-top:1px solid rgba(239,68,68,0.15); border-bottom:1px solid rgba(239,68,68,0.15);">
    <div class="container" style="max-width:820px;">
      <div style="text-align:center; margin-bottom:2rem;">
        <span style="display:inline-block; background:rgba(239,68,68,0.1); color:#f87171; font-size:0.8rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; padding:0.35rem 0.9rem; border-radius:99px; margin-bottom:1rem;">⚠ El plazo ya venció — la AIPI está operativa</span>
        <h2 style="font-size:clamp(1.5rem,3vw,2rem); margin-bottom:0.5rem;">¿Qué pasa si tu empresa no tiene el canal?</h2>
        <p style="color:var(--text-secondary); max-width:560px; margin:0 auto;">La Autoridad Independiente de Protección del Informante (AIPI) ya puede inspeccionar y sancionar. El plazo para empresas con más de 50 empleados venció en junio de 2023.</p>
      </div>
      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:1.25rem;">

        <div style="background:var(--bg-secondary); border:1px solid rgba(239,68,68,0.2); border-radius:14px; padding:1.5rem; text-align:center;">
          <p style="font-size:2rem; font-weight:800; color:#f87171; margin-bottom:0.25rem;">1.000.000€</p>
          <p style="font-weight:700; color:var(--text-primary); margin-bottom:0.35rem;">Multa máxima a la empresa</p>
          <p style="font-size:0.85rem; color:var(--text-secondary);">Por infracción muy grave según la Ley 2/2023, art. 64.</p>
        </div>

        <div style="background:var(--bg-secondary); border:1px solid rgba(239,68,68,0.2); border-radius:14px; padding:1.5rem; text-align:center;">
          <p style="font-size:2rem; font-weight:800; color:#f87171; margin-bottom:0.25rem;">300.000€</p>
          <p style="font-weight:700; color:var(--text-primary); margin-bottom:0.35rem;">Multa al responsable</p>
          <p style="font-size:0.85rem; color:var(--text-secondary);">La sanción puede recaer directamente sobre el directivo o responsable de RRHH.</p>
        </div>

        <div style="background:var(--bg-secondary); border:1px solid rgba(239,68,68,0.2); border-radius:14px; padding:1.5rem; text-align:center;">
          <p style="font-size:2rem; font-weight:800; color:#f87171; margin-bottom:0.25rem;">5 min</p>
          <p style="font-weight:700; color:var(--text-primary); margin-bottom:0.35rem;">Para estar cubierto hoy</p>
          <p style="font-size:0.85rem; color:var(--text-secondary);">Con EticAlert tienes el canal activo y el RSII notificado antes de terminar el café.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       TESTIMONIOS
       ============================================================ -->
  <section style="padding:64px 0;">
    <div class="container">
      <h2 style="text-align:center; margin-bottom:0.5rem;">Lo que dicen RRHH, Legal y Dirección</h2>
      <p style="text-align:center; color:var(--text-secondary); margin-bottom:2.5rem;">Responsables que ya tienen el canal activo y la ley cubierta.</p>
      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:1.25rem;">

        <div style="background:var(--bg-secondary); border:1px solid var(--border); border-radius:16px; padding:1.5rem; display:flex; flex-direction:column; gap:1rem;">
          <svg width="24" height="17" viewBox="0 0 28 20" fill="var(--accent)" opacity="0.4" aria-hidden="true"><path d="M0 20V12.727C0 5.455 4.667 1.212 14 0l1.867 2.909C11.2 4.03 8.756 6.333 8.4 10h5.6V20H0zm14 0V12.727C14 5.455 18.667 1.212 28 0l1.867 2.909C25.2 4.03 22.756 6.333 22.4 10H28V20H14z"/></svg>
          <p style="font-size:0.9375rem; color:var(--text-primary); line-height:1.6; flex:1;">"Teníamos la obligación legal pero no sabíamos por dónde empezar. Sin involucrar a IT, en 5 minutos teníamos el canal activo y el RSII notificado. Lo activé yo mismo desde RRHH. Muy recomendable."</p>
          <div style="display:flex; align-items:center; gap:0.75rem;">
            <div style="width:36px; height:36px; border-radius:50%; background:rgba(74,222,128,0.15); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.85rem; color:var(--accent); flex-shrink:0;">CR</div>
            <div style="flex:1;">
              <p style="font-weight:700; font-size:0.85rem; color:var(--text-primary); margin-bottom:0.1rem;">Carlos Rubio</p>
              <p style="font-size:0.75rem; color:var(--text-muted);">CEO · Siempre Energía</p>
            </div>
            <img src="https://siempreenergia.com/wp-content/uploads/thegem-logos/logo_74adbe5fccad397a94f1797e320d67bc_1x.png" alt="Siempre Energía" loading="lazy" style="height:24px; width:auto; object-fit:contain; opacity:0.7; filter:grayscale(1);">
          </div>
        </div>

        <div style="background:var(--bg-secondary); border:1px solid var(--border); border-radius:16px; padding:1.5rem; display:flex; flex-direction:column; gap:1rem;">
          <svg width="24" height="17" viewBox="0 0 28 20" fill="var(--accent)" opacity="0.4" aria-hidden="true"><path d="M0 20V12.727C0 5.455 4.667 1.212 14 0l1.867 2.909C11.2 4.03 8.756 6.333 8.4 10h5.6V20H0zm14 0V12.727C14 5.455 18.667 1.212 28 0l1.867 2.909C25.2 4.03 22.756 6.333 22.4 10H28V20H14z"/></svg>
          <p style="font-size:0.9375rem; color:var(--text-primary); line-height:1.6; flex:1;">"Llevábamos meses buscando una solución que cumpliera la ley sin convertirse en un proyecto de implementación. EticAlert lo teníamos operativo en una tarde. Limpio, bien construido y sin sorpresas en el precio."</p>
          <div style="display:flex; align-items:center; gap:0.75rem;">
            <div style="width:36px; height:36px; border-radius:50%; background:rgba(74,222,128,0.15); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.85rem; color:var(--accent); flex-shrink:0;">AF</div>
            <div style="flex:1;">
              <p style="font-weight:700; font-size:0.85rem; color:var(--text-primary); margin-bottom:0.1rem;">Agustín Fontecha</p>
              <p style="font-size:0.75rem; color:var(--text-muted);">Co-founder · Flutic</p>
            </div>
            <img src="https://cdn.prod.website-files.com/61f3a6add7423fda50f35248/68f4271583f453d8faf645aa_PNG%20image.png" alt="Flutic" loading="lazy" style="height:20px; width:auto; object-fit:contain; opacity:0.7; filter:grayscale(1);">
          </div>
        </div>

        <div style="background:var(--bg-secondary); border:1px solid var(--border); border-radius:16px; padding:1.5rem; display:flex; flex-direction:column; gap:1rem;">
          <svg width="24" height="17" viewBox="0 0 28 20" fill="var(--accent)" opacity="0.4" aria-hidden="true"><path d="M0 20V12.727C0 5.455 4.667 1.212 14 0l1.867 2.909C11.2 4.03 8.756 6.333 8.4 10h5.6V20H0zm14 0V12.727C14 5.455 18.667 1.212 28 0l1.867 2.909C25.2 4.03 22.756 6.333 22.4 10H28V20H14z"/></svg>
          <p style="font-size:0.9375rem; color:var(--text-primary); line-height:1.6; flex:1;">"En una empresa de selección de talento la confidencialidad es crítica. EticAlert nos da canal anónimo real con cifrado AES-256 y cumplimiento total, por una fracción de lo que cobran las soluciones enterprise."</p>
          <div style="display:flex; align-items:center; gap:0.75rem;">
            <div style="width:36px; height:36px; border-radius:50%; background:rgba(74,222,128,0.15); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.85rem; color:var(--accent); flex-shrink:0;">JC</div>
            <div style="flex:1;">
              <p style="font-weight:700; font-size:0.85rem; color:var(--text-primary); margin-bottom:0.1rem;">Javier Cadierno</p>
              <p style="font-size:0.75rem; color:var(--text-muted);">Co-founder · Tadatic</p>
            </div>
            <img src="https://tadatic.com/favicon.ico" alt="Tadatic" loading="lazy" style="height:28px; width:28px; object-fit:contain; opacity:0.7; filter:grayscale(1); border-radius:5px;">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       PRECIOS SIMPLIFICADOS
       ============================================================ -->
  <section style="padding:72px 0;">
    <div class="container">
      <div class="section-header fade-up">
        <h2>Elige tu plan</h2>
        <p style="color:var(--text-secondary);">Todos los planes incluyen funcionalidad completa. Solo cambia el número de empleados.</p>
      </div>

      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1.25rem; max-width:860px; margin:0 auto;" class="fade-up">

        <!-- Starter -->
        <div style="border:1px solid var(--border); border-radius:16px; padding:1.75rem; background:var(--bg-secondary);">
          <p style="font-weight:700; font-size:1.125rem; margin-bottom:0.25rem;">Starter</p>
          <p style="font-size:0.875rem; color:var(--text-muted); margin-bottom:1.25rem;">Hasta 20 empleados</p>
          <p style="font-size:2.5rem; font-weight:800; color:var(--text-primary); margin-bottom:1.5rem;">9€<span style="font-size:1rem; font-weight:400; color:var(--text-muted);">/mes</span></p>
          <a href="/registro" class="btn btn-secondary" style="width:100%; text-align:center; display:block;">Activar Starter →</a>
          <p style="font-size:0.75rem; color:var(--text-muted); text-align:center; margin-top:0.5rem;">81€/año · Sin permanencia</p>
        </div>

        <!-- Business -->
        <div style="border:1px solid var(--border); border-radius:16px; padding:1.75rem; background:var(--bg-secondary);">
          <p style="font-weight:700; font-size:1.125rem; margin-bottom:0.25rem;">Business</p>
          <p style="font-size:0.875rem; color:var(--text-muted); margin-bottom:1.25rem;">De 21 a 49 empleados</p>
          <p style="font-size:2.5rem; font-weight:800; color:var(--text-primary); margin-bottom:1.5rem;">19€<span style="font-size:1rem; font-weight:400; color:var(--text-muted);">/mes</span></p>
          <a href="/registro" class="btn btn-secondary" style="width:100%; text-align:center; display:block;">Empezar →</a>
          <p style="font-size:0.75rem; color:var(--text-muted); text-align:center; margin-top:0.5rem;">190€/año · Sin permanencia</p>
        </div>

        <!-- Company -->
        <div style="border:2px solid var(--accent); border-radius:16px; padding:1.75rem; background:var(--bg-secondary); position:relative;">
          <span style="position:absolute; top:-13px; left:50%; transform:translateX(-50%); background:var(--accent); color:#0a0f0b; font-size:0.7rem; font-weight:700; padding:0.25rem 0.75rem; border-radius:99px; white-space:nowrap;">MÁS POPULAR</span>
          <p style="font-weight:700; font-size:1.125rem; margin-bottom:0.25rem;">Company</p>
          <p style="font-size:0.875rem; color:var(--text-muted); margin-bottom:1.25rem;">De 50 a 150 empleados</p>
          <p style="font-size:2.5rem; font-weight:800; color:var(--text-primary); margin-bottom:1.5rem;">39€<span style="font-size:1rem; font-weight:400; color:var(--text-muted);">/mes</span></p>
          <a href="/registro" class="btn btn-primary" style="width:100%; text-align:center; display:block;">Activar mi canal →</a>
          <p style="font-size:0.75rem; color:var(--text-muted); text-align:center; margin-top:0.5rem;">390€/año · Sin permanencia</p>
        </div>

      </div>

      <p style="text-align:center; margin-top:1.5rem; font-size:0.875rem; color:var(--text-muted);">
        +150 empleados → <a href="mailto:info@eticalert.com" style="color:var(--accent);">Contáctanos para Enterprise</a> · Precios sin IVA
      </p>
    </div>
  </section>

  <!-- ============================================================
       CREDENCIALES / TRUST
       ============================================================ -->
  <section style="padding:48px 0; background:var(--bg-secondary); border-top:1px solid var(--border); border-bottom:1px solid var(--border);">
    <div class="container">
      <p style="text-align:center; font-size:0.75rem; text-transform:uppercase; letter-spacing:0.1em; color:var(--text-muted); margin-bottom:1.5rem;">Tecnología y cumplimiento en los que confiar</p>
      <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; align-items:center;">
        <span style="display:flex; align-items:center; gap:0.5rem; font-size:0.875rem; font-weight:600; color:var(--text-secondary);"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Cifrado AES-256</span>
        <span style="display:flex; align-items:center; gap:0.5rem; font-size:0.875rem; font-weight:600; color:var(--text-secondary);"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg> RGPD cumplido</span>
        <span style="display:flex; align-items:center; gap:0.5rem; font-size:0.875rem; font-weight:600; color:var(--text-secondary);"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg> Datos en la UE</span>
        <span style="display:flex; align-items:center; gap:0.5rem; font-size:0.875rem; font-weight:600; color:var(--text-secondary);"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Adaptado Ley 2/2023 + AIPI</span>
        <span style="display:flex; align-items:center; gap:0.5rem; font-size:0.875rem; font-weight:600; color:var(--text-secondary);"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg> Pagos seguros vía Stripe</span>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FAQ RÁPIDO
       ============================================================ -->
  <section style="padding:64px 0;">
    <div class="container" style="max-width:640px;">
      <h2 style="text-align:center; margin-bottom:2rem;">Preguntas frecuentes</h2>

      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">¿Necesito involucrar a IT o a un consultor externo?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer"><p>No. EticAlert se configura desde el navegador sin ningún conocimiento técnico. El responsable de RRHH o Legal lo activa solo: logo, categorías y RSII en un wizard guiado de 5 minutos. Cero dependencia de IT, cero consultores, cero proyecto interno.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">¿Cuánto tiempo tarda en estar operativo?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer"><p>5 minutos. Tras registrarte recibes acceso inmediato. El wizard de configuración te guía paso a paso: logo, categorías, RSII. Canal publicado y ley cumplida.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">¿Hay permanencia o contrato mínimo?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer"><p>No. Cancela cuando quieras desde tu panel, sin penalizaciones. El acceso se mantiene hasta el final del período facturado.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">¿Qué pasa si crezco y supero el límite de empleados?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer"><p>Puedes hacer upgrade al plan superior en cualquier momento desde tu panel de administración. El cambio se aplica al siguiente ciclo de facturación.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question">¿Puedo probar EticAlert antes de pagar?
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </button>
          <div class="faq-answer"><p>Sí. Todos los planes incluyen 15 días de prueba gratuita con funcionalidad completa. No necesitas tarjeta de crédito para empezar.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CTA FINAL
       ============================================================ -->
  <section class="cta-final">
    <div class="container">
      <div class="fade-up">
        <h2>Sin excusas. Canal operativo en 5 minutos.</h2>
        <p>15 días de prueba gratuita. Sin permanencia. Sin llamadas.</p>
        <a href="/registro" class="btn btn-primary btn-lg">Crear mi canal →</a>
      </div>
    </div>
  </section>

</main>

<!-- Footer mínimo -->
<footer style="padding:1.5rem 0; border-top:1px solid var(--border); text-align:center;">
  <div class="container">
    <p style="font-size:0.8rem; color:var(--text-muted);">
      © <?= date('Y') ?> EticAlert ·
      <a href="/privacidad" style="color:var(--text-muted);">Privacidad</a> ·
      <a href="/legal" style="color:var(--text-muted);">Legal</a> ·
      <a href="/precios" style="color:var(--text-muted);">Ver todos los planes</a>
    </p>
  </div>
</footer>

<script src="/js/main.js" defer></script>
</body>
</html>
