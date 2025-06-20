@extends('template')

@section('content')
    <h3>Edit Informasi Karyawan</h3>
    <a href="/eas" class="btn btn-info"> Kembali</a>

    @foreach ($mykaryawan as $m)
        <form action="/eas/update" method="post">
            {{ csrf_field() }}
            {{-- biar server tau id nya apa --}}
            <input type="hidden" name="id" value="{{ $m->kodepegawai }}"> <br />

            <div class = "row">

                <div class = "col-3">
                    <p>kodepegawai</p>
                </div>
                <div class="col-9 d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="text" name="kodepegawai" id="kodepegawai" class="form-control"
                        style="flex:1"value="{{ $m->kodepegawai }}" readonly>
                </div>

                <div class = "col-3">
                    <p>Nama Lengkap</p>
                </div>

                <div class="col-9 d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="text" name="namalengkap" required="required" class="form-control" style="flex:1;"
                        value="{{ Str::title($m->namalengkap) }}">
                </div>

                <div class="col-3">
                    <p>Divisi</p>
                </div>


                <div class="col-9 d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="text" name="divisi" id="divisi" required="required" class="form-control"
                        style="flex:1" autocomplete="off" inputmode="text" value="{{ $m->divisi }}">
                </div>


                <div class = "col-3">
                    <p>Departemen</p>
                </div>
                <div class = "col-9  d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="text" name="departemen" required="required" class="form-control" step = "any"
                        value="{{ $m->departemen }}">
                </div>

                <div class = "col-9"></div>
                <div class = "col-3 mt-2">
                    <input type="submit" value="Simpan Perubahan" class="btn btn-success">
                </div>

            </div>

        </form>
    @endforeach
@endsection
