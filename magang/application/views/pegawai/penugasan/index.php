<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Penugasan</h3>
                            <div class="mt-3">
                                <?php
                                if ($peserta) { ?>
                                    <a title="Tambah penugasan" href="<?= base_url() ?>pegawai/penugasan/tambah" class="btn btn-primary btn-sm btn-icon-text mb-2">
                                        <i class="ti ti-plus"></i>
                                        Tambah penugasan
                                    </a>
                                <?php } ?>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="mt-3">
                                <div class="table-responsive">
                                    <table class="table table-bordered tabel-hover text-wrap" id="peg_penugasan" cellspacing="0" style="width:100%; table-layout:fixed">
                                        <thead class="table-light">
                                            <tr style="text-align: center;">
                                                <th width="5%">No.</th>
                                                <th width="13%">ID Tugas</th>
                                                <th width="40%">Isi Tugas</th>
                                                <th width="15%">Tgl Pengumpulan</th>
                                                <th width="10%">Dokumen</th>
                                                <!-- <th>Dokumen</th> -->
                                                <!-- <th class="col-1">Jumlah Peserta</th> -->
                                                <th width="12%">Status</th>
                                                <th width="23%" class="no-sort">Aksi</th>
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
                                                    <td><?= character_limiter($dt->isi_tugas, 60); ?></td>
                                                    <td><?= date('d M Y', strtotime($dt->tgl_pengumpulan)) ?></td>
                                                    <td style="text-align: center;"><?php
                                                                                    if ($dt->dok_tugas) { ?>
                                                            <a title="<?= $dt->dok_tugas ?>" class="" href="<?= base_url() ?>assets/dokumen/tugas/<?= $dt->dok_tugas ?>" target="_blank">
                                                                <i class="icon-file"></i>
                                                            </a>
                                                        <?php } ?>
                                                    </td>
                                                    <!-- <td><?= $dt->dok_tugas; ?></td> -->
                                                    <!-- <td><?= $dt->jumlah_pm; ?></td> -->
                                                    <td style="text-align: center;"> <?php
                                                                                        if ($dt->tgl_pengumpulan < date('Y-m-d')) { ?>
                                                            <a class="badge badge-danger">Selesai</a>
                                                        <?php } else { ?>
                                                            <a class="badge badge-warning">Berjalan</a>
                                                        <?php } ?>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a title="Lihat detail penugasan" class="btn btn-sm btn-info" href="<?= base_url('pegawai/penugasan/detail/' . $dt->id_tugas) ?>"><i class="ti ti-eye"></i></a>
                                                        <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                        <a title="Hapus penugasan" onclick="return confirm('Apakah anda yakin untuk menghapus data?')" class="btn btn-sm btn-danger" href="<?= base_url('pegawai/penugasan/hapus/' . $dt->id_tugas) ?>"><i class="ti ti-trash"></i></a>
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