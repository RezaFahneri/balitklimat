<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Penggunaan Mobil</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>penggunaan_mobil/tambah" class="btn btn-success btn-md">Tambah Penggunaan Mobil</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-4">
                                            <table id="dtBasicExample" class="table table-bordered" cellspacing="0" width="150%">
                                                <thead style='height:auto' class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Pengguna</th>
                                                        <th>No Polisi</th>
                                                        <th>Tanggal Pemakaian</th>
                                                        <th>Tanggal Kembali</th>
                                                        <th>Lama Pemakaian</th>
                                                        <th>Perjalanan</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_penggunaan as $dp) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo $dp->nama_pegawai ?></td>
                                                            <td><?php echo $dp->no_polisi ?></td>
                                                            <td><?php echo tanggal_indonesia($dp->tgl_pemakaian) ?></td>
                                                            <td><?php echo tanggal_indonesia($dp->tgl_kembali) ?></td>
                                                            <?php if ($dp->lama_pemakaian == null) { ?>
                                                                <td><?php echo "> 24 Jam" ?></td>
                                                            <?php } else { ?>
                                                                <td><?php echo $dp->lama_pemakaian . " Jam" ?></td>
                                                            <?php } ?>
                                                            <td><?php echo $dp->perjalanan ?></td>
                                                            <?php if ($dp->status_penggunaan == '1') { ?>
                                                                <td>
                                                                    <button class="btn btn-outline-warning btn-md" disabled>Digunakan</button>
                                                                    <hr style="width:80%;text-align:left;margin-left:0">
                                                                    <a type="button" class="btn btn-outline-info btn-md" href="<?php echo base_url('penggunaan_mobil/selesai/' . $dp->id_penggunaan) . '/' . $dp->id_kendaraan . '/' . $dp->nip ?>">Selesai</a>
                                                                </td>
                                                            <?php } else { ?>
                                                                <td>
                                                                    <button type="button" class="btn btn-outline-secondary btn-md" disabled>Sudah kembali</button>
                                                                </td>
                                                            <?php } ?>
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
    </div>
</div>
</div>