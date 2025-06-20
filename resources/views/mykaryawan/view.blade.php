@extends('template')

@section('content')
    @foreach ($mykaryawan as $m)
        </br>
        <h3>Informasi Karyawan <mark
                style="background-color: #7CB2D8; padding-right: 0.5em;padding-left: 0.5em; display: inline-block center; color: white; border-radius : 30px; padding : 5">
                {{ Str::title($m->namalengkap) }}
            </mark></h3>
        <a href="/eas" class="btn btn-info"> Kembali</a>

        <form>
            {{ csrf_field() }}
            {{-- biar server tau id nya apa --}}
            <input type="hidden" name="id" value="{{ $m->kodepegawai }}"> <br />

            <div class = "row">

                <div class = "col-3">
                    <p>Kode Pegawai</p>
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
                        value="{{ Str::title($m->namalengkap) }}" readonly>
                </div>

                <div class="col-3">
                    <p>Divisi</p>
                </div>


                <div class="col-9 d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="text" name="divisi" id="divisi" required="required" class="form-control"
                        style="flex:1" autocomplete="off" inputmode="text" value="{{ $m->divisi }}" readonly>
                </div>


                <div class = "col-3">
                    <p>Departemen</p>
                </div>
                <div class = "col-9  d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="text" name="departemen" required="required" class="form-control" step = "any"
                        value="{{ $m->departemen }}" readonly>
                </div>

            </div>

        </form>
    @endforeach
@endsection
