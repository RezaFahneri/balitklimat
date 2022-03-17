<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Ubah Password</h3><br>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() ?>profil/update">
                                    <div class="form-group">
                                        <label>Password Baru</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Konfirmasi Password Baru</label>
                                        <input type="password" name="cpassword" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-success mr-2">Submit</a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>