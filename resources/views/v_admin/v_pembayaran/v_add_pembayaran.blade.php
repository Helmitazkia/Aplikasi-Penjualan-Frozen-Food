@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')
<!-- MAIN CONTENT -->
<div class="main">
    <div class="main-content project">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <!--enctype="multipart/form-data untuk upload image -->
                    <form action="/Addpembayaran" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Nama Bank</label>
                                    <input type="text" name="Nama_pembayaran" id="disabledTextInput"
                                        class="form-control" value="{{old('Nama_pembayaran')}}" required>
                                    @error('Nama_pembayaran')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Image
                                        Pembayaran</label>
                                    <input type="file" name="image_pembayaran" class="form-control"
                                        value="{{old('image_pembayaran')}}" required>
                                    @error('image_pembayaran')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Nama
                                            Penerima</label>
                                        <input type="text" name="nama_penerima" id="disabledTextInput"
                                            class="form-control" value="{{old('nama_penerima')}}" required>
                                        @error('nama_penerima')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Nomor
                                            Rekening</label>
                                        <input type="text" name="rekening" id="disabledTextInput" class="form-control"
                                            value="{{old('rekening')}}" required>
                                        @error('rekening')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">status</label>
                                        <select name="id_status"
                                            class="form-control custom-select select2 select2-hidden-accessible"
                                            data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-22-9i9m">
                                            @foreach ($status as $datastatus)
                                            <option value="{{$datastatus->id_status}}">
                                                <?php echo $datastatus->name_status; ?>
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="gr-btn mt-15">
                                <a href="Dashboardshow" class="btn btn-danger">Close</a>
                                <button type="submit" class="btn btn-success">Add Pembayaran</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

@endsection
