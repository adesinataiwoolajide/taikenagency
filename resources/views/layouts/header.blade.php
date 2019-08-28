<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- All CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <title>TaiKen Travels</title>
</head>

<body>

    <!-- header -->
    <header>
        <div class="header-top header-top-h4 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-9">
                        <div class="header-top-cta second-htop-cta">
                            <div class="single-cta-wrap">
                                <i class="flaticon-send"></i>
                                <span>info@taikentravels.com</span>
                            </div>
                            <div class="single-cta-wrap">
                                <i class="flaticon-phone"></i>
                                <span>+234 813 919 988 1,  +234 813 919 988 0</span>
                            </div>
                            <div class="single-cta-wrap">
                                <i class="flaticon-pin"></i>
                                <span>7 Professor Olaniyonu Lane, Igando, Lagos State, Nigeria</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="header-social text-right">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header tranparent-header header-four header-r-p" style="margin-top:">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{route('index')}}"><img src="{{asset('img/logo2.png')}}" alt="Taiken Travels" style="width:100; height:100px"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 text-right">
                        <div class="main-menu home-four-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="{{route('index')}}">Home</a></li>
                                    <li class="active"><a href="{{route('aboutus')}}">About Us</a></li>
                                    <li class="active"><a href="{{route('services')}}">Our Services</a></li>
                                    <li class="active"><a href="{{route('faq')}}">Faq</a></li>
                                    <li class="active"><a href="{{route('blog')}}">Blog</a></li>
                                    <li class="active"><a href="{{route('contact')}}">Team</a></li>
                                    <li class="active"><a href="{{route('contact')}}">Contact Us</a></li>
                                   
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu white-menu"></div>
                    </div>
                    <div class="col-lg-2 text-right d-none d-lg-block">
                        <div class="menu-icon home-four-menu">
                            <a href="#" class="search-modal" data-toggle="modal" data-target="#search-modal"><i class="flaticon-magnifying-glass"></i></a>
                            
                        </div>
                    </div>
                    <!-- Modal Search -->
                    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form>
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <main>