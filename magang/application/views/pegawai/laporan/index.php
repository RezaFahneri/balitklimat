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
                                        <table class="table table-bordered tabel-hover text-wrap" id="peg_laporan" cellspacing="0" style="width:100%; table-layout:fixed">
                                            <thead class="table-light">
                                                <?php
                                                if ($sub == 'Laporan Mingguan Peserta Bimbingan') { ?>
                                                    <tr style="text-align: center;">
                                                        <th width="3%">No.</th>
                                                        <th width="12%">Tanggal</th>
                                                        <th width="22%">Peserta</th>
                                                        <th width="30%" class="no-sort">Isi Laporan</th>
                                                        <!-- <th>Dokumen</th> -->
                                                        <th width="6%">Review</th>
                                                        <th width="6%" class="no-sort">Aksi</th>
                                                    </tr>
                                                <?php } else { ?>
                                                    <tr style="text-align: center;">
                                                        <th width="3%">No.</th>
                                                        <th width="12%">Tanggal</th>
                                                        <th width="18%">Peserta</th>
                                                        <th width="30%" class="no-sort">Isi Laporan</th>
                                                        <!-- <th>Dokumen</th> -->
                                                        <th width="18%">Pembimbing</th>
                                                        <th width="6%" class="no-sort">Aksi</th>
                                                    </tr>
                                                <?php } ?>
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
                                                            <td style="text-align: center;"><?php
                                                                                            if ($d->review_lap) { ?>
                                                                    <a class="badge badge-sm badge-primary">Direview</a>
                                                                    <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                                <?php } ?>
                                                            </td>
                                                            <!-- <td><?= character_limiter($d->dok_lap_ming, 40); ?></td> -->
                                                            <td style="text-align: center;">
                                                                <a title="Lihat detail laporan" class="btn btn-sm btn-info" href="<?= base_url('pegawai/laporan/detail/' . $d->id_lap_ming) ?>"><i class="ti ti-eye"></i></a>
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
                                                            <td style="text-align: center;"> <?php
                                                                                                if ($d->pembimbing_balai != $nip) { ?>
                                                                    <a title="Lihat detail laporan" class="btn btn-sm btn-primary" href="<?= base_url('pegawai/laporan/det_lap/' . $d->id_lap_ming) ?>"><i class="ti ti-eye"></i></a>
                                                                    <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                                <?php } else { ?>
                                                                    <a title="Lihat detail laporan" class="btn btn-sm btn-info" href="<?= base_url('pegawai/laporan/detail/' . $d->id_lap_ming) ?>"><i class="ti ti-eye"></i></a>
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