<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <div class="table-responsive">
                    <h3 class="m-0 font-weight-bold text-primary">Data Pegawai</h3><br>
                    <div class="col-md-4 grid-margin mb-3">
                    <a href="<?php echo base_url() ?>data_pegawai/tambah" class="btn btn-success btn-sm"><i class="ti ti-plus"></i>Tambah Pegawai</a></div>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow mb-12">
                            <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <!-- <div class="card-body"> -->
                                <!-- <div class="table-responsive pt-8 "> -->
                                <table id="dataTable" class="table table-striped table-bordered table-md" style="width:100%">
                                    <!-- <table  id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'> -->
                                    <thead  class="thead-light">
                                        <tr>
                                        <th width='5px'>No</th>
                                        <th style= "text-align: center;">Nama Pegawai</th>
                                        <th style= "text-align: center;">NIP</th>
                                        <!-- <th>Pangkat</th> -->
                                        <!-- <th class="th-sm">Foto</th> -->
                                        <th style= "text-align: center;">Jabatan</th>
                                        <!-- <th>Role</th> -->
                                        <th style= "text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        foreach ($data_pegawai as $dp) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $dp->nama_pegawai ?></td>
                                            <td><?php echo $dp->nip ?></td>
                                            <!-- <td>
                                                <img width="80px" src="<?php echo base_url() . 'assets/images/foto/' . $dp->foto ?>">
                                            </td> -->
                                            <td><?php echo $dp->jabatan;?></td>
                                            <!-- <td><?php echo $dp->role;?></td> -->
                                        <td >
                                            <a class="btn btn-md btn-warning" href="<?php echo base_url('data_pegawai/detail/' . $dp->nip) ?>"><i class="ti ti-eye"></i></a>
                                            <a class="btn btn-md btn-success" href="<?php echo base_url('data_pegawai/edit/' . $dp->nip) ?>"><i class="ti ti-pencil"></i></a>
                                            <a id="hapuspegawai" class="btn btn-md btn-danger" href="<?php echo site_url('data_pegawai/hapus/' . $dp->nip) ?>"><i class="ti ti-trash"></i></a>
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
</table>


