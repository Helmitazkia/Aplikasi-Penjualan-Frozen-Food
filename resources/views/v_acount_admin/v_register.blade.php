<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register &#8211; Hot Coffee</title>
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
                        <h3>Register New Account</h3>
                        <p>Access To Data</p>
                        <form action="RegistrationpostAdmin" method="post">
                            @csrf
                            <input class="form-control" type="text" name="username" placeholder="Full Name" required
                                value="{{old('username')}}">
                            @error('username')
                            <div class="text-danger mt-0">
                                {{$message}}
                            </div>
                            @enderror
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address"
                                value="{{old('alamat')}}" required value="{{old('email')}}">
                            @error('email')
                            <div class="text-danger mt-0">
                                {{$message}}
                            </div>
                            @enderror
                            <div>
                                <input class="form-control" type="text" name="alamat" placeholder="Alamat" 
                                    style="height:100px;" required value="{{old('email')}}">
                                @error('alamat')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <input class="form-control" type="number" name="telepon" placeholder="Telepon"
                                value="{{old('alamat')}}" required value="{{old('telepon')}}">
                            @error('email')
                            <div class="text-danger mt-0">
                                {{$message}}
                            </div>
                            @enderror
                            <input class="form-control" type="password" name="password" placeholder="Password"  required>
                            @error('password') 
                            <div class="text-danger mt-0">
                                {{$message}}
                            </div>
                            @enderror
                            <input class="form-control" type="hidden" name="foto" placeholder="Password"
                             value="Profil-image/vx24mOfOpF3EPWvLjdwbhIDlgdu0vO622In6UYac.png" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <div class="text">Or register with</div>
                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i
                                    class="fab fa-google"></i>Google</a><a href="#"><i
                                    class="fab fa-linkedin-in"></i>Linkedin</a>
                        </div>
                        <div class="page-links">
                            <a href="/LoginAdmin">Login to account</a>
                        </div>
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
