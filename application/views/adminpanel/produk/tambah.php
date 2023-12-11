<!-- page content -->
<div class="right_col" role="main">

    <div class="card">
        <div class="card-header font-weight-bold">
            Form Add Product
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" >
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama produk ">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="id_kategori"  class="form-control">
                            <option readonly> </option>
                                <?php foreach ($kategori as $ktg) : ?>
                                    <option value="<?= $ktg['id_kategori']; ?>"> <?= $ktg['nama_kategori']; ?></option>
                                

                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" placeholder="Masukkan stok">
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Masukkan ukuran">
                        </div>
                        <div class="form-group">
                            <label for="text">Images</label>
                            <div class="input-group mb-3">

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="Add" class="btn btn-primary mt-2">Add Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>