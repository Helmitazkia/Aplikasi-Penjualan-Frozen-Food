@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')
@php
$tglmasuk = new DateTime();
@endphp
<!-- MAIN CONTENT -->
<div class="main">
    <div class="main-content project">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <!--enctype="multipart/form-data untuk upload image -->
                    <form action="/Formadd" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Name Product</label>
                                    <input type="text" name="name" id="disabledTextInput" class="form-control"
                                        value="{{old('name')}}" placeholder="Sosis-Bakar *" required>
                                    @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Price (IDR)</label>
                                    <input type="number" name="price" id="disabledTextInput" class="form-control"
                                        value="{{old('price')}}" placeholder="70000 *" required>
                                    @error('price')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Catagory</label>
                                    <select name="catagory"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m">
                                    <option>Select Item</option>
                                    @foreach ($data as $dataproduct)
                                    <option value="{{$dataproduct->id}}">
                                        <?php echo $dataproduct->name_catagory; ?>
                                    </option>
                                   @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control"
                                        value="{{old('image')}}" placeholder="Latte Hot *"  required>
                                    {{-- Menampilkan Gambar yang mau di upload Menggunakan JS
                                    <img class="img-priview"> --}}
                                    @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Stok Barang</label>
                                        <input type="text" name="stok" id="disabledTextInput" class="form-control"
                                            value="{{old('stok')}}" placeholder="12 *" required>
                                        @error('stok')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Status</label>
                                    <select name="status"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m">
                                        <option>Status</option>
                                            @foreach ($status as $datastatus)
                                            <option value="{{$datastatus->id_status}}">
                                                <?php echo $datastatus->name_status; ?>
                                        </option>
                                            @endforeach
                                    </select>
                                    </div>
                                </div>
                            <div class="form-group mb-24"> <label class="form-label">Description Product:</label>
                                <textarea class="form-control" name="desc" cols="30" rows="10" value="{{old('desc')}}"
                                    value="{{ old('desc') }}" required></textarea>
                                @error('desc')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
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
<!-- END MAIN CONTENT -->

@endsection
