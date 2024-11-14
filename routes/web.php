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
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/nominal', [AuthController::class, 'nominal']);

Route::get('/pilihTujuan', [AuthController::class, 'pilihTujuan'])->name('pilihTujuan');

Route::get('/tambahNomor', [AuthController::class, 'tambahNomor'])->name('tambahNomor');

Route::get('/history', [AuthController::class, 'history']);


// buram billy
// Route::get('/tambahNomor', [AuthController::class, 'tambahNomor'])->name('tambahNomor');


