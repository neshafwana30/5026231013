@extends('template')

@section('content')
    <br />

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Data Karyawan</h2>
    </div>

    <table class="table">
        <thead class="text-center">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($karyawan as $k)
                <tr>
                    <td>{{ $k->kodepegawai }}</td>
                    <td>{{ strtoupper($k->namalengkap) }}</td>
                    <td>{{ $k->divisi }}</td>
                    <td>{{ strtolower($k->departemen) }}</td>

                    <td>
                        <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-birumuda">Hapus Data</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $karyawan->links() }}

    <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="mb-0"></h2>
        <a href="/karyawan/tambah" class="btn btn-primary">+ Tambah Karyawan Baru</a>
    </div>
@endsection
