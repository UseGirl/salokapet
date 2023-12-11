<!DOCTYPE html>
<html lang="en">

<head>
    <title>Petshop!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link href=<?php echo base_url('assets/css/animate.css'); ?> rel="stylesheet">
    <link href=<?php echo base_url('assets/css/owl.carousel.min.css'); ?> rel="stylesheet">
    <link href=<?php echo base_url('assets/css/owl.theme.default.min.css'); ?> rel="stylesheet">
    <link href=<?php echo base_url('assets/css/magnific-popup.css'); ?> rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href=<?php echo base_url('assets/css/bootstrap-datepicker.css'); ?> rel="stylesheet">
    <link href=<?php echo base_url('assets/css/jquery.timepicker.css'); ?> rel="stylesheet">

    <link href=<?php echo base_url('assets/css/style.css'); ?> rel="stylesheet">
    <link href=<?php echo base_url('assets/css/flaticon.css'); ?> rel="stylesheet">

</head>

<body>

    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>>0813 7811 4951</a>
                        <a href="#"><span class="fa fa-paper-plane mr-1"></span>Ptshopandcare@gmail.com</a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="https://instagram.com/twins_petshop_care?igshid=OGQ5ZDc2ODk2ZA==" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa"></i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa text-black">Logout</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><span class="flaticon-pawprint-1 mr-2"></span>Petshop!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="<?= base_url('user') ?>" class="nav-link">Home</a></li>
                    <li class="nav-item "><a href="<?= base_url('user/product') ?>" class="nav-link">Product</a></li>
                    <li class="nav-item active"><a href="<?= base_url('user/myorder') ?>" class="nav-link">My Order</a>
                    </li>
                    <li class="nav-item"><a href="<?= base_url('user/contact') ?>" class="nav-link">Contact</a></li>
                </ul>
            </div>

        </div>
    </nav>
