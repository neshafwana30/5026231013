@extends('template')

@section('content')
    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class = "row">
            <div class = "col-2">
                <p>Nama</p>
            </div>
            <div class = "col-10">
                <input type="text" name="nama" required="required" class="form-control">
            </div>

            <div class = "col-2">
                <p>Jabatan</p>
            </div>
            <div class = "col-10">
                <input type="text" name="jabatan" required="required" class="form-control">
            </div>

            <div class = "col-2">
                <p>Umur</p>
            </div>
            <div class = "col-10">
                <input type="number" name="Umur" required="required" class="form-control">
            </div>

            <div class = "col-2">
                <p>Alamat</p>
            </div>
            <div class = "col-10">
                <textarea name="alamat" required="required" class="form-control"></textarea> <br />
            </div>

            <div class = "col-10"></div>
            <div class = "col-2">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>

        </div>

    </form>
@endsection
