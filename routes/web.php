<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::resource('stocks', StockController::class);
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Rute Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['role:Owner']], function () {
    Route::get('/owner', [DashboardController::class, 'owner'])->name('owner.dashboard');
});

Route::group(['middleware' => ['role:Supervisor']], function () {
    Route::get('/supervisor', [SupervisorController::class, 'index'])->name('supervisor.index');
});

Route::group(['middleware' => ['role:Kasir']], function () {
    Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');
});

Route::group(['middleware' => ['role:Pegawai Gudang']], function () {
    Route::get('/gudang', [GudangController::class, 'index'])->name('gudang.index');
});

require __DIR__.'/auth.php';
