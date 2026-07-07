<?php
/**
 * Redirige a /partners — la terminología del programa pasó de
 * "revendedores" a "partner" para alinearse con el material comercial.
 */
header('HTTP/1.1 301 Moved Permanently');
header('Location: https://eticalert.com/partners');
exit;
