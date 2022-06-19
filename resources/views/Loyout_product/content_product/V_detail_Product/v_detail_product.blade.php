@extends('Loyout_product/header_footer')
@section('contentproduct')

<!-- Title page -->
<section class="how-overlay2 bg-img1" style="background-image: url(Product/images/Banner-img/c1.jpg);">
    <div class="container">
        <div class="txt-center p-t-160 p-b-165">
            <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                shop
            </h2>

            <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    Home
                </a>

                <a href="shop-product-grid.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    / Products
                </a>

                <a href="#" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    / Vegetables
                </a>

                <span>
                    / Products
                </span>
            </span>
        </div>
    </div>
</section>


<!--Detail Product-->
<section class="sec-product-detail bg0 p-t-105 p-b-70">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6">
                <div class="m-r--30 m-r-0-lg">
                    <!-- Slide 100 -->
                    <div id="slide100-01">
                        <div class="wrap-thumb-100 flex-w flex-sb p-t-30">
                            <div class="thumb-100">
                                <div class="sub-frame sub-1">
                                    <div class="wrap-main-pic">
                                        <div class="main-pic">
                                            @foreach ($datadetail as $detailproduct)
                                            {{-- <img src="Product/images/pro-detail-thumb-02.jpg" alt="IMG-SLIDE"
                                                style="width: 500px"> --}}
                                            <img src="{{asset('storage/'.$detailproduct->image) }}"
                                                style="width: 350px;">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-6">
                @foreach ($datadetail as $detailproduct)
                <div class="p-l-70 p-t-35 p-l-0-lg">
                    <h4 class="js-name1 txt-l-104 cl3 p-b-16">
                        {{ $detailproduct->name}}
                    </h4>

                    <span class="txt-m-117 cl9">
                        <?= number_format($detailproduct->price,0,',','.');
                        ?></b>
                    </span>

                    <div class="flex-w flex-m p-t-30 p-b-27">
                        <span class="fs-16 cl11 lh-15 txt-center m-r-15">
                            <i class="fa fa-star m-rl-1"></i>
                            <i class="fa fa-star m-rl-1"></i>
                            <i class="fa fa-star m-rl-1"></i>
                            <i class="fa fa-star m-rl-1"></i>
                            <i class="fa fa-star m-rl-1"></i>
                        </span>

                        <span class="txt-s-115 cl6 p-b-3">
                            (1 customer review)
                        </span>
                    </div>

                    <p class="txt-s-101 cl6">
                        {{ $detailproduct->description}}
                    </p>

                    <div class="flex-w flex-m p-t-55 p-b-30">
                        <!--Jumlah Ceheckout-->
                        <div class="wrap-num-product flex-w flex-m bg12 p-rl-10 m-r-30 m-b-30">
                            <div class="btn-num-product-down flex-c-m fs-29"></div>
                            <input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product"
                                value="1">
                            <div class="btn-num-product-up flex-c-m fs-16"></div>
                        </div>
                        <a href="/Checkout" class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30">
                            Checkout
                        </a>
                    </div>

                    <div class="txt-s-107 p-b-6">
                        <span class="cl6">
                            Stok :
                        </span>
                        <span class="cl9">
                            {{ $detailproduct->stok}}
                        </span>
                    </div>

                    <div class="txt-s-107 p-b-6">
                        <span class="cl6">
                            Category :
                        </span>

                        <span class="cl9">
                            {{$detailproduct->name_catagory}}
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Tab01 -->
         <div class="row isotope-grid">
                @foreach ($product as $dataproductaktif)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item $dataproductaktif->catagories">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="{{asset('storage/'.$dataproductaktif->image) }}" style="width: 270px;">
                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="#" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    <b style='color:#00008B;font-size: 20px;'>{{$dataproductaktif->name}}</b>
                                </a>
                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                    <b style='color:#00008B;font-size: 30px;'>
                                    <?= number_format($dataproductaktif->price,0,',','.');
                                    ?></b>
                                </span>
                                {{-- detail --}}
                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                    <a href="/{{ $dataproductaktif->id}}" class="block1-icon flex-c-m wrap-pic-max-w">
                                        <img src="Product/images/icons/icon-view.png" alt="ICON">
                                    </a>
                                    <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                        <img src="Product/images/icons/icon-cart.png" alt="ICON">
                                    </a>  
                                </div>
                            </div>
                        </div>
                    </div>	 
                </div>
                @endforeach
            </div>
    </div>
</section>



@endsection