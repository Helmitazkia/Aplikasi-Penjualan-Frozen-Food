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
                    </div>
                    <br>
                    <a href="/AddFormPembayaran" class="btn btn-info ml-12" style="width:200px;">Add Pembayaran</a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <th>NO</th>
                                    <th>Image</th>
                                    <th>Nama Bank</th>
                                    <th>Nama Penerima</th>
                                    <th>No Rekeing</th>
                                    <th>Status</th>
                                    <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($data as $datapembayaran)
                                    <tr>
                                        <td><strong>{{$no++}}</strong></td>
                                        <td>
                                            <img src="{{asset('storage/'.$datapembayaran->image_pembayaran) }}"
                                                style="width:100px;">
                                        </td>
                                        <td>{{$datapembayaran->Nama_pembayaran}}</td>
                                        <td>{{$datapembayaran->nama_penerima}}</td>
                                        <td>{{$datapembayaran->rekening}}</td>
                                        <td>{{$datapembayaran->name_status}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#update{{$datapembayaran->id_pembayaran}}"><i
                                                        class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-danger shadow btn-xs sharp delete-pembayaran"
                                                    data-id="{{$datapembayaran->id_pembayaran}}"
                                                    data-name="{{$datapembayaran->Nama_pembayaran}}"><i
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
            @foreach ($data as $datapembayaran)
            <!-- Modal -->
            <div class="modal fade" id="update{{$datapembayaran->id_pembayaran}}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/UpdateDataPembayaran/{{$datapembayaran->id_pembayaran}}" method="POST"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">EDIT
                                    BANK {{$datapembayaran->Nama_pembayaran}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" class="form-control"
                                    value="{{$datapembayaran->id_pembayaran}}" readonly>
                                <label class="form-label">Nama Bank</label>
                                <input type="text" name="Nama_pembayaran" id="disabledTextInput" class="form-control"
                                    value="{{$datapembayaran->Nama_pembayaran}}" required>
                                @error('Nama_pembayaran')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Nama
                                    Penerima</label>
                                <input type="text" name="nama_penerima" id="disabledTextInput" class="form-control"
                                    value="{{$datapembayaran->nama_penerima}}" required>
                                @error('nama_penerima')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Nomor
                                    Rekenin</label>
                                <input type="text" name="rekening" id="disabledTextInput" class="form-control"
                                    value="{{$datapembayaran->rekening}}" required>
                                @error('rekening')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <!--image Edit--->
                                <img src="{{asset('storage/'.$datapembayaran->image_pembayaran) }}"
                                    style="width:120px;">
                                <br>
                                <br>
                                <label class="form-label">Image
                                    Pembayaran</label>
                                <input type="file" name="image_pembayaran" class="form-control">
                                @error('image_pembayaran')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <input type="hidden" name="fotolama" class="form-control"
                                    value="{{$datapembayaran->image_pembayaran}}">

                                <br>
                                <label class="form-label">Status Product :</label>
                                <br>
                                <input type="hidden" name="id_status" id="html" value="{{$datapembayaran->id_status}}">
                                @foreach ($ambilstatus as $datastatus)
                                <input type="radio" id="html" name="id_status" value="{{$datastatus->id_status}}">
                                <label for="html">{{$datastatus->name_status}}</label><br>
                                @endforeach
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
