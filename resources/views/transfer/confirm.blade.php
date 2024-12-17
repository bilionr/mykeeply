@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <!-- Penerima -->
            <div class="mb-4">
                <h6>Penerima</h6>
                <div class="p-3 bg-light rounded">
                    <strong>SUGENG HARIANTO</strong><br>
                    BNI - 47230300
                </div>
            </div>

            <!-- Sumber Dana -->
            <div class="mb-4">
                <h6>Sumber Dana</h6>
                <div class="p-3 bg-light rounded">
                    <strong>RULI HENDRAWAN SAPUTRA</strong><br>
                    MyKeeply - 6287654567889
                </div>
            </div>

            <!-- Detail Transfer -->
            <div class="mb-4">
                <h6>Detail Transfer</h6>
                <table aria-hidden="true" class="table borderless">
                    <tbody>
                        <tr>
                            <td>Nominal</td>
                            <td class="text-end">Rp 20.000</td>
                        </tr>
                        <tr>
                            <td>Biaya Transaksi</td>
                            <td class="text-end">Rp 1.500</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Total -->
            <div class="border-top pt-3">
                <h6 class="d-flex justify-content-between">
                    <span>TOTAL</span>
                    <span>Rp 21.500</span>
                </h6>
            </div>

            <!-- Actions -->
            <div class="d-flex justify-content-between mt-4">
                <button class="btn btn-danger w-45">Batalkan</button>
                <a href="{{ route('isipin') }}" class="btn btn-success w-45">Transfer</a>

            </div>
        </div>
    </div>
</div>

@endsection
