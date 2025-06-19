<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nesha Shafwana : 5026231013</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="assets/css/few.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        body {
            background-color: #f7f0f0;
        }

        .jumbotron {
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 5px;
            padding: 0;
            color: #343a40;
            background: linear-gradient(to bottom, #6DA0E1 0%, #f7f0f0 100%);

        }

        .jumbotron h1 {
            margin: 0;
            font-size: 2.5rem;
            background: linear-gradient(to bottom, #454749 0%, #313030 40%, #454749 80%);

            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
        }

        .custom-navbar-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .custom-navbar {
            background-color: white;
            border-radius: 50px;
            padding: 7px 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            max-width: fit-content;
            overflow: hidden;
        }

        .custom-navbar .navbar-nav {
            flex-direction: row;
            align-items: center;
            position: relative;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .custom-navbar .nav-item {
            position: relative;
            margin-right: 0px;
        }

        .custom-navbar .nav-link {
            color: #6c757d;
            font-weight: 600;
            padding: 8px 18px !important;
            border-radius: 30px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
            display: block;
            text-decoration: none;
        }

        .custom-navbar .nav-link:last-child {
            margin-right: 0;
        }

        .custom-navbar .nav-link:hover {
            color: #658ec4 !important;
            /* Warna teks saat hover, non-aktif */
        }

        /* Gaya untuk indicator sliding */
        .custom-navbar .nav-indicator {
            position: absolute;
            background-color: #4F7AB1;
            border-radius: 30px;
            transition: left 1s ease, width 1s ease;
            z-index: 1;
            top: 0;
            height: 100%;
            /* Contoh: SkyBlue ke warna biru Anda */
            box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.138),
                inset 0px -2px 5px rgba(255, 255, 255, 0.3);

        }

        .custom-navbar .nav-item.active .nav-link {
            color: white !important;
            /* Teks putih untuk link aktif */
        }
    </style>

    {{-- Style untuk tabel --}}
    <style>
        .table {
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            background-color: white;
        }

        .table th,
        .table td {
            padding: 12px 15px;
            border-top: none;
            border-bottom: 1px solid #e0e0e0;
        }

        .table thead th {
            background-color: #4F7AB1;
            color: #e0e0e0;
            font-weight: 600;
            border-bottom: 5px solid #F7F0F0;
        }

        .table tbody tr {
            transition: background-color 0.2s ease;
            cursor: pointer;
        }

        .table tbody tr:hover {
            background-color: #a2c6e8ca;
        }

        .table thead tr:first-child th:last-child {
            border-top-right-radius: 15px;
        }

        .table tbody tr:last-child td:first-child {
            border-bottom-left-radius: 15px;
        }

        .table tbody tr:last-child td:last-child {
            border-bottom-right-radius: 15px;
        }

        .table .btn {
            padding: .25rem .75rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem;
        }

        .btn-info {
            background-color: #6DA0E1;
            border-color: #6DA0E1;
        }

        .btn-info:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .badge {
            padding: .4em .8em;
            font-size: 85%;
            font-weight: 600;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            display: inline-block;
            opacity: 0.9;
        }

        /* Warna untuk "Tersedia" (mirip Active di gambar) */
        .badge-success {
            color: #23853a;
            background-color: #d4edda;
        }

        /* Warna untuk "Tidak Tersedia" (mirip Inactive di gambar) */
        .badge-danger {
            color: #a2343f;
            background-color: #f8c9cd;
        }

        .badge-pill {
            border-radius: 50rem;
            /* Membuat sudut sangat bulat seperti pil */
        }

        .input-group .form-control {
            border-radius: 0.25rem;
            border-right: none;
        }

        .input-group-append .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-left: none;
        }

        .input-group>.form-control:not(:last-child),
        .input-group>.form-control:not(:first-child) {
            border-radius: 0;
        }

        .input-group .form-control:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .input-group .btn:last-child {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        /* Gaya umum untuk semua tombol Bootstrap */
        .btn {
            border-radius: 1rem;
            transition: background-color 0.2s ease, border-color 0.2s ease;
        }

        /* Override untuk button di dalam tabel, jika Anda ingin radius yang berbeda */
        .table .btn {
            padding: .25rem .75rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 1rem;
        }

        .btn-info {
            background-color: #4F7AB1;
            border-color: #4F7AB1;
        }

        .btn-info:hover {
            background-color: #102C54;
            border-color: #102C54;
        }

        /* Mengubah warna button Tambah Pegawai Baru menjadi biru utama juga */
        .btn-primary {
            background-color: #4F7AB1;
            border-color: #4F7AB1;
        }

        .btn-primary:hover {
            background-color: #102C54;
            border-color: #102C54;
        }

        /* --- Modifikasi Warna Button Edit (btn-success) --- */
        .btn-success {
            background-color: #CEB5D3;
            border-color: #CEB5D3;
            color: #6A4472
        }

        .btn-success:hover {
            background-color: #a994ad;
            /* Warna hover untuk hijau */
            border-color: #a994ad;
        }

        .btn-birumuda {
            background-color: #7CB2D8;
            border-color: #7CB2D8;
            color: #ffffff;
            font-weight: 500;
            /* Or 700 for bolder */
        }

        .btn-birumuda:hover {
            background-color: #468cac;
            /* Warna hover untuk hijau */
            border-color: #468cac;
            color: #102C54
        }

        /* --- Modifikasi Warna Button Hapus (btn-danger) --- */
        .btn-danger {
            background-color: #5B62B3;
            /* Contoh warna merah default Bootstrap. Ganti dengan warna pilihan Anda. */
            border-color: #5B62B3;
        }

        .btn-danger:hover {
            background-color: #4a5093;
            /* Warna hover untuk merah */
            border-color: #4a5093;
        }

        .pagination {
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: .25rem;
            justify-content: center;
            margin-top: 20px;
            color: rgba(0, 0, 0, 0.05);
        }

        .page-item:first-child .page-link {
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem;
        }

        .page-item:last-child .page-link {
            border-top-right-radius: .25rem;
            border-bottom-right-radius: .25rem;
        }

        .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #4F7AB1;
            /* Warna teks link pagination normal */
            background-color: #fff;
            /* Warna background link pagination normal */
            border: 1px solid #dee2e6;
            /* Border link pagination normal */
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .page-link:hover {
            z-index: 2;
            color: #102C54;
            /* Warna teks saat hover */
            background-color: #e9d5b399;
            /* Warna background saat hover */
            border-color: #e9d5b399;
            text-decoration: none;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            /* Warna teks link aktif */
            background-color: #4F7AB1;
            /* Warna background link aktif (biru utama Anda) */
            border-color: #4F7AB1;
            /* Warna border link aktif */
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            background-color: #fff;
            border-color: #dee2e6;
        }

        .form-select:focus {
            border-color: #6A4472;
            box-shadow: 0 0 0 0.25rem #CEB5D3;
        }
    </style>
</head>
@stack('scripts')

<body>
    <div class="jumbotron text-center mx-auto">
        <h1>Nesha Shafwana : 5026231013</h1>
    </div>

    <div class="custom-navbar-container">
        <nav class="navbar navbar-expand-sm custom-navbar">
            <ul class="navbar-nav" id="mainNavbar">
                <div class="nav-indicator"></div>

                <li class="nav-item" data-url="/frontend">
                    <a class="nav-link" href="/frontend">All Front End</a>
                </li>
                <li class="nav-item" data-url="/pegawai">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item" data-url="/meja">
                    <a class="nav-link" href="/meja">Tugas CRUD</a>
                </li>
                <li class="nav-item" data-url="/eas">
                    <a class="nav-link" href="/eas">EAS</a>
                </li>
                <li class="nav-item" data-url="/belanja">
                    <a class="nav-link" href="/belanja">Latihan 1</a>
                </li>
                <li class="nav-item" data-url="/pageCounter">
                    <a class="nav-link" href="/pageCounter">Latihan 2</a>
                </li>
                <li class="nav-item" data-url="/karyawan">
                    <a class="nav-link" href="/karyawan">Latihan 3</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <script>
        $(document).ready(function() {
            function activateMenuItem() {
                const currentPath = window.location.pathname;
                const navItems = $('#mainNavbar .nav-item');
                const navIndicator = $('.nav-indicator');

                // Reset semua teks link menjadi warna default sebelum menentukan yang aktif
                navItems.find('.nav-link').css('color', '#6c757d');
                navItems.removeClass('active');

                let activeItemFound = false;
                let targetLink = null;

                navItems.each(function() {
                    let itemUrl = $(this).data('url');

                    // Normalisasi URL untuk perbandingan yang lebih baik (hapus trailing slash kecuali untuk root)
                    let normalizedCurrentPath = currentPath.endsWith('/') && currentPath.length > 1 ?
                        currentPath.slice(0, -1) : currentPath;
                    let normalizedItemUrl = itemUrl.endsWith('/') && itemUrl.length > 1 ? itemUrl.slice(0, -
                        1) : itemUrl;

                    // Khusus untuk root path (/)
                    if (normalizedItemUrl === '/' && normalizedCurrentPath === '/') {
                        $(this).addClass('active');
                        targetLink = $(this).find('.nav-link');
                        activeItemFound = true;
                        return false;
                    }
                    // Untuk path lainnya, cek apakah path saat ini dimulai dengan path item
                    else if (normalizedItemUrl !== '/' && normalizedCurrentPath.startsWith(
                            normalizedItemUrl)) {
                        $(this).addClass('active');
                        targetLink = $(this).find('.nav-link');
                        activeItemFound = true;
                        return false;
                    }
                });

                // Jika tidak ada item aktif yang ditemukan, set item pertama sebagai default
                if (!activeItemFound && navItems.length > 0) {
                    navItems.first().addClass('active');
                    targetLink = navItems.first().find('.nav-link');
                }

                // Pindahkan dan sesuaikan ukuran indicator
                if (targetLink && targetLink.length > 0) {
                    // Pastikan kita mendapatkan posisi relatif terhadap parent yang benar (ul.navbar-nav)
                    const indicatorParentOffset = $('#mainNavbar').offset().left; // Offset dari UL
                    const targetLinkOffset = targetLink.offset().left; // Offset dari link aktif

                    navIndicator.css({
                        // left: targetLink.position().left + 'px', // Ini jika parent diatur relative ke LI
                        left: (targetLinkOffset - indicatorParentOffset) +
                            'px', // Offset relatif terhadap UL
                        width: targetLink.outerWidth() + 'px',
                        height: targetLink.outerHeight() + 'px'
                    });
                    // Atur warna teks link aktif menjadi putih
                    targetLink.css('color', 'white');
                } else {
                    // Sembunyikan indicator jika tidak ada item aktif
                    navIndicator.css({
                        width: '0',
                        left: '0'
                    });
                }
            }

            // Panggil fungsi saat halaman dimuat
            activateMenuItem();

            // Panggil juga saat window di-resize untuk responsivitas indicator
            $(window).resize(function() {
                // Beri sedikit delay agar rendering selesai sebelum perhitungan
                setTimeout(activateMenuItem, 50);
            });

            // Tambahkan event listener untuk klik pada nav-link
            $('#mainNavbar .nav-item').on('click', function(e) {
                // Hapus kelas 'active' dari semua item
                $('#mainNavbar .nav-item').removeClass('active');
                // Tambahkan kelas 'active' ke item yang diklik
                $(this).addClass('active');
                activateMenuItem(); // Panggil lagi untuk menggerakkan indicator
                // Karena ini akan me-reload halaman, fungsi activateMenuItem() akan berjalan lagi saat halaman baru dimuat.
                // Fungsi ini di sini lebih ke respons visual instan.
            });
        });
    </script>
</body>

</html>
