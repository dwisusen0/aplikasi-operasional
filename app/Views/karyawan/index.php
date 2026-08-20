<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3><?= $title; ?></h3>
    <a href="<?= base_url('karyawan/create'); ?>" class="btn btn-primary btn-sm">+ Tambah Karyawan</a>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
<?php endif; ?>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Jabatan</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($karyawan as $row): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td class="text-capitalize"><?= $row['nama']; ?></td>
                            <td><?= $row['username']; ?></td>
                            <td class="text-capitalize"><?= $row['jabatan']; ?></td>
                            <td><span class="badge bg-secondary"><?= ucfirst($row['role']); ?></span></td>
                            <td>
                                <a href="<?= base_url('karyawan/delete/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus karyawan ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>