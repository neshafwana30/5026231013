<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function tampilkanTabel()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        // tabel('nama_tabel')
		$meja = DB::table('meja')->paginate(10);

    	// mengirim data meja ke view index
		return view('meja.index',['meja' => $meja]);

	}

    // method untuk menampilkan view form tambah pegawai
	public function tambahMeja()
	{
		return view('meja.tambah');
	}

   public function store(Request $request){
        // Validasi input
        $request->validate([
            'merkMeja' => 'required|unique:meja,merkMeja'
        ], [
            'merkMeja.unique' => 'Merk Meja ini sudah dimasukkan ke database',
        ]);

        $ketersediaan = $request->has('ketersediaan') ? 1 : 0;

        $hargaMeja = str_replace('.', '', $request->hargaMeja);

        DB::table('meja')->insert([
            'merkmeja' => $request->merkMeja,
            'hargameja' => $hargaMeja,
            'tersedia' => $ketersediaan,
            'berat' => $request->berat
        ]);

        return redirect('/meja');
    }

    // method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$meja = DB::table('meja')->where('ID',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('meja.edit',['meja' => $meja]);
	}

    public function update(Request $request)
	{
        $ketersediaan = $request->has('ketersediaan') ? 1 : 0;

        $hargaMeja = str_replace('.', '', $request->hargaMeja);

		// update data pegawai
		DB::table('meja')->where('ID',$request->id)->update([
			'merkmeja' => $request->merkMeja,
			'hargameja' => $hargaMeja,
			'tersedia' => $ketersediaan,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/meja');
	}

    public function hapus($id) {
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('meja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/meja');
	}

    public function cari(Request $request) {
		// menangkap data pencarian
		$cari = $request->cariMeja;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('meja')
		->where('merkmeja','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('meja.index',['meja' => $pegawai]);

	}
}
