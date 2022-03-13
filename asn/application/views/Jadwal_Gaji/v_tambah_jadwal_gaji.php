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
                                        style="border-radius:8px"></i></a>&nbsp Tambah Jadwal Kenaikan Gaji Berkala</h3>
                            <br>
                            <div class="col-md-12 grid-margin">
                                <div class="card-body">
                                    <form method="POST" action="<?php echo base_url('jadwal_kgb/tambah_aksi') ?>">
                                        <div class="form-group">
                                            <!-- <label><b>Kode Kenaikan Pangkat</b></label> -->
                                            <input readonly type="hidden" name="kode_kgb"
                                                value="<?php echo $jadwal_kgb;?>" class="form-control" required>
                                            <?php echo form_error('kode_kgb', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="nip"><b>Nama Pegawai<a style="color:red"> *</a></b></label></br>
                                            <select name="nip" id="nip" class="form-control" required>
                                                <option value=""></option>
                                                <?php foreach($nip as $row){?>
                                                <option value="<?php echo $row->nip;?>">
                                                    <?php echo $row->nip. " | ".$row->nama_pegawai ;?></option>';
                                                }
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="golongan"><b>Golongan</b></label>
                                            <input readonly type="text" id="golongan" name="golongan"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="pangkat"><b>Pangkat </b></label>
                                            <input readonly type="text" id="pangkat" name="pangkat"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Gaji Lama<a style="color:red"> *</a></b></label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div style="color:dimgray" class="input-group-text">Rp.</div>
                                                </div>
                                                <!-- <input type="hidden" name="Rp." value="Rp." class="form-control"> -->
                                                <input type="text" name="gaji_lama" placeholder="Gaji Lama"
                                                    class="form-control" required>
                                                <?php echo form_error('gaji_lama', '<div class="text-small text-danger"></div>') ?>
                                            </div><br>
                                            <div class="form-group">
                                                <label><b>Gaji Baru<a style="color:red"> *</a></b></label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div style="color:dimgray" class="input-group-text">Rp.</div>
                                                    </div>
                                                    <!-- <input type="hidden" name="Rp." value="Rp." class="form-control"> -->
                                                    <input type="text" name="gaji_baru" placeholder="Gaji Baru"
                                                        class="form-control" required>
                                                    <?php echo form_error('gaji_baru', '<div class="text-small text-danger"></div>') ?>
                                                </div><br>
                                                <div class="form-group">
                                                    <label for="tmt_gaji_1"><b>TMT 1</b></label>
                                                    <input type="date" id="tmt_gaji_1" name="tmt_gaji_1"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tmt_gaji_2"><b>TMT 2</b></label>
                                                    <input type="date" id="tmt_gaji_2" name="tmt_gaji_2"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tmt_gaji_3"><b>TMT 3</b></label>
                                                    <input type="date" id="tmt_gaji_3" name="tmt_gaji_3"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tmt_gaji_4"><b>TMT 4</b></label>
                                                    <input type="date" id="tmt_gaji_4" name="tmt_gaji_4"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tmt_gaji_5"><b>TMT 5</b></label>
                                                    <input type="date" id="tmt_gaji_5" name="tmt_gaji_5"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Jadwal Kenaikan Gaji Berkala<a style="color:red">
                                                                *</a></b></label>
                                                    <input type="date" name="jadwal_kgb" id="jadwal_kgb"
                                                        placeholder="Jadwal Kenaikan Gaji Berkala" class="form-control"
                                                        required>
                                                    <?php echo form_error('jadwal_kgb', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-success">Simpan</a></button>&nbsp &nbsp
                                        <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
                                    </form>
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
    allowClear: true,
    placeholder: "---Pilih Pegawai---",
    theme: "bootstrap-5",
});
$('#nip').on('input', function() {
    var nip = $(this).val();
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('jadwal_kgb/get_peg')?>",
        dataType: "JSON",
        data: {
            nip: nip
        },
        cache: false,
        success: function(data) {
            $.each(data, function(nip, golongan) {
                $('[name="nip"]').val(data.nip);
                $('[name="golongan"]').val(data.golongan);
                $('[name="pangkat"]').val(data.pangkat);
                $('[name="tmt"]').val(data.tmt);
            });

        }
    });
    return false;
});
</script>