<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Penugasan</h3>
                            <div class="mt-3">
                                <a href="<?= base_url() ?>pegawai/penugasan/tambah" class="btn btn-primary btn-sm btn-icon-text mb-2">
                                    <i class="ti ti-plus"></i>
                                    Tambah penugasan
                                </a>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="mt-3">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="peg_penugasan" cellspacing="0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="col-md-1">No.</th>
                                                <th class="col-md-1">ID Penugasan</th>
                                                <th class="col-md-7 no-sort">Isi Tugas</th>
                                                <th class="col-md-1">Tanggal Pengumpulan</th>
                                                <!-- <th>Dokumen</th> -->
                                                <!-- <th class="col-1">Jumlah Peserta</th> -->
                                                <th class="col-md-1">Status</th>
                                                <th class="col-md-1 no-sort">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($detail as $dt) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $dt->id_tugas ?></td>
                                                    <td><?= character_limiter($dt->isi_tugas, 25); ?></td>
                                                    <td><?= date('d M Y', strtotime($dt->tgl_pengumpulan)) ?></td>
                                                    <!-- <td><?= $dt->dok_tugas; ?></td> -->
                                                    <!-- <td><?= $dt->jumlah_pm; ?></td> -->
                                                    <td> <?php
                                                            if ($dt->tgl_pengumpulan < date('Y-m-d')) { ?>
                                                            <a class="badge badge-danger">Selesai</a>
                                                        <?php } else { ?>
                                                            <a class="badge badge-warning">Berjalan</a>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#detail<?= $dt->id_tugas ?>">
                                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                                                </svg></i>
                                                        </button>
                                                        <a class="btn btn-sm btn-info" href="<?= base_url('pegawai/penugasan/detail/' . $dt->id_tugas) ?>"><i class="ti ti-eye"></i></a>
                                                        <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                        <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?= base_url('pegawai/penugasan/hapus/' . $dt->id_tugas) ?>"><i class="ti ti-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- Modal -->
                                                <div class="modal fade" id="detail<?= $dt->id_tugas ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle"><?= $dt->id_tugas ?></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                isi <?= $dt->id_tugas ?>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-dismiss="modal">Kembali</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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