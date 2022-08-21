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
                    <div class="row">
                        <a href="/Cetak" style="width:200px;margin-left:970px;" target="_blank"
                            class="btn btn-success ml-12"><img src="Product/images/Banner-img/print.png"
                                style="width:35px;"> Cetak Laporan</a>
                    </div>
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
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Table-->
        </div>
    </div>
</div>
@endsection
<!-- END MAIN CONTENT -->
