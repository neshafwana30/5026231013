@extends('template')

@section('content')
    <form action="/kategori/lihat/" method="get">
        {{ csrf_field() }}
        {{-- biar server tau id nya apa --}}
        <div class = "row">

            <div class="mb-n2">
                <p>Kategori : </p>
            </div>

            <select class="form-control rounded form-select" name = "idkategori" style = "border-radius = 10px;">
                @foreach ($kategori as $k)
                    <option value ="{{ $k->ID }}">{{ $k->Nama }}</option>
                @endforeach

            </select>

            <div class = "col-10"></div>
            <div class = "col-2 mt-2">
                <input type="submit" value=" Kirim " class="btn btn-birumuda">
            </div>

        </div>

    </form>
@endsection
