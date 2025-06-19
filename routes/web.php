<?php

use Illuminate\Support\Facades\Route;
//jangan lupa import controller gaisssss
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LatihanEASController;

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

// TUGAS CRUD LATIHAN EAS
Route::get('/belanja', [BelanjaController::class, 'index']);
Route::get('/belanja/tambah', [BelanjaController::class, 'tambah']);
Route::post('/belanja/store', [BelanjaController::class, 'store']);
Route::get('/belanja/hapus/{id}', [BelanjaController::class, 'hapus']);

Route::get('/pageCounter', [AdminController::class, 'pageCounter']);

// TUGAS CRUD LATIHAN EAS PART 3
Route::get('/karyawan', [KaryawanController::class, 'tampilkanTabel']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

// Latihan EAS Mandiri
// Kode A
Route::get('/chat', [LatihanEASController::class, 'emoji']);
Route::get('/chat', [LatihanEASController::class, 'banjir']);

// Kode B
Route::get('/mahasiswa', [LatihanEASController::class, 'indexMahasiswa']);
Route::get('/mahasiswa/edit/{nrp}', [LatihanEASController::class, 'editMahasiswa']);
Route::post('/mahasiswa/update', [LatihanEASController::class, 'updateMahasiswa']);
Route::get('/mahasiswa/{nrp}', [LatihanEASController::class, 'lihatMahasiswa']);
// kode C
Route::get('/kategori', [LatihanEASController::class, 'indexKategori']);
Route::get('/kategori/lihat', [LatihanEASController::class, 'idKategori']);

// other
Route::get('/mahasiswaaktif', [LatihanEASController::class, 'indexMahasiswaAktif']);
Route::get('/nilaikuliah', [LatihanEASController::class, 'indexNilaiKuliah']);
Route::get('/nilaikuliah/tambah', [LatihanEASController::class, 'tambah']);
Route::post('/nilaikuliah/store', [LatihanEASController::class, 'store']);


