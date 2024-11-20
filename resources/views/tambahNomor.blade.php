@extends('layouts.layout')

<link rel="stylesheet" href="{{asset('css/tambahNomor.css')}}">

@section('content')
    
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


<script>
// Form handling
const form = document.querySelector('.add-contact-form');
const backBtn = document.querySelector('.back-btn');

// Back button handler
backBtn.addEventListener('click', () => {
    window.location.href = '{{route("pilihTujuan")}}';
});

// Form submission handler
form.addEventListener('submit', (e) => {
    e.preventDefault();
    
    const bank = document.getElementById('bank').value;
    const accountNumber = document.getElementById('account').value;
    
    // Basic validation
    if (!bank || !accountNumber) {
        alert('Silakan lengkapi semua field');
        return;
    }
    
    // You can add more validation here (e.g., account number format)
    if (!/^\d+$/.test(accountNumber)) {
        alert('Nomor rekening hanya boleh berisi angka');
        return;
    }
    
    // Here you would typically send this data to a server
    // For now, we'll just simulate success and redirect
    alert('Nomor tujuan berhasil ditambahkan');
    window.location.href = '{{route("pilihTujuan")}}';
});

// Sub-menu button handlers
document.querySelector('.send-btn').addEventListener('click', () => {
    window.location.href = '{{route("pilihTujuan")}}';
});

document.querySelector('.ask-btn').addEventListener('click', () => {
    // Handle ask button click
    alert('Fitur Minta sedang dalam pengembangan');
});

document.querySelector('.contact-btn').addEventListener('click', () => {
    // Handle contact button click
    alert('Fitur Kontak sedang dalam pengembangan');
});

document.querySelector('.transfer-history').addEventListener('click', () => {
    // Handle transfer history button click
    alert('Fitur Riwayat Transfer sedang dalam pengembangan');
});

// Logout button handler
document.querySelector('.logout-btn').addEventListener('click', () => {
    // Handle logout
    if (confirm('Apakah Anda yakin ingin keluar?')) {
        // Add logout logic here
        alert('Anda telah keluar dari sistem');
        // Redirect to login page
    }
});
</script>

@endsection