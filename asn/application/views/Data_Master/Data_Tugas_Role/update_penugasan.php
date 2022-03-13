<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">
                            <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                    class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('role_penugasan/penugasan') ?>"><i
                                        class="ti ti-arrow-left" style="border-radius:8px"></i></a>&nbsp Edit Data
                                Penugasan</h3><br>
                            <div class="flash-data" id="flash2"
                                data-flash="<?= $this->session->flashdata('sukses'); ?>">
                            </div>
                            <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>">
                            </div>
                            <div class="col-md-12 grid-margin">
                                <div class="card-body">
                                    <?php foreach ($data_tugas as $g) { ?>
                                    <form method="POST"
                                        action="<?php echo base_url() ?>role_penugasan/update_penugasan">
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id_tugas" value="<?php echo $g->id_tugas ?>">
                                            </td>
                                        </tr>
                                        <div class="form-group">
                                            <label>Penugasan </label>
                                            <input type="text" name="penugasan" class="form-control"
                                                value="<?php echo $g->penugasan?>" name="pangkat" required>
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