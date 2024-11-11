// Format amount with dots as thousand separators
function formatAmount(amount) {
    return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// Remove dots and convert to number
function unformatAmount(amount) {
    return amount.replace(/\./g, "");
}

// Amount input handler
const amountInput = document.getElementById('amount');

amountInput.addEventListener('input', (e) => {
    let value = unformatAmount(e.target.value);
    value = value.replace(/\D/g, ""); // Remove non-digits
    e.target.value = formatAmount(value);
});

// Button handlers
document.querySelector('.next-btn').addEventListener('click', () => {
    // Handle next step of transfer process
    // This would typically involve form validation and navigation
    alert('Proses transfer akan dilanjutkan');
});

document.querySelector('.cancel-btn').addEventListener('click', () => {
    // Return to previous page
    window.history.back();
});

// Navigation handler from index.html
document.querySelector('.logout-btn').addEventListener('click', () => {
    // Handle logout
    alert('Anda akan keluar dari aplikasi');
});

document.querySelector('cancel-btn').addEventListener('click', () => {
    window.location.href = 'index.html';
});