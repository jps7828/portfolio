<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?= $basic->com_basic_meta_title ?>
    </title>

    <!-- og:title Maximum 35 characters -->
    <meta property="og:title" content="<?= $basic->com_basic_meta_title ?>" />
    <!-- og:url Full link to the current webpage address -->
    <meta property="og:url" content="https://jps7828.herokuapp.com" />
    <!-- og:description  Maximum 65 characters -->
    <meta property="og:description" content="<?= $basic->com_basic_meta_description ?>">
    <!-- og:image -->
    <meta property="og:image" content="https://jps7828.github.io/cv/images/jps7828.png">
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image" content="https://jps7828.github.io/cv/images/dev.png">
    <!-- og type -->
    <meta property="og:type" content="website" />
    <!-- og:locale -->
    <meta property="og:locale" content="en_Us" />
    <meta property="og:locale:alternate" content="hi_IN" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="jps7828.github.io">
    <meta property="twitter:url" content="https://jps7828.github.io/cv/">
    <meta name="twitter:title" content="<?= $basic->com_basic_meta_title ?>">
    <meta name="twitter:description" content="<?= $basic->com_basic_meta_description ?>">
    <meta name="twitter:image" content="https://jps7828.github.io/cv/images/dev2.png">

    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="<?= $basic->com_basic_meta_description ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url($basic->com_basic_favicon) ?>">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/vendor/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/vendor/aos.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/style.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/my.css">
    <script defer src="<?= base_url() ?>assets/web/my.js"></script>
    <script src="<?= base_url() ?>assets/web/js/vendor/jquery.js"></script>
</head>

<body class="template-color-1 spybody white-version" data-spy="scroll" data-target=".navbar-example2" data-offset="150">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo" id="topLogo">
                        <a href="<?= base_url('/') ?>">
                            <img src="<?= base_url($basic->com_basic_favicon) ?>" alt="logo" style="width:30%;">
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block">
                        <!-- Start Mainmanu Nav -->
                        <ul class="primary-menu nav nav-pills">
                            <li class="nav-item"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#about">about</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#clients">Clients</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">Pricing</a></li>
                            <!-- <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li> -->
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                            <!-- <a href="#" class="nav-link smoth-animation" id="my-light-theme">
                                <i class="sun h6" data-feather="sun" ></i>
                            </a>
                            <a href="#" class="nav-link smoth-animation" id="my-dark-theme">
                                <i class="moon" data-feather="moon" ></i>
                            </a> -->
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="<?= base_url('/') ?>">
                        <img src="<?= base_url($basic->com_basic_favicon) ?>" alt="Personal Portfolio" style="width:80%">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">It is a personal portfolio. You can get your's too, contact now.</p>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills">
                    <li class="nav-item"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#clients">Clients</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">Pricing</a></li>
                    <!-- <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li> -->
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                </ul>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find me on</span>
                    <ul class="social-share d-flex liststyle">
                        <?php foreach ($social_network as $social) : ?>
                            <li class="<?= $social->social_network_icon ?>">
                                <a href="<?= $social->social_network_link ?>" target="_blank">
                                    <i class="text-white-hover" data-feather="<?= $social->social_network_icon ?>"></i>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->

    

    