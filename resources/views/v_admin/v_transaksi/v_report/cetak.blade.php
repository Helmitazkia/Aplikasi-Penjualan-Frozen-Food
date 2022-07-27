<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Laporan</title>
</head>

<body>


    <div class="table-responsive">
        <h1 style=" text-align:center;">Data Laporan</h1>
        <br>
        <table class="table table-responsive-md" style=" text-align:center;">
            <tr>
                <th>No Transaksi</th>
                <th>Tanggal</th>
                <th>Customer</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Petugas</th>
                <th>Type Transaksi</th>
                <th>Total</th>
            </tr>
            @foreach ($Transaksi as $datatransaksi)
            <tr>
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
        </table>
    </div>

    <script>
        window.print();

    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
