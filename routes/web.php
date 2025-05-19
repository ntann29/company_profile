<?php

use App\Http\COntrollers\EskulController;
use App\Http\COntrollers\KaryawanController;
use App\Http\COntrollers\InformasiController;
use App\Http\COntrollers\FasilitasController;
use App\Http\COntrollers\PrestasiController;
use App\Http\COntrollers\FrontController;

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// frontend
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/informasi', [FrontController::class, 'informasi']);
Route::get('/eskul', [FrontController::class, 'eskul']);
Route::get('/karyawan', [FrontController::class, 'karyawan']);
Route::get('/fasilitas', [FrontController::class, 'fasilitas']);
Route::get('/prestasi', [FrontController::class, 'prestasi']);

// role admin
Route::prefix('admin')->middleware('auth')->group(function () {

    Route::resource('eskul', EskulController::class);
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('informasi', InformasiController::class);
    Route::resource('fasilitas', FasilitasController::class);
    Route::resource('prestasi', PrestasiController::class);
});