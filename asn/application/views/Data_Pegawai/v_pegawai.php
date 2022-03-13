<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="table-responsive">
                            <h3 class="m-0 font-weight-bold text-primary">Data Pegawai</h3><br>
                            <!-- <?//php if ($this->session->userdata('role') == "Admin ASN") : ?> -->
                            <div class="flash-data" id="flash2"
                                data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                            <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>">
                            </div>
                            <div class="col-md-4 grid-margin">
                                <a href="<?php echo base_url() ?>data_pegawai/tambah" class="btn btn-success btn-md"><i
                                        class="ti ti-plus"></i>Tambah Pegawai</a>
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
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th style="width:3%">No</th>
                                                                <th style="width:20%">Nama Pegawai</th>
                                                                </th>
                                                                <!-- <th>Pangkat</th> -->
                                                                <!-- <th style="width:4%" class="th-sm">Foto</th> -->
                                                                <th style="width:4%">Jabatan</th>
                                                                <th style="width:10%">Golongan</th>
                                                                <!-- <th style="width:4%">Divisi</th> -->
                                                                <th style="width:2%">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($data_pegawai as $dp) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $no++ ?></td>
                                                                <td><?php echo $dp->nama_pegawai ?></td>
                                                                <td><?php echo $dp->jabatan;?></td>
                                                                <td><?php echo $dp->golongan;?></td>
                                                                <!-- <td><?//php echo $dp->divisi;?></td> -->
                                                                <td>
                                                                    <!-- <a title="Penugasan Pegawai"
                                                                        style="color:#ffffff; font-size:25px"
                                                                        class="btn btn-sm btn-dark"
                                                                        href="<?//php echo base_url('data_pegawai/tambah_penugasan/' . $dp->nip) ?>"><i
                                                                            class="mdi mdi-pin"></i></a> -->
                                                                    <a title="Detail data pegawai"
                                                                        style="color:#ffffff; font-size:30px"
                                                                        class="btn btn-sm btn-warning"
                                                                        href="<?php echo base_url('data_pegawai/detail/' . $dp->nip) ?>"><i
                                                                            class="mdi mdi-account-card-details"></i></a>
                                                                    <a title="Edit data pegawai" style="font-size:30px"
                                                                        class="btn btn-sm btn-success"
                                                                        href="<?php echo base_url() ?>data_pegawai/edit?nip=<?php echo $dp->nip?>"><i
                                                                            class="mdi mdi-pencil"></i></a>
                                                                    <a title="Hapus data pegawai" style="font-size:30px"
                                                                        id="hapus_pegawai" class="btn btn-sm btn-danger"
                                                                        href="<?php echo site_url('data_pegawai/hapus/' . $dp->nip) ?>"><i
                                                                            class="mdi mdi-trash-can"></i></a>
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
                            <!-- <?//php endif; ?> -->



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>