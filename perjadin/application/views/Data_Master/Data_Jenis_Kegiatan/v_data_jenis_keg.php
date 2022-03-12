<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data Jenis Kegiatan</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>jenis_keg/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah Data Jenis Kegiatan</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-3 ">
                                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%; height:100%">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th title="No" style="width:8%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">No</label></th>
                                                        <th title="Jenis Kegiatan"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Jenis Kegiatan</label></th>
                                                        <th style="width:1%;"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;margin-left:25px;color:gray">Aksi</label></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_jenis_keg as $p) {
                                                    ?>
                                                        <tr>
                                                            <td style="font-size: 12px;height:40px"><label style="margin-top:5px"><?php echo $no++ ?></label></td>
                                                            <td style="font-size: 12px;"><?php echo $p->jenis_keg ?></td>
                                                            <td style="font-size: 12px;">
                                                                <a style="font-size:20px;width:45%" title="Edit data jenis kegiatan" class="btn btn-sm btn-success" href="<?php echo base_url('/jenis_keg/edit/' . $p->id_jenis_keg) ?>"><i class="mdi mdi-pencil"></i></a>
                                                                <a style="font-size:20px;width:45%" title="Hapus data jenis kegiatan" id="hapus_keg" class="btn btn-sm btn-danger" href="<?php echo site_url('/jenis_keg/hapus/' . $p->id_jenis_keg) ?>"><i class="mdi mdi-trash-can"></i></a>
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