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
                                    <table class="table table-hover wrap" id="peg_penugasan">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Jenis</th>
                                                <th>Tanggal</th>
                                                <th class="no-sort">Waktu</th>
                                                <th>Nama </th>
                                                <th>Divisi Tujuan</th>
                                                <th>Pegawai Tujuan</th>
                                                <!-- <th>Keperluan</th>
                                                <th>Alasan</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($detail as $dt) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $dt->jenis; ?></td>
                                                    <td><?= date('y-m-d', strtotime($dt->tanggal)) ?></td>
                                                    <td><?= $dt->waktu; ?></td>
                                                    <td><?= $dt->nama_lengkap ?></td>
                                                    <td><?= $dt->divisi_id; ?></td>
                                                    <td><?= $dt->nama_pegawai; ?></td>
                                                    <!-- <td><?= $dt->id_keperluan; ?></td>
                                                    <td><?= $dt->id_alasan; ?></td> -->
                                                    <td>
                                                        <a class="btn btn-sm btn-info"><i class="ti ti-eye"></i></a>

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