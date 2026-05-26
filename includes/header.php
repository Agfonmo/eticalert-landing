<?php
if (!defined('APP_LOGIN_URL')) require_once __DIR__ . '/../config.php';

// Bloquear indexación en staging
if (APP_ENV === 'staging') {
  header('X-Robots-Tag: noindex, nofollow', true);
}
/**
 * EticAlert — includes/header.php
 * Variables esperadas (opcionales, definidas en cada página):
 *   $page_title              — <title> completo
 *   $page_description        — meta description
 *   $page_canonical          — URL canónica
 *   $page_og_title           — OG title (fallback: $page_title)
 *   $page_og_type            — OG type: 'website' (default) | 'article'
 *   $page_og_image_alt       — Alt text de la OG image
 *   $page_article_published  — ISO 8601 (solo si og_type='article')
 *   $page_article_modified   — ISO 8601 (solo si og_type='article')
 *   $page_body_class         — clase extra en <body>
 */
$page_title              = $page_title ?? 'Canal de denuncias para empresas | EticAlert — Cumple la Ley 2/2023';
$page_description        = $page_description ?? 'Activa tu canal de denuncias en minutos. EticAlert es la plataforma para pymes: segura, conforme a la Ley 2/2023, desde 9€/mes. Sin llamadas, sin complicaciones.';
$page_canonical          = $page_canonical ?? 'https://eticalert.com/';
$page_og_title           = $page_og_title ?? $page_title;
$page_og_type            = $page_og_type ?? 'website';
$page_og_image_alt       = $page_og_image_alt ?? 'EticAlert — Canal de denuncias para pymes';
$page_article_published  = $page_article_published ?? null;
$page_article_modified   = $page_article_modified ?? null;
$page_body_class         = $page_body_class ?? '';
$_og_t                   = rawurlencode($page_og_title ?? $page_title);
$page_og_image           = $page_og_image ?? 'https://eticalert.com/img/og-image.php?t=' . $_og_t;

// Auto-detección de content_group para GA4 (sobreescribible por cada página)
if (!isset($page_content_group)) {
  $uri = $_SERVER['REQUEST_URI'] ?? '';
  if (strpos($uri, '/blog/') !== false) {
    if (preg_match('#/blog/(alternativa-|precio-)#', $uri)) {
      $page_content_group = 'comparativa';
    } elseif (preg_match('#/blog/(ley-2-2023|proteccion-informante)#', $uri)) {
      $page_content_group = 'marco-legal';
    } elseif (preg_match('#/blog/(rsii-|canal-denuncias-externo|aipi-)#', $uri)) {
      $page_content_group = 'guia';
    } elseif (strpos($uri, '/blog/canal-denuncias-') !== false) {
      $page_content_group = 'sectores';
    } else {
      $page_content_group = 'guia'; // blog index u otros artículos
    }
  } else {
    $page_content_group = '';
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <!-- Consent Mode v2 — debe ir ANTES del script de GA4 -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    // Defaults denegados para EEA (España incluida)
    gtag('consent', 'default', {
      'analytics_storage':  'denied',
      'ad_storage':         'denied',
      'ad_user_data':       'denied',
      'ad_personalization': 'denied',
      'wait_for_update':    500
    });
    // Restaurar elección previa del usuario si ya la tomó
    (function(){
      var choice = localStorage.getItem('eticalert_cookies_accepted');
      if (choice === 'all') {
        gtag('consent', 'update', {
          'analytics_storage':  'granted',
          'ad_storage':         'granted',
          'ad_user_data':       'granted',
          'ad_personalization': 'granted'
        });
      }
    })();
  </script>
  <!-- Google Analytics — carga diferida post-LCP para no bloquear el render -->
  <script>
    window.addEventListener('load', function() {
      var s = document.createElement('script');
      s.async = true;
      s.src = 'https://www.googletagmanager.com/gtag/js?id=G-X2J4XCG9WY';
      document.head.appendChild(s);
      s.onload = function() {
        gtag('js', new Date());
        gtag('config', 'G-X2J4XCG9WY'<?php if (!empty($page_content_group)): ?>, {
          'content_group': '<?= htmlspecialchars($page_content_group) ?>'
        }<?php endif; ?>);
      };
    });
  </script>
  <link rel="canonical" href="<?= htmlspecialchars($page_canonical) ?>">
  <link rel="alternate" hreflang="es-ES"  href="<?= htmlspecialchars($page_canonical) ?>">
  <link rel="alternate" hreflang="x-default" href="<?= htmlspecialchars($page_canonical) ?>">
  <?php if (APP_ENV === 'staging' || !empty($page_robots)): ?>
  <meta name="robots" content="<?= APP_ENV === 'staging' ? 'noindex, nofollow' : htmlspecialchars($page_robots) ?>">
  <?php endif; ?>

  <!-- Open Graph -->
  <meta property="og:title"       content="<?= htmlspecialchars($page_og_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta property="og:url"         content="<?= htmlspecialchars($page_canonical) ?>">
  <meta property="og:image"        content="<?= htmlspecialchars($page_og_image) ?>">
  <meta property="og:image:width"  content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt"   content="<?= htmlspecialchars($page_og_image_alt) ?>">
  <meta property="og:type"        content="<?= htmlspecialchars($page_og_type) ?>">
  <meta property="og:locale"      content="es_ES">
  <meta property="og:site_name"   content="EticAlert">
  <?php if ($page_og_type === 'article'): ?>
  <?php if ($page_article_published): ?><meta property="article:published_time" content="<?= htmlspecialchars($page_article_published) ?>"><?php endif; ?>
  <?php if ($page_article_modified): ?><meta property="article:modified_time"  content="<?= htmlspecialchars($page_article_modified) ?>"><?php endif; ?>
  <meta property="article:author"         content="https://eticalert.com">
  <meta property="article:publisher"      content="https://eticalert.com">
  <?php endif; ?>

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?= htmlspecialchars($page_og_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta name="twitter:image"       content="<?= htmlspecialchars($page_og_image) ?>">
  <meta name="twitter:image:alt"   content="<?= htmlspecialchars($page_og_image_alt) ?>">

  <!-- Geotargeting España -->
  <meta name="geo.region" content="ES">
  <meta name="geo.placename" content="España">
  <meta name="ICBM" content="40.416775, -3.703790">

  <!-- Favicon -->
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">

  <!-- Preconnect: Google Fonts + app subdomain -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://app.eticalert.com">
  <!-- Preload critical font files for LCP (hero heading) — subset Latin, stable URLs by font version -->
  <link rel="preload" as="font" type="font/woff2" crossorigin fetchpriority="high" href="https://fonts.gstatic.com/s/instrumentsans/v4/pximypc9vsFDm051Uf6KVwgkfoSxQ0GsQv8ToedPibnr-yp2JGEJOH9npSQi_jfykywN2u7ZWwU.woff2">
  <link rel="preload" as="font" type="font/woff2" crossorigin fetchpriority="high" href="https://fonts.gstatic.com/s/inter/v20/UcCO3FwrK3iLTeHuS_nVMrMxCp50SjIw2boKoduKmMEVuFuYAZ9hiJ-Ek-_EeA.woff2">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet"></noscript>

  <!-- Stylesheet — carga no bloqueante para mejorar FCP/LCP -->
  <link rel="preload" href="/css/styles.css?v=20260521b" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="/css/styles.css?v=20260521b"></noscript>

  <!-- Anti-flash: aplica el tema ANTES de que se pinte la página -->
  <script>
    (function(){
      var saved = localStorage.getItem('theme');
      if (saved === 'light' || saved === 'dark') {
        document.documentElement.setAttribute('data-theme', saved);
      } else if (window.matchMedia('(prefers-color-scheme: light)').matches) {
        document.documentElement.setAttribute('data-theme', 'light');
      } else {
        document.documentElement.setAttribute('data-theme', 'dark');
      }
    })();
  </script>

  <!-- Schema: Organization (global) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "EticAlert",
    "url": "https://eticalert.com",
    "logo": "https://eticalert.com/favicon.svg",
    "areaServed": {"@type": "Country", "name": "ES"},
    "contactPoint": {
      "@type": "ContactPoint",
      "email": "info@eticalert.com",
      "contactType": "customer service",
      "availableLanguage": "Spanish"
    },
    "sameAs": []
  }
  </script>
</head>
<body class="<?= htmlspecialchars($page_body_class) ?>">

<!-- ============================================================
     VERIFY BANNER
     ============================================================ -->
<div class="verify-banner" id="verify-banner" role="complementary" aria-label="Verificador de documentos" style="background-color:#1A2B23!important;">
  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
  <span>Verifica la integridad de cualquier denuncia con su hash SHA-256 →</span>
  <a href="https://app.eticalert.com/verificar" target="_blank" rel="noopener">Ir al verificador</a>
  <button class="verify-banner-close" onclick="dismissVerifyBanner()" aria-label="Cerrar aviso">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>
</div>
<script>
(function(){
  if(localStorage.getItem('vbDismissed')){
    document.getElementById('verify-banner').style.display='none';
  } else {
    document.body.classList.add('has-verify-banner');
  }
})();
function dismissVerifyBanner(){
  localStorage.setItem('vbDismissed','1');
  document.getElementById('verify-banner').style.display='none';
  document.body.classList.remove('has-verify-banner');
}
</script>

<!-- ============================================================
     HEADER / NAV
     ============================================================ -->
<header class="site-header" role="banner">
  <div class="container">
    <nav class="nav-inner" aria-label="Navegación principal">

      <!-- Logo -->
      <a href="/" class="nav-logo" aria-label="EticAlert — inicio">
        <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <rect width="28" height="28" rx="7" fill="#141F19"/>
          <path d="M7 14C7 10.134 10.134 7 14 7C17.866 7 21 10.134 21 14C21 17.866 17.866 21 14 21" stroke="#4ADE80" stroke-width="2" stroke-linecap="round"/>
          <path d="M14 21C12.343 21 11 19.657 11 18C11 16.343 12.343 15 14 15C15.657 15 17 16.343 17 18" stroke="#4ADE80" stroke-width="2" stroke-linecap="round"/>
          <circle cx="14" cy="14" r="1.5" fill="#4ADE80"/>
        </svg>
        <span class="nav-logo-text">Etic<span>Alert</span></span>
      </a>

      <!-- Desktop links -->
      <ul class="nav-links" role="list">
        <li><a href="/como-funciona">Cómo funciona</a></li>
        <li><a href="/funcionalidades">Funcionalidades</a></li>
        <li><a href="/precios">Precios</a></li>
        <li><a href="/canal-de-denuncias">Canal de denuncias</a></li>
        <li><a href="/blog/">Blog</a></li>
      </ul>

      <!-- Desktop actions -->
      <div class="nav-actions">
        <button class="theme-toggle" aria-label="Cambiar tema" title="Cambiar tema">
          <!-- Sol (visible en modo oscuro) -->
          <svg class="icon-sun" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="4"/>
            <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
          </svg>
          <!-- Luna (visible en modo claro) -->
          <svg class="icon-moon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
          </svg>
        </button>
        <a href="<?= APP_LOGIN_URL ?>" class="btn btn-secondary" target="_blank" rel="noopener">Acceder</a>
        <a href="/registro" class="btn btn-primary">Empezar →</a>
      </div>

      <!-- Mobile hamburger -->
      <button class="nav-hamburger" aria-label="Abrir menú" aria-expanded="false" aria-controls="mobile-nav">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </nav>
  </div>
</header>

<!-- Mobile nav -->
<nav id="mobile-nav" class="nav-mobile" aria-label="Menú móvil">
  <a href="/como-funciona">Cómo funciona</a>
  <a href="/funcionalidades">Funcionalidades</a>
  <a href="/precios">Precios</a>
  <a href="/canal-de-denuncias">Canal de denuncias</a>
  <a href="/blog/">Blog</a>
  <div class="nav-mobile-actions">
    <button class="theme-toggle" aria-label="Cambiar tema" style="width:100%; border-radius: var(--radius-sm);">
      <svg class="icon-sun" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <circle cx="12" cy="12" r="4"/>
        <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
      </svg>
      <svg class="icon-moon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
      </svg>
      <span class="theme-toggle-label">Modo claro</span>
    </button>
    <a href="<?= APP_LOGIN_URL ?>" class="btn btn-secondary" target="_blank" rel="noopener">Acceder</a>
    <a href="/registro" class="btn btn-primary">Empezar →</a>
  </div>
</nav>
<div class="nav-overlay" aria-hidden="true"></div>

<!-- ============================================================
     COOKIE BANNER
     ============================================================ -->
<div class="cookie-banner" role="dialog" aria-label="Aviso de cookies" aria-live="polite">
  <p>
    Este sitio utiliza cookies técnicas para su correcto funcionamiento.
    <a href="/cookies">Política de cookies</a>
  </p>
  <div class="cookie-actions">
    <button class="btn btn-secondary cookie-necessary">Solo necesarias</button>
    <button class="btn btn-primary cookie-accept">Aceptar</button>
  </div>
</div>
