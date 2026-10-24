
(function () {
  var form = document.getElementById('booking-form');
  if (!form) return;

  var totalEl = document.getElementById('trails-total');
  var successEl = document.getElementById('trails-confirmation');

  if (!successEl) {
    successEl = document.createElement('div');
    successEl.id = 'trails-confirmation';
    successEl.hidden = true;
    form.insertAdjacentElement('afterend', successEl);
  }
  successEl.setAttribute('role', 'status');

  var RATE = 350;
  var PRICES = {
    daily: RATE,
    monthly: RATE * 30 * 0.8
  };

  function formatRM(n) {
    return 'RM ' + n.toLocaleString('en-US');
  }

  function updateTotal() {
    var checked = form.querySelector('input[name="plan"]:checked');
    if (!checked || !totalEl) return;
    totalEl.textContent = 'Total: ' + formatRM(PRICES[checked.value]);
  }

  form.querySelectorAll('input[name="plan"]').forEach(function (radio) {
    radio.addEventListener('change', updateTotal);
  });
  updateTotal();

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    successEl.textContent = 'Booking berhasil! Kami akan menghubungi kamu segera.';
    successEl.hidden = false;
    form.reset();
    updateTotal();
    successEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  });
})();
