<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>PetShop! </title>

    <!-- Bootstrap -->
    <link href=<?php echo base_url('gentella/vendors/bootstrap/dist/css/bootstrap.min.css'); ?> rel="stylesheet">
    <!-- Font Awesome -->
    <link href=<?php echo base_url('gentella/vendors/font-awesome/css/font-awesome.min.css'); ?> rel="stylesheet">
    <!-- NProgress -->
    <link href=<?php echo base_url('gentella/vendors/nprogress/nprogress.css'); ?> rel="stylesheet">
    <!-- iCheck -->
    <link href=<?php echo base_url('gentella/vendors/iCheck/skins/flat/green.css'); ?> rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href=<?php echo base_url('gentella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?> rel="stylesheet">
    <!-- JQVMap -->
    <link href=<?php echo base_url('gentella/vendors/jqvmap/dist/jqvmap.min.css'); ?> rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href=<?php echo base_url('gentella/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?> rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=<?php echo base_url('gentella/build/css/custom.min.css'); ?> rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?= base_url()?>adminpanel/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>PetShop!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-list"></i> Produk <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li> <a href="<?= base_url()?>adminpanel/produk">List Produk</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li> <a href="<?= base_url()?>adminpanel/user">Data User</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-gear"></i> Admin <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url()?>adminpanel/admin">Data Admin</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bicycle"></i> Kurir <span class="fa fa-bicycle"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url()?>adminpanel/kurir">List Kurir</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url()?>adminpanel/order">Order</a></li>
                                        <li><a href="<?= base_url()?>adminpanel/detailorder">Detail Order</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('')?>"><i class="fa fa-sign-out"></i> Logout </a>

                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle mb-2">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class="navbar-right">
                            <li class="nav-item dropdown open mt-2">
                                <a href="javascript:;" class="user-profile dropdown-toggle" style="margin-right: 30px;" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                   Account
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                  
                                    <a class="dropdown-item" href="<?= base_url('')?>"><i class="fa fa-sign-out pull-right"></i>
                                        Log Out</a>
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>