/* ============================================================
   EticAlert — registro.js
   Multi-step form: paso 1 (datos) → paso 2 (plan + privacidad)
   ============================================================ */

(function () {
  'use strict';

  const form = document.getElementById('registro-form');
  if (!form) return;

  const step1 = document.getElementById('step-1');
  const step2 = document.getElementById('step-2');
  const btnNext = document.getElementById('btn-step1-next');
  const btnBack = document.getElementById('btn-step2-back');
  const empleadosHidden = document.getElementById('empleados-hidden');
  const planCards = document.querySelectorAll('.plan-card');
  const planError = document.getElementById('plan-error');

  /* ----------------------------------------------------------
     Helpers
  ---------------------------------------------------------- */
  function showError(field, message) {
    field.classList.add('error');
    let el = field.parentElement.querySelector('.field-error');
    if (!el) {
      el = document.createElement('p');
      el.className = 'field-error';
      field.parentElement.appendChild(el);
    }
    el.textContent = message;
  }

  function clearError(field) {
    field.classList.remove('error');
    const el = field.parentElement.querySelector('.field-error');
    if (el) el.remove();
  }

  function isValidEmail(v) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
  }

  function isValidPhone(v) {
    return !v || /^[\d\s+\-()]{7,15}$/.test(v);
  }

  /* ----------------------------------------------------------
     Step 1 validation
  ---------------------------------------------------------- */
  function validateStep1() {
    let ok = true;
    const nombre   = form.querySelector('#nombre');
    const email    = form.querySelector('#email');
    const empresa  = form.querySelector('#empresa');
    const cif      = form.querySelector('#cif');
    const telefono = form.querySelector('#telefono');

    [nombre, email, empresa, cif, telefono].forEach(clearError);

    if (!nombre.value.trim()) { showError(nombre, 'El nombre es obligatorio.'); ok = false; }
    if (!email.value.trim()) { showError(email, 'El email es obligatorio.'); ok = false; }
    else if (!isValidEmail(email.value.trim())) { showError(email, 'Introduce un email válido.'); ok = false; }
    if (!empresa.value.trim()) { showError(empresa, 'El nombre de empresa es obligatorio.'); ok = false; }
    if (!cif.value.trim()) { showError(cif, 'El CIF es obligatorio.'); ok = false; }
    if (!isValidPhone(telefono.value.trim())) { showError(telefono, 'Introduce un teléfono válido.'); ok = false; }

    if (!ok) {
      const first = step1.querySelector('.error');
      if (first) { first.scrollIntoView({ behavior: 'smooth', block: 'center' }); first.focus(); }
    }
    return ok;
  }

  /* ----------------------------------------------------------
     Step navigation
  ---------------------------------------------------------- */
  if (btnNext) {
    btnNext.addEventListener('click', () => {
      if (!validateStep1()) return;
      step1.style.display = 'none';
      step2.style.display = 'block';
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  if (btnBack) {
    btnBack.addEventListener('click', () => {
      step2.style.display = 'none';
      step1.style.display = 'block';
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ----------------------------------------------------------
     Plan card selection
  ---------------------------------------------------------- */
  planCards.forEach((card) => {
    card.addEventListener('click', () => {
      planCards.forEach((c) => c.classList.remove('selected'));
      card.classList.add('selected');
      empleadosHidden.value = card.dataset.value;
      if (planError) planError.style.display = 'none';
    });
  });

  /* ----------------------------------------------------------
     Inline validation on blur
  ---------------------------------------------------------- */
  ['nombre', 'email', 'empresa', 'cif'].forEach((id) => {
    const field = form.querySelector('#' + id);
    if (!field) return;
    field.addEventListener('blur', () => {
      if (id === 'email' && field.value.trim() && !isValidEmail(field.value.trim())) {
        showError(field, 'Introduce un email válido.');
      } else if (id !== 'email' && !field.value.trim()) {
        const msgs = { nombre: 'El nombre es obligatorio.', empresa: 'El nombre de empresa es obligatorio.', cif: 'El CIF es obligatorio.' };
        showError(field, msgs[id] || 'Campo obligatorio.');
      } else {
        clearError(field);
      }
    });
    field.addEventListener('input', () => { if (field.classList.contains('error')) clearError(field); });
  });

  /* ----------------------------------------------------------
     Form submit — validate step 2
  ---------------------------------------------------------- */
  form.addEventListener('submit', (e) => {
    let ok = true;

    if (!empleadosHidden.value) {
      if (planError) { planError.textContent = 'Selecciona un plan para continuar.'; planError.style.display = 'block'; }
      ok = false;
    }

    const checkbox = form.querySelector('[name="privacidad"]');
    const checkboxWrap = checkbox ? checkbox.closest('.form-checkbox') : null;
    if (checkbox && !checkbox.checked) {
      ok = false;
      if (checkboxWrap) {
        let el = checkboxWrap.querySelector('.field-error');
        if (!el) { el = document.createElement('p'); el.className = 'field-error'; checkboxWrap.appendChild(el); }
        el.textContent = 'Debes aceptar la política de privacidad para continuar.';
      }
    } else if (checkboxWrap) {
      const el = checkboxWrap.querySelector('.field-error');
      if (el) el.remove();
    }

    if (!ok) { e.preventDefault(); return; }

    const submitBtn = form.querySelector('[type="submit"]');
    if (submitBtn) { submitBtn.disabled = true; submitBtn.textContent = 'Enviando...'; }
  });

  /* ----------------------------------------------------------
     Si PHP devuelve errores en paso 2, mostrar directamente el paso 2
  ---------------------------------------------------------- */
  if (planError && planError.textContent.trim()) {
    step1.style.display = 'none';
    step2.style.display = 'block';
    planError.style.display = 'block';
  }
  const privacidadError = form.querySelector('.form-checkbox .field-error');
  if (privacidadError) {
    step1.style.display = 'none';
    step2.style.display = 'block';
  }

})();
