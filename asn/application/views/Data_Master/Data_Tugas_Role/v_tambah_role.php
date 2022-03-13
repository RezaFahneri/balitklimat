<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">
                            <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                    class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('role_penugasan') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>&nbsp Tambah Data Role</h3><br>
                            <div class="col-md-12 grid-margin">
                                <div class="card-body">
                                    <form method="POST"
                                        action="<?php echo base_url('role_penugasan/tambah_aksi_role') ?>">
                                        <div class="form-group">
                                            <label>Role<a style="color:red">*</a></label>
                                            <input type="text" name="role" class="form-control" required>
                                            <?php echo form_error('role', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <button type="submit" class="btn btn-success">Simpan</button>&nbsp
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