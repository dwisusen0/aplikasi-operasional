<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3><?= $title; ?></h3>
    <a href="<?= base_url('barang/create'); ?>" class="btn btn-primary btn-sm">+ Tambah Barang</a>
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
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Satuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider text-uppercase">
                    <?php $no = 1; ?>
                    <?php foreach ($barang as $row): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['kode_barang']; ?></td>
                            <td><?= $row['nama_barang']; ?></td>
                            <td><?= $row['stok']; ?></td>
                            <td><?= $row['satuan']; ?></td>
                            <td>
                                <a href="<?= base_url('barang/delete/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>