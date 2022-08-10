<!DOCTYPE html>
<html lang="en">

<head>
    <meta charPset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{$title}}
    </title>
    <link rel="shortcut icon" href="foto/favicon.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Plugin -->
    <link rel="stylesheet" href="jlibs/owl.carousel/assets/owl.carousel.min.css">

    <!-- APP CSS -->
    <link rel="stylesheet" href="/jcss/bootstrap.min.css">
    <link rel="stylesheet" href="jcss/grid.css">
    <link rel="stylesheet" href="jcss/style.css">
    <link rel="stylesheet" href="jcss/responsive.css">
    <link rel="stylesheet" href=" jcss/bootstrap.min.css.map ">


    <!-- Table And alert Berhasil di tambah-->
    <link href="Tables/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="Tables/css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Link Cdn untuk toaster-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="sidebar-expand">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="index.html">
                <img src="foto/logo.png" alt="Protend logo">
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <!-- SIDEBAR MENU -->
        <div class="simlebar-sc" data-simplebar>
            <ul class="sidebar-menu tf">
                <li class="sidebar-submenu">
                    <a href="/Dashboardshow" class="sidebar-menu-dropdown">
                        <i class='bx bxs-home'></i>
                        <span>Dashboard</span>
                        <div class="dropdown-icon">
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="Dashboardshow">
                                Dashboard
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-submenu">
                    <a href="/Dashboardshow" class="sidebar-menu-dropdown">
                        <i class='bx bxs-dashboard'></i>
                        <span>Katalog</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="/Produk">
                                Product
                            </a>
                        </li>
                        <li>
                            <a href="/Catagory">
                                Catagory Product
                            </a>
                        </li>
                        <li>
                            <a href="/ShowStatus">
                                Data Status
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-submenu">
                    <a href="chart-apex.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-component'></i>
                        <span>Pengeluaran</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="/Transaksi">
                                Transaksi
                            </a>
                            <a href="/TypeTransaksi">
                                Type Transaksi
                            </a>
                            <a href="/Laporan">
                                Data Laporan
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-submenu">
                    <a href="/Clientshow" class="sidebar-menu-dropdown">
                        <i class='bx bxs-bolt'></i>
                        <span>Pelanggan & Supplier</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="/Datacustomer">
                                Data Customer
                            </a>
                        </li>
                        <li>
                            <a href="/DataBarangMasuk">
                                Barang Masuk
                            </a>
                        </li>
                        <li>
                            <a href="/Agenshow">
                                Agen
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/Pendapatan">
                        <i class='bx bx-calendar'></i>
                        <span>Pendapatan</span>
                    </a>
                </li>
                <li>
                    <a href="/Datauser">
                        <i class='bx bxs-user'></i>
                        <span>Data User's</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- Main Header -->
    <div class="main-header">
        <div class="d-flex">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu'></i>
            </div>
            <div class="main-title">
                {{$webname}}
            </div>
        </div>

        <div class="d-flex align-items-center">

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-search-alt'></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary h-100" type="submit"><i
                                            class='bx bx-search-alt'></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <li class="sidebar-submenu">
                <a href="/Clientshow" class="sidebar-menu-dropdown">
                    <span class="d-block fs-20 font-w600">{{Auth::User()->name}}</span>
                    <span class="d-block mt-7">{{Auth::User()->email}}</span>
                    <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                </a>
                <br>
                <br>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <!---Content Profile dan logout-->
                    <li>
                        <form action="/Logout" method="post">
                            @csrf
                            <button id="submit" type="submit" class="btn btn-primary">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        </div>
    </div>
    <!-- End Main Header -->




    @yield('contentadmin')



    <!-- Start Foooter -->


    <!-- end Foooter -->



    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->


    <!-- APP JS -->
    <script src="jjs/main.js"></script>
    <script src="jjs/dashboard.js"></script>
    <script src="jjs/shortcode.js"></script>
    <script src="jjs/pages/dashboard.js"></script>




    <script src="Tables/vendor/global/global.min.js"></script>
    <script src="Tables/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="Tables/js/custom.min.js"></script>
    <script src="Tables/js/deznav-init.js"></script>

    <!--Link BOOTSRAP untuk modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <!-- Link CDN untuk sweetalert untuk hapus-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Link jquery minified untuk sweetalert dan Toaster-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Link CDN untuk Toaster untuk popup update -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script>
        //.hapus tombol delete yang ada di view dashboar admin
        $('.hapus').click(function () {
            var Product_id = $(this).attr("data-id");
            var Product_name = $(this).attr("data-name");
            swal({
                    title: "Apa kamu yakin?",
                    text: "Akan Menghapus Data Product dengan Nama " + Product_name + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "deleteproduct/" + Product_id + " ";
                        swal("Data Successfully Delete!", {
                            icon: "success",
                        });
                    } else {
                        swal("Oops", "Data is not deleted ! ", "error");
                    }
                });
        });

    </script>

    <script>
        //.hapus tombol delete yang ada di view dashboar admin
        $('.hapususer').click(function () {
            var id_user = $(this).attr("data-id");
            var user_name = $(this).attr("data-name");
            swal({
                    title: "Apa kamu yakin?",
                    text: "Akan Menghapus Data User dengan Nama " + user_name + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "deleteuser/" + id_user + " ";
                        swal("Data Successfully Delete!", {
                            icon: "success",
                        });
                    } else {
                        swal("Oops", "Data is not deleted ! ", "error");
                    }
                });
        });

    </script>


    <script>
        //.hapus tombol delete yang ada di view dashboar admin
        $('.hapuscatagory').click(function () {
            var catagory_id = $(this).attr("data-id");
            var catagory_name = $(this).attr("data-name");
            swal({
                    title: "Apa kamu yakin?",
                    text: "Akan Menghapus Data Category dengan Nama " + catagory_name + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "deletecatagory/" + catagory_id + " ";
                        swal("Data Successfully Delete!", {
                            icon: "success",
                        });
                    } else {
                        swal("Oops", "Data is not deleted ! ", "error");
                    }
                });
        });

    </script>

    <script>
        //.hapus tombol delete yang ada di view dashboar admin
        $('.delete-status').click(function () {
            var status_id = $(this).attr("data-id");
            var status_name = $(this).attr("data-name");
            swal({
                    title: "Apa kamu yakin?",
                    text: "Akan Menghapus Data status dengan Nama " + status_name + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "deletestatus/" + status_id + " ";
                        swal("Data Successfully Delete!", {
                            icon: "success",
                        });
                    } else {
                        swal("Oops", "Data is not deleted ! ", "error");
                    }
                });
        });

    </script>

    <script>
        //.hapus tombol delete yang ada di view dashboar admin
        $('.delete-customer').click(function () {
            var id_customer = $(this).attr("data-id");
            var name_customer = $(this).attr("data-name");
            swal({
                    title: "Apa kamu yakin?",
                    text: "Akan Menghapus Data Customer dengan Nama " + name_customer + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "deletecustomer/" + id_customer + " ";
                        swal("Data Berhasil di hapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Oops", "Data is not deleted ! ", "error");
                    }
                });
        });

    </script>

    <script>
        //.hapus tombol delete yang ada di view dashboar admin
        $('.delete-agen').click(function () {
            var kode_agen = $(this).attr("data-id");
            var nama_agen = $(this).attr("data-name");
            swal({
                    title: "Apa kamu yakin?",
                    text: "Akan Menghapus Data Agen dengan Nama " + nama_agen + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "deleteagen/" + kode_agen + " ";
                        swal("Data Berhasil di hapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Oops", "Data is not deleted ! ", "error");
                    }
                });
        });

    </script>


    <script>
        //.hapus tombol delete yang ada di view dashboar admin
        $('.Hapus-barang').click(function () {
            var id_barang = $(this).attr("data-id");
            var nama_barang = $(this).attr("data-name");
            swal({
                    title: "Apa kamu yakin?",
                    text: "Akan Menghapus Data Barang dengan Nama " + nama_barang + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "deleteBarang/" + id_barang + " ";
                        swal("Data Berhasil di hapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Oops", "Data is not deleted ! ", "error");
                    }
                });
        });

    </script>








    <script>
        @if(Session::has('updatesuccess'))
        toastr.success("{{Session::get('updatesuccess')}}");
        @endif

    </script>





</body>

</html>
