@extends('Loyout_product/header_footer')
@section('contentproduct')

<section class="how-overlay2 bg-img1" style="background-image: url(Product/images/Banner-img/blog.jpg);">
    {{-- <img src="Product/images/icons/symbol-02.png" alt="IMG"> --}}
    <div class="container">
        <div class="txt-center p-t-160 p-b-165">
            <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                Blog
            </h2>

            <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="/" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    Home
                </a>

                <a href="/Blog" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    / Blog
                </a>
                <span>
                    Populer
                </span>
            </span>
        </div>
    </div>
</section>


<section class="bg0 p-t-100 p-b-20">
    <div class="container">
        <div class="row">
            <div class="col-sm-11 col-md-8 col-lg-9 m-rl-auto p-b-80">
                <!-- detail blog -->
                <div class="p-b-50">
                    <div class="wrap-pic-w">
                        <img src="Product/images/Banner-img/sadeng.jpeg" alt="BLOG">
                    </div>

                    <div class="p-t-30">
                        <h4 class="txt-m-125 cl3">
                            SADENG FOOD : SELALU ADA EVENT
                        </h4>
                        <div class="flex-w flex-m txt-s-115 cl9 p-t-14 p-b-22">
                            <span class="m-r-22">
                                Maret 28, 2018
                            </span>
                        </div>
                        <p class="txt-s-101 cl6 p-b-12">
                            Sadeng Food yang didirikan oleh Ariguna Napitupulu, memasuki fase berikutnya dari makanan
                            beku / Frozen Food.
                            Paket makanan yang sudah jadi yang dimasukkan ke dalam lemari es telah menjadi Salah satu
                            solusi di era Pandemi ini, meskipun terkadang terkendala pasokan listrik.
                        </p>
                        <p class="txt-s-101 cl6 p-b-12">
                            Produk yang diluncurkan pada Tahun 2014 ini, hari ini bisa teman-teman temui di kota-kota
                            besar di Indonesia, produk pertama Sadeng Food mencakup enam SKU yang dibuat dengan
                            bahan-bahan ikan segar. Sadeng Food mengolah bahan-bahan tersebut dengan cara khusus, lalu
                            dibekukan.
                        </p>

                        <p class="txt-s-101 cl6 p-b-12">
                            “Kami memutuskan untuk melakukannya karena ada begitu banyak potensi dalam makanan beku yang
                            belum dimanfaatkan,” kata Ari Napit Selaku Direktur PT. Ardena Artha Mulia. “Ada peluang
                            untuk membuat makanan beku yang luar biasa.”
                            “Makanan beku adalah cara luar biasa untuk bekerja dalam skala besar, mengawetkan makanan,
                            dan mengurangi limbah makanan,” kata Ari napit.
                        </p>
                        <p class="txt-s-101 cl6 p-b-12">
                            Salah satu keunggulan Frozen food umumnya dibuat dan disimpan dalam kemasan kedap udara. Hal
                            ini jadi menjamin makanan dapat sampai ke konsumen dalam keadaan safety dan bersih dari
                            bakteri atau virus. Selain untuk alasan kebersihan atau higienis, makanan yang kedap udara
                            juga dapat menghentikan proses pembentukan dan berkembang biaknya bakteri serta mampu
                            menjaga kadar nutrisinya.
                        </p>
                        <div class="flex-t p-l-62 p-t-15 p-b-27 p-l-15-sm">
                            <div class="m-r-22 p-t-6">
                                <img src="Product/images/icons/icon-start-para.png" alt="IMG">
                            </div>
                            <p class="size-w-53 txt-m-126 cl9">
                                Setiap Produk dari Sadeng food adalah produk siap masak, dan bisa disajikan dengan cara
                                masak sesuka hati teman-teman. Harganya berkisar dari Rp.17.000 per Pcs hingga Rp.
                                107.000 per makanan, tergantung pada ukuran kotak yang Anda dapatkan. Teman-teman semua
                                dapat membeli produk di gerai Frozen Food terdekat ataupun dari e-commerce yang anda
                                miliki
                            </p>
                        </div>
                        <p class="txt-s-101 cl6 p-b-12">
                            Semakin hari tren frozen food semakin populer, pilihan makanan juga semakin beragam. Tidak
                            hanya sebatas goreng-gorengan, produk frozen food kini sudah banyak yang menyajikan pilihan
                            makanan yang beragam, dari jenis makanan rumahan sampai resto.
                        </p>
                        <p class="txt-s-101 cl6 p-b-12">
                            Lalu Muncul inovasi frozen food untuk lauk-lauk, sayuran beku bahkan makanan berkuah. Selain
                            praktis, jenis baru frozen food memungkinkan teman-teman semua untuk mencoba berbagai
                            hidangan lezat tanpa harus punya skill yang cakap untuk memasak..
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-sm-11 col-md-4 col-lg-3 m-rl-auto p-b-80">
                <div class="rightbar">
                    <!--  -->
                    <div class="size-a-21 pos-relative">
                        <input class="s-full bo-all-1 bocl15 p-rl-20" type="text" name="search"
                            placeholder="Search products...">
                        <button class="flex-c-m fs-18 size-a-22 ab-t-r hov11">
                            <img class="hov11-child trans-04" src="Product/images/icons/icon-search.png" alt="ICON">
                        </button>
                    </div>

                    <!--  -->
                    <div class="p-t-55">
                        <h4 class="txt-m-101 cl3 p-b-27">
                            Categories
                        </h4>
                        <ul>
                            <li class="p-b-5">
                                <a href="/Sosis" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                    <span class="m-r-10">
                                        Sosis
                                    </span>
                                    <span>
                                       {{ $sosis}}
                                    </span>
                                </a>
                            </li>
                            <li class="p-b-5">
                                <a href="/Nugget" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                    <span class="m-r-10">
                                      Nugget Ayam
                                    </span>
                                    <span>
                                       {{ $Nugget}}
                                    </span>
                                </a>
                            </li>
                            <li class="p-b-5">
                                <a href="/Cireng" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                    <span class="m-r-10">
                                       Cireng
                                    </span>
                                    <span>
                                       {{ $Cireng}}
                                    </span>
                                </a>
                            </li>
                            <li class="p-b-5">
                                <a href="/Bakso" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                    <span class="m-r-10">
                                       Bakso
                                    </span>
                                    <span>
                                       {{ $Bakso}}
                                    </span>
                                </a>
                            </li>
                            <li class="p-b-5">
                                <a href="/Buah" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                    <span class="m-r-10">
                                       Buah
                                    </span>
                                    <span>
                                       {{ $Buah}}
                                    </span>
                                </a>
                            </li>
                            <li class="p-b-5">
                                <a href="/Sambal" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                    <span class="m-r-10">
                                       Sambal
                                    </span>
                                    <span>
                                       {{ $Sambal}}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>




                    <!--  -->
                    <div class="p-t-25">
                        <h4 class="txt-m-101 cl3 p-b-37">
                            Search by tags
                        </h4>

                        <div class="flex-w m-r--10">
                            <a href="#"
                                class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                Food
                            </a>

                            <a href="#"
                                class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                Green
                            </a>

                            <a href="#"
                                class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                Vegetables
                            </a>

                            <a href="#"
                                class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                Organic
                            </a>

                            <a href="#"
                                class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                Farm
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
