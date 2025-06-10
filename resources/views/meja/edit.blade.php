@extends('template')

@section('content')
    <h3>Edit Meja</h3>
    <a href="/meja" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($meja as $m)
        <form action="/meja/update" method="post">
            {{ csrf_field() }}
            {{-- biar server tau id nya apa --}}
            <input type="hidden" name="id" value="{{ $m->ID }}"> <br />

            <div class = "row">
                <div class = "col-2">
                    <p>Merk Meja</p>
                </div>
                <div class="col-10 d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="text" name="merkMeja" required="required" class="form-control" style="flex:1;"
                        value="{{ $m->merkmeja }}">
                </div>

                <div class="col-2">
                    <p>Harga Meja</p>
                </div>


                <div class="col-10 d-flex align-items-center">
                    <span class="mr-2">:</span>
                    <input type="text" name="hargaMeja" id="hargaMeja" required="required" class="form-control"
                        style="flex:1" autocomplete="off" inputmode="numeric" value="{{ $m->hargameja }}">
                </div>

                <div class="col-2 mt-1">
                    <p>Ketersediaan</p>
                </div>
                <div class="col-10 mt-1  d-flex align-items-center">
                    <div class="custom-control custom-switch">
                        <span class="mr-2">:</span>
                        <input type="checkbox" class="custom-control-input" id="ketersediaanSwitch" name="ketersediaan"
                            value="1" {{ $m->tersedia ? 'checked' : '' }}
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
                    <input type="number" name="berat" required="required" class="form-control" step = "any"
                        value="{{ $m->berat }}">
                </div>

                <div class = "col-10"></div>
                <div class = "col-2 mt-2">
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </div>

            </div>

        </form>
    @endforeach
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hargaInput = document.getElementById('hargaMeja');
        // Format value saat halaman pertama kali dimuat
        if (hargaInput.value) {
            let value = hargaInput.value.replace(/[^0-9]/g, '');
            hargaInput.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }

        hargaInput.addEventListener('input', function(e) {
            let value = this.value.replace(/[^0-9]/g, '');
            if (value) {
                this.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            } else {
                this.value = '';
            }
        });
    });

    // Set label sesuai default switch (jika ingin default ON, tambahkan checked pada input)
    document.addEventListener('DOMContentLoaded', function() {
        var switchEl = document.getElementById('ketersediaanSwitch');
        var labelEl = document.getElementById('labelKetersediaan');
        labelEl.innerText = switchEl.checked ? 'Tersedia' : 'Tidak Tersedia';
    });
    document.addEventListener('DOMContentLoaded', function() {
        var switchEl = document.getElementById('ketersediaanSwitch');
        var labelEl = document.getElementById('labelKetersediaan');
        labelEl.innerText = switchEl.checked ? 'Tersedia' : 'Tidak Tersedia';
    });
</script>
