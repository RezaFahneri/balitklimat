<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4 mb-4 stretch-card transparent">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="mb-4 font-weight-bold text-info text-uppercase" style="font-size: 15pt;">Tamu Bertemu</div>
                        <p class="font-weight-bold text-info" style="font-size: 45pt; text-align:center"><?= count($detail) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 stretch-card transparent">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="mb-4 font-weight-bold text-secondary text-uppercase" style="font-size: 15pt;">Tamu Tidak Bertemu</div>
                        <p class="font-weight-bold text-secondary" style="font-size: 45pt; text-align:center"><?= count($b) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 stretch-card transparent">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="mb-4 font-weight-bold text-secondary text-uppercase" style="font-size: 15pt;">Seluruh Tamu</div>
                        <p class="font-weight-bold text-secondary" style="font-size: 45pt; text-align:center"><?= count($b) + count($detail) ?></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <h3 class="font-weight-bold mb-10"><?= $sub; ?></h3>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="mt-3">
                            <div class="mt-3">
                                <a title="Exspor Seluruh Tamu" class="btn btn-sm btn-danger float-right mb-2 ml-2" href=" <?= base_url('pegawai/bukutamu_a/export_excel') ?>"> <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
                                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z" />
                                        </svg></i> Excel Seluruh</a>
                                <a title="Ekspor Tamu Bertemu" class="btn btn-sm btn-primary float-right mb-2" href=" <?= base_url('pegawai/bukutamu_a/export_excela') ?>"> <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
                                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z" />
                                        </svg></i> Excel Bertemu</a>
                                <div class="table-responsive">
                                    <table class="table table-bordered tabel-hover text-wrap" id="peg_bukutamu" cellspacing="0" style="width:100%; table-layout:fixed">
                                        <thead class="table-light">
                                            <tr style="text-align: center;">
                                                <th width='4%'>No.</th>
                                                <th width='16%'>Tanggal</th>
                                                <th width='10%'>Waktu</th>
                                                <th width='20%'>Nama</th>
                                                <th width='20%'>Asal Instansi</th>
                                                <th width='20%'>Keperluan</th>
                                                <th width='10%' class="no-sort">Aksi</th>
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
                                                    <td><?= date('h:i', strtotime($d->waktu)) ?></td>
                                                    <td><?= character_limiter($d->nama_lengkap, 15) ?></td>
                                                    <td><?= character_limiter($d->asal_instansi, 15) ?></td>
                                                    <td><?= character_limiter($d->keperluan, 15) ?></td>
                                                    <td>
                                                        <a class="btn btn-sm btn-info" href="<?= base_url('pegawai/bukutamu_a/detail/' . $d->id_buku_tamu) ?>"><i class="ti ti-eye"></i></a>
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