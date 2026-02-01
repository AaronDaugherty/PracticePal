<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('login');
});


Route::get('/register', function() {
    return view('register');
});

Route::post('/registered-user', action: [UserController::class, 'register']);

Route::post('/submit-log', action: [UserController::class, 'log']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/login', [UserController::class, 'login']);
