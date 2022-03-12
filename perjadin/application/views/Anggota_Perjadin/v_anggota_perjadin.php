<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data Anggota Perjalanan Dinas</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-3 ">
                                            <table id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" style="width:100%; height:100%">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width:3%">No</th>
                                                        <th style="width:5%">Nama Pegawai</th>
                                                        <th style="width:4%">Uang Harian</th>
                                                        <th style="width:5%">Uang Transportasi</th>
                                                        <th style="width:6%">Uang Penginapan</th>
                                                        <th style="width:2%">Status Perjalanan Dinas</th>
                                                        <th style="width:0.5%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_anggota_perjadin as $j) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo $j->nama_anggota_perjadin ?></td>
                                                            <td><?php echo 'Rp'.number_format($j->uang_harian,0,',','.') ?></td>
                                                            <td><?php echo 'Rp'.number_format($j->uang_transportasi,0,',','.') ?></td>
                                                            <td><?php echo 'Rp'.number_format($j->uang_penginapan,0,',','.') ?></td>
                                                            <td><?php if($j->status_perjalanan_dinas == 'Belum Berangkat'){
                                                                ?> <button style ="color:white; margin-left:30px" class="btn btn-warning btn-sm"> Belum Berangkat </button> <?php
                                                            } elseif($j->status_perjalanan_dinas == 'Sedang Berlangsung'){
                                                                ?> <button style ="margin-left:22px" class="btn btn-success btn-sm"> Sedang Berlangsung </button> <?php
                                                            } else{
                                                                ?> <button style ="margin-left:60px" class="btn btn-info btn-sm"> Selesai </button> <?php
                                                            }?></td>
                                                            <td>
                                                                <a title="Edit data perjalanan dinas" class="btn btn-sm btn-success" href="<?php echo base_url() ?>anggota_perjadin/edit?id_anggota_perjadin=<?php echo $j->id_anggota_perjadin ?>"><i class="mdi mdi-pencil"></i></a>
                                                                <a title="Hapus data perjalanan dinas" id="hapus_perjalanan_dinas" class="btn btn-sm btn-danger" href="<?php echo base_url() ?>anggota_perjadin/hapus/<?php echo $j->id_anggota_perjadin ?>/<?php echo $j->id_perjalanan_dinas ?>"><i class="mdi mdi-trash-can"></i></a>
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
   