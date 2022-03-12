<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary">Detail Pegawai</h3><br>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow p-5 md-12">
                            <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                            <div class="text-center">
                                <img src="<?php echo base_url() ?>assets/images/foto/<?php echo $detail->foto ?>" alt="" class="img-thumbnail" style="height: 210px; width:200px">
                            </div><br>
                            <div class="col-lg-12 col-md-12 col-xs-9">
                            <table class="table table-no-bordered">
                                <tr>
                                    <th>Nama Pegawai</th>
                                    <td><?php echo $detail->nama_pegawai?></td>
                                </tr>
                                <tr>
                                    <th>NIP</th>
                                    <td><?php echo $detail->nip?></td>
                                </tr>
                                <tr>
                                    <th>Golongan</th>
                                    <td><?php echo $detail->golongan?></td>
                                </tr>
                                <tr>
                                    <th>Status Kepegawaian</th>
                                    <td><?php echo $detail->status_kepegawaian?></td>
                                </tr>
                                <tr>
                                    <th>Pangkat</th>
                                    <td><?php echo $detail->pangkat?></td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td><?php echo $detail->jabatan?></td>
                                </tr>
                                <!-- <tr>
                                    <th>Role</th>
                                    <td><?php echo $detail->role?></td>
                                </tr> -->
                                <tr>
                                    <th>NIK</th>
                                    <td><?php echo $detail->nik?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $detail->email?></td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td><?php echo $detail->password?></td>
                                </tr>
                                <tr>
                                    <th>Nomor Whatsapp</th>
                                    <td><?php echo $detail->no_whatsapp?></td>
                                </tr>
                            </table>
                            <a href="<?php echo base_url() ?>data_pegawai" class="btn btn-warning float-right" >Kembali</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
            </div>
    </div>                   
</div>
</div>