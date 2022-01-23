<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PengambilanController;
use App\Http\Controllers\PolingController;
use App\Http\Controllers\KriteriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/data-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('data-mahasiswa');
Route::get('/create-datamahasiswa', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('create-datamahasiswa');
Route::post('/simpan-datamahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('simpan-datamahasiswa');
Route::get('/delete-datamahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'destroy'])->name('delete-datamahasiswa');
Route::get('/detail-mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'show'])->name('detail-mahasiswa');


Route::get('/mata-kuliah', [App\Http\Controllers\MatakuliahController::class, 'index'])->name('mata-kuliah');
Route::get('/create-matakuliah', [App\Http\Controllers\MatakuliahController::class, 'create'])->name('create-matakuliah');
Route::post('/simpan-matakuliah', [App\Http\Controllers\MatakuliahController::class, 'store'])->name('simpan-matakuliah');


Route::get('/pengambilanmatkul', [App\Http\Controllers\PengambilanmatkulController::class, 'index'])->name('pengambilanmatkul');
Route::get('/create-pengambilanmatkul', [App\Http\Controllers\PengambilanmatkulController::class, 'create'])->name('create-pengambilanmatkul');
Route::post('/simpan-pengambilanmatkul', [App\Http\Controllers\PengambilanmatkulController::class, 'store'])->name('simpan-pengambilanmatkul');

Route::get('/poling', [App\Http\Controllers\PolingController::class, 'index'])->name('poling');
Route::get('/create-poling', [App\Http\Controllers\PolingController::class, 'create'])->name('create-poling');
Route::post('/simpan-polinf', [App\Http\Controllers\PolingController::class, 'store'])->name('simpan-poling');

Route::get('/kriteria', [App\Http\Controllers\KriteriaController::class, 'index'])->name('kriteria');
Route::get('/create-kriteria', [App\Http\Controllers\KriteriaController::class, 'create'])->name('create-kriteria');
Route::post('/simpan-kriteria', [App\Http\Controllers\KriteriaController::class, 'store'])->name('simpan-kriteria');

Route::get('/mahasiswa-terbaik', [App\Http\Controllers\KriteriaController::class, 'index'])->name('mahasiswa-terbaik');
