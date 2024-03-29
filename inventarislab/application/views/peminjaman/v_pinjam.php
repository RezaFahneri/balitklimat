<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Peminjaman Alat</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="col-md-4 grid-margin" style="margin-bottom: 20px;">
                            <a href="<?php echo base_url() ?>pinjam_alat/pinjam" class="btn btn-success btn-md">Pinjam Alat</a>
                        </div>
                        <?php if ($this->session->userdata('logged_in') == true) { ?>
                            <?php if ($this->session->userdata('role') == "Admin Inventaris") { ?>
                                <p>Jika ada yang melakukan peminjaman, catat transaksinya di kolom keterangan. Caranya dengan klik tombol edit(pensil) yang ada di kolom aksi. Setelah disimpan, lalu klik tombol verifikasi untuk menyetujui peminjaman.</p></br>
                            <?php } ?>
                        <?php } ?>
                        <div class="col-md-12 grid-margin">
                            <div class="card mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-4">
                                            <table id="datatable" class="table table-bordered" cellspacing="0" width="100%">
                                                <thead style='height:auto' class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Alat</th>
                                                        <th>Peminjam</th>
                                                        <th>Tanggal Pinjam</th>
                                                        <th>Tanggal Selesai</th>
                                                        <th>Jml</th>
                                                        <!-- <th>Kegiatan</th>
                                                        <th>Lokasi</th> -->
                                                        <th>Keterangan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_pinjam as $dp) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo character_limiter($dp->namaalat, 10) ?></td>
                                                            <td><?php echo character_limiter($dp->peminjam, 7) ?></td>
                                                            <td><?php echo tanggal_indonesia($dp->tglpinjam) ?></td>
                                                            <td><?php echo tanggal_indonesia($dp->tglselesai) ?></td>
                                                            <td><?php echo $dp->qty ?></td>
                                                            <!-- <td><?php echo character_limiter($dp->kegiatan, 10) ?></td>
                                                            <td><?php echo character_limiter($dp->lokasi, 10) ?></td> -->
                                                            <td><?php echo character_limiter($dp->keterangan, 10) ?></td>
                                                            <?php if ($dp->status == '1') { ?>
                                                                <?php if ($this->session->userdata('logged_in') == true) { ?>
                                                                    <?php if ($this->session->userdata('role') == "Admin Inventaris") { ?>
                                                                        <td>
                                                                            <a id="dipinjamkan1" class="btn btn-outline-warning btn-md" href="<?php echo site_url('pinjam_alat/dipinjamkan/' . $dp->id_pinjam) ?>">Verifikasi</a>
                                                                            <hr style="width:60%;text-align:left;margin-left:0">
                                                                            <a id="ditolak" class="btn btn-outline-danger btn-md" href="<?php echo site_url('pinjam_alat/tolak/' . $dp->id_pinjam . '/' . $dp->idalat) ?>">Tolak</a>
                                                                        </td>
                                                                    <?php } else if ($this->session->userdata('role') == "User") { ?>
                                                                        <td>
                                                                            <button class="btn btn-outline-warning btn-md" disabled>Menunggu Verifikasi</button>
                                                                        </td>
                                                                    <?php } ?>
                                                                <?php } else if ($this->session->userdata('logged_in') == false) { ?>
                                                                    <td>
                                                                        <button class="btn btn-outline-warning btn-md" disabled>Menunggu Verifikasi</button>
                                                                    </td>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <?php if ($this->session->userdata('logged_in') == true) { ?>
                                                                    <td height="40px">
                                                                        <button type="button" class="btn btn-outline-success" disabled>Dipinjam</button>
                                                                        <hr style="width:60%;text-align:left;margin-left:0">
                                                                        <a type="button" class="btn btn-outline-info btn-md" href="<?php echo base_url('pinjam_alat/selesai/' . $dp->id_pinjam) . '/' . $dp->idalat ?>">Selesai</a>
                                                                    </td>
                                                                <?php } else if ($this->session->userdata('logged_in') == false) { ?>
                                                                    <td height="40px">
                                                                        <button type="button" class="btn btn-outline-success btn-lg" disabled>Dipinjam</button>
                                                                    </td>
                                                                <?php } ?>
                                                            <?php } ?>
                                                            <?php if ($this->session->userdata('logged_in') == true) { ?>
                                                                <?php if ($this->session->userdata('role') == "Admin Inventaris") { ?>
                                                                    <td>
                                                                        <a data-toggle="tooltip" title="Detail" style="font-size:25px" class="btn btn-sm btn-info" href="<?php echo base_url('/pinjam_alat/detail/' . $dp->id_pinjam) ?>"><i class="mdi mdi-information-outline"></i></a>
                                                                        <a data-toggle="tooltip" title="Edit" style="font-size:25px" class="btn btn-md btn-success" href="<?php echo base_url() ?>pinjam_alat/edit?id_pinjam=<?php echo $dp->id_pinjam ?>"><i class="mdi mdi-pencil"></i></a>
                                                                        <?php if ($dp->status == '2') { ?>
                                                                            <a data-toggle="tooltip" title="Bukti Peminjaman" style="font-size:25px;color:white" class="btn btn-sm btn-warning" href="<?php echo base_url('/pinjam_alat/pdf/' . $dp->id_pinjam) ?>"><i class="mdi mdi-note-text"></i></a>
                                                                        <?php } ?>  
                                                                    </td>
                                                                <?php } else if ($this->session->userdata('role') == "User") { ?>
                                                                    <td>
                                                                        <a data-toggle="tooltip" title="Detail" style="font-size:25px" class="btn btn-sm btn-info" href="<?php echo base_url('/pinjam_alat/detail/' . $dp->id_pinjam) ?>"><i class="mdi mdi-information-outline"></i></a>
                                                                        <?php if ($dp->status == '2') { ?>
                                                                            <a data-toggle="tooltip" title="Bukti Peminjaman" style="font-size:25px;color:white" class="btn btn-sm btn-warning" href="<?php echo base_url('/pinjam_alat/pdf/' . $dp->id_pinjam) ?>"><i class="mdi mdi-note-text"></i></a>
                                                                        <?php } ?>
                                                                    </td>
                                                                <?php } ?>
                                                            <?php } else if ($this->session->userdata('logged_in') == false) { ?>
                                                                <td>
                                                                    <a data-toggle="tooltip" title="Detail" style="font-size:25px" class="btn btn-sm btn-info" href="<?php echo base_url('/pinjam_alat/detail/' . $dp->id_pinjam) ?>"><i class="mdi mdi-information-outline"></i></a>
                                                                    <?php if ($dp->status == '2') { ?>
                                                                        <a data-toggle="tooltip" title="Bukti Peminjaman" style="font-size:25px;color:white" class="btn btn-sm btn-warning" href="<?php echo base_url('/pinjam_alat/pdf/' . $dp->id_pinjam) ?>"><i class="mdi mdi-note-text"></i></a>
                                                                    <?php } ?>
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