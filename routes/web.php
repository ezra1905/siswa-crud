<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Route::get('/', function () {
    return view('welcome');
});

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


