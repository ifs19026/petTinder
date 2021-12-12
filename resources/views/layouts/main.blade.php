<!doctype html>
<html class="no-js" lang="en">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PetTinder</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


		<!-- style here -->
        <link rel="stylesheet" href="{{ asset('style/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('style/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/owl.carousel.min.style') }}">
        <link rel="stylesheet" href="{{ asset('style/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('style/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('style/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('style/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('style/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('style/default.css') }}">
        <link rel="stylesheet" href="{{ asset('style/style.css') }}">
        <link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

        <!-- Preloader -->
        <div id="preloader">
            <img src="{{ asset('img/preloader.gif') }}" alt="">
        </div>
        <!-- Preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo"><a href="/home"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a></div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/dogList">Dog List</a></li>
                                            <li><a href="/adoption">Adoption</a></li>
                                            <li><a href="/contacs">contacts</a></li>
                                            <li><a href="/about">About Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li>
                                            {{-- <li class="header-btn">
                                                <a href="/login" class="btn">Login
                                                    <img src="img/icon/w_pawprint.png" alt="">
                                                </a>
                                            </li>
                                            <li class="header-btn"><a href="/register" class="btn">Sign Up<img src="img/icon/w_pawprint.png" alt=""></a></li> --}}

                                                    <!-- Authentication Links -->
                                                    @guest
                                                        @if (Route::has('login'))
                                                            <li class="header-btn">
                                                                <a class="btn" href="{{ route('login') }}">{{ __('Login') }} <img src="{{ asset('img/icon/w_pawprint.png') }}" alt=""></a>
                                                            </li>
                                                        @endif
                            
                                                        @if (Route::has('register'))
                                                            <li class="header-btn">
                                                                <a class="btn" href="{{ route('register') }}">{{ __('Register') }} <img src="{{ asset('img/icon/w_pawprint.png') }}" alt=""></a>
                                                            </li>
                                                        @endif
                                                    @else
                                                        <li class="header-btn">
                                                            <a id="dropdownMenuButton" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                                {{-- <img src="img/icon/w_pawprint.png" alt=""> --}}
                                                                {{ Auth::user()->name }}
                                                            </a>
                                                        </li>

                                                            <li class="header-btn" aria-labelledby="navbarDropdown">
                                                                <a class="btn" href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                    <img src="{{ asset('img/icon/w_pawprint.png') }}" alt="">
                                                                </a>
                            
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            </li>
                                                    @endguest
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo"><a href="/home"><img src="{{ asset('img/logo/logo.png') }}" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
                <div class="header-shape" data-background="{{ asset('img/bg/header_shape.png') }}"></div>
            </div>
            <!-- header-search -->
            <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="search-close">
                    <span><i class="fas fa-times"></i></span>
                </div>
                <div class="search-wrap text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="title">... Search Here ...</h2>
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Type keywords here">
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-end -->
        </header>
        <!-- header-area-end -->
 @yield('content')

   <!-- footer-start -->
   <footer>
    <div class="footer-top-area footer-bg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-3">
                    <div class="footer-widget">
                        <div class="f-logo">
                            <a href="/home"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                        </div>
                        <div class="footer-text">
                            <p>Find your forerver best friend.</p>
                        </div>
                        <div class="footer-contact">
                            <div class="icon"><i class="fas fa-headphones"></i></div>
                            <div class="content">
                                <h4 class="title"><a href="tel:0987654321">(+62)822 1234 4567</a></h4>
                                <span>Call Now</span>
                            </div>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="footer-widget">
                        <h4 class="fw-title">Our Policies</h4>
                        <div class="fw-link">
                            <ul>
                                <li><a href="contact.html">Privacy Policy</a></li>
                                <li><a href="contact.html">Terms and Conditions</a></li>
                                {{-- <li><a href="contact.html">Editorial Policy</a></li>
                                <li><a href="contact.html">Return Policy</a></li>
                                <li><a href="contact.html">IP Policy</a></li>
                                <li><a href="contact.html">Grievance Redressal Policy</a></li>
                                <li><a href="contact.html">Our Conditions</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="footer-widget">
                        <h4 class="fw-title">Our Services</h4>
                        <div class="fw-link">
                            <ul>
                                <li><a href="breeder.html">Our volunteer</a></li>
                                <li><a href="adoption.html">Our Adoption</a></li>
                                {{-- <li><a href="contact.html">Editorial Policy</a></li>
                                <li><a href="contact.html">Return Policy</a></li>
                                <li><a href="contact.html">Grievance Policy</a></li>
                                <li><a href="contact.html">Redressal Policy</a></li> --}}
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="footer-widget">
                        <h4 class="fw-title">Instagram</h4>
                        <div class="fw-insta">
                            <ul>
                                <li><a href="#"><img src="{{ asset('img/images/insta_img01.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('img/images/insta_img02.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('img/images/insta_img03.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('img/images/insta_img04.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('img/images/insta_img05.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('img/images/insta_img06.png') }}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-shape"><img src="{{ asset('img/images/footer_shape01.png') }}" alt=""></div>
        <div class="footer-shape shape-two"><img src="{{ asset('img/images/footer_shape02.png') }}" alt=""></div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2021 PetTinder. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <div class="footer-lang">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{  asset('img/icon/united-states.png')  }}" alt=""> English
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="/home"><img src="{{ asset('img/icon/russia.png') }}" alt="">Bahasa</a>
                                <a class="dropdown-item" href="/home"><img src="{{ asset('img/icon/thailand.png') }}" alt="">Melayu</a>
                                <a class="dropdown-item" href="/home"><img src="{{ asset('img/icon/india.png') }}" alt="">India</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-end -->





<!-- JS here -->
<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.odometer.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>


</html>
