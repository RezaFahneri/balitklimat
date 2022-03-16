<div class="main-panel">
    <div class="content-wrapper">
        <a href="<?php echo base_url(); ?>peserta/laporan" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg></i> Kembali ke <b>Laporan</b></a>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Detail Laporan Mingguan</h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <a title="Edit Laporan" class="btn btn-sm btn-info float-right mb-3" href="<?= base_url('peserta/laporan/edit/' . $detail->id_lap_ming) ?>"><i class="ti ti-pencil"></i>Edit</a>
                        <div class="px-3">
                            <table class="table col-lg table-sm  table-borderless" style="width: 100%">
                                <colgroup>
                                    <col span="1" style="width: 20%;">
                                    <col span="2" style="width: 80%;">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>Tanggal</th>
                                        <td><?= date('d M Y', strtotime($detail->tgl_lap_ming)) ?></td>
                                    </tr>
                                    <!--<tr>
                                            <th>Isi Laporan</th>
                                            <td><?= $detail->isi_lap_ming ?></td>
                                        </tr>-->
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>