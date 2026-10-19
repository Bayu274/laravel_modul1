<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PromoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\OrderController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TestDriveController;
use Illuminate\Support\Facades\Route;

// ===== PUBLIK =====
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/mobil', [CarController::class, 'index'])->name('cars.index');
Route::get('/mobil/{slug}', [CarController::class, 'show'])->name('cars.show');

Route::get('/test-drive', [TestDriveController::class, 'create'])->name('test-drive.create');
Route::post('/test-drive', [TestDriveController::class, 'store'])->name('test-drive.store');

Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');

// ===== AUTH =====
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    // Forgot password routes
    Route::get('forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');
});

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');

// ===== PELANGGAN (perlu login) =====
Route::middleware('auth')->prefix('akun')->name('customer.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pesanan', [OrderController::class, 'index'])->name('orders');
    Route::get('/profil', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profil/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profil', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/checkout/{car:slug}', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::post('/checkout/{car:slug}', [CheckoutController::class, 'store'])->name('checkout.store');
});

// ===== ADMIN =====
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('cars', App\Http\Controllers\Admin\CarController::class);
    Route::resource('categories', CategoryController::class)->except(['show']);
    Route::resource('news', App\Http\Controllers\Admin\NewsController::class)->except(['show']);
    Route::resource('promos', PromoController::class)->except(['show']);
    Route::get('orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{order}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('orders.show');
    Route::patch('orders/{order}/status', [App\Http\Controllers\Admin\OrderController::class, 'updateStatus'])->name('orders.status');
    Route::get('test-drives', [App\Http\Controllers\Admin\TestDriveController::class, 'index'])->name('test-drives.index');
    Route::patch('test-drives/{testDrive}/status', [App\Http\Controllers\Admin\TestDriveController::class, 'updateStatus'])->name('test-drives.status');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
});
