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
                            <input type="text" class="form-control" id="nama_kurir" name="nama_kurir" placeholder="Masukkan nama kurir ">
                        </div>
                       

                        <div class="form-group">
                            <label for="nama">ID Wilayah</label>
                            <input type="text" class="form-control" id="id_wilayah" name="id_wilayah" placeholder="Masukkan id_wilayah ">
                        </div>
                        
                        <button type="submit" name="Add" class="btn btn-primary mt-2">Add Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>