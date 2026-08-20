<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="card border-0 shadow-sm p-4">
    <h3 class="mb-3"><?= esc($title ?? 'Tambah Karyawan'); ?></h3>
    <form action="<?= base_url('karyawan/store'); ?>" method="post">
        <div class="mb-3">
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
            <input type="text" name="created_at" value="<?= date('Y-m-d H:i:s'); ?>" hidden>
        </div>
        <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Contoh: Operator Excavator / Staff" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Role Akses</label>
            <select name="role" class="form-select" required>
                <option value="staff">Staff</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan Karyawan</button>
        <a href="<?= base_url('karyawan'); ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
<?= $this->endSection(); ?>