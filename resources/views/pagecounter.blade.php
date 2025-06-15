@extends('template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="alert alert-success" role="alert">
            {{-- Display the visitor count --}}
            Anda adalah pengunjung ke: {{ $pagecounter->jumlah }}
        </div>
    </div>
@endsection
