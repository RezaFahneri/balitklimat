<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <button onclick="keperluan()" class="btn btn-sm btn-primary  mb-3"></i>Keperluan</button>
                <button onclick="alasan()" class="btn btn-sm btn-info mb-3"></i>Alasan</button>
                <?= $this->session->flashdata('message'); ?>
                <div class="card mb-5" name="ckeperluan" id="ckeperluan" style="display: block;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Keperluan</h3>
                            <div class="mt-3">
                                <a href="<?= base_url() ?>admin/tambah_data/tambah_keperluan" class="btn btn-primary btn-sm btn-icon-text mb-2">
                                    <i class="ti ti-plus"></i>
                                    Tambah Keperluan
                                </a>
                            </div>
                            <div class="mt-3">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Keperluan</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($keperluan as $kep) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $kep->nama_keperluan ?></td>
                                                    <td><?= $kep->ket_keperluan ?></td>
                                                    <td>
                                                        <a class="btn btn-sm btn-info" href="<?= base_url('admin/tambah_data/edit_keperluan/' . $kep->id_keperluan) ?>"><i class="ti ti-pencil"></i></a>
                                                        <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                        <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/tambah_data/hapus_keperluan/' . $kep->id_keperluan) ?>"><i class="ti ti-trash"></i></a>
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
                <div class="card" id="calasan" name="calasan" style="display: none;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Alasan</h3>
                            <div class="mt-3">
                                <a href="<?= base_url() ?>admin/tambah_data/tambah_alasan" class="btn btn-info btn-sm btn-icon-text mb-2">
                                    <i class="ti ti-plus"></i>
                                    Tambah Alasan
                                </a>
                            </div>
                            <div class="mt-3">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Keperluan</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($alasan as $als) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $als->nama_alasan ?></td>
                                                    <td><?= $als->ket_alasan ?></td>
                                                    <td>
                                                        <a class="btn btn-sm btn-info" href="<?= base_url('admin/tambah_data/edit_alasan/' . $als->id_alasan) ?>"><i class="ti ti-pencil"></i></a>
                                                        <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                                        <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/tambah_data/hapus_alasan/' . $als->id_alasan) ?>"><i class="ti ti-trash"></i></a>
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