@extends('Loyout_product/header_footer')
@section('contentproduct')
<div style="margin-top: 5px;">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-48">
            <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                Featured Products
                <div class="how-pos1">
                    <img src="Product/images/icons/symbol-02.png" alt="IMG">
                </div>
            </div>
            <h3 class="txt-center txt-l-101 cl3 respon1">
                Our products
            </h3>
        </div>

        <!--- Start Katergori Product-->
        <div class="p-b-46">
            <div class="flex-w flex-c-m filter-tope-group">
                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10 how-active1"><a href="/Store"
                        style="color: green;">All Products</a>
                </button>
                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10 how-active1">
                    <a href="/Sosis" style="color:green;">Sosis</a>
                </button>
                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10 how-active1">
                    <a href="/Nugget" style="color:green;">Nugget Ayam</a>
                </button>
                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10 how-active1">
                    <a href="/Cireng" style="color:green;">Cireng</a>
                </button>
                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10 how-active1">
                    <a href="/Bakso" style="color:green;">Bakso</a>
                </button>
                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10 how-active1">
                    <a href="/Buah" style="color:green;">Buah</a>
                </button>
                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10 how-active1">
                    <a href="/Sambal" style="color:green;">Sambal</a>
                </button>

            </div>
        </div>
        <!--- End Katergori Product-->


        <!--- Start PRODUCT-->
        <div class="row isotope-grid">
             <?php foreach ($data as $dataproductaktif):?>
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
          <?php
        endforeach;
          ?>
        </div>
        <!--- END PRODUCT-->
    </div>
</div>

<!-- Pagination -->
<div class="flex-w flex-c-m p-t-47">
    <a href="#" class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 active-pagi1">
        1
    </a>
    <a href="#" class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3">
        2
    </a>
    <a href="#" class="flex-c-m txt-s-115 cl6 size-a-24 how-btn1 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 p-b-1">
        Next
        <span class="lnr lnr-chevron-right m-t-3 m-l-7"></span>
        <span class="lnr lnr-chevron-right m-t-3"></span>
    </a>
</div>
<br>
<br>
@endsection
