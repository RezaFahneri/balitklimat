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
    <link rel="shortcut icon" href="<?= base_url('assets'); ?>/images/logo/kementan.png" />
    <!-- icon -->
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">

</head>

<body>
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex text-center">
            <span class="text-muted text-center d-block d-sm-inline-block">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->

    <!-- sweet alert 2 -->
    <script src="<?= base_url('assets'); ?>/js/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/myscript.js"></script>


    <!-- MDBootstrap Datatables  -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/addons/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#BasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>

    <!-- table filter -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/Simple-jQuery-Dropdown-Table-Filter-Plugin-ddtf-js/ddtf.js"></script>
    <script>
        jQuery('#dtBasicExample').ddTableFilter();
    </script>

    <!-- Bootstrap Datatables  -->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url() ?>assets//DataTables/datatables.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>

    <!-- Search select option  -->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url() ?>assets/select2/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>


</body>

</html>