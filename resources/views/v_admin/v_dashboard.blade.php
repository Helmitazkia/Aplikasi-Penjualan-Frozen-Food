@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')
<div class="main">
    <div class="main-content user">
        <div class="row">
            <div class="col-9 col-xl-12">
                <div class="box card-box mb-20">
                    <div class="icon-box bg-color-1">
                        <div class="icon bg-icon-1">
                            <i class='bx bxs-briefcase'></i>
                        </div>
                        <div class="content">
                            <h5 class="title-box fs-15 mt-2">Total Task</h5>
                            <div class="themesflat-counter fs-14 font-wb color-1">
                                <span class="number" data-from="0" data-to="1225" data-speed="2500"
                                    data-inviewport="yes">1225</span>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box bg-color-2">
                        <div class="icon bg-icon-2">
                            <i class='bx bx-task'></i>
                        </div>
                        <div class="content click-c">
                            <h5 class="title-box fs-15 mt-2">Running Task</h5>
                            <div class="themesflat-counter fs-14 font-wb color-2">
                                <span class="number" data-from="0" data-to="309" data-speed="2500"
                                    data-inviewport="yes">154
                                    +</span>
                            </div>
                        </div>

                    </div>
                    <div class="icon-box bg-color-3">
                        <div class="icon bg-icon-3">
                            <i class='bx bx-block'></i>
                        </div>
                        <div class="content click-c">
                            <h5 class="title-box fs-15 mt-2">On Hold Task</h5>
                            <div class="themesflat-counter fs-14 font-wb color-3">
                                <span class="number" data-from="0" data-to="309" data-speed="2500"
                                    data-inviewport="yes">75
                                    +</span>
                            </div>
                        </div>

                    </div>
                    <div class="icon-box bg-color-5">
                        <div class="icon bg-icon-5">
                            <i class='bx bx-task color-white'></i>
                        </div>
                        <div class="content click-c">
                            <h5 class="title-box fs-15 mt-2">Complete Task</h5>
                            <div class="themesflat-counter fs-14 font-wb color-4">
                                <span class="number" data-from="0" data-to="309" data-speed="2500"
                                    data-inviewport="yes">120
                                    +</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <h4 class="card-title">Data Product</h4>
                    </div>
                    <br>
                    {{-- <form action="/Formadd" method="GET">
                        <button type="button" >Add Product</button>
                    </form> --}}
                    <a href="/Formadd" class="btn btn-primary ml-12" style="width:200px;">Add Product</a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <th>ID</th>
                                    <th>Name Product</th>
                                    <th>Price Product</th>
                                    <th>Description Product</th>
                                    <th>Category</th>
                                    <th>Stok</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dataproduct)
                                    <tr>
                                        <td><strong>{{$dataproduct->id}}</strong></td>
                                        <td>
                                            {{$dataproduct->name}}
                                        </td>
                                        <td>{{$dataproduct->price}}</td>
                                        <td>{{$dataproduct->description}}</td>
                                        <td>{{$dataproduct->name_catagory}}</td>
                                        <td>{{$dataproduct->stok}}</td>
                                        <td>{{$dataproduct->name_status}}</td>
                                        <td>
                                            <img src="{{asset('storage/'.$dataproduct->image) }}" style="width:100px;">
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{$dataproduct->id}}"><i
                                                        class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger shadow btn-xs sharp hapus"
                                                    data-id="{{$dataproduct->id}}" data-name="{{$dataproduct->name}}"><i
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
            @foreach ($data as $dataproduct)
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$dataproduct->id}}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/Updateproduct/{{$dataproduct->id}}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit {{$dataproduct->name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!--Price Name--->
                                <input type="hidden" name="id" class="form-control" value="{{$dataproduct->id}}"
                                    readonly>
                                <label class="form-label">Name Product</label>
                                <input type="text" name="name" id="disabledTextInput" class="form-control"
                                    value="{{$dataproduct->name}}" required>
                                @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <!--Price Edit--->
                                <label class="form-label">Price (IDR)</label>
                                <input type="text" name="price" id="disabledTextInput" class="form-control"
                                    value="{{$dataproduct->price}}" required>
                                @error('price')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <!--Catagory Edit--->
                                <label class="form-label">Catagory</label>
                                <br>
                                <input type="hidden" name="catagories" id="html" value="{{$dataproduct->catagories}}">
                                @foreach ($ambilcatagory as $datacatagory)
                                <input type="radio" id="html" name="catagories" value="{{$datacatagory->id}}">
                                  <label for="html">{{$datacatagory->name_catagory}}</label><br>
                                @endforeach
                                <br>
                                <!--Stok Edit--->
                                <label class="form-label">Stok Barang</label>
                                <input type="text" name="stok" id="disabledTextInput" class="form-control"
                                    value="{{$dataproduct->stok}}" required>
                                @error('stok')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <!--Description Edit--->
                                <label class="form-label">Description Product:</label>
                                <input type="text" name="desc" id="disabledTextInput" class="form-control"
                                    value="{{$dataproduct->description}}" style="height:80px;" required>
                                @error('desc')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <!--image Edit--->
                                <img src="{{asset('storage/'.$dataproduct->image) }}" style="width:120px;">
                                <br>
                                <br>
                                <label class="form-label">Image</label>
                                <input type="file" name="image" id="disabledTextInput" class="form-control">
                                @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <input type="hidden" name="fotolama" class="form-control"
                                    value="{{$dataproduct->image}}">
                                <!--status Edit--->
                                <br>
                                <label class="form-label">Status Product :</label>
                                <br>
                                <input type="hidden" name="status" id="html" value="{{$dataproduct->status}}">
                                @foreach ($ambilstatus as $datastatus)
                                <input type="radio" id="html" name="status" value="{{$datastatus->id_status}}">
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
