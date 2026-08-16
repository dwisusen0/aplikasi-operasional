<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Operasional</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-login {
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>
<body>

    <div class="card card-login p-4">
        <div class="text-center mb-4">
            <h4 class="fw-bold text-primary">Aplikasi Operasional</h4>
            <p class="text-muted small">Masuk menggunakan akun karyawan/admin</p>
        </div>

        <!-- Notification Flashdata Alert -->
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('error'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('login/process'); ?>" method="POST">
            <?= csrf_field(); ?>
            
            <div class="mb-3">
                <label for="nama" class="form-label fw-semibold">Nama Karyawan / Admin</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh: Administrator Utama" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 mt-2 fw-semibold">Login Masuk</button>
        </form>

        <div class="text-center mt-4">
            <small class="text-muted">&copy; <?= date('Y'); ?> Logistik Operasional</small>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
