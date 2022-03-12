<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Edit Laporan Akhir</h3>
                            <?= $this->session->flashdata('message'); ?>
                            <?= form_open_multipart('peserta/lap_akhir/simpan', 'class="mt-4"'); ?>
                            <div class="form-group">
                                <input type="hidden" name="id_lapak" value="<?= $detail->id_lapak; ?>">
                            </div>
                            <div class="form-group">
                                <label for="judullapak">Judul</label>
                                <input type="text" class="form-control form-control-user" id="judullapak" name="judullapak" value="<?= $detail->judul_lapak; ?>">
                            </div>
                            <div class="form-group">
                                <label for="abstraklapak">Abstrak</label>
                                <textarea class="form-control" id="abstraklapak" name="abstraklapak" rows="13"><?= $detail->abstrak_lapak; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="doklap">Dokumen</label>
                                <div class="row">
                                    <div class="col-3">
                                        <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/lap_ak/<?= $detail->dok_lapak ?>" target="_blank">
                                            <i class="ti ti-file"></i> <?= $detail->dok_lapak; ?>
                                        </a>
                                    </div>
                                    <div class="col-9">
                                        <input type="file" class="form-control form-control-lg" id="doklapak" name="doklapak">
                                    </div>
                                </div>
                                <?= form_error('doklap', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary float-right ml-2">Simpan</button>
                            <a href="<?= base_url('peserta/lap_akhir') ?>" class="btn btn-light float-right">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>