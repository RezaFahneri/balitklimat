<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold">Data Sifat Surat</h3><br>
                    <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                    <div class="col-md-4 grid-margin mb-3">
                    <a href="<?php echo base_url() ?>sifatsurat/tambah" class="btn btn-success btn-sm"><i class="ti ti-plus"></i> Tambah Sifat Surat</a></div>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow mb-12">
                            <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <!-- <div class="card-body"> -->
                                <!-- <div class="table-responsive pt-3 "> -->
                                <table id="dataTable" class="table table-striped table-bordered table-md" style="width:100%">
                                    <thead  class="thead-light">
                                        <tr>
                                        <th width='5px'>No</th>
                                        <th style= "text-align: center;">Sifat Surat</th>
                                        <th style= "text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        foreach ($sifat_surat as $ss) {
                                        ?>
                                        <tr>
                                            <td style= "text-align: center;"><?php echo $no++ ?></td>
                                            <td ><?php echo $ss->sifat_surat ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="<?php echo base_url('/sifatsurat/edit/' . $ss->id_sifatsurat) ?>"><i class="ti ti-pencil"></i></a>
                                            <a id="hapussifat" class="btn btn-sm btn-danger" href="<?php echo site_url('/sifatsurat/hapus/' . $ss->id_sifatsurat) ?>"><i class="ti ti-trash"></i></a>
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