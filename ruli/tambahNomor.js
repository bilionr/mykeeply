// Form handling
const form = document.querySelector('.add-contact-form');
const backBtn = document.querySelector('.back-btn');

// Back button handler
backBtn.addEventListener('click', () => {
    window.location.href = 'index.html';
});

// Form submission handler
form.addEventListener('submit', (e) => {
    e.preventDefault();
    
    const bank = document.getElementById('bank').value;
    const accountNumber = document.getElementById('account').value;
    
    // Basic validation
    if (!bank || !accountNumber) {
        alert('Silakan lengkapi semua field');
        return;
    }
    
    // You can add more validation here (e.g., account number format)
    if (!/^\d+$/.test(accountNumber)) {
        alert('Nomor rekening hanya boleh berisi angka');
        return;
    }
    
    // Here you would typically send this data to a server
    // For now, we'll just simulate success and redirect
    alert('Nomor tujuan berhasil ditambahkan');
    window.location.href = 'index.html';
});

// Sub-menu button handlers
document.querySelector('.send-btn').addEventListener('click', () => {
    window.location.href = 'index.html';
});

document.querySelector('.ask-btn').addEventListener('click', () => {
    // Handle ask button click
    alert('Fitur Minta sedang dalam pengembangan');
});

document.querySelector('.contact-btn').addEventListener('click', () => {
    // Handle contact button click
    alert('Fitur Kontak sedang dalam pengembangan');
});

document.querySelector('.transfer-history').addEventListener('click', () => {
    // Handle transfer history button click
    alert('Fitur Riwayat Transfer sedang dalam pengembangan');
});

// Logout button handler
document.querySelector('.logout-btn').addEventListener('click', () => {
    // Handle logout
    if (confirm('Apakah Anda yakin ingin keluar?')) {
        // Add logout logic here
        alert('Anda telah keluar dari sistem');
        // Redirect to login page
    }
});