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
                            <a href="<?= base_url('auth') ?>" class="d-flex align-items-center justify-content-center"><span
                                    class="fa text-black">Login</span></a>
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
                    <li class="nav-item active"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
                    <li class="nav-item "><a href="<?= base_url('product') ?>" class="nav-link">Product</a></li>
                    <li class="nav-item"><a href="<?= base_url('contact') ?>" class="nav-link">Contact</a></li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- END nav -->
    <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-11 ftco-animate text-center">
                    <h1 class="mb-4">Highest Quality Care For Pets You'll Love. Wellcome to Our PetShop!
                    </h1>
                    <p><a href="#" class="btn btn-primary mr-md-4 py-3 px-4">Learn more <span
                                class="ion-ios-arrow-forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light ftco-no-pt ftco-intro">
        <div class="container">
            <div class="row">

                <div class="col-md-6 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-dog-eating"></span>
                        </div>
                        <div class="media-body">
                            <h2 class="heading">Pakan</h2>
                            <p>Manjakan anabul dengan pilihan makanan bergizi premium kami. Dibuat khusus untuk memenuhi kebutuhan
                            anabul, makanan dibuat dari bahan-bahan berkualitas tinggi untuk menjaga anabul sehat dan bahagia.</p>
                            <a href="<?= base_url('product') ?>" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-grooming"></span>
                        </div>
                        <div class="media-body">
                            <h2 class="heading">Fet & Aksesoris</h2>
                            <p>Manjakan anabul dengan memberikan vitamin, obat, dan aksesoris berkualitas. Berikan vitamin 
                                dan obat-obat yang bernutrisi tinggi untuk meingkatkan kekebalan dan daya tahan tubuh anabul.
                            </p>
                            <a href="<?= base_url('product') ?>" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section" style="background-image: url('assets/images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Happy Clients &amp; Feedbacks</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(assets/images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(assets/images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(assets/images/person_3.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(assets/images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(assets/images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Pets Gallery</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="work mb-4 img d-flex align-items-end"
                        style="background-image: url(assets/images/gallery-1.jpg);">
                        <a href="assets/images/gallery-1.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Cat</span>
                                <h2><a href="work-single.html">Persian Cat</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="work mb-4 img d-flex align-items-end"
                        style="background-image: url(assets/images/gallery-2.jpg);">
                        <a href="assets/images/gallery-2.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Dog</span>
                                <h2><a href="work-single.html">Pomeranian</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="work mb-4 img d-flex align-items-end"
                        style="background-image: url(assets/images/gallery-3.jpg);">
                        <a href="assets/images/gallery-3.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Cat</span>
                                <h2><a href="work-single.html">Sphynx Cat</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="work mb-4 img d-flex align-items-end"
                        style="background-image: url(assets/images/gallery-4.jpg);">
                        <a href="assets/images/gallery-4.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Cat</span>
                                <h2><a href="work-single.html">British Shorthair</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="work mb-4 img d-flex align-items-end"
                        style="background-image: url(assets/images/gallery-5.jpg);">
                        <a href="assets/images/gallery-5.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Dog</span>
                                <h2><a href="work-single.html">Beagle</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="work mb-4 img d-flex align-items-end"
                        style="background-image: url(assets/images/gallery-6.jpg);">
                        <a href="assets/images/gallery-6.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Dog</span>
                                <h2><a href="work-single.html">Pug</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 mb-4 mb-md-0">
                    <h2 class="footer-heading">Petshop</h2>
                    <p>Sayangi anabul anda dengan pemilihan gizi, obat, dan perlengkapan anabul yang berkualitas</p>
                    <ul class="ftco-footer-social p-0">
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Twitter"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Facebook"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://instagram.com/twins_petshop_care?igshid=OGQ5ZDc2ODk2ZA==" data-toggle="tooltip" data-placement="top"
                                title="Instagram"><span class="fa fa-instagram"></span></a></li>

                    </ul>
                </div>

                <div class="col-md-4 col-lg-4 pl-lg-5 mb-4 mb-md-0">
                    <h2 class="footer-heading">Side Bar</h2>
                    <ul class="list-unstyled">
                        <li><a href="<?= base_url('user') ?>" class="py-2 d-block">Home</a></li>
                        <li><a href="<?= base_url('user/product') ?>" class="py-2 d-block">Product</a></li>
                        <li><a href="<?= base_url('contact') ?>" class="py-2 d-block">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-4 mb-4 mb-md-0">
                    <h2 class="footer-heading">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><a href="https://maps.app.goo.gl/13aVjsuZZS2gHkpv5?g_st=ic"><span class="icon fa fa-map"></span><span class="text">Jalan Prawiro Kuat No.119, condongcatur, Depok, Sleman, DIY</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">0813 7811 4951</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                        class="text">Ptshopandcare@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">

                    <p class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src=<?php echo base_url('assets/js/jquery.min.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/jquery-migrate-3.0.1.min.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/popper.min.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/bootstrap.min.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/jquery.easing.1.3.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/jquery.waypoints.min.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/jquery.stellar.min.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/jquery.animateNumber.min.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/jquery.timepicker.min.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/owl.carousel.min.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/scrollax.min.js'); ?>></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src=<?php echo base_url('assets/js/google-map.js'); ?>></script>
    <script src=<?php echo base_url('assets/js/main.js'); ?>></script>

</body>

</html>