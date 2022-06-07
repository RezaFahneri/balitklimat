<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">
                            <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                    class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('divisi') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>&nbsp Edit Data Divisi</h3><br>
                            <div class="col-md-12 grid-margin">
                            <?= $this->session->flashdata('message') ?>
                                <div class="card-body">
                                    <?php foreach ($data_divisi as $d) { ?>
                                    <form method="POST" action="<?php echo base_url() ?>divisi/update">
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id_divisi"
                                                    value="<?php echo $d->id_divisi ?>">
                                            </td>
                                        </tr>
                                        <div class="form-group">
                                        <label>Divisi<a style="color:red"> *</a></label>
                                            <input type="text" name="divisi" class="form-control"
                                                value="<?php echo $d->divisi?>" name="divisi">
                                                <?= form_error('divisi', '<small class="text-danger">','</small>') ?>
                                            </div>
                                        <button type="submit" class="btn btn-success mr-2">Simpan</a></button>&nbsp
                                        &nbsp
                                    </form>
                                    <?php } ?>
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