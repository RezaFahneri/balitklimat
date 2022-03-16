<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Portal Internal Balitklimat
    </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="landing-page-balitklimat/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="landing-page-balitklimat/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="landing-page-balitklimat/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="landing-page-balitklimat/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="landing-page-balitklimat/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="landing-page-balitklimat/assets/js/select.dataTables.min.css">
    <link rel="stylesheet" href="landing-page-balitklimat/assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="landing-page-balitklimat/assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="landing-page-balitklimat/assets/images/logo/kementan.png" />
    <!-- icon -->
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">
    <link rel="stylesheet" href="landing-page-balitklimat/assets/pages/icons/mdi.html">
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="landing-page-balitklimat/assets/css/sweetalert2/sweetalert2.min.css">
    <style>
        .swal2-popup {
            font-size: 1.0rem !important;
            height: 100%;
        }
    </style>
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="landing-page-balitklimat/assets/DataTables/datatables.css">
    <!-- search select option -->
    <link rel="stylesheet" type="text/css" href="landing-page-balitklimat/assets/select2/css/select2.min.css">
</head>

<body>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div style="background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:100%" class="content-wrapper-login d-flex align-items-center auth px-0">

            <div class="container-scroller">
                <img src="landing-page-balitklimat/assets/images/logo/kementan.png" style="width: 100px; position:absolute;text-align: center;" alt=""></img>
                <h2>Portal Internal</h2>
                <h3>balai penelitian agroklimat dan hidrologi</h3>

                <div class="row-page col-md-12" style="margin-top: -30px;position:fixed">
                    <div class="card-page">
                        <div class="box-page">
                            <div class="content-page">
                                <i style="margin-left: -3px;" class="mdi mdi-book-open-variant"></i>
                                <h3 style="margin-left: 1.5px;">Buku Tamu</h3>
                                <a style="margin-bottom:10px" href="<?php echo base_url(); ?>bukutamu" target="_blank">Buka</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-page">
                        <div class="box-page">
                            <div class="content-page">
                                <i style="margin-left: -3px;" class="mdi mdi-clipboard-text"></i>
                                <h3 style="margin-left: -17px;">Laporan Magang</h3>
                                <a style="margin-bottom:10px" href="<?php echo base_url(); ?>magang" target="_blank">Buka</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-page">
                        <div class="box-page">
                            <div class="content-page">
                                <i style="margin-left: -3px;" class="mdi mdi-screwdriver"></i>
                                <h3 style="margin-left: -7px;">Inventaris Lab</h3>
                                <a style="margin-bottom:10px" href="<?php echo base_url(); ?>inventarislab" target="_blank">Buka</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-page col-md-12" style="margin-top: 400px;position:fixed">
                    <div class="card-page">
                        <div class="box-page">
                            <div class="content-page">
                                <i style="margin-left: -2px;" class="mdi mdi-account-card-details"></i>
                                <h3 style="margin-left: 9px;">SIM ASN</h3>
                                <a style="margin-bottom:10px" href="<?php echo base_url(); ?>asn" target="_blank">Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-page">
                        <div class="box-page">
                            <div class="content-page">
                                <i style="margin-left: -1px;" class="mdi mdi-car"></i>
                                <h3 style="margin-left: -17px;">Perjalanan Dinas</h3>
                                <a style="margin-bottom:10px" href="<?php echo base_url(); ?>perjadin" target="_blank">Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-page">
                        <div class="box-page">
                            <div class="content-page">
                                <i style="margin-left: -1px;" class="mdi mdi-desktop-tower"></i>
                                <h3 style="margin-left: -18px;">Inventaris Barang</h3>
                                <a style="margin-bottom:10px" href="<?php echo base_url(); ?>inventarisbarang" target="_blank">Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-page">
                        <div class="box-page">
                            <div class="content-page">
                                <i style="margin-left: -1px;" class="mdi mdi-gift"></i>
                                <h3 style="margin-left: -20px;">Bahan Diseminasi</h3>
                                <a style="margin-bottom:10px" href="<?php echo base_url(); ?>bahandiseminasi" target="_blank">Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-page">
                        <div class="box-page">
                            <div class="content-page">
                                <i style="margin-left: -3px;" class="mdi mdi-file-document"></i>
                                <h3 style="margin-left: 7px;">Disposisi</h3>
                                <a style="margin-bottom:10px" href="<?php echo base_url(); ?>disposisi" target="_blank">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- plugins:js -->
        <script src="landing-page-balitklimat/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="landing-page-balitklimat/assets/vendors/chart.js/Chart.min.js"></script>
        <script src="landing-page-balitklimat/assets/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="landing-page-balitklimat/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="landing-page-balitklimat/assets/js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="landing-page-balitklimat/assets/js/off-canvas.js"></script>
        <script src="landing-page-balitklimat/assets/js/hoverable-collapse.js"></script>
        <script src="landing-page-balitklimat/assets/js/template.js"></script>
        <script src="landing-page-balitklimat/assets/js/settings.js"></script>
        <script src="landing-page-balitklimat/assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="landing-page-balitklimat/assets/js/dashboard.js"></script>
        <script src="landing-page-balitklimat/assets/js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
</body>

</html>