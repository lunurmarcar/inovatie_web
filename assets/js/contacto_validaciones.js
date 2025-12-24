// assets/js/modules/contacto_validaciones.js
(function () {
  'use strict';

  // ===== Helpers de sanitización / validación =====
  function hasHtmlTags(value) {
    // Detecta tags tipo <script>, <b>, </div>, etc.
    return /<[^>]*>/.test(value);
  }

  function stripControlChars(value) {
    // Quita caracteres de control no imprimibles (excepto saltos de línea y tab)
    return value.replace(/[\u0000-\u0008\u000B\u000C\u000E-\u001F\u007F]/g, '');
  }

  function isValidEmail(email) {
    // Validación razonable (no perfecta, pero robusta para frontend)
    // Requiere: algo@algo.algo (TLD >= 2)
    // No permite espacios
    const re = /^[^\s@]+@[^\s@]+\.[A-Za-z]{2,}$/;
    return re.test(email.trim());
  }

  function onlyDigits(value) {
    return value.replace(/\D+/g, '');
  }

  function setFieldError(input, message) {
    input.classList.add('is-invalid');

    let feedback = input.parentNode.querySelector('.invalid-feedback');
    if (!feedback) {
      feedback = document.createElement('div');
      feedback.className = 'invalid-feedback';
      input.parentNode.appendChild(feedback);
    }
    feedback.textContent = message;
  }

  function clearFieldError(input) {
    input.classList.remove('is-invalid');

    const feedback = input.parentNode.querySelector('.invalid-feedback');
    if (feedback) feedback.textContent = '';
  }

  function validateTextNoHtml(input, label, minLen) {
    const raw = (input.value || '').trim();
    const cleaned = stripControlChars(raw);

    input.value = cleaned;

    if (!cleaned) {
      setFieldError(input, `${label} es obligatorio.`);
      return false;
    }

    if (minLen && cleaned.length < minLen) {
      setFieldError(input, `${label} debe tener al menos ${minLen} caracteres.`);
      return false;
    }

    if (hasHtmlTags(cleaned)) {
      setFieldError(input, `${label} no debe contener etiquetas HTML o código.`);
      return false;
    }

    clearFieldError(input);
    return true;
  }

  // ===== Inicialización =====
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formContacto');
    if (!form) return;

    const inputNombre = form.querySelector('input[name="nombre"]');
    const inputEmail = form.querySelector('input[name="email"]');
    const inputTelefono = form.querySelector('input[name="telefono"]');
    const textareaMensaje = form.querySelector('textarea[name="mensaje"]');
    const inputEmpresa = form.querySelector('input[name="empresa"]'); // honeypot

    // 1) Teléfono: forzar solo dígitos mientras escribe/pega
    if (inputTelefono) {
      inputTelefono.addEventListener('input', function () {
        const before = inputTelefono.value;
        const digits = onlyDigits(before);
        if (before !== digits) inputTelefono.value = digits;
      });

      inputTelefono.addEventListener('paste', function () {
        setTimeout(function () {
          inputTelefono.value = onlyDigits(inputTelefono.value);
        }, 0);
      });
    }

    // 2) Validaciones en blur (cuando salen del campo)
    if (inputNombre) {
      inputNombre.addEventListener('blur', function () {
        validateTextNoHtml(inputNombre, 'Nombre completo', 3);
      });
    }

    if (inputEmail) {
      inputEmail.addEventListener('blur', function () {
        const email = (inputEmail.value || '').trim();
        inputEmail.value = stripControlChars(email);

        if (!inputEmail.value) {
          setFieldError(inputEmail, 'Correo electrónico es obligatorio.');
          return;
        }
        if (hasHtmlTags(inputEmail.value)) {
          setFieldError(inputEmail, 'Correo electrónico no debe contener etiquetas HTML.');
          return;
        }
        if (!isValidEmail(inputEmail.value)) {
          setFieldError(inputEmail, 'Ingresa un correo válido (ej. nombre@dominio.com).');
          return;
        }
        clearFieldError(inputEmail);
      });
    }

    if (textareaMensaje) {
      textareaMensaje.addEventListener('blur', function () {
        // Permite signos normales, pero no HTML ni control chars raros
        const raw = (textareaMensaje.value || '').trim();
        const cleaned = stripControlChars(raw);
        textareaMensaje.value = cleaned;

        if (!cleaned) {
          setFieldError(textareaMensaje, 'Mensaje es obligatorio.');
          return;
        }
        if (cleaned.length < 10) {
          setFieldError(textareaMensaje, 'Mensaje debe tener al menos 10 caracteres.');
          return;
        }
        if (hasHtmlTags(cleaned)) {
          setFieldError(textareaMensaje, 'Mensaje no debe contener etiquetas HTML o código.');
          return;
        }

        // Bloquea intentos comunes de inyección básica (muy típico)
        const suspicious = /(javascript:|data:|onerror\s*=|onload\s*=|<script\b)/i;
        if (suspicious.test(cleaned)) {
          setFieldError(textareaMensaje, 'Mensaje contiene contenido no permitido.');
          return;
        }

        clearFieldError(textareaMensaje);
      });
    }

    if (inputTelefono) {
      inputTelefono.addEventListener('blur', function () {
        const tel = onlyDigits((inputTelefono.value || '').trim());
        inputTelefono.value = tel;

        if (!tel) {
          setFieldError(inputTelefono, 'Teléfono es obligatorio.');
          return;
        }
        // Ajusta el mínimo según tu necesidad (ej. 10 para MX)
        if (tel.length < 10) {
          setFieldError(inputTelefono, 'Teléfono debe tener al menos 10 dígitos.');
          return;
        }
        // Ajusta máximo si quieres (ej. 15)
        if (tel.length > 15) {
          setFieldError(inputTelefono, 'Teléfono no debe exceder 15 dígitos.');
          return;
        }
        clearFieldError(inputTelefono);
      });
    }

    // 3) Validación final al enviar
    form.addEventListener('submit', function (e) {
      // Honeypot: si está lleno, no enviar (y evitamos submit)
      if (inputEmpresa && (inputEmpresa.value || '').trim() !== '') {
        e.preventDefault();
        return; // silencio: es bot o spam
      }

      let ok = true;

      if (inputNombre) {
        ok = validateTextNoHtml(inputNombre, 'Nombre completo', 3) && ok;
      }

      if (inputEmail) {
        const email = stripControlChars((inputEmail.value || '').trim());
        inputEmail.value = email;

        if (!email) {
          setFieldError(inputEmail, 'Correo electrónico es obligatorio.');
          ok = false;
        } else if (hasHtmlTags(email)) {
          setFieldError(inputEmail, 'Correo electrónico no debe contener etiquetas HTML.');
          ok = false;
        } else if (!isValidEmail(email)) {
          setFieldError(inputEmail, 'Ingresa un correo válido (ej. nombre@dominio.com).');
          ok = false;
        } else {
          clearFieldError(inputEmail);
        }
      }

      if (inputTelefono) {
        const tel = onlyDigits((inputTelefono.value || '').trim());
        inputTelefono.value = tel;

        if (!tel) {
          setFieldError(inputTelefono, 'Teléfono es obligatorio.');
          ok = false;
        } else if (tel.length < 10) {
          setFieldError(inputTelefono, 'Teléfono debe tener al menos 10 dígitos.');
          ok = false;
        } else if (tel.length > 15) {
          setFieldError(inputTelefono, 'Teléfono no debe exceder 15 dígitos.');
          ok = false;
        } else {
          clearFieldError(inputTelefono);
        }
      }

      if (textareaMensaje) {
        const msg = stripControlChars((textareaMensaje.value || '').trim());
        textareaMensaje.value = msg;

        if (!msg) {
          setFieldError(textareaMensaje, 'Mensaje es obligatorio.');
          ok = false;
        } else if (msg.length < 10) {
          setFieldError(textareaMensaje, 'Mensaje debe tener al menos 10 caracteres.');
          ok = false;
        } else if (hasHtmlTags(msg)) {
          setFieldError(textareaMensaje, 'Mensaje no debe contener etiquetas HTML o código.');
          ok = false;
        } else {
          const suspicious = /(javascript:|data:|onerror\s*=|onload\s*=|<script\b)/i;
          if (suspicious.test(msg)) {
            setFieldError(textareaMensaje, 'Mensaje contiene contenido no permitido.');
            ok = false;
          } else {
            clearFieldError(textareaMensaje);
          }
        }
      }

      // Si hay errores: cancela el submit
      if (!ok) {
        e.preventDefault();
        return;
      }

      // Si todo OK:
      // - NO usamos form.submit() para que el navegador respete target="_blank"
      // - Opcional: reforzar target por si alguien lo quitó del HTML
      form.setAttribute('target', '_blank');

      // Y dejamos que el submit normal continúe (no preventDefault)
    });
  });
})();
