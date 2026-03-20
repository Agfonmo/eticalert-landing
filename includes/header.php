<?php
if (!defined('APP_LOGIN_URL')) require_once __DIR__ . '/../config.php';
/**
 * EticAlert — includes/header.php
 * Variables esperadas (opcionales, definidas en cada página):
 *   $page_title       — <title> completo
 *   $page_description — meta description
 *   $page_canonical   — URL canónica
 *   $page_og_title    — OG title (fallback: $page_title)
 *   $page_body_class  — clase extra en <body>
 */
$page_title       = $page_title ?? 'Canal de denuncias para empresas | EticAlert — Cumple la Ley 2/2023';
$page_description = $page_description ?? 'Activa tu canal de denuncias en minutos. EticAlert es la plataforma para pymes: segura, conforme a ley, desde 39€/mes. Sin llamadas, sin complicaciones.';
$page_canonical   = $page_canonical ?? 'https://eticalert.com/';
$page_og_title    = $page_og_title ?? $page_title;
$page_body_class  = $page_body_class ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($page_canonical) ?>">

  <!-- Open Graph -->
  <meta property="og:title"       content="<?= htmlspecialchars($page_og_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta property="og:url"         content="<?= htmlspecialchars($page_canonical) ?>">
  <meta property="og:image"       content="https://eticalert.com/img/og-image.php">
  <meta property="og:image:width"  content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:type"        content="website">
  <meta property="og:locale"      content="es_ES">
  <meta property="og:site_name"   content="EticAlert">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?= htmlspecialchars($page_og_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta name="twitter:image"       content="https://eticalert.com/img/og-image.php">

  <!-- Favicon -->
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">

  <!-- Preconnect Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">

  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js" defer></script>

  <!-- Stylesheet -->
  <link rel="stylesheet" href="/css/styles.css?v=20260320">

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
