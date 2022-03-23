<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <a href="<?php echo base_url() ?>suratmasuk" class="btn btn-sm btn-warning float-right"><i class="ti ti-arrow-left"></i> Kembali ke Surat Masuk</a>
                    <h3 class="m-0 font-weight-bold">Riwayat Surat Masuk</h3><br>
                    <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                    <div class="col-md-4 grid-margin mb-3"></div>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow mb-12">
                            <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <!-- <div class="card-body"> -->
                                <!-- <div class="table-responsive pt-3 "> -->
                                <table id="dataTable" class="table table-striped table-bordered table-md" style="width:100%">
                                <thead  class="thead-light">
                                        <tr>
                                        <th width='5%'>No</th>
                                        <!-- <th style= "text-align: center;">Sifat Surat</th> -->
                                        <!-- <th style= "text-align: center;">Kode/Indeks</th> -->
                                        <th style= "text-align: center;">No Surat</th>
                                        <th style= "text-align: center;">Tanggal Surat</th>
                                        <th style= "text-align: center;">Asal Surat</th>
                                        <!-- <th style= "text-align: center;">Perihal/Isi Surat</th> -->
                                        <!-- <th style= "text-align: center;">File Surat</th> -->
                                        <th style= "text-align: center;">Diteruskan Kepada</th>
                                        <!-- <th style= "text-align: center;">Tanggal Input</th>
                                        <th style= "text-align: center;">No. Urut</th> -->
                                        <th style= "text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        if ($suratmasuk)
                                            foreach ($suratmasuk as $sm) {
                                            ?>
                                            <tr>
                                                <td style= "text-align: center;"><?php echo $no++; ?></td>
                                                <!-- <td></?php echo $sm->sifat_surat; ?></td> -->
                                                <td><?php echo $sm->no_surat; ?></td>
                                                <td><?php echo $sm->tanggal_surat ?></td>
                                                <td><?php echo $sm->asal_surat?></td>
                                                <!-- <td></?php echo $sm->perihal ?></td> -->
                                                <!-- <td><a class="btn btn-sm btn-outline-primary btn-icon-text" href="</?php echo base_url() ?>assets/file/suratmasuk/</?php echo $sm->dokumen ?>"><i class="ti ti-download"></i> Unduh</a></td> -->
                                                <td><?php
                                                    foreach ($detaildisposisi as $ds) {
                                                        ?>
                                                         <?php
                                                        if($ds['suratmasuk_id'] == $sm->id_suratmasuk) {
                                                        ?>
                                                            <?php echo $ds['kepada']; ?>,<br>
                                                           
                                                    <?php } ?>
                                                    <?php } ?></td>
                                                <td>
                                                <a class="btn btn-sm btn-warning" href="<?php echo base_url('/riwayatsurat/detail/' . $sm->id_suratmasuk) ?>"><i class="ti ti-eye"></i></a>
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
