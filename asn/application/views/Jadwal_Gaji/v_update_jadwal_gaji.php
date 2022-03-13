<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">
                            <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                    class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('jadwal_kgb') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>&nbsp Edit Jadwal Kenaikan Gaji Berkala</h3>
                            <br>
                            <div class="col-md-12 grid-margin">
                                <div class="card-body">
                                    <?php foreach ($update_jadwalkgb as $ug) { ?>
                                    <form method="POST" action="<?php echo base_url() ?>jadwal_kgb/update">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input readonly type="hidden" name="kode_kgb"
                                                        value="<?php echo $ug->kode_kgb;?>" class="form-control"
                                                        required>
                                                    <?php echo form_error('kode_kgb', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nip"><b>Nama Pegawai</b></label></br>
                                                    <?php $nip1 = $ug->nip ?>
                                                    <select name="nip" id="nip" class="form-control" disabled="true"
                                                        required>
                                                        <option value=""></option>
                                                        <?php foreach($nip as $row){?>
                                                        <option
                                                            <?php if($nip1==$row->nip){echo 'selected="selected"';} ?>
                                                            value="<?php echo $row->nip;?>">
                                                            <?php echo $row->nip. " | ".$row->nama_pegawai ;?></option>
                                                        ';
                                                        }
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Golongan</b></label>
                                                    <input type="text" name="golongan" id="golongan"
                                                        value="<?php echo $ug->golongan;?>" class="form-control"
                                                        readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Pangkat</b></label>
                                                    <input type="text" name="pangkat" id="pangkat"
                                                        value="<?php echo $ug->pangkat;?>" class="form-control"
                                                        readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Gaji Lama</b></label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div style="color:dimgray" class="input-group-text">Rp.
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="Rp." value="Rp."
                                                            class="form-control">
                                                        <input type="text" name="gaji_lama"
                                                            value="<?php echo $ug->gaji_lama;?>" class="form-control"
                                                            required>
                                                        <?php echo form_error('gaji_lama', '<div class="text-small text-danger"></div>') ?>
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label><b>Gaji Baru</b></label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div style="color:dimgray" class="input-group-text">Rp.
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="Rp." value="Rp."
                                                                class="form-control">
                                                            <input type="text" name="gaji_baru"
                                                                value="<?php echo $ug->gaji_baru;?>"
                                                                class="form-control" required>
                                                            <?php echo form_error('gaji_baru', '<div class="text-small text-danger"></div>') ?>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label><b>TMT 1</b></label>
                                                            <input type="date" name="tmt_gaji_1" id="tmt_gaji_1"
                                                                value="<?php echo $ug->tmt_gaji_1;?>"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label><b>TMT 2</b></label>
                                                            <input type="date" name="tmt_gaji_2" id="tmt_gaji_2"
                                                                value="<?php echo $ug->tmt_gaji_2;?>"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label><b>TMT 3</b></label>
                                                            <input type="date" name="tmt_gaji_3" id="tmt_gaji_3"
                                                                value="<?php echo $ug->tmt_gaji_3;?>"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label><b>TMT 4</b></label>
                                                            <input type="date" name="tmt_gaji_4" id="tmt_gaji_4"
                                                                value="<?php echo $ug->tmt_gaji_4;?>"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label><b>TMT 5</b></label>
                                                            <input type="date" name="tmt_gaji_5" id="tmt_gaji_5"
                                                                value="<?php echo $ug->tmt_gaji_5;?>"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label><b>Jadwal Kenaikan Gaji Berkala</b></label>
                                                            <input type="date" name="jadwal_kgb" id="jadwal_kgb"
                                                                value="<?php echo $ug->jadwal_kgb;?>"
                                                                placeholder="Jadwal Kenaikan Pangkat"
                                                                class="form-control" required>
                                                            <?php echo form_error('jadwal_kgb', '<div class="text-small text-danger"></div>') ?>
                                                        </div>
                                            </td>
                                        </tr>
                                        <button type="submit" class="btn btn-success mr-2">Simpan</a></button>&nbsp
                                        &nbsp
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
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$('#nip').select2({
    placeholder: "Pilih Pegawai",
    theme: "bootstrap-5",
    // $('#nip select [nip=nama_pegawai]').up(nip.nama_pegawai);
});
</script>
</div>