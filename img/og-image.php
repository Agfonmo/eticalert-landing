<?php
/**
 * EticAlert — Generador dinámico de og:image
 * Salida: PNG 1200×630 via GD
 */

header('Content-Type: image/png');
header('Cache-Control: public, max-age=86400');

$w = 1200;
$h = 630;

$img = imagecreatetruecolor($w, $h);
imagesavealpha($img, true);

// ── Colores ──────────────────────────────────────────────
$bg        = imagecolorallocate($img, 10,  15,  13);   // #0A0F0D
$bg2       = imagecolorallocate($img, 20,  31,  25);   // #141F19
$green     = imagecolorallocate($img, 74,  222, 128);  // #4ADE80
$green_dim = imagecolorallocate($img, 22,  163, 74);   // #16A34A
$white     = imagecolorallocate($img, 255, 255, 255);
$gray      = imagecolorallocate($img, 156, 180, 170);  // muted text
$border    = imagecolorallocate($img, 30,  50,  40);   // border subtle

// ── Fondo ────────────────────────────────────────────────
imagefill($img, 0, 0, $bg);

// Panel interior con borde sutil
imagefilledrectangle($img, 40, 40, $w - 40, $h - 40, $bg2);
imagerectangle($img, 40, 40, $w - 40, $h - 40, $border);

// Línea acento superior
imagefilledrectangle($img, 40, 40, $w - 40, 44, $green);

// ── Logo (icono simplificado) ─────────────────────────────
// Círculo exterior
imagearc($img, 130, 200, 80, 80, 0, 360, $green);
// Círculo interior
imagearc($img, 130, 200, 36, 36, 0, 360, $green);
// Punto central
imagefilledellipse($img, 130, 200, 10, 10, $green);

// ── Textos ───────────────────────────────────────────────
// Fuente bundled de GD (no requiere TTF externo)
$font = 5; // mayor fuente built-in (9×15px por carácter)

// "EticAlert" — nombre grande simulado con escalado
$title = 'EticAlert';
$tag   = 'Canal de denuncias para pymes';
$sub   = 'Cumple la Ley 2/2023 desde el primer dia';
$badge = 'Desde 0 EUR/mes   |   Sin tecnicos   |   100% espanol';

// Título principal — repetido 3× para simular negrita/tamaño
foreach ([[-1,0],[1,0],[0,-1],[0,1],[0,0]] as $offset) {
    imagestring($img, $font, 180 + $offset[0], 168 + $offset[1], $title, $green);
}
// Escalamos manualmente haciendo múltiples pasadas no hay TTF
// Usamos imagescale para hacer el texto más grande
// Como GD built-in es limitado, pintamos el título letra a letra escalado
// Solución: crear subimagen con texto y escalarla
$tmp = imagecreatetruecolor(strlen($title) * 9, 15);
imagefill($tmp, 0, 0, imagecolorallocate($tmp, 0, 0, 0));
imagecolortransparent($tmp, imagecolorallocate($tmp, 0, 0, 0));
imagestring($tmp, $font, 0, 0, $title, $green);
$scaled = imagescale($tmp, strlen($title) * 9 * 4, 15 * 4, IMG_NEAREST_NEIGHBOUR);
imagecopy($img, $scaled, 185, 155, 0, 0, imagesx($scaled), imagesy($scaled));
imagedestroy($tmp);
imagedestroy($scaled);

// Tagline
$tmp2 = imagecreatetruecolor(strlen($tag) * 9, 15);
imagefill($tmp2, 0, 0, imagecolorallocate($tmp2, 0, 0, 0));
imagecolortransparent($tmp2, imagecolorallocate($tmp2, 0, 0, 0));
imagestring($tmp2, $font, 0, 0, $tag, $white);
$scaled2 = imagescale($tmp2, strlen($tag) * 9 * 2, 15 * 2, IMG_NEAREST_NEIGHBOUR);
imagecopy($img, $scaled2, 185, 240, 0, 0, imagesx($scaled2), imagesy($scaled2));
imagedestroy($tmp2);
imagedestroy($scaled2);

// Subtítulo
$tmp3 = imagecreatetruecolor(strlen($sub) * 9, 15);
imagefill($tmp3, 0, 0, imagecolorallocate($tmp3, 0, 0, 0));
imagecolortransparent($tmp3, imagecolorallocate($tmp3, 0, 0, 0));
imagestring($tmp3, $font, 0, 0, $sub, $gray);
$scaled3 = imagescale($tmp3, strlen($sub) * 9 * 2, 15 * 2, IMG_NEAREST_NEIGHBOUR);
imagecopy($img, $scaled3, 185, 290, 0, 0, imagesx($scaled3), imagesy($scaled3));
imagedestroy($tmp3);
imagedestroy($scaled3);

// Badge con fondo
$badge_x = 80;
$badge_y = 520;
imagefilledrectangle($img, $badge_x - 10, $badge_y - 8, $badge_x + strlen($badge) * 9 * 1 + 10, $badge_y + 22, $border);
imagerectangle($img, $badge_x - 10, $badge_y - 8, $badge_x + strlen($badge) * 9 * 1 + 10, $badge_y + 22, $green_dim);
imagestring($img, 3, $badge_x, $badge_y, $badge, $green);

// Dominio bottom-right
imagestring($img, 3, $w - 220, $h - 80, 'eticalert.com', $gray);

imagepng($img);
imagedestroy($img);
