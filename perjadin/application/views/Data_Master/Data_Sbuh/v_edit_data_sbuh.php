<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a title="Kembali" class="btn btn-sm btn-success" style="border-radius:90px; color:white" href="<?php echo site_url('sbuh') ?>"><i class="ti ti-arrow-left" style="border-radius:8px"></i></a>
                        <br><br><h3 class="m-0 font-weight-bold text-primary">Edit Data Standar Biaya Uang Harian</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <?php foreach ($data_sbuh as $p) { ?>
                                    <form method="POST" action="<?php echo base_url() ?>sbuh/update">
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id_sbuh" value="<?php echo $p->id_sbuh ?>">
                                            </td>
                                        </tr>
                                        <div class="form-group">
                                            <label>Provinsi </label>
                                            <input readonly type="text" name="nama_provinsi" class="form-control" value="<?php echo $p->nama_provinsi ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Luar Kota </label>
                                            <input type="text" name="luar_kota" class="form-control" value="<?php echo $p->luar_kota ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Dalam Kota </label>
                                            <input type="text" name="dalam_kota" class="form-control" value="<?php echo $p->dalam_kota ?>" required>
                                        </div>
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