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
                        <h4 class="card-title">{{ $title }}</h4>
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="Cari sesuai Tanggal">
                        </div>
                    </div>
                    <br>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <th>NO</th>
                                    <th>Gambar Bukti</th>
                                    <th>Tanggal</th>
                                    <th>Nama Customer</th>
                                    <th>Telepon</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Product</th>
                                    <th>Total Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($data as $databukti)
                                    <tr>
                                        <td><strong>{{$no++}}</strong></td>
                                        <td>
                                            <img src="{{asset('storage/'.$databukti->image) }}" style="width:100px;">
                                        </td>
                                        <td>{{$databukti->tanggal_kirim_bukti}}</td>
                                        <td>{{$databukti->name_customer}}</td>
                                        <td>{{$databukti->phone}}</td>
                                        <td>{{$databukti->tanggal_transaksi}}</td>
                                        <td>{{$databukti->name}}</td>
                                        <td>{{$databukti->total_transaksi}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#update{{$databukti->id_bukti}}"><i
                                                        class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-danger shadow btn-xs sharp bukti-pembayaran"
                                                    data-id="{{$databukti->id_bukti}}"
                                                    data-name="{{$databukti->name_customer}}"><i
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
            @foreach ($data as $databukti)
            <!-- Modal -->
            <div class="modal fade" id="update{{$databukti->id_bukti}}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/UpdateDataPembayaran/{{$databukti->id_bukti}}" method="POST"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran
                                    {{$databukti->name_customer}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <br>
                                <!--image Edit--->
                                <img src="{{asset('storage/'.$databukti->image) }}" style="width:350px;height:300px;">
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
