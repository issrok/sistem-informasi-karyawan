<nav class="sb-sidenav accordion sb-sidenav-dark shadow-sm" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link" href="<?= base_url() ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Master Data</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                Karyawan
                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down-fill"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url('karyawan/tambah') ?>">Tambah Karyawan</a>
                    <a class="nav-link" href="<?= base_url('karyawan') ?>">Daftar Karyawan</a>
                </nav>
            </div>
            <a class="nav-link" href="<?= base_url('gaji') ?>">
                <div class="sb-nav-link-icon"><i class="bi bi-cash-stack"></i></div>
                Gaji
            </a>
        </div>
    </div>
</nav>