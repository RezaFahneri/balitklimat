<div class="main-panel">
    <div class="content-wrapper">
        <?php
        if ($detail->nip == $nip) { ?>
            <a href="<?= base_url(); ?>pegawai/lap_akhir" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg></i> Kembali ke <b>Laporan Akhir Peserta Bimbingan</b></a>
        <?php } else { ?>
            <a href="<?= base_url(); ?>pegawai/lap_akhir/lap_akhir_seluruh" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg></i> Kembali ke <b>Laporan Akhir Seluruh Peserta</b></a>
        <?php } ?>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Detail Laporan Akhir</h3>
                            <div class="mt-4">
                                <div class="px-3 mt-3">
                                    <table class="table col-lg table-sm table-borderless" style="width: 100%">
                                        <colgroup>
                                            <col span="1" style="width: 20%;">
                                            <col span="2" style="width: 80%;">
                                        </colgroup>
                                        <tbody>
                                            <!-- <tr>
                                        <th>Tanggal</th>
                                        <td><?= $detail->tgl_up_lapak ?></td>
                                    </tr> -->
                                            <tr>
                                                <th>Nama Peserta</th>
                                                <td><a class="text-primary" href=" <?= base_url('pegawai/peserta/detail/' . $detail->id_pm) ?>">
                                                        <p style="font-size: medium;"><?= $detail->nama_pm ?></p>
                                                    </a></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Magang</th>
                                                <td><?= $detail->jns_magang ?></td>
                                            </tr>
                                            <tr>
                                                <th>Asal Instansi</th>
                                                <td><?= $detail->asal_instansi_pm ?></td>
                                            </tr>
                                            <?php
                                            if ($detail->nip == $nip) { ?>
                                            <?php } else { ?>
                                                <tr>
                                                    <th>Pembimbing Balai</th>
                                                    <td><?= $detail->nama_pegawai ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="px-4 mb-4">
                                <h5 class="mt-3 text-primary" style="font-size:18pt ; text-align:center"><?= $detail->judul_lapak ?></h5>
                            </div>
                            <div class="px-4 mt-4 mb-4">
                                <h5 class="font-weight-bold mt-3">Abstrak</h5>
                                <div class="com-text">
                                    <p style="text-align: justify;"><?= nl2br($detail->abstrak_lapak); ?></p>
                                </div>
                            </div>
                            <div class="px-4 mb-4">
                                <h5 class="font-weight-bold mt-3">Dokumen</h5>
                                <?php
                                if ($detail->dok_lapak) { ?>
                                    <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/lap_ak/<?= $detail->dok_lapak ?>" target="_blank">
                                        <i class="ti ti-file"></i> <?= $detail->dok_lapak; ?>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                        if ($detail->nip == $nip) { ?>
                            <a href="<?= base_url(); ?>pegawai/lap_akhir" class="btn btn-light float-right">Kembali</a>
                        <?php } else { ?>
                            <a href="<?= base_url(); ?>pegawai/lap_akhir/lap_akhir_seluruh" class="btn btn-light float-right">Kembali</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>