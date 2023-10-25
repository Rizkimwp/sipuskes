<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PegawaiController;
use App\Models\Pegawai;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function(){
    return view('userview.home');
});

// Route Login dan Logout 
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin')->middleware('guest');
Route::get('/actionLogout', [LoginController::class, 'actionLogout'])->name('actionLogout');

// Route Tampil Dashboard
Route::get('/dashboard' , [DashboardController::class, 'dashboard'])->name('dashboard')->middleware(['auth','role:admin']);

// Route Kelola Pengguna
Route::get('/dashboard/kelolauser/create', [RegisterController::class, 'index'])->name('createuser')->middleware(['auth','role:admin']);
Route::post('/dashboard/kelolauser/create', [RegisterController::class, 'store'])->name('store')->middleware(['auth','role:admin']);
Route::get('/dashboard/kelolauser' , [DashboardController::class, 'kelolauser'])->name('kelolauser')->middleware(['auth','role:admin']);
Route::get('/dashboard/kelolauser/{user}/edit' , [DashboardController::class, 'edit_user'])->name('user.edit')->middleware(['auth','role:admin']);
Route::put('/dashboard/kelolauser/{user}' , [DashboardController::class, 'update'])->name('user.update')->middleware(['auth','role:admin']);
Route::delete('/dashboard/kelolauser/{user}' , [DashboardController::class, 'destroy'])->name('user.destroy')->middleware(['auth','role:admin']);

// Route Kelola Dokter

Route::get('/dashboard/keloladokter' , [DokterController::class, 'index'])->name('keloladokter')->middleware(['auth','role:admin']);
Route::get('/dashboard/keloladokter/create' , [DokterController::class, 'keloladokter'])->name('createdokter')->middleware(['auth','role:admin']);
Route::post('/dashboard/keloladokter/create' , [DokterController::class, 'storeDokter'])->name('store.dokter')->middleware(['auth','role:admin']);
Route::get('/dashboard/keloladokter/{dokter}/edit' , [DokterController::class, 'edit_dokter'])->name('dokter.edit')->middleware(['auth','role:admin']);
Route::put('/dashboard/keloladokter/{dokter}' , [DokterController::class, 'update'])->name('dokter.update')->middleware(['auth','role:admin']);
Route::delete('/dashboard/keloladokter/{dokter}' , [DokterController::class, 'destroy'])->name('dokter.destroy')->middleware(['auth','role:admin']);

// Route Kelola Pegawai
Route::get('/dashboard/kelolapegawai' , [PegawaiController::class, 'index'])->name('kelolapegawai')->middleware(['auth','role:admin']);
Route::get('/dashboard/kelolapegawai/create' , [PegawaiController::class, 'kelolapegawai'])->name('createpegawai')->middleware(['auth','role:admin']);
Route::post('/dashboard/kelolapegawai/create' , [PegawaiController::class, 'storePegawai'])->name('store')->middleware(['auth','role:admin']);
Route::get('/dashboard/kelolapegawai/{pegawai}/edit' , [PegawaiController::class, 'edit_pegawai'])->name('pegawai.edit')->middleware(['auth','role:admin']);
Route::put('/dashboard/kelolapegawai/{pegawai}' , [PegawaiController::class, 'update'])->name('pegawai.update')->middleware(['auth','role:admin']);
Route::delete('/dashboard/kelolapegawai/{pegawai}' , [PegawaiController::class, 'destroy'])->name('pegawai.destroy')->middleware(['auth','role:admin']);


