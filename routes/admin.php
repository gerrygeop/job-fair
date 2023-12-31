<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LowonganPelamarController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PerusahaanController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('admin/')->name('d.')->group(function () {
        // Perusahaan
        Route::resource('perusahaan', PerusahaanController::class);
        Route::delete('perusahaan/{perusahaan}', [PerusahaanController::class, 'deleteFile'])->name('perusahaan.delete-file');
        Route::get('perusahaan/{perusahaan}/lampiran', [PerusahaanController::class, 'download'])->name('perusahaan.download');

        // Lowongan
        Route::resource('lowongan', LowonganController::class);
        Route::patch('lowongan/{lowongan}/toggle-status', [LowonganController::class, 'toggleStatus'])->name('lowongan.toggle-status');

        // Lowongan-Pelamar
        Route::get('lowongan/{lowongan}/pelamar', [LowonganPelamarController::class, 'index'])->name('lowongan.pelamar.index');

        // Pelamar
        Route::resource('pelamar', PelamarController::class);
        Route::delete('pelamar/{pelamar}/resume-delete', [PelamarController::class, 'deleteFile'])->name('pelamar.delete-resume');
        Route::get('pelamar/{pelamar}/resume', [PelamarController::class, 'download'])->name('pelamar.download');

        // Industri & Categories
        Route::resource('industri', IndustriController::class)->except('show');
        Route::resource('categories', CategoryController::class)->except('show');
    });

    Route::get('lowongan/{lowongan}/apply', [LowonganPelamarController::class, 'store'])->name('lowongan.apply');
    Route::get('lamaran', [PelamarController::class, 'lamaran'])->name('pelamar.lamaran');
});
