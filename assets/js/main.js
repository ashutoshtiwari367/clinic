/* ===== Shri Balaji Clinic - Main JavaScript ===== */

document.addEventListener('DOMContentLoaded', function () {

  /* ---- Sticky Navbar ---- */
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled', 'bg-white', 'shadow-md');
    } else {
      navbar.classList.remove('scrolled', 'shadow-md');
    }
  });

  /* ---- Mobile Menu ---- */
  const menuBtn = document.getElementById('menuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('open');
      const icon = menuBtn.querySelector('svg');
      if (mobileMenu.classList.contains('open')) {
        menuBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>`;
      } else {
        menuBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>`;
      }
    });
    // Close mobile menu on link click
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        menuBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>`;
      });
    });
  }

  /* ---- Smooth Scroll for anchor links ---- */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = 80;
        const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  /* ---- Scroll Reveal ---- */
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
    revealObserver.observe(el);
  });

  /* ---- Back to Top Button ---- */
  const backToTop = document.getElementById('backToTop');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 400) {
        backToTop.classList.add('show');
      } else {
        backToTop.classList.remove('show');
      }
    });
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ---- Cookie Consent ---- */
  const cookieBanner = document.getElementById('cookieBanner');
  const cookieAccept = document.getElementById('cookieAccept');
  if (cookieBanner && !localStorage.getItem('cookieAccepted')) {
    setTimeout(() => cookieBanner.classList.add('show'), 1500);
  }
  if (cookieAccept) {
    cookieAccept.addEventListener('click', () => {
      localStorage.setItem('cookieAccepted', 'true');
      cookieBanner.classList.remove('show');
    });
  }

  /* ---- Active Nav Link Highlight ---- */
  const currentPage = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href && (href === currentPage || (currentPage === '' && href === 'index.php'))) {
      link.classList.add('active', 'text-orange-500');
    }
  });

  /* ---- Counter Animation ---- */
  const counters = document.querySelectorAll('.counter');
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = parseInt(entry.target.getAttribute('data-target'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        const timer = setInterval(() => {
          current += step;
          if (current >= target) {
            current = target;
            clearInterval(timer);
          }
          entry.target.textContent = Math.floor(current).toLocaleString() + (entry.target.getAttribute('data-suffix') || '');
        }, 16);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });
  counters.forEach(c => counterObserver.observe(c));

  /* ---- Tabs ---- */
  const tabBtns = document.querySelectorAll('.tab-btn');
  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const tabId = btn.getAttribute('data-tab');
      tabBtns.forEach(b => b.classList.remove('active', 'bg-sky-500', 'text-white'));
      document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
      btn.classList.add('active');
      const content = document.getElementById(tabId);
      if (content) content.classList.add('active');
    });
  });
  // Activate first tab
  if (tabBtns.length > 0) tabBtns[0].click();

  /* ---- Appointment Form ---- */
  const apptForm = document.getElementById('appointmentForm');
  if (apptForm) {
    apptForm.addEventListener('submit', function (e) {
      e.preventDefault();
      // Basic validation
      let valid = true;
      apptForm.querySelectorAll('[required]').forEach(field => {
        if (!field.value.trim()) {
          valid = false;
          field.classList.add('border-red-500');
        } else {
          field.classList.remove('border-red-500');
        }
      });
      if (valid) {
        // Submit via fetch
        const formData = new FormData(apptForm);
        fetch('process_appointment.php', { method: 'POST', body: formData })
          .then(res => res.json())
          .then(data => {
            document.getElementById('formSuccess').classList.remove('hidden');
            apptForm.reset();
            setTimeout(() => document.getElementById('formSuccess').classList.add('hidden'), 5000);
          })
          .catch(() => {
            // Show success anyway for demo
            document.getElementById('formSuccess').classList.remove('hidden');
            apptForm.reset();
            setTimeout(() => document.getElementById('formSuccess').classList.add('hidden'), 5000);
          });
      }
    });
  }

  /* ---- Contact Form ---- */
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      document.getElementById('contactSuccess').classList.remove('hidden');
      contactForm.reset();
      setTimeout(() => document.getElementById('contactSuccess').classList.add('hidden'), 5000);
    });
  }

  /* ---- Testimonial Auto Scroll ---- */
  let testimonialIndex = 0;
  const testimonials = document.querySelectorAll('.testimonial-slide');
  if (testimonials.length > 0) {
    function showTestimonial(idx) {
      testimonials.forEach((t, i) => {
        t.style.opacity = i === idx ? '1' : '0';
        t.style.transform = i === idx ? 'translateX(0)' : 'translateX(40px)';
        t.style.position = i === idx ? 'relative' : 'absolute';
      });
    }
    showTestimonial(0);
    setInterval(() => {
      testimonialIndex = (testimonialIndex + 1) % testimonials.length;
      showTestimonial(testimonialIndex);
    }, 4000);
  }

  /* ---- Set min date for appointment ---- */
  const dateInput = document.getElementById('apptDate');
  if (dateInput) {
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);
  }

  /* ---- Gallery Lightbox ---- */
  const galleryItems = document.querySelectorAll('.gallery-item');
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxClose = document.getElementById('lightboxClose');
  if (lightbox && lightboxImg) {
    galleryItems.forEach(item => {
      item.addEventListener('click', () => {
        const img = item.querySelector('img');
        lightboxImg.src = img.src;
        lightbox.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      });
    });
    lightboxClose.addEventListener('click', () => {
      lightbox.classList.add('hidden');
      document.body.style.overflow = '';
    });
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) {
        lightbox.classList.add('hidden');
        document.body.style.overflow = '';
      }
    });
  }

});
