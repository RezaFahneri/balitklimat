<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data MAK</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>mak/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah MAK</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-3 ">
                                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%; height:100%">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th title="kode MAK"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Kode MAK</label></th>
                                                        <th title="PAGU"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">PAGU</label></th>

                                                        <th title="Tahun"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Tahun</label></th>
                                                        <th title="Anggaran"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Anggaran</label></th>

                                                        <th style="width:1%;"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;margin-left:25px;color:gray">Aksi</label></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_mak as $m) {
                                                    ?>
                                                        <tr>
                                                            <td style="font-size: 12px;"><?php echo $m->kode_mak ?></td>
                                                            <td style="font-size: 12px;"><?php echo $m->judul_mak ?></td>
                                                            <td style="font-size: 12px;"><?php echo $m->tahun ?></td>
                                                            <td style="font-size: 12px;"><?php echo 'Rp' . number_format($m->banyak_anggaran, 0, ',', '.') ?></td>
                                                            <td style="font-size: 12px;">
                                                                <a style="height:35px;" title="Edit data mak" class="btn btn-xs btn-success" href="<?php echo base_url('/mak/edit/' . $m->kode_mak) ?>"><i class="mdi mdi-pencil"></i></a>
                                                                <a style="height:35px;" title="Hapus data mak" id="hapus_mak" class="btn btn-xs btn-danger" href="<?php echo site_url('/mak/hapus/' . $m->kode_mak) ?>"><i class="mdi mdi-trash-can"></i></a>
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