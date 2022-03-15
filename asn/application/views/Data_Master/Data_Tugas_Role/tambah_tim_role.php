<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">
                            <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                    class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('role_penugasan') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>&nbsp Tambah Tim Role</h3><br>
                            <div class="col-md-12 grid-margin">
                                <div class="card-body">
                                    <?php foreach ($data_role as $tr) { ?>
                                    <form method="POST"
                                        action="<?php echo base_url() ?>role_penugasan/tambah_tim_role_aksi">
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id_role" value="<?php echo $tr->id_role ?>">
                                            </td>
                                        </tr>
                                        <div class="form-group">
                                            <label>Role </label>
                                            <input readonly type="text" name="role" class="form-control"
                                                value="<?php echo $tr->role?>" required>
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
                                            <input type="hidden" name="nama_pegawai" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <input style="color:dimgray" type="hidden" id="id_golongan"
                                                name="id_golongan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input style="color:dimgray" type="hidden" id="id_pangkat" name="id_pangkat"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input style="color:dimgray" type="hidden" id="foto" name="foto"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input style="color:dimgray" type="hidden" id="id_status_peg"
                                                name="id_status_peg" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input style="color:dimgray" type="hidden" id="id_jabatan" name="id_jabatan"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input style="color:dimgray" type="hidden" id="id_divisi" name="id_divisi"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input style="color:dimgray" type="hidden" id="nik" name="nik"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input style="color:dimgray" type="hidden" id="email" name="email"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input style="color:dimgray" type="hidden" id="password" name="password"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input style="color:dimgray" type="hidden" id="no_whatsapp"
                                                name="no_whatsapp" class="form-control">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Tim role<i style="color:red">*</label>
                                            <select name="nip[]" id="nip" class="js-example-basic-single w-100"
                                                multiple="multiple" required>
                                                <option value="" disabled>-- Pilih Anggota role --</option>
                                                <?//php foreach($nip as $row){?>
                                                <option value="<?//php echo $row->nip;?>">
                                                    <?//php echo $row->nama_pegawai ;?>
                                                </option>';
                                                }
                                                <?//php }?>
                                            </select>
                                            <?//php echo form_error('id_detail_role', '<div class="text-small text-danger"></div>') ?>
                                        </div> -->
                                        <button type="submit" class="btn btn-success mr-2">Simpan</a></button>&nbsp
                                        &nbsp
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
// $('#nip').select2();
$('#nip').select2({
    allowClear: true,
    placeholder: "---Pilih Pegawai---",
    theme: "bootstrap-5",
});
$('#nip').on('input', function() {
    var nip = $(this).val();
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('role_penugasan/get_peg')?>",
        dataType: "JSON",
        data: {
            nip: nip
        },
        cache: false,
        success: function(data) {
            $.each(data, function(nip, id_golongan) {
                $('[name="nip"]').val(data.nip);
                $('[name="nama_pegawai"]').val(data.nama_pegawai);
                $('[name="id_golongan"]').val(data.id_golongan);
                $('[name="foto"]').val(data.foto);
                $('[name="id_pangkat"]').val(data.id_pangkat);
                $('[name="id_status_peg"]').val(data.id_status_peg);
                $('[name="id_jabatan"]').val(data.id_jabatan);
                $('[name="id_divisi"]').val(data.id_divisi);
                $('[name="nik"]').val(data.nik);
                $('[name="email"]').val(data.email);
                $('[name="password"]').val(data.password);
                $('[name="no_whatsapp"]').val(data.no_whatsapp);
            });

        }
    });
    return false;
});
</script>