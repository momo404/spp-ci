<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/menu_2_md/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Dec 2018 21:17:48 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Apa aja boleh.">
        <meta name="author" content="Coffin Media">

        <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/assets/images/favicon.png">

        <title><?= $title ?> | Web SPP SMKN 1 Selong</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- App css -->
        <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?= base_url(); ?>/assets/js/modernizr.min.js"></script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                            <!--Zircos-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="<?= base_url(); ?>" class="logo">
                            <img src="<?= base_url(); ?>/assets/images/logo.png" alt="" height="30">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
                    <!-- end menu-extras -->

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li><a href="<?= base_url(); ?>"><i class="mdi mdi-view-dashboard"></i>Beranda</a></li>
                            <li><a href="<?= base_url(); ?>cek/tagihan"><i class="fa fa-credit-card"></i>Lihat Tagihan</a></li>
                            <li><a href="<?= base_url(); ?>cek/riwayat"><i class="fa fa-history"></i>Riwayat Pembayaran</a></li>

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

