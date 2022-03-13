<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">
                            <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                    class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('data_pegawai') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>&nbsp Tambah Data Pegawai</h3><br>
                            <div class="col-md-12 grid-margin">
                                <?php echo validation_errors()?>
                                <!-- <?php //echo form_open($action)?> -->
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data"
                                        action="<?php echo base_url('data_pegawai/tambah_aksi') ?>">
                                        <div class="form-group">
                                            <label><b>Nama Pegawai<a style="color:red"> *</a></b></label>
                                            <input style="color:dimgray" type="text" name="nama_pegawai"
                                                placeholder="Nama Pegawai" autocomplete="off" class="form-control"
                                                required>
                                            <input type="hidden" name="foto" value="default.png" class="form-control"
                                                required>
                                            <?php echo form_error('nama_pegawai', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label><b>NIP<a style="color:red"> *</a></b></label>
                                            <input type="text" name="nip" placeholder="Nomor Induk Pegawai"
                                                autocomplete="off" class="form-control" required>
                                            <?php echo form_error('nip', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <!-- <div class="form-group">
                        <label><b>Foto</b> </label>
                        <input type="file" name="foto" class="form-control" required>
                        <?php// echo form_error('foto', '<div class="text-small text-danger"></div>') ?>
                    </div> -->
                                        <div class="form-group">
                                            <label for="id_golongan"><b>Golongan</b></label></br>
                                            <select style="color:dimgray" name="id_golongan" id="id_golongan"
                                                class="form-control" required>
                                                <option value="1">--Pilih Golongan--</option>
                                                <?php foreach($id_golongan as $row){?>
                                                <option value="<?php echo $row->id_golongan;?>">
                                                    <?php echo $row->golongan;?>
                                                </option>';
                                                }
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Status Kepegawaian<a style="color:red"> *</a></b></label></br>
                                            <select style="color:dimgray" name="id_status_peg" id="id_status_peg"
                                                class="form-control" required>
                                                <option value="">--Pilih Status Kepegawaian--</option>
                                                <?php foreach($id_status_peg as $row){?>
                                                <option value="<?php echo $row->id_status_peg;?>">
                                                    <?php echo $row->status_kepegawaian;?></option>';
                                                }
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Pangkat</b></label></br>
                                            <select style="color:dimgray" name="id_pangkat" id="id_pangkat"
                                                class="form-control" required>
                                                <option value="1">--Pilih Pangkat--</option>
                                                <?php foreach($id_pangkat as $row){?>
                                                <option value="<?php echo $row->id_pangkat;?>">
                                                    <?php echo $row->pangkat;?>
                                                </option>';
                                                }
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Jabatan<a style="color:red"> *</a></b></label></br>
                                            <select style="color:dimgray" name="id_jabatan" id="id_jabatan"
                                                class="form-control" required>
                                                <option value="">--Pilih Jabatan--</option>
                                                <?php foreach($id_jabatan as $row){?>
                                                <option value="<?php echo $row->id_jabatan;?>">
                                                    <?php echo $row->jabatan;?>
                                                </option>';
                                                }
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Divisi<a style="color:red"> *</a></b></label></br>
                                            <select style="color:dimgray" name="id_divisi" id="id_divisi"
                                                class="form-control" required>
                                                <option value="">--Pilih Divisi--</option>
                                                <?php foreach($id_divisi as $row){?>
                                                <option value="<?php echo $row->id_divisi;?>"><?php echo $row->divisi;?>
                                                </option>';
                                                }
                                                <?php }?>
                                            </select>
                                        </div>
                                        <!-- <div class="form-group">
                                        <label><b>Tugas Tambahan</b></label>
                                        <select name="id_tugas[]" id="id_tugas" class="form-control" multiple> -->
                                        <!-- <option value=""></option> -->
                                        <!-- <?//php foreach($id_tugas as $row){?>
                                            <option value="<?//php echo $row->id_tugas;?>"><?//php echo $row->penugasan;?>
                                            </option>';
                                            }
                                            <?//php }?>
                                        </select>
                                    </div> -->
                                        <div class="form-group">
                                            <label><b>NIK<a style="color:red"> *</a></b></label>
                                            <input style="color:dimgray" type="text" name="nik" autocomplete="off"
                                                placeholder="Nomor Induk Kependudukan" class="form-control" required>
                                            <?php echo form_error('nik', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Email<a style="color:red"> *</a></b></label>
                                            <input style="color:dimgray" type="email" autocomplete="off" name="email"
                                                placeholder="Email" class="form-control" required>
                                            <?php echo form_error('email', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Password<a style="color:red"> *</a></b></label>
                                            <input style="color:dimgray" type="text" autocomplete="off" name="password"
                                                placeholder="Password" class="form-control" required>
                                            <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Nomor Whatsapp<a style="color:red"> *</a></b></label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div style="color:dimgray" class="input-group-text">+62</div>
                                                </div>
                                                <input type="hidden" name="62" value="62" class="form-control">
                                                <input type="text" name="no_whatsapp" autocomplete="off"
                                                    placeholder="Nomor Whatsapp" class="form-control" required>
                                                <?php echo form_error('no_whatsapp', '<div class="text-small text-danger"></div>') ?>
                                            </div><br>
                                            <!-- <div class="form-group">
                                                <label for="role"><b>Role</a></b></label>
                                                <select style="color:dimgray" class="form-control" name="role" required>
                                                    <option value="">-- Pilih Role --</option>
                                                    <option>Admin ASN</option>
                                                    <option>Admin Perjalanan Dinas</option>
                                                    <option>Admin Inventaris</option>
                                                    <option>Admin Disposisi</option>
                                                    <option>Admin Buku Tamu</option>
                                                    <option>Admin Bahan Diseminasi</option>
                                                    <option>Admin Laporan Magang</option>
                                                    <option>User</option>
                                                </select>
                                            </div> -->
                                            <button type="submit" class="btn btn-success">Submit</a></button>&nbsp &nbsp
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
</script>