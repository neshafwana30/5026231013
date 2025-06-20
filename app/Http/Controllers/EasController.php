<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EasController extends Controller
{
    public function tampilkanTabel() {
    	// mengambil data dari table pegawai
		$mykaryawan = DB::table('mykaryawan')->get();
        // tabel('nama_tabel')
		// $karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data karyawan ke view index
		return view('mykaryawan.index',['mykaryawan' => $mykaryawan]);
	}

    public function edit($kodepegawai)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$kodepegawai)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('mykaryawan.edit',['mykaryawan' => $mykaryawan]);
	}

    public function update(Request $request)
	{

		// update data mahasiswa
		DB::table('mykaryawan')->where('kodepegawai',$request->kodepegawai)->update([
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/eas');
	}

    public function lihat($kodepegawai){
		// mengambil data pegawai berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$kodepegawai)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('mykaryawan.view',['mykaryawan' => $mykaryawan]);
	}


}
