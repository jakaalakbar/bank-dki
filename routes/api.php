<?php

use App\Http\Controllers\LocationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(LocationController::class)->group(function () {
    Route::get('/provinsi', 'provinsi');
    Route::get('/kabupaten/{kode_provinsi}', 'kabupaten');
    Route::get('/kecamatan/{kode_kabupaten}', 'kecamatan');
    Route::get('/kelurahan/{kode_kecamatan}', 'kelurahan');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
