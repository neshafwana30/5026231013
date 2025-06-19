@extends('template')

@section('content')
    <br />

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Data Nilai Mahasiswa</h2>
        <a href="/nilaikuliah/tambah" class="btn btn-primary">+ Tambah Nilai Mahasiswa</a>
    </div>


    <table class="table">
        <thead class="text-center">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>

            </tr>
        </thead>
        <tbody class="text-center">

            @foreach ($nilaikuliah as $k)
                <tr>
                    <td>{{ $k->ID }}</td>
                    <td>{{ $k->NRP }}</td>
                    <td>{{ $k->NilaiAngka }}</td>
                    <td>{{ $k->SKS }}</td>
                    <td>
                        @if ($k->NilaiAngka <= 40)
                            <span>D</span>
                        @elseif($k->NilaiAngka <= 60 and $k->NilaiAngka >= 41)
                            <span>C</span>
                        @elseif($k->NilaiAngka <= 80 and $k->NilaiAngka >= 61)
                            <span>B</span>
                        @else
                            <span>A</span>
                        @endif

                    </td>
                    <td>{{ $k->NilaiAngka * $k->SKS }}
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $nilaikuliah->links() }}
@endsection
