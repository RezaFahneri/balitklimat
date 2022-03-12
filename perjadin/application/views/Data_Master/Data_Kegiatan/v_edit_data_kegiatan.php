<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <a title="Kembali"
                                    class="btn btn-sm btn-success" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('kegiatan') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>
                        <br><br><h3 class="m-0 font-weight-bold text-primary">Edit Data Kegiatan</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <?php foreach ($update_kegiatan as $keg) { ?>
                                    <form method="POST" action="<?php echo base_url() ?>kegiatan/update">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label><b>Kode Kegiatan</b></label>
                                                    <input readonly type="text" name="kode_kegiatan" value="<?php echo $keg->kode_kegiatan ?>" class="form-control">
                                                    <?php echo form_error('kode_kegiatan', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Judul Kegiatan</b></label>
                                                    <input type="text" name="judul_kegiatan" value="<?php echo $keg->judul_kegiatan ?>" class="form-control" required>
                                                    <?php echo form_error('judul_kegiatan', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Jenis Kegiatan</b></label></br>
                                                    <?php $jenis_kegiatan1 = $keg->jenis_keg ?>
                                                    <select name="id_jenis_keg" id="id_jenis_keg" class="form-control" required>
                                                        <option value="">--Pilih Jenis Kegiatan--</option>
                                                        <?php foreach ($jenis_kegiatan as $row) : ?>
                                                            <option <?php if ($jenis_kegiatan1 == $row->jenis_keg) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->id_jenis_keg ?>"><?php echo $row->jenis_keg ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Tahun</b></label>
                                                    <input type="text" name="tahun" value="<?php echo $keg->tahun ?>" class="form-control" required>
                                                    <?php echo form_error('tahun', '<div class="text-small text-danger"></div>') ?>
                                                </div>

                                                <div class="form-group">
                                                    <label><b>PJ RPTP / RDHP / RKTM</b></label></br>
                                                    <?php $pjr1 = $keg->nip_pj_rrr ?>
                                                    <select name="nip_pj_rrr" id="nip_pj_rrr" class="form-control" required>
                                                        <option value="">--Pilih PJ RPTP / RDHP / RKTM--</option>
                                                        <?php foreach ($pjr as $row) : ?>
                                                            <option <?php if ($pjr1 == $row->nip) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->nip ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Kasub / Kasie / Ka.Kelti</b></label></br>
                                                    <?php $pjk1 = $keg->nip_pj_kegiatan ?>
                                                    <select name="nip_pj_keg" id="nip_pj_keg" class="form-control" required>
                                                        <option value="">--Pilih Kasub / Kasie / Ka.Kelti--</option>
                                                        <?php foreach ($pjk as $row) : ?>
                                                            <option <?php if ($pjk1 == $row->nip) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->nip ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
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