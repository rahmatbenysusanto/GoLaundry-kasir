<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TokoController;

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
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login-post', 'loginPost')->name('loginPost');
    Route::get('/register', 'register')->name('register');
    Route::post('/register-post', 'registerPost')->name('registerPost');
    Route::get('/lupa-password', 'lupaPassword')->name('lupaPassword');
    Route::get('/buat-password-baru', 'buatPasswordBaru');
    Route::get('/logout', 'logout')->name('logout');
});

Route::group(['middleware' => 'authLogin'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::controller(TransaksiController::class)->group(function () {
        Route::get('/buat-transaksi', 'buatTransaksi')->name('buatTransaksi');
        Route::get('/daftar-transaksi', 'daftarTransaksi')->name('daftarTransaksi');
        Route::get('/detail-transaksi/{id}', 'detailTransaksi');
        Route::get('/histori-transaksi', 'historyTransaksi')->name('historyTransaksi');

        Route::get('/get-client', 'getClient')->name('getClient');
        Route::get('/get-cart-transaksi', 'getChartTransaksi')->name('getChartTransaksi');
        Route::get('/delete-cart/{id}', 'deleteCart')->name('deleteCart');
        Route::post('/tambah-layanan-cart', 'tambahLayanan')->name('tambahLayananCart');
        Route::post('/update-count-cart', 'updateCountCart')->name('updateCountCart');
        Route::post('/create-transaksi', 'createTransaksi')->name('createTransaksi');
        Route::get('/update-status/{id}', 'updateStatus');
    });

    Route::controller(ClientController::class)->group(function () {
        Route::get('/daftar-client', 'daftarClient')->name('daftarClient');
        Route::post('/tambah-client', 'tambahClient')->name('tambahClient');
    });

    Route::controller(TokoController::class)->group(function () {
        Route::get('/layanan', 'layanan')->name('layanan');
        Route::post('/tambah-layanan', 'tambahLayanan')->name('tambahLayanan');
        Route::get('/hapus-layanan/{id}', 'deleteLayanan')->name('deleteLayanan');

        Route::get('/diskon', 'diskon')->name('diskon');
        Route::post('/tambah-diskon', 'tambahDiskon')->name('tambahDiskon');
        Route::get('/hapus-diskon/{id}', 'deleteDiskon')->name('deleteDiskon');

        Route::get('/parfum', 'parfum')->name('parfum');
        Route::post('/tambah-parfum', 'tambahParfum')->name('tambahParfum');
        Route::get('/hapus-parfum/{id}', 'deleteParfum')->name('deleteParfum');

        Route::get('/laporan', 'laporan')->name('laporan');
        Route::get('/karyawan', 'karyawan')->name('karyawan');
        Route::get('/pengaturan', 'pengaturan')->name('pengaturan');

        Route::get('/pembayaran', 'pembayaran')->name('pembayaran');
        Route::post('/tambah-pembayaran', 'tambahPembayaran')->name('tambahPembayaran');
    });
});
