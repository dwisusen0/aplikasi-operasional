<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5" style="max-width: 600px;">
        <div class="card border-0 shadow-sm p-4">
            <h3 class="mb-3"><?= esc($title ?? 'Tambah Karyawan'); ?></h3>
            <form action="<?= base_url('karyawan/store'); ?>" method="post">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required>
                    <input type="text" name="created_at" value="<?= date('Y-m-d H:i:s'); ?>" hidden>
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
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
    </div>

</body>
</html>