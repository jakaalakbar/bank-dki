<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BerandaController;
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
    return view('welcome');
});

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/register', 'registerView')->name('register_view');
    Route::post('/register', 'register')->name('register_post');

    Route::get('/login', 'loginView')->name('login_view');
    Route::post('/login', 'login')->name('login_post');
});

Route::controller(BerandaController::class)->group(function () {
    Route::get('/beranda', 'beranda')->name('beranda');
});
