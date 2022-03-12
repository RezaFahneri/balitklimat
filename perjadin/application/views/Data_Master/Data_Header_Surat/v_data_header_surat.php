<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary">Data Header Surat</h3><br>
                    <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                    <div class="col-md-4 grid-margin"></div>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow mb-12">
                            <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <!-- <div class="card-body"> -->
                                <div class="table-responsive pt-3 table-md">
                                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%; height:100%">
                                    <thead  class="thead-light">
                                        <tr>
                                        <th style="color:gray;height:40px"><label>No</label></th>
                                        <th style="color:gray;height:40px"><label>Nama Kementerian</label></th>
                                        <th style="color:gray;height:40px"><label>Eslon Satu</label></th>
                                        <th style="color:gray;height:40px"><label>Eslon Dua</label></th>
                                        <th style="color:gray;height:40px"><label>Eslon Tiga</label></th>
                                        <th style="color:gray;height:40px"><label>Alamat</label></th>
                                        <th style="color:gray;height:40px"><label>Aksi</label></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        foreach ($header_surat as $sp) {
                                        ?>
                                        <tr>
                                             <td style="font-size: 12px;"><?php echo $no++ ?></td>
                                             <td style="font-size: 12px;"><?php echo $sp->nama_kementerian ?></td>
                                             <td style="font-size: 12px;"><?php echo $sp->eslon_satu ?></td>
                                             <td style="font-size: 12px;"><?php echo $sp->eslon_dua ?></td>
                                             <td style="font-size: 12px;"><?php echo $sp->eslon_tiga ?></td>
                                             <td style="font-size: 12px;"><?php echo $sp->alamat ?></td>
                                         <td style="font-size: 12px;">
                                            <a style ="height:35px"title="Edit data header surat"  class="btn btn-xs btn-success" href="<?php echo base_url('/header_surat/edit/' . $sp->id_header_surat) ?>"><i class="mdi mdi-lead-pencil"></i></a>
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
