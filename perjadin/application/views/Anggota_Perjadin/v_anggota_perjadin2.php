<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a title="Kembali" class="btn btn-sm btn-success" style="border-radius:90px; color:white" href="<?php echo site_url('perjalanan_dinas') ?>"><i class="ti ti-arrow-left" style="border-radius:8px"></i></a>
                        <br><br>
                        <h3 class="m-0 font-weight-bold text-primary">Data Perjalanan Dinas By Pegawai</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-3 ">
                                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:130%; height:100%">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width:5%" title="Nama"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Nama</label></th>

                                                        <th style="width:4%" title="No Surat Tugas"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">No Surat Tugas</label></th>
                                                        <th style="width:5%" title="Kegiatan"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Kegiatan</label></th>
                                                        <th style="width:6%" title="Dalam Rangka"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Dalam Rangka</label></th>
                                                        <th style="width:2%" title="Lokasi"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Lokasi</label></th>
                                                        <th style="width:0.5%" title="Berangkat"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Berangkat</label></th>
                                                        <th style="width:0.5%" title="Kembali"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Kembali</label></th>
                                                        <th style="width:0.5%" title="Jumlah Hari"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Jumlah Hari</label></th>
                                                        <th style="width:0.5%" title="Pengeluaran"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Pengeluaran</label></th>
                                                        <th style="width:0.5%" title="PUMK"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">PUMK</label></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($data_anggota_perjadin as $j) {
                                                    ?>
                                                        <tr>
                                                            <td style="font-size: 12px;heigth:40px"><label style="margin-top:5px"><?php echo $j->nama_anggota_perjadin ?></label></td>
                                                            <td style="font-size: 12px;"><?php echo $j->no_surat_tugas ?></td>
                                                            <td style="font-size: 12px;"><?php echo $j->judul_kegiatan ?></td>
                                                            <td style="font-size: 12px;"><?php echo $j->dalam_rangka ?></td>
                                                            <td style="font-size: 12px;"><?php echo $j->kota_tujuan ?></td>
                                                            <td style="font-size: 12px;"><?php echo $j->tanggal_berangkat ?></td>
                                                            <td style="font-size: 12px;"><?php echo $j->tanggal_kembali ?></td>
                                                            <td style="font-size: 12px;"><?php echo $j->lama_perjalanan ?></td>
                                                            <td style="font-size: 12px;"><?php echo 'Rp' . number_format($j->total_pendapatan) ?></td>
                                                            <td style="font-size: 12px;"><?php echo $j->nama_pumk ?></td>
                                                        <?php } ?>
                                                </tbody>
                                            </table>
                                            <!-- <span id="hasil"></span>
                                         -->
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