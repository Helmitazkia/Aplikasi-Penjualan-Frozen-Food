@extends('Loyout_product/header_footer')
@section('contentproduct')
<!--Detail Product-->
<section class="sec-product-detail bg0 p-t-105 p-b-70">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6">
                <div class="m-r--30 m-r-0-lg">
                 
                 
                 
                    <br>
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
                                                style="width: 350px;" class="wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
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

                    <span class="txt-m-117 cl9" style="font-weight: normal;color:black">
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
                    <p class="txt-s-101 cl6" style="font-weight: normal;color:black">
                        {{ $detailproduct->description}}
                    </p>
                    <br>
                    <div class="txt-s-107 p-b-6">
                        <span class="cl6" style="font-weight: normal;color:black">
                            Stok :
                        </span>
                        <span class="cl9" style="font-weight: normal;color:black">
                            {{ $detailproduct->stok}}
                        </span>
                    </div>

                    <div class="txt-s-107 p-b-6">
                        <span class="cl6" style="font-weight: normal;color:black">
                            Category :
                        </span>
                        <span class="cl9" style="font-weight: normal;color:black">
                            {{$detailproduct->name_catagory}}
                        </span>
                        <br>
                        <br>
                        <div class="row">
                            <a href="https://wa.me/6285773474149">
                                <img src="Product/images/Banner-img/Wa1.png" style="width: 78px;"></a>
                            <a href="https://www.tokopedia.com/ardenafood">
                                <img src="Product/images/Banner-img/Tokopedia.jpg" style="width: 160px;"></a>
                            <a href="https://shopee.co.id/ardenafood">
                                <img src="Product/images/Banner-img/Shope2.JPG" style="width: 100px;"></a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>



@endsection
