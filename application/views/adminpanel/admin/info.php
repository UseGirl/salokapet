<!-- page content -->
<div class="right_col" role="main">

    <div class="container">
        <div class="row mt-3">
            <div class="col md6">
                <div class="card">
                    <div class="card-header">
                       User Information
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $admin['nama']; ?></h5>
                        <p class="card-text"><?= $admin['email']; ?></p>
                        <p class="card-text"><?= $admin['no_telp']; ?></p>
                       
                        <a href="<?php base_url(); ?>../admin" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>