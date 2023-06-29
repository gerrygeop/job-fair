<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LowonganPelamarController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PerusahaanController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin/')->name('d.')->group(function () {
    Route::resource('perusahaan', PerusahaanController::class);
    Route::delete('perusahaan/{perusahaan}', [PerusahaanController::class, 'deleteFile'])->name('perusahaan.delete-file');
    Route::get('perusahaan/{perusahaan}/lampiran', [PerusahaanController::class, 'download'])->name('perusahaan.download');

    Route::resource('lowongan', LowonganController::class);
    Route::get('lowongan/{lowongan}/pelamar', [LowonganPelamarController::class, 'index'])->name('lowongan-pelamar.index');

    Route::resource('pelamar', PelamarController::class);
    Route::delete('pelamar/{pelamar}', [PelamarController::class, 'deleteFile'])->name('pelamar.delete-file');
    Route::get('pelamar/{pelamar}/resume', [PelamarController::class, 'download'])->name('pelamar.download');

    Route::resource('industri', IndustriController::class)->except('show');
    Route::resource('categories', CategoryController::class)->except('show');
});
