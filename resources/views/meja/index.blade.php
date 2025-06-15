@extends('template')

@section('content')
    <br />

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Data Meja</h2>
        <a href="/meja/tambah" class="btn btn-primary">+ Tambah Merk Meja Baru</a>
    </div>

    <form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control " name="cariMeja" placeholder="Cari Merk Meja...">
            <div class="input-group-append">
                <button class="btn btn-info" type="submit">Cari</button>
            </div>
        </div>
    </form>
    <br />

    <table class="table">
        <thead class="text-center">
            <tr>
                <th>Merek Meja</th>
                <th>Harga Meja</th>
                <th>Ketersediaan</th>
                <th>Berat</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($meja as $m)
                <tr>
                    <td>{{ $m->merkmeja }}</td>
                    <td>Rp{{ number_format($m->hargameja, 0, ',', '.') }}</td>
                    <td>
                        @if ($m->tersedia)
                            <span class="badge badge-success badge-pill">Tersedia</span>
                        @else
                            <span class="badge badge-danger badge-pill">Tidak Tersedia</span>
                        @endif
                    </td>
                    <td>{{ $m->berat }} Kg</td>
                    <td>
                        <a href="/meja/edit/{{ $m->ID }}" class="btn btn-success">Edit</a>
                        <a href="/meja/hapus/{{ $m->ID }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $meja->links() }}
@endsection
