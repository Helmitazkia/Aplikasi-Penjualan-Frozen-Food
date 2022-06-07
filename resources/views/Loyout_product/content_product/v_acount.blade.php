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
                    @if (session()->has('logerror'))
                    <div class="alert alert-warning alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <path
                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                            </path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <strong>Warning ! </strong>{{session()->get('logerror')}}
                    </div>
                    @endif
                    <h4 class="txt-m-124 cl3 p-b-28">
                        Login
                    </h4>
                    <form action="Logincustomer" method="post">
                        @csrf
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                Email<span class="cl12">*</span>
                            </div>
                            <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text"
                                name="email_customer" value="{{old('email')}}" required>
                            @error('email_customer')
                            <div class="text-danger mt-0">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                Password <span class="cl12">*</span>
                            </div>
                            <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="password"
                                name="pswt" required>
                            @error('pswt')
                            <div class="text-danger mt-0">
                                {{$message}}
                            </div>
                            @enderror

                        </div>
                        <div class="flex-w flex-m p-t-15 p-b-10">
                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-39 hov-btn2 trans-04 p-rl-10 m-r-18">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6 p-b-50">
                <div class="p-l-15 p-rl-0-lg">
                    @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        <strong>Success ! </strong>{{session()->get('message')}}
                    </div>
                    @endif
                    <h4 class="txt-m-124 cl3 p-b-28">
                        Register
                    </h4>
                    <form action="Tambahcustomer" method="post">
                        @csrf
                        <div class="row p-b-50">
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Nama <span class="cl12">*</span>
                                    </div>
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text"
                                        required value="{{old('name_customer')}}" name="name_customer">
                                    @error('name_customer')
                                    <div class="text-danger mt-0">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Jenis Kelamin <span class="cl12">*</span>
                                    </div>

                                    <div class="rs1-select2 rs2-select2 bg0 w-full bo-all-1 bocl15 m-tb-7 m-r-15">
                                        <select class="js-select2" name="jenis_kelamin">
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Alamat Lengkap <span class="cl12">*</span>
                                    </div>
                                    <textarea class="plh2 txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 m-b-20"
                                        required value="{{old('alamat_customer')}}" type="text" name="alamat_customer"
                                        placeholder="Sertakan Kode Pos"></textarea>
                                    @error('alamat_customer')
                                    <div class="text-danger mt-0">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Telepon <span class="cl12">*</span>
                                    </div>
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text"
                                        required value="{{old('phone')}}" name="phone">
                                    @error('phone')
                                    <div class="text-danger mt-0">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Email
                                    </div>
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text"
                                        required value="{{old('email')}}" name="email">
                                    @error('email')
                                    <div class="text-danger mt-0">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Password <span class="cl12">*</span>
                                    </div>
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                        type="password" name="password">
                                    @error('password')
                                    <div class="text-danger mt-0">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Konfirmasi Password <span class="cl12">*</span>
                                    </div>
                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                        type="password" name="password_confirmation">
                                    @error('password_confirmation')
                                    <div class="text-danger mt-0">
                                        {{$message}}
                                    </div>
                                    @enderror
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
