<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">
                            <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                    class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('data_pegawai'); ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>&nbsp Edit Data Pegawai</h3><br>
                            <div class="col-md-12 grid-margin">
                            <?= $this->session->flashdata('message') ?>
                                <div class="card-body">
                                    <?php foreach ($update_pegawai as $ep) { ?>
                                    <form method="POST" action="<?php echo base_url(); ?>data_pegawai/update">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label><b>Nama Pegawai<a style="color:red"> *</a></b></label>
                                                    <input type="text" name="nama_pegawai"
                                                        value="<?php echo $ep->nama_pegawai; ?>" class="form-control"
                                                        >
                                                    <input type="hidden" name="foto" value="default.png"
                                                        class="form-control" >
                                                        <?php echo form_error('nama_pegawai','<small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <input readonly type="hidden" name="nip"
                                                        value="<?php echo $ep->nip; ?>" class="form-control" >
                                                    <?php echo form_error('nip','<div class="text-small text-danger"></div>' ); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_golongan"><b>Golongan</b></label></br>
                                                    <?php $id_golongan1 = $ep->id_golongan; ?>
                                                    <select style="color:dimgray" name="id_golongan" id="id_golongan"
                                                        class="form-control" >
                                                        <option value="1">--Pilih Golongan--</option>
                                                        <?php foreach ($id_golongan as $row) { ?>
                                                        <option
                                                            <?php if ($id_golongan1 == $row->id_golongan) {
                                                                echo 'selected="selected"';
                                                            } ?>value="<?php echo $row->id_golongan; ?>"><?php echo $row->golongan; ?></option>';
                                                        }
                                                        <?php } ?>
                                                    </select>
                                                    <?php echo form_error('id_golongan','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_status_peg"><b>Status Kepegawaian<a style="color:red"> *</a></b></label></br>
                                                    <?php $id_status_peg1 =
                                                        $ep->id_status_peg; ?>
                                                    <select style="color:dimgray" name="id_status_peg"
                                                        id="id_status_peg" class="form-control" >
                                                        <option value="">--Pilih Status Kepegawaian--</option>
                                                        <?php foreach ($id_status_peg as $row) { ?>
                                                        <option
                                                            <?php if ($id_status_peg1 == $row->id_status_peg) {
                                                                echo 'selected="selected"';
                                                            } ?>
                                                            value="<?php echo $row->id_status_peg; ?>"><?php echo $row->status_kepegawaian; ?></option>';
                                                        }
                                                        <?php } ?>
                                                    </select>
                                                    <?php echo form_error('id_status_peg','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_pangkat"><b>Pangkat</b></label></br>
                                                    <?php $id_pangkat1 =$ep->id_pangkat; ?>
                                                    <select style="color:dimgray" name="id_pangkat" id="id_pangkat" class="form-control" >
                                                        <option value="1">--Pilih Pangkat--</option>
                                                        <?php foreach ($id_pangkat as $row) { ?>
                                                        <option
                                                            <?php if ($id_pangkat1 == $row->id_pangkat) {
                                                                echo 'selected="selected"';
                                                            } ?>
                                                            value="<?php echo $row->id_pangkat; ?>"><?php echo $row->pangkat; ?></option>';
                                                        }
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_jabatan"><b>Jabatan<a style="color:red"> *</a></b></label></br>
                                                    <?php $id_jabatan1 = $ep->id_jabatan; ?>
                                                    <select style="color:dimgray" name="id_jabatan" id="id_jabatan"
                                                        class="form-control" >
                                                        <option value="">--Pilih Jabatan--</option>
                                                        <?php foreach ( $id_jabatan as $row) { ?>
                                                        <option
                                                            <?php if ($id_jabatan1 == $row->id_jabatan) {
                                                                echo 'selected="selected"';
                                                            } ?>
                                                            value="<?php echo $row->id_jabatan; ?>"> <?php echo $row->jabatan; ?></option>';
                                                        }
                                                        <?php } ?>
                                                    </select>
                                                    <?php echo form_error('id_jabatan', '<small class="text-danger">','</small>'
                                                    ); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_divisi"><b>Divisi<a style="color:red"> *</a></b></label></br>
                                                    <?php $id_divisi1 = $ep->id_divisi; ?>
                                                    <select style="color:dimgray" name="id_divisi" id="id_divisi"
                                                        class="form-control" >
                                                        <option value="">--Pilih Divisi--</option>
                                                        <?php foreach ($id_divisi as $row) { ?>
                                                        <option
                                                            <?php if ($id_divisi1 == $row->id_divisi) {
                                                                echo 'selected="selected"';
                                                            } ?>
                                                            value="<?php echo $row->id_divisi; ?>"><?php echo $row->divisi; ?>
                                                        </option>';
                                                        }
                                                        <?php } ?>
                                                    </select>
                                                    <?php echo form_error('id_divisi','<small class="text-danger">','</small>' ); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>NIK<a style="color:red"> *</a></b></label><br>
                                                    <small class="text-warning">NIK 16 karakter</small>
                                                    <input type="text" name="nik" value="<?php echo $ep->nik; ?>"
                                                        class="form-control" >
                                                        <?php echo form_error('nik','<small class="text-danger">','</small>' ); ?>                                                
                                                        </div>
                                                <div class="form-group">
                                                    <!-- <label><b>Email<a style="color:red"> *</a></b></label> -->
                                                    <input type="hidden" name="email" value="<?php echo $ep->email; ?>"
                                                        class="form-control" >
                                                        <!-- <//?php echo form_error('email','<small class="text-danger">','</small>'); ?>                                                 -->
                                                        </div>
                                               <div class="form-group text-left">
                                                <label><b>Password<a style="color:red"> *</a></b></label><br>
                                                <small class="text-warning">Password minimal 8 karakter</small>
                                                    <div class="input-group mb-3">
                                                    <input type="password" name="password" id="password"
                                                        value="<?php echo $ep->password; ?>" class="form-control"
                                                        >
                                                        <div class="input-group-append">
                                                        <span id="mybutton" onclick="password()" class="input-group-text">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    </div>
                                                        <?php echo form_error( 'password','<small class="text-danger">', '</small>'); ?>                                                
                                                    </div>
                                                <div class="form-group">
                                                    <label><b>Nomor Whatsapp<a style="color:red"> *</a></b></label><br>
                                                    <small class="text-warning">Ketikkan tanpa 62 atau 0</small>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div style="color:dimgray" class="input-group-text">+62
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="62" value="62" class="form-control">
                                                        <input type="text" name="no_whatsapp"
                                                            <?php $no = $ep->no_whatsapp;
                                                              $no_fix = substr($no,2,15);
                                                            ?>
                                                            value="<?php echo $no_fix; ?> " class="form-control" >
                                                            <?php echo form_error('no_whatsapp', '<small class="text-danger">','</small>' ); ?>                                                    
                                                        </div>
                                                </div>
                                        
                                </div>
                                </td>
                                </tr>
                                <button type="submit" class="btn btn-success mr-2">Simpan</a></button>&nbsp &nbsp
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
<script>
    function password() {
        var x = document.getElementById('password').type;
        if (x == 'password') {
            document.getElementById('password').type = 'text';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                </svg>`;
        } else {
            document.getElementById('password').type = 'password';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>`;
        }
    }
</script>