@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')
<!-- MAIN CONTENT -->
<div class="main">
    <div class="main-content project">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <!--enctype="multipart/form-data untuk upload image -->
                    <form action="/Addnewcustomer" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Name customer</label>
                                    <input type="text" name="name_customer" id="disabledTextInput" class="form-control"
                                        value="{{old('name_customer')}}" required>
                                    @error('name_customer')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m">
                                        <option>Laki-Laki</option>
                                        <option>Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Email</label>
                                    <input type="text" name="email" id="disabledTextInput" class="form-control"
                                        value="{{old('email')}}" required>
                                    @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Telepon</label>
                                        <input type="number" name="phone" id="disabledTextInput" class="form-control"
                                            value="{{old('phone')}}" required>
                                        @error('phone')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-24"> <label class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat_customer" cols="30" rows="10"
                                            value="{{ old('alamat_customer') }}" required></textarea>
                                        @error('alamat_customer')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="gr-btn mt-15">
                                    <a href="Dashboardshow" class="btn btn-danger">Close</a>
                                    <button type="submit" class="btn btn-primary">Add Customer</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

@endsection
