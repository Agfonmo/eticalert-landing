/* ============================================================
   EticAlert — registro.js
   Client-side form validation for registro.php
   ============================================================ */

(function () {
  'use strict';

  const form = document.getElementById('registro-form');
  if (!form) return;

  /* ----------------------------------------------------------
     Helpers
  ---------------------------------------------------------- */
  function showError(field, message) {
    field.classList.add('error');
    let errorEl = field.parentElement.querySelector('.field-error');
    if (!errorEl) {
      errorEl = document.createElement('p');
      errorEl.className = 'field-error';
      field.parentElement.appendChild(errorEl);
    }
    errorEl.textContent = message;
  }

  function clearError(field) {
    field.classList.remove('error');
    const errorEl = field.parentElement.querySelector('.field-error');
    if (errorEl) errorEl.remove();
  }

  function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  function isValidPhone(phone) {
    if (!phone) return true; // optional
    return /^[\d\s\+\-\(\)]{7,15}$/.test(phone);
  }

  /* ----------------------------------------------------------
     Field-level validation
  ---------------------------------------------------------- */
  const fields = form.querySelectorAll('input, select');
  fields.forEach((field) => {
    field.addEventListener('blur', () => validateField(field));
    field.addEventListener('input', () => {
      if (field.classList.contains('error')) validateField(field);
    });
  });

  function validateField(field) {
    const name = field.name;
    const value = field.value.trim();

    clearError(field);

    if (name === 'nombre' && !value) {
      showError(field, 'El nombre es obligatorio.');
      return false;
    }

    if (name === 'email') {
      if (!value) {
        showError(field, 'El email es obligatorio.');
        return false;
      }
      if (!isValidEmail(value)) {
        showError(field, 'Introduce un email válido.');
        return false;
      }
    }

    if (name === 'empresa' && !value) {
      showError(field, 'El nombre de empresa es obligatorio.');
      return false;
    }

    if (name === 'empleados' && !value) {
      showError(field, 'Selecciona el número de empleados.');
      return false;
    }

    if (name === 'telefono' && value && !isValidPhone(value)) {
      showError(field, 'Introduce un teléfono válido.');
      return false;
    }

    return true;
  }

  /* ----------------------------------------------------------
     Form submit
  ---------------------------------------------------------- */
  form.addEventListener('submit', (e) => {
    let valid = true;

    // Validate all required fields
    const requiredFields = form.querySelectorAll('[required]');
    requiredFields.forEach((field) => {
      if (!validateField(field)) valid = false;
    });

    // Validate checkbox
    const checkbox = form.querySelector('[name="privacidad"]');
    if (checkbox && !checkbox.checked) {
      valid = false;
      let errorEl = checkbox.closest('.form-checkbox').querySelector('.field-error');
      if (!errorEl) {
        errorEl = document.createElement('p');
        errorEl.className = 'field-error';
        checkbox.closest('.form-checkbox').appendChild(errorEl);
      }
      errorEl.textContent = 'Debes aceptar la política de privacidad para continuar.';
    } else if (checkbox) {
      const errorEl = checkbox.closest('.form-checkbox').querySelector('.field-error');
      if (errorEl) errorEl.remove();
    }

    if (!valid) {
      e.preventDefault();
      // Scroll to first error
      const firstError = form.querySelector('.error');
      if (firstError) {
        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        firstError.focus();
      }
      return;
    }

    // Show loading state
    const submitBtn = form.querySelector('[type="submit"]');
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.textContent = 'Enviando...';
    }
  });

})();
