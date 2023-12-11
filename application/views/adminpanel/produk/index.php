<!-- page content -->
<div class="right_col" role="main">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row ">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Produk <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6">
            
            <a href="<?php base_url() ?>tambahProduk" class="btn btn-primary">Create Produk</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Search product...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">
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
                                <td>Pakan</td>
                            <?php else : ?>
                                <td>Fet&aksesoris</td>
                            <?php endif; ?>

                          
                            <td><?= $prd['harga']; ?></td>
                            <td><?= $prd['jumlah_stok']; ?></td>
                            <td><?= $prd['ukuran']; ?></td>

                            <td>
                                <a href="<?= base_url(); ?>adminpanel/infoproduk/<?= $prd['id_produk']; ?>" class="badge badge-success" style="margin-right:5px;">Info</a>
                                <a href="<?= base_url(); ?>adminpanel/editproduk/<?= $prd['id_produk']; ?>" class="badge badge-warning" style="margin-right:5px;">Edit</a>
                                <a href="<?= base_url(); ?>adminpanel/hapusproduk/<?= $prd['id_produk']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>

</div>