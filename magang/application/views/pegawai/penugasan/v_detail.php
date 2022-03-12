<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Hasil Penugasan</h3>
                        </div>
                        <a onclick="showttgspm()" class="btn btn-sm btn-info float-right mb-3">Lihat</a>
                        <div class="mt-3" name="ttgspm" id="ttgspm" style="display: none;">
                            <div class="table-responsive">
                                <table class="table table-borderless table-sm tabel-hover" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Peserta</th>
                                            <th>Hasil Tugas</th>
                                            <th>Dokumen Hasil</th>
                                            <th>Status</th>
                                            <th>Detail</th>
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
                                                <td><?= $dt->hasil_tugas ?></td>
                                                <td><?= $dt->dok_hasil_tugas; ?></td>
                                                <td><?php
                                                    if ($dt->status == 'Berlangsung') { ?>
                                                        <a class="badge badge-warning">Berjalan</a>
                                                    <?php } else { ?>
                                                        <a class="badge badge-success">Diterima</a>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-info" href=" <?= base_url('pegawai/penugasan/detail_peserta/' . $dt->id_det_tugas) ?>"><i class="ti ti-eye"></i></a>
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
                        <a href="<?= base_url('pegawai/penugasan/edit/' . $detail->id_tugas) ?>" class="btn btn-sm btn-primary float-right mb-3"><i class="ti ti-pencil"></i>Edit</a>
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
                                <tr>
                                    <th>Peserta</th>
                                    <td><?php
                                        $no = 1;
                                        foreach ($detailtgs as $dt) {
                                        ?><?= $dt->nama_pm ?>, <?php } ?></td>
                                </tr>
                            </tbody>
                        </table>
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
                        <a href="<?= base_url(); ?>pegawai/penugasan" class="btn btn-light float-right">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>