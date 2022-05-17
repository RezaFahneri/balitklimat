<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">
                            <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                    class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                    href="<?php echo site_url(
                                        'jadwal_kp'
                                    ); ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>&nbsp Tambah Jadwal Kenaikan Pangkat</h3><br>
                            <div class="col-md-12 grid-margin">
                            <?= $this->session->flashdata('message') ?>
                                <div class="card-body">
                                    <form method="POST" action="<?php echo base_url(
                                        'jadwal_kp/tambah_aksi'
                                    ); ?>">
                                        <div class="form-group">
                                            <!-- <label><b>Kode Kenaikan Pangkat</b></label> -->
                                            <input readonly type="hidden" name="kode_kp"
                                                value="<?php echo $jadwal_kp; ?>" class="form-control" >
                                            <?php echo form_error(
                                                'kode_kp',
                                                '<div class="text-small text-danger"></div>'
                                            ); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="nip"><b>Nama Pegawai<a style="color:red"> *</a></b></label></br>
                                            <select name="nip" id="nip" class="form-control" >
                                                <option value=""></option>
                                                <?php foreach (
                                                    $nip
                                                    as $row
                                                ) { ?>
                                                <option value="<?php echo $row->nip; ?>">
                                                    <?php echo $row->nip .
                                                        ' | ' .
                                                        $row->nama_pegawai; ?></option>';
                                                }
                                                <?php } ?>
                                            </select>
                                            <?php echo form_error(
                                                'nip',
                                                '<small class="text-danger">',
                                                '</small>'
                                            ); ?>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Golongan Sekarang</a></b></label>
                                            <input style="color:dimgray" readonly type="text" id="golongan"
                                                name="golongan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Golongan Berikutnya<a style="color:red"> *</a></b></label></br>
                                            <select style="color:dimgray" name="id_golongan_berikutnya"
                                                id="id_golongan_berikutnya" placeholder="Golongan Berikutnya"
                                                class="form-control" >
                                                <option value="">--Pilih Golongan--</option>
                                                <?php foreach (
                                                    $id_golongan
                                                    as $row
                                                ) { ?>
                                                <option value="<?php echo $row->id_golongan; ?>">
                                                    <?php echo $row->golongan; ?>
                                                </option>';
                                                }
                                                <?php } ?>
                                            </select>
                                            <?php echo form_error(
                                                'id_golongan_berikutnya',
                                                '<small class="text-danger">',
                                                '</small>'
                                            ); ?>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Pangkat Sekarang</b></label>
                                            <input style="color:dimgray" readonly type="text" id="pangkat"
                                                name="pangkat" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Pangkat Berikutnya<a style="color:red"> *</a></b></label></br>
                                            <select style="color:dimgray" name="id_pangkat_berikutnya"
                                                id="id_pangkat_berikutnya" placeholder="Pangkat Berikutnya"
                                                class="form-control" >
                                                <option value="">--Pilih Pangkat--</option>
                                                <?php foreach (
                                                    $id_pangkat
                                                    as $row
                                                ) { ?>
                                                <option value="<?php echo $row->id_pangkat; ?>">
                                                    <?php echo $row->pangkat; ?>
                                                </option>';
                                                }
                                                <?php } ?>
                                            </select>
                                            <?php echo form_error(
                                                'id_pangkat_berikutnya',
                                                '<small class="text-danger">',
                                                '</small>'
                                            ); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tmt_pangkat_1"><b>TMT Pangkat 1<a style="color:red"> *</a></b></label>
                                            <input style="color:dimgray" type="date" id="tmt_pangkat_1"
                                                name="tmt_pangkat_1" class="form-control">
                                                <?php echo form_error(
                                                    'tmt_pangkat_1',
                                                    '<small class="text-danger">',
                                                    '</small>'
                                                ); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tmt_pangkat_2"><b>TMT Pangkat 2</b></label>
                                            <input style="color:dimgray" type="date" id="tmt_pangkat_2"
                                                name="tmt_pangkat_2" onblur="validasi_tmt21()" class="form-control">
                                            <!-- <input style="color:dimgray" type="date" id="tmt_pangkat_2"
                                                name="tmt_pangkat_2" class="form-control"> -->

                                        </div>
                                        <div class="form-group">
                                            <label for="tmt_pangkat_3"><b>TMT Pangkat 3</b></label>
                                            <input style="color:dimgray" type="date" id="tmt_pangkat_3"
                                                name="tmt_pangkat_3" onblur="validasi_tmt32()" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="tmt_pangkat_4"><b>TMT Pangkat 4</b></label>
                                            <input style="color:dimgray" type="date" id="tmt_pangkat_4"
                                                name="tmt_pangkat_4" onblur="validasi_tmt43()" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="tmt_pangkat_5"><b>TMT Pangkat 5</b></label>
                                            <input style="color:dimgray" type="date" id="tmt_pangkat_5"
                                                name="tmt_pangkat_5" onblur="validasi_tmt54()" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Jadwal Kenaikan Pangkat<a style="color:red"> *</a></b></label>
                                            <input style="color:dimgray" type="date" name="jadwal_kp" onblur="validasi_jadwalkp()" id="jadwal_kp"
                                                placeholder="Jadwal Kenaikan Pangkat" class="form-control" >
                                                <?php echo form_error('jadwal_kp','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-success">Simpan</a></button>&nbsp &nbsp
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
        url: "<?php echo base_url('jadwal_kp/get_peg'); ?>",
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
            });

        }
    });
    return false;
});
</script>
<script>
	function validasi_tmt21() {
		var tmt_pangkat_1 = document.getElementById("tmt_pangkat_1").value;
		var tmt_pangkat_2 = document.getElementById("tmt_pangkat_2").value;
		if (tmt_pangkat_2 <= tmt_pangkat_1) {
            alert("Tanggal TMT Pangkat Ke-2 Tidak Boleh Kurang Dari TMT Pangkat Ke-1");
		}
    }
    function validasi_tmt32() {
        var tmt_pangkat_3 = document.getElementById("tmt_pangkat_3").value;
        if (tmt_pangkat_3 <= tmt_pangkat_2) {
		alert("Tanggal TMT Pangkat Ke-3 Tidak Boleh Kurang Dari TMT Pangkat Ke-2");
		}
    }
    function validasi_tmt43() {
        var tmt_pangkat_4 = document.getElementById("tmt_pangkat_4").value;
        if (tmt_pangkat_4 <= tmt_pangkat_3) {
		alert("Tanggal TMT Pangkat Ke-4 Tidak Boleh Kurang Dari TMT Pangkat Ke-3");
		}
    }
    function validasi_tmt54() {
        var tmt_pangkat_5 = document.getElementById("tmt_pangkat_5").value;
        if (tmt_pangkat_5 <= tmt_pangkat_4) {
		alert("Tanggal TMT Pangkat Ke-5 Tidak Boleh Kurang Dari TMT Pangkat Ke-4");
		}
	}
    function validasi_jadwalkp() {
        var jadwal_kp = document.getElementById("jadwal_kp").value;
        if (jadwal_kp < tmt_pangkat_1 || tmt_pangkat_2 || tmt_pangkat_3 || tmt_pangkat_4 || tmt_pangkat_5 ) {
		alert("Jadwal Kenaikan Pangkat Tidak Boleh Kurang dari TMT");
		}
	}
</script>