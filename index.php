<?php
require 'Model/Init.php';
require 'Model/CMS.php';
$cmsClass = new CMS();
?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>ILearning Inc.</title>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,300italic' rel='stylesheet' type='text/css'>
    <!-- Library CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/animations.css" media="screen">
    <link rel="stylesheet" href="css/superfish.css" media="screen">
    <link rel="stylesheet" href="css/revolution-slider/css/settings.css" media="screen">
    <link rel="stylesheet" href="css/revolution-slider/css/extralayers.css" media="screen">
    <link rel="stylesheet" href="css/prettyPhoto.css" media="screen">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/global.css">
    <!-- Skin -->
    <link rel="stylesheet" href="css/colors/blue.css" class="colors">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/theme-responsive.css">
    <!-- Switcher CSS -->
    <link href="css/switcher.css" rel="stylesheet">
    <link href="css/spectrum.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="shortcut icon" href="img/ico/favicon.png">
    <link rel="apple-touch-icon" href="img/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/ico/apple-touch-icon-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/ico/apple-touch-icon-144.png">
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!--[if IE]>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->

    <!-- video player -->
    <link href="http://vjs.zencdn.net/5.19.1/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>
<body class="home">
<div class="page-mask">
    <div class="page-loader">

        <div class="spinner"></div>
        Loading...
    </div>

</div>
<div class="wrap">
    <!-- Header Start -->
    <header id="header">
        <!-- Header Top Bar Start -->
        <div class="top-bar">
            <div class="slidedown collapse">
                <div class="container">
                    <div class="phone-email pull-left">
                        <a><i class="fa fa-phone"></i> Call Us : +880 111-111-111</a>
                        <a href="support@fifothemes.com"><i class="fa fa-envelope"></i> Email : support@fifothemes.com</a>
                    </div>
                    <div class="follow-us pull-right">
                        <ul class="social pull-left">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                        <div id="search-form" class="pull-right">
                            <form action="#" method="get">
                                <input type="text" class="search-text-box" placeholder="Search...">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Bar End -->
        <!-- Main Header Start -->
        <div class="main-header">
            <div class="container">
                <!-- TopNav Start -->
                <div class="topnav navbar-header">
                    <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
                        <i class="fa fa-angle-down icon-current"></i>
                    </a>
                </div>
                <!-- TopNav End -->
                <!-- Logo Start -->
                <div class="logo pull-left">
                    <h1>
                        <a href="index.html">
                            <img src="img/logo2.png" alt="pixma" width="125" height="60">
                        </a>
                    </h1>
                </div>
                <!-- Logo End -->
                <!-- Mobile Menu Start -->
                <div class="mobile navbar-header">
                    <a class="navbar-toggle" data-toggle="collapse" href=".navbar-collapse">
                        <i class="fa fa-bars fa-2x"></i>
                    </a>
                </div>
                <!-- Mobile Menu End -->
                <!-- Menu Start -->
                <nav class="collapse navbar-collapse menu">
                    <ul class="nav navbar-nav sf-menu">
                        <li>
                            <a id="current" href="index.html">
                                Home
                            </a>

                        </li>
                        <li>
                            <a href="index.html">
                                Page Two
                            </a>

                        </li>
                        <li>
                            <a href="index.html">
                                Page Three
                            </a>

                        </li>
                        <li>
                            <a href="index.html">
                                Page Four
                            </a>

                        </li>
                        <li>
                            <a href="index.html">
                                Page Five
                            </a>

                        </li>

                    </ul>
                </nav>
                <!-- Menu End -->
            </div>
        </div>
        <!-- Main Header End -->
    </header>
    <!-- Header End -->
    <!-- Content Start -->
    <div id="main">
        <!-- Slider Start-->
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner rslider">
                <ul>
                    <!-- THE FIRST SLIDE -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on">
                        <img src="http://admin.ilearningedu.com/images/header/<?php echo $cmsClass->getHeaderImage(); ?>"  alt="Pixma" data-lazyload="http://admin.ilearningedu.com/images/header/<?php echo $cmsClass->getHeaderImage(); ?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="caption modern_big_bluebg h1 lft tp-caption start"
                             data-x="40"
                             data-y="85"
                             data-speed="700"
                             data-endspeed="800"
                             data-start="1000"
                             data-easing="easeOutQuint"
                             data-endeasing="easeOutQuint">
                            <h3>PREMIUM BUSINESS TEMPLATE</h3>
                        </div>
                        <div class="caption list_slide lfb tp-caption start"
                             data-easing="easeOutExpo"
                             data-start="1400"
                             data-speed="1050"
                             data-y="180"
                             data-x="40">
                            <div class="list-slide">
                                <i class="fa fa-camera slide-icon"></i>
                                <h5 class="dblue"> 10 predefined color skins </h5>
                            </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start"
                             data-easing="easeOutExpo"
                             data-start="1800"
                             data-speed="1200"
                             data-y="220"
                             data-x="40">
                            <div class="list-slide">
                                <i class="fa fa-search slide-icon"></i>
                                <h5 class="dblue"> SEO optimized template files </h5>
                            </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start"
                             data-easing="easeOutExpo"
                             data-start="2200"
                             data-speed="1350"
                             data-y="260"
                             data-x="40">
                            <div class="list-slide">
                                <i class="fa fa-code slide-icon"></i>
                                <h5 class="dblue"> Working Ajax Contact Form </h5>
                            </div>
                        </div>
                        <div class="caption lfb caption_button_1 fadeout tp-caption start"
                             data-x="40"
                             data-y="330"
                             data-speed="900"
                             data-endspeed="300"
                             data-start="2700"
                             data-hoffset="-70"
                             data-easing="easeOutExpo">
                            <a class="btn-special hidden-xs btn-grey" href="#">Learn More</a>
                        </div>
                        <div class="caption lfb caption_button_2 fadeout tp-caption start"
                             data-x="210"
                             data-y="330"
                             data-speed="800"
                             data-endspeed="300"
                             data-start="2900"
                             data-hoffset="70"
                             data-easing="easeOutExpo">
                            <a class="btn-special hidden-xs btn-color" href="#">Buy Now</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <!-- Slider End-->
        <!-- Slogan Start-->

        <!-- Slogan End-->
        <!-- Main Content start-->

        <!-- Main Content end-->

        <!-- Product Content Start-->
        <div class="product-lead bottom-pad">
            <div class="bg-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center animate_afl d1">

                            <video id="my-video" class="video-js" controls preload="auto" width="570" height="420" autoplay
                                   poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                                <source src="video/test.mp4" type='video/mp4'>
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                </p>
                            </video>

                            <script src="http://vjs.zencdn.net/5.19.1/video.js"></script>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 animate_afr d3">
                            <div class="app-service">
                                <h3>Pixma App Services</h3>
                                <h4>We provide all kinds of iPhone application design and development services.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet.Lorem fermentum diam diam.
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <div class="divider"></div>
                                <div class="learnmore">
                                    <a class="btn-special btn-grey" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Content end-->
        <!-- Latest Posts start -->
        <div class="latest-posts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 com-sm-12 col-xs-12">
                        <h3 class="title">Our Teachers</h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="blog-showcase col-lg-12 col-md-12 col-sm-12 col-xs-12 animate_afb d1">
                        <ul>
                            <li class="">
                                <div class="blog-showcase-thumb col-lg-4">
                                    <div class="post-body">
                                        <a class="post-item-link" href="img/teachers/t1.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img alt="" src="img/teachers/t1.jpg"></a>
                                    </div>
                                </div>
                                <div class="blog-showcase-extra-info col-lg-4">
                                    <span><a href="#">Instructor</a></span>
                                    <h4><a href="#" class="title">Ma. Mae Santos</a></h4>
                                    <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </li>
                            <li class="">
                                <div class="blog-showcase-thumb col-lg-4">
                                    <div class="post-body">
                                        <a class="post-item-link" href="img/teachers/t2.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img alt="" src="img/teachers/t2.jpg"></a>
                                    </div>
                                </div>
                                <div class="blog-showcase-extra-info col-lg-4">
                                    <span><a href="#">Instructor</a></span>
                                    <h4><a href="#" class="title">John Doe</a></h4>
                                    <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </li>
                            <li class="">
                                <div class="blog-showcase-thumb col-lg-4">
                                    <div class="post-body">
                                        <a class="post-item-link" href="img/teachers/t3.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img alt="" src="img/teachers/t3.jpg"></a>
                                    </div>
                                </div>
                                <div class="blog-showcase-extra-info col-lg-4">
                                    <span><a href="#">Instructor</a></span>
                                    <h4><a href="#" class="title">Mary Claire Sumbang</a></h4>
                                    <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
        <!-- Latest Posts End -->
        <!-- Our Clients Start-->
        <div class="our-clients">
            <div class="bg-overlay">
                <div class="container">
                    <div class="row">
                        <div class="client">
                            <div class="client-logo">

                                <img src="img/ilearning_system.png" style="width: 100%; height: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Clients End -->
    </div>
    <!-- Content End -->
    <!-- Footer Start -->
    <footer id="footer">
        <!-- Footer Top Start -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-one">
                        <h3>About</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </section>
                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-two">
                        <h3>Twitter Stream</h3>
                        <ul id="tweets">
                        </ul>
                    </section>
                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-three">
                        <h3>Contact Us</h3>
                        <ul class="contact-us">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    <strong class="contact-pad">Address:</strong> House: 325, Road: 2,<br> Mirpur DOHS <br>
                                    Dhaka, Bangladesh
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p><strong>Phone:</strong> +880 111-111-111</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p><strong>Email:</strong><a href="mailto:support@fifothemes.com">support@fifothemes.com</a></p>
                            </li>
                        </ul>
                    </section>
                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-four">
                        <h3>Flickr Photostream</h3>
                        <ul id="flickrfeed" class="thumbs"></ul>
                    </section>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 "> &copy; Copyright 2014 by <a href="#">Pixma</a>. All Rights Reserved. </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                        <ul class="social social-icons-footer-bottom">
                            <li class="facebook"><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="dribbble"><a href="#" data-toggle="tooltip" title="Dribble"><i class="fa fa-dribbble"></i></a></li>
                            <li class="linkedin"><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                            <li class="rss"><a href="#" data-toggle="tooltip" title="Rss"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Scroll To Top -->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Wrap End -->
<section id="style-switcher">
    <h2>Style Switcher <a href="#"><i class="fa fa-cog"></i></a></h2>
    <div>
        <h3>Predefined Colors</h3>
        <ul class="colors">
            <li><a title="Blue" class="blue" href="#"></a></li>
            <li><a title="Green" class="green" href="#"></a></li>
            <li><a title="Orange" class="orange" href="#"></a></li>
            <li><a title="Purple" class="purple" href="#"></a></li>
            <li><a title="Red" class="red" href="#"></a></li>
            <li><a title="Magenta" class="magenta" href="#"></a></li>
            <li><a title="Brown" class="brown" href="#"></a></li>
            <li><a title="Gray" class="gray" href="#"></a></li>
            <li><a title="Golden" class="golden" href="#"></a></li>
            <li><a title="Teal" class="teal" href="#"></a></li>
        </ul>
        <h3>Layout Style</h3>
        <div class="layout-style">
            <select id="layout-style">
                <option value="1">Wide</option>
                <option value="2">Boxed</option>
            </select>
        </div>
        <h3>Header Color</h3>
        <div class="header-color">
            <input type='text' class="header-bg" />
        </div>
        <h3>Footer Top Color</h3>
        <div class="header-color">
            <input type='text' class="footer-bg" />
        </div>
        <h3>Footer Bottom Color</h3>
        <div class="header-color">
            <input type='text' class="footer-bottom" />
        </div>
        <h3>Background Image</h3>
        <ul id="bg" class="colors bg">
            <li><a class="bg1" href="#"></a></li>
            <li><a class="bg2" href="#"></a></li>
            <li><a class="bg3" href="#"></a></li>
            <li><a class="bg4" href="#"></a></li>
            <li><a class="bg5" href="#"></a></li>
            <li><a class="bg6" href="#"></a></li>
            <li><a class="bg7" href="#"></a></li>
            <li><a class="bg8" href="#"></a></li>
            <li><a class="bg9" href="#"></a></li>
            <li><a class="bg10" href="#"></a></li>
        </ul>
    </div>
</section>
<!-- The Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/jquery.wait.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/superfish.js"></script>
<script src="js/tweetMachine.js"></script>
<script src="js/tytabs.js"></script>
<script src="js/jquery.gmap.min.js"></script>
<script src="js/circularnav.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jflickrfeed.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/spectrum.js"></script>
<script src="js/switcher.js"></script>
<script src="js/custom.js"></script>
</body>
</html>