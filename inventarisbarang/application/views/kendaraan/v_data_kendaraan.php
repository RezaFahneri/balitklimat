<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Data Kendaraan</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses');?>"></div>
                        <div class="flash-data" id="flash6" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>kendaraan/tambah" class="btn btn-success"><i class="ti ti-plus">&nbsp;</i>Tambah Data</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-4 ">
                                            <table  class="table table-bordered" cellspacing="0" width="100%">
                                                <thead style='height:auto' class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No Polisi</th>
                                                        <th>Merk</th>
                                                        <th>Jenis Kendaraan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_kendaraan as $d) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo $d->no_polisi ?></td>
                                                            <td><?php echo $d->merk ?></td>
                                                            <td><?php echo $d->jenis ?></td>
                                                            <?php if ($d->status == '1') { ?>
                                                                <td>
                                                                    <button class="btn btn-outline-success btn-md" disabled>Tersedia</button>
                                                                </td>
                                                            <?php } else { ?>
                                                                <td>
                                                                    <button type="button" class="btn btn-outline-warning btn-md" disabled>Sedang digunakan</button>
                                                                </td>
                                                            <?php } ?>
                                                            <td>
                                                                <a data-toggle="tooltip" title="Edit" style="font-size:25px" class="btn btn-sm btn-success" href="<?php echo base_url('/kendaraan/edit/' . $d->id_kendaraan) ?>"><i class="mdi mdi-pencil"></i></a>
                                                                <a data-toggle="tooltip" title="Hapus" style="font-size:25px" class="btn btn-sm btn-danger" id="tombol-hapus2" href="<?php echo site_url('/kendaraan/hapus/' . $d->id_kendaraan) ?>"><i class="mdi mdi-delete"></i></a>
                                                                <!-- <a style="font-size:25px" class="btn btn-sm btn-success" href="<?php echo base_url() ?>kendaraan/edit/?id_kendaraan=<?php echo $d->id_kendaraan ?>"><i class="mdi mdi-pencil"></i></a>
                                                                <a style="font-size:25px" id="tombol-hapus3" class="btn btn-sm btn-danger" href="<?php echo site_url('kendaraan/hapus/' . $d->id_kendaraan) ?>"><i class="mdi mdi-delete"></i></a> -->
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
    </div>
</div>
</div>