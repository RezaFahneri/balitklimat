<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <a href="<?php echo base_url() ?>suratmasuk" class="btn btn-sm btn-warning float-right"><i class="ti ti-arrow-left"></i> Kembali ke Surat Masuk</a>
                    <h3 class="m-0 font-weight-bold">Riwayat Disposisi</h3><br>
                    <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                    <div class="col-md-4 grid-margin mb-3"></div>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow mb-12">
                            <div class="col-rd-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <!-- <div class="table-responsive pt-3 "> -->
                                <table id="dataTable" class="table table-striped table-bordered text-wrap" style="width:100% table-layout:fixed" cellspacing="0">
                                <thead class="thead-light">
                                        <tr style="text-align: center;">
                                        <th width="3%">No</th>
                                        <!-- <th style= "text-align: center;">Sifat Surat</th> -->
                                        <!-- <th style= "text-align: center;">Kode/Indeks</th> -->
                                        <th width="3%">No Surat</th>
                                        <th style= "text-align: center;">Disposisi Oleh</th>
                                        <th style= "text-align: center;">Diteruskan Kepada</th>
                                        <!-- <th style= "text-align: center;">Isi Disposisi</th> -->
                                        <!-- <th style= "text-align: center;">Catatan</th> -->
                                        <!-- <th style= "text-align: center;">Catatan Tambahan</th> -->
                                        <!-- <th style= "text-align: center;">Status</th> -->
                                        <!-- <th style= "text-align: center;">Tanggal Input</th>
                                        <th style= "text-align: center;">No. Urut</th> -->
                                        <th style= "text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        if ($riwayatdisposisi)
                                            foreach ($riwayatdisposisi as $rd) {
                                            ?>
                                            <tr>
                                                <td style= "text-align: center;"><?php echo $no++; ?></td>
                                                <!-- <td></?php echo $rd->sifat_surat; ?></td> -->
                                                <td><?php echo $rd->no_surat ?></td>
                                                <td><?php echo $rd->user ?></td>
                                                <td>
                                                <?php
                                            foreach ($detaildisposisi as $ds) {
                                            ?>
                                             <?php
                                            if($ds['suratmasuk_id'] == $rd->suratmasuk_id) {
                                            ?>
                                                <?php echo $ds['kepada']; ?>,<br>
                                               
                                        <?php } ?>
                                        <?php } ?></td>
                                             <td>
                                                <a class="btn btn-rd btn-warning" href="<?php echo base_url('/riwayatdisposisi/detail/' . $rd->id_riwayat) ?>"><i class="ti ti-eye"></i></a>
                                                <!-- <a class="btn btn-rd btn-success" href="</?php echo base_url('/riwayatdisposisi/edit/' . $rd->id_riwayat) ?>"><i class="ti ti-pencil"></i></a> -->
                                                <!-- <a id="hapusdisposisi" class="btn btn-rd btn-danger" href="</?php echo site_url('/riwayatdisposisi/hapus/' . $rd->id_riwayat) ?>"><i class="ti ti-trash"></i></a> -->
                                            </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    </table>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
            </div> 
    </div>                   
</div>
</div>