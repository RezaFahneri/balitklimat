<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div style="background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:100%" class="content-wrapper-login d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-5 mx-auto">
                        <a href="<?= base_url(); ?>daftar" class="btn btn-sm float-left"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg></i> Kembali ke <b>Beranda</b></a>
                        <div class="auth-form-light py-5 px-4 px-sm-5">
                            <div class="text-center">
                                <a title="Kembali ke beranda" class="navbar-brand" href="<?= base_url(); ?>daftar">
                                    <div class="brand-logo">
                                        <img src="<?= base_url('assets/'); ?>images/logo.png" class="img-fluid" style="width:100px" alt="logo">
                                    </div>
                                </a>
                                <h4><b>Sistem Informasi Magang</b></h4>
                                <h4><b>Balai Penelitian Agroklimat dan Hidrologi</b></h4>
                            </div>
                            <br>
                            <h6 class="font-weight-light" class="text-left" style="font-size: small; text-align:justify">Masukkan email dan kata sandi untuk masuk sebagai pegawai ataupun peserta</h6>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="pt-3" method="post" action="<?= base_url('masuk'); ?>">
                                <div class="form-group text-left">
                                    <!-- <label>
                                        <h6 class="font-weight-bold">Email</h6>
                                    </label> -->
                                    <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Masukan Email">
                                    <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group text-left">
                                    <!-- <label>
                                        <h6 class="font-weight-bold">Kata Sandi</h6>
                                    </label> -->
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control form-control-user" id="ks" name="ks" placeholder="Masukkan Kata Sandi">
                                        <!--<span class="input-group-text" id="basic-addon2">Show</span>-->
                                        <div class="input-group-append">
                                            <span id="mybutton" onclick="ks()" class="input-group-text">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <?php echo form_error('ks', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Masuk</button>
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
    <script>
        function ks() {
            var x = document.getElementById('ks').type;
            if (x == 'password') {
                document.getElementById('ks').type = 'text';
                document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                        </svg>`;
            } else {
                document.getElementById('ks').type = 'password';
                document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                        </svg>`;
            }
        }
    </script>
    <!-- endinject -->
</body>

</html>