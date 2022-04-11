@extends('Loyout_product/header_footer')
@section('contentproduct')

<section class="how-overlay2 bg-img1" style="background-image: url(images/bg-07.jpg);">
    <div class="container">
        <div class="txt-center p-t-160 p-b-165">
            <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                My Account
            </h2>

            <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    Home
                </a>

                <span>
                    / My Account
                </span>
            </span>
        </div>
    </div>
</section>



<div class="bg0 p-t-95 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-50">
                <div class="p-r-15 p-rl-0-lg">
                    <h4 class="txt-m-124 cl3 p-b-28">
                        Login
                    </h4>

                    <form class="how-bor3 p-rl-30 p-tb-32">
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                Username or email address <span class="cl12">*</span>
                            </div>

                            <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="username">
                        </div>

                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                Password <span class="cl12">*</span>
                            </div>

                            <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="password" name="password">
                        </div>

                        <div class="flex-w flex-m p-t-15 p-b-10">
                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-39 hov-btn2 trans-04 p-rl-10 m-r-18">
                                Login
                            </button>

                            <div class="flex-w flex-m p-tb-8">
                                <input id="check-creatacc" class="size-a-35 m-r-10" type="checkbox" name="creatacc">
                                <label for="check-creatacc" class="txt-s-101 cl9">
                                    Create an account?
                                </label>
                            </div>
                        </div>

                        <a href="#" class="txt-s-101 cl9 hov-cl10 trans-04">
                            Lost your password?
                        </a>
                    </form>
                </div>
            </div>

            <div class="col-md-6 p-b-50">
                <div class="p-l-15 p-rl-0-lg">
                    <h4 class="txt-m-124 cl3 p-b-28">
                        Register
                    </h4>

                    <form class="how-bor3 p-rl-30 p-t-32 p-b-66">
                        <div class="row p-b-50">
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        First Name <span class="cl12">*</span>
                                    </div>
    
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="first-name">
                                </div>
                            </div>
    
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Last Name <span class="cl12">*</span>
                                    </div>
    
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="last-name">
                                </div>
                            </div>
    
                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Company Name
                                    </div>
    
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="company-name">
                                </div>
                            </div>
    
                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Country <span class="cl12">*</span>
                                    </div>
    
                                    <div class="rs1-select2 rs2-select2 bg0 w-full bo-all-1 bocl15 m-tb-7 m-r-15">
                                        <select class="js-select2" name="country">
                                            <option>US</option>
                                            <option>UK</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Address <span class="cl12">*</span>
                                    </div>
    
                                    <input class="plh2 txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 m-b-20" type="text" name="street" placeholder="Street address">
    
                                    <input class="plh2 txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="add" placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                            </div>
    
                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Town/City <span class="cl12">*</span>
                                    </div>
    
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="city">
                                </div>
                            </div>
    
                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        County <span class="cl12">*</span>
                                    </div>
    
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="ct">
                                </div>
                            </div>
    
                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Postcode / Zip <span class="cl12">*</span>
                                    </div>
    
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="postcode">
                                </div>
                            </div>
    
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Phone <span class="cl12">*</span>
                                    </div>
    
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="phone">
                                </div>
                            </div>
    
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Email Address <span class="cl12">*</span>
                                    </div>
    
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="email">
                                </div>
                            </div>
                        </div>

                        <div class="flex-w flex-m p-t-15">
                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-39 hov-btn2 trans-04 p-rl-10 m-r-18">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection