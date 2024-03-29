<?php $this->extend('templates/admin/admin_layout') ?>

<?php $this->section('content') ?>
<div class="container-fluid mt-4">
    <h2 class="d-inline align-middle me-4 ">Cost Value!</h2>
    <a class="d-inline align-middle" href="<?php echo route_to('cost_value.create') ?>">
        <button class="btn btn-outline-primary btn-sm float-right">Tambah Nilai Biaya</button>
    </a>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                Nilai biaya terhitung dari tahun ke-0 dan seterusnya. Biaya tahun ke 0 merupakan nilai dari Project Value.
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
                            <th>Nama Biaya (tahun ke- )</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $jumlah = 0;
                            foreach ($values as $index => $value) :
                                $jumlah += $value["price"];?>
                                <tr>
                                    <td><?= ($index + 1) ?></td>
                                    <td><?= $value["name_cost"] ?></td>
                                    <td>Rp<?= number_format($value["price"], 0, ',', '.') ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="<?php echo route_to('cost_value.edit', $value["id"]) ?>"><button class="btn btn-success btn-sm">
                                                    <i class="fa-solid fa-pen-to-square fa-fw"></i> Edit</button></a>
                                                    <form class="d-inline" method="post" action="<?php echo route_to('cost_value.delete', $value["id"]) ?>" onclick="return confirm('Delete data?');">
                                                    <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can fa-fw"></i> Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tr>
                            <td colspan="2" style="text-align: center;"><b>Jumlah</b></td>
                            <td><b>Rp<?php echo number_format($jumlah, 0, ',', '.') ?></b></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection() ?>