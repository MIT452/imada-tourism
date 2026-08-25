<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('accueil');

Route::get('/destinations/{slug}', [DestinationController::class, 'show'])->name('destinations.show');

Route::middleware('guest')->group(function () {
    Route::get('/inscription', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/inscription', [RegisteredUserController::class, 'store']);

    Route::get('/connexion', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/connexion', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('/deconnexion', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
