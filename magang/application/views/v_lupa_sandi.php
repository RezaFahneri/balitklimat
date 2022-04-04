<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div style="background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:100%" class="content-wrapper-login d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-5 mx-auto">
                        <a href="<?= base_url(); ?>masuk" class="btn btn-sm float-left"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg></i> Kembali ke <b>Halaman Masuk</b></a>
                        <div class="auth-form-light py-5 px-4 px-sm-5">
                            <div class="text-center">
                                <a title="Kembali halaman masuk" class="navbar-brand" href="<?= base_url(); ?>masuk">
                                    <div class="brand-logo">
                                        <img src="<?= base_url('assets/'); ?>images/logo.png" class="img-fluid" style="width:100px" alt="logo">
                                    </div>
                                </a>
                                <h4><b>Sistem Informasi Magang</b></h4>
                                <h4><b>Balai Penelitian Agroklimat dan Hidrologi</b></h4>
                                <h4><b>Lupa Sandi untuk Peserta</b></h4>
                                <!-- <h4><b>Lupa Kata Sandi</b></h4> -->
                            </div>
                            <br>
                            <h6 class="font-weight-light" class="text-left" style="font-size: small; text-align:justify">Masukkan email untuk mendapatkan link ubah kata sandi | Apabila anda adalah pegawai, maka ubah kata sandi melalui sistem ASN</h6>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="pt-3" method="post" action="<?= base_url('masuk/lupa_sandi'); ?>">
                                <div class="form-group text-left">
                                    <!-- <label>
                                        <h6 class="font-weight-bold">Email</h6>
                                    </label> -->
                                    <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Masukan Email">
                                    <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

</html>