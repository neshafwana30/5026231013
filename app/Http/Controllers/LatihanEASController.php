<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LatihanEASController extends Controller
{
    // ini buat kode soal A
    public function emoji(Request $request){

        // mengambil data berdasarkan id yang dipilih
        $kata = DB::table('chat')->where('id', 1)->first();
        $text = $kata->pesan;

        $emojiMap = [
            ':))' => '/assets/kodeSoalA/1.png',
            ':3'  => '/assets/kodeSoalA/2.png',
            ':P'  => '/assets/kodeSoalA/3.png',
            ':C'  => '/assets/kodeSoalA/4.png',
            ';)'  => '/assets/kodeSoalA/5.png',
        ];

        foreach ($emojiMap as $word => $imageUrl) {
            $text = str_replace($word, '<img src="' . $imageUrl . '" alt="' . $word . '"width = 20"'.'">', $text);
        }

        return view('latihanEAS.chat', ['emojiText' => $text]);

    }

    public function banjir(Request $request){

        // mengambil data berdasarkan id yang dipilih
        $kata = DB::table('chat')->where('id', 2)->first();
        $banjirText = $kata->pesan;

        $kataMap = [
            'hujan' => 'primary',
            'banjir'  => 'danger',
            'dibatalkan'  => 'warning',
            'besar'  => 'success',
        ];

        foreach ($kataMap as $word => $color) {
            $banjirText = str_replace($word, '<span class="badge bg-' . $color . '">' . $word . '</span>', $banjirText);
        }


        $kata = DB::table('chat')->where('id', 1)->first();
        $emojitext = $kata->pesan;

        $emojiMap = [
            ':))' => '/assets/kodeSoalA/1.png',
            ':3'  => '/assets/kodeSoalA/2.png',
            ':P'  => '/assets/kodeSoalA/3.png',
            ':C'  => '/assets/kodeSoalA/4.png',
            ';)'  => '/assets/kodeSoalA/5.png',
        ];

        foreach ($emojiMap as $word => $imageUrl) {
            $emojitext = str_replace($word, '<img src="' . $imageUrl . '" alt="' . $word . '"width = 20"'.'">', $emojitext);
        }



        return view('latihanEAS.chat', ['banjirText' => $banjirText, 'emojiText' => $emojitext]);

    }

    public function indexMahasiswa()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
		$mahasiswa = DB::table('mahasiswa')->paginate(10);

    	// mengirim data belanja ke view index
		return view('latihanEAS.indexMahasiswa',['mahasiswa' => $mahasiswa]);

	}


        // method untuk edit data pegawai
	public function editMahasiswa($nrp)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$nrp)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('latihanEAS.edit_mahasiswa',['mahasiswa' => $mahasiswa]);
	}

    public function updateMahasiswa(Request $request)
	{

		// update data mahasiswa
		DB::table('mahasiswa')->where('NRP',$request->NRP)->update([
			'Nama' => $request->Nama,
			'Jurusan' => $request->Jurusan,
			'IPK' => $request->ipk
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mahasiswa');
	}

    public function lihatMahasiswa($nrp){
		// mengambil data pegawai berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$nrp)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('latihanEAS.lihat_mahasiswa',['mahasiswa' => $mahasiswa]);
	}

    public function indexKategori(){
    	// mengambil data dari table pegawai
		$kategori = DB::table('kategori')->paginate(10);

    	// mengirim data belanja ke view index
		return view('latihanEAS.index_c',['kategori' => $kategori]);

	}

    public function idKategori(Request $request){
		// mengambil data pegawai berdasarkan id yang dipilih
		$idkategori = $request->input('idkategori');
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('latihanEAS.kirim_kategori',['idkategori' => $idkategori]);
	}

    public function indexMahasiswaAktif()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
		$mahasiswa = DB::table('mahasiswaAktif')->where('is_aktif',1)->paginate(10);

    	// mengirim data belanja ke view index
		return view('latihanEAS.indexMahasiswaAktif',['mahasiswa' => $mahasiswa]);

	}

    public function indexNilaiKuliah(){
    	// mengambil data dari table pegawai
		$nilaikuliah = DB::table('nilaikuliah')->paginate(10);


        return view('latihanEAS.indexnilaikulliah',['nilaikuliah' => $nilaikuliah]);

	}

    public function tambah()
	{

		// memanggil view tambah
		return view('latihanEAS.tambahnilaikuliah');

	}

    public function store(Request $request){


        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'NilaiAngka' => $request->nilaiangka,
            'sks' => $request->sks,
        ]);

        return redirect('/nilaikuliah');
    }

}
