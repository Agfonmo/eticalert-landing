<?php
$page_title       = 'Política de cookies | EticAlert';
$page_description = 'Política de cookies de EticAlert. Usamos solo cookies técnicas imprescindibles para el funcionamiento del sitio web.';
$page_canonical   = 'https://eticalert.com/cookies';
include 'includes/header.php';
?>

<main id="main-content">
  <div class="legal-page">
    <div class="container">
      <div class="legal-content">
        <h1>Política de cookies</h1>
        <p class="legal-date">Última actualización: 17 de marzo de 2026</p>

        <h2>1. ¿Qué son las cookies?</h2>
        <p>Las cookies son pequeños archivos de texto que los sitios web almacenan en el navegador del usuario cuando este accede a ellos. Permiten que el sitio web recuerde acciones y preferencias del usuario (como el idioma, el tamaño de letra u otras preferencias) durante un período de tiempo.</p>

        <h2>2. Cookies que utiliza eticalert.com</h2>
        <p>El sitio web eticalert.com <strong>solo utiliza cookies técnicas</strong> imprescindibles para su correcto funcionamiento. No utilizamos cookies de análisis de terceros (Google Analytics, etc.), cookies publicitarias ni cookies de redes sociales, salvo que el usuario lo consienta expresamente.</p>

        <div style="overflow-x:auto; margin:1.5rem 0;">
          <table class="comparison" style="min-width:460px;">
            <thead>
              <tr>
                <th style="text-align:left;">Nombre</th>
                <th style="text-align:left;">Tipo</th>
                <th style="text-align:left;">Finalidad</th>
                <th style="text-align:left;">Duración</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>eticalert_cookies_accepted</code></td>
                <td>Técnica (localStorage)</td>
                <td>Almacena la preferencia del usuario sobre el banner de cookies para no volver a mostrarlo.</td>
                <td>Persistente (hasta que el usuario borre datos del navegador)</td>
              </tr>
              <tr>
                <td><code>PHPSESSID</code></td>
                <td>Técnica de sesión</td>
                <td>Identificador de sesión PHP necesario para el procesamiento del formulario de registro.</td>
                <td>Sesión (se elimina al cerrar el navegador)</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h2>3. Cookies de terceros</h2>
        <p>El sitio web utiliza fuentes tipográficas de Google Fonts, que pueden cargar recursos desde servidores de Google. Google puede recopilar datos técnicos asociados a estas peticiones (dirección IP, agente de usuario). Para más información, consulta la <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">política de privacidad de Google</a>.</p>
        <p>La plataforma de pago Stripe (accesible únicamente desde app.eticalert.com) puede establecer cookies propias con finalidad antifraude y seguridad. Su uso se rige por la <a href="https://stripe.com/privacy" target="_blank" rel="noopener">política de privacidad de Stripe</a>.</p>

        <h2>4. Canal público de denuncias</h2>
        <p>El canal público de denuncias (eticalert.com/d/[empresa]) <strong>no utiliza ningún tipo de cookie</strong>. El anonimato del informante es una prioridad de diseño. No se instala ningún rastreador, píxel ni cookie de seguimiento en las páginas del canal público.</p>

        <h2>5. Cómo gestionar las cookies desde el navegador</h2>
        <p>Puedes configurar tu navegador para bloquear o eliminar las cookies. Ten en cuenta que si bloqueas las cookies técnicas, algunas funcionalidades del sitio pueden dejar de funcionar correctamente.</p>
        <ul>
          <li><strong>Chrome:</strong> Configuración → Privacidad y seguridad → Cookies y otros datos de sitios.</li>
          <li><strong>Firefox:</strong> Configuración → Privacidad y seguridad → Cookies y datos del sitio.</li>
          <li><strong>Safari:</strong> Preferencias → Privacidad → Gestión de datos del sitio web.</li>
          <li><strong>Edge:</strong> Configuración → Privacidad, búsqueda y servicios → Cookies.</li>
        </ul>

        <h2>6. Actualizaciones de esta política</h2>
        <p>FONCAD GROUP se reserva el derecho de actualizar esta política de cookies para adaptarla a cambios normativos o del servicio. Las actualizaciones se publicarán en esta misma página con indicación de la fecha de última revisión.</p>

        <h2>7. Contacto</h2>
        <p>Para cualquier consulta sobre nuestra política de cookies, escríbenos a <a href="mailto:privacidad@eticalert.com">privacidad@eticalert.com</a>.</p>
      </div>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
