@extends('template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Data Meja</h3>
        <a href="/meja/tambah" class="btn btn-primary">+ Tambah Meja Baru</a>
    </div>
    <br />
    
    <h5>Cari Data Meja :</h5>
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
            <th>Merek Meja</th>
            <th>Harga Meja</th>
            <th>Ketersediaan</th>
            <th>Berat</th>
            <th>Edit</th>

        </tr>
        @foreach ($meja as $m)
            <tr>
                <td>{{ $m->merkmeja }}</td>
                <td>Rp{{ number_format($m->hargameja, 0, ',', '.') }}</td>
                <td>
                    @if ($m->tersedia)
                        <span class="badge badge-success">Tersedia</span>
                    @else
                        <span class="badge badge-danger">Tidak Tersedia</span>
                    @endif
                </td>
                <td>{{ $m->berat }} Kg</td>
                <td>
                    <a href="/meja/edit/{{ $m->ID }}" class="btn btn-success" color = "">Edit</a>

                    <a href="/meja/hapus/{{ $m->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $meja->links() }}
@endsection
