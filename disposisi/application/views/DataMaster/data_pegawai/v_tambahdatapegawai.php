<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Tambah Data Pegawai</h3><br>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <form method="POST" action="<?php echo base_url('data_pegawai/tambah_aksi') ?>">
                    <div class="form-group">
                        <label><b>Nama Pegawai</b></label>
                        <input type="text" name="nama_pegawai" class="form-control" required>
                        <?php echo form_error('nama_pegawai', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label><b>NIP</b></label>
                        <input type="text" name="nip" class="form-control" required>
                        <?php echo form_error('nip', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <!-- <div class="form-group">
                      <label>Foto</label>
                      <input type="file" name="foto" class="file-upload-default" required>
                      <div class="input-group col-xs-12">
                        <input type="file" name="foto" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-success" type="button"><?php echo form_error('foto', '<div class="text-small text-danger"></div>') ?>Upload</button>
                        </span>
                      </div>
                    </div> -->
                    <div class="form-group">
                        <label><b>Foto</b> </label>
                        <input type="file" name="foto" class="form-control" required>
                        <?php echo form_error('foto', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label><b>Golongan</b></label></br>
                        <select name="golongan" id="golongan" class="form-control" required>
                            <option value="">--Pilih Golongan--</option>
                            <?php foreach($golongan as $row){?>
                                <option value = "<?php echo $row->golongan;?>"><?php echo $row->golongan;?></option>';
                            }
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b>Status Kepegawaian</b></label></br>
                        <select name="status_kepegawaian" id="status_kepegawaian" class="form-control" required>
                            <option value="">--Pilih Status Kepegawaian--</option>
                            <?php foreach($status_kepegawaian as $row){?>
                                <option value = "<?php echo $row->status_kepegawaian;?>"><?php echo $row->status_kepegawaian;?></option>';
                            }
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b>Pangkat</b></label></br>
                        <select name="pangkat" id="pangkat" class="form-control" required>
                            <option value="">--Pilih Pangkat--</option>
                            <?php foreach($pangkat as $row){?>
                                <option value = "<?php echo $row->pangkat;?>"><?php echo $row->pangkat;?></option>';
                            }
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b>Jabatan</b></label></br>
                        <select name="jabatan" id="jabatan" class="form-control" required>
                            <option value="">--Pilih Jabatan--</option>
                            <?php foreach($jabatan as $row){?>
                                <option value = "<?php echo $row->jabatan;?>"><?php echo $row->jabatan;?></option>';
                            }
                            <?php }?>
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <label>Role</label></br>
                        <select name="role" id="role" class="form-control" required>
                            <option value="">--Pilih Role--</option>
                            <?php foreach($role as $row){?>
                                <option value = "<?php echo $row->role;?>"><?php echo $row->role;?></option>';
                            }
                            <?php }?>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label><b>NIK</b></label>
                        <input type="text" name="nik" class="form-control" required>
                        <?php echo form_error('nik', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label><b>Email</b></label>
                        <input type="text" name="email" class="form-control" required>
                        <?php echo form_error('email', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label><b>Password</b></label>
                        <input type="text" name="password" class="form-control" required>
                        <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label><b>Nomor Whatsapp</b></label>
                        <input type="text" name="no_whatsapp" class="form-control" required>
                        <?php echo form_error('no_whatsapp', '<div class="text-small text-danger"></div>') ?>
                    </div><br>
                    <div class="form-group">
                        <label><b>Admin</b></label>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                            Iya
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                            Tidak
                            </label>
                        </div><br>
                        <!-- dikasi form php echo form eror kekkeknya -->
                    </div>
                    <div class="form-group">
                        <label><b>PUMK</b></label>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                            Iya
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                            Tidak
                            </label>
                        </div><br>
                        <div class="form-group">
                        <label><b>KPA</b></label>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                            Iya
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                            Tidak
                            </label><br>
                        </div>
                        <div class="form-group">
                        <label><b>PPK</b></label>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                            Iya
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                            Tidak
                            </label><br>
                        </div>
                        <div class="form-group">
                        <label><b>PJ</b></label>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                            Iya
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                            Tidak
                            </label><br>
                        </div>
                    </div>
                    </div>
                    </div>

                    </div>
                    <button type="submit" class="btn btn-success"><a onclick="return confirm('Data Pegawai berhasil ditambahkan!')">Submit</a></button>&nbsp &nbsp
                    <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
                </form>
            </div>
        </div>                   
</div>
</div>