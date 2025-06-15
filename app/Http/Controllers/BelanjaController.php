<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelanjaController extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
		$belanja = DB::table('keranjangbelanja')->paginate(10);

    	// mengirim data belanja ke view index
		return view('belanja.index',['belanja' => $belanja]);

	}

    public function tambah()
	{

		// memanggil view tambah
		return view('belanja.tambah');

	}

    public function store(Request $request){


        $hargaperitem = str_replace('.', '', $request->hargaBarang);

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodeBarang,
            'Jumlah' => $request->jumlahBeli,
            'Harga' => $hargaperitem,
        ]);

        return redirect('/belanja');
    }

    public function hapus($id) {
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/belanja');
	}
}
