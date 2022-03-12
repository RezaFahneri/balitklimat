<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <div class="table-responsive">
                    <h3 class="m-0 font-weight-bold text-primary">Jadwal Kenaikan Pangkat</h3><br>
                    <div class="col-md-4 grid-margin">
                    <a href="<?php echo base_url() ?>jadwal_kp/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah Jadwal Kenaikan Pangkat</a></div>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow mb-12">
                            <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <div class="table-responsive pt-8 ">
                                <table id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" width='50px'>
                                    <!-- <table  id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'> -->
                                    <thead  style='height:auto' class="thead-light">
                                        <tr>
                                        <th width='30%'>No</th>
                                        <th class="th-sm">NIP</th>
                                        <th class="th-sm">Nama Pegawai</th>
                                        <th class="th-sm">Pangkat Sekarang</th>
                                        <th class="th-sm">Golongan Sekarang</th>
                                        <th class="th-sm">TMT</th>
                                        <th class="th-sm">Pangkat Berikutnya</th>
                                        <th class="th-sm">Golongan Berikutnya</th>
                                        <th class="th-sm">Jadwal Kenaikan</th>
                                        <!-- <th>Role</th> -->
                                        <th class="th-sm">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- <?php
                                        $no = 1;
                                        foreach ($jadwal_kp as  $kp) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo  $kp->nama_pegawai ?></td>
                                            <td><?php echo  $kp->nip ?></td>
                                            <td><?php echo  $kp->nama_pegawai ?></td>
                                            <td><?php echo  $kp->pangkat_sekarang ?></td>
                                            <td><?php echo  $kp->golongan_sekarang ?></td>
                                            <td><?php echo  $kp->tmt ?></td>
                                            <td><?php echo  $kp->pangkat_berikutnya ?></td>
                                            <td><?php echo  $kp->golongan_berikutnya ?></td>
                                            <td><?php echo  $kp->jadwal_kp ?></td>
                                            <td>
                                                <img width="80px" src="<?php echo base_url() . '../asn/assets/images/foto/' .  $kp->foto ?>">
                                            </td>
                                            <td><?php echo  $kp->jabatan;?></td>
                                            <!-- <td><?php echo  $kp->role;?></td> -->
                                        <td >
                                            <a class="btn btn-md btn-warning" href="<?php echo base_url(' jadwal_kp/detail/' .  $kp->nip) ?>"><i class="ti ti-info-circle"></i></a>
                                            <a class="btn btn-md btn-success" href="<?php echo base_url(' jadwal_kp/edit/' .  $kp->nip) ?>"><i class="ti ti-pencil"></i></a>
                                            <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-md btn-danger" href="<?php echo site_url(' jadwal_kp/hapus/' .  $kp->nip) ?>"><i class="ti ti-trash"></i></a>
                                        </td>
                                        </tr>
                                        <?php } ?> -->
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


