<!-- Table And alert Berhasil di tambah-->
<link href="Tables/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="Tables/css/style.css" rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
    <div class="card text-white bg-dark">
        <div class="card-header">
            @if (session()->has('updatesuccess'))
            <h5 class="card-title text-white">Success ! {{session()->get('updatesuccess')}}</h5>
            @endif
            @if (session()->has('updateerorr'))
            <h5 class="card-title text-white">Warning ! {{session()->get('updateerorr')}}</h5>
            @endif
            <a href="/LoginAdmin" class="btn btn-light btn-card text-dark">Go
                To Login </a>
        </div>
    </div>
    

<script src="Tables/vendor/global/global.min.js"></script>
    <script src="Tables/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="Tables/js/custom.min.js"></script>
    <script src="Tables/js/deznav-init.js"></script>