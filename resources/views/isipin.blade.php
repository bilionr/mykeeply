@extends('layouts.layout')

<link rel="stylesheet" href="{{asset('css/isipin.css')}}">

@section('content')
    
<main>
  <h1>Masukkan PIN</h1>
  <div class="pin-input-container">
    <div class="pin-input">
      <input
        type="password"
        maxlength="1"
        oninput="moveToNext(this, 'input2')"
        id="input1"
      />
      <input
        type="password"
        maxlength="1"
        oninput="moveToNext(this, 'input3')"
        id="input2"
      />
      <input
        type="password"
        maxlength="1"
        oninput="moveToNext(this, 'input4')"
        id="input3"
      />
      <input
        type="password"
        maxlength="1"
        oninput="moveToNext(this, 'input5')"
        id="input4"
      />
      <input
        type="password"
        maxlength="1"
        oninput="moveToNext(this, 'input6')"
        id="input5"
      />
      <input
        type="password"
        maxlength="1"
        oninput="moveToNext(this, null)"
        id="input6"
      />
      <span class="toggle-visibility" onclick="toggleVisibility()">
        <img src="{{asset('images/mata2.png')}}" alt="Tampilkan Pin" id="visibility-icon" />
      </span>
    </div>
  </div>
</main>


<script>
  // Menambahkan event listener untuk navigasi
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

  function moveToNext(currentInput, nextInputId) {
    if (currentInput.value.length === 1) {
      if (nextInputId) {
        document.getElementById(nextInputId).focus();
      }
    }
  }

  // Fungsi untuk toggle visibilitas PIN
  function toggleVisibility() {
    const inputs = document.querySelectorAll(".pin-input input");
    const visibilityIcon = document.getElementById("visibility-icon"); // Ambil elemen gambar

    inputs.forEach((input) => {
      if (input.type === "password") {
        input.type = "text";
        visibilityIcon.src = "{{asset('images/mata.png')}}"; // Ganti dengan ikon mata tertutup
        visibilityIcon.alt = "Sembunyikan Pin"; // Update teks alternatif
      } else {
        input.type = "password";
        visibilityIcon.src = "{{asset('images/mata2.png')}}"; // Ganti dengan ikon mata terbuka
        visibilityIcon.alt = "Tampilkan Pin"; // Update teks alternatif
      }
    });
  }

</script>

@endsection