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

// Menangani klik tombol Log Out
const logoutButton = document.querySelector(".logout");
logoutButton.addEventListener("click", () => {
  if (confirm("Apakah Anda yakin ingin keluar?")) {
    // Arahkan ke halaman login (sesuaikan URL-nya)
    window.location.href = "login.html";
  }
});

// Menangani klik pada tombol "Selengkapnya"
const selengkapnyaButton = document.querySelector(".balance-card button");
selengkapnyaButton.addEventListener("click", () => {
  alert("Fitur ini sedang dalam pengembangan.");
});

// Menangani klik pada tombol "Tampilkan"
const tampilkanButton = document.querySelector(".transaction-history button");
tampilkanButton.addEventListener("click", () => {
  alert("Menampilkan riwayat transaksi...");
  // Arahkan ke halaman riwayat transaksi (sesuaikan URL-nya)
  window.location.href = "transaction-history.html";
});

// Menangani klik tombol Kirim atau Minta
const primaryButtons = document.querySelectorAll(".btn-primary");
primaryButtons.forEach((button) => {
  button.addEventListener("click", () => {
    alert(`Anda menekan tombol ${button.textContent}`);
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
