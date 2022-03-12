<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data Kegiatan</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>kegiatan/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah Kegiatan</a>
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
                                                        <th title="kode kegiatan"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Kode Kegiatan</label></th>
                                                        <th title="kode kegiatan"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Judul Kegiatan</label></th>
                                                        <th title="kode kegiatan"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Jenis Kegiatan</label></th>
                                                        <th title="kode kegiatan"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Tahun</label></th>
                                                        <!-- <th>NIP PJ Kegiatan</th> -->
                                                        <!-- <th>NIP PJ RPTP/RDHP/RKTM</th> -->
                                                        <th title="kode kegiatan"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">PJ RPTP / RDHP / RKTM</label></th>
                                                        <th title="kode kegiatan"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Kasub / Kasie / Ka.Kelti</label></th>
                                                        <th title="kode kegiatan"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Total Pengeluaran</label></th>
                                                        <th style="width:1%;"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;margin-left:25px;color:gray">Aksi</label></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($data_kegiatan as $j) {
                                                    ?>
                                                        <tr>
                                                            <td style="font-size: 12px;"><?php echo $j->kode_kegiatan ?></td>
                                                            <td style="font-size: 12px;"><?php echo $j->judul_kegiatan ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->jenis_keg ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->tahun ?></td>
                                                            <!--  <td style="font-size: 12px;"><?php //echo $j->nip_pj_kegiatan ?></td> -->
                                                            <!--  <td style="font-size: 12px;"><?php //echo $j->nip_pj_rrr ?></td> -->
                                                             <td style="font-size: 12px;"><?php echo $j->nama_pj_rrr ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->nama_pj_keg ?></td>
                                                             <td style="font-size: 12px;"><?php echo 'Rp'.number_format($j->biaya_pengeluaran,0,',','.') ?></td>
                                                             <td style="font-size: 12px;">
                                                                <a style="height: 35px;" title="Edit data kegiatan"  class="btn btn-xs btn-success" href="<?php echo base_url() ?>kegiatan/edit?kode_kegiatan=<?php echo $j->kode_kegiatan?>"><i class="mdi mdi-pencil"></i></a>
                                                                <a style="height: 35px;" title="Hapus data kegiatan"  id="hapus_kegiatan" class="btn btn-xs btn-danger" href="<?php echo site_url('/kegiatan/hapus/' . $j->kode_kegiatan) ?>"><i class="mdi mdi-trash-can"></i></a>
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