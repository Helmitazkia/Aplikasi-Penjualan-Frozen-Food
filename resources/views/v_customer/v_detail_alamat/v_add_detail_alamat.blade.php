@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')
<!-- MAIN CONTENT -->
<div class="main">
    <div class="main-content project">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <!--enctype="multipart/form-data untuk upload image -->
                    <form action="/AddNewAlalamat" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Name customer</label>
                                    <select name="id_customer"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m">
                                        @foreach ($ambilcustomer as $data)
                                        <option value="{{$data->id_customer}}">
                                            <?php echo $data->name_customer; ?>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Alamat Lengkap</label>
                                    <input type="text" name="alamat_detail" id="disabledTextInput" class="form-control"
                                        value="{{old('alamat_detail')}}" required>
                                    @error('alamat_detail')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Kode Pos</label>
                                    <input type="number" name="kode_pos" id="disabledTextInput" class="form-control"
                                        value="{{old('kode_pos')}}" required>
                                    @error('kode_pos')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="box-body">
                                <div class="gr-btn mt-15">
                                    <a href="Dashboardshow" class="btn btn-danger">Close</a>
                                    <button type="submit" class="btn btn-primary">Add Customer</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
@endsection
