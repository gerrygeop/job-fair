<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\Perusahaan\RegisteredPerusahaanController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('registering', function () {
        return view('auth.registering');
    })->name('registering');

    Route::prefix('register')->name('register.')->group(function () {
        // Register Job seeker
        Route::get('/pencari-kerja', [RegisteredUserController::class, 'create'])->name('pencari-kerja');
        Route::post('/pencari-kerja', [RegisteredUserController::class, 'store'])->name('pencari-kerja.store');

        // Register Perusahaan
        Route::get('/perusahaan', [RegisteredPerusahaanController::class, 'create'])->name('perusahaan');
        Route::post('/perusahaan', [RegisteredPerusahaanController::class, 'store'])->name('perusahaan.store');
    });

    // Login
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
