<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KasirController;

// Public Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Middleware Group for Authenticated Users
Route::middleware('auth')->group(function () {
    // Admin Routes
    // Route::middleware('can:admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class , 'index'])->name('admin-dashboard');

        // Product Management
        Route::resource('/admin/produk', ProdukController::class);
    // });

    // Kasir Routes
    // Route::middleware('can:kasir')->group(function () {
        Route::get('/kasir/dashboard', function () {
            return view('kasir.dashboard');
        })->name('kasir-dashboard');

        // Sales Management (Penjualan)
        Route::get('/kasir/penjualan', [KasirController::class, 'index'])->name('kasir.penjualan.index');
    // });
});