@extends('template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Tambah Nilai Mahasiswa</h2>
    </div>
    <a href="/nilaikuliah" class="btn btn-info"> Kembali</a>

    <br />
    <br />


    <form action="/nilaikuliah/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                <p>NRP</p>
            </div>
            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="text" name="nrp" id="nrp" required="required" class="form-control" style="flex:1"
                    autocomplete="off">
            </div>

            <div class="col-3">
                <p>Nilai Angka</p>
            </div>
            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="number" name="nilaiangka" id="nilaiangka" required="required" class="form-control"
                    style="flex:1" autocomplete="off" inputmode="numeric" min="0">
            </div>

            <div class="col-3">
                <p>SKS</p>
            </div>
            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="number" name="sks" id="sks" required="required" class="form-control" style="flex:1"
                    autocomplete="off" inputmode="numeric">
            </div>

            <div class="col-3">
                <p>Nilai Huruf</p>
            </div>
            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="text" name="huruf" id="huruf" class="form-control" style="flex:1" readonly>
            </div>


            <div class="col-3">
                <p>Bobot</p>
            </div>
            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="text" name="total" id="total" class="form-control" style="flex:1" readonly>
            </div>



            <div class="col-9"></div>
            <div class="col-3 mt-2">
                <input type="submit" value="Simpan Data" class="btn btn-danger">
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Format harga dan hitung total
            const sksnya = document.getElementById('sks');
            const nilaiangka = document.getElementById('nilaiangka');
            const totalInput = document.getElementById('total');
            const hurufInput = document.getElementById('huruf');

            function getNumericValue(str) {
                return parseInt(String(str).replace(/[^0-9]/g, '')) || 0;
            }

            function hitungTotal() {
                let nilai = getNumericValue(nilaiangka.value);
                let sks = getNumericValue(sksnya.value);
                let total = nilai * sks;
                totalInput.value = total ? total : '';
            }

            function nilaiHuruf() {
                let nilai = parseInt(nilaiangka.value) || 0;
                let huruf = "";
                if (nilai <= 40) {
                    huruf = "D"
                } else if (nilai <= 60 && nilai >= 41) {
                    huruf = "C"
                } else if (nilai <= 80 && nilai >= 61) {
                    huruf = "B"
                } else {
                    huruf = "A"
                }

                hurufInput.value = huruf ? huruf : '';
            }

            sks.addEventListener('input', function(e) {
                hitungTotal();
            });

            nilaiangka.addEventListener('input', function() {
                hitungTotal();
                nilaiHuruf()
            });

            // Inisialisasi total saat halaman dimuat
            hitungTotal();
            nilaiHuruf()

        });
    </script>
@endpush
