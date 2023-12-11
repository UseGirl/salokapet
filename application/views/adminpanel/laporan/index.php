<!-- page content -->
<div class="right_col" role="main">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row ">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data order <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    

    <div class="row">

        <div class="col-md-12">
            <h1>Daftar Order</h1>
            <?php if (empty($order)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Not Found.
                </div>
            <?php endif; ?>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Tanggal Transaksi</th>
                        <th scope="col">Total</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $counter = 1; // Initialize the counter
                    foreach ($order as $odr) :
                    ?>
                        <tr>
                            <th scope="row"><?= $counter++; ?></th>
                            <?php
                            
                            foreach ($produk as $prd) :
                            ?>
                             <?php if ($prd['id_produk'] == $odr['id_produk']) : ?>
                           
                                <td><?= $prd['nama_produk']; ?></td>
                             <?php endif; ?>


                            <?php endforeach; ?>
                            <td><?= $odr['tanggal_transaksi']; ?></td>
                          
                            <td><?= $odr['total']; ?></td>
                            <td><?= $odr['harga']; ?></td>
                            <td><?= $odr['status']; ?></td>
                            <td>
                            <?php if($odr['status'] != 'Approved') : ?>
                                <a href="<?= base_url(); ?>adminpanel/approve/<?= $odr['id_order']; ?>" class="badge badge-success" style="margin-right:5px;">Approve</a>
                                
                            </td>
                            <?php else : ?>
                                
                                <a href="#" class="badge badge-primary" style="margin-right:5px;" disabled>Order Completed</a>
                               
                            </td>
                                <?php endif; ?>
                                
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>

</div>