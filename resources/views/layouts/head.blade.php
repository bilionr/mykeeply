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
            <a href="{{route('halamanUtama')}}"></a>
            <button class="send-btn">Kirim</button>
            <button class="ask-btn">Minta</button>
            <button class="contact-btn">Kontak</button>
        </div>
        <a href="{{route('history')}}">
            <button class="transfer-history">Riwayat Transfer</button>
        </a>

    </div>
</div>
