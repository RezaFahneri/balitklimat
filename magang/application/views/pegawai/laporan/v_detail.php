<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Detail Laporan Mingguan</h3>
                        </div>
                        <?php
                        if ($jns == "1") { ?>
                            <button onclick="addrev()" class="btn btn-sm btn-primary float-right mb-3"><i class="ti ti-plus"></i> Review</button>
                        <?php } ?>
                        <div class="table-responsive">
                            <table class="table col-lg table-borderless" style="width: 100%">
                                <colgroup>
                                    <col span="1" style="width: 20%;">
                                    <col span="2" style="width: 80%;">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>ID Laporan</th>
                                        <td><?= $detail->id_lap_ming ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal</th>
                                        <td><?= date('d M Y', strtotime($detail->tgl_lap_ming)) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Peserta</th>
                                        <td><?= $detail->nama_pm ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4 mb-4">
                            <h5 class="font-weight-bold mt-3">Isi Laporan</h5>
                            <div class="com-text">
                                <p style="text-align: justify;"><?= nl2br($detail->isi_lap_ming); ?></p>
                            </div>
                        </div>
                        <div class="px-4 mb-4">
                            <h5 class="font-weight-bold mt-3">Dokumen</h5>
                            <?php
                            if ($detail->dok_lap_ming) { ?>
                                <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/lap_ming/<?= $detail->dok_lap_ming ?>" target="_blank">
                                    <i class="ti ti-file"></i> <?= $detail->dok_lap_ming; ?>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="px-4 mb-4">
                            <?php
                            if ($detail->review_lap) { ?>
                                <h5 class="font-weight-bold mt-3 text-primary">Review</h5>
                                <div class="com-text">
                                    <p style="text-align: justify;"><?= nl2br($detail->review_lap); ?></p>
                                </div>
                            <?php } ?>
                        </div>
                        <?php
                        if ($jns == "1") { ?>
                            <a href="<?= base_url(); ?>pegawai/laporan" class="btn btn-light float-right">Kembali</a>
                        <?php } else { ?>
                            <a href="<?= base_url(); ?>pegawai/laporan/laporan_seluruh" class="btn btn-light float-right">Kembali</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="card" id="crev" name="crev" style="display: none;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Tambah Review</h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <?= form_open_multipart('pegawai/laporan/review', 'class="mt-4"'); ?>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $detail->id_lap_ming; ?>">
                        </div>
                        <div class="form-group">
                            <label for="isirev">Review
                                <?php
                                if ($detail->status_rev == 'sent') { ?>
                                    <a class="badge badge-warning">Terkirim</a>
                                <?php } elseif ($detail->status_rev == 'read') { ?>
                                    <a class="badge badge-success">Dilihat</a>
                                <?php } else { ?>
                                <?php } ?>
                            </label>
                            <?php
                            if ($detail->review_lap) { ?>
                                <a onclick="return confirm('Apakah anda yakin untuk menghapus review?')" href="<?= base_url('pegawai/laporan/hapus/' . $detail->id_lap_ming) ?>" class="btn btn-sm btn-danger float-right"><i class="ti ti-trash"></i></a>
                            <?php } ?>
                            <div class="mt-2">
                                <textarea class="form-control" id="isirev" name="isirev" rows="13"><?= $detail->review_lap; ?></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right ml-2">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>