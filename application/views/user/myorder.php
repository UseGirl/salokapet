<!DOCTYPE html>
<html lang="en">

<head>
    <title>Petshop!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

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
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="https://instagram.com/twins_petshop_care?igshid=OGQ5ZDc2ODk2ZA==" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa"></i></span></a>
                            <a href="<?php echo base_url(); ?>" class="d-flex align-items-center justify-content-center"><span class="fa text-black">Logout</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><span class="flaticon-pawprint-1 mr-2"></span>Petshop!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
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

    <div class="container mt-4">

        <div class="row d-flex">

            <?php
            $counter = 1; // Initialize the counter
            foreach ($order as $odr) :
            ?>

                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            Order Information
                        </div>
                        <div class="card-body">
                            <?php foreach ($produk as $prd) : ?>

                                <?php if ($prd['id_produk'] == $odr['id_produk']) : ?>

                                    <img src="../assets/product/<?= $prd['gambar']; ?>" alt="<?= $prd['nama_produk']; ?>" width="100" class="img-fluid rounded mb-4">

                                    <h5 class="card-title">Item : <?= $prd['nama_produk']; ?></h5>

                                <?php endif; ?>

                            <?php endforeach; ?>
                            <h5 class="card-title">Date : <?= $odr['tanggal_transaksi']; ?></h5>
                            <h5 class="card-title">Harga : <?= $odr['harga']; ?></h5>



                            <?php foreach ($detail_order as $detail) : ?>

                                <?php if ($detail['id_order'] == $odr['id_order']) : ?>

                                    <h5 class="card-title">Quantity : <?= $detail['jumlah']; ?></h5>
                                    <h5 class="card-title">Total : <?= $odr['total']; ?></h5>
                                    <h5 class="card-title">Detail Total: <?= $detail['total']; ?></h5>

                                <?php endif; ?>

                            <?php endforeach; ?>

                            <?php if ($odr['status'] == "Waiting Approval") : ?>

                                <h5 class="card-title">Status : <p class="badge badge-warning"> Waiting Approval</p>
                                </h5>

                            <?php elseif ($odr['status'] == "Approved") : ?>

                                <h5 class="card-title">Status : <p class="badge badge-success"> Approved</p>
                                </h5>

                            <?php elseif ($odr['status'] == "Waiting Payment") : ?>

                                <h5 class="card-title">Status : <p class="badge badge-info"> Waiting Payment</p>
                                </h5>

                            <?php endif; ?>

                            <?php if ($odr['status'] == "Waiting Approval") : ?>

                                <button type="submit" name="Add" class="btn btn-warning  mt-2">ON PROGRESS</button>

                            <?php elseif ($odr['status'] == "Approved") : ?>

                                <button type="submit" name="Add" class="btn btn-primary  mt-2">ORDER ON
                                    DELIVERY</button>

                            <?php else : ?>

                               

                                   
                                  
                                    <button type="submit" class="btn btn-info mt-2" data-toggle="modal" data-target="#bayarModal">Bayar</button>

                             
                                <form action="<?= base_url('user/myorder'); ?>" method="post" class="d-inline">
                                <!-- Modal -->
                                <input type="hidden" name="id_order" value="<?= $odr['id_order']; ?>">
                                <div class="modal fade" id="bayarModal" tabindex="-1" role="dialog" aria-labelledby="bayarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bayarModalLabel">Konfirmasi Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Silakan lakukan pembayaran sesuai dengan informasi di bawah:</p>
                    <p class="font-weight-bold">Total Tagihan: <?= $odr['total']; ?></p>
                    <p>Transfer pembayaran ke rekening berikut:</p>
                    <p class="font-weight-bold">BCA: 1234-5678-9012 (a.n. Toko Online)</p>
                    <p>Setelah transfer, harap konfirmasi pembayaran Anda.</p>
                </div>
                <img src="<?= base_url('assets/images/qr.png'); ?>" width="200" class="img-fluid rounded mb-4 mx-auto" alt="QR Code">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info">Konfirmasi Pembayaran</button>
                </div>
            </div>
        </div>
    </div>
                                </form>


                                <a href="<?= base_url('user/hapus/' . $odr['id_order']); ?>" class="btn btn-danger mt-2" onclick="return confirm('Are you sure you want to cancel this order?');">Cancel</a>

                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            <?php endforeach ?>

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
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://instagram.com/twins_petshop_care?igshid=OGQ5ZDc2ODk2ZA==" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>

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
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">>0813 7811 4951</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">Ptshopandcare@gmail.com</span></a></li>
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