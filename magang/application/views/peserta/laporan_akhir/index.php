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
                                <a title="Tambahkan laporan akhir" href="<?= base_url() ?>peserta/lap_akhir/tambah" class="btn btn-primary btn-sm btn-icon-text mt-2">
                                    <i class="ti ti-plus"></i>
                                    Tambah Laporan Akhir
                                </a>
                            <?php } else { ?>
                            <?php } ?>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="mt-4">
                            <h6 class="font-weight-light" style="color: red;">Apabila sudah menyelesaikan tugas, maka bisa menambahakan Laporan Akhir dari kegiatan magang yang sudah dikerjakan. <br>- Hanya bisa menambahkan satu kali laporan akhir.<br>- Setelah menambahkan laporan akhir, maka akan mendapatkan sertifikat melalui Email.</h6>
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

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>