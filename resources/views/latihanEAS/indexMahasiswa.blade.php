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
                <th>NRP</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>IPK</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $m)
                <tr class="text-center">
                    <td>{{ $m->NRP }}</td>
                    <td>{{ $m->Nama }}</td>
                    <td>{{ $m->Jurusan }}</td>
                    <td>{{ $m->IPK }}</td>
                    <td>
                        <a href="/mahasiswa/edit/{{ $m->NRP }}" class="btn btn-danger">Edit</a>
                        <a href="/mahasiswa/{{ $m->NRP }}" class="btn btn-success">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $mahasiswa->links() }}
@endsection
