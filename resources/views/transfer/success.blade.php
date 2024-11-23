@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Success Message -->
    <div class="alert alert-success text-center fw-bold" role="alert">
        Sukses! Transaksi Anda Berhasil.
    </div>

    <!-- Transfer Details -->
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="mb-4">Transfer Sukses</h5>
            <p class="text-muted">Simpan untuk Dokumentasi</p>

            <!-- Main Information -->
            <div class="d-flex align-items-center p-3 bg-light rounded mb-4">
                <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; font-weight: bold;">
                    MR
                </div>
                <div class="ms-3 flex-grow-1">
                    <p class="mb-0">Transfer to</p>
                    <h6 class="mb-0">Muhammad Rifli Mustari</h6>
                    <p class="mb-0 text-muted">Bank CIMB Niaga 47273893</p>
                </div>
                <div class="text-end">
                    <p class="mb-0 text-muted">Nomor Referensi</p>
                    <h6 class="mb-0">082137809092</h6>
                    <h6 class="mb-0 text-primary">IDR 10,000.00</h6>
                </div>
            </div>

            <!-- Additional Details -->
            <table aria-hidden="true" class="table borderless">
                <tbody>
                    <tr>
                        <td>Sumber Dana</td>
                        <td class="text-end">Xtra Savers IB Wad</td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td class="text-end">-</td>
                    </tr>
                    <tr>
                        <td>Email Penerima</td>
                        <td class="text-end">-</td>
                    </tr>
                    <tr>
                        <td>Metode Transfer</td>
                        <td class="text-end">Instan</td>
                    </tr>
                    <tr>
                        <td>Tipe Transfer</td>
                        <td class="text-end">Transfer ke Sesama CIMB NIAGA</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
