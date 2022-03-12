<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Profil</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash4" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow p-5 md-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() ?>profil/update_foto">
                                            <div class="image-upload text-center">
                                                <label for="file-input">
                                                    <img id="foto" style="position:absolute; z-index:2;border-radius:50%; height: 210px; width:200px" src="<?php echo base_url() ?>assets/images/foto/<?php echo $this->db->where('email', $this->session->userdata('email'))->get('data_pegawai')->row('foto') ?>" class="img-thumbnail" alt="profile">
                                                    <img class="img-thumbnail" id="kamera" style="position:absolute;z-index:4;width:50px;height:50px; margin-left:140px;margin-top:155px" src="<?php echo base_url() ?>assets/images/kamera.png">
                                                    <button class="text-center" title="Simpan perubahan edit profile" style="position:absolute;z-index:3;margin-left:140px;margin-top:155px" type="submit" id="but"><img class="text-center" style="width:35px;height:42px" src="<?php echo base_url() ?>assets/images/ceklis.png"></button>
                                                    <input type="hidden" name="nip" class="form-control" value="<?php echo $update_foto['nip'] ?>" required>
                                                    <img class="img-thumbnail" id="foto_update" style="z-index:1; border-radius:50%; height: 210px; width:200px">
                                                </label>
                                                <input id="file-input" type="file" name="foto" onchange="loadFile(event)">
                                            </div>
                                            <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
                                        </form><br>

                                        <div class="col-lg-12 col-md-12 col-xs-9">
                                            <table class="table table-no-bordered">
                                                <tr>
                                                    <th>Nama Pegawai</th>
                                                    <td><?php echo $data_pegawai['nama_pegawai'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Jabatan</th>
                                                    <td><?php echo $data_pegawai['jabatan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Divisi</th>
                                                    <td><?php echo $data_pegawai['divisi'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Golongan</th>
                                                    <td><?php echo ($data_pegawai['golongan']) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Pangkat</th>
                                                    <td><?php echo ($data_pegawai['pangkat']) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td><?php echo $data_pegawai['email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                    <td></td>
                                                    </th>
                                                </tr>
                                            </table>
                                            <div class="col-md-9 grid-margin">
                                                <a href="<?php echo base_url() ?>profil/edit?nip=<?php echo $data_pegawai['nip'] ?>" class="btn btn-success btn-md"><i class="ti ti-pencil"></i>Ubah Password</a>
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