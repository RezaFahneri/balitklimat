<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="table-responsive">
                            <h3 class="m-0 font-weight-bold text-primary">Jadwal Kenaikan Gaji Berkala</h3><br>
                            <div class="flash-data" id="flash2"
                                data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                            <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>">
                            </div>
                            <div class="col-md-8 grid-margin">
                                <a href="<?php echo base_url() ?>jadwal_kgb/tambah" class="btn btn-success btn-md"><i
                                        class="ti ti-plus"></i>Tambah Jadwal Kenaikan Gaji Berkala</a>
                                <a href="<?php echo base_url() ?>jadwal_kgb/kalender" type="button"
                                    class="btn btn-outline-dark">
                                    <i class="ti ti-calendar"></i>
                                </a>
                            </div>
                            <div class="col-md-12 grid-margin">
                                <div class="card shadow mb-12">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive pt-8 ">
                                                    <table id="dtBasicExample"
                                                        class="table table-striped table-bordered table-md"
                                                        data-page-length='25' style="width:100%">
                                                        <!-- <table  id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'> -->
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th style="width:4%">No</th>
                                                                <!-- <th style="width:9%" class="th-sm">NIP</th> -->
                                                                <th style="width:15%" class="th-sm">Nama Pegawai</th>
                                                                <!-- <th style="width:8%" class="th-sm">Pangkat</th>
                                                                <th style="width:5%" class="th-sm">Golongan</th> -->
                                                                <!-- <th style="width:8%" class="th-sm">Gaji Lama</th> -->
                                                                <th style="width:8%" class="th-sm">Gaji Baru</th>
                                                                <!-- <th style="width:7%" class="th-sm">TMT 1</th>
                                                                <th style="width:7%" class="th-sm">TMT 2</th>
                                                                <th style="width:7%" class="th-sm">TMT 3</th>
                                                                <th style="width:7%" class="th-sm">TMT 4</th>
                                                                <th style="width:7%" class="th-sm">TMT 5</th> -->
                                                                <th style="width:7%" class="th-sm">Jadwal Kenaikan Gaji
                                                                </th>
                                                                <th style="width:7%" class="th-sm">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                        $no = 1;
                                        foreach ($jadwal_kgb as  $kgb) {
                                        ?>
                                                            <tr>
                                                                <td><?php echo $no++ ?></td>
                                                                <!-- <td><?//php echo  $kgb->nip ?></td> -->
                                                                <td><?php echo  $kgb->nama_pegawai ?></td>
                                                                <!-- <td><//?php echo  $kgb->pangkat ?></td>
                                                                <td><?//php echo  $kgb->golongan ?></td>
                                                                <td>Rp. <//?php echo  $kgb->gaji_lama ?></td> -->
                                                                <td>Rp. <?php echo  $kgb->gaji_baru ?></td>
                                                                <!-- <td><?//php echo  $kgb->tmt_gaji_1 ?></td>
                                                                <td><?//php echo  $kgb->tmt_gaji_2 ?></td>
                                                                <td><?//php echo  $kgb->tmt_gaji_3 ?></td>
                                                                <td><?//php echo  $kgb->tmt_gaji_4 ?></td>
                                                                <td><?//php echo  $kgb->tmt_gaji_5 ?></td> -->
                                                                <td><?php echo  $kgb->jadwal_kgb?></td>
                                                                <td>
                                                                    <a title="Detail Jadwal Kenaikan Gaji Berkala"
                                                                        style="color:#ffffff; font-size:30px"
                                                                        class="btn btn-sm btn-info"
                                                                        href="<?php echo base_url('jadwal_kgb/detail/' . $kgb->kode_kgb) ?>"><i
                                                                            class="mdi mdi-information-outline"></i></a>
                                                                    <a title="Kirim Pesan Whatsapp"
                                                                        style="font-size:30px"
                                                                        class="btn btn-md btn-success"
                                                                        style="height:25px" href="
                                                                        https://web.whatsapp.com/send?phone='.<?php echo base_url(' jadwal_kgb/wa/' . $kgb->no_whatsapp) ?>.'&text=
                                                                        Assalamaualaikum,...%20Kami dari *Admin Balitklimat*, ingin mengkonfirmasi data berikut, %0a
                                                                        NIP : <?php echo $kgb->nip ?> %0a
                                                                        Nama : <?php echo $kgb->nama_pegawai ?> %0a
                                                                        Pangkat : <?php echo $kgb->pangkat ?> %0a
                                                                        Golongan : <?php echo $kgb->golongan?> %0a
                                                                        Pada Tanggal: <?php echo $kgb->jadwal_kgb ?>  %0a
                                                                        Gaji lama senilai :<?php echo $kgb->gaji_lama ?> %0a
                                                                        akan menjadi Gaji Baru senilai : <?php echo $kgb->gaji_baru ?> %0a
                                                                        
                                                                        Terimakasih..
                                                                        " class="float" target="_blank"><i
                                                                            class="ti ti-brand-whatsapp"></i></a>
                                                                    <a title="Edit Jadwal Kenaikan Gaji Berkala"
                                                                        style="font-size:30px"
                                                                        class="btn btn-md btn-warning"
                                                                        href="<?php echo base_url() ?>jadwal_kgb/edit?kode_kgb=<?php echo $kgb->kode_kgb?>"><i
                                                                            class="mdi mdi-pencil"></i></a>
                                                                    <a title="Hapus Jadwal Kenaikan Gaji Berkala"
                                                                        style="font-size:30px" id="hapus_jadwalkgb"
                                                                        style="height:25px"
                                                                        class="btn btn-md btn-danger"
                                                                        href="<?php echo site_url('jadwal_kgb/hapus/' .  $kgb->kode_kgb) ?>"><i
                                                                            class="ti ti-trash"></i></a>
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
    </table>