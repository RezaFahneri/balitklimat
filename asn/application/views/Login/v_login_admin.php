<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(
        'assets'
    ) ?>/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url(
        'assets'
    ) ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(
        'assets'
    ) ?>/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url(
        'assets'
    ) ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url(
        'assets'
    ) ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(
        'assets'
    ) ?>/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url(
        'assets'
    ) ?>/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url(
        'assets'
    ) ?>/images/logo.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div style="background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:100%"
                class="content-wrapper-login d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-5 mx-auto">
                        <div class="wrapper auth-form-light text-center py-5 px-4 px-sm-5">
                            <div class="text-left">
                                <button type="button" class="btn btn-outline-dark"
                                    onclick="window.location.href='<?php echo base_url(); ?>../../balitklimat'"><span
                                        class="ti ti-home"></span> </button>
                            </div><br>
                            <div class="brand-logo">
                                <img src="<?= base_url(
                                    'assets'
                                ) ?>/images/logo.png" class="img-fluid"
                                    style="width:100px" alt="logo">
                            </div>
                            <h4><b>Sistem Informasi Admin ASN</b></h4>
                            <h4><b>Balai Penelitian Agroklimat dan Hidrologi</b></h4>
                            <form class="pt-3 text-center" action="<?php echo base_url(); ?>login/prosesloginadmin"
                                method="post">
                                <div class="form-group">
                                    <input type="text" id='email' class="form-control form-control" placeholder="Email"
                                        name='email' autocomplete="off" required>
                                </div>
                                <div class="form-group text-left">
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
                                        <div class="input-group-append">
                                            <span id="mybutton" onclick="password()" class="input-group-text">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-success btn-md font-weight-medium auth-form-btn">LOGIN</button>
                                </div></br>
                                <p class=" text-left"><b><a style="color:red">
                                            *</a>Silahkan login untuk mengakses sistem ini</b></p><br>
                                <?php
                                $error = $this->session->flashdata('error');
                                if (!empty($error)) {
                                    echo '
                                        <div class="alert alert-danger" >
                                        ' .
                                        $error .
                                        ' 
                                        </div>
                                    ';
                                }
                                ?>
                                <div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- content-wrapper ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?= base_url(
    'assets'
) ?>/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets') ?>/js/off-canvas.js"></script>
<script src="<?= base_url('assets') ?>/js/hoverable-collapse.js"></script>
<script src="<?= base_url('assets') ?>/js/template.js"></script>
<script src="<?= base_url('assets') ?>/js/settings.js"></script>
<script src="<?= base_url('assets') ?>/js/todolist.js"></script>
<!-- endinject -->
<script>
    function password() {
        var x = document.getElementById('password').type;
        if (x == 'password') {
            document.getElementById('password').type = 'text';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                </svg>`;
        } else {
            document.getElementById('password').type = 'password';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>`;
        }
    }
</script>
</body>

</html>