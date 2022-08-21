@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')
<div class="main">
    <div class="main-content user">
        <div class="row">
            <!-- Table CONTENT-->
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <polyline points="9 11 12 14 22 4"></polyline>
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                </svg>
                <strong>Success ! </strong>{{session()->get('success')}}
            </div>
            @endif
            @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <strong>Error ! </strong>{{session()->get('error')}}
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                            class="mdi mdi-close"></i></span>
                </button>
            </div>
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $webname }}</h4>
                    </div>
                    <br>
                    <a href="/AddBarangMasuk" class="btn btn-primary ml-12" style="width:200px;">Add New Barang</a>
                    </button>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <th>NO</th>
                                    <th>Product</th>
                                    <th>Deskripsi</th>
                                    <th>Catagory</th>
                                    <th>Nama Agen</th>
                                    <th>Harga Beli</th>
                                    <th>Stok Masuk</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($data as $databarang)
                                    <tr>
                                        <td><strong>{{$no++}}</strong></td>
                                        <td>{{$databarang->name}}</td>
                                        <td>{{$databarang->nama_barang}}</td>
                                        <td>{{$databarang->name_catagory}}</td>
                                        <td>{{$databarang->nama_agen}}</td>
                                        <td><?= number_format($databarang->harga_beli,0,',','.');?></td>
                                        <td>{{$databarang->jumlah_stok}}</td>
                                        <td>{{$databarang->tanggal_masuk}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#update{{$databarang->id_barang}}"><i
                                                        class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-danger shadow btn-xs sharp Hapus-barang"
                                                    data-id="{{$databarang->id_barang}}"
                                                    data-name="{{$databarang->nama_barang}}"><i
                                                        class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Table-->


            <!-- Modal -->
            @foreach ($data as $databarang)
            <!-- Modal -->
            <div class="modal fade" id="update{{$databarang->id_barang}}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/BarangUpdate/{{$databarang->id_barang}}" method="POST"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit {{$databarang->name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!--Price Name--->
                                <input type="hidden" name="id_barang" class="form-control"
                                    value="{{$databarang->id_barang}}" readonly>
                                <label class="form-label">Deskripsi</label>
                                <input type="text" name="nama_barang" class="form-control"
                                    value="{{$databarang->nama_barang}}" required>
                                @error('nama_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Nama Agen :</label>
                                <br>
                                <input type="hidden" name="nama_agen" value="{{$databarang->nama_agen}}">
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
                                <br>
                                <!--Price Edit--->
                                <label class="form-label">Harga Beli</label>
                                <input type="text" name="harga_beli" class="form-control"
                                    value="{{$databarang->harga_beli}}" required>
                                @error('harga_beli')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <!--Catagory Edit--->
                                <label class="form-label">Catagory :</label>
                                <br>
                                <input type="hidden" name="catagories" id="html" value="{{$databarang->catagories}}">
                                @foreach ($ambilkategori as $productkata)
                                <input type="radio" id="html" name="catagories" value="{{$productkata->id}}">
                                  <label for="html">{{$productkata->name_catagory}}</label><br>
                                @endforeach
                                <br>
                                <label class="form-label">Stok Barang</label>
                                <input type="text" name="jumlah_stok" class="form-control"
                                    value="{{$databarang->jumlah_stok}}" required>
                                @error('jumlah_stok')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Tanggal Masuk</label>
                                <input type="date" name="tanggal_masuk" class="form-control"
                                    value="{{$databarang->tanggal_masuk}}" required>
                                @error('tanggal_masuk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Modal -->
        </div>
    </div>
</div>
@endsection
<!-- END MAIN CONTENT -->
