<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Status Kepegawaian</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>">
                        </div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>">
                        </div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>status_kepegawaian/tambah"
                                class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah Status Kepegawaian</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-3 table-md">
                                            <table id="dtTable" class="table table-striped table-bordered table-md"
                                                data-page-length='25' cellspacing="0" height='50%'>
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width:9%;text-align:center">No</th>
                                                        <th>Status Kepegawaian</th>
                                                        <th style="width:15%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                        $no = 1;
                                        foreach ($status_kepegawaian as $sp) {
                                        ?>
                                                    <tr>
                                                        <td style="font-size: 12px;text-align:center"><?php echo $no++ ?></td>
                                                        <td><?php echo $sp->status_kepegawaian ?></td>
                                                        <td>
                                                            <a style="font-size:30px" class="btn btn-sm btn-success"
                                                                href="<?php echo base_url('/status_kepegawaian/edit/' . $sp->id_status_peg) ?>"><i
                                                                    class="mdi mdi-lead-pencil"></i></a>
                                                            <a style="font-size:30px" id="hapus_jabatan"
                                                                class="btn btn-sm btn-danger"
                                                                href="<?php echo site_url('/status_kepegawaian/hapus/' . $sp->id_status_peg) ?>"><i
                                                                    class="mdi mdi-delete"></i></a>
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