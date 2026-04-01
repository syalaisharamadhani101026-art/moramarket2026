<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;

// Halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman utama / home (bisa redirect ke dashboard jika login)
Route::get('/', function () {
    return redirect('/dashboard');
});

// Dashboard (hanya bisa diakses jika login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Routes Produk (hanya bisa diakses jika login)
Route::middleware('auth')->group(function () {
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/tambah', [ProdukController::class, 'create']);
    Route::post('/produk/simpan', [ProdukController::class, 'store']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/hapus/{id}', [ProdukController::class, 'destroy']);
});