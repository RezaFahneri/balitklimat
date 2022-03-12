<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Edit Data Pegawai</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <?php foreach ($update_pegawai as $ep) { ?>
                                <form method="POST" action="<?php echo base_url() ?>data_pegawai/update">
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label><b>Nama Pegawai</b></label>
                                                <input type="text" name="nama_pegawai"
                                                    value="<?php echo $ep->nama_pegawai ?>" class="form-control"
                                                    required>
                                                <input type="hidden" name="foto" value="default.png"
                                                    class="form-control" required>
                                                <?php echo form_error('nama_pegawai', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label><b>NIP</b></label>
                                                <input readonly type="text" name="nip" value="<?php echo $ep->nip ?>"
                                                    class="form-control" required>
                                                <?php echo form_error('nip', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_golongan"><b>Golongan</b></label></br>
                                                <?php $id_golongan1 = $ep->id_golongan ?>
                                                <select style="color:dimgray" name="id_golongan" id="id_golongan"
                                                    class="form-control" required>
                                                    <option value=""></option>
                                                    <?php foreach($id_golongan as $row){?>
                                                    <option
                                                        <?php if($id_golongan1==$row->id_golongan){echo 'selected="selected"';} ?>
                                                        value="<?php echo $row->id_golongan;?>">
                                                        <?php echo $row->golongan ;?></option>';
                                                    }
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_status_peg"><b>Status Kepegawaian</b></label></br>
                                                <?php $id_status_peg1 = $ep->id_status_peg ?>
                                                <select style="color:dimgray" name="id_status_peg" id="id_status_peg"
                                                    class="form-control" required>
                                                    <option value="">--Pilih Status Kepegawaian--</option>
                                                    <?php foreach($id_status_peg as $row){?>
                                                    <option
                                                        <?php if($id_status_peg1==$row->id_status_peg){echo 'selected="selected"';} ?>
                                                        value="<?php echo $row->id_status_peg;?>">
                                                        <?php echo $row->status_kepegawaian;?></option>';
                                                    }
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_pangkat"><b>Pangkat</b></label></br>
                                                <?php $id_pangkat1 = $ep->id_pangkat ?>
                                                <select style="color:dimgray" name="id_pangkat" id="id_pangkat"
                                                    class="form-control" required>
                                                    <option value="">--Pilih Pangkat--</option>
                                                    <?php foreach($id_pangkat as $row){?>
                                                    <option
                                                        <?php if($id_pangkat1==$row->id_pangkat){echo 'selected="selected"';} ?>
                                                        value="<?php echo $row->id_pangkat;?>">
                                                        <?php echo $row->pangkat;?></option>';
                                                    }
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_jabatan"><b>Jabatan</b></label></br>
                                                <?php $id_jabatan1 = $ep->id_jabatan ?>
                                                <select style="color:dimgray" name="id_jabatan" id="id_jabatan"
                                                    class="form-control" required>
                                                    <option value="">--Pilih Jabatan--</option>
                                                    <?php foreach($id_jabatan as $row){?>
                                                    <option
                                                        <?php if($id_jabatan1==$row->id_jabatan){echo 'selected="selected"';} ?>
                                                        value="<?php echo $row->id_jabatan;?>">
                                                        <?php echo $row->jabatan;?></option>';
                                                    }
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_divisi"><b>Divisi</b></label></br>
                                                <?php $id_divisi1 = $ep->id_divisi ?>
                                                <select style="color:dimgray" name="id_divisi" id="id_divisi"
                                                    class="form-control" required>
                                                    <option value="">--Pilih Divisi--</option>
                                                    <?php foreach($id_divisi as $row){?>
                                                    <option
                                                        <?php if($id_divisi1==$row->id_divisi){echo 'selected="selected"';} ?>
                                                        value="<?php echo $row->id_divisi;?>"><?php echo $row->divisi;?>
                                                    </option>';
                                                    }
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <!-- 
                                            <div class="form-group">
                                                <label><b>Tugas Tambahan</b></label> -->
                                            <!-- <?//php $id_tugas1 = $ep->id_tugas ?> -->
                                            <!-- <select name="id_tugas[]" id="id_tugas" class="form-control" multiple> -->
                                            <!-- <option value=""></option> -->
                                            <?//php foreach($id_tugas as $row){?>
                                            <!-- <option
                                                        <?//php if($id_tugas==$row->id_tugas){echo 'selected="selected"';}  ?>
                                                        value="<?//php echo $row->id_tugas?>">
                                                        <?//php echo $row->penugasan;?>
                                                    </option>';
                                                    }
                                                    <?//php }?>
                                                </select>
                                            </div> -->

                                            <div class="form-group">
                                                <label><b>NIK</b></label>
                                                <input type="text" name="nik" value="<?php echo $ep->nik ?>"
                                                    class="form-control" required>
                                                <?php echo form_error('nik', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label><b>Email</b></label>
                                                <input type="text" name="email" value="<?php echo $ep->email ?>"
                                                    class="form-control" required>
                                                <?php echo form_error('email', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label><b>Password</b></label>
                                                <input type="text" name="password" value="<?php echo $ep->password ?>"
                                                    class="form-control" required>
                                                <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label><b>Nomor Whatsapp</b></label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div style="color:dimgray" class="input-group-text">+62</div>
                                                    </div>
                                                    <input type="hidden" name="62" value="62" class="form-control">
                                                    <input type="text" name="no_whatsapp"
                                                        <?php $no = $ep->no_whatsapp; $no_fix= substr($no, 2, 15); ?>
                                                        value="<?php echo $no_fix?> " class="form-control" required>
                                                    <?php echo form_error('no_whatsapp', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="role"><b>Role</a></b></label>
                                                <?php $role = $ep->role ?>
                                                <select style="color:dimgray" name="role" class="form-control" required>
                                                    <!-- <option value="">-- Pilih Role --</option> -->
                                                    <option <?php if($role == 'Admin
                                                        ASN'){echo 'selected="selected"'; } ?>>Admin
                                                        ASN
                                                    </option>
                                                    <option value='Admin Perjalanan Dinas'
                                                        <?php if($role == 'Admin Perjalanan Dinas'){echo 'selected="selected"'; } ?>>
                                                        Admin Perjalanan Dinas</option>
                                                    <option value='Admin Inventaris'
                                                        <?php if($role == 'Admin Inventaris'){echo 'selected="selected"'; } ?>>
                                                        Admin Inventaris</option>
                                                    <option value='Admin Disposisi'
                                                        <?php if($role == 'Admin Disposisi'){echo 'selected="selected"'; } ?>>
                                                        Admin Disposisi</option>
                                                    <option value='Admin Buku Tamu'
                                                        <?php if($role == 'Admin Buku Tamu'){echo 'selected="selected"'; } ?>>
                                                        Admin Buku Tamu</option>
                                                    <option value='Admin Bahan Diseminasi'
                                                        <?php if($role == 'Admin Bahan Diseminasi'){echo 'selected="selected"'; } ?>>
                                                        Admin Bahan Diseminasi</option>
                                                    <option value='Admin Laporan Magang'
                                                        <?php if($role == 'Admin Laporan Magang'){echo 'selected="selected"'; } ?>>
                                                        Admin Laporan Magang</option>
                                                    <option value='User'
                                                        <?php if($role == 'User'){echo 'selected="selected"'; } ?>>
                                                        User
                                                    </option>
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
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$('#id_golongan').select2({
    allowClear: true,
    placeholder: "---Pilih Golongan---",
    theme: "bootstrap-5",
});
$('#id_status_peg').select2({
    allowClear: true,
    placeholder: "---Pilih Status Kepegawaian---",
    theme: "bootstrap-5",
});
$('#id_pangkat').select2({
    allowClear: true,
    placeholder: "---Pilih Pangkat---",
    theme: "bootstrap-5",
});
$('#id_jabatan').select2({
    allowClear: true,
    placeholder: "---Pilih Jabatan---",
    theme: "bootstrap-5",
});
$('#id_divisi').select2({
    allowClear: true,
    placeholder: "---Pilih Divisi---",
    theme: "bootstrap-5",
});
$('#id_tugas').select2();
</script>