@extends('template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Data Belanja</h3>
        <a href="/belanja/tambah" class="btn btn-primary">+ Beli</a>
    </div>

    <table class="table">
        <thead>
            <tr class="text-center">
                <th style="line-height: 1.2; vertical-align: middle">Kode Pembelian</th>
                <th style="line-height: 1.2; vertical-align: middle">Kode Barang</th>
                <th style="line-height: 1.2; vertical-align: middle">Jumlah Pembelian </th>
                <th style="line-height: 1.2; vertical-align: middle">Harga Per Item</th>
                <th style = "vertical-align: middle">Total</th>
                <th style = "vertical-align: middle">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($belanja as $b)
                <tr class="text-center">
                    <td>{{ $b->ID }}</td>
                    <td>{{ $b->KodeBarang }}</td>
                    <td>{{ $b->Jumlah }}</td>
                    <td>Rp{{ number_format($b->Harga, 0, ',', '.') }}</td>
                    <td>Rp{{ number_format($b->Jumlah * $b->Harga, 0, ',', '.') }}</td>
                    <td>

                        <a href="/belanja/hapus/{{ $b->ID }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $belanja->links() }}
@endsection
