<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Uang</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
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
            <div class="contact-card">
                <div class="contact-initial">SH</div>
                <div class="contact-info">
                    <h3>SUGENG HARIANTO</h3>
                    <p>BNI - 47230300</p>
                </div>
            </div>
            
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
            <button class="next-btn" disabled>Berikutnya</button>
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

    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
