<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Selamat Datang,
                            <?php echo $this->db
                                ->where(
                                    'email',
                                    $this->session->userdata('email')
                                )
                                ->get('data_pegawai')
                                ->row('nama_pegawai'); ?>
                        </h3>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata(
                            'sukses'
                        ) ?>">
                        </div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata(
                            'error'
                        ) ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($this->session->userdata('role') == 'Admin ASN'): ?>
        <div class="row text-white">
            <div class="col-sm-12 grid-margin transparent">
                <div class="row">
                    <div class="col-md-12 mb-2 stretch-card transparent">
                        <div class="card bg-warning card-body">
                            <div class="card-body-icon">
                                <i class="fa-solid fa-user-large mr-3"></i>
                            </div>
                            <h5 class="card-title text-white">TOTAL PEGAWAI</h5>
                            <div class="display-2"><b><?= $total_pegawai ?></b></div>
                        </div>
                    </div>
                </div>
                <div class="row text-white">
                    <div class="col-sm-12 grid-margin transparent">
        <div class="row">
        <div class="col">
            <div class="row">
            <div class="col">
            <div class="card card-light-danger card-body">
                <div class="card-body-icon">
                    <i class="fas fa-address-card mr-3"></i>
                </div>
                <h5 class="card-title text-white">JUMLAH PNS</h5>
                <div class="display-2"><b><?= $total_pns ?></b></div>
            </div>
            </div>
            <div class="col">
            <div class="card card-light-blue card-body">
                <div class="card-body-icon">
                    <i class="fas fa-address-card mr-3"></i>
                </div>
                <h5 class="card-title text-white">JUMLAH PNS/TB</h5>
                <div class="display-2"><b><?= $total_pnstb ?></b></div>
            </div>
            </div>
            <div class="col">
            <div class="card card-tale card-body">
                <div class="card-body-icon">
                    <i class="fas fa-address-card mr-3"></i>
                </div>
                <h5 class="card-title text-white">CPNS</h5>
                <div class="display-2"><b><?= $total_cpns ?></b></div>
            </div>
            </div>
            <div class="col">
            <div class="card card-dark-blue card-body">
                <div class="card-body-icon">
                    <i class="fas fa-address-card mr-3"></i>
                </div>
                <h5 class="card-title text-white">PPNPN</h5>
                <div class="display-2"><b><?= $total_ppnpn ?></b></div>
            </div>
            </div>
            <div class="col">
            <div class="card card-light-blue card-body">
                <div class="card-body-icon">
                    <i class="fas fa-address-card mr-3"></i>
                </div>
                <h5 class="card-title text-white">OH</h5>
                <div class="display-2"><b><?= $total_oh ?></b></div>
            </div>
            </div>
        </div>
        
        </div>
       
        <?php endif; ?>

        <?php if ($this->session->userdata('role') == 'User'): ?>
        <div class="row text-white">
            <div class="col-sm-12 grid-margin transparent">
                <div class="row">
                    <div class="col-md-12 mb-12 stretch-card transparent">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading"><b>Jadwal Kenaikan Pangkat!</b></h4>
                            <?php if (
                                $this->db
                                    ->where(
                                        'nip',
                                        $this->session->userdata('nip')
                                    )
                                    ->get('data_jadwal_naik_pangkat')
                                    ->row('jadwal_kp') == null
                            ) {
                                echo 'Mohon maaf.. Saat ini jadwal Kenaikan pangkat anda belum dijadwalkan';
                            } else {
                                echo 'Kenaikan Pangkat anda akan di laksanakan pada tanggal ';
                                echo tanggal_indonesia(
                                    $this->db
                                        ->where(
                                            'nip',
                                            $this->session->userdata('nip')
                                        )
                                        ->get('data_jadwal_naik_pangkat')
                                        ->row('jadwal_kp')
                                );
                                echo '   . Kirim notifikasi kepada admin untuk memberi peringatan kenaikan pangkat dengan menekan tombol dibawah ini';
                            } ?>
                            <hr>
                            <form method="POST" enctype="multipart/form-data"
                                action="<?php echo base_url(
                                    'dashboard/tambah_aksi'
                                ); ?>">
                                <div class="form-group">
                                    <!-- <label><b>Nama Pegawai<a style="color:red"> *</a></b></label> -->
                                    <input style="color:dimgray" type="hidden"
                                        value="<?php echo $this->db
                                            ->where(
                                                'email',
                                                $this->session->userdata(
                                                    'email'
                                                )
                                            )
                                            ->get('data_pegawai')
                                            ->row('nip'); ?>"
                                        name="nip" autocomplete="off" class="form-control" required>

                                    <?php echo form_error(
                                        'nip',
                                        '<div class="text-small text-danger"></div>'
                                    ); ?>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="pesan"><b>Pesan</a></b></label></br> -->
                                    <input style="color:dimgray" type="hidden"
                                        value="Waktunya naik pangkat pada tanggal <?php echo tanggal_indonesia(
                                            $this->db
                                                ->where(
                                                    'nip',
                                                    $this->session->userdata(
                                                        'nip'
                                                    )
                                                )
                                                ->get(
                                                    'data_jadwal_naik_pangkat'
                                                )
                                                ->row('jadwal_kp')
                                        ); ?>"
                                        name="pesan" autocomplete="off" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="jenis_notif"><b>Jenis notifikasi</a></b></label></br> -->
                                    <input type="hidden" style="color:dimgray" value="notif_kp" name="jenis_notif"
                                        autocomplete="off" class="form-control" required>
                                </div>
                                <?php if (
                                    $this->db
                                        ->where(
                                            'nip',
                                            $this->session->userdata('nip')
                                        )
                                        ->get('data_jadwal_naik_pangkat')
                                        ->row('jadwal_kp') == true
                                ) { ?>
                                <button class="btn btn-success btn-sm" type="submit"><i class="ti ti-bell"></i>Ingatkan
                                    Admin Kenaikan Pangkat</button>
                                <?php } else {echo ' ';} ?>
                                <!-- <button type="submit" class="btn btn-success">Submit</a></button>&nbsp &nbsp -->

                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-12 stretch-card transparent">
                        <div class="alert alert-warning" role="alert">
                            <h4 class="alert-heading"><b>Jadwal Kenaikan Gaji Berkala!</b></h4>
                            <?php if (
                                $this->db
                                    ->where(
                                        'nip',
                                        $this->session->userdata('nip')
                                    )
                                    ->get('data_jadwal_gaji_berkala')
                                    ->row('jadwal_kgb') == null
                            ) {
                                echo 'Mohon maaf.. Saat ini jadwal Kenaikan gaji berkala anda belum dijadwalkan';
                            } else {
                                echo 'Kenaikan Gaji Berkala anda akan di laksanakan pada tanggal ';
                                echo tanggal_indonesia(
                                    $this->db
                                        ->where(
                                            'nip',
                                            $this->session->userdata('nip')
                                        )
                                        ->get('data_jadwal_gaji_berkala')
                                        ->row('jadwal_kgb')
                                );
                                echo '   . Kirim notifikasi kepada admin untuk memberi peringatan kenaikan gaji berkala dengan menekan tombol dibawah ini';
                            } ?>

                            <hr>

                            <form method="POST" enctype="multipart/form-data"
                                action="<?php echo base_url(
                                    'dashboard/tambah_aksi'
                                ); ?>">
                                <div class="form-group">
                                    <input style="color:dimgray" type="hidden"
                                        value="<?php echo $this->db
                                            ->where(
                                                'email',
                                                $this->session->userdata(
                                                    'email'
                                                )
                                            )
                                            ->get('data_pegawai')
                                            ->row('nip'); ?>"
                                        name="nip" autocomplete="off" class="form-control" required>
                                    <?php echo form_error(
                                        'nip',
                                        '<div class="text-small text-danger"></div>'
                                    ); ?>
                                </div>
                                <div class="form-group">
                                    <input style="color:dimgray" type="hidden"
                                        value="Waktunya naik gaji pada tanggal <?php echo tanggal_indonesia(
                                            $this->db
                                                ->where(
                                                    'nip',
                                                    $this->session->userdata(
                                                        'nip'
                                                    )
                                                )
                                                ->get(
                                                    'data_jadwal_gaji_berkala'
                                                )
                                                ->row('jadwal_kgb')
                                        ); ?>"
                                        name="pesan" autocomplete="off" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" style="color:dimgray" value="notif_kgb" name="jenis_notif"
                                        autocomplete="off" class="form-control" required>
                                </div>
                                <?php if (
                                    $this->db
                                        ->where(
                                            'nip',
                                            $this->session->userdata('nip')
                                        )
                                        ->get('data_jadwal_gaji_berkala')
                                        ->row('jadwal_kgb') == true
                                ) { ?>
                                <button class="btn btn-success btn-sm" type="submit"><i class="ti ti-bell"></i>Ingatkan
                                    Admin Kenaikan Gaji Berkala</button>
                                <?php } else {echo ' ';} ?>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div><!-- content-wrapper ends -->
</div><!-- partial:partials/_footer.html -->