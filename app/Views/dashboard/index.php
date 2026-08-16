<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> - Sistem Operasional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Logistik Operasional</a>
            <div class="d-flex align-items-center text-white">
                <span class="me-3">Halo, <strong><?= session()->get('nama'); ?></strong> (<?= ucfirst(session()->get('role')); ?>)</span>
                <a href="<?= base_url('logout'); ?>" class="btn btn-outline-danger btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container my-4">
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
