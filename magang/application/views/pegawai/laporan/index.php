<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10"><?= $sub; ?></h3>
                            <div class="mt-3">
                                <div class="mt-3">
                                    <div class="table-responsive">
                                        <table class="table table-bordered tabel-hover" id="peg_laporan" cellspacing="0">
                                            <thead class="table-light">
                                                <tr style="text-align: center;">
                                                    <th>No.</th>
                                                    <th>Tanggal</th>
                                                    <th>Peserta</th>
                                                    <th class="no-sort">Isi Laporan</th>
                                                    <!-- <th>Dokumen</th> -->
                                                    <?php
                                                    if ($sub == 'Laporan Mingguan Peserta Bimbingan') { ?>
                                                        <th>Review</th>
                                                    <?php } else { ?>
                                                        <th>Pembimbing</th>
                                                    <?php } ?>
                                                    <th class="no-sort">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($sub == 'Laporan Mingguan Peserta Bimbingan') { ?>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($detail as $d) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= date('d M Y', strtotime($d->tgl_lap_ming)) ?></td>
                                                            <td><?= character_limiter($d->nama_pm, 30) ?></td>
                                                            <td><?= character_limiter($d->isi_lap_ming, 30) ?></td>
                                                            <td><?php
                                                                if ($d->review_lap) { ?>
                                                                    <a class="badge badge-sm badge-primary">Direview</a>
                                                                    <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                                <?php } ?>
                                                            </td>
                                                            <!-- <td><?= character_limiter($d->dok_lap_ming, 40); ?></td> -->
                                                            <td>
                                                                <a class="btn btn-sm btn-info" href="<?= base_url('pegawai/laporan/detail/' . $d->id_lap_ming) ?>"><i class="ti ti-eye"></i></a>
                                                                <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($details as $d) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $d->tgl_lap_ming ?></td>
                                                            <td><?= character_limiter($d->nama_pm, 25) ?></td>
                                                            <td><?= character_limiter($d->isi_lap_ming, 25) ?></td>
                                                            <td><?= character_limiter($d->nama_pegawai, 20) ?></td>
                                                            <!-- <td><?= character_limiter($d->dok_lap_ming, 12); ?></td> -->
                                                            <td> <?php
                                                                    if ($d->pembimbing_balai != $nip) { ?>
                                                                    <a class="btn btn-sm btn-primary" href="<?= base_url('pegawai/laporan/det_lap/' . $d->id_lap_ming) ?>"><i class="ti ti-eye"></i></a>
                                                                    <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                                <?php } else { ?>
                                                                    <a class="btn btn-sm btn-info" href="<?= base_url('pegawai/laporan/detail/' . $d->id_lap_ming) ?>"><i class="ti ti-eye"></i></a>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
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