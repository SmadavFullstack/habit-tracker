<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

//Home page
Route::get('/', [SiteController::class, 'index'])->name('site.index');
//Login page
Route::get('/login', [LoginController::class, 'index'])->name('site.login');
//Authenticate user
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');
//Protector's Authenticate Data
Route::middleware('auth')->group(function () {
    //Logout user
    Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');
    //Dashboard
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');
});
// Register page
Route::get('/register', [RegisterController::class, 'index'])->name('site.register');
// Register user
Route::post('/register', [RegisterController::class, 'addUser'])->name('addUser.register');
