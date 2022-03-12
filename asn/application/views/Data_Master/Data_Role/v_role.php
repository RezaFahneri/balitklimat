<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary">Data Role</h3><br>
                    <div class="col-md-4 grid-margin">
                    <a href="<?php echo base_url() ?>role/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah role</a></div>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow mb-12">
                            <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <!-- <div class="card-body"> -->
                                <div class="table-responsive pt-3 table-sm">
                                    <table class="table">
                                    <thead  class="thead-light">
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Role</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        foreach ($data_role as $r) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $r->role ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="<?php echo base_url('/role/edit/' . $r->id_role) ?>"><i class="mdi mdi-lead-pencil"></i></a>
                                            <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo site_url('/role/hapus/' . $r->id_role) ?>"><i class="mdi mdi-delete"></i></a>
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