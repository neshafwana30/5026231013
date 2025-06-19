@extends('template')

@section('content')
    <div class="card shadow-sm p-3 mb-5 bg-white" style="width: 100%; border-radius: 25px;">
        <div class="card-body">
            <h5 class="card-title">Chat Box</h5>
            <p class="card-text">{!! $emojiText !!}</p>
        </div>
    </div>

    <div class="card shadow-sm p-3 mb-5 bg-white" style="width: 100%; border-radius: 25px;">
        <div class="card-body">
            <h5 class="card-title">Chat Box</h5>
            <p class="card-text">{!! $banjirText !!}</p>
        </div>
    </div>
@endsection
