<?php

namespace App\Http\Controllers; //ini tuh package
use Illuminate\Http\Request; //ini importtt

class Link extends Controller //ngambil dari parent
{
    //Bikin Function
    //public function namafunction()
    public function helloworld(){
        return view('blog');
    }

    public function index(){
        $nama = "Diki Alfarabi Hadi";
        $umur = 30;
        $alamat = "Surabaya";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['nama'=>$nama, 'usia'=>$umur, 'alamat'=>$alamat, 'matkul'=>$pelajaran]);
    }
}
