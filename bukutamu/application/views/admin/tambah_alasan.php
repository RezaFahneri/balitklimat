<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Tambah Alasan</h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <?= form_open_multipart('admin/tambah_data/tambah_alasan', 'class="mt-4"'); ?>
                        <div class="form-group">
                            <label for="namaals">Nama Alasan<i style="color:red">*</i></label>
                            <input type="text" class="form-control form-control-user" id="namaals" name="namaals" value="<?= set_value('namaals'); ?>">
                            <?php echo form_error('namaals', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ketals">Keterangan<i style="color:red">*</i></label>
                            <textarea class="form-control" id="ketals" name="ketals" rows="13"><?= set_value('ketals'); ?></textarea>
                            <?php echo form_error('ketals', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary float-right ml-2">Simpan</button>
                        <a href="<?php echo base_url(); ?>admin/tambah_data" class="btn btn-light float-right">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>