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
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/mdi/css/materialdesignicons.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets'); ?>/images/logo/kementan.png" />
    <!-- icon -->
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/pages/icons/mdi.html">
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/sweetalert2/sweetalert2.min.css">
    <style>
        .swal2-popup {
            font-size: 1.0rem !important;
            height: 100%;
        }
    </style>
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/DataTables/datatables.css">
    <!-- search select option -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/select2/css/select2.min.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="padding: 0 0 0 5px;">
                <a class="navbar-brand brand-logo" href="<?php echo base_url(); ?>dashboard"><img src="<?= base_url('assets'); ?>/images/LogoInventarisbarang2.png" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav navbar-nav-right">
                    <div class="profile_info my-auto">
                        <p style="margin:1px;"><?php echo $this->db->where('email', $this->session->userdata('email'))->get('data_pegawai')->row('nama_pegawai'); ?></p>
                    </div>&nbsp;&nbsp;
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <?php if ($this->session->userdata('logged_in') == true) { ?>
                                <img src="<?php echo base_url() ?>../asn/assets/images/foto/<?php echo $this->db->where('email', $this->session->userdata('email'))->get('data_pegawai')->row('foto') ?>" class="img-circle profile_img" alt="profile" />
                            <?php } else { ?>
                                <img src="<?php echo base_url() ?>assets/images/upload/default.png" class="img-circle profile_img" alt="profile" />
                            <?php } ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a href="<?php echo base_url() ?>profil" class="dropdown-item">
                                <i class="mdi mdi-account"></i>
                                Detail Profil
                            </a>
                            <a id="logout" class="dropdown-item" href="<?php echo base_url(); ?>dashboard/logout">
                                <i class="ti ti-logout"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="<?= base_url('assets'); ?>/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="<?= base_url('assets'); ?>/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="<?= base_url('assets'); ?>/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="<?= base_url('assets'); ?>/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="<?= base_url('assets'); ?>/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="<?= base_url('assets'); ?>/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav" style="padding-right: -10px;">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>dashboard">
                            <i class="mdi mdi-home menu-icon" style="font-size: 20px;"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('role') == "Admin Inventaris") { ?>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="master">
                                <i class="mdi mdi-database menu-icon" style="font-size: 20px"></i>
                                <span class="menu-title">Data Master</span>
                                <i class="menu-arrow" style="margin-left: 40%;"></i>
                            </a>
                            <div class="collapse" id="master">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>Jenis_barang">Jenis Barang</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>Satuan_barang">Satuan Barang</a></li>
                                </ul>
                            </div>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>stok_barang" aria-expanded="false">
                            <i class="mdi mdi-clipboard-text menu-icon" style="font-size: 20px"></i>
                            <span class="menu-title">Data Barang</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#data" aria-expanded="false" aria-controls="master">
                            <i class="mdi mdi-export menu-icon" style="font-size: 20px; margin-left: 2px;"></i>
                            <span class="menu-title" style="margin-left: -2px;">Data Peminjaman</span>
                            <i class="menu-arrow" style="margin-left: 17%;"></i>
                        </a>
                        <div class="collapse" id="data">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>pinjam_barang">Peminjaman Barang</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>riwayat_peminjaman">Riwayat Peminjaman</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>perbaikan_barang" aria-expanded="false">
                            <i class="mdi mdi-settings-box menu-icon" style="font-size: 20px;"></i>
                            <span class="menu-title">Perbaikan Barang</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#kendaraan" aria-expanded="false" aria-controls="master">
                            <i class="mdi mdi-car menu-icon" style="font-size: 20px; margin-left: 2px;"></i>
                            <span class="menu-title" style="margin-left: -2px;">Kendaraan</span>
                            <i class="menu-arrow" style="margin-left: 45%;"></i>
                        </a>
                        <div class="collapse" id="kendaraan">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>kendaraan">Data Kendaraan</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>penggunaan_mobil">Penggunaan Mobil</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>


            <!-- plugins:js -->
            <script src="<?= base_url('assets'); ?>/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="<?= base_url('assets'); ?>/vendors/chart.js/Chart.min.js"></script>
            <script src="<?= base_url('assets'); ?>/vendors/datatables.net/jquery.dataTables.js"></script>
            <script src="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
            <script src="<?= base_url('assets'); ?>/js/dataTables.select.min.js"></script>

            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="<?= base_url('assets'); ?>/js/off-canvas.js"></script>
            <script src="<?= base_url('assets'); ?>/js/hoverable-collapse.js"></script>
            <script src="<?= base_url('assets'); ?>/js/template.js"></script>
            <script src="<?= base_url('assets'); ?>/js/settings.js"></script>
            <script src="<?= base_url('assets'); ?>/js/todolist.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page-->
            <script src="<?= base_url('assets'); ?>/js/dashboard.js"></script>
            <script src="<?= base_url('assets'); ?>/js/Chart.roundedBarCharts.js"></script>
            <!-- End custom js for this page-->
</body>

</html>