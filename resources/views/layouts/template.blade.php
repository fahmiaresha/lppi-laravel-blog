<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="description" content="Insurin - Insurance Company HTML Template">
    <meta name="keywords" content="	accounting, advising, advisory, business, company, consulting, corporate, finance, financial, investments, law, multi-purpose, services, tax help, visual composer">
    <meta name="author" content="Themexriver">
    <link rel="shortcut icon" href="assets/img/logo/ficon.png" type="image/x-icon">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/video.min.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/rs6.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/style.css">
    @yield('head')
</head>

<body>
    <header id="in-header" class="in-header-section header-style-one">
        <div class="in-header-main-menu-wrapper">
            <div class="container">
                <div class="in-header-main-menu-content d-flex align-items-center justify-content-between">
                    <div class="sticky-logo">
                        <a href="#"><img src="assets/img/logo/logo-2.png" alt=""></a>
                    </div>
                    <nav class="in-main-navigation-area clearfix ul-li">
                        <ul id="main-nav" class="nav navbar-nav clearfix">
                            <li class="dropdown in-megamenu">
                                <a href="/">Home</a>
                            </li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/contact">Contact </a></li>
                            <li><a href="/todo">Todo App</a></li>
                            <li class="dropdown">
                                <a href="!#">Manage Blog</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="/posts">Post</a></li>
                                    <li><a href="/category">Category</a></li>
                                    <li><a href="/comments">Comments</a></li>
                                    <li><a href="/login">Login Admin</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </nav>
                    <div class="in-header-search-cta-btn d-flex align-items-center">
                        <div class="in-header-search">
                            <button class="search-btn"><i class="fal fa-search"></i></button>
                        </div>
                        <div class="in-header-cta-btn">
                            <a href="/contact">Get A Quote</a>
                        </div>
                    </div>
                </div>
                <div class="mobile_menu position-relative">
                    <div class="mobile_menu_button open_mobile_menu">
                        <i class="fal fa-bars"></i>
                    </div>
                    <div class="mobile_menu_wrap">
                        <div class="mobile_menu_overlay open_mobile_menu"></div>
                        <div class="mobile_menu_content">
                            <div class="mobile_menu_close open_mobile_menu">
                                <i class="fal fa-times"></i>
                            </div>
                            <div class="m-brand-logo">
                                <a href="!#"><img src="assets/img/logo/logo-1.png" alt=""></a>
                            </div>
                            <div class="in-m-search">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search..">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <nav class="mobile-main-navigation  clearfix ul-li">
                                <ul id="m-main-nav" class="nav navbar-nav clearfix">
                                    <li class="dropdown in-megamenu">
                                        <a href="/">Home</a>
                                    </li>

                                    <li><a href="/blog">Blog</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/contact">Contact </a></li>
                                    <li><a href="/todo">Todo App</a></li>
                                    <li class="dropdown">
                                        <a href="!#">Manage Blog</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="/posts">Post</a></li>
                                            <li><a href="/category">Category</a></li>
                                            <li><a href="/comments">Comments</a></li>
                                            <li><a href="/login">Login Admin</a></li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /Mobile-Menu -->
                </div>
            </div>
        </div>
    </header>

    <!-- search filed -->
    <div class="search-body">
        <div class="search-form">
            <form action="#" class="search-form-area">
                <input class="search-input" type="search" placeholder="Search Here">
                <button type="submit" class="search-btn1">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="outer-close text-center search-btn">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>

    @yield('content')

    <footer id="in-footer" class="in-footer-section" data-background="assets/img/bg/footer-bg.jpg">
        <div class="container">
            <!-- <div class="in-footer-widget-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="in-footer-widget">
                            <div class="logo-widget">
                                <div class="brand-logo">
                                    <a href="#"><img src="assets/img/logo/logo-2.png" alt=""></a>
                                </div>
                                <div class="footer-text">
                                    The charms of pleasure of the empect moment, so blinded by desire, thats they cannot fores that ound to.
                                </div>
                                <div class="footer-social d-flex">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="in-footer-widget">
                            <div class="contact-widget headline">
                                <h3 class="widget-title">Contact info</h3>
                                <div class="contact-info">
                                    <div class="info-item d-flex align-items-center">
                                        <div class="inner-icon d-flex align-items-center justify-content-center">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="inner-text">
                                            30 Commercial Road
                                            Fratton, Australia
                                        </div>
                                    </div>
                                    <div class="info-item d-flex align-items-center">
                                        <div class="inner-icon d-flex align-items-center justify-content-center">
                                            <i class="fal fa-envelope-open-text"></i>
                                        </div>
                                        <div class="inner-text">
                                            insurin@company.com
                                            1-888-452-1505
                                        </div>
                                    </div>
                                    <div class="info-item d-flex align-items-center">
                                        <div class="inner-icon d-flex align-items-center justify-content-center">
                                            <i class="fal fa-phone-plus"></i>
                                        </div>
                                        <div class="inner-text">
                                            Mon – Sat: 8 am – 5 pm,
                                            Sunday: CLOSED
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="in-footer-widget">
                            <div class="menu-widget headline ul-li-block">
                                <h3 class="widget-title">Our Company</h3>
                                <ul>
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">News & Blog</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Customer Support</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Website Accessibility</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="in-footer-widget">
                            <div class="newslatter-widget headline ul-li-block">
                                <h3 class="widget-title">Subscribe newsletter</h3>
                                <form action="#" method="get">
                                    <input type="email" name="email" placeholder="Email">
                                    <button type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="in-footer-copyright-area d-flex justify-content-end">
                <div class="in-footer-copyright-text">
                  
                    <div class="inner-text d-flex justify-content-end">
                        Copyright © 2024 M.Fahmi Aresha
                    </div>
                  
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/knob.js"></script>
    <script src="assets/js/jquery.filterizr.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/rbtools.min.js"></script>
    <script src="assets/js/rs6.min.js"></script>
    <script src="assets/js/jarallax.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/roundslider.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/script.js"></script>
    @yield('script')
</body>

</html>