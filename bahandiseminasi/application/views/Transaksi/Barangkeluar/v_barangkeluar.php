<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold">Data Barang Keluar</h3><br>
                    <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                    <div class="col-md-4 grid-margin mb-3">
                    <a href="<?php echo base_url() ?>barangkeluar/tambah" class="btn btn-success btn-sm"><i class="ti ti-plus"></i> Tambah Barang Keluar</a></div>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow mb-12">
                            <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <!-- <div class="card-body"> -->
                                <!-- <div class="table-responsive pt-3 "> -->
                                <table id="dataTable" class="table table-striped table-bordered table-md" style="width:100%"'>
                                    <thead  class="thead-light">
                                        <tr>
                                        <th style="width:2%">No</th>
                                        <th style="width:2%">Tanggal Keluar</th>
                                        <th style="width:3%; text-align: center;">Nama Barang</th>
                                        <th style= "text-align: center;">Jumlah Keluar</th>
                                        <!-- <th width='5px' style= "text-align: center;">Keterangan</th> -->
                                        <!-- <th style= "text-align: center;">Upload Berita Acara</th> -->
                                        <!-- <th width='10px' style= "text-align: center;">File</th> -->
                                        <th style= "text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        if ($barangkeluar)
                                            foreach ($barangkeluar as $bk) {
                                            ?>
                                            <tr>
                                                <td style= "text-align: center;"><?php echo $no++; ?></td>
                                                <td width='10px'><?php echo $bk['tanggal_keluar']; ?></td>
                                                <td width='10px'><?php echo $bk['nama_barang']; ?></td>
                                                <td><?php echo $bk['jumlah_keluar'] . ' ' . $bk['nama_satuan']; ?></td>
                                                <!-- <td></?php echo $bk['keterangan']; ?></td> -->
                                                <!-- <td></?php echo $bk['status']; ?></td> -->
                                                <!-- <td><a class="btn btn-sm btn-outline-primary btn-icon-text" href="</?php echo base_url() ?>assets/file/barangkeluar/</?php echo $bk['dokumen'] ?>"><i class="ti ti-download"> Unduh</i></a></td> -->

                                            <td>
                                                <a class="btn btn-sm btn-warning" href="<?php echo base_url('/barangkeluar/detail/' . $bk['id_barangkeluar']) ?>"><i class="ti ti-eye"></i></a>
                                                <a class="btn btn-sm btn-success" href="<?php echo base_url('/barangkeluar/edit/' . $bk['id_barangkeluar']) ?>"><i class="ti ti-pencil"></i></a>
                                                <a id="hapuskeluar" class="btn btn-sm btn-danger" href="<?php echo site_url('/barangkeluar/hapus/' . $bk['id_barangkeluar']) ?>"><i class="ti ti-trash"></i></a>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url('/barangkembali/tambah/' . $bk['id_barangkeluar']) ?>"><i class="ti-back-left"></i></a>
                                                <a class="btn btn-sm btn-secondary" href="<?php echo base_url('/barangkeluar/pdf/' . $bk['id_barangkeluar']) ?>"><i class="ti ti-printer"></i></a>
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