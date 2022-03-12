<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <a title="Kembali"
                                    class="btn btn-sm btn-success" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('perjalanan_dinas') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>
                        <br><br><h3 class="m-0 font-weight-bold text-primary">Tambah Data Perjalanan Dinas</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('perjalanan_dinas/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <label><b>Kode Kegiatan</b></label></br>
                                        <select name="kode_kegiatan" id="kode_kegiatan" class="form-control" required>
                                            <option value="">--Pilih Kode Kegiatan--</option>
                                            <?php foreach ($kode_kegiatan as $row) { ?>
                                                <option value="<?php echo $row->kode_kegiatan; ?>"><?php echo $row->kode_kegiatan . " | " . $row->judul_kegiatan; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Dalam Rangka</b></label>
                                        <input type="text" name="dalam_rangka" class="form-control" required>
                                        <?php echo form_error('dalam_rangka', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Diajukan Oleh</b></label></br>
                                        <input readonly value="<?php echo $data_pegawai['nama_pegawai'] ?>" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Verifikator</b></label></br>
                                        <select title="Pilih Verifikator Perjalanan Dinas" name="nip_verifikator" id="nip_verifikator" class="form-control" required>
                                            <option value="">--Pilih Verifikator Perjalanan Dinas--</option>
                                            <?php foreach ($nip as $row) { ?>
                                                <option value="<?php echo $row->nip; ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Kuasa Pengguna Anggaran</b></label></br>
                                        <select title="Pilih Kuasa Pengguna Anggaran" name="nip_kpa" id="nip_verifikator" class="form-control" required>
                                            <option value="">--Pilih Kuasa Pengguna Anggaran--</option>
                                            <?php foreach ($nip_kpa as $row) { ?>
                                                <option value="<?php echo $row->nip; ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Pejabat Pembuat Komitmen</b></label></br>
                                        <select title="Pilih Pejabat Pembuat Komitmen" name="nip_ppk" id="nip_ppk" class="form-control" required>
                                            <option value="">--Pilih Pejabat Pembuat Komitmen--</option>
                                            <?php foreach ($nip_ppk as $row) { ?>
                                                <option value="<?php echo $row->nip; ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Bendahara</b></label></br>
                                        <select title="Pilih Bendahara" name="nip_bendahara" id="nip_bendahara" class="form-control" required>
                                            <option value="">--Pilih Bendahara--</option>
                                            <?php foreach ($nip_bendahara as $row) { ?>
                                                <option value="<?php echo $row->nip; ?>"><?php echo $row->nip . " | " . $row->nama_pegawai . " | " . $row->jabatan; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label><b>TTD surat tugas oleh:</b></label></br>
                                        <label style="border:3px solid #e7e7e7" onclick="kepBalai()" >Kepala Balai</label>
                                        <label style="border:3px solid #e7e7e7;margin-left:3px"onclick="pltBalai()">Plt. Kepala Balai</label>
                                    </div> -->


                                    <div class="form-group">
                                        <label><b>Tanggal Pengajuan</b></label>
                                        <input type="date" name="tanggal_pengajuan" class="form-control" required>
                                        <?php echo form_error('tanggal_pengajuan', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>No. Surat Tugas</b></label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div style="width:130px;color:dimgray" class="input-group-text">/KP.440/I.8.3/</div>
                                            </div>
                                            <input type="hidden" name="kode_surat" value="/KP.440/I.8.3/" class="form-control">
                                            <input type="text" name="no_surat_tugas" placeholder="mm/yyyy" class="form-control" required>
                                            <?php echo form_error('no_surat_tugas', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label><b>MAK</b></label></br>
                                        <select class="form-control" name="kode_mak">
                                            <option value="">--Pilih MAK--</option>
                                            <?php foreach ($kode_mak as $row) { ?>
                                                <option value="<?php echo $row->kode_mak; ?>"><?php echo $row->kode_mak . ' | ' . $row->judul_mak; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Jenis Pengajuan</b></label></br>
                                        <select class="form-control" name="jenis_pengajuan">
                                            <option value="">--Pilih Jenis Pengajuan--</option>
                                            <option value="LS">LS</option>
                                            <option value="GU">GU</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Jenis Perjalanan Dinas</b></label></br>
                                        <select class="form-control" name="jenis_perjalanan_dinas">
                                            <option value="">--Pilih Jenis Perjalanan Dinas--</option>
                                            <option value="Menginap">Menginap</option>
                                            <option value="Tidak Menginap">Tidak Menginap</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Berangkat Dari Kota</b></label></br>
                                        <select name="id_kota_asal" id="id_kota_asal" class="form-control" required>
                                            <option value="">--Pilih Kota Asal--</option>
                                            <?php foreach ($id_kota as $row) { ?>
                                                <option value="<?php echo $row->id_kota; ?>"><?php echo $row->kota . ', ' . $row->nama_provinsi; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <a href="<?php echo base_url() ?>kota/tambah"><label style="margin-bottom:30px;margin-top:-25px;color:blue">Klik disini<Label></a><label>&nbsp untuk menambahkan kota</label>
                                    <div class="form-group">
                                        <label><b>Kota Tujuan</b></label></br>
                                        <select name="id_kota_tujuan" id="id_kota_tujuan" class="form-control" required>
                                            <option value="">--Pilih Kota Tujuan--</option>
                                            <?php foreach ($id_kota as $row) { ?>
                                                <option value="<?php echo $row->id_kota; ?>"><?php echo $row->kota . ', ' . $row->nama_provinsi; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Kendaraan</b></label></br>
                                        <select class="form-control" name="kendaraan">
                                            <option value="">--Pilih jenis kendaraan--</option>
                                            <option value="Dinas">Dinas</option>
                                            <option value="Umum">Umum</option>
                                            <option value="Dinas dan Umum">Dinas dan Umum</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Tanggal Berangkat</b></label>
                                        <input type="date" name="tanggal_berangkat" class="form-control" required>
                                        <?php echo form_error('tanggal_berangkat', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Tanggal Kembali</b></label>
                                        <input type="date" name="tanggal_kembali" class="form-control" required>
                                        <?php echo form_error('tanggal_kembali', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group" id="kb">
                                        <label><b>TTD surat tugas oleh Kepala Balai</b></label></br>
                                        <select title="Pilih Kepala Balai" name="nip_kepala_balai" id="nip_kepala_balai" class="form-control">
                                            <option value="null">--Pilih Kepala Balai--</option>
                                            <?php foreach ($nip_kepala_balai as $row) { ?>
                                                <option value="<?php echo $row->nip; ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group" id="pb">
                                        <label><b>TTD surat tugas oleh Plh. Kepala Balai</b></label></br>
                                        <select title="Pilih Plh. Kepala Balai" name="nip_plt_kb" id="nip_plt_kb" class="form-control">
                                            <option value="null">--Pilih Plh Kepala Balai--</option>
                                            <?php foreach ($nip_plt_kb as $row) { ?>
                                                <option value="<?php echo $row->nip; ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input value="<?php echo $data_pegawai['nip'] ?>" type="hidden" name="nip_pumk" class="form-control">
                                    </div>

                                    <button type="submit" class="btn btn-success">Submit</button>&nbsp &nbsp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>