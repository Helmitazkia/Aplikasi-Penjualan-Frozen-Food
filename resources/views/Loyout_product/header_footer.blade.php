<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Product/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/vendor/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="Product/vendor/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="Product/vendor/revolution/css/settings.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Product/css/util.css">
    <link rel="stylesheet" type="text/css" href="Product/css/main.css">
    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop">
                    <div class="left-header">
                        <!-- Logo desktop -->
                        <div class="logo">
                            <a href="index.html"><img src="Product/images/icons/logo-01.png" alt="IMG-LOGO"></a>
                        </div>
                    </div>

                    <div class="center-header">
                        <!-- Menu desktop -->
                        <div class="menu-desktop">
                            <ul class="main-menu">
                                <li class="active-menu">
                                    <a href="/">Beranda</a>
                                </li>
                                <li>
                                    <a href="/Store">Product</a>
                                </li>
                                <li>
                                    <a href="/Promosi">Promosi</a>
                                </li>
                                <li>
                                    <a href="/Blog">Blog</a>
                                </li>
                                <li>
                                    <a href="/Tentang">Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="/Contact">Kontak Kami</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Menu desktop -->

                    <!--- Start Cart -->
                    <div class="right-header">
                        <!-- Icon header -->
                        <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
                            <div class="h-full flex-m">
                                <div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
                                    <img src="Product/images/icons/icon-search.png" alt="SEARCH">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--- End Cart -->
                </nav>
            </div>
        </div>



        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="Product/images/icons/logo-01.png" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
                <div class="h-full flex-m">
                    <div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
                        <img src="Product/images/icons/icon-search.png" alt="SEARCH">
                    </div>
                </div>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="main-menu-m">
                <li class="active-menu">
                    <a href="/">Branda</a>
                </li>
                <li>
                    <a href="/Store">Produk</a>
                </li>
                <li>
                    <a href="/Promosi">Promosi</a>
                </li>
                <li>
                    <a href="/Blog">Blog</a>
                </li>
                <li>
                    <a href="/Tentang">Tentang Kami</a>
                </li>
                <li>
                    <a href="/Contact">Kontak Kami</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <span class="lnr lnr-cross"></span>
            </button>

            <div class="container-search-header">
                <form class="wrap-search-header flex-w">
                    <button class="flex-c-m trans-04">
                        <span class="lnr lnr-magnifier"></span>
                    </button>
                    <input class="plh1" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>


    @yield('contentproduct')



    <footer class="bg2">
        <div class="container">
            <div class="wrap-footer flex-w p-t-60 p-b-62">
                <div class="footer-col1">
                    <div class="footer-col-title">
                        <a href="#">
                            <img src="Product/images/icons/logo-02.png" alt="LOGO">
                        </a>
                    </div>

                    <p class="txt-s-101 cl0 size-w-10 p-b-16">
                        Sadeng Food adalah sebuah merek makanan beku olahan yang diproduksi oleh PT Ardena Artha Mulia
                    </p>

                    <ul>
                        <li class="txt-s-101 cl0 flex-t p-b-10">
                            <span class="size-w-11">
                                <img src="Product/images/icons/icon-mail-02.png" alt="ICON-MAIL">
                            </span>
                            <span class="size-w-12 p-t-1">
                                HelmiTazkia85@gmail.com
                            </span>
                        </li>
                        <li class="txt-s-101 cl0 flex-t p-b-10">
                            <span class="size-w-11">
                                <img src="Product/images/icons/icon-pin-02.png" alt="ICON-MAIL">
                            </span>
                            <span class="size-w-12 p-t-1">
                                Depan Kantor,Jl.Raya No.25 Leuwisadeng, <br> Kec Leuwisadeng Kab Bogor, Jawa Barat 16640
                            </span>
                        </li>

                        <li class="txt-s-101 cl0 flex-t p-b-10">
                            <span class="size-w-11">
                                <img src="Product/images/icons/icon-phone-02.png" alt="ICON-MAIL">
                            </span>

                            <span class="size-w-12 p-t-1">
                                <a href="https://wa.me/6285773474149" style="color:white;">085773474149</a>
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="footer-col2">
                    <div class="footer-col-title flex-m">
                        <span class="txt-m-109 cl0">
                            Information
                        </span>
                    </div>

                    <ul>
                        <li class="p-b-16">
                            <a href="/" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                Beranda
                            </a>
                        </li>

                        <li class="p-b-16">
                            <a href="/Store" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                Produk
                            </a>
                        </li>

                        <li class="p-b-16">
                            <a href="/Promosi" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                Promosi
                            </a>
                        </li>

                        <li class="p-b-16">
                            <a href="/Tentang" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                Tentang Kami
                            </a>
                        </li>

                        <li class="p-b-16">
                            <a href="/Contact" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                Kontak Kami
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-col4">
                    <div class="footer-col-title flex-m">
                        <span class="txt-m-109 cl0">
                            Kantor Pusat
                        </span>
                    </div>
                    <p class="txt-s-101 cl0 p-b-33">
                        Jl. Letjen Suprapto No. 121 Ruko Cempaka Indah Blok B 1/8 Cempaka Baru, <br> Kemayoran Jakarta
                        Pusat, Daerah Khusus Ibukota Jakarta 10640
                    </p>
                </div>
                <div class="footer-col2">
                    <div class="footer-col-title flex-m">
                        <span class="txt-m-109 cl0">
                            Alamat Pabrik
                        </span>
                    </div>
                    <ul>
                        <li class="p-b-16">
                            <a href="/" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                Jl. Cempaka Putih Utara No.285, RT.1/RW.1 Cemp. Baru,
                                Kec. Kemayoran, Jakarta Pusat Daerah Khusus Ibukota Jakarta 10640
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="lnr lnr-chevron-up"></span>
        </span>
    </div>



    <!--===============================================================================================-->
    <script src="Product/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="Product/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="Product/vendor/bootstrap/js/popper.js"></script>
    <script src="Product/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="Product/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="Product/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="Product/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="Product/vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="Product/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="Product/vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="Product/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="Product/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="Product/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="Product/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="Product/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="Product/js/revo-custom.js"></script>
    <!--===============================================================================================-->
    <script src="Product/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="Product/vendor/daterangepicker/moment.min.js"></script>
    <script src="Product/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="Product/vendor/slick/slick.min.js"></script>
    <script src="Product/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="Product/vendor/parallax100/parallax100.js"></script>
    <!--===============================================================================================-->
    <script src="Product/vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script src="Product/vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="Product/vendor/sweetalert/sweetalert.min.js"></script>
    <!--===============================================================================================-->
    <script src="Product/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--===============================================================================================-->
    <script src="Product/js/main.js"></script>

</body>

</html>
