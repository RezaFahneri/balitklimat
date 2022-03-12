<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Detail Laporan Akhir</h3>
                            <?php
                            if (!$detail) { ?>
                                <a href="<?= base_url() ?>peserta/lap_akhir/tambah" class="btn btn-primary btn-sm btn-icon-text mb-2">
                                    <i class="ti ti-plus"></i>
                                    Tambah Laporan Akhir
                                </a>
                            <?php } else { ?>
                            <?php } ?>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="mt-4">
                            <?php
                            if ($detail) { ?>
                                <div class="mb-3">
                                    <label for="judullapak">Judul</label>
                                    <input readonly type="text" class="form-control form-control-user" id="judullapak" name="judullapak" value="<?= $detail->judul_lapak ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="abstraklapak">Abstrak</label>
                                    <textarea readonly class="form-control" id="abstraklapak" name="abstraklapak" rows="13"><?= $detail->abstrak_lapak; ?></textarea>
                                </div>
                                <label for="doklapak">Dokumen</label>
                                <br>
                                <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/lap_ak/<?= $detail->dok_lapak ?>" target="_blank">
                                    <i class="ti ti-file"></i> <?= $detail->dok_lapak; ?>
                                </a>
                            <?php } else { ?>
                                <div class="mb-3">
                                    <label for="judullapak">Judul</label>
                                    <input readonly type="text" class="form-control form-control-user" id="judullapak" name="judullapak" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="abstraklapak">Abstrak</label>
                                    <textarea readonly class="form-control" id="abstraklapak" name="abstraklapak" rows="13"></textarea>
                                </div>
                                <label for="doklapak">Dokumen</label>
                                <br>
                                <a class="btn btn-outline-info btn-sm btn-icon-text">
                                    <i class="ti ti-file"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>