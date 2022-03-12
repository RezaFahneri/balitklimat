<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Kirim Pemberitahuan Kenaikan Pangkat</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data"
                                    action="<?php echo base_url('notifikasi/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <!-- <label><b>Nama Pegawai<a style="color:red"> *</a></b></label> -->
                                        <input style="color:dimgray" type="hidden"
                                            value="<?php echo $this->db->where('email', $this->session->userdata('email'))->get('data_pegawai')->row('nip'); ?>"
                                            name="nip" autocomplete="off" class="form-control" required>

                                        <?php echo form_error('nip', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="pesan"><b>Pesan</a></b></label></br>
                                        <input style="color:dimgray" type="text-area"
                                            value="Waktunya naik pangkat pada tanggal <?php echo $this->db->where('nip', $this->session->userdata('nip'))->get('data_jadwal_naik_pangkat')->row('jadwal_kp') ;?>"
                                            name="pesan" autocomplete="off" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="jenis_notif"><b>Jenis notifikasi</a></b></label></br> -->
                                        <input type="hidden" style="color:dimgray" type="text-area" value="notif_kp"
                                            name="jenis_notif" autocomplete="off" class="form-control" required>
                                    </div>

                                    <button type="submit" class="btn btn-success">Submit</a></button>&nbsp &nbsp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>