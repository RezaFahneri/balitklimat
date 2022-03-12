<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Tambah Data Pegawai</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('data_pegawai/tambah_aksi') ?>">
                                    <!-- <input type="hidden" name="<?php //echo $this->security->get_csrf_token_name()
                                                                    ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">     -->
                                    <div class="form-group">
                                        <label><b>Nama Pegawai</b></label>
                                        <input type="text" name="nama_pegawai" class="form-control" required>
                                        <input type="hidden" name="foto" value="default.png" class="form-control" required>
                                        <?php echo form_error('nama_pegawai', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>NIP</b></label>
                                        <input type="text" name="nip" class="form-control" required>
                                        <?php echo form_error('nip', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Golongan</b></label></br>
                                        <select name="id_golongan" id="golongan" class="form-control" required>
                                            <option value="">--Pilih Golongan--</option>
                                            <?php foreach ($golongan as $row) { ?>
                                                <option value="<?php echo $row->id_golongan; ?>"><?php echo $row->golongan; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Status Kepegawaian</b></label></br>
                                        <select name="id_status_peg" id="id_status_peg" class="form-control" required>
                                            <option value="">--Pilih Status Kepegawaian--</option>
                                            <?php foreach ($status_kepegawaian as $row) { ?>
                                                <option value="<?php echo $row->id_status_peg; ?>"><?php echo $row->status_kepegawaian; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Pangkat</b></label></br>
                                        <select name="id_pangkat" id="id_pangkat" class="form-control" required>
                                            <option value="">--Pilih Pangkat--</option>
                                            <?php foreach ($pangkat as $row) { ?>
                                                <option value="<?php echo $row->id_pangkat; ?>"><?php echo $row->pangkat; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Jabatan</b></label></br>
                                        <select name="id_jabatan" id="id_jabatan" class="form-control" required>
                                            <option value="">--Pilih Jabatan--</option>
                                            <?php foreach ($jabatan as $row) { ?>
                                                <option value="<?php echo $row->id_jabatan; ?>"><?php echo $row->jabatan; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Divisi</b></label></br>
                                        <select name="id_divisi" id="id_divisi" class="form-control" required>
                                            <option value="">--Pilih Divisi--</option>
                                            <?php foreach ($divisi as $row) { ?>
                                                <option value="<?php echo $row->id_divisi; ?>"><?php echo $row->divisi; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>NIK</b></label>
                                        <input type="text" name="nik" class="form-control" required>
                                        <?php echo form_error('nik', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Email</b></label>
                                        <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Masukkan email dengan benar" type="text" name="email" class="form-control" required>
                                        <?php echo form_error('email', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Password</b></label>
                                        <input type="text" name="password" class="form-control" required>
                                        <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Nomor Whatsapp</b></label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div style="width:50px;color:dimgray" class="input-group-text">+62</div>
                                            </div>
                                            <input type="hidden" name="62" value="62" class="form-control">
                                            <input type="text" name="no_whatsapp" placeholder="Nomor Whatsapp" class="form-control" required>
                                            <?php echo form_error('no_whatsapp', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                    </div>

                            <button type="submit" class="btn btn-success">Submit</a></button>&nbsp &nbsp
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>