<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Tambah Laporan Akhir</h3>
                            <?= $this->session->flashdata('message'); ?>
                            <?= form_open_multipart('peserta/lap_akhir/tambah', 'class="mt-4"'); ?>
                            <div class="form-group">
                                <label for="judullapak">Nama untuk Sertifikat<i style="color:red">*</i> <br> Boleh disingkat</label>
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="judullapak">Judul<i style="color:red">*</i></label>
                                <input type="text" class="form-control form-control-user" id="judullapak" name="judullapak" value="<?= set_value('judulapak'); ?>">
                                <?= form_error('judullapak', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="abstraklapak">Abstrak<i style="color:red">*</i></label>
                                <textarea class="form-control" id="abstraklapak" name="abstraklapak" rows="13"><?= set_value('isilap'); ?></textarea>
                                <?= form_error('abstraklapak', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="doklapak">Dokumen<i style="color:red">*</i> <br> File dalam bentuk doc/docx/pdf | Maks 3Mb</label>
                                <input type="file" class="form-control form-control-lg" id="doklapak" name="doklapak">
                                <?= form_error('doklapak', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <button onclick="return confirm('Apakah anda yakin untuk menyimpan data?')" type="submit" class="btn btn-primary float-right ml-2">Simpan</button>
                            <a href="<?= base_url('peserta/lap_akhir') ?>" class="btn btn-light float-right">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>