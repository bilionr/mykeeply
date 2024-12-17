<nav class="navbar">
    <img src="{{asset('images/mykeep.png')}}" alt="Logo" class="logo">
    <div class="nav-menu">
        <a href="#" class="active">BERANDA</a>
        <a href="#">PEMBAYARAN</a>
        <a href="#">TRANSFER</a>
    </div>
    <div class="user-menu">
        <i class="fas fa-bell notification" aria-label="Notification"></i>
        <div class="profile-container">
            <i class="fas fa-user profile" aria-label="Profile"></i>
            <div class="profile-dropdown">
                <a href="#">Profil</a>
                <a href="#">Pengaturan</a>
                <a href="#">Log Out</a>
            </div>
        </div>
    </div>
</nav>



<div class="sub-menu-container">
    <div class="sub-menu">
        <div class="menu-buttons">
            <a href="{{route('halamanUtama')}}" class="menu-item active">Kirim</a>
            <a href="" class="menu-item">Minta</a>
            <a href="" class="menu-item">Kontak</a>
        </div>
        <a href="{{route('history')}}" class="transfer-history">Riwayat Transfer</a>
    </div>
</div>

