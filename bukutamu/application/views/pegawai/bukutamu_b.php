<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10"><?= $sub; ?></h3>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="mt-3">
                                <div class="mt-3">
                                    <div class="table-responsive">
                                        <table class="table table-bordered tabel-hover" id="peg_bukutamu_b" cellspacing="0">
                                            <thead class="table-light">
                                                <tr style="text-align: center;">
                                                    <th>No.</th>
                                                    <th>Tanggal</th>
                                                    <!-- <th>Waktu</th> -->
                                                    <th>Nama</th>
                                                    <th>Asal Instansi</th>
                                                    <th>Keperluan</th>
                                                    <th>Alasan</th>
                                                    <th class="no-sort">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($detail as $d) {
                                                ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= date('d M Y', strtotime($d->tanggal)) ?></td>
                                                        <!-- <td><?= date('h:i', strtotime($d->waktu)) ?></td> -->
                                                        <td><?= character_limiter($d->nama_lengkap, 20) ?></td>
                                                        <td><?= character_limiter($d->asal_instansi, 15) ?></td>
                                                        <td><?= character_limiter($d->keperluan, 20) ?></td>
                                                        <td><?= character_limiter($d->alasan, 20) ?></td>
                                                        <td>
                                                            <a class="btn btn-sm btn-info" href="<?= base_url('pegawai/bukutamu_b/detail/' . $d->id_buku_tamu) ?>"><i class="ti ti-eye"></i></a>
                                                            <a onclick="return confirm('Apakah anda yakin menghapus data?')" class="btn btn-sm btn-danger" href="<?= base_url('pegawai/bukutamu_b/hapusall/' . $d->id_buku_tamu) ?>"><i class="ti ti-trash"></i></a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>