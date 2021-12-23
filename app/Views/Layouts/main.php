<!DOCTYPE html>
<html>

<head>
    <title>Sistem-Informasi-Karyawan</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="icon.png" type="image/x-icon" />
    <?= $this->include('layouts/css'); ?>
</head>

<body class="sb-nav-fixed">
    <?= $this->include('layouts/header'); ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?= $this->include('layouts/sidebar'); ?>
        </div>
        <div id="layoutSidenav_content">
            <main class="bg-light pb-5">
                <?= $this->include('alerts'); ?>
                <?= $this->renderSection('content'); ?>
            </main>
            <?= $this->include('layouts/footer'); ?>
        </div>
    </div>
    <?= $this->include('layouts/js'); ?>
    <?= $this->renderSection('script'); ?>
</body>

</html>