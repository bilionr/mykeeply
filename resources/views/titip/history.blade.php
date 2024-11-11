<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header class="header">
        <a>
            <img src="{{asset('images/logo.png')}}" alt="">
        </a>
        <nav class="navbar">
            <a href="#">BERANDA</a>
            <a href="#">PEMBAYARAN</a>
            <a href="#" class="active">TRANSFER</a>
        </nav>
        <div class="header-right">
            <button class="notifications">🔔</button>
            <button class="logout">Log Out</button>
        </div>
    </header>

    <div class="transfer-container">
        <div class="transfer-options">
            <button>Kirim</button>
            <button>Minta</button>
            <button>Kontak</button>
            <button class="history-button">Riwayat Transfer</button>
        </div>

        <div class="month-filter">
            <button>Jan</button>
            <button>Feb</button>
            <button>Mar</button>
            <button>Apr</button>
            <button>Mei</button>
            <button>Jun</button>
            <button>Jul</button>
            <button>Agu</button>
            <button class="active">Sep</button>
            <button>Okt</button>
            <button>Nov</button>
            <button>Des</button>
        </div>

        <div class="transaction-history">
            <div class="transaction-date">20 September 2024</div>
            <div class="transaction">
                <div class="transaction-icon">SH</div>
                <div class="transaction-details">
                    <p>Transfer</p>
                    <p>BNI • SUGENG HARIANTO</p>
                </div>
                <div class="transaction-status">
                    <p>-Rp XXXX</p>
                    <p>Berhasil</p>
                </div>
            </div>

            <div class="transaction-date">13 September 2024</div>
            <div class="transaction">
                <div class="transaction-icon">MR</div>
                <div class="transaction-details">
                    <p>Transfer</p>
                    <p>BCA • MUHAMMAD RAFLI MUSTARI</p>
                </div>
                <div class="transaction-status">
                    <p>+Rp XXXX</p>
                    <p>Berhasil</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-logo">MYREPLY</div>
        <div class="footer-links">
            <a href="#">Pembayaran</a>
            <a href="#">Transfer</a>
            <a href="#">Top Up</a>
            <a href="#">Contact Us</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
        </div>
        <div class="social-media">
            <a href="#">📷</a>
            <a href="#">📘</a>
            <a href="#">🎥</a>
            <a href="#">✖️</a>
        </div>
    </footer>
</body>
</html>
