@extends('template')

@section('content')
    <a href="/meja" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/meja/store" method="post">
        {{ csrf_field() }}
        <div class = "row">
            <div class = "col-2">
                <p>Merk Meja</p>
            </div>
            <div class="col-10 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="text" name="merkMeja" required="required"
                    class="form-control @error('merkMeja') is-invalid @enderror" style="flex:1;"
                    value="{{ old('merkMeja') }}">
            </div>
            @if ($errors->has('merkMeja'))
                <div class="col-10 offset-2">
                    <span class="text-danger">{{ $errors->first('merkMeja') }}</span>
                </div>
            @endif

            <div class="col-2">
                <p>Harga Meja</p>
            </div>


            <div class="col-10 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="text" name="hargaMeja" id="hargaMeja" required="required" class="form-control"
                    style="flex:1" autocomplete="off" inputmode="numeric">
            </div>

            <div class="col-2 mt-1">
                <p>Ketersediaan</p>
            </div>
            <div class="col-10 mt-1  d-flex align-items-center">
                <div class="custom-control custom-switch">
                    <span class="mr-2">:</span>
                    <input type="checkbox" class="custom-control-input" id="ketersediaanSwitch" name="ketersediaan"
                        value="1"
                        onchange="document.getElementById('labelKetersediaan').innerText = this.checked ? 'Tersedia' : 'Tidak Tersedia';">
                    <label class="custom-control-label" for="ketersediaanSwitch" id="labelKetersediaan">Tidak
                        Tersedia</label>
                </div>
            </div>

            <div class = "col-2">
                <p>Berat</p>
            </div>
            <div class = "col-10  d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="number" name="berat" required="required" class="form-control" step = "any">
            </div>

            <div class = "col-10"></div>
            <div class = "col-2 mt-2">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>

        </div>

    </form>
@endsection
<script>
    // Set label sesuai default switch (jika ingin default ON, tambahkan checked pada input)
    document.addEventListener('DOMContentLoaded', function() {
        var switchEl = document.getElementById('ketersediaanSwitch');
        var labelEl = document.getElementById('labelKetersediaan');
        labelEl.innerText = switchEl.checked ? 'Tersedia' : 'Tidak Tersedia';
    });

    document.addEventListener('DOMContentLoaded', function() {
        const hargaInput = document.getElementById('hargaMeja');
        hargaInput.addEventListener('input', function(e) {
            let value = this.value.replace(/[^0-9]/g, '');
            if (value) {
                this.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            } else {
                this.value = '';
            }
        });
    });
</script>
