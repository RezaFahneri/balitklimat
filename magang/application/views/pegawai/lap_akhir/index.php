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
                                        <table class="table table-bordered tabel-hover text-wrap" id="peg_lapak" cellspacing="0">
                                            <?php
                                            if ($sub == 'Laporan Akhir Seluruh Peserta') { ?>
                                                <thead class="table-light">
                                                    <tr style="text-align: center;">
                                                        <th>No.</th>
                                                        <th>Tanggal</th>
                                                        <th>Peserta</th>
                                                        <th class="no-sort">Judul Akhir</th>
                                                        <th style="width: 15%;">Pembimbing</th>
                                                        <!-- <th>Dokumen</th> -->
                                                        <th class="no-sort">Aksi</th>
                                                    </tr>
                                                </thead>
                                            <?php } else { ?>
                                                <thead class="table-light">
                                                    <tr style="text-align: center;">
                                                        <th>No.</th>
                                                        <th>Tanggal</th>
                                                        <th>Peserta</th>
                                                        <th class="no-sort">Judul Akhir</th>
                                                        <!-- <th style="width: 15%;">Pembimbing</th> -->
                                                        <!-- <th>Dokumen</th> -->
                                                        <th class="no-sort">Aksi</th>
                                                    </tr>
                                                </thead>
                                            <?php } ?>
                                            <tbody>
                                                <?php
                                                if ($sub == 'Laporan Akhir Peserta Bimbingan') { ?>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($detail as $d) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= date('d M Y', strtotime($d->tgl_up_lapak)) ?></td>
                                                            <td><?= character_limiter($d->nama_pm, 30) ?></td>
                                                            <td><?= character_limiter($d->judul_lapak, 50) ?></td>
                                                            <td>
                                                                <a class="btn btn-sm btn-info" href="<?= base_url('pegawai/lap_akhir/detail/' . $d->id_lapak) ?>"><i class="ti ti-eye"></i></a>
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
                                                            <td><?= date('d M Y', strtotime($d->tgl_up_lapak)) ?></td>
                                                            <td><?= character_limiter($d->nama_pm, 50) ?></td>
                                                            <td><?= character_limiter($d->judul_lapak, 30) ?></td>
                                                            <td><?= character_limiter($d->nama_pegawai, 20); ?></td>
                                                            <td>
                                                                <?php
                                                                if ($d->nip == $nip) { ?>
                                                                    <a class="btn btn-sm btn-info" href="<?= base_url('pegawai/lap_akhir/detail/' . $d->id_lapak) ?>"><i class="ti ti-eye"></i></a>

                                                                <?php } else { ?>
                                                                    <a class="btn btn-sm btn-primary" href="<?= base_url('pegawai/lap_akhir/detail/' . $d->id_lapak) ?>"><i class="ti ti-eye"></i></a>
                                                                <?php } ?>
                                                                <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
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