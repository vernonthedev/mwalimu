<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatiblie" content="ie=edge">
    <title>@yield('title', 'Mwalimu Junior School | Home')</title>
    <meta name="author" content="vernonthedev">
    <meta name="description" content="@yield('description', 'Welcome to Mwalimu Junior School Located in Mityana Uganda')">
    <meta name="keywords" content="">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place mwalimu.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('assets/img/mwalimu.png')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/img/mwalimu.png')}}" type="image/x-icon">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link
        href="{{ asset('fonts.googleapis.com/css24102.css?family=Fredoka:wght@400;500;600;700&amp;family=Jost:wght@400;500&amp;display=swap')}}"
        rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{ asset('assets/css/layerslider.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>





    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div><!--==============================
    Mobile Menu
    ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('home.index') }}"><img src="{{ asset('assets/img/mwalimu.png')}}" alt="Mwalimu Junior School" width="20%"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li class="menu-item">
                        <a href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about')}}">About Us</a>
                    </li>
                    <li class="menu-item">
                                        <a href="{{ route('events')}}">Events</a>
                                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blogs</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('blog')}}">School Writers</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children mega-menu-wrap">
                        <a href="#">More Info</a>
                        <ul class="mega-menu">
                            <li><a href="#">About Mwalimu</a>
                                <ul>
                                    <li><a href="{{ route('about') }}">Our Teachers</a></li>
                                    <li><a href="{{ route('board')}}">Board Of Directors</a></li>
                                    <li><a href="#">Our Founder</a></li>
                                </ul>
                            </li>
                            <li><a href="#">School Facilities</a>
                                <ul>
                                    <li><a href="#">Nursery Section</a></li>
                                    <li><a href="#">School Kitchen</a></li>
                                    <li><a href="#">Computer Lab</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="#">Our Establishments</a>
                                <ul>
                                <li><a href="{{ route('investment')}}">Nvuyekure Investments</a></li>
                                    <li><a href="#">School Writers Club</a></li>
                                    <li><a href="#">Mwalimu Investments</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('about')}}">Core Values</a>
                                <ul>
                                    <li><a href="{{ route('about')}}#vision">Vision & Mission</a></li>
                                    <li><a href="{{ route('about')}}#religion">Religious Foundation</a></li>
                                    <li><a href="{{ route('about')}}#apply">Apply To Mwalimu</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Sidemenu
    ============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block  ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="widget-about">
                    <div class="footer-logo"><img src="{{ asset('assets/img/mwalimu.png')}}" alt="Kiddino"></div>
                    <p class="mb-0">We are constantly expanding the range of services offered, taking care of children
                        of all ages.</p>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Get In Touch</h3>
                <div>
                    <p class="footer-text">Monday to Friday: <span class="time">8.30am – 06.00pm</span></p>
                    <p class="footer-text">Saturday, Sunday: <span class="time">Close</span></p>
                    <p class="footer-info"><i class="fal fa-envelope"></i>Email: <a
                            href="mailto:info@mwalimujuniorschools.com">info@mwalimujuniorschools.com</a></p>
                    <p class="footer-info"><i class="fas fa-mobile-alt"></i>Phone: <a href="tel:+256764307307">+256 764 307 307</a></p>
                </div>
            </div>

        </div>
    </div>
    <!--==============================
    Popup Search Box
    ============================== -->
    <div class="popup-search-box d-none d-lg-block  ">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links style-white">
                            <ul>
                                <li><a href="{{ route('home')}}"><i class="far fa-user-circle"></i>Login & Register</a>
                                </li>
                                <li><a href="#" class="searchBoxTggler"><i class="far fa-search"></i>Search
                                        Keyword</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-auto text-center">
                        <div class="header-links style2 style-white">
                            <ul>
                                <li><i class="fas fa-envelope"></i>Email: <a
                                        href="mailto:info@mwalimujuniorschool.com">info@mwalimujuniorschool.com</a></li>
                                <li><i class="fas fa-mobile-alt"></i>Phone: <a href="tel:+256764307307">+256 764 307 307</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrap">
            <div class="sticky-active">
                <div class="container">
                    <div class="row gx-3 align-items-center justify-content-between">
                        <div class="col-8 col-sm-auto">
                            <div class="header-logo">
                                <a href="{{ route('home.index') }}">
                                    <img src="{{ asset('assets/img/mwalimu.png')}}" alt="Mwalimu Junior School" width="50%">
                                </a>
                            </div>
                        </div>
                        <div class="col text-end text-lg-center">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li class="menu-item">
                                        <a href="{{ route('home.index') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about')}}">About Us</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('events')}}">Events</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blogs</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('blog')}}">School Writers</a></li>
                                          
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children mega-menu-wrap">
                                        <a href="#">More Info</a>
                                        <ul class="mega-menu">
                                            <li><a href="#">About Mwalimu</a>
                                                <ul>
                                                    <li><a href="{{ route('about') }}">Our Teachers</a></li>
                                                    <li><a href="{{ route('board')}}">Board Of Directors</a></li>
                                                    <li><a href="#">Our Founder</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">School Facilities</a>
                                                <ul>
                                                    <li><a href="#">Nursery Section</a></li>
                                                    <li><a href="#">School Kitchen</a></li>
                                                    <li><a href="#">Computer Lab</a></li>
                                                 
                                                </ul>
                                            </li>
                                            <li><a href="#">Our Establishments</a>
                                                <ul>
                                                <li><a href="{{ route('investment')}}">Nvuyekure Investments</a></li>
                                                    <li><a href="#">School Writers Club</a></li>
                                                    <li><a href="#">Mwalimu Investments</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('about')}}">Core Values</a>
                                                <ul>
                                                    <li><a href="{{ route('about')}}#vision">Vision & Mission</a></li>
                                                    <li><a href="{{ route('about')}}#religion">Religious Foundation</a></li>
                                                    <li><a href="{{ route('about')}}#apply">Apply To Mwalimu</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto  d-none d-lg-block">
                            <div class="header-icons">
                                <button class="simple-icon sideMenuToggler"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <a href="#" class="vs-btn sideMenuToggler">Apply Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    
    @yield('content')

    <!--==============================
			Footer Area
	==============================-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/bg/footer-bg-1-1.png')}}">
        <div class="footer-top">
            <div class="container">
                <div class="row gx-60 gy-4 text-center text-lg-start justify-content-between align-items-center">
                    <div class="col-lg"><a href="{{ route('home.index') }}"><img src="{{ asset('assets/img/mwalimu-white.png')}}" alt="Mwalimu Junior School Logo" width="50%"></a></div>
                    <div class="col-lg-auto">
                        <h3 class="h4 mb-0 text-white"><img src="{{ asset('assets/img/icon/check-list.svg')}}" alt="icon"
                                class="me-2"> Enroll your child in a class now!</h3>
                    </div>
                    <div class="col-lg-auto"><a href="#" class="vs-btn">Start Registration</a></div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-center gx-60">
                    <div class="col-lg-4">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <h3 class="mt-n2">Giving your child the best start in life</h3>
                                <p class="map-link"><img src="{{ asset('assets/img/icon/map.svg')}}" alt="svg">Mityana- Kunywa 4km off Mityana road. Next to the district head quarters</p>
                                <div class="sidebar-gallery">
                                    <div class="gallery-thumb">
                                        <img src="{{ asset('assets/images/mwalimuImage-no.8.jpg')}}" alt="Gallery Image" class="w-100">
                                        <a href="{{ asset('assets/images/mwalimuImage-no.8.jpg')}}" class="popup-image gal-btn"><i
                                                class="fal fa-plus"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="{{ asset('assets/images/mwalimuImage-no.7.jpg')}}" alt="Gallery Image" class="w-100">
                                        <a href="{{ asset('assets/images/mwalimuImage-no.7.jpg')}}" class="popup-image gal-btn"><i
                                                class="fal fa-plus"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="{{ asset('assets/images/mwalimuImage-no.10.jpg')}}" alt="Gallery Image" class="w-100">
                                        <a href="{{ asset('assets/images/mwalimuImage-no.10.jpg')}}" class="popup-image gal-btn"><i
                                                class="fal fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Get In Touch</h3>
                            <div>
                                <p class="footer-text">Monday to Friday: <span class="time">8.30am – 02.00pm</span></p>
                                <p class="footer-text">Saturday, Sunday: <span class="time">Close</span></p>
                                <p class="footer-info"><i class="fal fa-envelope"></i>Email: <a
                                        href="mailto:info@mwalimujuniorschools.com">info@mwalimujuniorschools.com</a></p>
                                <p class="footer-info"><i class="fas fa-mobile-alt"></i>Phone: <a
                                        href="tel:+2567643073070">+256 764 307 3078</a></p>
                                        <p class="footer-info"><i class="fas fa-mobile-alt"></i>Phone: <a
                                        href="tel:+256743001558">+256 743 001 558</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Services</h3>
                            <div class="menu-all-pages-container footer-menu">
                                <ul class="menu">
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">HealthCare</a></li>
                                    <li><a href="#">Advocate</a></li>
                                    <li><a href="#">Membership Options</a></li>
                                    <li><a href="#">Become Partner</a></li>
                                    <li><a href="#">Sponsorship</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row flex-row-reverse gy-3 justify-content-between align-items-center">
                    <div class="col-lg-auto">
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-auto">
                        <p class="copyright-text ">Copyright &copy; 2024 <a href="{{ route('home.index')}}">Mwalimu Junior School</a>. All Rights
                            Reserved <a href="https://veikeagency.com">Developed by Veike Agency</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- <script src="assets/js/app.min.js') }}"></script> -->
    <!-- Layerslider -->
    <script src="{{ asset('assets/js/layerslider.utils.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <!-- jquery ui -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>


</html>