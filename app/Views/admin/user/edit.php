<?php $this->extend('templates/admin/admin_layout') ?>

<?php $this->section('content') ?>
<div class="container mt-4">
    <h2 class="d-inline align-middle me-4 ">Edit User Management!</h2>

    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo route_to('user.update', $user["id"]) ?>" method="post">
                        <input class="form-control mt-4" value="<?= $user['name'] ?>" type="text" name="name">
                        <input class="form-control mt-4" value="<?= $user['email'] ?>" type="email" name="email" aria-label="Disabled input example" disabled>
                        <label class="mt-4" for="role">Pilih Level Pengguna</label>
                        <select class="form-control" name="role_id">
                            <?php foreach ($roles as $role) : ?>
                                <option value="<?= $role["id"] ?>" <?= $role["id"] == $user["role_id"] ? "selected" : ""; ?>><?= $role["role_display"] ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection() ?>