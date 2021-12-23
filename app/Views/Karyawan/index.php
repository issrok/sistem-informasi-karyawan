<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
    <div class="container px-4">
    <h3 class="mt-4"><?= $title ?>
        <a id="btnTambah" href="<?= base_url('karyawan/tambah') ?>" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Tambah Karyawan</a>
    </h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><?= $title ?></li>
        <li class="breadcrumb-item active"><?= $subtitle ?></li>
    </ol>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-filter"></i>Tanggal Masuk</span>
                        <input class="form-control mydatepicker" id="inputTglDari" name="inputTglDari" type="text" placeholder="Dari"/>
                        <input class="form-control mydatepicker" id="inputTglKe" name="inputTglKe" type="text" placeholder="Ke"/>
                    </div>
                </div>
            </div>
        </div>
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
                <th>NIP</th>
                <th>NAMA</th>
                <th>GENDER</th>
                <th>TGL LAHIR</th>
                <th>TGL MASUK</th>
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
                    url: "<?= base_url('karyawan/dt_index') ?>"
                },
                columns: [
                    {
                        'data': 'nip'
                    },
                    {
                        'data': 'nama'
                    },
                    {
                        'data': 'gender'
                    },
                    {
                        'data': 'tgl_lahir'
                    },
                    {
                        'data': 'tgl_masuk'
                    },
                    {
                        'data': 'grade'
                    },
                    {
                        'data': 'gaji'
                    }
                ]
            });
        }

        function reloadTable() {
            if (($("#inputTglDari").val() !== '') && ($("#inputTglKe").val() !== '')) {
                console.log("<?= base_url('karyawan/dt_index')?>" + "?tgldari=" + $("#inputTglDari").val() + "&tglke=" + $("#inputTglKe").val());
                table.ajax.url("<?= base_url('karyawan/dt_index')?>" + "?tgldari=" + $("#inputTglDari").val() + "&tglke=" + $("#inputTglKe").val());
                table.ajax.reload();
            }
        }

        $(document).ready(function () {
            updateDataTable();
            $('#pencarian').keyup(function () {
                table.search($(this).val()).draw();
            });
            $("#inputTglDari").on("change", function () {
                reloadTable();
            });
            $("#inputTglKe").on("change", function () {
                reloadTable();
            });
        });
    </script>
<?= $this->endSection(); ?>