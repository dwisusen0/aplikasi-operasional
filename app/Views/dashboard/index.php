<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="row mb-4">
    <div class="col">
        <h3 class="fw-bold">Selamat Datang di Sistem Operasional</h3>
        <p class="text-muted">Jabatan: <?= session()->get('jabatan'); ?></p>
    </div>
</div>

<!-- Info Cards -->
<div class="row g-3">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm bg-primary text-white p-3">
            <div class="card-body">
                <h5 class="card-title">Total Karyawan</h5>
                <h2 class="display-5 fw-bold mb-0"><?= $total_karyawan; ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card border-0 shadow-sm bg-success text-white p-3">
            <div class="card-body">
                <h5 class="card-title">Total Barang Logistik</h5>
                <h2 class="display-5 fw-bold mb-0"><?= $total_barang; ?></h2>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>