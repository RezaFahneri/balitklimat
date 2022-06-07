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
                                        'jadwal_kgb'
                                    ); ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>&nbsp Tambah Jadwal Kenaikan Gaji Berkala</h3>
                            <br>
                            <div class="col-md-12 grid-margin">
                            <?= $this->session->flashdata('message') ?>
                                <div class="card-body">
                                    <form method="POST" action="<?php echo base_url(
                                        'jadwal_kgb/tambah_aksi'
                                    ); ?>">
                                        <div class="form-group">
                                            <!-- <label><b>Kode Kenaikan Pangkat</b></label> -->
                                            <input readonly type="hidden" name="kode_kgb"
                                                value="<?php echo $jadwal_kgb; ?>" class="form-control" >
                                            <?php echo form_error(
                                                'kode_kgb',
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
                                                '<small class="text-small text-danger">',
                                                '</small>'
                                            ); ?>
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
                                                <input type="text" name="gaji_lama" id="rupiah" placeholder="Gaji Lama"
                                                    class="form-control" >
                                            </div>
                                            <?php echo form_error(
                                                'gaji_lama',
                                                '<small class="text-small text-danger">',
                                                '</small>'
                                            ); ?>
                                            <div class="form-group"><br>
                                                <label><b>Gaji Baru<a style="color:red"> *</a></b></label>
                                                <div class="input-group mb-2">
                                                    <input type="text" name="gaji_baru" onblur="validasi_gaji()" id="rupiah1" placeholder="Gaji Baru"
                                                        class="form-control" >
                                                </div>
                                                <?php echo form_error(
                                                    'gaji_baru',
                                                    '<small class="text-small text-danger">',
                                                    '</small>'
                                                ); ?>
                                                <div class="form-group"><br>
                                                    <label for="tmt_gaji_1"><b>TMT Gaji 1<a style="color:red"> *</a></b></label>
                                                    <input type="date" id="tmt_gaji_1" name="tmt_gaji_1"
                                                        class="form-control">
                                                        <?php echo form_error(
                                                            'tmt_gaji_1',
                                                            '<small class="text-small text-danger">',
                                                            '</small>'
                                                        ); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tmt_gaji_2"><b>TMT Gaji 2</b></label>
                                                    <input type="date" id="tmt_gaji_2"  onblur="validasi_tmt21()" name="tmt_gaji_2" onblur="validasi_tmt21()"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tmt_gaji_3"><b>TMT Gaji 3</b></label>
                                                    <input type="date" id="tmt_gaji_3" name="tmt_gaji_3" onblur="validasi_tmt32()"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tmt_gaji_4"><b>TMT Gaji 4</b></label>
                                                    <input type="date" id="tmt_gaji_4" name="tmt_gaji_4" onblur="validasi_tmt43()"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tmt_gaji_5"><b>TMT Gaji 5</b></label>
                                                    <input type="date" id="tmt_gaji_5" name="tmt_gaji_5" onblur="validasi_tmt54()"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Jadwal Kenaikan Gaji Berkala<a style="color:red">*</a></b></label>
                                                    <small class="text-warning">Tanggal jadwal kenaikan gaji berkala diisi sesuai dengan TMT terahir</small>
                                                    <input type="date" name="jadwal_kgb" onblur="validasi_jadwalkgb()" id="jadwal_kgb"
                                                        placeholder="Jadwal Kenaikan Gaji Berkala" class="form-control">
                                                        <?php echo form_error(
                                                            'jadwal_kgb',
                                                            '<small class="text-small text-danger">',
                                                            '</small>'
                                                        ); ?>
                                                </div>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-success">Simpan</a></button>&nbsp &nbsp
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
        url: "<?php echo base_url('jadwal_kgb/get_peg'); ?>",
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
<script>
    function validasi_gaji() {
        var rupiah = document.getElementById("rupiah").value;
        var rupiah1 = document.getElementById("rupiah1").value;
        if (rupiah1 <= rupiah ) {
		alert("Gaji Baru Tidak Boleh Kurang dari Gaji Lama");
		}
	}
	function validasi_tmt21() {
		var tmt_gaji_1 = document.getElementById("tmt_gaji_1").value;
		var tmt_gaji_2 = document.getElementById("tmt_gaji_2").value;
		if (tmt_gaji_2 <= tmt_gaji_1) {
            alert("Tanggal TMT Gaji Ke-2 Tidak Boleh Kurang Dari TMT Gaji Ke-1");
		}
    }
    function validasi_tmt32() {
        var tmt_gaji_3 = document.getElementById("tmt_gaji_3").value;
        if (tmt_gaji_3 <= tmt_gaji_2) {
		alert("Tanggal TMT Gaji Ke-3 Tidak Boleh Kurang Dari TMT Gaji Ke-2");
		}
    }
    function validasi_tmt43() {
        var tmt_gaji_4 = document.getElementById("tmt_gaji_4").value;
        if (tmt_gaji_4 <= tmt_gaji_3) {
		alert("Tanggal TMT Gaji Ke-4 Tidak Boleh Kurang Dari TMT Gaji Ke-3");
		}
    }
    function validasi_tmt54() {
        var tmt_gaji_5 = document.getElementById("tmt_gaji_5").value;
        if (tmt_gaji_5 <= tmt_gaji_4) {
		alert("Tanggal TMT Gaji Ke-5 Tidak Boleh Kurang Dari TMT Gaji Ke-4");
		}
	}
    function validasi_jadwalkgb() {
        var jadwal_kgb = document.getElementById("jadwal_kgb").value;
        if (jadwal_kgb < tmt_gaji_1 || tmt_gaji_2 || tmt_gaji_3 || tmt_gaji_4 || tmt_gaji_5 ) {
		alert("Jadwal Kenaikan Gaji Tidak Boleh Kurang dari TMT");
		}
	}
    
</script>