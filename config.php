<?php
// ============================================================
// EticAlert — config.php
// Configuración por entorno, detectado por hostname
// ============================================================

$host = $_SERVER['HTTP_HOST'] ?? '';

if (strpos($host, 'staging') !== false) {
    define('APP_ENV',     'staging');
    define('API_BASE',    'https://staging-app.eticalert.com');
    define('APP_DEBUG',   true);
} else {
    define('APP_ENV',     'production');
    define('API_BASE',    'https://app.eticalert.com');
    define('APP_DEBUG',   false);
}

define('API_REGISTER',  API_BASE . '/api/auth/register');
define('APP_LOGIN_URL', API_BASE . '/login');
define('ADMIN_EMAIL',   'info@eticalert.com');
define('PARTNERS_EMAIL','partners@eticalert.com');

// ============================================================
// Analítica y publicidad
// ============================================================
define('GA4_MEASUREMENT_ID', 'G-X2J4XCG9WY');

// Ahrefs Web Analytics (sin cookies, sin banner de consentimiento).
// Analítica de respaldo independiente de GA4 y verificación del sitio en Ahrefs.
define('AHREFS_ANALYTICS_KEY', 'Aom3aidF5VN9lpuqvUSwsw');

// Google Ads: rellenar al crear la campaña.
//   GOOGLE_ADS_ID              → identificador de la cuenta,  formato 'AW-1234567890'
//   GOOGLE_ADS_LABEL_REGISTRO  → label de la acción de conversión "alta de prueba"
// Mientras estén vacíos no se emite ninguna etiqueta de Ads (no rompe nada).
define('GOOGLE_ADS_ID',             '');
define('GOOGLE_ADS_LABEL_REGISTRO', '');

// ============================================================
// AggregateRating — estrellas en Google SERP
// Actualizar con datos reales de Capterra/G2 al conseguir reviews.
// Con REVIEW_COUNT = 0 no se emite ningún schema (evita datos falsos).
// ============================================================
define('REVIEW_RATING', '4.9');  // puntuación media real
define('REVIEW_COUNT',  0);      // número total de reseñas reales

/**
 * Devuelve el fragmento JSON-LD de aggregateRating listo para insertar
 * dentro de un bloque SoftwareApplication (con coma inicial).
 * Si REVIEW_COUNT es 0, devuelve cadena vacía → no contamina el JSON.
 */
function schema_aggregate_rating(): string {
  if ((int)REVIEW_COUNT === 0) return '';
  return ',
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "' . REVIEW_RATING . '",
    "bestRating": "5",
    "worstRating": "1",
    "reviewCount": ' . (int)REVIEW_COUNT . '
  }';
}
