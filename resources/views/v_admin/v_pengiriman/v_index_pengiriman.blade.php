@extends('v_layouts_admin/v_header_admin')
@section('contentadmin')
<div class="main">
    <div class="main-content user">
        <div class="row">
            <!-- End Header Table-->
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
                    <a href="/AddFormPengiriman" class="btn btn-info ml-12" style="width:200px;">Add Pengiriman</a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <th>ID Pengiriman</th>
                                    <th>Pembelian Barang</th>
                                    <th>Nama Customer</th>
                                    <th>Telepon</th>
                                    <th>Tanggal Pengiririman</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Status Pengiriman</th>
                                    <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $datapengiriman)
                                    <tr>
                                        <td><strong>{{$datapengiriman->id_pengiriman}}</strong></td>
                                        <td>{{$datapengiriman->name}}</td>
                                        <td>{{$datapengiriman->name_customer}}</td>
                                        <td>{{$datapengiriman->phone}}</td>
                                        <td>{{$datapengiriman->tanggal_pengiriman}}</td>
                                        <td>{{$datapengiriman->alamat_customer}}</td>
                                        <td>{{$datapengiriman->name_status}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#update{{$datapengiriman->id_pengiriman}}"><i
                                                        class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-danger shadow btn-xs sharp delete-pengiriman"
                                                    data-id="{{$datapengiriman->id_pengiriman}}"
                                                    data-name="{{$datapengiriman->name}}"><i
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

            {{-- Modal Untuk Update --}}
            @foreach ($data as $datapengiriman)
            <!-- Modal -->
            <div class="modal fade" id="update{{$datapengiriman->id_pengiriman}}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/Updatedatapengiriman/{{$datapengiriman->id_pengiriman}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">EDIT DATA 
                                    {{$datapengiriman->name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">Nama Barang</label>
                                <input type="hidden" name="id_product" id="disabledTextInput" class="form-control"
                                    value="{{$datapengiriman->id}}">
                                <select name="id_customer"
                                    class="form-control custom-select select2 select2-hidden-accessible"
                                    data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                    data-select2-id="select2-data-22-9i9m">
                                    <option value="{{$datapengiriman->id}}">
                                        <?php echo $datapengiriman->name; ?>
                                    </option>
                                    @foreach ($ambilproduct as $dataproduct)
                                    <option value="{{$dataproduct->id}}">
                                        <?php echo $dataproduct->name; ?>
                                    </option>
                                    @endforeach
                                </select>
                                <br>
                                <br>
                                <label class="form-label">Nama Customer</label>
                                <input type="hidden" name="id_customer" id="disabledTextInput" class="form-control"
                                    value="{{$datapengiriman->id_customer}}">
                                <select name="id_customer"
                                    class="form-control custom-select select2 select2-hidden-accessible"
                                    data-placeholder="Select Department" tabindex="-1" aria-hidden="true"
                                    data-select2-id="select2-data-22-9i9m">
                                    <option value="{{$datapengiriman->id_customer}}">
                                        <?php echo $datapengiriman->name_customer; ?>
                                    </option>
                                    @foreach ($ambilcustomer as $datacustomer)
                                    <option value="{{$datacustomer->id_customer}}">
                                        <?php echo $datacustomer->name_customer; ?>
                                    </option>
                                    @endforeach
                                </select>
                                <br>
                                <br>
                                <label class="form-label">Alamat Customer</label>
                                <input type="text" name="alamat_customer" id="disabledTextInput" class="form-control"
                                    value="{{$datapengiriman->alamat_customer}}" style="height: 80px;" readonly>
                                @error('alamat_customer')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <br>
                                <label class="form-label">Telepon</label>
                                <input type="text" name="alamat_customer" id="disabledTextInput" class="form-control"
                                    value="{{$datapengiriman->phone}}" style="height: 80px;" readonly>
                                @error('alamat_customer')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <br>
                                <label class="form-label">Tanggal Pengiriman</label>
                                <input type="date" name="tanggal_pengiriman" id="disabledTextInput" class="form-control"
                                    value="{{$datapengiriman->tanggal_pengiriman}}" style="height: 80px;">
                                @error('tanggal_pengiriman')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <label class="form-label">Status Pengiriman</label>
                                <br>
                                <input type="hidden" name="id_status"
                                    value="{{$datapengiriman->id_status}}">
                                @foreach ($ambilstatus as $datastatus)
                                <input type="radio" id="html" name="id_status"
                                    value="{{$datastatus->id_status}}">
                                <label for="html">{{$datastatus->name_status}}</label><br>
                                @endforeach
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
            {{-- End Modal Update --}}


        </div>
    </div>
    @endsection
