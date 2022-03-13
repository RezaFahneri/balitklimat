<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">

                        <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                href="<?php echo site_url('pangkat') ?>"><i class="ti ti-arrow-left"></i></a>&nbsp
                            Tambah Data
                            Pangkat
                        </h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form id="form_pangkat" method="POST"
                                    action="<?php echo base_url('pangkat/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <label for="pangkat">Pangkat <a style="color:red"> *</a></label>
                                        <input type="text" name="pangkat" class="form-control" required>
                                        <?= form_error('pangkat', '<small class="text-danger">','</small>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</a></button>&nbsp
                                    &nbsp
                                    <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
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