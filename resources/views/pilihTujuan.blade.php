@extends('layouts.app')

<body>

    <nav class="navbar">
        <img src="{{asset('images/mykeep.png')}}" alt="Logo" class="logo">
        <div class="nav-menu">
            <a href="#">BERANDA</a>
            <a href="#">PEMBAYARAN</a>
            <a href="#" class="active">TRANSFER</a>
        </div>
        <div class="user-menu">
            <i class="fas fa-bell notification" aria-label="Notification"></i>
            <i class="fas fa-user profile" aria-label="Profile"></i>
            <button class="logout-btn">Log Out</button>
        </div>
    </nav>

    <div class="sub-menu-container">
        <div class="sub-menu">
            <div class="menu-buttons">
                <button class="send-btn">Kirim</button>
                <button class="ask-btn">Minta</button>
                <button class="contact-btn">Kontak</button>
            </div>
            <button class="transfer-history">Riwayat Transfer</button>
        </div>
    </div>

    <main class="main-content">
        <h1>Kirim Uang</h1>
        <input type="text" class="search-box" placeholder="Nama, nomor telp">

        <div class="contact-list">
            <a href="{{ route('nominal') }}" style="text-decoration: none; color: inherit;">
                <div class="contact-card">
                    <div class="contact-initial">SH</div>
                        <div class="contact-info">
                            <h3>SUGENG HARIANTO</h3>
                            <p>BNI - 47230300</p>
                        </div>
                    </div>
            </a>


            <div class="contact-card">
                <div class="contact-initial">DT</div>
                <div class="contact-info">
                    <h3>DARES TOMI</h3>
                    <p>BRI - 47230300</p>
                </div>
            </div>

            <div class="contact-card">
                <div class="contact-initial">BA</div>
                <div class="contact-info">
                    <h3>BILLY ALEXANDER SUGIH</h3>
                    <p>DANA - 6287272838393</p>
                </div>
            </div>

            <div class="contact-card">
                <div class="contact-initial">NR</div>
                <div class="contact-info">
                    <h3>NAUFALDO RAFI BRAHMANA</h3>
                    <p>SHOPEEPAY - 6287272838393</p>
                </div>
            </div>

            <div class="contact-card">
                <div class="contact-initial">MR</div>
                <div class="contact-info">
                    <h3>MUHAMMAD RAFLI MUSTARI</h3>
                    <p>BCA - 47273893</p>
                </div>
            </div>

            <div class="contact-card">
                <div class="contact-initial">AH</div>
                <div class="contact-info">
                    <h3>AFRIJAL HAYKAL</h3>
                    <p>BSI - 47273893</p>
                </div>
            </div>
        </div>

        <div class="action-buttons">
            <button class="next-btn">Berikutnya</button>
            <button class="add-btn">Tambah Nomor Tujuan</button>

        </div>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div>
                <img src="{{asset('images/mykeep.png')}}" alt="Footer Logo" class="footer-logo">
                <p>Teman Setia dalam Setiap Transaksi</p>
            </div>
            <div>
                <h3>Links</h3>
                <p>Pembayaran</p>
                <p>Transfer</p>
                <p>Top Up</p>
            </div>
            <div>
                <h3>Support</h3>
                <p>Contact Us</p>
                <p>Privacy Policy</p>
                <p>Terms & Conditions</p>
            </div>
            <div>
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

<script>
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
        window.location.href = "{{route('nominal')}}";
    } else {
        // Jika tidak ada kontak yang dipilih, tampilkan alert
        console.log("No contact selected, showing alert.");
        alert('Silakan pilih salah satu kontak terlebih dahulu.');
    }
});

// Event listener untuk tombol "Tambah Nomor Tujuan"
document.querySelector('.add-btn').addEventListener('click', () => {
    console.log("Navigating to tambahNomor.html");
    window.location.href = '{{route("tambahNomor")}}';
});

</script>

</body>
</html>
