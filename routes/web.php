<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', [AuthController::class, 'index']);

Route::group(['middleware' => 'ceklogin'], function () {
    Route::get('/home')->name('home');
});

//Route::controller(AuthController::class)->group(function () {
//    Route::get('/', 'login');
//    Route::get('/register', 'register');
//
//    Route::post('/signin', 'signin')->name('signin');
//});
