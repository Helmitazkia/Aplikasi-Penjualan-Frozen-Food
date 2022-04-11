@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')
<div class="main">
    <div class="main-content user">
        <div class="row">
            <!--Header Table-->
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Catagory Product</a></li>
                </ol>
            </div>
            <!-- End Header Table-->
            <!-- Table CONTENT -->
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
                        <h4 class="card-title">Data User's</h4>
                    </div>
                    <br>
                    <button type="button" class="btn btn-success ml-12" style="width:200px;" data-bs-toggle="modal"
                        data-bs-target="#add">Add New User's
                    </button>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <th>ID</th>
                                    <th>Name User's</th>
                                    <th>Email</th>
                                    <th>Status Email</th>
                                    <th>Addres</th>
                                    <th>Password</th>
                                    <th>phone</th>
                                    <th>image</th>
                                    <th>Reaction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $datauser)
                                    <tr>
                                        <td><strong>{{$datauser->id}}</strong></td>
                                        <td>{{$datauser->name}}</td>
                                        <td>{{$datauser->email}}</td>
                                        <td>{{$datauser->email_verified_at}}</td>
                                        <td>{{$datauser->addres}}</td>
                                        <td>{{$datauser->password}}</td>
                                        <td>{{$datauser->phone}}</td>
                                        <td>
                                            <img src="{{asset('storage/'.$datauser->image) }}" style="width:100px;">
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-bs-toggle="modal" data-bs-target="#update{{$datauser->id}}"><i
                                                        class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-danger shadow btn-xs sharp hapususer"
                                                    data-id="{{$datauser->id}}" data-name="{{$datauser->name}}"><i
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
                        <form action="/AddDatauser" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Data User's</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">Name User</label>
                                <input type="text" name="name" id="disabledTextInput" class="form-control"
                                    value="{{old('name')}}" required>
                                @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Email</label>
                                <input type="text" name="email" id="disabledTextInput" class="form-control"
                                    value="{{old('email')}}" required>
                                @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Addres</label>
                                <input type="text" name="addres" id="disabledTextInput" class="form-control"
                                    value="{{old('addres')}}" required>
                                @error('addres')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Password</label>
                                <input type="password" name="password" id="disabledTextInput" class="form-control"
                                    required>
                                @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Phone</label>
                                <input type="number" name="phone" id="disabledTextInput" class="form-control"
                                    value="{{old('phone')}}" required>
                                @error('phone')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                {{-- <!--Menampilkan Gambar yang mau di upload Menggunakan JS
                             <img class="img-priview">--> --}}
                                <label class="form-label">Image</label>
                                <input type="file" name="image" value="{{old('image')}}" class="form-control"
                                    onchange="priviewImage()">

                                @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- End Modal -->

            <!-- Modal Untuk Update-->
            @foreach ($data as $datauser)
            <!-- Modal -->
            <div class="modal fade" id="update{{$datauser->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/updateuser/{{$datauser->id}}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data {{$datauser->name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" class="form-control" value="{{$datauser->id}}" readonly>
                                <label class="form-label">Name User</label>
                                <input type="text" name="name" id="disabledTextInput" class="form-control"
                                    value="{{$datauser->name}}" required>
                                @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Email</label>
                                <input type="text" name="email" id="disabledTextInput" class="form-control"
                                    value="{{$datauser->email}}" required>
                                @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Addres</label>
                                <input type="text" name="addres" id="disabledTextInput" class="form-control"
                                    value="{{$datauser->addres}}" required>
                                @error('addres')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Password</label>
                                <input type="text" name="password" id="disabledTextInput" class="form-control"
                                    value="{{$datauser->password}}" required>
                                @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" id="disabledTextInput" class="form-control"
                                    value="{{$datauser->phone}}" required>
                                @error('phone')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Image</label>
                                <br>
                                <img src="{{asset('storage/'.$datauser->image) }}" style="width:100px;">
                                <br>
                                <br>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                {{-- value jika tidak ada foto yang di upload  --}}
                                <input type="hidden" name="fotolama" class="form-control" value="{{$datauser->image}}">
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
