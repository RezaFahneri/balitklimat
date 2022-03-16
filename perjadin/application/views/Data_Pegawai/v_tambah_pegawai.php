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
                                        <input type="hidden" name="id_golongan" value="1" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="id_status_peg" value="1" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="id_pangkat" value="1" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="id_jabatan" value="1" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="id_divisi" value="1" class="form-control" required>
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