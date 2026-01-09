(() => {
  const forms = document.querySelectorAll('[data-signup-form]');
  const messageEls = document.querySelectorAll('[data-signup-message]');
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const setMessage = (text, variant = 'success') => {
    messageEls.forEach((el) => {
      el.textContent = text;
      el.dataset.variant = variant;
      el.hidden = false;
      if (!prefersReducedMotion) {
        el.animate([{ opacity: 0 }, { opacity: 1 }], { duration: 220, fill: 'forwards' });
      }
    });
  };

  const isValidEmail = (value) =>
    /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(String(value).trim());

  forms.forEach((form) => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      const input = form.querySelector('input[type="email"]');
      const email = input?.value ?? '';

      if (!isValidEmail(email)) {
        input?.focus();
        setMessage('Please enter a valid email address to join the beta.', 'error');
        return;
      }

      setMessage('Thanks! You are on the list for the C++ beta.', 'success');
      form.reset();
    });
  });
})();



