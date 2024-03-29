<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} &#8211; Hot Coffee</title>
    <link rel="stylesheet" type="text/css" href="acount/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="acount/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="acount/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="acount/css/iofrm-theme19.css">
</head>
<body>
    <div class="form-body without-side">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="acount/images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                     @if (session()->has('updateerorr'))
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                </path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <strong>Warning ! </strong>{{session()->get('updateerorr')}}
                        </div>
                        @endif
                        <h3>Email Verification</h3>
                        <p>Please Enter Your Email</p>
                        <form action="/verifikasi_email/{email}" method="Post">
                            @method('put')
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address"  required>
                             @error('email')
                            <div class="text-danger mt-0">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Masuk</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="acount/js/jquery.min.js"></script>
    <script src="acount/js/popper.min.js"></script>
    <script src="acount/js/bootstrap.min.js"></script>
    <script src="acount/js/main.js"></script>
</body>

</html>
