<div class="main-panel">
    <div class="content-wrapper">
        <a href="<?= base_url(); ?>admin/data_pegawai" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg></i> Kembali ke <b>Data Pegawai</b></a>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">
                                Detail Pegawai
                            </h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Nama Pegawai</p>
                                        <p><?= $detail->nama_pegawai; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">NIP</p>
                                        <p><?= $detail->nip; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Divisi</p>
                                        <p><?= $detail->divisi; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Jabatan</p>
                                        <p><?= $detail->jabatan; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Email</p>
                                        <p><?= $detail->email; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">No Whatsapp</p>
                                        <p><?= $detail->no_whatsapp; ?>
                                            <a class="btn btn-success btn-sm btn-icon-text" href="https://api.whatsapp.com/send?phone=<?= $detail->no_whatsapp ?>" target=" _blank">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                                    </svg></i>
                                            </a>
                                        </p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="mb-4 font-weight-bold text-info text-uppercase" style="font-size: 15pt;">Tamu Bertemu</div>
                                    <p class="font-weight-bold text-info" style="font-size: 45pt; text-align:center"><?= count($a) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="mb-4 font-weight-bold text-warning text-uppercase" style="font-size: 15pt;">Tamu Tidak Bertemu</div>
                                    <p class="font-weight-bold text-warning" style="font-size: 45pt; text-align:center"><?= count($b) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="mb-4 font-weight-bold text-danger text-uppercase" style="font-size: 15pt;">Seluruh Tamu</div>
                                    <p class="font-weight-bold text-danger" style="font-size: 45pt; text-align:center"><?= count($b) + count($a) ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Peserta</h3>
                            <div class="mt-3" name="admshwpes" id="admshwpes">
                                <div class="table-responsive">
                                    <table class="table table-bordered tabel-hover" id="adm_pes" cellspacing="0">
                                        <thead class="table-light">
                                            <tr style="text-align: center;">
                                                <th width='4%'>No.</th>
                                                <th width='16%'>Tanggal</th>
                                                <th width='16%'>Jenis</th>
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
                                            foreach ($detaila as $d) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td style="text-align: center;"><?php
                                                                                    if ($d->jenis == 'Bertemu') { ?>
                                                            <a class="badge badge-success">Bertemu</a>
                                                        <?php } else { ?>
                                                            <a class="badge badge-danger">Tidak Bertemu</a>
                                                        <?php } ?>
                                                    </td>
                                                    <td><?= date('d M Y', strtotime($d->tanggal)) ?></td>
                                                    <td><?= date('h:i', strtotime($d->waktu)) ?></td>
                                                    <td><?= character_limiter($d->nama_lengkap, 15) ?></td>
                                                    <td><?= character_limiter($d->asal_instansi, 15) ?></td>
                                                    <td><?= character_limiter($d->keperluan, 15) ?></td>
                                                    <td>
                                                        <?php
                                                        if ($user2['nip'] == $d->pegawai_nip) { ?>
                                                            <?php
                                                            if ($d->jenis == 'Bertemu') { ?>
                                                                <a class="btn btn-sm btn-info" href="<?= base_url('admin/peg_tamu_a/detail/' . $d->id_buku_tamu) ?>"><i class="ti ti-eye"></i></a>
                                                            <?php } else { ?>
                                                                <a class="btn btn-sm btn-info" href="<?= base_url('admin/peg_tamu_b/detail/' . $d->id_buku_tamu) ?>"><i class="ti ti-eye"></i></a>
                                                            <?php } ?>
                                                        <?php } else { ?>
                                                            <?php
                                                            if ($d->jenis == 'Bertemu') { ?>
                                                                <a class="btn btn-sm btn-info" href="<?= base_url('admin/bukutamu_a/detail/' . $d->id_buku_tamu) ?>"><i class="ti ti-eye"></i></a>
                                                            <?php } else { ?>
                                                                <a class="btn btn-sm btn-info" href="<?= base_url('admin/bukutamu_b/detail/' . $d->id_buku_tamu) ?>"><i class="ti ti-eye"></i></a>
                                                            <?php } ?>
                                                        <?php } ?>
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