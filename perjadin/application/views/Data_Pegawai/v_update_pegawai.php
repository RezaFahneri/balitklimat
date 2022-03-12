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
                                    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() ?>data_pegawai/update">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label><b>Nama Pegawai</b></label>
                                                    <input type="text" name="nama_pegawai" value="<?php echo $ep->nama_pegawai ?>" class="form-control" required>
                                                    <?php echo form_error('nama_pegawai', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>NIP</b></label>
                                                    <input readonly type="text" name="nip" value="<?php echo $ep->nip ?>" class="form-control" required>
                                                    <?php echo form_error('nip', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Golongan</b></label></br>
                                                    <?php $golongan1 = $ep->golongan ?>
                                                    <select name="id_golongan" id="golongan" class="form-control">
                                                        <option value="">--Pilih Golongan--</option>
                                                        <?php foreach ($golongan as $row) : ?>
                                                            <option <?php if ($golongan1 == $row->golongan) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->id_golongan ?>"><?php echo $row->golongan ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Status Kepegawaian</b></label></br>
                                                    <?php $spg1 = $ep->status_kepegawaian ?>
                                                    <select name="id_status_peg" id="status_kepegawaian" class="form-control" required>
                                                        <option value="">--Pilih Status Kepegawaian--</option>
                                                        <?php foreach ($spg as $row) : ?>
                                                            <option <?php if ($spg1 == $row->status_kepegawaian) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->id_status_peg ?>"><?php echo $row->status_kepegawaian ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Pangkat</b></label></br>
                                                    <?php $pangkat1 = $ep->pangkat ?>
                                                    <select name="id_pangkat" id="pangkat" class="form-control" required>
                                                        <option value="">--Pilih Pangkat--</option>
                                                        <?php foreach ($pangkat as $row) : ?>
                                                            <option <?php if ($pangkat1 == $row->pangkat) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->id_pangkat ?>"><?php echo $row->pangkat ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Jabatan</b></label></br>
                                                    <?php $jabatan1 = $ep->jabatan ?>
                                                    <select name="id_jabatan" id="id_jabatan" class="form-control" required>
                                                        <option value="">--Pilih Jabatan--</option>
                                                        <?php foreach ($jabatan as $row) : ?>
                                                            <option <?php if ($jabatan1 == $row->jabatan) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->id_jabatan ?>"><?php echo $row->jabatan ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Divisi</b></label></br>
                                                    <?php $divisi1 = $ep->divisi ?>
                                                    <select name="id_divisi" id="id_divisi" class="form-control" required>
                                                        <option value="">--Pilih Divisi--</option>
                                                        <?php foreach ($divisi as $row) : ?>
                                                            <option <?php if ($divisi1 == $row->divisi) {
                                                                        echo 'selected="selected"';
                                                                    } ?> value="<?php echo $row->id_divisi ?>"><?php echo $row->divisi ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>NIK</b></label>
                                                    <input type="text" name="nik" value="<?php echo $ep->nik ?>" class="form-control" required>
                                                    <?php echo form_error('nik', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Email</b></label>
                                                    <input type="text" name="email" value="<?php echo $ep->email ?>" class="form-control" required>
                                                    <?php echo form_error('email', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Password</b></label>
                                                    <input type="text" name="password" value="<?php echo $ep->password ?>" class="form-control" required>
                                                    <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Nomor Whatsapp</b></label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div style="width:50px;color:dimgray" class="input-group-text">+62</div>
                                                        </div>
                                                        <input type="hidden" name="62" value="62" class="form-control">
                                                        <input type="text" name="no_whatsapp" <?php $no = $ep->no_whatsapp;
                                                                                                $no_fix   = substr($no, 2, 15); ?> value="<?php echo $no_fix ?>" class="form-control" required>
                                                        <?php echo form_error('no_whatsapp', '<div class="text-small text-danger"></div>') ?>
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