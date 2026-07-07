<?php
/**
 * Redirige a /blog/canal-denuncias-precio-comparativa para eliminar la
 * canibalización de keyword "precio canal de denuncias" entre ambas páginas.
 * El artículo de blog concentra el enlazado interno (16 páginas) y el
 * contenido más completo (tabla de coste total anual).
 */
header('HTTP/1.1 301 Moved Permanently');
header('Location: https://eticalert.com/blog/canal-denuncias-precio-comparativa');
exit;
