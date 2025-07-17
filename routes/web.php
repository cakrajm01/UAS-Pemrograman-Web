<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\DashboardController;

Route::get('/', fn() => redirect('/dashboard'));
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('imunisasi', ImunisasiController::class);
Route::get('/imunisasi/{id}', [ImunisasiController::class, 'show'])->name('imunisasi.show');
