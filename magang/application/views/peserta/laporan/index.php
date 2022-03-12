<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Laporan Mingguan</h3>
                            <div class="mt-3">
                                <a href="<?= base_url() ?>peserta/laporan/tambah" class="btn btn-primary btn-sm btn-icon-text mb-2">
                                    <i class="ti ti-plus"></i>
                                    Tambah Laporan
                                </a>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="mt-3">
                                <div class="table-responsive">
                                    <table class="table table-bordered tabel-hover" id="pes_lap" cellspacing="0">
                                        <thead class="table-light">
                                            <tr style="text-align: center;">
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th class="no-sort">Isi Lap</th>
                                                <th class="no-sort">Dokumen</th>
                                                <th class="no-sort">Review</th>
                                                <th class="no-sort">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($lap as $lm) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= date('d M Y', strtotime($lm->tgl_lap_ming)) ?></td>
                                                    <td><?= character_limiter($lm->isi_lap_ming, 20) ?></td>
                                                    <td style="text-align: center;"><?php
                                                                                    if ($lm->dok_lap_ming) { ?>
                                                            <a class="" href="<?= base_url() ?>assets/dokumen/lap_ming/<?= $lm->dok_lap_ming ?>" target="_blank">
                                                                <i class="icon-file"></i>
                                                            </a>
                                                        <?php } ?>
                                                    </td>
                                                    <td><?php
                                                        if ($lm->review_lap) { ?>
                                                            <a class="badge badge-sm badge-primary">Direview</a>
                                                            <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm btn-info" href="<?= base_url('peserta/laporan/detail/' . $lm->id_lap_ming) ?>"><i class="ti ti-eye"></i></a>
                                                        <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                        <a onclick="return confirm('Apakah anda yakin untuk menghapus data?')" class="btn btn-sm btn-danger" href="<?= base_url('peserta/laporan/hapus/' . $lm->id_lap_ming) ?>"><i class="ti ti-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>