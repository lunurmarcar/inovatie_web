/**
 * Hero Slider (autónomo, sin dependencias)
 * - Auto-advance con intervalo configurable
 * - Flechas (prev/next)
 * - Dots (ir a slide)
 * - Reinicia timer al interactuar
 * - Pausa en hover (desktop) y al perder visibilidad de la pestaña
 * - Soporte táctil básico (swipe izquierda/derecha)
 */

(function () {
  'use strict';

  function clamp(num, min, max) {
    return Math.max(min, Math.min(max, num));
  }

  function initHeroSlider(root, options) {
    if (!root) return;

    const cfg = Object.assign(
      {
        intervalMs: 7000, // tiempo entre slides
        transitionLockMs: 650, // evita doble click durante transición
        pauseOnHover: true,
        swipeThresholdPx: 40,
      },
      options || {}
    );

    const slides = Array.from(root.querySelectorAll('.hero-slide'));
    const dots = Array.from(root.querySelectorAll('[data-hero-dot]'));
    const btnPrev = root.querySelector('[data-hero-prev]');
    const btnNext = root.querySelector('[data-hero-next]');

    if (slides.length === 0) return;

    let index = 0;
    let timerId = null;
    let locked = false;
    let paused = false;

    // Detecta slide activo inicial
    const initial = slides.findIndex((s) => s.classList.contains('is-active'));
    if (initial >= 0) index = initial;

    // Normaliza dots si existen
    function setActiveDot(i) {
      if (!dots.length) return;
      dots.forEach((d) => d.classList.remove('is-active'));
      const dot = dots[i];
      if (dot) dot.classList.add('is-active');
    }

    function setActiveSlide(i) {
      slides.forEach((s) => s.classList.remove('is-active'));
      const slide = slides[i];
      if (slide) slide.classList.add('is-active');
      setActiveDot(i);
    }

    function lockBriefly() {
      locked = true;
      window.setTimeout(() => {
        locked = false;
      }, cfg.transitionLockMs);
    }

    function goTo(i, reason) {
      if (locked) return;

      const nextIndex = clamp(i, 0, slides.length - 1);
      if (nextIndex === index) {
        // Aun así reiniciamos timer si el usuario interactuó
        if (reason === 'user') resetTimer();
        return;
      }

      index = nextIndex;
      setActiveSlide(index);
      lockBriefly();

      // Si fue interacción del usuario, reiniciar timer (tu requisito)
      if (reason === 'user') resetTimer();
    }

    function next(reason) {
      if (locked) return;
      const i = (index + 1) % slides.length;
      goTo(i, reason);
    }

    function prev(reason) {
      if (locked) return;
      const i = (index - 1 + slides.length) % slides.length;
      goTo(i, reason);
    }

    function clearTimer() {
      if (timerId) {
        window.clearInterval(timerId);
        timerId = null;
      }
    }

    function startTimer() {
      clearTimer();
      if (paused) return;
      timerId = window.setInterval(() => {
        next('auto');
      }, cfg.intervalMs);
    }

    function resetTimer() {
      // Reinicio explícito al interactuar
      startTimer();
    }

    function pause() {
      paused = true;
      clearTimer();
    }

    function resume() {
      paused = false;
      startTimer();
    }

    // Inicializa estado
    setActiveSlide(index);
    startTimer();

    // Flechas
    if (btnNext) {
      btnNext.addEventListener('click', () => next('user'));
    }
    if (btnPrev) {
      btnPrev.addEventListener('click', () => prev('user'));
    }

    // Dots
    if (dots.length) {
      dots.forEach((dot) => {
        dot.addEventListener('click', () => {
          const raw = dot.getAttribute('data-hero-dot');
          const i = Number(raw);
          if (!Number.isNaN(i)) goTo(i, 'user');
        });
      });
    }

    // Teclado (accesibilidad)
    root.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowRight') next('user');
      if (e.key === 'ArrowLeft') prev('user');
    });
    // Para que reciba focus con teclado si lo deseas
    if (!root.hasAttribute('tabindex')) root.setAttribute('tabindex', '0');

    // Pausa al cambiar de pestaña
    document.addEventListener('visibilitychange', () => {
      if (document.hidden) pause();
      else resume();
    });

    // Pausa al hover (desktop)
    if (cfg.pauseOnHover) {
      root.addEventListener('mouseenter', () => pause());
      root.addEventListener('mouseleave', () => resume());
      root.addEventListener('focusin', () => pause());
      root.addEventListener('focusout', () => resume());
    }

    // Swipe táctil básico (móvil/tablet)
    let touchStartX = null;
    let touchStartY = null;
    let touchMoved = false;

    root.addEventListener(
      'touchstart',
      (e) => {
        if (!e.touches || e.touches.length !== 1) return;
        touchMoved = false;
        touchStartX = e.touches[0].clientX;
        touchStartY = e.touches[0].clientY;
      },
      { passive: true }
    );

    root.addEventListener(
      'touchmove',
      (e) => {
        if (touchStartX === null || touchStartY === null) return;
        touchMoved = true;
      },
      { passive: true }
    );

    root.addEventListener(
      'touchend',
      (e) => {
        if (touchStartX === null || touchStartY === null) return;

        const touch = e.changedTouches && e.changedTouches[0] ? e.changedTouches[0] : null;
        if (!touch) {
          touchStartX = null;
          touchStartY = null;
          return;
        }

        const dx = touch.clientX - touchStartX;
        const dy = touch.clientY - touchStartY;

        touchStartX = null;
        touchStartY = null;

        // Si fue scroll vertical, no actuar
        if (Math.abs(dy) > Math.abs(dx)) return;

        // Umbral para swipe real
        if (!touchMoved) return;
        if (Math.abs(dx) < cfg.swipeThresholdPx) return;

        if (dx < 0) next('user');
        else prev('user');
      },
      { passive: true }
    );
  }

  // Auto-init al cargar DOM
  document.addEventListener('DOMContentLoaded', () => {
    const root = document.getElementById('hero-slider');
    if (!root) return;

    initHeroSlider(root, {
      intervalMs: 7000, // aquí ajustas el tiempo si quieres
    });
  });
})();
