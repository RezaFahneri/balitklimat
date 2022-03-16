<div class="main-panel">
    <div class="content-wrapper">
        <a href="<?php echo base_url(); ?>pegawai/penugasan" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg></i> Kembali ke <b>Penugasan</b></a>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Hasil Penugasan</h3>
                        </div>
                        <a title="Lihat hasil tugas peserta" onclick="showttgspm()" class="btn btn-sm btn-info float-right mb-3">Lihat</a>
                        <div class="mt-3" name="ttgspm" id="ttgspm" style="display: none;">
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm tabel-hover text-wrap" id="det_pes" cellspacing="0" style="width:100%; table-layout:fixed">
                                    <thead class="table-light">
                                        <tr style="text-align: center;">
                                            <th width="4%">No.</th>
                                            <th width="30%">Nama Peserta</th>
                                            <th width="30%">Hasil Tugas</th>
                                            <th width="10%">Dokumen</th>
                                            <th width="10%">Status</th>
                                            <th width="10%">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($detailtgs as $dt) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $dt->nama_pm ?></td>
                                                <td><?= character_limiter($dt->hasil_tugas, 30) ?></td>
                                                <td style="text-align: center;"><?php
                                                                                if ($dt->dok_hasil_tugas) { ?>
                                                        <a title="<?= $dt->dok_hasil_tugas ?>" class="" href="<?= base_url() ?>assets/dokumen/hasil_tugas/<?= $dt->dok_hasil_tugas ?>" target="_blank">
                                                            <i class="icon-file"></i>
                                                        </a>
                                                    <?php } ?>
                                                </td>
                                                <td style="text-align: center;"><?php
                                                                                if ($dt->status == 'Berlangsung') { ?>
                                                        <a class="badge badge-warning">Berjalan</a>
                                                    <?php } else { ?>
                                                        <a class="badge badge-success">Diterima</a>
                                                    <?php } ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <a title="Lihat detail hasil tugas" class="btn btn-sm btn-info" href=" <?= base_url('pegawai/penugasan/detail_peserta/' . $dt->id_det_tugas) ?>"><i class="ti ti-eye"></i></a>
                                                    <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Detail Penugasan</h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <a title="Edit Penugasan" href="<?= base_url('pegawai/penugasan/edit/' . $detail->id_tugas) ?>" class="btn btn-sm btn-primary float-right mb-3"><i class="ti ti-pencil"></i>Edit</a>
                        <div class="px-3">
                            <table class="table col-lg table-sm table-borderless" style="width: 100%">
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
                                    <tr>
                                        <th>Peserta</th>
                                        <td><?php
                                            $no = 1;
                                            foreach ($detailtgs as $dt) {
                                            ?><?= $dt->nama_pm ?>, <?php } ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4 mb-4">
                            <h5 class="font-weight-bold mt-3">Isi Penugasan</h5>
                            <div class="com-text">
                                <p style="text-align: justify;"><?= nl2br($detail->isi_tugas); ?></p>
                            </div>
                        </div>
                        <div class="px-4 mb-4">
                            <h5 class="font-weight-bold mt-3">Dokumen</h5>
                            <?php
                            if ($detail->dok_tugas) { ?>
                                <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/tugas/<?= $detail->dok_tugas ?>" target="_blank">
                                    <i class="ti ti-file"></i> <?= $detail->dok_tugas; ?>
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
</div>
</div>