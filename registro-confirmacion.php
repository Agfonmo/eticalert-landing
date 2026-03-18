<?php
$empresa = trim(htmlspecialchars($_GET['empresa'] ?? 'tu empresa', ENT_QUOTES, 'UTF-8'));

$page_title       = '¡Registro completado! | EticAlert';
$page_description = 'Tu canal de denuncias EticAlert está en camino. Pronto recibirás las instrucciones de acceso.';
$page_canonical   = 'https://eticalert.com/registro-confirmacion';
include 'includes/header.php';
?>

<main id="main-content">
  <section class="confirm-page">
    <div class="container">
      <div class="fade-up">
        <div class="confirm-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <h1>¡Tu canal está en camino!</h1>
        <p>Hemos recibido tu solicitud de registro para <strong style="color:var(--text-primary);"><?= $empresa ?></strong>.</p>
        <p>En menos de 24 horas recibirás un email con tus credenciales de acceso a <strong style="color:var(--accent);">app.eticalert.com</strong> para configurar tu canal de denuncias.</p>

        <div class="confirm-steps">
          <div class="checklist-item">
            <svg class="checklist-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            Revisa tu email (también la carpeta de spam).
          </div>
          <div class="checklist-item">
            <svg class="checklist-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            Accede al wizard de configuración y personaliza tu canal.
          </div>
          <div class="checklist-item">
            <svg class="checklist-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            Publica la URL en tu web. Canal operativo y Ley 2/2023 cumplida.
          </div>
        </div>

        <div class="btn-group" style="justify-content:center; margin-top:2rem;">
          <a href="https://app.eticalert.com" class="btn btn-primary btn-lg" target="_blank" rel="noopener">
            Ir a app.eticalert.com →
          </a>
          <a href="/" class="btn btn-secondary">Volver al inicio</a>
        </div>

        <p style="margin-top:2rem; font-size:0.875rem; color:var(--text-muted);">¿No recibes el email? Escríbenos a <a href="mailto:info@eticalert.com" style="color:var(--accent);">info@eticalert.com</a></p>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
