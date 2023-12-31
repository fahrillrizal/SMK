<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
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

Route::get('/buku', function () {
    return view('buku');
});

Route::get('/peminjaman', function () {
    return view('peminjaman');
});

Route::get('/pengembalian', function () {
    return view('pengembalian');
});

Route::get('/anggota', function () {
    return view('anggota');
});

// Route::get('/buku',[BukuController::class, 'index']);
// Route::get('/buku/{id}', [BukuController::class, 'detail']);