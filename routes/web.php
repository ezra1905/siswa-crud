<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\App;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/',function()
{
    return view('welcome');
});

Route::get('login',[\App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::post('login/post',[\App\Http\Controllers\LoginController::class,'post'])->name('login.post');
//register
Route::post('register/post',[\App\Http\Controllers\RegisterController::class,'post'])->name('register.post');
Route::get('register',[\App\Http\Controllers\RegisterController::class,'index'])->name('register');


Route::middleware('auth')->group(function(){
    // logout
    Route::post('logout',[\App\Http\Controllers\LoginController::class,'logout'])->name('logout');
    // Dashboard
    Route::get('dashboard',[\App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
    // hapus siswa
    Route::get('siswa/hapus/{id}',[SiswaController::class,'hapus'])->name('siswa.hapus');
    // penutup siswa
    // edit siswa
    Route::post('siswa/edit/update/{id}', [SiswaController::class,'update'])->name('siswa.update');
    Route::get('siswa/edit/{id}', [SiswaController::class,'edit'])->name('siswa.edit');
    // penutup edit siswa
    // tambah siswa
    Route::post('siswa/tambah/post',[SiswaController::class,'post'])->name('post.siswa');
    Route::get('siswa/tambah',[SiswaController::class,'tambah'])->name('tambah.siswa');
    // penutup tambah siswa
    // tampil siswa
    Route::get('siswa',[SiswaController::class,'index'])->name('tampil.siswa');
    // penutup tampil siswa
});

