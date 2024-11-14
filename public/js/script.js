// Mendapatkan elemen-elemen yang diperlukan
const searchBox = document.querySelector('.search-box');
const contactCards = document.querySelectorAll('.contact-card');
const nextBtn = document.querySelector('.next-btn');

// Tambahkan log untuk memastikan elemen diambil dengan benar
console.log("searchBox:", searchBox);
console.log("contactCards:", contactCards);
console.log("nextBtn:", nextBtn);

// Fungsi pencarian kontak
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

// Menambahkan event listener untuk setiap kartu kontak
contactCards.forEach(card => {
    card.addEventListener('click', () => {
        contactCards.forEach(c => {
            c.style.backgroundColor = '#eee';
            c.dataset.selected = 'false'; // Hapus seleksi dari semua kartu
        });
        card.style.backgroundColor = '#ddd';
        card.dataset.selected = 'true'; // Tandai kartu yang dipilih
        nextBtn.disabled = false; // Aktifkan tombol berikutnya ketika kontak dipilih
    });
});

// Event listener untuk tombol "Berikutnya"
nextBtn.addEventListener('click', () => {
    const selectedCard = document.querySelector('.contact-card[data-selected="true"]');
    
    if (selectedCard) {
        // Jika ada kontak yang dipilih, navigasi ke halaman berikutnya
        console.log("Navigating to nominal.html");
        window.location.href = "{{route('nominal.blade.php')}}";
    } else {
        // Jika tidak ada kontak yang dipilih, tampilkan alert
        console.log("No contact selected, showing alert.");
        alert('Silakan pilih salah satu kontak terlebih dahulu.');
    }
});

// Event listener untuk tombol "Tambah Nomor Tujuan"
document.querySelector('.add-btn').addEventListener('click', () => {
    console.log("Navigating to tambahNomor.html");
    window.location.href = 'tambahNomor.html';
});
