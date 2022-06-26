<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Selamat Datang,
                            <?php echo $this->db->where('email',$this->session->userdata('email') )->get('data_pegawai') ->row('nama_pegawai'); ?>
                        </h3>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses') ?>">
                        </div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error') ?>">
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
                <h5 class="card-title text-white"> PNS</h5>
                <div class="display-2"><b><?= $total_pns ?></b></div>
            </div>
            </div>
            <div class="col">
            <div class="card card-light-blue card-body">
                <div class="card-body-icon">
                    <i class="fas fa-address-card mr-3"></i>
                </div>
                <h5 class="card-title text-white"> PNS/TB</h5>
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
        <br>
        <div class="row">
        <div class="col-sm-6 grid-margin">
            <div class="card card-dark-blue card-body">
                <h5 class="card-title text-white">Kalender Jadwal Kenaikan Pangkat</h5>
                <div id="calendar" style="height:100%; width:100%" style="font-size:2px"></div>
            </div>
            </div>
            <div class="col-sm-6 grid-margin">
            <div class="card card-dark-blue card-body">
                <h5 class="card-title text-white">Kalender Jadwal Kenaikan Gaji Berkala</h5>
                <div id="calendar1" style="height:100%; width:100%" style="font-size:2px"></div>
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
                    <div class="card bg-warning card-body">
                            <div class="card-body-icon">
                               <i class="fa-light fa-chart-line-up"></i>
                            </div>
                            <h5 class="card-title text-white">Jadwal Kenaikan Pangkat !</h5>
                            <?php if (
                                $this->db->where('nip', $this->session->userdata('nip')) ->get('data_jadwal_naik_pangkat')->row('jadwal_kp') == null) {
                                echo 'Informasi jadwal kenaikan pangkat hanya diperuntukkan bagi pegawai dengan jabatan PNS';
                            } else {
                                echo 'Kenaikan Pangkat anda akan di laksanakan pada tanggal ';
                                echo tanggal_indonesia($this->db->where('nip',$this->session->userdata('nip')) ->get('data_jadwal_naik_pangkat')->row('jadwal_kp'));
                                echo '   . Kirim notifikasi kepada admin untuk memberi peringatan kenaikan pangkat dengan menekan tombol dibawah ini';
                            } ?>
                            <hr>
                            <form method="POST" action="<?php echo base_url('beranda/tambah_aksi'); ?>">
                                <div>
                                    <input  type="hidden" value="<?php echo $this->db->where('email', $this->session->userdata('email'))
                                            ->get('data_pegawai')->row('nip'); ?>" name="nip" class="form-control">
                                </div>
                                <div>
                                    <input type="hidden" value="Waktunya naik pangkat pada tanggal " name="pesan" class="form-control">
                                </div>
                                <div>
                                <input type="hidden" value="<?= $this->db->where('nip',$this->session->userdata('nip'))
                                        ->get('data_jadwal_naik_pangkat')->row('jadwal_kp') ?>"  name="jadwal_kenaikan" autocomplete="off" class="form-control">
                                </div>
                                <div>
                                    <!-- <label for="jenis_notif"><b>Jenis notifikasi</a></b></label></br> -->
                                <input type="hidden"  value="notif_kp" name="jenis_notif" autocomplete="off" class="form-control" required>
                                </div>
                                <?php if (
                                    $this->db->where('nip',$this->session->userdata('nip'))
                                        ->get('data_jadwal_naik_pangkat')->row('jadwal_kp') == true) { ?>
                                <button class="btn btn-success btn-sm" type="submit"><i class="ti ti-bell"></i>Ingatkan
                                    Admin Kenaikan Pangkat</button>
                                    <a class="btn btn-dark btn-sm" type="submit" href="<?php echo base_url('pdf/surat_pangkat')?>"><i class="ti ti-file"></i>Surat Keterangan Kenaikan Pangkat</a>

                                <?php } else {echo ' ';} ?>
                                <!-- <button type="submit" class="btn btn-success">Submit</a></button>&nbsp &nbsp -->
                            </form>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12 mb-12 stretch-card transparent">
                    <div class="card bg-info card-body">
                            <div class="card-body-icon">
                               <i class="fa-light fa-chart-line-up"></i>
                            </div>
                            <h5 class="card-title text-white">Jadwal Kenaikan Gaji Berkala !</h5>

                            <?php if (
                                $this->db->where('nip',$this->session->userdata('nip'))
                                    ->get('data_jadwal_gaji_berkala')->row('jadwal_kgb') == null
                            ) {
                                echo 'Informasi jadwal kenaikan gaji berkala hanya diperuntukkan bagi pegawai dengan jabatan PNS';
                            } else {
                                echo 'Kenaikan Gaji Berkala anda akan di laksanakan pada tanggal ';
                                echo tanggal_indonesia($this->db->where('nip', $this->session->userdata('nip'))
                                        ->get('data_jadwal_gaji_berkala')->row('jadwal_kgb'));
                                echo '   . Kirim notifikasi kepada admin untuk memberi peringatan kenaikan gaji berkala dengan menekan tombol dibawah ini';
                            } ?>
                            <hr>
                            <form method="POST" enctype="multipart/form-data"
                                action="<?php echo base_url('beranda/tambah_aksi'); ?>">
                                <div >
                                    <input  type="hidden" value="<?php echo $this->db->where( 'email',$this->session->userdata('email' ))
                                            ->get('data_pegawai')->row('nip'); ?>" name="nip" autocomplete="off" class="form-control" required>
                                    <?php echo form_error('nip','<div class="text-small text-danger"></div>'); ?>
                                </div>
                                <div >
                                    <input type="hidden"
                                        value="Waktunya naik gaji pada tanggal"  name="pesan" autocomplete="off" class="form-control">
                                </div>
                                <div>
                                <input type="hidden"
                                    value="<?= $this->db->where('nip',$this->session->userdata('nip'))
                                        ->get('data_jadwal_gaji_berkala')->row('jadwal_kgb') ?>"  name="jadwal_kenaikan" autocomplete="off" class="form-control">
                                </div>
                                <div >
                                    <input type="hidden" value="notif_kgb" name="jenis_notif"
                                        autocomplete="off" class="form-control">
                                </div>
                                <?php if (
                                    $this->db->where('nip',$this->session->userdata('nip'))
                                        ->get('data_jadwal_gaji_berkala')->row('jadwal_kgb') == true) { ?>
                                <button class="btn btn-success btn-sm" type="submit"><i class="ti ti-bell"></i>Ingatkan
                                    Admin Kenaikan Gaji Berkala</button>
                                <a class="btn btn-dark btn-sm" href="<?php echo base_url('pdf/surat_gaji')?>" type="submit"><i class="ti ti-file"></i>Surat Keterangan Kenaikan Gaji Berkala</a>

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
<script>
// membuat jquery
document.addEventListener('DOMContentLoaded', function() {
    $('.date-picker').datepicker();
    $('#calendar').fullCalendar({
        editable: false,
        eventLimit: true, // allow "more" link when too many events
        header: {
            defaultDate: moment().format('DD-MM-YYYY'),
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        events: '<?php echo base_url(); ?>kalender_kp.php',
    });

});
</script>
<script>
// membuat jquery
document.addEventListener('DOMContentLoaded', function() {
    $('.date-picker').datepicker();
    $('#calendar1').fullCalendar({
        editable: false,
        eventLimit: true, // allow "more" link when too many events
        header: {
            defaultDate: moment().format('YYYY-MM-DD'),
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        events: '<?php echo base_url(); ?>kalender_kgb.php',
    });

});
</script>