<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <a style="font-size:40px; color:#000000" href="<?php echo base_url() ?>kendaraan"><i class="mdi mdi-keyboard-backspace"></i></a>
                        <h3 class="m-0 font-weight-bold">Edit Data Kendaraan</h3><br>
                        <div class="flash-data" id="flash5" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <?php foreach ($edit as $e) { ?>
                                            <form method="POST" action="<?php echo base_url('kendaraan/update'); ?>" enctype="multipart/form-data"></br>
                                                <div class="form-group">
                                                    <input type="hidden" name="id_kendaraan" class="form-control" value="<?php echo $e->id_kendaraan ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>No Polisi </label>
                                                    <input type="text" name="no_polisi" class="form-control" value="<?php echo $e->no_polisi ?>" required>
                                                    <?php echo form_error('no_polisi', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Merk </label>
                                                    <input type="text" name="merk" class="form-control" value="<?php echo $e->merk ?>" required>
                                                    <?php echo form_error('merk', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Kendaraan </label></br>
                                                    <select name="jenis" id="jenis" class="form-control" required>
                                                        <option value="">--Pilih Jenis Kendaraan--</option>
                                                        <option value="Roda 2" <?php if ($e->jenis == 'Roda 2') {
                                                                                    echo 'selected';
                                                                                } ?>>Roda 2</option>
                                                        <option value="Roda 3" <?php if ($e->jenis == 'Roda 3') {
                                                                                    echo 'selected';
                                                                                } ?>>Roda 3</option>
                                                        <option value="Roda 4" <?php if ($e->jenis == 'Roda 4') {
                                                                                    echo 'selected';
                                                                                } ?>>Roda 4</option>
                                                    </select>
                                                </div>
                                                <input type="submit" class="btn btn-success" name="submit" value="Simpan">&nbsp &nbsp
                                                <a class="btn btn-light" href="<?php echo base_url(); ?>kendaraan">Cancel</a>
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