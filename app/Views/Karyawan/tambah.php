<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
    <div class="container px-4">
        <h3 class="mt-4"><?= $title ?></h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><?= $title ?></li>
            <li class="breadcrumb-item active"><?= $subtitle ?></li>
        </ol>
        <div class="row">
            <form action="<?= base_url('karyawan/store') ?>" method="POST">
                <div class="card bg-white shadow-sm rounded-0">
                    <div class="card-body">
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="col-form-label-sm">NIP</label>
                                <input class="form-control" name="inputNip" id="inputNip" type="text" placeholder="Ketikan NIP anda" value="<?= set_value('inputNip') ?>"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="mb-3">
                                    <label class="col-form-label-sm">Nama</label>
                                    <input class="form-control" name="inputNama" id="inputNama" type="text" placeholder="Ketikan nama anda" value="<?= set_value('inputNama') ?>"/>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label class="col-form-label-sm">Gender</label>
                                    <select id="inputGender" name="inputGender" class="form-select" aria-label=".form-select-lg example">
                                        <option value="">Pilih gender</option>
                                        <option <?= set_select('inputGender', 'M') ?> value="M">Male</option>
                                        <option <?= set_select('inputGender', 'F') ?> value="F">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="col-form-label-sm">Tanggal Lahir</label>
                                    <div class="input-group">
                                        <input class="form-control mydatepicker" id="inputTglLahir" name="inputTglLahir" type="text" placeholder="dd-mm-yyy" value="<?= set_value('inputTglLahir') ?>"/>
                                        <span class="input-group-text"><span class="bi bi-calendar-fill text-secondary"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="col-form-label-sm">Tanggal Masuk</label>
                                    <div class="input-group">
                                        <input class="form-control mydatepicker" id="inputTglMasuk" name="inputTglMasuk" type="text" placeholder="dd-mm-yyy" value="<?= set_value('inputTglMasuk') ?>"/>
                                        <span class="input-group-text"><span class="bi bi-calendar-fill text-secondary"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="col-form-label-sm">Grade</label>
                                    <select id="inputGrade" name="inputGrade" class="form-select" aria-label=".form-select-lg example">
                                        <option value="">Pilih grade</option>
                                        <?php foreach ($gaji as $item): ?>
                                            <option <?= set_select('inputGrade', $item['grade']) ?> value="<?= $item['grade'] ?>"><?= $item['grade'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="col-3 col-form-label-sm">Gaji</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><b class="text-secondary">Rp.</b></span>
                                        <input class="form-control bg-light" id="inputGaji" name="inputGaji" type="text" value="<?= set_value('inputGaji')?>" readonly/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end bg-white py-3">
                        <button type="submit" class="px-3 btn btn-primary btn-sm">Simpan</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
    <script>
        $(document).ready(function () {
            var data = <?= json_encode($gaji)?>;
            $('#inputGrade').on('change', function () {
                gaji = data.find(i => i.grade === $('#inputGrade').val());
                $('#inputGaji').val(gaji.gaji);
            });
        });
    </script>
<?= $this->endSection(); ?>