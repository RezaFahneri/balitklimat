<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Detail Penugasan</h3>
                        </div>
                        <a onclick="showdettgsps()" class="btn btn-sm btn-info float-right mb-3">Lihat</a>
                        <table class="table col-lg table-borderless" style="width: 100%">
                            <colgroup>
                                <col span="1" style="width: 20%;">
                                <col span="2" style="width: 80%;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>ID Penugasan</th>
                                    <td><?= $detail->id_tugas ?>
                                        <?php
                                        if ($detail->tgl_pengumpulan < date('Y-m-d')) { ?>
                                            <a class="badge badge-danger">Selesai</a>
                                        <?php } else { ?>
                                            <a class="badge badge-warning">Berjalan</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pengumpulan</th>
                                    <td><?= date('d M Y', strtotime($detail->tgl_pengumpulan)) ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div name="dettgsps" id="dettgsps" style="display: none;">
                            <div class="px-4 mb-4">
                                <h5 class="font-weight-bold mt-3">Isi Penugasan</h5>
                                <div class="com-text">
                                    <p style="text-align: justify;"><?= nl2br($detail->isi_tugas); ?></p>
                                </div>
                            </div>
                            <div class="px-4 mb-4">
                                <?php
                                if ($detail->dok_tugas) { ?>
                                    <h5 class="font-weight-bold mt-3">Dokumen</h5>
                                    <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/tugas/<?= $detail->dok_tugas ?>" target="_blank">
                                        <i class="ti ti-file"></i> <?= $detail->dok_tugas; ?>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="mt-5">
                            <a href="<?= base_url(); ?>peserta/penugasan" class="btn btn-light float-right">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Hasil Penugasan</h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <div>
                            <?php
                            if ($detail->tgl_pengumpulan < date('Y-m-d')) { ?>
                            <?php } else { ?>
                                <?php
                                if ($detail->status == 'Berlangsung') { ?>
                                    <a href=" <?= base_url('peserta/penugasan/tambah/' . $detail->id_det_tugas) ?>" class="btn btn-sm btn-primary float-right mb-3"><i class="ti ti-plus"></i> Kerjakan</a>
                                <?php } else { ?>
                                    <a href=" <?= base_url('peserta/penugasan/tambah/' . $detail->id_det_tugas) ?>" class="btn btn-sm btn-info float-right mb-3"><i class="ti ti-pencil"></i> Edit</a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <table class="table col-lg table-borderless" style="width: 100%">
                            <colgroup>
                                <col span="1" style="width: 20%;">
                                <col span="2" style="width: 80%;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>ID Detail Tugas</th>
                                    <td><?= $detail->id_det_tugas ?>
                                        <?php
                                        if ($detail->status == 'Berlangsung') { ?>
                                            <a class="badge badge-warning">Berjalan</a>
                                        <?php } else { ?>
                                            <a class="badge badge-success">Dikumpul</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nama Peserta</th>
                                    <td><?= $user2['nama_pm'] ?> </td>
                                </tr>
                                <!-- <tr>
                                            <th>Hasil Tugas</th>
                                            <td><?= $detail->hasil_tugas ?></td>
                                        </tr> -->
                            </tbody>
                        </table>
                        <div class="px-4 mb-4">
                            <?php
                            if ($detail->hasil_tugas) { ?>
                                <h5 class="font-weight-bold mt-3">Hasil Penugasan</h5>
                                <div class="com-text">
                                    <p style="text-align: justify;"><?= nl2br($detail->hasil_tugas); ?></p>
                                </div>
                            <?php } else { ?>
                                <div class="mt-12">
                                    <p style="color: red; text-align:center; font-weight:bold; font-size: large">Hasil Tugas Belum ada</p>
                                </div>
                            <?php } ?>
                        </div>
                        <?php
                        if ($detail->dok_hasil_tugas) { ?>
                            <div class="px-4 mb-4">
                                <h5 class="font-weight-bold mt-3">Dokumen</h5>
                                <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/hasil_tugas/<?= $detail->dok_hasil_tugas ?>" target="_blank">
                                    <i class="ti ti-file"></i> <?= $detail->dok_hasil_tugas; ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>