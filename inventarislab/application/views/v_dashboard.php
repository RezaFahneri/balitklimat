<body>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                    <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <?php if ($this->session->userdata('logged_in') == true) { ?>
                            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                <h4 class="font-weight-normal mb-0">Halo, <?php echo $this->db->where('email', $this->session->userdata('email'))->get('data_pegawai')->row('nama_pegawai'); ?> !</h4></br>
                                <h3 class="font-weight-bold">Balai Agroklimat dan Hidrologi</h3>
                                <h3 class="font-weight-bold">Kementerian Pertanian Republik Indonesia</h3>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->userdata('logged_in') == false) { ?>
                            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                <h4 class="font-weight-normal mb-0">Selamat Datang !</h4></br>
                                <h3 class="font-weight-bold">Balai Agroklimat dan Hidrologi</h3>
                                <h3 class="font-weight-bold">Kementerian Pertanian Republik Indonesia</h3>
                            </div>
                        <?php } ?>
                        <div class="col-12 col-xl-4">
                            <div class="justify-content-end d-flex">
                                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                    <button class="btn btn-sm btn-light bg-white" type="button" aria-haspopup="true" aria-expanded="true" disabled>
                                        <i>
                                            <p id="date">
                                            </p>
                                            <script>
                                                document.getElementById("date").innerHTML = Date();
                                            </script>
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="mb-4 font-weight-bold text-success text-uppercase">Total Data Alat</div>
                                    <div class="fs-30 mb-2" style="font-size: 40px;"><?= $total_alat; ?>
                                        <i class="mdi mdi-bulletin-board text-gray-300" style="margin-left: 130px;font-size:45px;color:darkgrey"></i>
                                    </div>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="mb-4 font-weight-bold text-primary text-uppercase">Total Stok Alat</div>
                                    <div class="fs-30 mb-2" style="font-size: 40px;"><?= $total_stok; ?>
                                        <i class="mdi mdi-note-text text-gray-300" style="margin-left: 110px;font-size:45px;color:darkgrey"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="mb-4 font-weight-bold text-warning text-uppercase">Total Peminjam</div>
                                    <div class="fs-30 mb-2" style="font-size: 40px;"><?= $peminjam; ?>
                                        <i class="mdi mdi-account text-gray-300" style="margin-left: 160px;font-size:45px;color:darkgrey"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="mb-4 font-weight-bold text-danger text-uppercase">Total Alat dipinjam</div>
                                    <div class="fs-30 mb-2" style="font-size: 40px;"><?= $alat_pinjam; ?>
                                        <i class="mdi mdi-folder-move text-gray-300" style="margin-left: 160px;font-size:45px;color:darkgrey"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
</body>

</html>