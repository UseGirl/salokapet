<!-- page content -->
<div class="right_col" role="main">

    <div class="card">
        <div class="card-header font-weight-bold">
            Form Edit Produk
        </div>
        <div class="card-body">
            <?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
            </div>
             <?php endif; ?>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post">
                        <input type="hidden" name="id_produk" value="<?= $produk['id_produk']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $produk['nama_produk']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" ><?= $produk['deskripsi']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Harga</label>
                            <input type="text" class="form-control" id="Harga" name="harga" value="<?= $produk['harga']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Stok</label>
                            <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" value="<?= $produk['jumlah_stok']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="text">Ukuran</label>
                            <input type="text" class="form-control" id="ukuran" name="ukuran" value="<?= $produk['ukuran']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="text">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $produk['gambar']; ?>">
                            <input type="hidden" class="form-control" id="gambar" name="gambar2" value="<?= $produk['gambar']; ?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary mt-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>