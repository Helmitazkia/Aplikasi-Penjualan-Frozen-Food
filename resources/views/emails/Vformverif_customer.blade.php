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
                        <h3>Email Verification</h3>
                        <p>Please Enter Your Email</p>
                        <form action="#" method="Post">
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
