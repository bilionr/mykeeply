<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer - Nominal</title>
    <link rel="stylesheet" href="{{asset('css/nominal.css')}}">
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
                <button>Kirim</button>
                <button>Minta</button>
                <button>Kontak</button>
            </div>
            <div class="transfer-history">
                <button>Riwayat Transfer</button>
            </div>
        </div>
    </div>

    <main class="main-content">
        <div class="transfer-card">
            <div class="recipient-info">
                <div class="recipient-initial">SH</div>
                <div class="recipient-details">
                    <h2>SUGENG HARIANTO</h2>
                    <p>BNI - 47230300</p>
                </div>
            </div>
            
            <div class="amount-input">
                <span class="currency">Rp.</span>
                <input type="text" id="amount" value="20.000" class="amount-field">
            </div>

            <div class="message-input">
                <input type="text" placeholder="Pesan" class="message-field">
            </div>

            <div class="action-buttons">
                <button class="next-btn">Berikutnya</button>
                <button class="cancel-btn">Batalkan</button>
            </div>
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

    <script src="{{asset('js/nominal.js')}}"></script>
</body>
</html>