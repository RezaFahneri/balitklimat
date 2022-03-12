<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Tambah Jadwal Kenaikan Pangkat</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('jadwal_kp/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <!-- <label><b>Kode Kenaikan Pangkat</b></label> -->
                                        <input readonly type="hidden" name="kode_kp" value="<?php echo $jadwal_kp;?>"
                                            class="form-control" required>
                                        <?php echo form_error('kode_kp', '<div class="text-small text-danger"></div>') ?>
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
                                        <label><b>Golongan Sekarang</a></b></label>
                                        <input style="color:dimgray" readonly type="text" id="golongan" name="golongan"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Golongan Berikutnya<a style="color:red"> *</a></b></label></br>
                                        <select style="color:dimgray" name="id_golongan_berikutnya"
                                            id="id_golongan_berikutnya" placeholder="Golongan Berikutnya"
                                            class="form-control" required>
                                            <option value="">--Pilih Golongan--</option>
                                            <?php foreach($id_golongan as $row){?>
                                            <option value="<?php echo $row->id_golongan;?>"><?php echo $row->golongan;?>
                                            </option>';
                                            }
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Pangkat Sekarang</b></label>
                                        <input style="color:dimgray" readonly type="text" id="pangkat" name="pangkat"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Pangkat Berikutnya<a style="color:red"> *</a></b></label></br>
                                        <select style="color:dimgray" name="id_pangkat_berikutnya"
                                            id="id_pangkat_berikutnya" placeholder="Pangkat Berikutnya"
                                            class="form-control" required>
                                            <option value="">--Pilih Pangkat--</option>
                                            <?php foreach($id_pangkat as $row){?>
                                            <option value="<?php echo $row->id_pangkat;?>"><?php echo $row->pangkat;?>
                                            </option>';
                                            }
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_pangkat_1"><b>TMT 1</b></label>
                                        <input style="color:dimgray" type="date" id="tmt_pangkat_1" name="tmt_pangkat_1"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_pangkat_2"><b>TMT 2</b></label>
                                        <input style="color:dimgray" type="date" id="tmt_pangkat_2" name="tmt_pangkat_2"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_pangkat_3"><b>TMT 3</b></label>
                                        <input style="color:dimgray" type="date" id="tmt_pangkat_3" name="tmt_pangkat_3"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_pangkat_4"><b>TMT 4</b></label>
                                        <input style="color:dimgray" type="date" id="tmt_pangkat_4" name="tmt_pangkat_4"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_pangkat_5"><b>TMT 5</b></label>
                                        <input style="color:dimgray" type="date" id="tmt_pangkat_5" name="tmt_pangkat_5"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Jadwal Kenaikan Pangkat<a style="color:red"> *</a></b></label>
                                        <input style="color:dimgray" type="date" name="jadwal_kp" id="jadwal_kp"
                                            placeholder="Jadwal Kenaikan Pangkat" class="form-control" required>
                                        <?php echo form_error('jadwal_kp', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</a></button>&nbsp &nbsp
                                    <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$('#nip').select2({
    allowClear: true,
    placeholder: "---Pilih Pegawai---",
    theme: "bootstrap-5",
});
$('#id_golongan_berikutnya').select2({
    allowClear: true,
    placeholder: "---Pilih Golongan---",
    theme: "bootstrap-5",
});
$('#id_pangkat_berikutnya').select2({
    allowClear: true,
    placeholder: "---Pilih Pangkat---",
    theme: "bootstrap-5",
});
$('#nip').on('input', function() {
    var nip = $(this).val();
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('jadwal_kp/get_peg')?>",
        dataType: "JSON",
        data: {
            nip: nip
        },
        cache: false,
        success: function(data) {
            $.each(data, function(nip, id_golongan) {
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