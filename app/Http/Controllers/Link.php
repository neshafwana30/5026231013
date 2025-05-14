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
}
