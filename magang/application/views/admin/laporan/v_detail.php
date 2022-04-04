<div class="main-panel">
    <div class="content-wrapper">
        <?php
        if ($jns == "1") { ?>
            <a href="<?= base_url(); ?>admin/laporan" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg></i> Kembali ke <b>Laporan Peserta Bimbingan</b></a>
        <?php } else { ?>
            <a href="<?= base_url(); ?>admin/laporan/laporan_seluruh" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg></i> Kembali ke <b>Laporan Seluruh Peserta</b></a>
        <?php } ?>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10"> <?php
                                                                if ($jns == "1") { ?>
                                    Detail Laporan Mingguan Peserta Bimbingan
                                <?php } else { ?>
                                    Detail Laporan Mingguan
                                <?php } ?>
                            </h3>
                        </div>
                        <?php
                        if ($jns == "1") { ?>
                            <?php
                            if ($detail->review_lap) { ?>
                                <button title="Ubah review" class="btn btn-sm btn-info float-right mb-3" data-toggle="modal" data-target="#exampleModalLong<?= $detail->id_lap_ming ?>">
                                    <i class="ti ti-pencil"></i>Review
                                </button>
                            <?php } else { ?>
                                <button title="Tambah review" class="btn btn-sm btn-primary float-right mb-3" data-toggle="modal" data-target="#exampleModalLong<?= $detail->id_lap_ming ?>">
                                    <i class="ti ti-plus"></i>Review
                                </button>
                            <?php } ?>
                            <!-- <button title="Tambah review" onclick="addrev()" class="btn btn-sm btn-primary float-right mb-3"><i class="ti ti-plus"></i> Review</button> -->
                        <?php } ?>
                        <div class="table-responsive">
                            <div class="px-3 mt-3">
                                <table class="table table-sm col-lg table-borderless" style="width: 100%">
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
                                        <?php
                                        if ($jns == "0") { ?>
                                            <tr>
                                                <th>Pembimbing</th>
                                                <td><?= $details->nama_pegawai ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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
                                <?php
                                if ($jns == "1") { ?>
                                    <a title="Hapus review" onclick="return confirm('Apakah anda yakin untuk menghapus review?')" href="<?= base_url('admin/laporan/hapus/' . $detail->id_lap_ming) ?>" class="btn btn-sm btn-danger float-right"><i class="ti ti-trash"></i></a>
                                <?php } ?>
                                <div class="com-text">
                                    <p style="text-align: justify;"><?= nl2br($detail->review_lap); ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong<?= $detail->id_lap_ming ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Review | <?= $detail->id_lap_ming ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('admin/laporan/re_view/' . $detail->id_lap_ming) ?>">
                    <textarea class="form-control" id="isirev" name="isirev" rows="8"><?= $detail->review_lap; ?></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Kembali</button>
                <?php
                if ($detail->review_lap) { ?>
                    <button type="submit" class="btn btn-info">Ubah</button>
                <?php } else { ?>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                <?php } ?>
            </div>
            </form>
        </div>
    </div>
</div>