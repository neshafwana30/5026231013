@extends('template')

@section('content')
    <br />

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Data Mahasiswa</h2>
    </div>

    <br />

    <table class="table table-hover">
        <thead class="text-center">
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Tahun Masuk</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $m)
                <tr class="text-center">
                    <td>{{ $m->npm }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->jurusan }}</td>
                    <td>{{ $m->tahun_masuk }}</td>
                    <td>
                        <a href="/mahasiswa/{{ $m->npm }}" class="btn btn-birumuda">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $mahasiswa->links() }}
@endsection
