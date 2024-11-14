@extends('layouts.layout')
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
        <input type="text" id="amount" value="20.000" class="amount-field">
    </div>

    <div class="message-input">
        <input type="text" placeholder="Pesan" class="message-field">
    </div>

    <div class="action-buttons">
        <button class="next-btn">Berikutnya</button>
        <button class="cancel-btn">Batalkan</button>
    </div>
</div>
  
@endsection