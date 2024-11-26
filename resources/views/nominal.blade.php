@extends('layouts.app')

<link rel="stylesheet" href="{{asset('css/nominal.css')}}">

@section('content')
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
        <input type="text" id="amount" value="0" class="amount-field">
    </div>

    <div class="message-input">
        <input type="text" placeholder="Pesan" class="message-field">
    </div>

    <div class="transfer-type">
        <select id="transfer-type" class="transfer-select">
            <option value="" disabled selected>Jenis Transfer</option>
            <option value="kekayaan">Transfer Kekayaan</option>
            <option value="pemindahan-dana">Transfer Pemindahan Dana</option>
        </select>
    </div>

    <div class="action-buttons">
        <button class="next-btn">Berikutnya</button>
        <button class="cancel-btn">Batalkan</button>
    </div>
</div>

<script>

// Button handlers
document.querySelector('.next-btn').addEventListener('click', () => {
    // Handle next step of transfer process
    // This would typically involve form validation and navigation
    window.location.href = "{{route('transfer.confirm')}}";
});

document.querySelector('.cancel-btn').addEventListener('click', () => {
    // Return to previous page
    window.history.back();
});



</script>

@endsection


