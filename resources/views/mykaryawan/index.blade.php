@extends('template')

@section('content')
    <br />

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Data Karyawan</h2>
    </div>

    <br />

    <table class="table table-hover">
        <thead class="text-center">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($mykaryawan as $m)
                <tr class="text-center">
                    <td>{{ $m->kodepegawai }}</td>
                    <td>{{ Str::title($m->namalengkap) }}</td>
                    <td>{{ $m->divisi }}</td>
                    <td>{{ $m->departemen }}</td>
                    <td>
                        <a href="/eas/edit/{{ $m->kodepegawai }}" class="btn btn-danger">Edit</a>
                        <a href="/eas/{{ $m->kodepegawai }}" class="btn btn-success">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
