/* ============================================================
   EticAlert — registro.js
   Multi-step form: paso 1 (datos) → paso 2 (plan + privacidad)
   ============================================================ */

(function () {
  'use strict';

  var form = document.getElementById('registro-form');
  if (!form) return;

  var step1 = document.getElementById('step-1');
  var step2 = document.getElementById('step-2');
  var btnNext = document.getElementById('btn-step1-next');
  var btnBack = document.getElementById('btn-step2-back');
  var empleadosHidden = document.getElementById('empleados-hidden');
  var planCards = document.querySelectorAll('.plan-card');
  var planError = document.getElementById('plan-error');

  /* ----------------------------------------------------------
     Helpers
  ---------------------------------------------------------- */
  function showError(field, message) {
    if (!field) return;
    field.classList.add('error');
    var el = field.parentElement.querySelector('.field-error');
    if (!el) {
      el = document.createElement('p');
      el.className = 'field-error';
      field.parentElement.appendChild(el);
    }
    el.textContent = message;
  }

  function clearError(field) {
    if (!field) return;
    field.classList.remove('error');
    var el = field.parentElement.querySelector('.field-error');
    if (el) el.remove();
  }

  function isValidEmail(v) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
  }

  function isValidPhone(v) {
    if (!v) return true; // opcional
    return /^[\d\s+\-()]{7,15}$/.test(v);
  }

  /**
   * CIF/NIF/NIE español:
   * - CIF empresa:   letra (A-H J N P-S U-W) + 7 dígitos + dígito/letra control
   * - DNI personal:  8 dígitos + letra
   * - NIE extranjero: X/Y/Z + 7 dígitos + letra
   */
  function isValidCIF(v) {
    if (!v) return false;
    var val = v.trim().toUpperCase().replace(/[\s\-]/g, '');
    // DNI: 8 dígitos + letra
    if (/^\d{8}[A-Z]$/.test(val)) return true;
    // NIE: X/Y/Z + 7 dígitos + letra
    if (/^[XYZ]\d{7}[A-Z]$/.test(val)) return true;
    // CIF empresa: letra + 7 dígitos + letra/dígito
    if (/^[ABCDEFGHJNPQRSUVW]\d{7}[0-9A-J]$/i.test(val)) return true;
    return false;
  }

  /* ----------------------------------------------------------
     Step 1: validar todos los campos antes de avanzar
  ---------------------------------------------------------- */
  function validateStep1() {
    var ok = true;
    var nombre   = document.getElementById('nombre');
    var email    = document.getElementById('email');
    var empresa  = document.getElementById('empresa');
    var cif      = document.getElementById('cif');
    var telefono = document.getElementById('telefono');

    clearError(nombre);
    clearError(email);
    clearError(empresa);
    clearError(cif);
    clearError(telefono);

    if (!nombre || !nombre.value.trim()) {
      showError(nombre, 'El nombre es obligatorio.');
      ok = false;
    }
    if (!email || !email.value.trim()) {
      showError(email, 'El email es obligatorio.');
      ok = false;
    } else if (!isValidEmail(email.value.trim())) {
      showError(email, 'Introduce un email corporativo válido.');
      ok = false;
    }
    if (!empresa || !empresa.value.trim()) {
      showError(empresa, 'El nombre de empresa es obligatorio.');
      ok = false;
    }
    if (!cif || !cif.value.trim()) {
      showError(cif, 'El CIF es obligatorio.');
      ok = false;
    } else if (!isValidCIF(cif.value)) {
      showError(cif, 'El CIF no tiene el formato correcto (ej: B12345678).');
      ok = false;
    }
    if (telefono && telefono.value.trim() && !isValidPhone(telefono.value.trim())) {
      showError(telefono, 'Introduce un teléfono válido.');
      ok = false;
    }

    if (!ok && step1) {
      var first = step1.querySelector('.error');
      if (first) { first.scrollIntoView({ behavior: 'smooth', block: 'center' }); first.focus(); }
    }
    return ok;
  }

  /* ----------------------------------------------------------
     Navegación entre pasos
  ---------------------------------------------------------- */
  if (btnNext) {
    btnNext.addEventListener('click', function () {
      if (!validateStep1()) return;
      step1.style.display = 'none';
      step2.style.display = 'block';
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  if (btnBack) {
    btnBack.addEventListener('click', function () {
      step2.style.display = 'none';
      step1.style.display = 'block';
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ----------------------------------------------------------
     Selección de plan (cards)
  ---------------------------------------------------------- */
  planCards.forEach(function (card) {
    card.addEventListener('click', function () {
      planCards.forEach(function (c) { c.classList.remove('selected'); });
      card.classList.add('selected');
      if (empleadosHidden) empleadosHidden.value = card.dataset.value;
      if (planError) planError.style.display = 'none';
    });
  });

  /* ----------------------------------------------------------
     Validación en tiempo real (blur) en paso 1
  ---------------------------------------------------------- */
  var blurFields = [
    { id: 'nombre',  empty: 'El nombre es obligatorio.' },
    { id: 'email',   empty: 'El email es obligatorio.' },
    { id: 'empresa', empty: 'El nombre de empresa es obligatorio.' },
    { id: 'cif',     empty: 'El CIF es obligatorio.' }
  ];

  blurFields.forEach(function (cfg) {
    var field = document.getElementById(cfg.id);
    if (!field) return;
    field.addEventListener('blur', function () {
      var val = field.value.trim();
      if (!val) {
        showError(field, cfg.empty);
      } else if (cfg.id === 'email' && !isValidEmail(val)) {
        showError(field, 'Introduce un email corporativo válido.');
      } else if (cfg.id === 'cif' && !isValidCIF(val)) {
        showError(field, 'El CIF no tiene el formato correcto (ej: B12345678).');
      } else {
        clearError(field);
      }
    });
    field.addEventListener('input', function () {
      if (field.classList.contains('error')) clearError(field);
    });
  });

  /* ----------------------------------------------------------
     Submit: validar paso 2
  ---------------------------------------------------------- */
  form.addEventListener('submit', function (e) {
    var ok = true;

    // Plan seleccionado
    if (!empleadosHidden || !empleadosHidden.value) {
      if (planError) {
        planError.textContent = 'Selecciona un plan para continuar.';
        planError.style.display = 'block';
      }
      ok = false;
    }

    // Checkbox política
    var checkbox = form.querySelector('[name="privacidad"]');
    var checkboxWrap = checkbox ? checkbox.closest('.form-checkbox') : null;
    if (checkbox && !checkbox.checked) {
      ok = false;
      if (checkboxWrap) {
        var el = checkboxWrap.querySelector('.field-error');
        if (!el) {
          el = document.createElement('p');
          el.className = 'field-error';
          checkboxWrap.appendChild(el);
        }
        el.textContent = 'Debes aceptar la política de privacidad para continuar.';
      }
    } else if (checkboxWrap) {
      var existing = checkboxWrap.querySelector('.field-error');
      if (existing) existing.remove();
    }

    if (!ok) { e.preventDefault(); return; }

    var submitBtn = form.querySelector('[type="submit"]');
    if (submitBtn) { submitBtn.disabled = true; submitBtn.textContent = 'Enviando...'; }
  });

  /* ----------------------------------------------------------
     Si PHP devuelve errores de paso 2, mostrar paso 2 directamente
  ---------------------------------------------------------- */
  if (planError && planError.textContent.trim()) {
    if (step1) step1.style.display = 'none';
    if (step2) step2.style.display = 'block';
    planError.style.display = 'block';
  }
  var privacidadError = form.querySelector('.form-checkbox .field-error');
  if (privacidadError) {
    if (step1) step1.style.display = 'none';
    if (step2) step2.style.display = 'block';
  }

})();
