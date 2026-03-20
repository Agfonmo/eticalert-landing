/* ============================================================
   EticAlert — registro.js
   Multi-step form: paso 1 (datos) → paso 2 (plan + aceptaciones)
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
  var billingToggleInput = document.getElementById('billing-toggle-input');
  var billingHidden = document.getElementById('billing-hidden');
  var lblMonthly = document.getElementById('lbl-monthly');
  var lblAnnual  = document.getElementById('lbl-annual');
  var planError  = document.getElementById('plan-error');

  /* ----------------------------------------------------------
     Helpers
  ---------------------------------------------------------- */
  function showError(field, message) {
    if (!field) return;
    field.classList.add('error');
    var parent = field.closest('.form-group') || field.parentElement;
    var el = parent.querySelector('.field-error');
    if (!el) {
      el = document.createElement('p');
      el.className = 'field-error';
      parent.appendChild(el);
    }
    el.textContent = message;
  }

  function clearError(field) {
    if (!field) return;
    field.classList.remove('error');
    var parent = field.closest('.form-group') || field.parentElement;
    var el = parent.querySelector('.field-error');
    if (el) el.remove();
  }

  function showCheckboxError(wrap, message) {
    if (!wrap) return;
    var el = wrap.querySelector('.field-error');
    if (!el) {
      el = document.createElement('p');
      el.className = 'field-error';
      wrap.parentElement.insertBefore(el, wrap.nextSibling);
    }
    el.textContent = message;
    wrap.classList.add('error-label');
  }

  function clearCheckboxError(wrap) {
    if (!wrap) return;
    wrap.classList.remove('error-label');
    var el = wrap.parentElement ? wrap.parentElement.querySelector('.field-error') : null;
    if (el) el.remove();
  }

  /* ----------------------------------------------------------
     Desbloqueo de checkboxes al leer documentos
  ---------------------------------------------------------- */
  var docsRead = {};

  // Para cb-privacy necesita: privacidad + legal
  // Para cb-contract necesita: contrato
  var docRequirements = {
    'cb-privacy':  ['privacidad', 'legal'],
    'cb-contract': ['contrato']
  };

  document.querySelectorAll('.doc-link').forEach(function (link) {
    link.addEventListener('click', function () {
      var key      = link.dataset.key;
      var unlocks  = link.dataset.unlocks;
      docsRead[key] = true;

      // Comprobar si todos los docs requeridos para ese checkbox están leídos
      var required = docRequirements[unlocks] || [];
      var allRead  = required.every(function (k) { return docsRead[k]; });

      if (allRead) {
        var cb   = document.getElementById(unlocks);
        var hint = document.getElementById('hint-' + unlocks.replace('cb-', ''));
        if (cb)   { cb.disabled = false; }
        if (hint) { hint.classList.add('hidden'); }
      }
    });
  });

  var FREE_DOMAINS = [
    'gmail.com','googlemail.com','hotmail.com','hotmail.es','outlook.com','outlook.es',
    'live.com','live.es','yahoo.com','yahoo.es','icloud.com','me.com','mac.com',
    'aol.com','protonmail.com','proton.me','tutanota.com','gmx.com','gmx.es',
    'yandex.com','mail.com','zoho.com'
  ];

  function isValidEmail(v) {
    if (!v) return false;
    if (!/^[a-zA-Z0-9]([a-zA-Z0-9._%+\-]*[a-zA-Z0-9])?@[a-zA-Z0-9]([a-zA-Z0-9\-]*[a-zA-Z0-9])?(\.[a-zA-Z0-9]([a-zA-Z0-9\-]*[a-zA-Z0-9])?)+$/.test(v)) return false;
    if (v.indexOf('..') !== -1) return false;
    return true;
  }

  function isCorporateEmail(v) {
    var domain = (v.split('@')[1] || '').toLowerCase();
    return domain !== '' && FREE_DOMAINS.indexOf(domain) === -1;
  }

  function isValidCIF(v) {
    if (!v) return false;
    var val = v.trim().toUpperCase().replace(/[\s\-]/g, '');
    return /^[ABCDEFGHJNPQRSUVW]\d{7}[0-9A-J]$/i.test(val);
  }

  /* ----------------------------------------------------------
     Sector buscador
  ---------------------------------------------------------- */
  var sectorInput    = document.getElementById('sector-input');
  var sectorHidden   = document.getElementById('sector');
  var sectorDropdown = document.getElementById('sector-dropdown');

  if (sectorInput && sectorDropdown) {
    var allItems = sectorDropdown.querySelectorAll('li');

    function filterSector(query) {
      var q = query.toLowerCase();
      var visible = 0;
      allItems.forEach(function (li) {
        var match = li.dataset.value.toLowerCase().indexOf(q) !== -1;
        li.style.display = match ? '' : 'none';
        if (match) visible++;
      });
      return visible;
    }

    sectorInput.addEventListener('focus', function () {
      filterSector(sectorInput.value);
      sectorDropdown.hidden = false;
    });

    sectorInput.addEventListener('input', function () {
      sectorHidden.value = '';
      var visible = filterSector(sectorInput.value);
      sectorDropdown.hidden = visible === 0;
      clearError(sectorInput);
    });

    sectorDropdown.addEventListener('mousedown', function (e) {
      var li = e.target.closest('li');
      if (!li) return;
      e.preventDefault();
      sectorInput.value  = li.dataset.value;
      sectorHidden.value = li.dataset.value;
      sectorDropdown.hidden = true;
      clearError(sectorInput);
    });

    document.addEventListener('click', function (e) {
      if (!sectorInput.contains(e.target) && !sectorDropdown.contains(e.target)) {
        sectorDropdown.hidden = true;
        // Si lo que escribió no coincide exactamente, limpiar
        if (sectorHidden.value === '' && sectorInput.value !== '') {
          sectorInput.value = '';
        }
      }
    });

    sectorInput.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') { sectorDropdown.hidden = true; }
    });
  }

  /* ----------------------------------------------------------
     Step 1: validar todos los campos antes de avanzar
  ---------------------------------------------------------- */
  function validateStep1() {
    var ok = true;
    var nombre  = document.getElementById('nombre');
    var email   = document.getElementById('email');
    var empresa = document.getElementById('empresa');
    var cif     = document.getElementById('cif');

    clearError(nombre);
    clearError(email);
    clearError(empresa);
    clearError(cif);
    if (sectorInput) clearError(sectorInput);

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
    } else if (!isCorporateEmail(email.value.trim())) {
      showError(email, 'Usa tu email corporativo, no un email personal (Gmail, Hotmail…).');
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
    if (sectorHidden && !sectorHidden.value) {
      showError(sectorInput, 'Selecciona un sector de la lista.');
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
     Toggle mensual / anual
  ---------------------------------------------------------- */
  if (billingToggleInput) {
    billingToggleInput.addEventListener('change', function () {
      var isAnnual = this.checked;
      if (lblMonthly) lblMonthly.classList.toggle('active', !isAnnual);
      if (lblAnnual)  lblAnnual.classList.toggle('active', isAnnual);
      if (billingHidden) billingHidden.value = isAnnual ? 'annual' : 'monthly';
      planCards.forEach(function (card) {
        var val = card.querySelector('.plan-price-val');
        if (val) val.textContent = isAnnual ? card.dataset.annual : card.dataset.monthly;
      });
    });
    if (lblMonthly) lblMonthly.addEventListener('click', function () {
      billingToggleInput.checked = false;
      billingToggleInput.dispatchEvent(new Event('change'));
    });
    if (lblAnnual) lblAnnual.addEventListener('click', function () {
      billingToggleInput.checked = true;
      billingToggleInput.dispatchEvent(new Event('change'));
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
     Blur en tiempo real paso 1
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
      } else if (cfg.id === 'email' && !isCorporateEmail(val)) {
        showError(field, 'Usa tu email corporativo, no un email personal (Gmail, Hotmail…).');
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
      if (planError) { planError.textContent = 'Selecciona un plan para continuar.'; planError.style.display = 'block'; }
      ok = false;
    }

    // Checkbox política de privacidad
    var cbPrivacy  = form.querySelector('[name="acceptTermsAndPrivacy"]');
    var cbContract = form.querySelector('[name="acceptCompanyAdminContract"]');

    if (cbPrivacy && !cbPrivacy.checked) {
      showCheckboxError(cbPrivacy.closest('.form-checkbox'), 'Debes aceptar la política de privacidad y los términos de uso.');
      ok = false;
    } else if (cbPrivacy) {
      clearCheckboxError(cbPrivacy.closest('.form-checkbox'));
    }

    if (cbContract && !cbContract.checked) {
      showCheckboxError(cbContract.closest('.form-checkbox'), 'Debes aceptar el contrato de administrador para continuar.');
      ok = false;
    } else if (cbContract) {
      clearCheckboxError(cbContract.closest('.form-checkbox'));
    }

    if (!ok) { e.preventDefault(); return; }

    var submitBtn = form.querySelector('[type="submit"]');
    if (submitBtn) { submitBtn.disabled = true; submitBtn.textContent = 'Creando tu canal…'; }
  });

  /* ----------------------------------------------------------
     Si PHP devuelve errores de paso 2, mostrar paso 2 directamente
  ---------------------------------------------------------- */
  var step2HasError = (planError && planError.textContent.trim()) ||
    form.querySelector('[name="acceptTermsAndPrivacy"]~.field-error') ||
    form.querySelector('[name="acceptCompanyAdminContract"]~.field-error') ||
    document.querySelector('[data-step2-error]');

  if (step2HasError) {
    if (step1) step1.style.display = 'none';
    if (step2) step2.style.display = 'block';
    if (planError && planError.textContent.trim()) planError.style.display = 'block';
  }

})();
