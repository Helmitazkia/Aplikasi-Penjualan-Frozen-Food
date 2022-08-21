@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')
<!-- MAIN CONTENT -->
<div class="main">
    <div class="main-content project">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <form action="/AddNewbarang" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Deskripsi</label>
                                    <input type="text" name="nama_barang" id="disabledTextInput" class="form-control"
                                        value="{{old('nama_barang')}}" required>
                                    @error('nama_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Catagory</label>
                                    <select name="catagories"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m" required>
                                        @foreach ($ambilkategori as $katagori)
                                        <option value="{{$katagori->id}}">
                                            <?php echo $katagori->name_catagory; ?>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Nama Agen</label>
                                    <select name="nama_agen"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m" required>
                                        @foreach ($ambilagen as $agen)
                                        <option value="{{$agen->kode_agen}}">
                                            <?php echo $agen->nama_agen; ?>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Stok Masuk</label>
                                    <input type="number" name="jumlah_stok"  class="form-control"
                                        value="{{old('jumlah_stok')}}" required>
                                    @error('jumlah_stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Product</label>
                                    <select name="id_produk"
                                        class="form-control custom-select select2 select2-hidden-accessible"
                                        data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                        data-select2-id="select2-data-22-9i9m" required>
                                        @foreach ($ambilproduk as $kepo)
                                        <option value="{{$kepo->id}}">
                                            <?php echo $kepo->name; ?>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Tanggal Masuk</label>
                                    <input type="date" name="tanggal_masuk"  class="form-control"
                                        value="{{old('tanggal_masuk')}}" required>
                                    @error('tanggal_masuk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-24"> <label class="form-label">Harga Beli</label>
                                        <input type="text" name="harga_beli" id="rupiah"
                                            class="form-control" value="{{old('harga_beli')}}" required>
                                        @error('harga_beli')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
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