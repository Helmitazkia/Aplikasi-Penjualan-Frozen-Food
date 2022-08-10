@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')  
<div class="main">
    <div class="main-content user">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $Transaksi }}</h4>
                    </div>
                    <br>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <th>NOMOR</th>
                                    <th>TOTAL BARANG KELUAR</th>
                                    <th>TOTAL PENDPATAN TRANSAKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($Total as $jumlahpen)
                                    <tr>
                                        <td><strong>{{$no++}}</strong></td>
                                        <td><?= number_format($jumlahpen->Jumlah,0,',','.');?></td>
                                        <td><?= number_format($jumlahpen->Transaksi,0,',','.');?></td>
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
