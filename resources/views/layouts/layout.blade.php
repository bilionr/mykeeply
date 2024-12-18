<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', "MyKeeply")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/tambahNomor.css')}}" rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body>
  <nav class="navbar">
        <div class="logo-container">
            <img src="{{asset('images/mykeep.png')}}" alt="Logo" class="logo">
            <span class="logo-text">MyKeeply</span>
        </div>
        <div class="nav-menu">
            <a href="{{route('halamanUtama')}}">BERANDA</a>
            <a href="">PEMBAYARAN</a>
            <a href="" class="active">TRANSFER</a>
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

    @yield("content")

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <footer class="footer">
        @include('layouts.foot')
    </footer>
  </body>
</html>
