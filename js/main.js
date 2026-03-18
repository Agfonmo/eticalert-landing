/* ============================================================
   EticAlert — main.js
   Nav, scroll animations, cookie banner, FAQ accordion,
   pricing toggle, sticky header, theme toggle
   ============================================================ */

(function () {
  'use strict';

  /* ----------------------------------------------------------
     0. THEME TOGGLE (dark ↔ light)
  ---------------------------------------------------------- */
  var html         = document.documentElement;
  var toggleBtns   = document.querySelectorAll('.theme-toggle');
  var toggleLabels = document.querySelectorAll('.theme-toggle-label');

  function applyTheme(theme) {
    html.setAttribute('data-theme', theme);
    localStorage.setItem('theme', theme);
    toggleLabels.forEach(function(lbl) {
      lbl.textContent = theme === 'dark' ? 'Modo claro' : 'Modo oscuro';
    });
    toggleBtns.forEach(function(btn) {
      btn.setAttribute('aria-label', theme === 'dark' ? 'Cambiar a modo claro' : 'Cambiar a modo oscuro');
    });
  }

  toggleBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      var current = html.getAttribute('data-theme') || 'dark';
      applyTheme(current === 'dark' ? 'light' : 'dark');
    });
  });

  // Sincroniza el label con el tema ya establecido por el script anti-flash del head
  (function() {
    var current = html.getAttribute('data-theme') || 'dark';
    toggleLabels.forEach(function(lbl) {
      lbl.textContent = current === 'dark' ? 'Modo claro' : 'Modo oscuro';
    });
  })();

  /* ----------------------------------------------------------
     1. STICKY HEADER
  ---------------------------------------------------------- */
  const header = document.querySelector('.site-header');

  if (header) {
    const onScroll = () => {
      if (window.scrollY > 20) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // run once on load
  }

  /* ----------------------------------------------------------
     2. MOBILE NAV TOGGLE
  ---------------------------------------------------------- */
  const hamburger = document.querySelector('.nav-hamburger');
  const mobileNav = document.querySelector('.nav-mobile');
  const navOverlay = document.querySelector('.nav-overlay');

  function openMobileNav() {
    hamburger && hamburger.classList.add('open');
    mobileNav && mobileNav.classList.add('open');
    navOverlay && navOverlay.classList.add('open');
    document.body.style.overflow = 'hidden';
    hamburger && hamburger.setAttribute('aria-expanded', 'true');
  }

  function closeMobileNav() {
    hamburger && hamburger.classList.remove('open');
    mobileNav && mobileNav.classList.remove('open');
    navOverlay && navOverlay.classList.remove('open');
    document.body.style.overflow = '';
    hamburger && hamburger.setAttribute('aria-expanded', 'false');
  }

  if (hamburger) {
    hamburger.addEventListener('click', () => {
      const isOpen = mobileNav && mobileNav.classList.contains('open');
      isOpen ? closeMobileNav() : openMobileNav();
    });
  }

  if (navOverlay) {
    navOverlay.addEventListener('click', closeMobileNav);
  }

  // Close on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMobileNav();
  });

  // Close when a mobile link is clicked
  const mobileLinks = document.querySelectorAll('.nav-mobile a');
  mobileLinks.forEach((link) => {
    link.addEventListener('click', closeMobileNav);
  });

  /* ----------------------------------------------------------
     3. SCROLL ANIMATIONS (IntersectionObserver)
  ---------------------------------------------------------- */
  const fadeEls = document.querySelectorAll('.fade-up');

  if (fadeEls.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );
    fadeEls.forEach((el) => observer.observe(el));
  } else {
    // Fallback: show all immediately
    fadeEls.forEach((el) => el.classList.add('visible'));
  }

  /* ----------------------------------------------------------
     4. FAQ ACCORDION
  ---------------------------------------------------------- */
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach((item) => {
    const btn = item.querySelector('.faq-question');
    if (!btn) return;

    btn.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');

      // Close all others
      faqItems.forEach((other) => {
        if (other !== item) other.classList.remove('open');
      });

      // Toggle this one
      item.classList.toggle('open', !isOpen);
    });

    // Keyboard accessibility
    btn.setAttribute('aria-expanded', 'false');
    item.addEventListener('click', () => {
      btn.setAttribute('aria-expanded', item.classList.contains('open').toString());
    });
  });

  /* ----------------------------------------------------------
     5. COOKIE BANNER
  ---------------------------------------------------------- */
  const COOKIE_KEY = 'eticalert_cookies_accepted';
  const banner = document.querySelector('.cookie-banner');

  if (banner) {
    const accepted = localStorage.getItem(COOKIE_KEY);
    if (!accepted) {
      // Show after brief delay
      setTimeout(() => banner.classList.add('visible'), 600);
    }

    const btnAccept = banner.querySelector('.cookie-accept');
    const btnNecessary = banner.querySelector('.cookie-necessary');

    const hideBanner = () => {
      banner.classList.remove('visible');
    };

    if (btnAccept) {
      btnAccept.addEventListener('click', () => {
        localStorage.setItem(COOKIE_KEY, 'all');
        hideBanner();
      });
    }

    if (btnNecessary) {
      btnNecessary.addEventListener('click', () => {
        localStorage.setItem(COOKIE_KEY, 'necessary');
        hideBanner();
      });
    }
  }

  /* ----------------------------------------------------------
     6. PRICING TABLE COMPARISON TOGGLE
  ---------------------------------------------------------- */
  const comparisonBtn = document.querySelector('.comparison-toggle-btn');
  const comparisonBody = document.querySelector('.comparison-table-body');

  if (comparisonBtn && comparisonBody) {
    comparisonBtn.addEventListener('click', () => {
      const isOpen = comparisonBody.classList.contains('open');
      comparisonBody.classList.toggle('open');
      const icon = comparisonBtn.querySelector('.comparison-chevron');
      if (icon) icon.style.transform = isOpen ? '' : 'rotate(180deg)';
      comparisonBtn.querySelector('span').textContent = isOpen
        ? 'Ver comparativa completa'
        : 'Ocultar comparativa';
    });
  }

  /* ----------------------------------------------------------
     7. BILLING TOGGLE (mensual / anual) — precios.php
  ---------------------------------------------------------- */
  const billingToggle = document.getElementById('billing-toggle');
  const priceMonthly = document.querySelectorAll('[data-price-monthly]');
  const priceAnnual = document.querySelectorAll('[data-price-annual]');
  const labelMonthly = document.querySelector('.billing-label-monthly');
  const labelAnnual = document.querySelector('.billing-label-annual');

  if (billingToggle) {
    const updatePrices = () => {
      const isAnnual = billingToggle.checked;

      priceMonthly.forEach((el) => {
        el.style.display = isAnnual ? 'none' : '';
      });
      priceAnnual.forEach((el) => {
        el.style.display = isAnnual ? '' : 'none';
      });

      if (labelMonthly) labelMonthly.classList.toggle('active', !isAnnual);
      if (labelAnnual) labelAnnual.classList.toggle('active', isAnnual);
    };

    billingToggle.addEventListener('change', updatePrices);
    updatePrices(); // init
  }

  /* ----------------------------------------------------------
     8. BLOG CATEGORY FILTER
  ---------------------------------------------------------- */
  const filterBtns = document.querySelectorAll('.filter-btn');
  if (filterBtns.length) {
    filterBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        const filter = btn.dataset.filter;
        // Update active state
        filterBtns.forEach((b) => b.classList.remove('active'));
        btn.classList.add('active');
        // Show/hide cards
        document.querySelectorAll('.blog-card').forEach((card) => {
          if (filter === 'all' || card.dataset.category === filter) {
            card.style.display = '';
            card.style.opacity = '1';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  /* ----------------------------------------------------------
     9. SMOOTH SCROLL FOR ANCHOR LINKS
  ---------------------------------------------------------- */
  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href');
      if (href === '#') return;
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const offset = 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

})();
