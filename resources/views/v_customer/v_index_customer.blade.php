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
                        <h4 class="card-title">Data Customer</h4>
                    </div>
                    <br>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <th>ID</th>
                                    <th>Name Customer</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Email</th>
                                    <th>Email Verifikasi</th>
                                    <th>Password</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $datacustomer)
                                    <tr>
                                        <td><strong>{{$datacustomer->id_customer}}</strong></td>
                                        <td>{{$datacustomer->name_customer}}</td>
                                        <td>{{$datacustomer->jenis_kelamin}}</td>
                                        <td>{{$datacustomer->tanggal_lahir}}</td>
                                        <td>{{$datacustomer->email}}</td>
                                        <td>{{$datacustomer->email_verified_at}}</td>
                                        <td>{{$datacustomer->password}}</td>
                                        <td>{{$datacustomer->phone}}</td>
                                        <td>{{$datacustomer->id_alamat_detail}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#update{{$datacustomer->id_customer}}"><i
                                                        class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-danger shadow btn-xs sharp hapuscatagory"
                                                    data-id="{{$datacustomer->id_customer}}"
                                                    data-name="{{$datacustomer->name_customer}}"><i
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

            <!-- Modal Untuk Update-->
            @foreach ($data as $datacustomer)
            <!-- Modal -->
            <div class="modal fade" id="update{{$datacustomer->id_customer}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/UpdateCatagory/{{$datacustomer->id_customer}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                    {{$datacustomer->name_customer}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">Nama Customer</label>
                                <input type="text" name="name_customer" id="disabledTextInput" class="form-control"
                                    value="{{$datacustomer->name_customer}}">
                                @error('name_customer')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Jenis Kelamin</label>
                                <input type="hidden" name="jenis_kelamin" id="disabledTextInput" class="form-control"
                                value="{{$datacustomer->jenis_kelamin}}">
                                <select name="jenis_kelamin"
                                class="form-control custom-select select2 select2-hidden-accessible"
                                data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                data-select2-id="select2-data-22-9i9m">
                                    <option value="1">Pilih^</option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Wanita</option>
                                   
                            </select>
                                <br>
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="disabledTextInput" class="form-control"
                                    value="{{$datacustomer->tanggal_lahir}}">
                                @error('tanggal_lahir')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Password</label>
                                <input type="text" name="password" id="disabledTextInput" class="form-control"
                                    value="{{$datacustomer->password}}">
                                @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Telepon</label>
                                <input type="text" name="phone" id="disabledTextInput" class="form-control"
                                    value="{{$datacustomer->phone}}">
                                @error('phone')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Alamat</label>
                                <input type="text" name="id_alamat_detail" id="disabledTextInput" class="form-control"
                                    value="{{$datacustomer->id_alamat_detail}}">
                                @error('catagoryname')
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
