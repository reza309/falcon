<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falcon Soft Ltd.</title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('tools/fontawesome-free-5.12.0-web/css/all.css')}}">
    
    <!-- Scripts -->
    <script src="{{ asset('app.js') }}" defer></script>
    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- <script src="tools/fontawesome-free-5.12.0-web/js/all.min.js"></script> -->
    <script src="{{asset('js/nav.js')}}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark theme-color" style="border-bottom: 4px solid #4C0DB5; padding-bottom: 0;">
        <div class="container-fluid">
            <a href="javascript:void(0)" class="navbar-brand">
                <img src="{{asset('images/falcon-logo.png')}}" alt="Falcon Soft" style="width:57px" srcset="" class="rounded-pill">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item btn-custom">
                        <a href="/" class="nav-link custom-active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="demo.html" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('login')}}" class="nav-link">Login</a>
                    </li>
                </ul>
                <form action="#" method="post" class="d-flex mb-lg-0 mb-3">
                    <input type="text" name="search" class="form-control search-filed">
                    <button type="button" class="btn btn-primary search-btn btn-custom">Search</button>
                </form>
            </div>
        </div>
    </nav>
    
    <!-- carousel logo end -->
    <!-- custom carousel start -->
    <div class="custom-slide">
        <div class="c-c-item" style="background-image: url({{asset('images/galaxi-tech.jpg')}});"></div>
        <div class="c-c-item" style="background-image: url({{asset('images/galaxi-tech.jpg')}});"></div>
        <div class="c-c-item" style="background-image: url({{asset('images/galaxi-tech.jpg')}});"></div>
        <div class="c-c-item" style="background-image: url({{asset('images/galaxi-tech.jpg')}});"></div>
        <div class="c-c-item" style="background-image: url({{asset('images/galaxi-tech.jpg')}});"></div>
    </div>
    <!-- custom carousel end -->
    <!-- login section -->
    <div class="container-fluid">
       <div class="row">
           <div class="col-lg-3"></div>
           <div class="col-lg-6">
           {{ $slot }}
           </div>
           <div class="col-lg-3"></div>
       </div>
    </div>
    <!-- end login section -->
    <!-- start footer section -->
    <footer class="footer container-fluid">
        <div class="p-lg-3 position-relative" style="z-index: 1;">
            <hr class="p-lg-3">
            <div class="p-lg-3" style="background-color: #000000b3;">
                <div class="row">
                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <div class="float-start">
                            <img src="{{asset('images/falcon-logo.png')}}" alt="Falcon icon" class="img img-fluid foot-logo">
                        </div>
                        <span class="text-white-50 d-block mt-lg-3 ps-lg-5 copy-txt-m">
                            Alright Reserved&copy; Falcon Soft Ltd.
                        </span>
                        <div class="text-white-50">
                            Since: December 2021
                        </div>
                    </div>
                    <!-- ending first col -->
                    <!-- start second col -->
                    <hr class="p-2 p-lg-0 d-lg-none">
                    <div class="col-lg-4 mb-lg-0 mb-3 col-md-6">
                        <h3 class="text-white-50">Products</h3>
                        <hr>
                        <span class="text-white-50">
                            <a href="#" class="text-decoration-none">Web site Theme</a>
                        </span>
                        <br>
                        <span class="text-white-50">
                            <a href="#" class="btn btn-link text-decoration-none ps-0 pe-lg-2">Wordpress Theme</a>
                        </span>
                    </div>
                    <!-- ending second col -->
                    <!-- start third col -->
                    <hr class="p-2 p-lg-0 d-lg-none d-md-none">
                    <div class="col-lg-4 mb-3 mb-lg-0 col-md-6">
                        <h3 class="text-white-50">
                            Contact us
                        </h3>
                        <hr>
                        <span class="d-block text-white-50">
                            Mail: falcon.soft@gmail.com
                        </span>
                        <span class="d-block text-white-50">
                            phone: 0176XXXXXXX
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>