<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Data Satuan Barang</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses');?>"></div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>Satuan_barang/tambah" class="btn btn-success"><i class="ti ti-plus">&nbsp;</i>Tambah Satuan Barang</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-4 ">
                                            <table class="table table-bordered" cellspacing="0" width="100%">
                                                <thead style='height:auto' class="thead-light">
                                                    <tr>
                                                        <th width="10%;">No</th>
                                                        <th>Satuan Barang</th>
                                                        <th width="30%;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($satuan_barang as $j) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo $j->satuan_barang ?></td>
                                                            <td>
                                                                <a class="btn btn-sm btn-success" href="<?php echo base_url('/satuan_barang/edit/' . $j->id_satuan) ?>"><i class="mdi mdi-pencil"></i></a>
                                                                <a class="btn btn-sm btn-danger" id="tombol-hapus1" href="<?php echo site_url('/satuan_barang/hapus/' . $j->id_satuan) ?>"><i class="mdi mdi-delete"></i></a>
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