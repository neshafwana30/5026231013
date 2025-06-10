@extends('template')

@section('content')
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah"class="btn btn-primary"> + Tambah Pegawai Baru</a>
    <br />

    <h3>Cari Data Pegawai :</h3>
    <form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="cariMeja" placeholder="Cari Meja ...">
            <div class="input-group-append">
                <button class="btn btn-info" type="submit">Cari</button>
            </div>
        </div>
    </form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>

                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $pegawai->links() }}
@endsection
