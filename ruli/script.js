// Search functionality
const searchBox = document.querySelector('.search-box');
const contactCards = document.querySelectorAll('.contact-card');

searchBox.addEventListener('input', (e) => {
    const searchTerm = e.target.value.toLowerCase();
    
    contactCards.forEach(card => {
        const name = card.querySelector('h3').textContent.toLowerCase();
        const info = card.querySelector('p').textContent.toLowerCase();
        
        if (name.includes(searchTerm) || info.includes(searchTerm)) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
});

// Contact card click handler
contactCards.forEach(card => {
    card.addEventListener('click', () => {
        contactCards.forEach(c => c.style.backgroundColor = '#eee');
        card.style.backgroundColor = '#ddd';
    });
});

// Button click handlers
document.querySelector('.next-btn').addEventListener('click', () => {
    alert('Lanjut ke halaman berikutnya');
});

document.querySelector('.add-btn').addEventListener('click', () => {
    alert('Tambah nomor tujuan baru');
});