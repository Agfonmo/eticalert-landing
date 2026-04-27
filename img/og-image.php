<?php
/**
 * EticAlert — Generador dinámico de og:image
 * Parámetros GET:
 *   ?t=  Título del artículo (opcional). Sin parámetro → imagen genérica de producto.
 * Salida: PNG 1200×630 via GD
 */

header('Content-Type: image/png');
header('Cache-Control: public, max-age=86400');

$w = 1200;
$h = 630;

// ── Título dinámico ───────────────────────────────────────
$article_title = isset($_GET['t']) ? strip_tags(urldecode($_GET['t'])) : '';
if (mb_strlen($article_title) > 90) {
    $article_title = mb_substr($article_title, 0, 87) . '...';
}

// Transliteración para GD built-in (ISO-8859-1)
$trans = [
    'á'=>'a','é'=>'e','í'=>'i','ó'=>'o','ú'=>'u',
    'Á'=>'A','É'=>'E','Í'=>'I','Ó'=>'O','Ú'=>'U',
    'ñ'=>'n','Ñ'=>'N','ü'=>'u','Ü'=>'U','ç'=>'c',
    '—'=>'-','–'=>'-','«'=>'"','»'=>'"',
    "\xe2\x80\x99"=>'',"'"|>"'",
];
$title_ascii = $article_title ? strtr($article_title, $trans) : '';

// Partir título en líneas (max 30 chars por línea)
function wrap_text(string $text, int $max): array {
    $words = explode(' ', $text);
    $lines = [];
    $cur   = '';
    foreach ($words as $word) {
        $test = $cur === '' ? $word : "$cur $word";
        if (strlen($test) > $max && $cur !== '') {
            $lines[] = $cur;
            $cur = $word;
        } else {
            $cur = $test;
        }
    }
    if ($cur !== '') $lines[] = $cur;
    return $lines;
}

$img = imagecreatetruecolor($w, $h);

// ── Colores ──────────────────────────────────────────────
$bg        = imagecolorallocate($img, 10,  15,  13);
$bg2       = imagecolorallocate($img, 20,  31,  25);
$green     = imagecolorallocate($img, 74,  222, 128);
$green_dim = imagecolorallocate($img, 22,  163, 74);
$white     = imagecolorallocate($img, 255, 255, 255);
$gray      = imagecolorallocate($img, 156, 180, 170);
$border    = imagecolorallocate($img, 30,  50,  40);

// ── Fondo ─────────────────────────────────────────────────
imagefill($img, 0, 0, $bg);
imagefilledrectangle($img, 40, 40, $w - 40, $h - 40, $bg2);
imagerectangle($img, 40, 40, $w - 40, $h - 40, $border);
imagefilledrectangle($img, 40, 40, $w - 40, 44, $green);

$font = 5; // mayor fuente built-in GD

if ($article_title) {
    // ── MODO ARTÍCULO ─────────────────────────────────────

    // Logo pequeño + "EticAlert" arriba izquierda
    imagearc($img, 90, 100, 36, 36, 0, 360, $green);
    imagearc($img, 90, 100, 16, 16, 0, 360, $green);
    imagefilledellipse($img, 90, 100, 6, 6, $green);
    imagestring($img, $font, 115, 93, 'EticAlert', $green);

    // Badge "Blog"
    $badge_text = 'Blog';
    $bx = 80; $by = 130;
    imagefilledrectangle($img, $bx - 8, $by - 6, $bx + strlen($badge_text) * 9 + 8, $by + 20, $border);
    imagerectangle($img, $bx - 8, $by - 6, $bx + strlen($badge_text) * 9 + 8, $by + 20, $green_dim);
    imagestring($img, 3, $bx, $by, $badge_text, $green);

    // Título del artículo — 3x escalado, máx 30 chars/línea
    $lines    = wrap_text($title_ascii, 30);
    $char_w   = 9;
    $char_h   = 15;
    $scale    = 3;
    $line_h   = $char_h * $scale + 10;
    $total_h  = count($lines) * $line_h;
    $start_y  = intval(($h - $total_h) / 2) - 20;

    foreach ($lines as $i => $line) {
        $tmp = imagecreatetruecolor(strlen($line) * $char_w, $char_h);
        imagefill($tmp, 0, 0, imagecolorallocate($tmp, 0, 0, 0));
        imagecolortransparent($tmp, imagecolorallocate($tmp, 0, 0, 0));
        imagestring($tmp, $font, 0, 0, $line, $white);
        $scaled = imagescale($tmp, strlen($line) * $char_w * $scale, $char_h * $scale, IMG_NEAREST_NEIGHBOUR);
        imagecopy($img, $scaled, 80, $start_y + $i * $line_h, 0, 0, imagesx($scaled), imagesy($scaled));
        imagedestroy($tmp);
        imagedestroy($scaled);
    }

    // Separador horizontal
    $sep_y = $start_y + $total_h + 24;
    imageline($img, 80, $sep_y, 600, $sep_y, $border);

    // "Canal de denuncias — eticalert.com"
    imagestring($img, 3, 80, $sep_y + 14, 'Canal de denuncias para pymes espanolas', $gray);

} else {
    // ── MODO GENÉRICO (sin ?t=) ───────────────────────────

    // Logo centrado a la izquierda
    imagearc($img, 130, 200, 80, 80, 0, 360, $green);
    imagearc($img, 130, 200, 36, 36, 0, 360, $green);
    imagefilledellipse($img, 130, 200, 10, 10, $green);

    // "EticAlert" grande
    $title = 'EticAlert';
    $tmp = imagecreatetruecolor(strlen($title) * 9, 15);
    imagefill($tmp, 0, 0, imagecolorallocate($tmp, 0, 0, 0));
    imagecolortransparent($tmp, imagecolorallocate($tmp, 0, 0, 0));
    imagestring($tmp, $font, 0, 0, $title, $green);
    $scaled = imagescale($tmp, strlen($title) * 9 * 4, 15 * 4, IMG_NEAREST_NEIGHBOUR);
    imagecopy($img, $scaled, 185, 155, 0, 0, imagesx($scaled), imagesy($scaled));
    imagedestroy($tmp); imagedestroy($scaled);

    // Tagline
    $tag = 'Canal de denuncias para pymes';
    $tmp2 = imagecreatetruecolor(strlen($tag) * 9, 15);
    imagefill($tmp2, 0, 0, imagecolorallocate($tmp2, 0, 0, 0));
    imagecolortransparent($tmp2, imagecolorallocate($tmp2, 0, 0, 0));
    imagestring($tmp2, $font, 0, 0, $tag, $white);
    $scaled2 = imagescale($tmp2, strlen($tag) * 9 * 2, 15 * 2, IMG_NEAREST_NEIGHBOUR);
    imagecopy($img, $scaled2, 185, 240, 0, 0, imagesx($scaled2), imagesy($scaled2));
    imagedestroy($tmp2); imagedestroy($scaled2);

    // Subtítulo
    $sub = 'Cumple la Ley 2/2023 desde el primer dia';
    $tmp3 = imagecreatetruecolor(strlen($sub) * 9, 15);
    imagefill($tmp3, 0, 0, imagecolorallocate($tmp3, 0, 0, 0));
    imagecolortransparent($tmp3, imagecolorallocate($tmp3, 0, 0, 0));
    imagestring($tmp3, $font, 0, 0, $sub, $gray);
    $scaled3 = imagescale($tmp3, strlen($sub) * 9 * 2, 15 * 2, IMG_NEAREST_NEIGHBOUR);
    imagecopy($img, $scaled3, 185, 290, 0, 0, imagesx($scaled3), imagesy($scaled3));
    imagedestroy($tmp3); imagedestroy($scaled3);

    // Badge
    $badge = 'Desde 0 EUR/mes   |   Sin tecnicos   |   100% espanol';
    $badge_x = 80; $badge_y = 520;
    imagefilledrectangle($img, $badge_x - 10, $badge_y - 8, $badge_x + strlen($badge) * 9 + 10, $badge_y + 22, $border);
    imagerectangle($img, $badge_x - 10, $badge_y - 8, $badge_x + strlen($badge) * 9 + 10, $badge_y + 22, $green_dim);
    imagestring($img, 3, $badge_x, $badge_y, $badge, $green);
}

// ── Dominio bottom-right (ambos modos) ───────────────────
imagestring($img, 3, $w - 220, $h - 80, 'eticalert.com', $gray);

imagepng($img);
imagedestroy($img);
