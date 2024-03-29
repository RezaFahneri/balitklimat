<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/mdi/css/materialdesignicons.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets'); ?>/images/logo/kementan.png" />
  <!-- sweetalert2 -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/sweetalert2/sweetalert2.min.css">
  <style>
    .swal2-popup {
      font-size: 1.0rem !important;
      height: 100%;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div style="background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:100%" class="content-wrapper-login d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="wrapper auth-form-light text-center py-5 px-4 px-sm-5">
              <div class="flash-data" id="flash3" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
              <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
              <div class="flash-data" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
              <a data-toggle="tooltip" title="Portal Internal Balitklimat" style="margin-top: -40px;margin-bottom:10px;margin-left:-430px;text-align:left" class="btn btn-sm btn-success text-left" href="<?php echo base_url() ?>.."><i class="mdi mdi-home" style="font-size:22px;color:white"></i></a>
              <div class="brand-logo">
                <img src="<?= base_url('assets'); ?>/images/logo/kementan.png" style="width: 90px;" alt="logo">
              </div>
              <h4><b>Sistem Inventaris Barang Kantor</b></h4>
              <h4><b>Balai Penelitian Agroklimat dan Hidrologi</b></h4>
              <form class="pt-3 text-center" action="<?php echo base_url() ?>login/proseslogin" method="post">
                <div class="form-field">
                  <input type="email" id='email' class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name='email' required>
                </div>
                <div class="form-field">
                  <input type="password" id='password' class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name='password' required">
                </div></br>
                <p class=" text-left"><b><a style="color:red">
                      *</a>Silahkan login untuk mengakses sistem ini</b></p>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                </div></br>
                <div>
                  <a href="<?php echo base_url() ?>login/loginadmin" class="text-black">Login sebagai Admin?</a>
                </div>
                <!-- <div>
                  <a href="#" class="text-black">Lupa Password?</a>
                </div> -->
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
<script src="<?= base_url('assets'); ?>/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets'); ?>/js/off-canvas.js"></script>
<script src="<?= base_url('assets'); ?>/js/hoverable-collapse.js"></script>
<script src="<?= base_url('assets'); ?>/js/template.js"></script>
<script src="<?= base_url('assets'); ?>/js/settings.js"></script>
<script src="<?= base_url('assets'); ?>/js/todolist.js"></script>
<!-- endinject -->

<!-- sweet alert 2 -->
<script src="<?= base_url('assets'); ?>/js/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/myscript.js"></script>
</body>

</html>