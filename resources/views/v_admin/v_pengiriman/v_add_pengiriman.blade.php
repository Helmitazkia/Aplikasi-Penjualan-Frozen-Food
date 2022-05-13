@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')
<div class="main">
    <div class="main-content project">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <!--enctype="multipart/form-data untuk upload image -->
                    <form action="/Addpengiriman" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Pembelian
                                        Barang</label>
                                    <select name="id_product"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m">
                                        @foreach ($ambilproduct as $data)
                                        <option value="{{$data->id}}">
                                            <?php echo $data->name; ?>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Nama Customer</label>
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
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Tanggan Pengiriman</label>
                                    <input type="date" name="tanggal_pengiriman" 
                                    class="form-control" value="{{old('tanggal_pengiriman')}} "required>
                                    @error('tanggal_pengiriman')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Status Pengiriman</label>
                                    <select name="id_status"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m">
                                        @foreach ($ambilstatus as $data)
                                        <option value="{{$data->id_status}}">
                                            <?php echo $data->name_status; ?>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="gr-btn mt-15">
                                <a href="Dashboardshow" class="btn btn-danger">Close</a>
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
