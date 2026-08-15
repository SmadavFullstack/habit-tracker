<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\siteLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);

Route::get('/login', [siteLogin::class, 'index']);