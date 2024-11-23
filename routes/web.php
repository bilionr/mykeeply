<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Redirect to /login if user accesses root
    return redirect('/login');
});

// Route for the login page
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/nominal', function () {
    return view('nominal');
})->name('nominal');

Route::get('/pilihTujuan', function () {
    return view('pilihTujuan');
})->name('pilihTujuan');

Route::get('/tambahNomor', function () {
    return view('tambahNomor');
})->name('tambahNomor');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/halamanUtama', function () {
    return view('halamanUtama');
})->name('halamanUtama');

Route::get('/transfer/confirm', function () {
    return view('transfer.confirm');
})->name('transfer.confirm');

Route::get('/transfer/success', function () {
    return view('transfer.success');
})->name('transfer.success');



// buram billy
// Route::get('/tambahNomor', [AuthController::class, 'tambahNomor'])->name('tambahNomor');
