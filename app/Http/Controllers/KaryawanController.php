<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    public function tampilkanTabel() {
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        // tabel('nama_tabel')
		$karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data karyawan ke view index
		return view('karyawan.index',['karyawan' => $karyawan]);
	}

    public function tambah() {
		return view('karyawan.tambah');
	}

    public function store(Request $request){
        // Validasi input
        $request->validate([
            'kodePegawai' => 'required|unique:karyawan,kodePegawai'
        ], [
            'kodePegawai.unique' => 'Kode Pegawai ini sudah disimpan',
        ]);


        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodePegawai,
            'namalengkap' => $request->namaLengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/karyawan');
    }

    public function hapus($id) {
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}


}
