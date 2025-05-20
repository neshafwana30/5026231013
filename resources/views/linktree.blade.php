<html>

<head>
    <title>Linktree</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet" />
</head>

<body>
    <script>
        function toggleShopLinks() {
            var isChecked = document.getElementById("customSwitch1").checked;
            console.log("Toggle clicked:", isChecked);

            var linksSection = document.getElementById("links-section");
            var shopSection = document.getElementById("shop-section");

            if (isChecked) {
                // Show SHOP
                shopSection.style.display = "block";

                // Hide LINKS
                linksSection.style.opacity = "0";
                linksSection.style.pointerEvents = "none";
                linksSection.style.position = "absolute";
            } else {
                // Show LINKS
                linksSection.style.opacity = "1";
                linksSection.style.pointerEvents = "auto";
                linksSection.style.position = "static"; // or "relative", tergantung layout kamu
                linksSection.style.display = "block";

                // Hide SHOP
                shopSection.style.display = "none";
            }
        }
    </script>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex flex-column mt-3">
                <!-- Gambar background Ed Sheeran -->
                <div class="image-container mx-auto position-relative mt-2">
                    <!-- Blur overlay -->
                    <div class="custom-blur-overlay"></div>
                    <!-- Tombol Meatball sticky -->
                    <button class="meatball-sticky mt-2" style="width: 40px; height: 40px; margin-right: 10px">
                        <i class="bi bi-three-dots text-white" style="font-size: 14px"></i>
                    </button>
                </div>

                <!-- Teks -->
                <div class="position-absolute w-100 mb-3"
                    style="top: 19.25rem; z-index: 2; transform: translateX(-14px)">
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="font-weight-bold text-white" style="font-size: 20px; letter-spacing: -0.4px">
                            @edsheeran
                        </p>
                    </div>

                    <!------------- Social Media Icons ----------->
                    <div class="d-flex justify-content-center" style="margin-top: calc(1rem+3px)">
                        <a href="http://instagram.com/teddysphotos" class="text-white mx-2" target="_blank">
                            <svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z" />
                                <path
                                    d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z" />
                                <path d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z" />
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@edsheeran" class="text-white mx-2" target="_blank">
                            <svg width="32px" height="32px" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z" />
                            </svg>
                        </a>
                        <a href="https://x.com/edsheeran" class="text-white mx-2" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="m2.538 3 7.425 9.928L2 21h1.5l7.033-7.067L16 21h5.232l-7.662-9.995 6.955-7.514h-1.5L13 10 7.77 3H2.538Zm1.994 1h2.645l12.087 16h-2.525L4.532 4Z" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UC0C-w0YjGpqDXGB8IHb662A" class="text-white mx-2"
                            target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z" />
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/EdSheeranMusic/" class="text-white mx-2" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M23,12A11,11,0,1,0,10.279,22.865h0a11.08,11.08,0,0,0,3.436,0h0A10.952,10.952,0,0,0,23,12ZM10.859,21.935v-6.9a.5.5,0,0,0-.5-.5H8.193V12.5h2.166a.5.5,0,0,0,.5-.5V9.686c0-2.278,1.264-3.585,3.459-3.585a15.392,15.392,0,0,1,1.858.137V7.89h-.824l-.019,0a2,2,0,0,0-2.181,1.735,1.8,1.8,0,0,0-.011.4V12a.5.5,0,0,0,.5.5H15.97l-.312,2.035H13.641a.5.5,0,0,0-.5.5v6.9A10.124,10.124,0,0,1,10.859,21.935Zm3.282-.166V15.535h1.946a.5.5,0,0,0,.5-.425l.465-3.035a.5.5,0,0,0-.494-.575H14.141V10.016a1.267,1.267,0,0,1,.308-.821,1.218,1.218,0,0,1,.9-.3h1.324a.5.5,0,0,0,.5-.5V5.806a.5.5,0,0,0-.42-.494A16.661,16.661,0,0,0,14.325,5.1c-2.754,0-4.466,1.757-4.466,4.585V11.5H7.693a.5.5,0,0,0-.5.5v3.035a.5.5,0,0,0,.5.5H9.859v6.234a10,10,0,1,1,4.282,0Z" />
                            </svg>
                        </a>
                    </div>

                    <!-- --------------------TOGGLE GESER GESER------------------------------ -->
                    <div class="d-flex justify-content-center" style="margin-top: 2rem; transform: translateX(-14px)">
                        <div class="custom-control position-relative d-block">
                            <input type="checkbox" class="custom-control-input position-absolute" id="customSwitch1"
                                onchange="toggleShopLinks()" />
                            <label
                                class="custom-control-label d-flex align-items-center justify-content-between position-relative col"
                                for="customSwitch1">
                                <span
                                    class="toggle-text text-link font-weight-bold d-flex col justify-content-center align-items-center">Links</span>
                                <span
                                    class="toggle-text text-shop font-weight-bold d-flex col justify-content-center align-items-center">Shop</span>
                            </label>
                        </div>
                    </div>

                    <!-- konten Link -->
                    <div id="links-section" class="col-12 d-flex flex-column mt-2">
                        <!----------- mulai masuk ke tombol tombol nya shay yang linktre------------------->
                        <div class="mt-4 mb-2">
                            <button type="button" class="btn mb-2 mb-m-0 btn-round btn-secondary btn-block"
                                onclick="window.open('https://es.lnk.to/azizam?fbclid=PAZXh0bgNhZW0CMTEAAaafFiOQChra51HkYXZwcL8XOfhPXwPcrSP_TgpNPjQZmJdbJ0jgCUEipvw_aem_3puzi1e0rD-s0XM1AwIA0w', '_blank')">
                                <span class="icon-container icon-left"
                                    style="
                      background-image: url('https://ugc.production.linktr.ee/144efce0-d441-4abf-8052-d68c4e50c6b0_artwork-600x315.jpeg?io=true&size=thumbnail-stack-v1_0');
                    "></span>

                                Pre-Save Azizam

                                <div class="d-inline-flex align-items-center justify-content-center icon-right"
                                    style="width: 32px; height: 32px">
                                    <svg width="32" height="32" viewBox="0 0 32 32">
                                        <circle cx="16" cy="11" r="1.5" fill="white" />
                                        <circle cx="16" cy="16" r="1.5" fill="white" />
                                        <circle cx="16" cy="21" r="1.5" fill="white" />
                                    </svg>
                                </div>
                            </button>
                        </div>

                        <!-- --------------------------- SHOP NOWWWWW------------------------------------------ -->
                        <div class="d-flex justify-content-center mt-3">
                            <p class="font-weight-bold text-white" style="font-size: 16px; line-height: 1.5">
                                Shop Now
                            </p>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="row" style="width: 100%; height: 323px">
                                <div class="col-6">
                                    <button type="button" class="btn btn-round btn-secondary btn-block"
                                        style="width: 270px; height: 325px; border-radius: 24px">
                                        <div class="image-shop-container"
                                            style="
                          background-image: url('https://ugc.production.linktr.ee/e027b143-d38d-43b9-9cd8-e2fb53cb5594_Single1Vinyl.jpeg?io=true&size=thumbnail-stack-v1_0');
                        ">
                                        </div>
                                        <p class="text-white position-absolute"
                                            style="
                          z-index: 2;
                          bottom: 0;
                          left: 0;
                          margin-left: 16px;
                          font-weight: 500;
                        ">
                                            Azizam 7" Single
                                        </p>

                                        <div
                                            class="d-inline-flex align-items-center justify-content-center icon-right-bottom">
                                            <svg width="32" height="32" viewBox="0 0 32 32">
                                                <circle cx="16" cy="11" r="1.5" fill="currentColor" />
                                                <circle cx="16" cy="16" r="1.5" fill="currentColor" />
                                                <circle cx="16" cy="21" r="1.5" fill="currentColor" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-round btn-secondary btn-block"
                                        style="
                        width: 270px;
                        height: 325px;
                        border-radius: 24px;
                        margin-left: 8px;
                      ">
                                        <span class="image-shop-container"
                                            style="
                          background-image: url('https://ugc.production.linktr.ee/5f7839b7-ec3b-41eb-8872-b2b06b82cd8e_Single1CD.jpeg?io=true&size=thumbnail-stack-v1_0');
                        "></span>
                                        <p class="text-white position-absolute"
                                            style="
                          z-index: 2;
                          bottom: 0;
                          left: 0;
                          margin-left: 16px;
                          font-weight: 500;
                        ">
                                            Azizam CD Single
                                        </p>
                                        <div
                                            class="d-inline-flex align-items-center justify-content-center icon-right-bottom">
                                            <svg width="32" height="32" viewBox="0 0 32 32">
                                                <circle cx="16" cy="11" r="1.5" fill="currentColor" />
                                                <circle cx="16" cy="16" r="1.5" fill="currentColor" />
                                                <circle cx="16" cy="21" r="1.5" fill="currentColor" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- -------------- TOUR DATESSSS SOB ------------------------ -->
                        <button type="button" class="btn mb-2 mb-m-0 btn-round btn-secondary btn-block mt-3">
                            <span class="icon-container"
                                style="
                    background-image: url('https://ugc.production.linktr.ee/54d8854b-743e-4db7-bd46-3d8c13c50cea_1920x0.jpeg?io=true&size=thumbnail-stack-v1_0');
                  "></span>
                            Tour Dates

                            <div class="d-inline-flex align-items-center justify-content-center icon-right"
                                style="width: 32px; height: 32px">
                                <svg width="32" height="32" viewBox="0 0 32 32">
                                    <circle cx="16" cy="11" r="1.5" fill="white" />
                                    <circle cx="16" cy="16" r="1.5" fill="white" />
                                    <circle cx="16" cy="21" r="1.5" fill="white" />
                                </svg>
                            </div>
                        </button>

                        <!-- ----------------VIDEO YOUTUBE ED SHEERAN-------------------------------------------------- -->
                        <div class="d-flex flex-column mt-4">
                            <div class="d-flex justify-content-center">
                                <p class="font-weight-bold text-white" style="font-size: 16px; line-height: 1.5">
                                    Videos
                                </p>
                            </div>

                            <!-- vIDEO NYAAA INIII INIII -->
                            <div class="scroll-container d-flex justify-content-start" style="height: 286px">
                                <!-- vIDEO 1 GESSSS -->
                                <div class="video-button-wrapper">
                                    <div class="btn btn-round btn-secondary btn-block"
                                        style="
                        width: 480.98px;
                        height: 277.3px;
                        border-radius: 24px;
                        margin-right: 10px;
                        position: relative;
                        overflow: hidden;
                        cursor: pointer;
                        padding: 0;
                        border: none;
                      "
                                        onclick="window.open('https://www.youtube.com/watch?v=JcFt7Yy6cBg', '_blank')">
                                        <!-- YouTube Thumbnail -->
                                        <img src="https://ugc.production.linktr.ee/98c0c689-5aa1-4eb0-a36f-4ec6576767fb_maxresdefault.jpeg?io=true&size=thumbnail-feature-v1_0"
                                            alt="YouTube Video Cover"
                                            style="
                          width: 100%;
                          height: 100%;
                          object-fit: cover;
                          display: block;
                        " />
                                        <!-- Gradient thumbnail -->
                                        <div
                                            style="
                          position: absolute;
                          left: 0;
                          bottom: 0;
                          width: 100%;
                          height: 50%;
                          background: linear-gradient(
                            to bottom,
                            rgba(0, 0, 0, 0),
                            rgba(0, 0, 0, 0.6)
                          );
                          z-index: 1;
                        ">
                                        </div>

                                        <div class="circle-hover-grow"
                                            style="
                          position: absolute;
                          top: 0;
                          left: 0;
                          width: 100%;
                          height: 100%;
                          display: flex;
                          justify-content: center;
                          align-items: center;
                        ">
                                            <div class="d-flex align-items-center justify-content-center rounded-circle"
                                                style="
                            width: 40px;
                            height: 40px;
                            background: rgba(255, 255, 255, 0.7);
                          ">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path d="M8 5v14l11-7z" fill="black" />
                                                </svg>
                                            </div>
                                        </div>

                                        <div
                                            style="
                          position: absolute;
                          top: 16px;
                          right: 10px;
                          z-index: 2;
                          border-radius: 6px;
                          padding: 2px 3px;
                          display: flex;
                          align-items: center;
                          justify-content: center;
                        ">
                                            <i class="fab fa-youtube"
                                                style="
                            font-size: 12px;
                            color: rgba(255, 255, 255, 0.7);
                          "></i>
                                        </div>
                                        <div class="position-absolute"
                                            style="
                          left: 0;
                          bottom: 0;
                          color: #fff;
                          padding: 0 0 15px 16px;
                          font-size: 16px;
                          font-weight: 500;
                          border-bottom-left-radius: 18px;
                          border-top-right-radius: 12px;
                          max-width: 100%;
                          display: flex;
                          align-items: center;
                          z-index: 2;
                        ">
                                            Bad Habits (Live from the Mathematics Tour 2024)
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-center icon-right-bottom"
                                            style="width: 32px; height: 32px">
                                            <svg width="32" height="32" viewBox="0 0 32 32">
                                                <circle cx="16" cy="11" r="1.5" fill="white" />
                                                <circle cx="16" cy="16" r="1.5" fill="white" />
                                                <circle cx="16" cy="21" r="1.5" fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <!-- VIDEEOOO 2222 HUWAAAAAAAAAAA -->
                                <div class="video-button-wrapper">
                                    <div class="btn btn-round btn-secondary btn-block"
                                        style="
                        width: 480.98px;
                        height: 277.3px;
                        border-radius: 24px;
                        margin-right: 10px;
                        position: relative;
                        overflow: hidden;
                        cursor: pointer;
                        padding: 0;
                        border: none;
                      "
                                        onclick="window.open('//www.youtube.com/watch?v=0QRhHZkAQro', '_blank')">
                                        <!-- YouTube Thumbnail -->
                                        <img src="https://ugc.production.linktr.ee/69e44b7f-c6cd-48f7-ac3e-4bcbfd2cccdd_maxresdefault.jpeg?io=true&size=thumbnail-feature-v1_0"
                                            alt="YouTube Video Cover"
                                            style="
                          width: 100%;
                          height: 100%;
                          object-fit: cover;
                          display: block;
                        " />
                                        <!-- Gradient thumbnail -->
                                        <div
                                            style="
                          position: absolute;
                          left: 0;
                          bottom: 0;
                          width: 100%;
                          height: 50%;
                          background: linear-gradient(
                            to bottom,
                            rgba(0, 0, 0, 0),
                            rgba(0, 0, 0, 0.6)
                          );
                          z-index: 1;
                        ">
                                        </div>

                                        <div class="circle-hover-grow"
                                            style="
                          position: absolute;
                          top: 0;
                          left: 0;
                          width: 100%;
                          height: 100%;
                          display: flex;
                          justify-content: center;
                          align-items: center;
                        ">
                                            <div class="d-flex align-items-center justify-content-center rounded-circle"
                                                style="
                            width: 40px;
                            height: 40px;
                            background: rgba(255, 255, 255, 0.7);
                          ">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path d="M8 5v14l11-7z" fill="black" />
                                                </svg>
                                            </div>
                                        </div>

                                        <div
                                            style="
                          position: absolute;
                          top: 16px;
                          right: 10px;
                          z-index: 2;
                          border-radius: 6px;
                          padding: 2px 3px;
                          display: flex;
                          align-items: center;
                          justify-content: center;
                        ">
                                            <i class="fab fa-youtube"
                                                style="
                            font-size: 12px;
                            color: rgba(255, 255, 255, 0.7);
                          "></i>
                                        </div>
                                        <div class="position-absolute"
                                            style="
                          left: 0;
                          bottom: 0;
                          color: #fff;
                          padding: 0 0 15px 16px;
                          font-size: 16px;
                          font-weight: 500;
                          border-bottom-left-radius: 18px;
                          border-top-right-radius: 12px;
                          max-width: 90%;
                          display: flex;
                          text-align: left;
                          align-items: start;
                          z-index: 2;
                          line-height: 1;
                        ">
                                            Collaborations Medley (Live from Mathematics Tour 2024)
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-center icon-right-bottom"
                                            style="width: 32px; height: 32px">
                                            <svg width="32" height="32" viewBox="0 0 32 32">
                                                <circle cx="16" cy="11" r="1.5" fill="white" />
                                                <circle cx="16" cy="16" r="1.5" fill="white" />
                                                <circle cx="16" cy="21" r="1.5" fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <!-- Video 3 bes -->
                                <div class="video-button-wrapper">
                                    <div class="btn btn-round btn-secondary btn-block"
                                        style="
                        width: 480.98px;
                        height: 277.3px;
                        border-radius: 24px;
                        margin-right: 10px;
                        position: relative;
                        overflow: hidden;
                        cursor: pointer;
                        padding: 0;
                        border: none;
                      "
                                        onclick="window.open('//youtu.be/k0Ka-deab1s', '_blank')">
                                        <!-- YouTube Thumbnail -->
                                        <img src="https://ugc.production.linktr.ee/a253c841-a2b0-4c5f-b91a-42b6dad79521_maxresdefault.jpeg?io=true&size=thumbnail-feature-v1_0"
                                            alt="YouTube Video Cover"
                                            style="
                          width: 100%;
                          height: 100%;
                          object-fit: cover;
                          display: block;
                        " />
                                        <!-- Gradient thumbnail -->
                                        <div
                                            style="
                          position: absolute;
                          left: 0;
                          bottom: 0;
                          width: 100%;
                          height: 50%;
                          background: linear-gradient(
                            to bottom,
                            rgba(0, 0, 0, 0),
                            rgba(0, 0, 0, 0.6)
                          );
                          z-index: 1;
                        ">
                                        </div>

                                        <div class="circle-hover-grow"
                                            style="
                          position: absolute;
                          top: 0;
                          left: 0;
                          width: 100%;
                          height: 100%;
                          display: flex;
                          justify-content: center;
                          align-items: center;
                        ">
                                            <div class="d-flex align-items-center justify-content-center rounded-circle"
                                                style="
                            width: 40px;
                            height: 40px;
                            background: rgba(255, 255, 255, 0.7);
                          ">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path d="M8 5v14l11-7z" fill="black" />
                                                </svg>
                                            </div>
                                        </div>

                                        <div
                                            style="
                          position: absolute;
                          top: 16px;
                          right: 10px;
                          z-index: 2;
                          border-radius: 6px;
                          padding: 2px 3px;
                          display: flex;
                          align-items: center;
                          justify-content: center;
                        ">
                                            <i class="fab fa-youtube"
                                                style="
                            font-size: 12px;
                            color: rgba(255, 255, 255, 0.7);
                          "></i>
                                        </div>
                                        <div class="position-absolute"
                                            style="
                          left: 0;
                          bottom: 0;
                          color: #fff;
                          padding: 0 0 15px 16px;
                          font-size: 16px;
                          font-weight: 500;
                          border-bottom-left-radius: 18px;
                          border-top-right-radius: 12px;
                          max-width: 90%;
                          display: flex;
                          text-align: left;
                          align-items: start;
                          z-index: 2;
                          line-height: 1;
                        ">
                                            Ed Sheeran & Diljit Dosanjh - Shape of You x Naina (Live
                                            in Birmingham 2024)
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-center icon-right-bottom"
                                            style="width: 32px; height: 32px">
                                            <svg width="32" height="32" viewBox="0 0 32 32">
                                                <circle cx="16" cy="11" r="1.5" fill="white" />
                                                <circle cx="16" cy="16" r="1.5" fill="white" />
                                                <circle cx="16" cy="21" r="1.5" fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!----------------------------- UDAH MASUK BUTTON LAGI BEB --------------------------- -->
                        <div class="mt-3"></div>
                        <button type="button" class="btn mb-2 mb-m-0 btn-round btn-secondary btn-block mt-3">
                            <span class="icon-container"
                                style="
                    background-image: url('https://ugc.production.linktr.ee/17ab1e96-9174-44ad-a737-63cad9ed3def_og-resize.jpeg?io=true&size=thumbnail-stack-v1_0');
                  "></span>
                            Join the mailing list
                            <div class="d-inline-flex align-items-center justify-content-center icon-right"
                                style="width: 32px; height: 32px">
                                <svg width="32" height="32" viewBox="0 0 32 32">
                                    <circle cx="16" cy="11" r="1.5" fill="white" />
                                    <circle cx="16" cy="16" r="1.5" fill="white" />
                                    <circle cx="16" cy="21" r="1.5" fill="white" />
                                </svg>
                            </div>
                        </button>
                        <button type="button" class="btn mb-2 mb-m-0 btn-round btn-secondary btn-block">
                            <span class="icon-container"
                                style="
                    background-image: url('https://ugc.production.linktr.ee/cc5cb764-2662-4907-b8fc-5d9d98b35151_OG.png?io=true&size=thumbnail-stack-v1_0');
                  "></span>
                            The Old Phone Pub
                            <div class="d-inline-flex align-items-center justify-content-center icon-right"
                                style="width: 32px; height: 32px">
                                <svg width="32" height="32" viewBox="0 0 32 32">
                                    <circle cx="16" cy="11" r="1.5" fill="white" />
                                    <circle cx="16" cy="16" r="1.5" fill="white" />
                                    <circle cx="16" cy="21" r="1.5" fill="white" />
                                </svg>
                            </div>
                        </button>
                        <button type="button" class="btn mb-2 mb-m-0 btn-round btn-secondary btn-block">
                            <span class="icon-container"
                                style="
                    background-image: url('https://ugc.production.linktr.ee/aa7d7fc4-aa13-43b9-ae62-46177c431bbd_476125923-1678657679439795-5082546408943220679-n.jpeg?io=true&size=thumbnail-stack-v1_0 ');
                  "></span>
                            Official Website
                            <div class="d-inline-flex align-items-center justify-content-center icon-right"
                                style="width: 32px; height: 32px">
                                <svg width="32" height="32" viewBox="0 0 32 32">
                                    <circle cx="16" cy="11" r="1.5" fill="white" />
                                    <circle cx="16" cy="16" r="1.5" fill="white" />
                                    <circle cx="16" cy="21" r="1.5" fill="white" />
                                </svg>
                            </div>
                        </button>
                    </div>

                    <!-- Konten Shop -->
                    <div id="shop-section" style="display: none">
                        <div class="text-center" style="margin-top: 35px">
                            <div class="col">
                                <button type="button" class="btn btn-round btn-secondary btn-block"
                                    style="width: 565px; height: 273px; border-radius: 24px">
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="row" style="width: 568px; height: 273px">
                                            <div class="col-4 px-2">
                                                <div class="shop-container"
                                                    style="
                              background-image: url('https://ugc.production.linktr.ee/edba2a1e-eb67-4311-ad81-5a6ddb2dae7e_D2CCassette.png?io=true&size=square-fit');
                              margin-left: -45px;
                            ">
                                                </div>
                                            </div>
                                            <div class="col-4 px-2">
                                                <div class="shop-container"
                                                    style="
                              background-image: url('https://ugc.production.linktr.ee/c6949dcb-96db-41ac-a8c3-cd1c90a07337_Mathematics-Music-LP-1.png?io=true&size=square-fit');
                              margin-left: -20px;
                            ">
                                                </div>
                                            </div>
                                            <div class="col-4 px-2">
                                                <div class="shop-container"
                                                    style="
                              background-image: url('https://ugc.production.linktr.ee/e9b6d125-903d-413f-b2c9-c4c6f63bafd2_Mathematics-Music-CD-1.png?io=true&size=square-fit');
                              margin-left: 5px;
                            ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-white position-absolute text-center w-100 mb-0"
                                        style="z-index: 2; bottom: 44; left: 0; font-weight: 600">
                                        Music
                                    </p>
                                    <p class="position-absolute text-center w-100 mb-0"
                                        style="
                        z-index: 2;
                        bottom: 25;
                        left: 0;
                        font-weight: 500;
                        opacity: 0.5;
                        font-size: 14px;
                      ">
                                        5 Products
                                    </p>

                                    <div
                                        class="d-inline-flex align-items-center justify-content-center icon-right-bottom">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <circle cx="16" cy="11" r="1.5" fill="currentColor" />
                                            <circle cx="16" cy="16" r="1.5" fill="currentColor" />
                                            <circle cx="16" cy="21" r="1.5" fill="currentColor" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="text-center mt-3" style="margin-bottom: 32px">
                            <div class="col">
                                <button type="button" class="btn btn-round btn-secondary btn-block"
                                    style="width: 565px; height: 273px; border-radius: 24px">
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="row" style="width: 568px; height: 273px">
                                            <div class="col-4 px-2">
                                                <div class="shop-container"
                                                    style="
                              background-image: url('https://ugc.production.linktr.ee/025989ed-b81b-4a13-abd8-9baeb9e747b3_24EDS073-A-Mathematics24KnittedScarf.png?io=true&size=square-fit');
                              margin-left: -45px;
                            ">
                                                </div>
                                            </div>
                                            <div class="col-4 px-2">
                                                <div class="shop-container"
                                                    style="
                              background-image: url('https://ugc.production.linktr.ee/67000afd-c7b9-402d-b313-944d3c57163b_24EDS072-A-Mathematics24Socks.png?io=true&size=square-fit');
                              margin-left: -20px;
                            ">
                                                </div>
                                            </div>
                                            <div class="col-4 px-2">
                                                <div class="shop-container"
                                                    style="
                              background-image: url('https://ugc.production.linktr.ee/540001ed-b93c-451f-8807-ff00140a5bc5_22EDS040-A-SymbolsTOURTieDyeHoody-online.png?io=true&size=square-fit');
                              margin-left: 5px;
                            ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-white position-absolute text-center w-100 mb-0"
                                        style="z-index: 2; bottom: 44; left: 0; font-weight: 600">
                                        Apparel
                                    </p>
                                    <p class="position-absolute text-center w-100 mb-0"
                                        style="
                        z-index: 2;
                        bottom: 25;
                        left: 0;
                        font-weight: 500;
                        opacity: 0.5;
                        font-size: 14px;
                      ">
                                        5 Products
                                    </p>

                                    <div
                                        class="d-inline-flex align-items-center justify-content-center icon-right-bottom">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <circle cx="16" cy="11" r="1.5" fill="currentColor" />
                                            <circle cx="16" cy="16" r="1.5" fill="currentColor" />
                                            <circle cx="16" cy="21" r="1.5" fill="currentColor" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- POHONN LINKTREEE LASTT BOSSSS -->
                    <div class="d-flex justify-content-center align-items-center mt-4 mb-5">
                        <div class="linktree-box">
                            <!-- Icon -->
                            <svg width="20" height="20" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                style="flex-shrink: 0; margin-left: 8px; margin-bottom: -4px">
                                <path
                                    d="M13.5108 5.85343L17.5158 1.73642L19.8404 4.11701L15.6393 8.12199H21.5488V11.4268H15.6113L19.8404 15.5345L17.5158 17.8684L11.7744 12.099L6.03299 17.8684L3.70842 15.5438L7.93745 11.4361H2V8.12199H7.90944L3.70842 4.11701L6.03299 1.73642L10.038 5.85343V0H13.5108V5.85343ZM10.038 16.16H13.5108V24.0019H10.038V16.16Z"
                                    fill="#000000" transform="scale(1.3)" />
                            </svg>

                            <!-- Text -->
                            <div
                                style="
                    color: #222;
                    font-weight: 600;
                    letter-spacing: -0.5px;
                    margin-left: 4px;
                  ">
                                Join edsheeran on Linktree
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
