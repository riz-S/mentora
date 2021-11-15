<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CariMentorControl;
use App\Http\Controllers\FilterMentorControl;
use App\Http\Controllers\SortingControl;
use App\Http\Controllers\EditProfilControl;
use App\Http\Controllers\GantiPasswordControl;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemesanMentorControl;
use App\Http\Controllers\TambahSaldoControl;
use App\Http\Controllers\StatusPemesananControl;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Auth::routes();

// Authentication Routes...
Route::get('login', [LoginController::class, 'showLoginForm'])
    ->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::get('logout', [LoginController::class, 'logout'])
    ->name('logout');

// Registration Routes...
Route::get('register', [RegisterController::class, 'showRegistrationForm'])
    ->name('register');

Route::post('register', [RegisterController::class, 'register']);

Route::get('/', function () {
    return view('halaman-landing');
});

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/cari', [CariMentorControl::class, 'showCariPage'])
    ->name('showCariPage');

Route::post('/cari', [CariMentorControl::class, 'getMentors'])
    ->name('getMentors');

Route::get('/mentor/{id}', [CariMentorControl::class, 'loadProfilMentor'])
    ->name('loadProfilMentor');

Route::post('/filter', [FilterMentorControl::class, 'filterInput'])
    ->name('filterInput');

Route::post('/sort', [SortingControl::class, 'sortListMentor'])
    ->name('sortListMentor');

Route::get('/profil', [EditProfilControl::class, 'loadEditProfilPage'])
    ->name('loadEditProfilPage');

Route::post('/profil', [EditProfilControl::class, 'requestUbahProfil'])
    ->name('requestUbahProfil');

Route::get('/ganti-sandi', [GantiPasswordControl::class, 'loadChangePass'])
    ->name('loadChangePass');

Route::post('/ganti-sandi', [GantiPasswordControl::class, 'changePass'])
    ->name('changePass');

Route::get('/pesan-mentor/{id}', [MemesanMentorControl::class, 'loadOrderForm'])
    ->name('loadOrderForm');

Route::post('/pesan-mentor/{id}', [MemesanMentorControl::class, 'pay'])
    ->name('pay');

Route::get('/tambah-saldo', [TambahSaldoControl::class, 'loadSaldoPage'])
    ->name('loadSaldoPage');

Route::post('/tambah-saldo', [TambahSaldoControl::class, 'tambahSaldo'])
    ->name('tambahSaldo');

Route::get('/status-pemesanan', [StatusPemesananControl::class, 'loadStatusPemesananPage'])
    ->name('loadStatusPemesananPage');
