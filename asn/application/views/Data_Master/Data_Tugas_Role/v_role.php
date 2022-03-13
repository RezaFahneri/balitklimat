<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data Role</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>">
                        </div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>">
                        </div>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active"
                                onclick="window.location.href='<?php echo base_url() ?>role_penugasan'">Role
                            </label>
                            <label class=" btn btn-secondary"
                                onclick="window.location.href='<?php echo base_url() ?>role_penugasan/penugasan'">Penugasan
                            </label>
                        </div><br><br>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>role_penugasan/tambah_role"
                                class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah Role</a>
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
                                                        <th style="width:35%">Nama Role</th>
                                                        <th style="width:0.5%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_role as $dr) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++ . ' ' ?><a
                                                                title="Lihat daftar anggota role" data-toggle="collapse"
                                                                data-target="#datarole<?php echo $dr->id_role ?>"
                                                                class="accordion-toggle btn btn-light btn-sm mdi mdi-account-multiple"></a>
                                                        </td>
                                                        <td><?php echo $dr->role ?></td>
                                                        <td>
                                                            <a title="Edit data role" class="btn btn-sm btn-success"
                                                                href="<?php echo base_url('/role_penugasan/edit_role/' . $dr->id_role) ?>"><i
                                                                    class="mdi mdi-lead-pencil"></i></a>
                                                            <a title="Tambah anggota role" style="color:white"
                                                                class="btn btn-sm btn-secondary"
                                                                href="<?php echo base_url('/role_penugasan/tambah_tim_role/' . $dr->id_role) ?>"><i
                                                                    class="mdi mdi-account-multiple-plus"></i></a>
                                                            <a title="Hapus data role" id="hapus_role"
                                                                class="btn btn-sm btn-danger"
                                                                href="<?php echo site_url('/role_penugasan/hapus_role/' . $dr->id_role) ?>"><i
                                                                    class="mdi mdi-trash-can"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="12" class="hiddenRow">
                                                            <div class="accordian-body collapse"
                                                                id="datarole<?php echo $dr->id_role ?>">
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
                                                                            foreach ($detail_role as $er) {
                                                                            ?>
                                                                        <tr data-toggle="collapse"
                                                                            class="accordion-toggle">
                                                                            <?php if ($dr->id_role == $er->id_role) { ?>
                                                                            <td><?php echo $er->nama_pegawai ?></td>
                                                                            <td><?php echo $er->golongan ?></td>
                                                                            <td><?php echo $er->pangkat ?></td>
                                                                            <td>
                                                                                <a title="Hapus data tim role"
                                                                                    id="hapus_tim_role"
                                                                                    class="btn btn-sm btn-danger"
                                                                                    href="<?php echo base_url() ?>role_penugasan/hapus_tim_role/<?php echo $er->id_detail_role ?>"><i
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
                                                    <!-- <input type="hidden" name="id_role" value="<?php //echo $dr->id_role
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