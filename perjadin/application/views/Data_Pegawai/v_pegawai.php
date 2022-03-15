<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="table-responsive">
                            <h3 class="m-0 font-weight-bold text-primary">Data Pegawai</h3><br>
                            <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                            <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                            <!-- <div class="col-md-4 grid-margin">
                                <a href="<?php echo base_url() ?>data_pegawai/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah Pegawai</a>
                            </div> -->
                            <div class="col-md-12 grid-margin">
                                <div class="card shadow mb-12">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive pt-8 ">
                                                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" style="width:100%">
                                                        <!-- <table  id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'> -->
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th title="No" style="width:8%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">No</label></th>
                                                                <th title="Nama Pegawai" style="width:10%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Nama Pegawai</label></th>
                                                                <th title="NIP" style="width:10%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">NIP</label></th>

                                                                <!-- <th>Pangkat</th> -->
                                                                <!-- <th style="width:4%" class="th-sm">Foto</th> -->
                                                                <th title="Jabatan" style="width:4%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Jabatan</label></th>
                                                                <th title="Golongan" style="width:10%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Golongan</label></th>
                                                                <th title="Divisi" style="width:4%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Divisi</label></th>
                                                                <!-- <th style="width:4%">KPA</th>
                                                                <th style="width:4%">Admin</th>
                                                                <th style="width:4%">PPK</th>
                                                                <th style="width:4%">PJ</th>
                                                                <th style="width:4%">Bendahara</th> -->
                                                                <th style="width:1%;"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;margin-left:8px;color:gray">Aksi</label></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($data_pegawai as $dp) {
                                                            ?>
                                                                <tr>
                                                                    <td style="font-size: 12px;text-align:center"><?php echo $no++ ?></td>
                                                                    <td style="font-size: 12px;"><?php echo $dp->nama_pegawai ?></td>
                                                                    <?php
                                                                    $nip = $dp->nip;
                                                                    if ($nip[0] == 'H') {
                                                                    ?><td style="font-size: 12px;"><?php echo ' '; ?></td><?php
                                                                                    } else {
                                                                                        ?><td style="font-size: 12px;"><?php echo $nip; ?></td><?php
                                                                                        } ?>
                                                                    <!-- <td style="font-size: 12px;"><?php echo $dp->nip ?></td> -->
                                                                    <!--  <td style="font-size: 12px;">
                                                                        <img  style="width:50px;height: 50px;" src="<?php //echo base_url() . '../asn/assets/images/foto/' . $dp->foto 
                                                                                                                    ?> " class="zoomable">
                                                                    </td> -->
                                                                    <td style="font-size: 12px;"><?php echo $dp->jabatan; ?></td>
                                                                    <td style="font-size: 12px;"><?php echo $dp->golongan; ?></td>
                                                                    <td style="font-size: 12px;"><?php echo $dp->divisi; ?></td>
                                                                    <td style="font-size: 12px;">
                                                                        <a style="height: 35px;color:#ffffff" title="Detail data pegawai" class="btn btn-sm btn-warning" href="<?php echo base_url('data_pegawai/detail/' . $dp->nip) ?>"><i class="mdi mdi-account-card-details"></i></a>
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