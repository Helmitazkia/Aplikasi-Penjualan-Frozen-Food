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
                PRODUK KAMI
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
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;600&display=swap');

            .kepo {
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 16px;
                margin-left: 80px;
            }

        </style>
        <!--- Start PRODUCT-->
        <div class="row isotope-grid">
            <?php foreach ($data as $dataproductaktif):?>
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item $dataproductaktif->catagories">
                <!-- Block1 -->
                <div class="block1">
                    <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04"  style="width: 280px;margin-left:20px;margin-right:80px;">
                        <img src="{{asset('storage/'.$dataproductaktif->image) }}"
                            style="width: 250px;margin-left:13px;">
                        <div class="block1-content flex-col-c-m p-b-46">
                            {{-- detail --}}
                            <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                <a href="/{{ $dataproductaktif->id}}" class="block1-icon flex-c-m wrap-pic-max-w">
                                    <img src="Product/images/icons/icon-view.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                        <a href="/{{ $dataproductaktif->id}}"
                            class="txt-m-90 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                            <div class="row">
                                <b class="kepo">{{$dataproductaktif->name}}</b>
                            </div>
                        </a>
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
@endsection
