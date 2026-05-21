<?php
http_response_code(404);
$page_title       = 'Página no encontrada (404) | EticAlert';
$page_description = 'La página que buscas no existe o ha sido movida. Vuelve al inicio de EticAlert o explora nuestras secciones.';
$page_canonical   = 'https://eticalert.com/404';
include 'includes/header.php';
?>

<main id="main-content">

  <section style="padding:140px 0 100px; text-align:center;">
    <div class="container">
      <div style="max-width:600px; margin:0 auto;" class="fade-up">

        <p style="font-size:7rem; font-weight:800; line-height:1; color:var(--accent); margin:0 0 0.5rem;">404</p>
        <h1 style="font-size:2rem; margin-bottom:1rem;">Página no encontrada</h1>
        <p style="font-size:1.125rem; color:var(--text-secondary); margin-bottom:2.5rem;">
          La URL que buscas no existe o ha sido movida.<br>
          Puede que hayas seguido un enlace antiguo o tecleado mal la dirección.
        </p>

        <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
          <a href="/" class="btn btn-primary">← Volver al inicio</a>
          <a href="/canal-de-denuncias" class="btn btn-ghost">Qué es un canal de denuncias</a>
        </div>

        <!-- Links útiles -->
        <div style="margin-top:3.5rem; padding-top:2rem; border-top:1px solid var(--border);">
          <p style="font-size:0.875rem; color:var(--text-muted); margin-bottom:1.25rem; text-transform:uppercase; letter-spacing:.06em;">Páginas más visitadas</p>
          <ul style="list-style:none; padding:0; margin:0; display:flex; flex-wrap:wrap; gap:0.75rem; justify-content:center;">
            <li><a href="/precios" style="color:var(--accent);">Precios</a></li>
            <li><a href="/funcionalidades" style="color:var(--accent);">Funcionalidades</a></li>
            <li><a href="/como-funciona" style="color:var(--accent);">Cómo funciona</a></li>
            <li><a href="/faq" style="color:var(--accent);">Preguntas frecuentes</a></li>
            <li><a href="/blog/" style="color:var(--accent);">Blog</a></li>
            <li><a href="/registro" style="color:var(--accent);">Empezar gratis</a></li>
          </ul>
        </div>

      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
