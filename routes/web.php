<?php

use Illuminate\Support\Facades\Route;
//jangan lupa import controller gaisssss
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AdminController;



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


Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertama', function () {
    return view('pertama');
});

Route::get('kodesoal1', function () {
    return view('kodesoal1');
});

Route::get('pertemuanketiga', function () {
    return view('pertemuanketiga');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('ets', function () {
    return view('index2');
});


Route::get('frontend', function () {
    return view('frontend');
});



Route::get('template', function () {
    return view('template');
});

Route::get('blog', [Link::class, 'helloworld']);

Route::get('dosen', [Link::class, 'index']);

// Route::get('pegawai/{nama}', [Pegawai2Controller::class, 'index']);
Route::get('/formulir', [Pegawai2Controller::class, 'formulir'] );
Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses']);

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//CRUD Pegawai bes
//route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

// TUGAS CRUD MEJA
Route::get('/meja', [AdminController::class, 'tampilkanTabel']);
Route::get('/meja/tambah', [AdminController::class, 'tambahMeja']);
Route::post('/meja/store', [AdminController::class, 'store']);
Route::get('/meja/edit/{id}', [AdminController::class, 'edit']);
Route::post('/meja/update', [AdminController::class, 'update']);
Route::get('/meja/hapus/{id}', [AdminController::class, 'hapus']);
Route::get('/meja/cari', [AdminController::class, 'cari']);
