<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/login', function () {
    return view('login');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create'])->name('create');
Route::post('/users', [UserController::class, 'store'])->name('store');
Route::get('/users', [UserController::class, 'index'])->name('index');

Route::get('/', function () {
    return view('welcome');
});
