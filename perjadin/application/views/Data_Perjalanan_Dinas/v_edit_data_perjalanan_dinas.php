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
                        <br><br><h3 class="m-0 font-weight-bold text-primary">Edit Data Perjalanan Dinas</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <?php foreach ($update_perjalanan_dinas as $pd) { ?>
                                    <form method="POST" action="<?php echo base_url() ?>perjalanan_dinas/update">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="hidden" name="id_perjalanan_dinas" class="form-control" value="<?php echo $pd->id_perjalanan_dinas ?>" name="kota" required>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Kode Kegiatan</b></label></br>
                                                    <?php $kg1 = $pd->kode_kegiatan ?>
                                                    <select name="kode_kegiatan" id="kode_kegiatan" class="form-control" required>
                                                        <option value="">--Pilih Kode Kegiatan--</option>
                                                        <?php foreach ($kg as $row) : ?>
                                                            <option <?php if ($kg1 == $row->kode_kegiatan) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->kode_kegiatan ?>"><?php echo $row->kode_kegiatan . " | " . $row->judul_kegiatan; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Jenis Kegiatan</b></label>
                                                    <input value="<?php echo $pd->jenis_keg ?>" readonly type="text" name="jenis_kegiatan" class="form-control">
                                                    <?php echo form_error('jenis_kegiatan', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Dalam Rangka</b></label>
                                                    <input value="<?php echo $pd->dalam_rangka ?>" type="text" name="dalam_rangka" class="form-control" required>
                                                    <?php echo form_error('dalam_rangka', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Diajukan Oleh</b></label></br>
                                                    <input readonly value="<?php echo $data_pegawai['nama_pegawai'] ?>" type="text" name="jenis_kegiatan" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Verifikator</b></label></br>
                                                    <?php $nv1 = $pd->nip_verifikator ?>
                                                    <select title="Pilih Verifikator Perjalanan Dinas" name="nip_verifikator" id="nip_verifikator" class="form-control" required>
                                                        <option value="">--Pilih Verifikator Perjalanan Dinas--</option>
                                                        <?php foreach ($nip as $row) : ?>
                                                            <option <?php if ($nv1 == $row->nip) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->nip ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Kuasa Pengguna Anggaran</b></label></br>
                                                    <?php $kp1 = $pd->nip_kpa ?>
                                                    <select title="Pilih Kuasa Pengguna Anggaran" name="nip_kpa" id="nip_verifikator" class="form-control" required>
                                                        <option value="">--Pilih Kuasa Pengguna Anggaran--</option>
                                                        <?php foreach ($nip_kpa as $row) : ?>
                                                            <option <?php if ($kp1 == $row->nip) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->nip ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Pejabat Pembuat Komitmen</b></label></br>
                                                    <?php $ppk1 = $pd->nip_ppk ?>
                                                    <select title="Pilih Pejabat Pembuat Komitmen" name="nip_ppk" id="nip_ppk" class="form-control" required>
                                                        <option value="">--Pilih Pejabat Pembuat Komitmen--</option>
                                                        <?php foreach ($nip_ppk as $row) : ?>
                                                            <option <?php if ($ppk1 == $row->nip) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->nip ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Bendahara</b></label></br>
                                                    <?php $bendahara = $pd->nip_bendahara ?>
                                                    <select title="Pilih Bendahara" name="nip_bendahara" id="nip_bendahara" class="form-control" required>
                                                        <option value="">--Pilih Bendahara--</option>
                                                        <?php foreach ($nip_bendahara as $row) : ?>
                                                            <option <?php if ($bendahara == $row->nip) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->nip ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label><b>Tanggal Pengajuan</b></label>
                                                    <input value="<?php echo $pd->tanggal_pengajuan ?>" type="date" name="tanggal_pengajuan" class="form-control" required>
                                                    <?php echo form_error('tanggal_pengajuan', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>No. Surat Tugas</b></label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div style="width:130px;color:dimgray" class="input-group-text">/KP.440/I.8.3/</div>
                                                        </div>
                                                        <input type="hidden" name="kode_surat" value="/KP.440/I.8.3/" class="form-control">
                                                        <input type="text" name="no_surat_tugas" <?php $no = $pd->no_surat_tugas;
                                                                                                    $no_surat_fix   = substr($no, 14,); ?> value="<?php echo $no_surat_fix ?>" placeholder="mm/yyyy" class="form-control" required>
                                                        <?php echo form_error('no_surat_tugas', '<div class="text-small text-danger"></div>') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>MAK</b></label></br>
                                                    <?php $mak1 = $pd->kode_mak ?>
                                                    <select class="form-control" name="kode_mak">
                                                        <option value="">--Pilih MAK--</option>
                                                        <?php foreach ($mak as $row) : ?>
                                                            <option <?php if ($mak1 == $row->kode_mak) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->kode_mak ?>"><?php echo $row->kode_mak . ' | ' . $row->judul_mak; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Jenis Pengajuan</b></label></br>
                                                    <?php $jp = $pd->jenis_pengajuan ?>
                                                    <select class="form-control" name="jenis_pengajuan">
                                                        <option value="">--Pilih Jenis Pengajuan--</option>
                                                        <option <?php if ($jp == 'LS') {
                                                                    echo 'selected="selected"';
                                                                } ?> value="LS">LS</option>
                                                        <option <?php if ($jp == 'GU') {
                                                                    echo 'selected="selected"';
                                                                } ?> value="GU">GU</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Jenis Perjalanan Dinas</b></label></br>
                                                    <?php $jpd = $pd->jenis_perjalanan_dinas ?>
                                                    <select class="form-control" name="jenis_perjalanan_dinas">
                                                        <option value="">--Pilih Jenis Perjalanan Dinas--</option>
                                                        <option <?php if ($jpd == 'Menginap') {
                                                                    echo 'selected="selected"';
                                                                } ?> value="Menginap">Menginap</option>
                                                        <option <?php if ($jpd == 'Tidak Menginap') {
                                                                    echo 'selected="selected"';
                                                                } ?> value="Tidak Menginap">Tidak Menginap</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Berangkat Dari Kota</b></label></br>
                                                    <?php $ka1 = $pd->kota ?>
                                                    <select name="id_kota_asal" id="id_kota_asal" class="form-control" required>
                                                        <option value="">--Pilih Kota Asal--</option>
                                                        <?php foreach ($kota as $row) : ?>
                                                            <option <?php if ($ka1 == $row->kota) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->id_kota ?>"><?php echo $row->kota . ', ' . $row->nama_provinsi; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <a href="<?php echo base_url() ?>kota/tambah"><label style="margin-bottom:30px;margin-top:-25px;color:blue">Klik disini<Label></a><label>&nbsp untuk menambahkan kota</label>
                                                <div class="form-group">
                                                    <label><b>Kota Tujuan</b></label></br>
                                                    <?php $kt1 = $pd->kota_tujuan ?>
                                                    <select name="id_kota_tujuan" id="id_kota_tujuan" class="form-control" required>
                                                        <option value="">--Pilih Kota Tujuan--</option>
                                                        <?php foreach ($kota as $row) : ?>
                                                            <option <?php if ($kt1 == $row->kota) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->id_kota ?>"><?php echo $row->kota . ', ' . $row->nama_provinsi; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Kendaraan</b></label></br>
                                                    <?php $k = $pd->kendaraan ?>
                                                    <select class="form-control" name="kendaraan">
                                                        <option value="">--Pilih jenis kendaraan--</option>
                                                        <option <?php if ($k == 'Dinas') {
                                                                    echo 'selected="selected"';
                                                                } ?> value="Dinas">Dinas</option>
                                                        <option <?php if ($k == 'Umum') {
                                                                    echo 'selected="selected"';
                                                                } ?> value="Umum">Umum</option>
                                                        <option <?php if ($k == 'Dinas dan Umum') {
                                                                    echo 'selected="selected"';
                                                                } ?> value="Dinas dan Umum">Dinas dan Umum</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Tanggal Berangkat</b></label>
                                                    <input value="<?php echo $pd->tanggal_berangkat ?>" type="date" name="tanggal_berangkat" class="form-control" required>
                                                    <?php echo form_error('tanggal_berangkat', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Tanggal Kembali</b></label>
                                                    <input value="<?php echo $pd->tanggal_kembali ?>" type="date" name="tanggal_kembali" class="form-control" required>
                                                    <?php echo form_error('tanggal_kembali', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group" id="kb">
                                                    <label><b>TTD surat tugas oleh Kepala Balai</b></label>
                                                    <?php $nkb = $pd->nip_kepala_balai ?>
                                                    <select title="Pilih Kepala Balai" name="nip_kepala_balai" id="nip_kepala_balai" class="form-control">
                                                        <option value="null">--Pilih Kepala Balai--</option>
                                                        <?php foreach ($nip_kepala_balai as $row) : ?>
                                                            <option <?php if ($nkb == $row->nip) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->nip ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="pb">
                                                    <label><b>TTD surat tugas oleh Plh. Kepala Balai</b></label>
                                                    <?php $npkb = $pd->nip_plt_kb ?>
                                                    <select title="Pilih Plh. Kepala Balai" name="nip_plt_kb" id="nip_plt_kb" class="form-control">
                                                        <option value="null">--Pilih Plh Kepala Balai--</option>
                                                        <?php foreach ($nip_plt_kb as $row) : ?>
                                                            <option <?php if ($npkb == $row->nip) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->nip ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input value="<?php echo $data_pegawai['nip'] ?>" type="hidden" name="nip_pumk" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input value="<?php echo $data_pegawai['nip'] ?>" type="hidden" name="nip_pumk" class="form-control">
                                                </div>
                            </div>
                            </td>
                            </tr>
                            <button type="submit" class="btn btn-success mr-2">Submit</a></button>&nbsp &nbsp
                            <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
                            </form>
                        <?php } ?>
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