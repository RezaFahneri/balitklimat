<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Biodata</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow p-5 md-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="text-center">
                                            <img src="<?php echo base_url() ?>assets/images/foto/<?php echo 
$this->db->where('email', $this->session->userdata('email'))->where('role', $this->session->userdata('role'))->get('detail_role')->row('foto') ?>"
                                                alt="" class="img-thumbnail" style="height: 210px; width:200px">
                                        </div><br>

                                        <div class="col-lg-12 col-md-12 col-xs-9">
                                            <table class="table table-no-bordered">
                                                <tr>
                                                    <th>Nomor Induk Pegawai</th>
                                                    <td><?php echo $detail_role['nip'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Pegawai</th>
                                                    <td><?php echo $detail_role['nama_pegawai'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>NIK</th>
                                                    <td><?php echo $detail_role['nik'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Role</th>
                                                    <td><?php echo $detail_role['role'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Jabatan</th>
                                                    <td><?php echo $detail_role['jabatan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Divisi</th>
                                                    <td><?php echo $detail_role['divisi'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Golongan</th>
                                                    <td><?php echo ($detail_role['golongan']) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Pangkat</th>
                                                    <td><?php echo ($detail_role['pangkat']) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td><?php echo $detail_role['email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Nomor whatsapp</th>
                                                    <td><?php echo ($detail_role['no_whatsapp']) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                    <td></td>
                                                    </th>
                                                </tr>
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