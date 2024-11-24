@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

@section('content')


<main class="dashboard">
    <section class="welcome-section">
    <h1>Hi, Ruli Hendrawan!</h1>
    <div class="balance-card">
        <div class="balance-header">
        <p>Saldo</p>
        <img src="{{asset('images/menu.png')}}" alt="Icon Saldo" class="balance-icon" />
        </div>
        <h2>Rp 1.000</h2>
        <p>Siap digunakan</p>
        <button>Selengkapnya</button>
    </div>
    <div class="transaction-history">
        <h3>Riwayat Transaksi</h3>
        <p>
        Setelah transaksi, nanti riwayat transaksi bulanan kamu akan muncul
        di sini.
        </p>
        <button>Tampilkan</button>
    </div>
    </section>
    <section class="transaction-section">
    <div class="actions">
        <div class="buttons-row">
        <button class="btn-primary">Kirim</button>
        <button class="btn-primary">Minta</button>
        </div>
        <div class="action-icons">
        <div class="action-icon">
            <img src="{{asset('images/kartu.png')}}" alt="Tambah Kartu" />
            <p>Tambahkan kartu</p>
            <p>atau bank</p>
        </div>
        <div class="action-icon">
            <img src="{{asset('images/payment.png')}}" alt="Pembayaran" />
            <p>Pembayaran</p>
        </div>
        <div class="action-icon">
            <img src="{{asset('images/lainnya.png')}}" alt="Lainnya" />
            <p>Lainnya</p>
        </div>
        </div>
        <div class="search-bar">
        <label for="search">Kirim Lagi</label>
        <img src="{{asset('images/cari.png')}}" alt="Search" class="search-icon" />
        <p>Cari</p>
        </div>
    </div>
    </section>
</main>

<script>
document.querySelectorAll("#navbar a").forEach((link) => {
  link.addEventListener("click", function (event) {
    event.preventDefault(); // Mencegah reload jika link tidak memiliki URL

    // Menghapus kelas 'active' dari semua link
    document.querySelectorAll("#navbar a").forEach((navLink) => {
      navLink.classList.remove("active");
    });

    // Menambahkan kelas 'active' ke link yang diklik
    this.classList.add("active");
  });
});


// Menangani klik pada tombol "Selengkapnya"
const selengkapnyaButton = document.querySelector(".balance-card button");
selengkapnyaButton.addEventListener("click", () => {
  alert("Fitur ini sedang dalam pengembangan.");
});

// Menangani klik pada tombol "Tampilkan"
const tampilkanButton = document.querySelector(".transaction-history button");
tampilkanButton.addEventListener("click", () => {
  // Arahkan ke halaman riwayat transaksi (sesuaikan URL-nya)
  window.location.href = "{{route('history')}}";
});

// Menangani klik tombol Kirim atau Minta
const primaryButtons = document.querySelectorAll(".btn-primary");
primaryButtons.forEach((button) => {
  button.addEventListener("click", () => {
    window.location.href = "{{route('pilihTujuan')}}";
  });
});

const actionIcons = document.querySelectorAll(".action-icons img");
actionIcons.forEach((icon) => {
  icon.addEventListener("click", () => {
    alert("Fitur ini sedang dalam pengembangan.");
  });
});

// Menangani klik pada ikon pencarian di search-bar
const searchIcon = document.querySelector(".search-icon");
searchIcon.addEventListener("click", () => {
  alert("Fitur pencarian sedang dalam pengembangan.");
});

// Menangani klik ikon di footer (media sosial)
const socialIcons = document.querySelectorAll(".social-icons a");
socialIcons.forEach((icon) => {
  icon.addEventListener("click", (event) => {
    event.preventDefault(); // Mencegah default action (navigasi langsung)
    alert(`Anda mengklik ikon ${icon.querySelector("img").alt}`);
  });
});

// Menambahkan hover animation untuk ikon di footer
const footerIcons = document.querySelectorAll(".social-icons img");
footerIcons.forEach((icon) => {
  icon.addEventListener("mouseenter", () => {
    icon.style.transform = "scale(1.2)";
    icon.style.transition = "transform 0.2s ease";
  });

  icon.addEventListener("mouseleave", () => {
    icon.style.transform = "scale(1)";
  });
});

// Notifikasi klik ikon notifikasi di header
const notificationIcon = document.querySelector(".header-actions .icon img");
notificationIcon.addEventListener("click", () => {
  alert("Tidak ada notifikasi baru.");
});

// Notifikasi klik ikon profil di header
const profileIcon = document.querySelectorAll(".header-actions .icon img")[1];
profileIcon.addEventListener("click", () => {
  alert("Fitur profil sedang dalam pengembangan.");
});

</script>



@endsection


