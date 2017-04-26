<?php
require 'Model/Init.php';
require 'Model/CMS.php';
$cmsClass = new CMS();
$homeActive = '';
$aboutActive = '';
$platformsActive = '';
$teachersActive = '';
$servicesActive = '';

if($_SERVER['PHP_SELF'] == '/index.php'){
    $homeActive = 'id="current"';
}else if($_SERVER['PHP_SELF'] == '/about.php'){
    $aboutActive = 'id="current"';
}else if($_SERVER['PHP_SELF'] == '/platforms.php'){
    $platformsActive = 'id="current"';
}

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
                        <a href="index">
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
                            <a <?php echo $homeActive; ?> href="index">
                                Home
                            </a>

                        </li>
                        <li>
                            <a <?php echo $aboutActive; ?> href="about">
                                About us
                            </a>

                        </li>
                        <li>
                            <a <?php echo $platformsActive; ?> href="platforms">
                                Platforms
                            </a>

                        </li>
                        <li>
                            <a href="teachers">
                                Teachers
                            </a>

                        </li>
                        <li>
                            <a href="services">
                                Services
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