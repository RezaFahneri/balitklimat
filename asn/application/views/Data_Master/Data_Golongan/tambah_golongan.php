<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                href="<?php echo site_url('golongan') ?>"><i class="ti ti-arrow-left"
                                    style="border-radius:8px"></i></a>&nbsp Tambah Data
                            Golongan
                        </h3><br>
                        <div class="col-md-12 grid-margin">
                        <?= $this->session->flashdata('message') ?>
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('golongan/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <label>Golongan<a style="color:red"> *</a></label>
                                        <input type="text" name="golongan" class="form-control">
                                        <?= form_error('golongan', '<small class="text-danger">','</small>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</a></button>&nbsp
                                    &nbsp
                                   
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