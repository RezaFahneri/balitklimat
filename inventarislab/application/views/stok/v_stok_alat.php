<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Data Alat</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <?php if ($this->session->userdata('logged_in') == true) { ?>
                            <div class="col-md-4 grid-margin">
                                <a href="<?php echo base_url() ?>stok_alat/tambah" class="btn btn-success btn-md"><i class="ti ti-plus">&nbsp;</i>Tambah Data Alat</a>
                            </div>
                        <?php } ?>
                        <div class="col-md-12 grid-margin">
                            <div class="card mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-4 ">
                                            <table id="datatable" class="table table-bordered display" cellspacing="0" width="100%">
                                                <thead style='height:auto' class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Gambar</th>
                                                        <th>Nama Alat</th>
                                                        <th>Kelengkapan</th>
                                                        <th>Kondisi</th>
                                                        <th>Jumlah</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_stok as $dp) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>
                                                                <img class="zoomable img-lg" src="<?php echo base_url() . 'assets/images/upload/' . $dp->image ?>" style="height:40px;">
                                                            <td><?php echo $dp->namaalat ?></td>
                                                            <td><?php echo $dp->deskripsi ?></td>
                                                            <td><?php echo $dp->kondisi ?></td>
                                                            <td><?php echo $dp->stock ?></td>
                                                            <?php if ($this->session->userdata('logged_in') == true) { ?>
                                                                <td>
                                                                    <a data-toggle="tooltip" title="Detail" style="font-size:25px" class="btn btn-sm btn-info" href="<?php echo base_url('/stok_alat/detail/' . $dp->idalat) ?>"><i class="mdi mdi-information-outline"></i></a>
                                                                    <a data-toggle="tooltip" title="Edit" style="font-size:25px" class="btn btn-md btn-success" href="<?php echo base_url() ?>stok_alat/edit?idalat=<?php echo $dp->idalat ?>"><i class="mdi mdi-pencil"></i></a>
                                                                    <a data-toggle="tooltip" title="Hapus" style="font-size:25px" id="tombol-hapus3" class="btn btn-sm btn-danger" href="<?php echo site_url('stok_alat/hapus/' . $dp->idalat) ?>"><i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            <?php } else if ($this->session->userdata('logged_in') == false) { ?>
                                                                <td>
                                                                    <a data-toggle="tooltip" title="Detail" style="font-size:25px" class="btn btn-sm btn-info" href="<?php echo base_url('/stok_alat/detail/' . $dp->idalat) ?>"><i class="mdi mdi-information-outline"></i></a>
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