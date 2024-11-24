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
      event.preventDefault();

      document.querySelectorAll("#navbar a").forEach((navLink) => {
        navLink.classList.remove("active");
      });

      this.classList.add("active");
    });
  });

  function moveToNext(currentInput, nextInputId) {
    if (currentInput.value.length === 1) {
      if (nextInputId) {
        document.getElementById(nextInputId).focus();
      }
      // Check if all inputs are filled after each input
      checkAllInputs();
    }
  }

  // Function to check if all inputs are filled
  function checkAllInputs() {
    const inputs = document.querySelectorAll(".pin-input input");
    let allFilled = true;
    
    inputs.forEach(input => {
      if (input.value.length === 0) {
        allFilled = false;
      }
    });

    if (allFilled) {
      // Get all PIN values
      const pin = Array.from(inputs).map(input => input.value).join('');
      console.log('PIN entered:', pin); // For debugging
      
      // Add a small delay before redirecting
      setTimeout(() => {
        // Replace 'next-page-url' with your actual next page URL
        window.location.href = "{{ route('transfer.success') }}";
        // Or use this if you're not using named routes:
        // window.location.href = "/your-next-page";
      }, 200);
    }
  }

  // Fungsi untuk toggle visibilitas PIN
  function toggleVisibility() {
    const inputs = document.querySelectorAll(".pin-input input");
    const visibilityIcon = document.getElementById("visibility-icon");

    inputs.forEach((input) => {
      if (input.type === "password") {
        input.type = "text";
        visibilityIcon.src = "{{asset('images/mata.png')}}";
        visibilityIcon.alt = "Sembunyikan Pin";
      } else {
        input.type = "password";
        visibilityIcon.src = "{{asset('images/mata2.png')}}";
        visibilityIcon.alt = "Tampilkan Pin";
      }
    });
  }
</script>

@endsection