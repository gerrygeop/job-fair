<?php

use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PerusahaanController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin/')->name('d.')->group(function () {
    Route::resource('perusahaan', PerusahaanController::class);
    Route::delete('perusahaan/{perusahaan}', [PerusahaanController::class, 'deleteFile'])->name('perusahaan.delete-file');
    Route::get('perusahaan/{perusahaan}/lampiran', [PerusahaanController::class, 'download'])->name('perusahaan.download');

    Route::resource('lowongan', LowonganController::class);

    Route::resource('pelamar', PelamarController::class);
});
