<body>
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand brand-logo " href="<?= base_url('masuk') ?>">
                <img src="<?= base_url('assets/'); ?>images/logo-magang.png" alt="logo-magang" height="40" width="auto">
            </a>
        </div>
    </nav>
    <img src="<?= base_url('assets/'); ?>images/balitklimats.jpg" class="img-responsive" alt="Balitklimat" width="100%" height="30%">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 mx-0">
                <div class="col-lg-12 mx-auto">
                    <div class="auth-form-light text-left py-2 px-4 px-sm-4 mt-5">
                        <h3 class="font-weight-bold mb-10">Tambah Laporan Akhir</h3>
                        <?= $this->session->flashdata('message'); ?>
                        <?= form_open_multipart('tambah_lap_akhir/simpan', 'class="mt-4"'); ?>
                        <div class="form-group">
                            <input type="hidden" name="id_pm" value="<?= $id_pm; ?>">
                        </div>
                        <div class="form-group">
                            <label>
                                <h6 class="font-weight-bold">Nama untuk Sertifikat<i style="color:red">*</i></h6>
                                <h6 class="font-weight-light">Boleh disingkat</h6>
                            </label>
                            <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="judullapak">Email untuk Sertifikat<i style="color:red">*</i> <br> Untuk mendapatkan sertifikat | Menggunakan @gmail</label>
                            <input type="text" class="form-control form-control-user" id="email_pm" name="email_pm" value="<?= $cekstatus->email_pm; ?>">
                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>
                                <h6 class="font-weight-bold">Judul<i style="color:red">*</i></h6>
                            </label>
                            <input type="text" class="form-control form-control-user" id="judullapak" name="judullapak" value="<?= set_value('judulapak'); ?>">
                            <?= form_error('judullapak', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>
                                <h6 class="font-weight-bold">Abstrak<i style="color:red">*</i></h6>
                            </label>
                            <textarea class="form-control" id="abstraklapak" name="abstraklapak" rows="13"><?= set_value('isilap'); ?></textarea>
                            <?= form_error('abstraklapak', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>
                                <h6 class="font-weight-bold">Dokumen<i style="color:red">*</i></h6>
                                <h6 class="font-weight-light">File dalam bentuk doc/docx/pdf | Maks 3Mb</h6>
                            </label>
                            <input type="file" class="form-control form-control-lg" id="doklapak" name="doklapak">
                            <?= form_error('doklapak', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="mt-3 col-12">
                            <button onclick="return confirm('Yakin simpan data?')" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url('assets/'); ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets/'); ?>js/off-canvas.js"></script>
    <script src="<?= base_url('assets/'); ?>js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets/'); ?>js/template.js"></script>
    <script src="<?= base_url('assets/'); ?>js/settings.js"></script>
    <script src="<?= base_url('assets/'); ?>js/todolist.js"></script>
    <!-- endinject -->
</body>