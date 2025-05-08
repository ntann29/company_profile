<?php

use App\Http\COntrollers\EskulController;
use App\Http\COntrollers\KaryawanController;
use App\Http\COntrollers\InformasiController;
use App\Http\COntrollers\FasilitasController;
use App\Http\COntrollers\FrontController;

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// frontend
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about', [FrontController::class, 'about']);
Route::get('/resume', [FrontController::class, 'resume']);
Route::get('/services', [FrontController::class, 'services']);
Route::get('/portofolio', [FrontController::class, 'portofolio']);

// role admin
Route::prefix('admin')->middleware('auth')->group(function () {

    Route::resource('eskul', EskulController::class);
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('informasi', InformasiController::class);
    Route::resource('fasilitas', FasilitasController::class);
});