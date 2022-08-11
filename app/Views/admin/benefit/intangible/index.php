<?php $this->extend('templates/admin/admin_layout') ?>

<?php $this->section('content') ?>
<div class="container-fluid mt-4">
    <h2 class="d-inline align-middle me-4">Intangible Benefit</h2>
    <a class="d-inline align-middle" href="<?php echo route_to('intangible.create') ?>">
        <button class="btn btn-outline-primary btn-sm float-right">Tambah Data</button>
    </a>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                Intangible benefit atau manfaat tidak berwujud merupakan manfaat yang sulit diukur dalam bentuk uang.
                Manfaat tidak berwujud dapat diukur dengan menggunakan penaksiran.
            </div>
        </div>
        <div class="card shadow">
            
            <?php if (isset($_SESSION['alert_success'])) : ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo ($_SESSION['alert_success']) ?>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION['alert'])) : ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo ($_SESSION['alert']) ?>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo ($_SESSION['success']) ?>
                </div>
            <?php endif ?>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead style="background-color: #cceeff;">
                            <th>No.</th>
                            <th>Manfaat</th>
                            <th>Kuantitas</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Total</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($benefits as $index => $benefit) : ?>
                                <tr>
                                    <td><?= ($index + 1) ?></td>
                                    <td><?= $benefit["benefit"] ?></td>
                                    <td><?= number_format($benefit["quantity"]) ?></td>
                                    <td><?= $benefit["unit_name"] ?></td>
                                    <td>Rp<?= number_format($benefit["unit_price"], 0, ',', '.') ?></td>
                                    <td>Rp<?= number_format($benefit["total"], 0, ',', '.') ?></td>
                                    <td><?= $benefit["description"] ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="<?php echo route_to('intangible.edit', $benefit["id"]) ?>"><button class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square fa-fw"></i> Edit</button></a>
                                                <form class="d-inline" method="post" action="<?php echo route_to('intangible.delete', $benefit["id"]) ?>" onclick="return confirm('Delete data?');">
                                                    <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can fa-fw"></i> Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection() ?>