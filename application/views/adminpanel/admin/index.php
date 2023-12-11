<!-- page content -->
<div class="right_col" role="main">

    <?php if($this->session->flashdata('flash') ) : ?>
    <div class="row ">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Admin <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6">
            <a href="<?php base_url()?>tambahAdmin" class="btn btn-primary">Create Admin</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Search user...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">
            <h1>Daftar Admin</h1>
            <?php if(empty($admin)) : ?>
            <div class="alert alert-danger" role="alert">
                Data Not Found.
            </div>
            <?php endif; ?>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
        $counter = 1; // Initialize the counter
        foreach($admin as $adm) : 
        ?>
                    <tr>
                        <th scope="row"><?= $counter++; ?></th>
                        <td><?= $adm['nama']; ?></td>
                        <td><?= $adm['email']; ?></td>
                        <td><?= $adm['no_telp']; ?></td>
                        <td><?= $adm['password']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>adminpanel/infoadmin/<?= $adm['id_admin']; ?>"
                                class="badge badge-success" style="margin-right:5px;">Info</a>
                            <a href="<?= base_url(); ?>adminpanel/editadmin/<?= $adm['id_admin']; ?>"
                                class="badge badge-warning" style="margin-right:5px;">Edit</a>
                            <a href="<?= base_url(); ?>adminpanel/hapusadmin/<?= $adm['id_admin']; ?>"
                                class="badge badge-danger"
                                onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>

</div>