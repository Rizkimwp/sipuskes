<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin')->middleware('guest');
Route::get('/actionLogout', [LoginController::class, 'actionLogout'])->name('actionLogout');

Route::get('/dashboard/kelolauser/create', [RegisterController::class, 'index'])->name('create')->middleware(['auth','role:admin']);
Route::post('/dashboard/kelolauser/create', [RegisterController::class, 'store'])->name('store')->middleware(['auth','role:admin']);

Route::get('/dashboard' , [DashboardController::class, 'dashboard'])->name('dashboard')->middleware(['auth','role:admin']);
Route::get('/dashboard/kelolauser' , [DashboardController::class, 'kelolauser'])->name('kelolauser')->middleware(['auth','role:admin']);
Route::get('/dashboard/kelolauser/{user}/edit' , [DashboardController::class, 'edit_user'])->name('user.edit')->middleware(['auth','role:admin']);
Route::put('/dashboard/kelolauser/{user}' , [DashboardController::class, 'update'])->name('user.update')->middleware(['auth','role:admin']);
Route::delete('/dashboard/kelolauser/{user}' , [DashboardController::class, 'destroy'])->name('user.destroy')->middleware(['auth','role:admin']);
