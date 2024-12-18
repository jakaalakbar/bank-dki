<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PembukaanRekeningController;
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
    return redirect('/login');
});

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/register', 'registerView')->name('register_view');
    Route::post('/register', 'register')->name('register_post');
    Route::get('/login', 'loginView')->name('login_view');
    Route::post('/login', 'login')->name('login_post');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(BerandaController::class)->group(function () {
        Route::get('/beranda', 'beranda')->name('beranda');
        Route::post('/buka-blokir/{id}', 'bukaBlokir')->name('buka_blokir');
    });

    Route::controller(PembukaanRekeningController::class)->group(function () {
        Route::get('/rekening', 'index')->name('rekening');
        Route::get('/pembukaan-rekening', 'create')->name('rekening_create');
        Route::post('/pembukaan-rekening', 'store')->name('rekening_store');
        Route::post('/approved/{id}', 'approved')->name('approved');
    });
});
