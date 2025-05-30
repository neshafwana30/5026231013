<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Taylor Swift 1989</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="asetpwebfinal/1989tv.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .btn-blue-gradiant {
            background: #4b83b8;
            background: -webkit-linear-gradient(legacy-direction(to right),
                    #4b83b8 0%,
                    #6cbad0 100%);
            background: -webkit-gradient(linear,
                    left top,
                    right top,
                    from(#4b83b8),
                    to(#6cbad0));
            background: -webkit-linear-gradient(left, #4b83b8 0%, #6cbad0 100%);
            background: -o-linear-gradient(left, #4b83b8 0%, #6cbad0 100%);
            background: linear-gradient(to right, #4b83b8 0%, #6cbad0 100%);
        }

        .contact2 .btn-blue-gradiant:hover {
            background: #6cbad0;
            background: -webkit-linear-gradient(legacy-direction(to right),
                    #6cbad0 0%,
                    #4b83b8 100%);
            background: -webkit-gradient(linear,
                    left top,
                    right top,
                    from(#6cbad0),
                    to(#4b83b8));
            background: -webkit-linear-gradient(left, #6cbad0 0%, #4b83b8 100%);
            background: -o-linear-gradient(left, #6cbad0 0%, #4b83b8 100%);
            background: linear-gradient(to right, #6cbad0 0%, #4b83b8 100%);
        }

        .contact2 {
            font-family: "Montserrat", sans-serif;
            color: #8d97ad;
            font-weight: 300;
            padding: 60px 0;
            margin-bottom: 170px;
            background-position: center top;
        }

        .contact2 .bg-image {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 300px;
            height: 100%;
            border-radius: 0 0.25rem 0.25rem 0;
        }

        @media (max-width: 991.98px) {
            .contact2 .bg-image {
                min-height: 200px;
                border-radius: 0 0 0.25rem 0.25rem;
                margin-top: 20px;
            }
        }

        @media (max-width: 575.98px) {
            .contact2 .bg-image {
                min-height: 150px;
                height: 150px;
            }
        }

        #nama:focus,
        #email:focus {
            border-color: #034a62 !important;
            box-shadow: 0 0 0 0.2rem rgba(3, 74, 98, 0.25);
        }
    </style>
    <script>
        function validasi() {
            var nama = document.getElementById("nama").value;
            var email = document.getElementById("email").value;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (nama.length == 0) {
                Swal.fire({
                    title: "Error",
                    text: "Fillout your name first!",
                    confirmButtonText: "OK",
                    customClass: {
                        confirmButton: "btn btn-blue-gradiant text-white",
                    },
                    buttonsStyling: false,
                    color: "#034a62",
                });
                document.getElementById("nama").focus();
                return false;
            }
            if (!/^[a-zA-Z\s]+$/.test(nama)) {
                Swal.fire({
                    title: "Error",
                    text: "Your name are invalid!",
                    confirmButtonText: "OK",
                    customClass: {
                        confirmButton: "btn btn-blue-gradiant text-white",
                    },
                    buttonsStyling: false,
                    color: "#034a62",
                });
                document.getElementById("nama").focus();
                return false;
            }
            if (nama.length < 4) {
                Swal.fire({
                    title: "Error",
                    text: "Name Length Minimum is 4 Character",
                    confirmButtonText: "OK",
                    customClass: {
                        confirmButton: "btn btn-blue-gradiant text-white",
                    },
                    buttonsStyling: false,
                    color: "#034a62",
                });
                document.getElementById("nama").focus();
                return false;
            }

            if (email.length == 0) {
                Swal.fire({
                    title: "Error",
                    text: "Fillout your email",
                    confirmButtonText: "OK",
                    customClass: {
                        confirmButton: "btn btn-blue-gradiant text-white",
                    },
                    buttonsStyling: false,
                    color: "#034a62",
                });
                document.getElementById("email").focus();
                return false;
            }
            if (!emailPattern.test(email)) {
                Swal.fire({
                    title: "Error",
                    text: "Your email are invalid",
                    confirmButtonText: "OK",
                    customClass: {
                        confirmButton: "btn btn-blue-gradiant text-white",
                    },
                    buttonsStyling: false,
                    color: "#034a62",
                });
                document.getElementById("email").focus();
                return false;
            }

            Swal.fire({
                title: "Thank You!",
                text: "Taylor Swift Gonna notify when there's any update",
                imageUrl: "asetpwebfinal/1989collage.jpg",
                imageAlt: "Taylor Swift 1989 Collage",
                confirmButtonText: "OK",
                customClass: {
                    confirmButton: "btn btn-blue-gradiant text-white",
                },
                buttonsStyling: false,
            }).then(function() {
                document.getElementById("frmDaftar").reset();
            });

            return false;
        }
    </script>
</head>

<body id="page-top">
    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <img src="asetpwebfinal\1989tv.png" alt="1989tv" style="max-width: 300px; margin-bottom: 16px" />
            <h2 class="mb-1" style="color: #034a62">
                I'm Taylor Swift, I Was Born in 1989
            </h2>
            <p class="mb-5" style="color: #034a62; font-size: 20px">
                <em>This album is more than just songs—it's a piece of my
                    soul reclaimed. Every lyric is a snapshot of glittering
                    city lights, heartbreak turned into melody, and the
                    freedom of finding myself. ‘1989 (Taylor’s Version)’
                    isn’t just a return—it’s a rebirth. Welcome to the story
                    told the way it was always meant to be heard</em>
            </p>
        </div>
    </header>
    <!-- Portfolio-->
    <section class="content-section" id="portfolio">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h2 class="mb-5" style="color: #034a62">1989 Era</h2>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2" style="font-size: 30px">
                                    She Owns It Now
                                </div>
                                <p class="mb-0">
                                    Reclaiming what was once taken, Taylor’s
                                    version of 1989 isn’t just a
                                    re-recording — it’s a declaration. Every
                                    lyric, every harmony, is now hers to own
                                    and share. It's not just about music
                                    rights, it's about rewriting the story
                                    on her own terms.
                                </p>
                            </div>
                        </div>
                        <img class="img-fluid" style="aspect-ratio: 1/1" src="asetpwebfinal\1989_1.png"
                            alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2" style="font-size: 30px">
                                    The Vault is Open!
                                </div>
                                <p class="mb-0">
                                    Hidden lyrics, long-lost melodies — the
                                    vault tracks are finally here. These
                                    songs were written in the same heartbeat
                                    as the originals, but never saw the
                                    light until now. They bridge the past
                                    and present, revealing the raw, untold
                                    emotions that 1989 quietly held all
                                    along
                                </p>
                            </div>
                        </div>
                        <img class="img-fluid" style="aspect-ratio: 1/1" src="asetpwebfinal\1989_19.png"
                            alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2" style="font-size: 30px">
                                    A Love Letter to Her Fans
                                </div>
                                <p class="mb-0">
                                    This re-recording isn’t just for her —
                                    it’s for the ones who stayed. The ones
                                    who danced to Shake It Off,” cried to
                                    “Clean,” sang their hearts out to
                                    “Style,” and grew up alongside her. 1989
                                    (Taylor’s Version) is a gift, a memory
                                    remade with love.
                                </p>
                            </div>
                        </div>
                        <img class="img-fluid" style="aspect-ratio: 1/1" src="asetpwebfinal\1989_198.png"
                            alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2" style="font-size: 30px">
                                    Aesthetic Time Capsule
                                </div>
                                <p class="mb-0">
                                    1989 (Taylor’s Version) captures a world
                                    frozen in soft blue tones, Polaroid
                                    textures, and ocean breezes. it’s a
                                    flashback to the moment she stepped into
                                    pop stardom. Every photo, every detail,
                                    is a window into who she was and who
                                    she’s become.
                                </p>
                            </div>
                        </div>
                        <img class="img-fluid" style="aspect-ratio: 1/1" src="asetpwebfinal\1989_1989.png"
                            alt="..." />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services-->
    <section class="content-section bg-primary text-white text-center" style="background-color: #034a62" id="services">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h2 class="mb-5" style="color: #d1f3ff">
                    Stream 1989 Taylor's Version on
                </h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <div class="service-icon rounded-circle mx-auto mb-3">
                        <svg class="w-100 position-relative start-50 translate-middle" width="50" height="50"
                            viewBox="0 0 39 39" xmlns="http://www.w3.org/2000/svg"
                            style="
                                    background: transparent;
                                    display: block;
                                    top: 55;
                                ">
                            <path fill="#034a62"
                                d="M19.8948 0.0030116C8.85294 -0.187438 0.00338577 8.67988 0 19.505C0.0101573 30.3107 8.68957 38.809 19.122 39.0231C29.9251 39.2449 38.9787 30.6569 39.0701 19.6896C39.1606 8.79162 30.4668 0.184997 19.8948 0.0030116ZM28.4845 28.132C28.1205 28.7245 27.4061 28.887 26.7789 28.5095C24.2514 26.9859 21.5013 26.175 18.5718 25.9194C15.5999 25.6604 12.6772 25.9871 9.77979 26.6312C9.28801 26.7404 8.84617 26.6727 8.49913 26.2884C8.18848 25.9448 8.1013 25.5359 8.25112 25.0924C8.38993 24.6827 8.67942 24.411 9.09671 24.3128C10.7126 23.9336 12.3462 23.6653 14.001 23.5248C14.8457 23.4528 15.6922 23.4021 16.5412 23.4105C19.9092 23.4198 23.151 24.0183 26.2118 25.4691C26.8348 25.7645 27.4425 26.0878 28.0308 26.4467C28.658 26.8301 28.8467 27.5403 28.4836 28.132H28.4845ZM28.7824 23.3123C27.4349 22.5057 26.0137 21.8675 24.5223 21.3816C22.0794 20.5876 19.5731 20.1754 17.0067 20.1018C14.3904 20.0264 11.8231 20.3092 9.30832 21.0515C8.4932 21.2919 7.66284 20.8196 7.43176 20.0264C7.19899 19.2299 7.64168 18.4064 8.46019 18.155C10.0388 17.6699 11.6555 17.3661 13.2985 17.1993C14.4767 17.0791 15.6592 17.0165 16.8425 17.0512C21.6181 17.19 26.1508 18.2345 30.2959 20.6985C30.8096 21.0032 31.0839 21.4459 31.0949 21.8928C31.0898 23.2268 29.8168 23.9319 28.7833 23.3123H28.7824ZM33.0671 17.2078C32.4678 17.6302 31.8068 17.6928 31.1694 17.3246C28.9712 16.0532 26.6045 15.2474 24.1312 14.7235C22.2784 14.3307 20.4043 14.1064 18.5125 14.0108C16.5352 13.9109 14.5639 13.9701 12.5984 14.1961C11.1629 14.3612 9.74932 14.638 8.35946 15.0409C7.36743 15.3287 6.36524 14.7362 6.10877 13.7382C5.86923 12.8054 6.40249 11.8532 7.34542 11.5629C8.84363 11.1007 10.3799 10.8129 11.934 10.6191C13.5067 10.4227 15.0878 10.3355 16.9619 10.3288C20.891 10.3643 25.0251 10.9145 29.0152 12.3424C30.3847 12.8325 31.7094 13.425 32.9545 14.1801C34.0871 14.8674 34.1463 16.4468 33.0671 17.2078Z" />
                        </svg>
                    </div>

                    <h4><strong>Spotify</strong></h4>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <div class="service-icon rounded-circle mx-auto mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-100 position-relative start-50 translate-middle-x" width="60" height="60"
                            viewBox="0 0 50 50"
                            style="
                                    background: transparent;
                                    display: block;
                                    top: 25;
                                ">
                            <path fill="#034a62"
                                d="M36,5H14c-4.971,0-9,4.029-9,9v22c0,4.971,4.029,9,9,9h22c4.971,0,9-4.029,9-9V14C45,9.029,40.971,5,36,5z M38.19,21.254	c0.65-0.279,1.42-0.317,2.07-0.121c0.27,0.084,0.51,0.196,0.74,0.335v1.23c-0.72-0.494-1.55-0.634-2.19-0.289	c-0.68,0.373-1.08,1.155-1.06,1.975c-0.01,0.904,0.29,1.742,0.92,2.133c0.56,0.382,1.44,0.382,2.33,0.242v1.025	c-0.35,0.112-0.72,0.177-1.1,0.214c-0.63,0.047-1.33-0.047-1.95-0.382c-0.63-0.326-1.09-0.894-1.35-1.463	c-0.25-0.587-0.34-1.183-0.35-1.752C36.22,23.191,36.87,21.831,38.19,21.254z M34,18.01c0.552,0,1,0.448,1,1s-0.448,1-1,1	s-1-0.448-1-1S33.448,18.01,34,18.01z M34.75,21.01v7h-1.5v-7H34.75z M27,26.175c0.64,0.261,1.42,0.532,2.03,0.59	c0.61,0.068,1.28-0.01,1.67-0.223c0.19-0.116,0.23-0.278,0.23-0.458s-0.036-0.282-0.123-0.417c-0.159-0.246-0.597-0.432-1.287-0.597	c-0.34-0.097-0.71-0.194-1.12-0.416c-0.41-0.184-1.243-0.852-1.081-1.991c0.087-0.609,0.718-1.205,1.601-1.483	c1.029-0.325,2.15-0.164,3.08,0.281V22.7c-0.83-0.426-1.82-0.641-2.66-0.361c-0.25,0.077-0.58,0.251-0.58,0.564	c0,0.751,0.87,0.893,1.2,1c0.34,0.106,0.71,0.203,1.11,0.406c0.4,0.194,1.202,0.678,1.202,1.783c0,1.058-0.522,1.447-0.952,1.621	c-0.89,0.387-1.68,0.319-2.45,0.213c-0.65-0.116-1.28-0.31-1.87-0.677C27,27.249,27,26.175,27,26.175z M20.25,21.012l1.5-0.002	l0.003,2.42c0.014,0.79,0.012,1.651,0.003,2.383c-0.035,0.391,0.402,0.847,0.976,0.917c0.306,0.034,0.534,0.009,0.886-0.14	c0.208-0.082,0.42-0.152,0.632-0.225V21.01l1.5,0.001v6.818h-1.5v-0.236c-0.041,0.022-0.08,0.046-0.12,0.067	c-0.381,0.228-0.992,0.386-1.514,0.343c-0.542-0.035-1.088-0.225-1.533-0.586c-0.442-0.356-0.776-0.915-0.819-1.529	c-0.027-0.88-0.02-1.634-0.011-2.457L20.25,21.012z M9.25,21.01h1.5v0.688c0.37-0.134,0.737-0.274,1.109-0.401	c0.535-0.19,1.206-0.152,1.733,0.141c0.218,0.117,0.409,0.282,0.577,0.469c0.562-0.208,1.123-0.417,1.689-0.611	c0.535-0.19,1.206-0.152,1.733,0.141c0.532,0.286,0.946,0.809,1.093,1.418c0.039,0.152,0.056,0.306,0.065,0.461l0.004,0.317	l0.006,0.625l-0.006,1.25l-0.003,2.5h-1.5l-0.006-4.844c-0.042-0.425-0.519-0.797-1.019-0.661c-0.51,0.135-1.024,0.255-1.537,0.379	c0.034,0.143,0.052,0.287,0.061,0.433l0.004,0.317l0.006,0.625l-0.006,1.25l-0.003,2.5h-1.5l-0.006-4.844	c-0.042-0.426-0.519-0.797-1.019-0.661c-0.489,0.13-0.983,0.245-1.475,0.364v5.14h-1.5C9.25,28.006,9.25,21.01,9.25,21.01z M38.768,33.932c-2.214,1.57-4.688,2.605-7.285,3.277c-2.595,0.663-5.297,0.914-7.986,0.729c-2.688-0.18-5.313-0.836-7.787-1.794	c-2.466-0.99-4.797-2.263-6.857-3.931c-0.107-0.087-0.124-0.245-0.037-0.352c0.077-0.095,0.209-0.119,0.313-0.063l0.014,0.008	c2.249,1.217,4.653,2.149,7.067,2.889c2.433,0.692,4.909,1.187,7.4,1.288c2.485,0.087,4.997-0.107,7.449-0.617	c2.442-0.504,4.905-1.236,7.17-2.279l0.039-0.018c0.251-0.115,0.547-0.006,0.663,0.245C39.035,33.537,38.961,33.796,38.768,33.932z M39.882,36.892c-0.278,0.21-0.556,0.14-0.417-0.21c0.417-1.12,1.32-3.501,0.903-4.061c-0.486-0.63-2.987-0.28-4.098-0.14	c-0.347,0-0.347-0.28-0.069-0.49c0.972-0.7,2.292-0.98,3.404-0.98c1.111,0,2.084,0.21,2.292,0.56	C42.243,31.99,41.757,35.281,39.882,36.892z">
                            </path>
                        </svg>
                    </div>

                    <h4><strong>Amazon Music</strong></h4>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <div class="service-icon rounded-circle mx-auto mb-3">
                        <svg class="w-100 position-relative translate-middle" width="60" height="60"
                            viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-label="Apple Logo"
                            style="
                                    background: transparent;
                                    display: block;
                                    top: 50;
                                    left: 60;
                                ">
                            <path fill="#034a62"
                                d="M12.4146 7.30121C12.0216 3.9646 14.8352 0.332584 18.4929 0C18.5116 0.138664 18.5454 0.280455 18.5474 0.422594C18.577 2.25997 17.9514 3.86138 16.7796 5.25948C16.1412 6.02126 15.4044 6.66106 14.4668 7.03535C13.8113 7.29704 13.1337 7.38427 12.4143 7.30121H12.4146Z" />
                            <path fill="#034a62"
                                d="M24.0583 10.7993C23.7135 11.0704 23.3858 11.3084 23.08 11.5718C21.5714 12.8699 20.8318 14.5283 20.7794 16.5078C20.7526 17.5125 20.8666 18.496 21.2298 19.4364C21.872 21.1 22.9834 22.3546 24.5622 23.1914C24.6526 23.2394 24.7412 23.2901 24.8562 23.3537C24.7759 23.6046 24.705 23.8469 24.6216 24.0846C23.8338 26.3275 22.6084 28.3161 21.0828 30.126C20.8607 30.3894 20.5959 30.6216 20.3283 30.8409C19.2641 31.7152 18.0742 31.9717 16.756 31.521C16.3734 31.3903 15.9922 31.2537 15.6196 31.0977C14.813 30.7599 13.9869 30.5194 13.1035 30.51C12.1377 30.4999 11.2303 30.7373 10.3459 31.1091C9.85727 31.3145 9.35682 31.5005 8.8477 31.6475C7.79538 31.9519 6.83378 31.7333 5.9733 31.0633C5.43185 30.6417 4.95991 30.1489 4.53106 29.6158C2.32808 26.8752 0.921283 23.7708 0.279052 20.3156C0.03057 18.9777 -0.0507484 17.6289 0.0302256 16.2739C0.141782 14.4073 0.627281 12.6499 1.68376 11.0832C2.83373 9.37824 4.39448 8.26859 6.42717 7.84634C7.66402 7.58952 8.83935 7.80707 9.9928 8.25573C10.6496 8.51116 11.311 8.75443 11.9706 9.00222C12.3772 9.15513 12.7772 9.14644 13.1887 8.99527C14.078 8.66894 14.9708 8.34991 15.8691 8.04999C16.6966 7.77371 17.5463 7.59299 18.4256 7.66667C20.5601 7.84564 22.3825 8.64913 23.7393 10.3631C23.8463 10.4983 23.9433 10.6415 24.0583 10.7989V10.7993Z" />
                        </svg>
                    </div>

                    <h4><strong>Apple Music</strong></h4>
                </div>
                <div class="mt-5">
                    <iframe class="mt-n5" style="border-radius: 12px"
                        src="https://open.spotify.com/embed/album/1o59UpKw81iHR0HPiSkJR0?utm_source=generator"
                        width="100%" height="500" frameborder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section" id="portfolio">
        <div class="container px-4 px-lg-5">
            <div class="text-center px-4">
                <h1 class="mb-5" style="color: #034a62">
                    Out of the Woods, Into the 1989 Spotlight
                </h1>
                <p class="mb-2 mt-n4" style="font-size: 20px; color: #034a62">
                    We stepped "Out of the Woods" into the bright lights,
                    where "Welcome to New York" echoes in the background.
                    Now I know that "We Don't Talk", but our hearts are
                    loud, asking "Is It Over Now?" or is it just the
                    beginning, like finally feeling "Clean". "I Wish You
                    Would" take the chance and chase the dreams that are now
                    within reach, stepping boldly into the future.
                </p>
            </div>
            <div class="row gx-0 mt-5">
                <div class="col-lg-6">
                    <a class="portfolio-item">
                        <div class="caption">
                            <div class="caption-content"></div>
                        </div>
                        <img class="img-fluid" src="asetpwebfinal/erastur_10.jpg" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item">
                        <div class="caption">
                            <div class="caption-content"></div>
                        </div>
                        <img class="img-fluid" src="asetpwebfinal/erastur_6.jpg" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item">
                        <div class="caption">
                            <div class="caption-content"></div>
                        </div>
                        <img class="img-fluid" src="asetpwebfinal/erastur_8.jpg" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item">
                        <div class="caption">
                            <div class="caption-content"></div>
                        </div>
                        <img class="img-fluid" src="asetpwebfinal/erastur_9.jpg" alt="..." />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="contact2" style="background-image: url('asetpwebfinal/3_banner.jpg')" id="contact">
        <div class="container">
            <div class="row contact-container">
                <div class="col-lg-12">
                    <div class="card card-shadow mb-4 mt-n8" style="background-color: #fff">
                        <div class="row">
                            <div class="col-lg-9 col-12">
                                <div class="contact-box p-4">
                                    <h2 style="color: #034a62">
                                        Sign up to receive updates
                                    </h2>
                                    <form id="frmDaftar" onsubmit="return validasi();">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mt-3">
                                                    <h6
                                                        style="
                                                                color: #034a62;
                                                                font-family: 'Poppins',
                                                                    var(
                                                                        --bs-font-sans-serif
                                                                    );
                                                            ">
                                                        Name
                                                    </h6>
                                                    <input type="text" class="form-control" id="nama"
                                                        name="nama" placeholder="Your name"
                                                        style="
                                                                color: #034a62;
                                                                background-color: #d1f3ff9b;
                                                            " />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mt-3">
                                                    <label for="email"
                                                        style="
                                                                color: #034a62;
                                                                font-weight: 500;
                                                            ">Email</label>
                                                    <input type="text" class="form-control" id="email"
                                                        name="email" placeholder="youremail@email.com"
                                                        style="
                                                                background-color: #d1f3ff9b;
                                                            " />
                                                </div>
                                            </div>
                                            <div class="col-lg-12 text-right">
                                                <button type="submit"
                                                    class="btn btn-blue-gradiant mt-3 mb-3 text-white border-0 py-2 px-3">
                                                    <span>
                                                        Submit Now
                                                        <i class="ti-arrow-right"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-3 col-11 bg-image d-flex justify-content-center align-items-center mx-auto"
                                style="
                                        background-size: cover;
                                        background-position: 70% 20%;
                                        background-repeat: no-repeat;
                                        height: 300px;
                                        background-image: url('asetpwebfinal/fotocfmain.jpg');
                                    ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
