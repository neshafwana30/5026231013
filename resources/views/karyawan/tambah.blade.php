@extends('template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Tambah Data Karyawan</h2>
    </div>
    <a href="/karyawan" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/karyawan/store" method="post">
        {{ csrf_field() }}
        <div class = "row">
            <div class = "col-3">
                <p>Kode Pegawai</p>
            </div>
            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="text" name="kodePegawai" required="required"
                    class="form-control @error('kodePegawai') is-invalid @enderror" style="flex:1;"
                    value="{{ old('kodePegawai') }}">
            </div>
            @if ($errors->has('kodePegawai'))
                <div class="col-8 offset-3">
                    <span class="text-danger">{{ $errors->first('kodePegawai') }}</span>
                </div>
            @endif

            <div class="col-3">
                <p>Nama Lengkap</p>
            </div>

            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="text" name="namaLengkap" id="namaLengkap" required="required" class="form-control"
                    style="flex:1" autocomplete="off" inputmode="text">
            </div>

            <div class="col-3">
                <p>Divisi</p>
            </div>

            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="text" name="divisi" id="divisi" required="required" class="form-control" style="flex:1"
                    autocomplete="off" inputmode="text">
            </div>

            <div class="col-3">
                <p>Departemen</p>
            </div>

            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="text" name="departemen" id="departemen" required="required" class="form-control"
                    style="flex:1" autocomplete="off" inputmode="text">
            </div>

            <div class = "col-10"></div>
            <div class = "col-2 mt-2">
                <input type="submit" value="Simpan Data" class="btn btn-birumuda">
            </div>

        </div>

    </form>
@endsection
