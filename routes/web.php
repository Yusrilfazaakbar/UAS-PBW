<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', [FrontendController::class, 'index'])->name('home');

// Rute untuk halaman about
Route::get('/about', [FrontendController::class, 'about'])->name('about');

// Rute untuk halaman contact
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

// Rute untuk menampilkan form laporan (create)
Route::get('/report/create', [ReportController::class, 'create'])->name('report.create');

// Rute untuk menyimpan laporan
Route::post('/report/store', [ReportController::class, 'store'])->name('report.store');

// Rute untuk menampilkan form laporan untuk area kebakaran (fire-area)
Route::get('/fire-area/report', [ReportController::class, 'create'])->name('fire-area.report');

// Rute untuk menyimpan laporan untuk area kebakaran (fire-area)
Route::post('/fire-area/report', [ReportController::class, 'store'])->name('fire-area.store');

// Rute untuk menampilkan laporan (index)
Route::get('/fire-area', [ReportController::class, 'index'])->name('fire-area.index');

Route::get('/', [ReportController::class, 'index'])->name('index');




