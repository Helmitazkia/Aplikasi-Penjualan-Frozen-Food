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
                    <a href="/AddTransaksi" class="btn btn-info ml-12" style="width:200px;">Add Transaksi<a>
                            </button>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <th>NO</th>
                                            <th>NO Transaksi</th>
                                            <th>Tanggal</th>
                                            <th>Customer</th>
                                            <th>Product</th>
                                            <th>Jumlah Beli</th>
                                            <th>Petugas</th>
                                            <th>Type Transaksi</th>
                                            <th>Total</th>
                                            <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($Transaksi as $datatransaksi)
                                            <tr>
                                                <td><strong>{{$no++}}</strong></td>
                                                <td>{{$datatransaksi->no_transaksi}}</td>
                                                <td>{{$datatransaksi->tanggal_transaksi}}</td>
                                                <td>{{$datatransaksi->name_customer}}</td>
                                                <td>{{$datatransaksi->name}}</td>
                                                <td>{{$datatransaksi->jumlah_beli}}</td>
                                                <td>{{$datatransaksi->nama_user}}</td>
                                                <td>{{$datatransaksi->name_type}}</td>
                                                <td><?= number_format($datatransaksi->total_transaksi,0,',','.');?></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <button type="button"
                                                            class="btn btn-primary shadow btn-xs sharp mr-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#update{{$datatransaksi->no_transaksi}}"><i
                                                                class="fa fa-pencil"></i>
                                                        </button>
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
            @foreach ($Transaksi as $Transaksidata)
            <!-- Modal -->
            <div class="modal fade" id="update{{$Transaksidata->no_transaksi}}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/UpdateTransaksi/{{$Transaksidata->no_transaksi}}" method="POST"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">NO {{$Transaksidata->no_transaksi}}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="staf" value="{{ $log }}" class="form-control" readonly>
                                <label class="form-label">Tanggal Transaksi</label>
                                <input type="hidden" name="no_transaksi" class="form-control"
                                    value="{{$Transaksidata->no_transaksi }}" required>
                                <input type="Date" name="tanggal_transaksi" class="form-control"
                                    value="{{$Transaksidata->tanggal_transaksi }}" required>
                                @error('tanggal_transaksi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Nama Customer:</label>
                               {{-- <input type="hidden" name="customer" class="form-control"
                                    value="{{$Transaksidata->customer}}"> --}}
                                <select name="customer"
                                    class="form-control custom-select select2 select2-hidden-accessible"
                                    data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                    data-select2-id="select2-data-22-9i9m" required>
                                    <option value="{{ $Transaksidata->customer }}"> <?php echo $Transaksidata->name_customer; ?></option>
                                    @foreach ($ambilcustomer as $kepo)
                                    <option value="{{$kepo->id_customer}}">
                                        <?php echo $kepo->name_customer; ?>
                                    </option>
                                    @endforeach
                                </select>
                                <br>
                                <label class="form-label">Nama Product :</label>
                                <br>
                                <select name="id_product"
                                    class="form-control custom-select select2 select2-hidden-accessible"
                                    data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                    data-select2-id="select2-data-22-9i9m" required>
                                   <option value="{{ $Transaksidata->id_product }}"> <?php echo $Transaksidata->name; ?></option>
                                    @foreach ($ambilproducts as $ambilproductsc)
                                    <option value="{{$ambilproductsc->id}}">
                                        <?php echo $ambilproductsc->name; ?>
                                    </option>
                                    @endforeach
                                </select>
                                <br>
                                <br>
                                <label class="form-label">Jumlah Beli</label>
                                <input type="number" name="jumlah_beli" class="form-control"
                                    value="{{$Transaksidata->jumlah_beli}}" required>
                                @error('jumlah_beli')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Type Transaksi :</label>
                                <br>
                                <input type="hidden" name="type_transaksi" value="{{$Transaksidata->type_transaksi}}">
                                <select name="type_transaksi"
                                    class="form-control custom-select select2 select2-hidden-accessible"
                                    data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                    data-select2-id="select2-data-22-9i9m" required>
                                    <option value="{{ $Transaksidata->type_transaksi }}"> <?php echo $Transaksidata->name_type; ?></option>
                                    @foreach ($Type as $Types)
                                    <option value="{{$Types->id_type}}">
                                        <?php echo $Types->name_type; ?>
                                    </option>
                                    @endforeach
                                </select>
                                <br>
                                <label class="form-label">Total</label>
                                <input type="number" name="total_transaksi" class="form-control"
                                    value="{{$Transaksidata->total_transaksi}}" required>
                                @error('total_transaksi')
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
