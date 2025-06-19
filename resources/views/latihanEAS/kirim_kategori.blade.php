@extends('template')

@section('content')
    <a href="/kategori" class="btn btn-info mb-3"> Kembali</a>
    <div class="card shadow-sm p-1 mb-5 bg-white" style="width: 100%; border-radius: 25px;">
        <div class="card-body">
            <h5 class="card-title">Berhasil!</h5>
            <p class="card-text"> Anda telah memilih Kategori dengan Kode : <mark style="background:#6186b6c4; color : white">
                    {{ $idkategori }}</mark> </p>
        </div>
    </div>
@endsection
