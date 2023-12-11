<!-- page content -->
<div class="right_col" role="main">

    <div class="card">
        <div class="card-header font-weight-bold">
            Form Create Admin
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
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        </div>
                        <button type="submit" name="Add" class="btn btn-primary mt-2">Create Admin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>