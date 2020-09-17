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
                            <img src="<?= base_url(); ?>assets/images/logo.png" alt="" height="30">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">

                            <li class="dropdown navbar-c-items">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= base_url(); ?>assets/images/avatar.png" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li class="text-center">
                                        <h5>Hi, <?= $this->session->userdata('nama_petugas') ?></h5>
                                    </li>
                                    <li><a href="<?= base_url(); ?>manage/akun/ubah_password"><i class="fa fa-cog m-r-5"></i> Ubah Password</a></li>
                                    <li><a href="<?= base_url(); ?>manage/auth/logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>

                            </li>
                        </ul>
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

                            <li><a href="<?= base_url(); ?>manage/"><i class="mdi mdi-view-dashboard"></i>Beranda</a></li>
                            
                        <?php if ($this->session->userdata('level') == "admin") : ?>
                           
                           <li><a href="<?= base_url(); ?>manage/spp"><i class="fa fa-money"></i>Data SPP</a></li>

                           <li><a href="<?= base_url(); ?>manage/tahun"><i class="fa fa-history"></i>Data Tahun</a></li>

                            <li><a href="<?= base_url(); ?>manage/kelas"><i class="fa fa-list"></i>Data Kelas</a></li>

                            <li><a href="<?= base_url(); ?>manage/siswa"><i class="fa fa-users"></i>Data Siswa</a></li>

                            <li><a href="<?= base_url(); ?>manage/petugas"><i class="fa fa-user"></i>Data Petugas</a></li>

                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-money"></i>Pembayaran</a>
                                <ul class="submenu">
                                    <li><a href="<?= base_url(); ?>manage/pembayaran/entri">Entri Pembayaran</a></li>
                                    <li><a href="<?= base_url(); ?>manage/pembayaran/riwayat">Riwayat Pembayaran</a></li>
                                </ul>
                            </li>

                            <li><a href="<?= base_url(); ?>manage/laporan"><i class="fa fa-book"></i>Laporan</a></li>

                        <?php else : ?>
            
                           <li class="has-submenu">
                                <a href="#"><i class="fa fa-money"></i>Pembayaran</a>
                                <ul class="submenu">
                                    <li><a href="<?= base_url(); ?>manage/pembayaran/entri">Entri Pembayaran</a></li>
                                    <li><a href="<?= base_url(); ?>manage/pembayaran/riwayat">Riwayat Pembayaran</a></li>
                                </ul>
                            </li>

                        <?php endif; ?>
                          
                            
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->