<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Detail Hasil Penugasan</h3>
                        </div>
                        <a onclick="showdetpm()" class="btn btn-sm btn-info float-right mb-3">Lihat Peserta</a>
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
                                    <td><?= $detail->nama_pm ?> </td>
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
                        <a href="<?= base_url('pegawai/penugasan/detail/' . $detail->id_tugas) ?>" class="btn btn-light float-right">Kembali</a>
                    </div>
                </div>
                <div class="card mb-3" name="detpm" id="detpm" style="display: none;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Ringkasan Peserta</h3>
                        </div>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-md-12"> <a class="btn btn-sm btn-info float-right" href=" <?= base_url('pegawai/peserta/detail/' . $detail->id_pm) ?>"><i class="ti ti-eye"></i></a></div>
                                <div class="col-md-12">
                                    <h3> <small class="text-muted">
                                            Biodata
                                        </small>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">ID Peserta <a class="badge badge-sm badge-info ml-1"><?= $detail->jns_magang ?></a></p>
                                        <p><?= $detail->id_pm; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Nama Lengkap</p>
                                        <p><?= $detail->nama_pm; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Asal Instansi</p>
                                        <p><?= $detail->asal_instansi_pm; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Jurusan</p>
                                        <p><?= $detail->jurusan_pm; ?></p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>