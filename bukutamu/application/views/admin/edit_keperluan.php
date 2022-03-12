<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Edit Keperluan</h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <?= form_open_multipart('admin/tambah_data/simpan_kep', 'class="mt-4"'); ?>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $detail->id_keperluan; ?>">
                        </div>
                        <div class="form-group">
                            <label for="namakep">Nama Keperluan<i style="color:red">*</i></label>
                            <input type="text" class="form-control form-control-user" id="namakep" name="namakep" value="<?= $detail->nama_keperluan; ?>">
                            <?php echo form_error('namakep', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ketkep">Keterangan<i style="color:red">*</i></label>
                            <textarea class="form-control" id="ketkep" name="ketkep" rows="13"><?= $detail->ket_keperluan; ?></textarea>
                            <?php echo form_error('ketkep', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary float-right ml-2">Simpan</button>
                        <a href="<?php echo base_url(); ?>admin/tambah_data" class="btn btn-light float-right">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>