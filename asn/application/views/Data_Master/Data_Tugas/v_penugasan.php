<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data Penugasan</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>">
                        </div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>">
                        </div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>penugasan/tambah" class="btn btn-success btn-md"><i
                                    class="ti ti-plus"></i>Tambah Penugasan</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-3 ">
                                            <table id="dtBasicExample" class="table table-bordered table-md"
                                                cellspacing="0" style="width:100%; height:100%">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width:1%">No</th>
                                                        <th style="width:35%">Nama Penugasan</th>
                                                        <th style="width:0.5%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_tugas as $dt) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++ . ' ' ?><a
                                                                title="Lihat daftar anggota penugasan"
                                                                data-toggle="collapse"
                                                                data-target="#datatugas<?php echo $dt->id_tugas ?>"
                                                                class="accordion-toggle btn btn-light btn-sm mdi mdi-account-multiple"></a>
                                                        </td>
                                                        <td><?php echo $dt->penugasan ?></td>
                                                        <td>
                                                            <a title="Edit data penugasan"
                                                                class="btn btn-sm btn-success"
                                                                href="<?php echo base_url('/penugasan/edit/' . $dt->id_tugas) ?>"><i
                                                                    class="mdi mdi-lead-pencil"></i></a>
                                                            <a title="Tambah anggota penugasan" style="color:white"
                                                                class="btn btn-sm btn-secondary"
                                                                href="<?php echo base_url('/penugasan/tambah_tim/' . $dt->id_tugas) ?>"><i
                                                                    class="mdi mdi-account-multiple-plus"></i></a>
                                                            <a title="Hapus data penugasan" id="hapus_penugasan"
                                                                class="btn btn-sm btn-danger"
                                                                href="<?php echo site_url('/penugasan/hapus/' . $dt->id_tugas) ?>"><i
                                                                    class="mdi mdi-trash-can"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="12" class="hiddenRow">
                                                            <div class="accordian-body collapse"
                                                                id="datatugas<?php echo $dt->id_tugas ?>">
                                                                <table
                                                                    style="margin-top:5px; width:97%; margin-left:21px;margin-bottom:5px;"
                                                                    class="table table-bordered table-md">
                                                                    <thead class="thead-light">
                                                                        <tr class="info">
                                                                            <th style="width:5%">Nama Pegawai</th>
                                                                            <th style="width:4%">Golongan</th>
                                                                            <th style="width:4%">Pangkat</th>
                                                                            <th style="width:1%">Aksi</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <?php
                                                                            foreach ($detail_tugas as $et) {
                                                                            ?>
                                                                        <tr data-toggle="collapse"
                                                                            class="accordion-toggle">
                                                                            <?php if ($dt->id_tugas == $et->id_tugas) { ?>
                                                                            <td><?php echo $et->nama_pegawai ?></td>
                                                                            <td><?php echo $et->golongan ?></td>
                                                                            <td><?php echo $et->pangkat ?></td>
                                                                            <td>
                                                                                <a title="Hapus data tim penugasan"
                                                                                    class="btn btn-sm btn-danger"
                                                                                    href="<?php echo base_url() ?>penugasan/hapus_tim/<?php echo $et->id_detail_tugas ?>"><i
                                                                                        class="mdi mdi-trash-can"></i></a>
                                                                            </td>
                                                                            <?php } ?>
                                                                        </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- <input type="hidden" name="id_tugas" value="<?php //echo $dt->id_tugas
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