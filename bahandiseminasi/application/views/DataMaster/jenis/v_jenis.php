<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold">Data Jenis Barang</h3><br>
                    <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                    <div class="col-md-4 grid-margin mb-3">
                    <a href="<?php echo base_url() ?>jenis/tambah" class="btn btn-success btn-sm"><i class="ti ti-plus"></i> Tambah Jenis Barang</a></div>
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
                                        <th style= "text-align: center;">Jenis Barang</th>
                                        <th style= "text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        foreach ($jenis as $j) {
                                        ?>
                                        <tr>
                                            <td style= "text-align: center;"><?php echo $no++ ?></td>
                                            <td ><?php echo $j->nama_jenis ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="<?php echo base_url('/jenis/edit/' . $j->id_jenis) ?>"><i class="ti ti-pencil"></i></a>
                                            <a id="hapusjenis" class="btn btn-sm btn-danger" href="<?php echo site_url('/jenis/hapus/' . $j->id_jenis) ?>"><i class="ti ti-trash"></i></a>
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