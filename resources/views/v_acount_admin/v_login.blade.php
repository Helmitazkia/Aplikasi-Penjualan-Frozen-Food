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
                        @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                            </svg>
                            <strong>Success ! </strong>{{session()->get('message')}}
                        </div>
                        @endif
                        <!--Pesan Error-->
                        @if (session()->has('logerror'))
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                </path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <strong>Warning ! </strong>{{session()->get('logerror')}}
                        </div>
                        @endif
                        <!--End Error-->
                          @if (session()->has('Logout'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                            </svg>
                            <strong>Success ! </strong>{{session()->get('Logout')}}
                        </div>
                        @endif
                        <h3>Login to account</h3>
                        <p>Access Users Hot Coffe</p>
                        <form action="LoginAdmin" method="post">
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" value="{{old('email')}}" required>
                             @error('email')
                            <div class="text-danger mt-0">
                                {{$message}}
                            </div>
                            @enderror
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            @error('password')
                            <div class="text-danger mt-0">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="/Forget">Forget
                                    password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <div class="text">Or login with</div>
                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i
                                    class="fab fa-google"></i>Google</a><a href="#"><i
                                    class="fab fa-linkedin-in"></i>Linkedin</a>
                        </div>
                        <div class="page-links">
                            <a href="/RegistrationAdmin">Register new account</a>
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
