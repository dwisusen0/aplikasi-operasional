<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Logistik Operasional</a>
        <div class="d-flex align-items-center text-white">
            <span class="me-3">Halo, <strong><?= session()->get('nama'); ?></strong> (<?= ucfirst(session()->get('role')); ?>)</span>
            <a href="<?= base_url('logout'); ?>" class="btn btn-outline-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>