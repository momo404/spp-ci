<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/menu_2_md/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Dec 2018 21:20:22 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico">
        <!-- App title -->
        <title><?= $title ?> | Web SPP SMKN 1 Selong</title>

        <!-- App css -->
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?= base_url(); ?>assets/js/modernizr.min.js"></script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="#" class="text-success">
                                            <span><img src="<?= base_url(); ?>assets/images/logo.png" alt="" height="36"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <?= $this->session->flashdata('alert'); ?>

                                    <form class="form-horizontal" action="login" method="POST">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text"  placeholder="Username" name="username">
                                                <?= form_error('username','<small class="text-danger">','</small>') ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" placeholder="Password" name="password">
                                                <?= form_error('password','<small class="text-danger">','</small>') ?>
                                            </div>
                                        </div>


                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-info waves-effect waves-light" type="submit" name="submit">Log In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/detect.js"></script>
        <script src="<?= base_url(); ?>assets/js/fastclick.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?= base_url(); ?>assets/js/waves.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url(); ?>assets/js/jquery.core.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/zircos/menu_2_md/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Dec 2018 21:20:22 GMT -->
</html>