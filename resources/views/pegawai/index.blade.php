@extends('template')

@section('content')
    <br />

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Data Pegawai</h2>
        <a href="/pegawai/tambah" class="btn btn-primary">+ Tambah Pegawai Baru</a>
    </div>

    <form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control " name="cari" placeholder="Cari Nama Pegawai...">
            <div class="input-group-append">
                <button class="btn btn-info" type="submit">Cari</button>
            </div>
        </div>
    </form>
    <br />

    <table class="table table-hover">
        <thead class="text-center">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td class="text-center">{{ $p->pegawai_jabatan }}</td>
                    <td class="text-center">{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td class="text-center">
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pegawai->links() }}
@endsection
