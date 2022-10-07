<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>XB XSIS BERKARYA</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="portfolio_company/assets/images/faviconxb.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="portfolio_company/assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="portfolio_company/assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="portfolio_company/assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="portfolio_company/assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="portfolio_company/assets/css/style.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img src="portfolio_company/assets/images/logoxb.jpg" alt="Logo">
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><a class="page-scroll" href="/">Home</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="/about">About</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="/service">Services</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="/portfolio">Portfolio</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="/blog">Blog</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="/contact">Contact</a></li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->
    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->


    <section id="about" class="about-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">TENTANG KAMI</h2>
                        <h1 class="title" style="color:mediumorchid">PT MITRA XSIS BERKARYA</h1>
                            <p>Profesional, berpengalaman, dan terpercaya, di bidang Freight Forwading. membantu klien dalam melakukan pengiriman Mobil, Motor, Alat Berat, dan Barang Kargo dari dan ke seluruh wilayah Indonesia.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-15">
                    <div class="about-content mt-50">
                        @foreach ($about as $about)
                            
                        
                        <h4 class="about-title">{{ $about->title }}</h4>
                        <p align="justify">{{ $about->description }}</p>
                        @endforeach
                        <ul class="clearfix">
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-calendar"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Date of birth:</span> 8 June 1995</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Email:</span> parker@mysite.com</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Phone:</span> +1-202-555-0138</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-map-marker"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Location:</span> 4373, El Centro, CA</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- about content -->
                </div>
    </section>
    <!--====== ABOUT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-130 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-content text-center">
                            <a href="index.html">
                                <img src="portfolio_company/assets/images/logoxb.jpg" alt="Logo">
                            </a>
                            <p class="mt-">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci- didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe- rcitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul>
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="footer-copyright pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text text-center pt-20">
                            <p>Copyright © 2022. Template Crafted by <a href="https://uideck.com" rel="nofollow">XSIS Berkarya</a></p>
                        </div> <!-- copyright text -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="portfolio_company/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="portfolio_company/assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="portfolio_company/assets/js/bootstrap.min.js"></script>
    <script src="portfolio_company/assets/js/popper.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="portfolio_company/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Parallax js ======-->
    <script src="portfolio_company/assets/js/parallax.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="portfolio_company/assets/js/waypoints.min.js"></script>
    <script src="portfolio_company/assets/js/jquery.counterup.min.js"></script>


    <!--====== Appear js ======-->
    <script src="portfolio_company/assets/js/jquery.appear.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="portfolio_company/assets/js/scrolling-nav.js"></script>
    <script src="portfolio_company/assets/js/jquery.easing.min.js"></script>


    <!--====== Main js ======-->
    <script src="portfolio_company/assets/js/main.js"></script>

</body>

</html>
