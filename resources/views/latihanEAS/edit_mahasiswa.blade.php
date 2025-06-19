@extends('template')

@section('content')
    <h3>Edit Informasi Mahasiswa</h3>
    <a href="/mahasiswa" class="btn btn-info"> Kembali</a>

    @foreach ($mahasiswa as $m)
        <form action="/mahasiswa/update" method="post">
            {{ csrf_field() }}
            {{-- biar server tau id nya apa --}}
            <input type="hidden" name="id" value="{{ $m->NRP }}"> <br />

            <div class = "row">

                <div class = "col-2">
                    <p>NRP</p>
                </div>
                <div class="col-10 d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="text" name="NRP" id="NRP" class="form-control"
                        style="flex:1"value="{{ $m->NRP }}" readonly>
                </div>

                <div class = "col-2">
                    <p>Nama</p>
                </div>

                <div class="col-10 d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="text" name="Nama" required="required" class="form-control" style="flex:1;"
                        value="{{ $m->Nama }}">
                </div>

                <div class="col-2">
                    <p>Jurusan</p>
                </div>


                <div class="col-10 d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="text" name="Jurusan" id="Jurusan" required="required" class="form-control"
                        style="flex:1" autocomplete="off" inputmode="numeric" value="{{ $m->Jurusan }}">
                </div>


                <div class = "col-2">
                    <p>IPK</p>
                </div>
                <div class = "col-10  d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="number" name="ipk" required="required" class="form-control" step = "any"
                        value="{{ $m->IPK }}">
                </div>

                <div class = "col-10"></div>
                <div class = "col-2 mt-2">
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </div>

            </div>

        </form>
    @endforeach
@endsection

