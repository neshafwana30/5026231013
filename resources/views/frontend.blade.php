@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-3 mb-n5">
                <ul class="filter font-alt" id="filters">
                    <li>
                        <a class="current wow fadeInUp" href="#" data-filter="*"
                            style="font-size: 20px; font-weight: bold">All</a>
                    </li>
                    <li>
                        <a class="wow fadeInUp" href="#" data-filter=".pertemuan" data-wow-delay="0.2s"
                            style="font-size: 20px; font-weight: 700">Praktik Pertemuan</a>
                    </li>
                    <li>
                        <a class="wow fadeInUp" href="#" data-filter=".tugas" data-wow-delay="0.6s"
                            style="font-size: 20px; font-weight: 700">Tugas-ETS</a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
            <li class="work-item pertemuan">
                <a href="/pertama">
                    <div class="work-image">
                        <img src="assets\images\mentoring-agama.png" alt="Portfolio Item"
                            style="height: 209px; object-fit: cover; " />
                    </div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">
                            Pertemuan 1 - Bantu Adaptasi Mahasiswa Baru, ITS Gelar Mentoring Agama Islam
                        </h3>
                    </div>
                </a>
            </li>
            <li class="work-item tugas">
                <a href="/kodesoal1">
                    <div class="work-image">
                        <img src="assets\images\ajuan-kontrak.png" alt="Portfolio Item" style="height: 209px" />
                    </div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Pengajuan Kontrak</h3>
                    </div>
                </a>
            </li>
            <li class="work-item pertemuan">
                <a href="/pertemuanketiga">
                    <div class="work-image">
                        <img src="assets\images\pertemuan3.png" alt="Portfolio Item" style="height: 209px" />
                    </div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Pertemuan 3 - Boostrap</h3>
                    </div>
                </a>
            </li>
            <li class="work-item pertemuan">
                <a href="/js1">
                    <div class="work-image">
                        <img src="assets\images\js1.png" alt="Portfolio Item" style="height: 209px" />
                    </div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Pertemuan 7 - Kalkulator</h3>
                    </div>
                </a>
            </li>
            <li class="work-item pertemuan">
                <a href="/js2">
                    <div class="work-image">
                        <img src="assets\images\js2.png" alt="Portfolio Item" style="height: 209px" />
                    </div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Pertemuan 7 - Form Pendaftaran Ise</h3>
                    </div>
                </a>
            </li>
            <li class="work-item tugas">
                <a href="/linktree">
                    <div class="work-image">
                        <img src="assets\images\linktree.png" alt="Portfolio Item"
                            style="height: 209px; object-fit: cover; display: flex" />
                    </div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Linktree - EdSheeran</h3>
                    </div>
                </a>
            </li>
            <li class="work-item tugas">
                <a href="ets">
                    <div class="work-image">
                        <img src="assets\images\ets.png" alt="Portfolio Item"
                            style="height: 209px; object-fit: cover; display: flex" />
                    </div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">ETS - Taylor Swift 1989</h3>
                    </div>
                </a>
            </li>
            {{-- <li class="work-item other">
                    <a href="portfolio_single_featured_video2.html">
                        <div class="work-image">
                            <img src="assets\images\latihan-ets.png" alt="Portfolio Item"
                                style="height: 209px; object-fit: cover; display: flex" />
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Latihan ETS - Taylor Swift 1989</h3>
                        </div>
                    </a>
                </li> --}}
        </ul>
    </div>

    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
@endsection
