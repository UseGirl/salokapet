<!DOCTYPE html>
<html lang="en">

<head>
	<title>Petshop!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
		rel="stylesheet">

	<link href=<?php echo base_url ('assets/css/animate.css');?> rel="stylesheet">
	<link href=<?php echo base_url ('assets/css/owl.carousel.min.css');?> rel="stylesheet">
	<link href=<?php echo base_url ('assets/css/owl.theme.default.min.css');?> rel="stylesheet">
	<link href=<?php echo base_url ('assets/css/magnific-popup.css');?> rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href=<?php echo base_url ('assets/css/bootstrap-datepicker.css');?> rel="stylesheet">
	<link href=<?php echo base_url ('assets/css/jquery.timepicker.css');?> rel="stylesheet">

	<link href=<?php echo base_url ('assets/css/style.css');?> rel="stylesheet">
	<link href=<?php echo base_url ('assets/css/flaticon.css');?> rel="stylesheet">

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
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa"></i></span></a>
									<a href="<?php echo base_url(); ?>" class="d-flex align-items-center justify-content-center"><span
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
					<li class="nav-item active"><a href="<?= base_url('user/product') ?>" class="nav-link">Product</a>
					</li>
					<li class="nav-item "><a href="<?= base_url('user/myorder') ?>" class="nav-link">My Order</a></li>
					<li class="nav-item"><a href="<?= base_url('user/contact') ?>" class="nav-link">Contact</a></li>
				</ul>
			</div>

		</div>
	</nav>
	<!-- END nav -->

	<!-- page content -->
	<div class="right_col" role="main">

		<div class="container">
			<div class="row mt-3">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								Product Information
							</div>
							<div class="card-body">
								<h5 class="card-title"><?= $produk['nama_produk']; ?></h5>
								<p class="card-text"><?= $produk['deskripsi']; ?></p>
								<p class="card-text">Rp. <?= $produk['harga']; ?></p>
								<p class="card-text">Stock: <?= $produk['jumlah_stok']; ?></p>

								<input type="hidden" name="id_produk" value="<?= $produk['id_produk']; ?>">
								<input type="hidden" name="nama_produk" value="<?= $produk['nama_produk']; ?>">
								<input type="hidden" name="harga" value="<?= $produk['harga']; ?>">
								<input type="hidden" name="tanggal_transaksi" class="form-control" >
                  
								

								<div class="form-group">
									<label for="quantity">Quantity:</label>
									<input type="number" id="quantity" min="0" max="<?= $produk['jumlah_stok']; ?>"
										class="form-control" name="jumlah">
								</div>

								<div class="form-group">
									<label for="quantity">Wilayah</label>
									<select name="wilayah" id="wilayah" class="form-control" required>
									<option selected disabled> </option>
										<option value="1">Bali</option>
										<option value="2">Jakarta</option>
										<option value="3">Jogja</option>

									
									</select>
								</div>

								<button type="submit" name="Add" class="btn btn-primary">Place Order</button>
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	

	<section class="ftco-section bg-light">
		<div class="container">

			<div class="row d-flex">
				<?php
                    $counter = 1; // Initialize the counter
                    foreach ($produk as $prd) :
                    ?>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20 rounded"
							style="background-image: url('../assets/images/image_1.jpg');">
						</a>
						<div class="text p-4">
							<div class="meta mb-2">
								<div>
									<h3><?= $prd['nama_produk']; ?></h3>
								</div>
							</div>
							<div class="meta mb-2">
								<div>
									<p>Rp. <?= $prd['harga']; ?> | Stok : <?= $prd['jumlah_stok']; ?> | Kategori :
										<?= $prd['id_kategori']; ?></p>
								</div>
							</div>

							<p><?= $prd['deskripsi']; ?></p>

							<a href="<?= base_url(); ?>user/infoproduk/<?= $prd['id_produk']; ?>"
								class="btn btn-primary" style="margin-right:5px;">Order</a>
						</div>
					</div>
				</div>
				<?php endforeach ?>

			</div>
		</div>
	</section>

	<!-- <div class="col-md-12">
            <h1>Daftar Produk</h1>
            <?php if (empty($produk)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Not Found.
                </div>
            <?php endif; ?>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Ukuran</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $counter = 1; // Initialize the counter
                    foreach ($produk as $prd) :
                    ?>
                        <tr>
                            <th scope="row"><?= $counter++; ?></th>
                            <td><?= $prd['nama_produk']; ?></td>

                            <?php if ($prd['id_kategori'] == 1) : ?>
                                <td>Kucing</td>
                            <?php else : ?>
                                <td>Anjing</td>
                            <?php endif; ?>

                          
                            <td><?= $prd['harga']; ?></td>
                            <td><?= $prd['jumlah_stok']; ?></td>
                            <td><?= $prd['ukuran']; ?></td>

                            <td>
                                <a href="<?= base_url(); ?>adminpanel/infoproduk/<?= $prd['id_produk']; ?>" class="badge badge-success" style="margin-right:5px;">Info</a>
                                <a href="<?= base_url(); ?>adminpanel/editproduk/<?= $prd['id_produk']; ?>" class="badge badge-warning" style="margin-right:5px;">Edit</a>
                                <a href="<?= base_url(); ?>adminpanel/hapusproduk/<?= $prd['id_produk']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div> -->

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
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">>0813 7811 4951</span></a></li>
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

	<script src=<?php echo base_url ('assets/js/jquery.min.js');?>></script>
	<script src=<?php echo base_url ('assets/js/jquery-migrate-3.0.1.min.js');?>></script>
	<script src=<?php echo base_url ('assets/js/popper.min.js');?>></script>
	<script src=<?php echo base_url('assets/js/bootstrap.min.js');?>></script>
	<script src=<?php echo base_url('assets/js/jquery.easing.1.3.js');?>></script>
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