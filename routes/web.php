<?php

use App\Http\Controllers\ComplaintController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ParamedisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\UserviewController;
use App\Http\Controllers\KontakController;


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
//  Userview
Route::get('/', [UserviewController::class, ('homeindex')])->name('home');
Route::get('/puskesmas/profile', [UserviewController::class, ('profileindex')])->name('profile'); 
Route::get('/puskesmas/layanan', [UserviewController::class, ('layananindex')])->name('layanan'); 
Route::get('/puskesmas/artikel', [UserviewController::class, ('artikelindex')])->name('artikel'); 
Route::get('/puskesmas/kontak', [UserviewController::class, ('kontakindex')])->name('kontak'); 
Route::get('/puskesmas/tanyadokter', [UserviewController::class, ('tanyadokterindex')])->name('tanyadokter'); 
Route::post('/puskesmas/tanyadokter', [UserviewController::class, ('tanyadokterstore')])->name('tanyadokterstore'); 

// Route Laman
Route::resource('page', PageController::class )->middleware('auth', 'role:admin');
// Route Galery
Route::resource('galery', GaleryController::class )->middleware('auth', 'role:admin');
// Route Home
Route::resource('home', HomeController::class )->middleware('auth', 'role:admin');
// Route Galery
Route::resource('kontak', KontakController::class )->middleware('auth', 'role:admin');
// Route Galery
Route::resource('layanan', LayananController::class )->middleware('auth', 'role:admin');
// Route Post
Route::resource('post', PostsController::class )->middleware('auth', 'role:admin');
Route::get('/post/create/checkSlug', [PostsController::class, 'checkSlug'])->name('checkSlug');
// Route Profile 
Route::resource('profile', ProfileController::class)->middleware('auth', 'role:admin');
// Route Pengaduan
Route::resource('complaint', ComplaintController::class)->middleware('auth', 'role:admin');

// Route Login dan Logout 
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin')->middleware('guest');
Route::get('/actionLogout', [LoginController::class, 'actionLogout'])->name('actionLogout');

// Route Tampil Dashboard
Route::get('/dashboard' , [DashboardController::class, 'dashboard'])->name('dashboard')->middleware(['auth','role:admin']);

// Route Kelola Pengguna
Route::resource('user', UserController::class, ['middleware' => ['auth','role:admin']]);
// Route Kelola Dokter
Route::resource('dokter', DokterController::class, ['middleware' => ['auth','role:admin']]);
// Route Kelola Pegawai
Route::resource('pegawai', PegawaiController::class, ['middleware' => ['auth','role:admin']]);
// Route Kelola Diagnosa
Route::resource('diagnosa', DiagnosaController::class, ['middleware' => ['auth','role:admin']]);
// Route Kelola Paramedis
Route::resource('paramedis', ParamedisController::class, ['middleware'=> ['auth', 'role:admin']]);
// Route Kelola Jadwal Praktek Dokter
Route::resource('jadwal', JadwalController::class, ['middleware'=> ['auth', 'role:admin']]);

//  Post User View 

