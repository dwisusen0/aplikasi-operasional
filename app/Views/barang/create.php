<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container my-5" style="max-width: 600px;">
    <div class="card border-0 shadow-sm p-4">
        <h3 class="mb-3"><?= $title; ?></h3>
        <form action="<?= base_url('barang/store'); ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Satuan (Pcs, Box, Liter, dll)</label>
                <input type="text" name="satuan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <textarea name="keterangan" class="form-control" rows="2"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan Data</button>
            <a href="<?= base_url('barang'); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>