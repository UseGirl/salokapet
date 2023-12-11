<!-- page content -->
<div class="right_col" role="main">

    <div class="container">
        <div class="row mt-3">
            <div class="col md6">
                <div class="card">
                    <div class="card-header">
                       Produk Information
                    </div>
                    <div class="card-body">
                        <!-- Replace the <a> tag with <img> tag -->
                        <img class="custom-small-image rounded mb-4" src="<?= base_url('assets/product/' . $produk['gambar']); ?>" alt="Product Image">
                        <h5 class="card-title"><?= $produk['nama_produk']; ?></h5>
                        <p class="card-text"><?= $produk['deskripsi']; ?></p>
                        <p class="card-text">Rp. <?= $produk['harga']; ?></p>
                        <p class="card-text">Ukuran: <?= $produk['ukuran']; ?></p>
                        <p class="card-text">Stok: <?= $produk['jumlah_stok']; ?></p>
                       
                        <!-- Use base_url() to generate the correct URL for the link -->
                        <a href="<?= base_url('adminpanel/produk'); ?>" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-small-image {
            width: 200px; /* Adjust the width as needed */
            height: auto; /* Maintain the aspect ratio */
        }
    </style>

</div>
