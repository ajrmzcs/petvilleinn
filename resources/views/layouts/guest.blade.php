<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PetVilleInn') }}</title>
        <!--[if lt IE 9]>
        <script src="{{ asset('js/respond.js') }}"></script>
        <![endif]-->
        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Icon fonts -->
        <link href="{{ asset('fonts/fontawesome/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('fonts/flaticons/flaticon.css') }}" rel="stylesheet" type="text/css">
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,800%7CBaloo+Thambi" rel="stylesheet">
        <!-- Style CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
        <!-- LayerSlider CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/layerslider/css/layerslider.css') }}">
        <!-- Color Style CSS -->
        <link href="{{ asset('styles/maincolors.css') }}" rel="stylesheet">
        <!-- Sweetalert 2 CSS -->
        <link href="{{ asset('styles/sweetalert2.min.css') }}" rel="stylesheet">
        <!-- Favicons-->
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body id="page-top">
        <div style="position:fixed;top:0px;left:0px;width:0;height:0;" id="scrollzipPoint"></div>
        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
            </div>
        </div>
        <!-- Preloader ends -->
        <a href="" class="close-navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        </a>
        <nav class="navbar navbar-expand-xl navbar-custom fixed-top p-0">
            <div class="container">
                <div class="navbar-brand navbar-brand-centered page-scroll">
                    <a href="{{ route('index') }}">
                        <!-- logo  -->
                        <img src="{{ asset('img/petville-inn-logo.png') }}" class="img-responsive layout-top-logo" alt="">
                    </a>
                </div>
                <!-- Hamburger menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- /Hamburger menu -->
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li class="dropdown-item"> <a href="{{ route('dog-boarding') }}">Dog boarding</a></li>
                                <li class="dropdown-item"><a href="{{ route('cat-boarding') }}">Cat boarding</a></li>
                                <li class="dropdown-item"><a href="{{ route('grooming') }}">Grooming</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 navbar-right">
                        <li class="nav-item m-1">
                            <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-4">
                        <a class="nav-link" href="https://api.whatsapp.com/send?phone=17863180694&text=Hi, I would like to know more about...">
                            <img src="{{ asset('img/whatsapp-logo.png') }}" class="img-fluid whatsapp-logo btn-bounce" alt="">
                        </a>
                        <a class="nav-link" href="mailto:info@petville-inn.com"><i class="fa fa-envelope fa-2x btn-bounce" style="color:white"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- /navbar ends -->

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer>
            <!-- Contact info -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <!-- Footer logo -->
                        <img src="{{ asset('img/petville-inn-logo.png') }}" alt="" class="center-block img-responsive layout-bottom-logo">
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4 text-center res-margin">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-phone"></i>(786) 318-0694</li>
                            <li><i class="fa fa-envelope"></i>Email: <a href="mailto:info@petville-inn.com">info@petville-inn.com</a></li>
                            <li><i class="fa fa-map-marker"></i>17235 Sw 224st. Miami. FL. 33170</li>
                        </ul>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4 text-center res-margin">
                        <h5>Follow us</h5>
                        <!--Social icons -->
                        <div class="social-media">
                            <a href="#" title=""><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/pet.ville_redlands/?img_index=1" title="Petville Inn"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /.container -->
            <!-- Credits-->
            <div class="credits col-lg-12 text-center">
                Copyright © 2024 - Petville Inn
                <!-- Go To Top Link -->
                <div class="hidden-sm d-none d-lg-block">
                    <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
            <!-- /credits -->
        </footer>
        <!-- /footer ends -->
        <!-- Core JavaScript Files -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('js/main.js') }}"></script>
        <!--Other Plugins -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <!-- Prefix free CSS -->
        <script src="{{ asset('js/prefixfree.js') }}"></script>
        <!-- SweetAlert 2 -->
        <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    </body>
</html>
