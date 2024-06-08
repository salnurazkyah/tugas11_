<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/salam', function () {
    return "Hai, Saya Hanna Anggraini siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/paramedik', function () {
    return view('paramedik');
});

Route::get('/periksa', function () {
    return view('periksa');
});

Route::get('/unit', function () {
    return view('unit');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien', [PasienController::class,'index']);

Route::get('/kelurahan', [KelurahanController::class,'index']);

Route::get('/paramedik', [ParamedikController::class,'index']);

Route::get('/periksa', [PeriksaController::class,'index']);

Route::get('/unit', [UnitController::class,'index']);

Route::get('/pasien/index', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{id}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');
Route::get('/pasien/{id}', [PasienController::class, 'view'])->name('pasien.view');



