<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DagurController;
use App\Http\Controllers\DasisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelanggaranController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DasisController::class, 'dashboard']);


// view siswa
Route::get('/siswa', [DasisController::class, 'index'])->name('siswa')->middleware('auth');
Route::get('/detailsiswa/{id}', [DasisController::class, 'detailsiswa'])->name('detailsiswa');
Route::post('/detailsiswa/{id}', [DasisController::class, 'detailsiswa'])->name('detailsiswa');

// view  tambah siswa
Route::get('/tambahdasis', [DasisController::class, 'tambahdasis'])->name('tambahdasis');
Route::post('/insertdata', [DasisController::class, 'insertdata'])->name('insertdata');

// view hapus & edit siswa
Route::get('/tampildasis/{id}', [DasisController::class, 'tampildasis'])->name('tampildasis');
Route::post('/updatedata/{id}', [DasisController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}', [DasisController::class, 'delete'])->name('delete');

// view login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproces', [LoginController::class, 'loginproces'])->name('loginproces');

// view register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registerr');

// view logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// view guru
Route::get('/guru', [DagurController::class, 'index'])->name('guru');

// view tambah guru
Route::get('/tambahdagur', [DagurController::class, 'tambahdagur'])->name('tambahdagur');
Route::post('/insertdata2', [DagurController::class, 'insertdata2'])->name('insertdata2');

// view hapus & edit siswa
Route::get('/tampildagur/{id}', [DagurController::class, 'tampildagur'])->name('tampildagur');
Route::post('/updatedagur/{id}', [DagurController::class, 'updatedagur'])->name('updatedagur');
Route::get('/deletedagur/{id}', [DagurController::class, 'deletedagur'])->name('deletedagur');

// view pelanggaran
Route::get('/pelanggaran', [PelanggaranController::class, 'index'])->name('pelanggaran');

// view tambah pelanggaran
Route::get('/tambahpelanggaran', [PelanggaranController::class, 'tambahpelanggaran'])->name('tambahpelanggaran');
Route::post('/insertdata3', [PelanggaranController::class, 'insertdata3'])->name('insertdata3');

// view hapus & edit Pelanggaran
Route::get('/tampilpelanggaran/{id}', [PelanggaranController::class, 'tampilpelanggaran'])->name('tampilpelanggaran');
Route::post('/updatepelanggaran/{id}', [PelanggaranController::class, 'updatepelanggaran'])->name('updatepelanggaran');
Route::get('/deletepelanggaran/{id}', [PelanggaranController::class, 'deletepelanggaran'])->name('deletepelanggaran');

// view tambah poin
Route::get('/tambahpoin', [DasisController::class, 'tambahpoin'])->name('tambahpoin');
Route::post('/insertdata4/{id}', [DasisController::class, 'insertdata4'])->name('insertdata4');