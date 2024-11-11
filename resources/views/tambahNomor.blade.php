<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Nomor Tujuan - MyKeep</title>
    <link rel="stylesheet" href="{{asset('css/tambahNomor.css')}}">
</head>
<body>
    <nav class="navbar">
        <img src="{{asset('images/mykeep.png')}}" alt="MyKeep Logo" class="logo">
        <div class="nav-menu">
            <a href="#">BERANDA</a>
            <a href="#">PEMBAYARAN</a>
            <a href="#" class="active">TRANSFER</a>
        </div>
        <div class="user-menu">
            <i class="notification"></i>
            <i class="profile"></i>
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
        <h1>Tambah Nomor Tujuan</h1>
        
        <form class="add-contact-form">
            <div class="form-group">
                <label for="bank">Nama Bank</label>
                <select id="bank" required>
                    <option value="">Pilih Bank</option>
                    <option value="bni">Bank Negara Indonesia (BNI)</option>
                    <option value="bca">Bank Central Asia (BCA)</option>
                    <option value="bri">Bank Rakyat Indonesia (BRI)</option>
                    <option value="mandiri">Bank Mandiri</option>
                    <option value="bsi">Bank Syariah Indonesia (BSI)</option>
                    <option value="bsi">Dana</option>
                    <option value="bsi">ShopeePay</option>
                </select>
            </div>

            <div class="form-group">
                <label for="account">Nomor Rekening</label>
                <input type="text" id="account" placeholder="Masukkan nomor rekening" required>
            </div>

            <div class="action-buttons">
                <button type="button" class="back-btn">Kembali</button>
                <button type="submit" class="submit-btn">Berikutnya</button>
            </div>
        </form>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div>
                <img src="{{asset('images/mykeep.png')}}" alt="MyKeep Logo" class="footer-logo">
                <p>Teman Setia dalam Setiap Transaksi</p>
            </div>
            <div>
                <h3>Links</h3>
                <p><a href="#">Pembayaran</a></p>
                <p><a href="#">Transfer</a></p>
                <p><a href="#">Top Up</a></p>
            </div>
            <div>
                <h3>Support</h3>
                <p><a href="#">Contact Us</a></p>
                <p><a href="#">Privacy Policy</a></p>
                <p><a href="#">Terms & Conditions</a></p>
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

    <script src="{{asset('js/tambahNomor.js')}}"></script>
</body>
</html>