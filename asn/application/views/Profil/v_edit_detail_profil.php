<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali" class="btn btn-sm btn-secondary" style="border-radius:90px; color:white" href="<?php echo site_url(
                            'profil'
                        ); ?>"><i class="ti ti-arrow-left" style="border-radius:8px"></i></a>&nbsp Ubah Password</h3><br>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata(
                            'error'
                        ) ?>">
                        </div>
                        <div class="col-md-12 grid-margin">
                        <?= $this->session->flashdata('message') ?>
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="POST"
                                    action="<?php echo base_url(); ?>profil/update">
                                    <div class="form-group">
                                        <label>Password Baru</label>
                                        <input type="password" name="password" class="form-control" >
                                        <?php echo form_error('password','<small class="text-danger">', '</small>'); ?>

                                    </div>
                                    <div class="form-group">
                                        <label>Konfirmasi Password Baru</label>
                                        <input type="password" name="cpassword" class="form-control" >
                                        <?php echo form_error('cpassword','<small class="text-danger">', '</small>'); ?>

                                    </div>
                                    <button type="submit" class="btn btn-success mr-2">Simpan</a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>