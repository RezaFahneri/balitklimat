<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data Perjalanan Dinas</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <a href="<?php echo base_url() ?>perjalanan_dinas/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah Perjalanan Dinas</a>
                            <a href="<?php echo base_url() ?>anggota_perjadin/anggota" class="btn btn-info btn-md">Daftar Perjalanan Dinas By Pegawai</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-3 ">
                                            <table class="table table-bordered table-sm" cellspacing="0" style="width:100%; height:100%">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width:2%;height:40px;color:gray"><label>No</label></th>
                                                        <th style="width:5%;height:40px;color:gray"><label>Kode Kegiatan</label></th>
                                                        <th style="width:7%;height:40px;color:gray"><label>Judul Kegiatan</label></th>
                                                        <th style="width:6%;height:40px;color:gray"><label>Dalam Rangka<label></th>
                                                        <th style="width:0.5%;height:40px;color:gray"><label>Aksi</label></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_perjalanan_dinas as $j) {
                                                    ?>
                                                        <tr>
                                                             <td style="font-size: 12px;"><?php echo $no++ . ' ' ?><a title="Lihat daftar anggota perjalanan dinas" data-toggle="collapse" data-target="#data<?php echo $j->id_perjalanan_dinas ?>" class="accordion-toggle btn btn-light btn-xs mdi mdi-account-multiple"></a></td>
                                                             <td style="font-size: 12px;"><?php echo $j->kode_kegiatan ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->judul_kegiatan ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->dalam_rangka ?></td>
                                                             <td style="font-size: 12px;">
                                                                <a title="Detail data perjalanan dinas" style="height:35px;color:white" class="btn btn-xs btn-warning" href="<?php echo base_url('perjalanan_dinas/detail/' . $j->id_perjalanan_dinas) ?>"><i class="mdi mdi-car"></i></a>
                                                                <a  style=" height:35px;" title="Edit data perjalanan dinas" class="btn btn-xs btn-success" href="<?php echo base_url() ?>perjalanan_dinas/edit?id_perjalanan_dinas=<?php echo $j->id_perjalanan_dinas ?>"><i class="mdi mdi-pencil"></i></a>
                                                                <a title="Tambah anggota perjalanan dinas" style=" height:35px; color:white" class="btn btn-xs btn-secondary" href="<?php echo base_url() ?>anggota_perjadin/tambah?id_perjalanan_dinas=<?php echo $j->id_perjalanan_dinas ?>"><i class="mdi mdi-account-multiple-plus"></i></a>
                                                                <!-- <a title="Lihat anggota perjalanan dinas" style="color:white" class="btn btn-xs btn-secondary" href="<?php echo base_url() ?>anggota_perjadin?id_perjalanan_dinas=<?php //echo $j->id_perjalanan_dinas 
                                                                                                                                                                                                                                        ?>"><i class="mdi mdi-account-multiple-outline"></i></a> -->
                                                                <a  style="height:35px;" title="Hapus data perjalanan dinas" id="hapus_perjalanan_dinas" class="btn btn-xs btn-danger" href="<?php echo site_url('/perjalanan_dinas/hapus/' . $j->id_perjalanan_dinas) ?>"><i class="mdi mdi-trash-can"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="12" class="hiddenRow">
                                                                <div class="accordian-body collapse" id="data<?php echo $j->id_perjalanan_dinas ?>">
                                                                    <table style="margin-top:5px; width:98%; margin-left:8px;margin-bottom:5px;" class="table table-bordered table-md">
                                                                        <a style="height:35px; margin-top:10px; margin-left:21px;margin-bottom:5px;"class="btn btn-xs btn-info mdi mdi-file"> <b>Surat Pengajuan</a>
                                                                        <a style="height:35px; margin-top:10px; margin-left:21px;margin-bottom:5px;"class="btn btn-xs btn-info mdi mdi-file"> <b>Perincian</a>
                                                                        <a style="height:35px; margin-top:10px; margin-left:21px;margin-bottom:5px;"class="btn btn-xs btn-info mdi mdi-file" href="<?php echo base_url('pdf/surat_tugas/' . $j->id_perjalanan_dinas) ?>"> <b>Surat Tugas (Kepala Balai)</a>
                                                                        <a style="height:35px; margin-top:10px; margin-left:21px;margin-bottom:5px;"class="btn btn-xs btn-info mdi mdi-file" href="<?php echo base_url('pdf/surat_tugas_plt/' . $j->id_perjalanan_dinas) ?>"> <b>Surat Tugas (Plh. Kepala Balai)</a>
                                                                        <a style="height:35px; margin-top:10px; margin-left:21px;margin-bottom:5px;"class="btn btn-xs btn-info mdi mdi-file"> <b>Norminatif</a>
                                                                        
                                                                        <thead class="thead-light">
                                                                            <tr class="info">
                                                                                <th style="width:5%;height:40px;color:gray"><label>Nama Pegawai </label></th>
                                                                                <th style="width:4%;height:40px;color:gray"><label>Uang Harian</label></th>
                                                                                <th style="width:4%;height:40px;color:gray"><label>Transportasi</label></th>
                                                                                <th style="width:5%;height:40px;color:gray"><label>Penginapan</label></th>
                                                                                <th style="width:2%;height:40px;color:gray"><label>Status Perjalanan Dinas</label></th>
                                                                                <th style="width:1%;height:40px;color:gray"><label>Dokumen</label></th>
                                                                                <th style="width:1%;height:40px;color:gray"><label>Aksi</label></th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            foreach ($data_anggota_perjadin as $d) {
                                                                            ?>
                                                                                <tr data-toggle="collapse" class="accordion-toggle">
                                                                                    <?php if ($j->id_perjalanan_dinas == $d->id_perjalanan_dinas) { ?>
                                                                                         <td style="font-size: 12px;"><?php echo $d->nama_anggota_perjadin ?></td>
                                                                                         <td style="font-size: 12px;"><?php echo 'Rp' . number_format($d->uang_harian, 0, ',', '.') ?></td>
                                                                                         <td style="font-size: 12px;"><?php echo 'Rp' . number_format($d->uang_transportasi, 0, ',', '.') ?></td>
                                                                                         <td style="font-size: 12px;"><?php echo 'Rp' . number_format($d->uang_penginapan, 0, ',', '.') ?></td>
                                                                                        <td style="text-align:center"><?php if ($d->status_perjalanan_dinas == 'Belum Berangkat') {
                                                                                            ?> <button style="color:white" class="btn btn-warning btn-xs"> <b>Belum Berangkat </button> <?php
                                                                                                                                                                                                    } elseif ($d->status_perjalanan_dinas == 'Sedang Berlangsung') {
                                                                                                                                                                                                        ?> <button class="btn btn-success btn-xs"> <b>Sedang Berlangsung </button> <?php
                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                        ?> <button class="btn btn-info btn-xs"> <b>Selesai </button> <?php
                                                                                                                                                                                                                                                                                                                                                                                        } ?></td>
                                                                                        <td style="text-align:center">
                                                                                            <div class="dropdown">
                                                                                                <button class="btn btn-info dropdown-toggle btn-xs mdi mdi-file" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                <b>File
                                                                                                </button>
                                                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                                    <a class="dropdown-item " href="#"><b>- SPPD</a>
                                                                                                    <a class="dropdown-item" href="<?php echo base_url('pdf/capsah_1/' . $d->id_anggota_perjadin) ?>"><b>- Capsah-PNS(1)</a>
                                                                                                    <a class="dropdown-item" href="<?php echo base_url('pdf/capsah_2/' . $d->id_anggota_perjadin) ?>"><b>- Capsah-PNS(2)</a>
                                                                                                    <a class="dropdown-item" href="<?php echo base_url('pdf/kuitansi/' . $d->id_anggota_perjadin) ?>"><b>- Kuitansi</a>
                                                                                                    <a class="dropdown-item" href="<?php echo base_url('pdf/pernyataan/' . $d->id_anggota_perjadin) ?>"><b>- Pernyataan</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                         <td>
                                                                                            <a style="height:35px;" title="Edit data anggota perjalanan dinas" class="btn btn-xs btn-success" href="<?php echo base_url() ?>anggota_perjadin/edit?id_anggota_perjadin=<?php echo $d->id_anggota_perjadin ?>"><i class="mdi mdi-pencil"></i></a>
                                                                                            <a style="height:35px;"title="Hapus data anggota perjalanan dinas" id="hapus_anggota_perjalanan_dinas" class="btn btn-xs btn-danger" href="<?php echo base_url() ?>anggota_perjadin/hapus/<?php echo $d->id_anggota_perjadin . '/' . $d->kode_mak . '/' . $d->kode_kegiatan ?>"><i class="mdi mdi-trash-can"></i></a>
                                                                                        </td>
                                                                                    <?php } ?>
                                                                                </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- <input type="hidden" name="id_perjalanan_dinas" value="<?php //echo $j->id_perjalanan_dinas
                                                                                                                    ?>"> -->
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