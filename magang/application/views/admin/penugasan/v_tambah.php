<div class="main-panel">
    <div class="content-wrapper">
        <a href="<?= base_url('admin/penugasan') ?>" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg></i> Kembali ke <b>Penugasan</b></a>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Tambah penugasan</h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <?= form_open_multipart('admin/penugasan/tambah', 'class="mt-4"'); ?>
                        <div class="form-group">
                            <label>Peserta<i style="color:red">*</i></label>
                            <select class="js-example-basic-single w-100" multiple="multiple" id='pm' name='pm[]'>
                                <option value="" disabled> --Pilih Peserta--</option>
                                <?php foreach ($peserta as $pm) { ?>
                                    <option value="<?= $pm->id_pm; ?>"><?= $pm->nama_pm; ?></option>';
                                <?php } ?>
                            </select>
                            <?php echo form_error('pm', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tgltgs">Tanggal Pengumpulan<i style="color:red">*</i></label>
                            <input type="date" class="form-control form-control-user" id="tgltgs" name="tgltgs" value="<?= set_value('tgltgs'); ?>">
                            <?php echo form_error('tgltgs', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isitgs">Isi penugasan<i style="color:red">*</i></label>
                            <textarea class="form-control" id="isitgs" name="isitgs" rows="15"><?= set_value('isitgs'); ?></textarea>
                            <?php echo form_error('isitgs', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="doktgs">Dokumen <br> File dalam bentuk doc/docx/pdf | Maks 3Mb</label>
                            <input type="file" class="form-control form-control-lg" id="doktgs" name="doktgs">
                            <?php echo form_error('doktgs', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary float-right ml-2">Simpan</button> </form>
                    </div>
                </div>
            </div>
        </div>
    </div>