<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PembayaranController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('siswa', App\Http\Controllers\SiswaController::class);
Route::resource('pembayaran', App\Http\Controllers\PembayaranController::class);
Route::get('/pembayaran/{siswa_id}/history', [PembayaranController::class, 'history'])->name('pembayaran.history');
