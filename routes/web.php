<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoutineElementController;
use App\Http\Controllers\PracticeRoutineController;

Route::get('/', function () {
    return view('login');
});


Route::get('/register', function() {
    return view('register');
});

Route::post('/registered-user', action: [UserController::class, 'register']);

Route::post('/submit-log', action: [UserController::class, 'log']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/login', [UserController::class, 'login']);


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('practice-routines', PracticeRoutineController::class);
    Route::get('/practice', [PracticeController::class] );
});

Route::post('/routine-elements', [RoutineElementController::class, 'store'])
    ->middleware('auth')
    ->name('routine-elements.store');

    