<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a title="Kembali" class="btn btn-sm btn-success" style="border-radius:90px; color:white" href="<?php echo site_url('sbuh') ?>"><i class="ti ti-arrow-left" style="border-radius:8px"></i></a>
                        <br><br><h3 class="m-0 font-weight-bold text-primary">Tambah Standar Biaya Uang Harian</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('sbuh/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <label>Provinsi </label>
                                        <input type="text" name="nama_provinsi" class="form-control" required>
                                        <?php echo form_error('nama_provinsi', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Luar Kota </label>
                                        <input type="text" name="luar_kota" class="form-control" required>
                                        <?php echo form_error('luar_kota', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Dalam Kota </label>
                                        <input type="text" name="dalam_kota" class="form-control" required>
                                        <?php echo form_error('dalam_kota', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>&nbsp &nbsp
                                    <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>