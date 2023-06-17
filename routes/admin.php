<?php

use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PerusahaanController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin/')->name('d.')->group(function () {
    Route::resource('perusahaan', PerusahaanController::class);
    Route::resource('pelamar', PelamarController::class);
});
