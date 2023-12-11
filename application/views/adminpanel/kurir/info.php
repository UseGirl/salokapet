<!-- page content -->
<div class="right_col" role="main">

    <div class="container">
        <div class="row mt-3">
            <div class="col md6">
                <div class="card">
                    <div class="card-header">
                       Kurir Information
                    </div>
                    <div class="card-body">
                        <!-- Replace the <a> tag with <img> tag -->
                        
                        <h5 class="card-title">Nama : <?= $kurir['nama_kurir']; ?></h5>
                        <p class="card-text">ID Wilayah : <?= $kurir['id_wilayah']; ?></p>
                       
                       
                        <!-- Use base_url() to generate the correct URL for the link -->
                        <a href="<?= base_url('adminpanel/kurir'); ?>" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
