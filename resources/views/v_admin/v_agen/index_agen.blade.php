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
                    <button type="button" class="btn btn-success ml-12" style="width:200px;" data-bs-toggle="modal"
                        data-bs-target="#add">Add New Agen
                    </button>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <th>NO</th>
                                    <th>Nama Agen</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Telepon</th>
                                    <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($data as $datagaen)
                                    <tr>
                                        <td><strong>{{$no++}}</strong></td>
                                        <td>{{$datagaen->nama_agen}}</td>
                                        <td>{{$datagaen->alamat}}</td>
                                        <td>{{$datagaen->phone}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#update{{$datagaen->kode_agen}}"><i
                                                        class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-danger shadow btn-xs sharp delete-agen"
                                                    data-id="{{$datagaen->kode_agen}}"
                                                    data-name="{{$datagaen->nama_agen}}"><i
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

            <!-- Modal Untuk Tambah Data-->
            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/AddNewagen" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">Name Agen</label>
                                <input type="text" name="nama_agen" class="form-control" value="{{old('nama_agen')}}"
                                    required>
                                @error('nama_agen')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Alamat Lengkap</label>
                                <textarea type="text" name="alamat" class="form-control" value="{{old('alamat')}}"
                                    required></textarea>
                                @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Telepon</label>
                                <input type="number" name="phone" class="form-control" value="{{old('phone')}}"
                                    required>
                                @error('phone')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Untuk Update-->
            @foreach ($data as $dataagen)
            <!-- Modal -->
            <div class="modal fade" id="update{{$dataagen->kode_agen}}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/UpdataAgen/{{$dataagen->kode_agen}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                    {{$dataagen->nama_agen}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">Nama Agen</label>
                                   <input type="hidden" name="nama_agen" id="disabledTextInput" class="form-control"
                                    value="{{$dataagen->kode_agen}}" required>
                                <input type="text" name="nama_agen" id="disabledTextInput" class="form-control"
                                    value="{{$dataagen->nama_agen}}" required>
                                @error('nama_agen')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Alamat Lengkap</label>
                                <input type="text" name="alamat"  class="form-control"
                                    value="{{$dataagen->alamat}}" required>
                                @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Telepon</label>
                                <input type="text" name="phone" id="disabledTextInput" class="form-control"
                                    value="{{$dataagen->phone}}" required>
                                @error('phone')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
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
