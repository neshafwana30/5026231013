<?php

use Illuminate\Support\Facades\Route;
//jangan lupa import controller gaisssss
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;


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
    return view('frontend');
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
    return view('index');
});

Route::get('blog', [Link::class, 'helloworld']);

Route::get('dosen', [Link::class, 'index']);

Route::get('pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir'] );
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);



