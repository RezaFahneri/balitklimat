<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/js/select.dataTables.min.css">
    <!-- MDBootstrap Datatables  -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/addons/DataTables/datatables.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendors/mdi/css/materialdesignicons.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets') ?>/images/logo.png" />
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">

    <!-- <link rel="stylesheet" href="<?php echo base_url() .
        'assets/css/jquery-ui.css'; ?>"> -->
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- select2 -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- select2 org -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Fullcalendar -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendors/fullcalendar/fullcalendar.min.css">
    <style>
    .data-pegawai {
        display: none;
    }
    </style>
    <!-- Sweetalert -->
    <link rel="stylesheet" href="<?= base_url(
        'assets'
    ) ?>/css/sweetalert/sweetalert2.min.css">
    <style>
    .swal2-popup {
        font-size: 1.0rem !important;
        height: 80%;
    }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo mr-5" href=""><img
                        src="<?php echo base_url(); ?>assets/images/logo.png" class="mr-2" alt="logo" <h2><b> SIM ASN</b>
                    </h2>
                </a>
                <a class="navbar-brand brand-logo-mini" href=""><img
                        src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button> -->
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <!-- <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span> -->
                            </div>
                            <!-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> -->
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <?php if (
                        $this->session->userdata('role') == 'Admin ASN'
                    ): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <h4 class="mb-0 font-weight-normal float-left dropdown-header"></b>Notifikasi</b></h4>
                            <div class="flash-data" id="flash2"
                                data-flash="<?= $this->session->flashdata(
                                    'sukses'
                                ) ?>"></div>
                            <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata(
                                'error'
                            ) ?>">
                                <?php
                                $data_notifikasi = $this->db
                                    ->select('*')
                                    ->from('data_notifikasi')
                                    ->join(
                                        'data_pegawai',
                                        'data_notifikasi.nip= data_pegawai.nip'
                                    )
                                    ->get()
                                    ->result();
                                foreach ($data_notifikasi as $n) { ?>
                                <a class="dropdown-item preview-item">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <div class="preview-thumbnail">
                                            <img
                                                src="<?php echo base_url(); ?>assets/images/foto/<?php echo $n->foto; ?>">&nbsp;&nbsp;
                                        </div>
                                        <strong><?php echo $n->nama_pegawai; ?></strong>&nbsp;
                                        <?php echo $n->pesan; ?>
                                        <?php echo tanggal_indonesia(
                                            $n->jadwal_kenaikan
                                        ); ?>
                                        <a title="Hapus Notifikasi" class="close" aria-label="Close"
                                            href="<?php echo site_url(
                                                'beranda/hapus/' .
                                                    $n->id_notifikasi
                                            ); ?>">
                                            <span aria-hidden="true">&times;</span></a>
                                </a>
                            </div>

                            <?php }
                                ?>
                        </div>
                    </li>
                    <?php endif; ?>

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img
                                src="<?php echo base_url(); ?>assets/images/foto/<?php echo $this->db
                                ->where('email', $this->session->userdata('email'))
                                ->get('data_pegawai')
                                ->row('foto'); ?>">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a href="<?php echo base_url(); ?>profil" class="dropdown-item">
                                <i class="mdi mdi-account text-primary"></i>
                                Profil
                            </a>
                            <a href="<?php echo base_url(); ?>beranda/logout" class="dropdown-item">
                                <i class="mdi mdi-power text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->

            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">

                <ul class="nav">  
                <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url(); ?>beranda">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Beranda</span>
                        </a>
                    </li>             
                    <?php if (
                        $this->session->userdata('role') == 'Admin ASN'
                    ): ?>
                     
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Data Master</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo base_url(); ?>pangkat">Pangkat</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo base_url(); ?>golongan">Golongan</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo base_url(); ?>jabatan">Jabatan</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo base_url(); ?>status_kepegawaian">Status Kepegawaian</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo base_url(); ?>divisi">Divisi</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo base_url(); ?>role_penugasan">Role &
                                        Penugasan</a>
                                </li>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php if (
                        $this->session->userdata('role') == 'Admin ASN'
                    ): ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url(); ?>data_pegawai" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Data Pegawai</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('role') == 'User'): ?>
                   
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url(
                            'biodata'
                        ); ?>" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Biodata</span>
                        </a>
                    </li>
                    
                    <?php endif; ?>
                    <?php if (
                        $this->session->userdata('role') == 'Admin ASN'
                    ): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>jadwal_kp" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="ti ti-report-analytics" style="font-size: 22px; margin-right: 8px;"></i>
                            <span class="menu-title">Jadwal Naik Pangkat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>jadwal_kgb" aria-expanded="false">
                            <i class="ti ti-report-money" style="font-size: 22px; margin-right: 8px;"></i>
                            <span class="menu-title">Jadwal Naik Gaji</span>
                            <i class="menu"></i>
                        </a>
                    </li>
                    <?php endif; ?>

                    <!-- <?//php if ($this->session->userdata('role') == 'User') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>kenaikan_pangkat" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="ti ti-report-analytics" style="font-size: 22px; margin-right: 8px;"></i>
                            <span class="menu-title">Jadwal Naik Pangkat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?//php echo base_url(); ?>kenaikan_gajiberkala" aria-expanded="false">
                            <i class="ti ti-report-money" style="font-size: 22px; margin-right: 8px;"></i>
                            <span class="menu-title">Jadwal KGB</span>
                            <i class="menu"></i>
                        </a>
                    </li>
                    <?//php endif; ?> -->
                </ul>
            </nav>