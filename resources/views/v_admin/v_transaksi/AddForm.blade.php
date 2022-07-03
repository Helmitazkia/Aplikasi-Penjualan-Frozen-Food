@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')
<!-- MAIN CONTENT -->
<div class="main">
    <div class="main-content project">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <form action="/PostTransaksi" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                 <input type="hidden" name="staf" value="{{ $log }}" class="form-control" readonly>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">No Transaksi</label>
                                    <input type="text" name="no_transaksi" value="{{'TR'.date('ymd').'-'.$kd }}" class="form-control"
                                        value="{{old('no_transaksi')}}" readonly>
                                    @error('no_transaksi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Tanggal
                                        Transaksi</label>
                                    <input type="date" name="tanggal_transaksi" class="form-control"
                                        value="{{old('tanggal_transaksi')}}" required>
                                    @error('tanggal_transaksi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Nama Customer</label>
                                    <select name="customer"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m" required>
                                        @foreach ($customer as $Namacustomer)
                                        <option value="{{$Namacustomer->id_customer}}">
                                            <?php echo $Namacustomer->name_customer; ?>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Product</label>
                                    <select name="id_product"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m" required>
                                        @foreach ($products as $productsambil)
                                        <option value="{{$productsambil->id}}">
                                            <?php echo $productsambil->name; ?>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">jumlah Beli</label>
                                    <input type="number" name="jumlah_beli" class="form-control"
                                        value="{{old('jumlah_beli')}}" required>
                                    @error('jumlah_beli')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Type
                                        Transaksi</label>
                                    <select name="type_transaksi"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m" required>
                                        @foreach ($Type as $DataType)
                                        <option value="{{$DataType->id_type}}">
                                            <?php echo $DataType->name_type; ?>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Total</label>
                                    <input type="number" name="total_transaksi" id="rupiah" class="form-control"
                                        value="{{old('total_transaksi')}}" required>
                                    @error('total_transaksi')
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

{{-- format rupiah --}}
<script type="text/javascript">
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function (e) {
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka satuan ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
    }

</script>
@endsection
