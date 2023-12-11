<!-- page content -->
<div class="right_col" role="main">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row ">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data detail_order <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
   

    <div class="row">

        <div class="col-md-12">
            <h1>Daftar Detail Order</h1>
            <?php if (empty($detail_order)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Not Found.
                </div>
            <?php endif; ?>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Order</th>
                        <th scope="col">Id Produk</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Harga</th>
                       
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $counter = 1; // Initialize the counter
                    foreach ($detail_order as $odr) :
                    ?>
                        <tr>
                            <th scope="row"><?= $counter++; ?></th>
                            <td><?= $odr['id_order']; ?></td>
                            <td><?= $odr['id_produk']; ?></td>
                            <td><?= $odr['jumlah']; ?></td>
                            <td><?= $odr['total']; ?></td>
                            <td><?= $odr['harga']; ?></td>
                          
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>

</div>