@extends('layouts.layout')

<link rel="stylesheet" href="{{asset('css/history.css')}}">

@section('content')

    <div class="month-container">
        <button class="month-button active">Jan</button>
        <button class="month-button">Feb</button>
        <button class="month-button">Mar</button>
        <button class="month-button">Apr</button>
        <button class="month-button">Mei</button>
        <button class="month-button">Jun</button>
        <button class="month-button">Jul</button>
        <button class="month-button">Agu</button>
        <button class="month-button">Sep</button>
        <button class="month-button">Okt</button>
        <button class="month-button">Nov</button>
        <button class="month-button">Des</button>
    </div>

    <script>
        const buttons = document.querySelectorAll('.month-button');

        buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
        });
        });
    </script>


    <div class="containerd">
        <div class="card">

            <h1>20 September 2024</h1>
            <hr class="solid">

            <div class="transfer-item">
                <div class="transfer-details">
                    <div class="transfer-type">Transfer</div>
                    <div class="transfer-date">20 September 2024</div>
                    <div class="transfer-info">BNI • SUGENG HARIANTO</div>
                </div>
                <div>
                    <div>-Rp 20.000</div>
                    <div class="transfer-status">Berhasil</div>
                </div>
            </div>

            <div class="transfer-item">
                <div class="transfer-details">
                    <div class="transfer-type">Transfer</div>
                    <div class="transfer-date">13 September 2024</div>
                    <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                </div>
                <div>
                    <div>-Rp 25.000</div>
                    <div class="transfer-status">Berhasil</div>
                </div>
            </div>

            <div class="transfer-item">
                <div class="transfer-details">
                    <div class="transfer-type">Transfer</div>
                    <div class="transfer-date">13 September 2024</div>
                    <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                </div>
                <div>
                    <div>-Rp 25.200</div>
                    <div class="transfer-status">Berhasil</div>
                </div>
            </div>

            <div class="transfer-item">
                <div class="transfer-details">
                    <div class="transfer-type">Transfer</div>
                    <div class="transfer-date">13 September 2024</div>
                    <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                </div>
                <div>
                    <div>-Rp 4.000.000</div>
                    <div class="transfer-status">Berhasil</div>
                </div>
            </div>

        </div>




        <div class="card">
            <h1>13 September 2024</h1>
            <hr class="solid">

            <div class="transfer-item">
                <div class="transfer-details">
                    <div class="transfer-type">Transfer</div>
                    <div class="transfer-date">13 September 2024</div>
                    <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                </div>
                <div>
                    <div>-Rp 60.000</div>
                    <div class="transfer-status">Berhasil</div>
                </div>
            </div>

            <div class="transfer-item">
                <div class="transfer-details">
                    <div class="transfer-type">Transfer</div>
                    <div class="transfer-date">13 September 2024</div>
                    <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                </div>
                <div>
                    <div>-Rp 300.000</div>
                    <div class="transfer-status">Berhasil</div>
                </div>
            </div>

            <div class="transfer-item">
                <div class="transfer-details">
                    <div class="transfer-type">Transfer</div>
                    <div class="transfer-date">13 September 2024</div>
                    <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                </div>
                <div>
                    <div>-Rp 200.000</div>
                    <div class="transfer-status">Berhasil</div>
                </div>
            </div>

            <div class="transfer-item">
                <div class="transfer-details">
                    <div class="transfer-type">Transfer</div>
                    <div class="transfer-date">13 September 2024</div>
                    <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                </div>
                <div>
                    <div>-Rp 15.000</div>
                    <div class="transfer-status">Berhasil</div>
                </div>
            </div>

            <div class="transfer-item">
                <div class="transfer-details">
                    <div class="transfer-type">Transfer</div>
                    <div class="transfer-date">13 September 2024</div>
                    <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                </div>
                <div>
                    <div>-Rp 65.000</div>
                    <div class="transfer-status">Berhasil</div>
                </div>
            </div>
        </div>
    </div>

    <script>
// Format amount with dots as thousand separators
function formatAmount(amount) {
    return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// Remove dots and convert to number
function unformatAmount(amount) {
    return amount.replace(/\./g, "");
}

// Amount input handler
const amountInput = document.getElementById('amount');

amountInput.addEventListener('input', (e) => {
    let value = unformatAmount(e.target.value);
    value = value.replace(/\D/g, ""); // Remove non-digits
    e.target.value = formatAmount(value);
});

// Button handlers
document.querySelector('.next-btn').addEventListener('click', () => {
    // Handle next step of transfer process
    // This would typically involve form validation and navigation
    alert('Proses transfer akan dilanjutkan');
});

document.querySelector('.cancel-btn').addEventListener('click', () => {
    // Return to previous page
    window.history.back();
});

// Navigation handler from index.html
document.querySelector('.logout-btn').addEventListener('click', () => {
    // Handle logout
    alert('Anda akan keluar dari aplikasi');
});

document.querySelector('cancel-btn').addEventListener('click', () => {
    window.location.href = 'index.html';
});
</script>

@endsection
