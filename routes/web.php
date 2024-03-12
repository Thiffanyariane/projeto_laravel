<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\StockController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('index');
    Route::get('/users/create', [UserController::class, 'create'])->name('create');
    Route::post('/users', [UserController::class, 'store'])->name('store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/users/{user}',[ UserController::class, 'update'])->name('update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('destroy');
});

Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
Route::get('/stock/create', [StockController::class, 'create'])->name('stock.create');
Route::post('/stock', [StockController::class, 'store'])->name('stock.store');
Route::get('/stock/{stockItem}/edit', [StockController::class, 'edit'])->name('stock.edit');
Route::put('/stock/{stockItem}', [StockController::class, 'update'])->name('stock.update');
Route::delete('/stock/{stockItem}', [StockController::class, 'destroy'])->name('stock.destroy');