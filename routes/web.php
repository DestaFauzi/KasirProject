<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KasirController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::resource('/admin/produk', ProdukController::class);

    Route::get('/kasir/dashboard', function () {
        return view('kasir.dashboard');
    })->name('kasir-dashboard');
    Route::get('/kasir/penjualan', [KasirController::class, 'indexPenjualan'])->name('kasir-penjualan');
});
Route::get('/kasir/penjualan', [KasirController::class, 'create']);
Route::post('/kasir/penjualan', [KasirController::class, 'store']);
