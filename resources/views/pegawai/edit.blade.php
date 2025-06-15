@extends('template')

@section('content')
    <h3>Edit Pegawai</h3>

    <a href="/pegawai" class="btn btn-info"> Kembali</a>


    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />

            <div class = "row">
                <div class = "col-2">
                    <p>Nama</p>
                </div>
                <div class = "col-10">
                    <input type="text" name="nama" required="required" class="form-control"
                        value="{{ $p->pegawai_nama }}">
                </div>

                <div class = "col-2">
                    <p>Jabatan</p>
                </div>
                <div class = "col-10">
                    <input type="text" name="jabatan" required="required" class="form-control"
                        value="{{ $p->pegawai_jabatan }}">
                </div>

                <div class = "col-2">
                    <p>Umur</p>
                </div>
                <div class = "col-10">
                    <input type="number" name="Umur" required="required" class="form-control"
                        value="{{ $p->pegawai_umur }}">
                </div>

                <div class = "col-2">
                    <p>Alamat</p>
                </div>
                <div class = "col-10">
                    <textarea name="alamat" required="required" class="form-control">{{ $p->pegawai_alamat }}</textarea> <br />
                </div>

                <div class = "col-10"></div>
                <div class = "col-2">
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </div>

            </div>
    @endforeach
@endsection
