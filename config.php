<?php
// ============================================================
// EticAlert — config.php
// Configuración por entorno, detectado por hostname
// ============================================================

$host = $_SERVER['HTTP_HOST'] ?? '';

if (strpos($host, 'staging') !== false) {
    define('APP_ENV',     'staging');
    define('API_BASE',    'https://staging.app.eticalert.com');
    define('APP_DEBUG',   true);
} else {
    define('APP_ENV',     'production');
    define('API_BASE',    'https://app.eticalert.com');
    define('APP_DEBUG',   false);
}

define('API_REGISTER',  API_BASE . '/api/auth/register');
define('APP_LOGIN_URL', API_BASE . '/login');
define('ADMIN_EMAIL',   'info@eticalert.com');
