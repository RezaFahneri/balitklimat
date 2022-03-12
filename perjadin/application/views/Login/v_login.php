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
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets'); ?>/images/logo.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div style="background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:100%" class="content-wrapper-login d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-5 mx-auto">
            <div class="wrapper auth-form-light text-center py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url('assets'); ?>/images/logo.png" class="img-fluid" style="width:100px" alt="logo">
              </div>
              <h4><b>Sistem Informasi Perjalanan Dinas</b></h4>
              <h4><b>Balai Penelitian Agroklimat dan Hidrologi</b></h4>
              <form class="pt-3 text-center" action="<?php echo base_url()?>login/proseslogin" method="post">
                <div class="form-group">
                  <input type="text" id='email' class="form-control form-control" id="exampleInputEmail1" placeholder="Email" name='email' autocomplete= "off" required>
                </div>
                <div class="form-group">
                  <input type="password" id='password' class="form-control form-control" id="exampleInputPassword1" placeholder="Password" name='password' required>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-success btn-md font-weight-medium auth-form-btn">LOGIN</button>
                </div></br>
                <!-- <?php
                $error = $this->session->flashdata('error');
                if (!empty($error)) {
                  echo '
                     <div class="alert alert-danger" >
                     ' . $error . ' 
                     </div>
                   ';
                }
                ?> -->
                 <div>
                  <a target="_blank" href="" class="auth-link text-black">Lupa Password?</a>
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
<script src="<?= base_url('assets'); ?>/vendors/js/vendor.bundle.base.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#email").keyup(function(){
         var format = /[`#$%^*()_+\-=\[\]{};':"\\|<>/\~]/;
            if (format.test($("#email").val()) == true) {
                $("#email").val("");
            }
      });
    });
</script>
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
</body>

</html>