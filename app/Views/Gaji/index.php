<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
    <div class="container px-4">
    <h3 class="mt-4"><?= $title ?></h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><?= $title ?></li>
        <li class="breadcrumb-item active"><?= $subtitle ?></li>
    </ol>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 text-end">
            <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Pencarian" aria-label="Pencarian" id="pencarian">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="mydatatable table table-bordered text-center">
            <thead>
            <tr>
                <th>GRADE</th>
                <th>GAJI</th>
            </tr>
            </thead>
        </table>
    </div>
    <?= $this->endSection(); ?>
    <?= $this->section('script'); ?>
    <script>
        var table;

        function updateDataTable() {
            table = $('.mydatatable').DataTable({
                dom:
                    "<'row'<'col-sm-6'><'col-sm-6'>>" +
                    "<'row'<'col-sm-12'rt>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                language: {
                    processing: '<div class="align-items-center bg-light d-flex p-5 shadow" style="position:fixed;margin-left:40%;top:40%;"><i class="spinner-border text-success"></i><span>&nbsp&nbspMengambil data...</span></div>'
                },
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "<?= base_url('gaji/dt_index') ?>"
                },
                columns: [
                    {
                        'data': 'grade'
                    },
                    {
                        'data': 'gaji'
                    }
                ]
            });
        }

        $(document).ready(function () {
            updateDataTable();
            $('#pencarian').keyup(function () {
                table.search($(this).val()).draw();
            });
        });
    </script>
<?= $this->endSection(); ?>