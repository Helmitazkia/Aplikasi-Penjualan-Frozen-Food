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
                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10 how-active1" data-filter="*">
                        All Products
                    </button>

                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".vegetable-fill">
                        Vegetable
                    </button>

                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".fruit-fill">
                        Fruit
                    </button>

                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".fruit-juic-fill">
                        Fruit Juic
                    </button>

                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".dried-fill">
                        Dried
                    </button>

                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".other-fill">
                        Other
                    </button>
                </div>
            </div>
            <!--- End Katergori Product-->
            

            <!--- Start PRODUCT-->
            <div class="row isotope-grid">
                <!-- - -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item fruit-juic-fill other-fill dried-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="Product/images/product-01.jpg" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    Red pumpkin
                                </a>

                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                    21$
                                </span>

                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                    <a href="/Detail" class="block1-icon flex-c-m wrap-pic-max-w">
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

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item other-fill dried-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="Product/images/product-01.jpg" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    Bell pepper
                                </a>

                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                    12$
                                </span>

                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                    <a href="/Detail" class="block1-icon flex-c-m wrap-pic-max-w">
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