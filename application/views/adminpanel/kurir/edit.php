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
                        <input type="hidden" name="id_kurir" value="<?= $kurir['id_kurir']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama_kurir" name="nama_kurir" value="<?= $kurir['nama_kurir']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">ID Wilayah</label>
                            <input type="text" class="form-control" id="id_wilayah" name="id_wilayah" value="<?= $kurir['id_wilayah']; ?> " readonly>
                        </div>
                        
                        <button type="submit" name="edit" class="btn btn-primary mt-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>