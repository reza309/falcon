<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SS Home Page</title>
    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/demo.css')}}" rel="stylesheet">
    <link href="{{asset('tools/fontawesome-free-5.12.0-web/css/all.min.css')}}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <section class="ht-outer">
        <header class="container-fluid bg-header p-4 p-lg-3 header">
            <nav class="top-nav pt-3 pb-3 ps-3 pe-4">
                <div class="row">
                    <div class="col-lg-2 col-12 col-md-2">
                        <img src="images/falcon-logo.png" alt="Falcon Soft Ltd." class="img img-fluid logo-header">
                        <!-- <img class="img img-fluid logo-header logo-nav" alt="Falcon Soft Ltd." src="images/falcon-logo.png"> -->
                        <a class="menu-item login-left text-white d-none d-lg-block pt-lg-0" href="#">
                            <i class="fas fa-user-alt"></i>
                            Login
                        </a>
                        <a class="menu-item login-left text-white d-block d-lg-none p-0 float-start" href="#">
                            <img src="images/falcon-logo.png" alt="Falcon Soft Ltd." class="img img-fluid sm-logo">
                        </a>
                        <a href="javascript:void(0);" class="menu-toggler float-end d-block d-md-none d-lg-none">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                    <div class="col-lg-10 col-12 col-md-10">
                        <div class="menu-container pt-3 mb-3 p-lg-0 p-3 p-md-0">
                            <a class="menu-item menue-sm me-3" href="index.html">
                                Home
                            </a>
                            <a class="menu-item menue-sm me-3 mb-3 active" href="#">Demos</a>
                            <a class="menu-item menue-sm me-3 mb-3" href="#">Features</a>
                            <a class="menu-item menue-sm me-3 mb-3" href="#">Priceing</a>
                            <a class="menu-item menue-sm me-3 mb-3" href="#">Faq</a>
                            <a class="menu-item menue-sm me-3 mb-3 login-right" href="login.html">Login</a>
                            <a class="menu-item menue-sm me-3 me-md-0 mb-3 support" href="#">Support</a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </nav>
            <!-- ending nav section -->
        </header>
    </section>
    {{$slot}}
     <!-- start footer section -->
     <footer class="footer-demo mt-lg-3">
        <div class="container-fluid">
            <div class="position-relative" style="z-index: 1;">
                <hr class="p-lg-3">
                <div class="p-lg-0 p-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-block d-lg-none pt-3"></div>
                            <div class="float-start">
                                <img src="images/falcon-logo.png" alt="Falcon icon" class="img img-fluid foot-logo">
                            </div>
                            <span class="text-white-50 d-block mt-lg-3 ps-lg-5">
                                Alright Reserved&copy; Falcon Soft Ltd.
                            </span>
                            <div class="text-white-50 pb-3">
                                Since: December 2021fqaajhjh
                            </div>
                        </div>
                        <!-- ending first col -->
                        <!-- start second col -->
                        <hr class="d-lg-none d-block p-2">
                        <div class="col-lg-4">
                            <h3 class="text-white-50">Products</h3>
                            <hr>
                            <span class="text-white-50">
                                <a href="#" class="text-decoration-none">Web site Theme</a>
                            </span>
                            <br>
                            <span class="text-white-50">
                                <a href="#" class="ps-0 btn btn-link text-decoration-none">Wordpress Theme</a>
                            </span>
                        </div>
                        <!-- ending second col -->
                        <!-- start third col -->
                        <hr class="d-lg-none d-block p-2">
                        <div class="col-lg-4">
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
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jQuery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="tools/fontawesome-free-5.12.0-web/js/all.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/preview.js"></script>
    @livewireScripts
</body>

</html>