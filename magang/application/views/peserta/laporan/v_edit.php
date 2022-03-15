<div class="main-panel">
    <div class="content-wrapper">
        <a href="<?= base_url('peserta/laporan/detail/' . $detail->id_lap_ming) ?>" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg></i> Kembali ke <b>Detail Laporan <?= $detail->id_lap_ming ?></b></a>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Edit Laporan Mingguan</h3>
                        </div>
                        <?= form_open_multipart('peserta/laporan/simpanedit', 'class="mt-4"'); ?>
                        <div class="form-group">
                            <input type="hidden" name="id_lap_ming" value="<?= $detail->id_lap_ming; ?>">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="dok_lama" value="<?= $detail->dok_lap_ming; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgllap">Tanggal</label>
                            <input type="date" class="form-control form-control-user" id="tgllap" name="tgllap" value="<?= $detail->tgl_lap_ming; ?>">
                            <?= form_error('tglmli', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isilap">Isi Laporan</label>
                            <textarea class="form-control" id="isilap" name="isilap" rows="13"><?= $detail->isi_lap_ming; ?></textarea>
                            <?= form_error('isilap', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="doklap">Dokumen <br> File dalam bentuk doc/docx/pdf | Maks 3Mb</label>
                            <div class="row">
                                <div class="col-2">
                                    <?php
                                    if ($detail->dok_lap_ming) { ?>
                                        <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/lap_ming/<?= $detail->dok_lap_ming ?>" target="_blank">
                                            <i class="ti ti-file"></i> <?= $detail->dok_lap_ming; ?>
                                        </a>
                                    <?php } ?>
                                </div>
                                <div class="col-10">
                                    <input type="file" class="form-control form-control-lg" id="doklap" name="doklap">
                                </div>
                            </div>
                            <?= form_error('doklap', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary float-right ml-2">Simpan</button> </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>