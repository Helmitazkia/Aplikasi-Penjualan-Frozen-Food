@extends('Loyout_product/header_footer')
@section('contentproduct')

<!-- Title page -->
<section class="how-overlay2 bg-img1" style="background-image: url(Product/images/bg-07.jpg);">
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
                                            <img src="Product/images/pro-detail-thumb-02.jpg" alt="IMG-SLIDE" style="width: 500px">
                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>	
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-6">
                <div class="p-l-70 p-t-35 p-l-0-lg">
                    <h4 class="js-name1 txt-l-104 cl3 p-b-16">
                        Cauliflower
                    </h4>

                    <span class="txt-m-117 cl9">
                        19$
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
                    </p>

                    <div class="flex-w flex-m p-t-55 p-b-30">
                        <!--Jumlah Ceheckout-->
                        <div class="wrap-num-product flex-w flex-m bg12 p-rl-10 m-r-30 m-b-30">
                            <div class="btn-num-product-down flex-c-m fs-29"></div>
                            <input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product" value="1">
                            <div class="btn-num-product-up flex-c-m fs-16"></div>
                        </div>
                        <a href="/Checkout" class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30">
                            Checkout
                        </a>
                    </div>

                    <div class="txt-s-107 p-b-6">
                        <span class="cl6">
                            Sku:
                        </span>

                        <span class="cl9">
                            156
                        </span>
                    </div>

                    <div class="txt-s-107 p-b-6">
                        <span class="cl6">
                            Category:
                        </span>

                        <span class="cl9">
                            Fruit
                        </span>
                    </div>

                    <div class="txt-s-107 p-b-6">
                        <span class="cl6">
                            Tags:
                        </span>

                        <a href="#" class="txt-s-107 cl9 hov-cl10 trans-04">
                            Healthy,
                        </a>

                        <a href="#" class="txt-s-107 cl9 hov-cl10 trans-04">
                            Organic
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab01 -->
        <div class="tab02 p-t-80">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#info" role="tab">Additional Information</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (01)</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- - -->
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <div class="p-t-30">
                        <p class="txt-s-112 cl9">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </p>
                    </div>
                </div>

                <!-- - -->
                <div class="tab-pane fade" id="info" role="tabpanel">
                    <ul class="p-t-21">
                        <li class="txt-s-101 flex-w how-bor2 p-tb-14">
                            <span class="cl6 size-w-54">
                                Weight
                            </span>

                            <span class="cl9 size-w-55">
                                0.5 kg
                            </span>
                        </li>

                        <li class="txt-s-101 flex-w how-bor2 p-tb-14">
                            <span class="cl6 size-w-54">
                                Counrty of Origin
                            </span>

                            <span class="cl9 size-w-55">
                                Imported
                            </span>
                        </li>

                        <li class="txt-s-101 flex-w how-bor2 p-tb-14">
                            <span class="cl6 size-w-54">
                                Quality
                            </span>

                            <span class="cl9 size-w-55">
                                Oraganic
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- - -->
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <div class="p-t-36">
                        <h5 class="txt-m-102 cl3 p-b-36">
                            1 review for Cauliflower
                        </h5>

                        <div class="flex-w flex-sb-t bo-b-1 bocl15 p-b-37">
                            <div class="wrap-pic-w size-w-56">
                                <img src="Product/images/avatar-03.jpg" alt="AVATAR">
                            </div>

                            <div class="size-w-57 p-t-2">
                                <div class="flex-w flex-sb-m p-b-8">
                                    <div class="flex-w flex-b m-r-20 p-tb-5">
                                        <span class="txt-m-103 cl6 m-r-20">
                                            Crystal Jimenez
                                        </span>

                                        <span class="txt-s-120 cl9">
                                            ( United States – June 21, 2017 ) 
                                        </span>
                                    </div>

                                    <span class="fs-16 cl11 lh-15 txt-center m-r-15 p-tb-5">
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                    </span>
                                </div>

                                <p class="txt-s-101 cl6">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.
                                </p>
                            </div>
                        </div>

                        <!-- Add review -->
                        <form class="w-full p-t-42">
                            <h5 class="txt-m-102 cl3 p-b-20">
                                Add a review
                            </h5>

                            <p class="txt-s-101 cl6 p-b-10">
                                Your email address will not be published. Required fields are marked *
                            </p>

                            <div class="flex-w flex-m p-b-3">
                                <span class="txt-s-101 cl6 p-b-5 m-r-10">
                                    Your Rating
                                </span>

                                <span class="wrap-rating fs-16 cl11 pointer">
                                    <i class="item-rating pointer fa fa-star-o m-rl-1"></i>
                                    <i class="item-rating pointer fa fa-star-o m-rl-1"></i>
                                    <i class="item-rating pointer fa fa-star-o m-rl-1"></i>
                                    <i class="item-rating pointer fa fa-star-o m-rl-1"></i>
                                    <i class="item-rating pointer fa fa-star-o m-rl-1"></i>
                                    <input class="dis-none" type="number" name="rating">
                                </span>
                            </div>
                            
                            <span class="txt-s-101 cl6">
                                Your review *
                            </span>

                            <div class="row p-t-12">
                                <div class="col-sm-6 p-b-30">
                                    <input class="txt-s-101 cl3 plh1 size-a-25 bo-all-1 bocl11 focus1 p-rl-20" type="text" name="name" placeholder="Name *">
                                </div>

                                <div class="col-sm-6 p-b-30">
                                    <input class="txt-s-101 cl3 plh1 size-a-25 bo-all-1 bocl11 focus1 p-rl-20" type="text" name="email" placeholder="Email *">
                                </div>

                                <div class="col-12 p-b-30">
                                    <textarea class="txt-s-101 cl3 plh1 size-a-26 bo-all-1 bocl11 focus1 p-rl-20 p-tb-10" name="review" placeholder="Your review *"></textarea>
                                </div>
                            </div>

                            <div class="flex-r">
                                <button class="flex-c-m txt-s-103 cl0 bg10 size-a-27 hov-btn2 trans-04">
                                    Submit
                                </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection