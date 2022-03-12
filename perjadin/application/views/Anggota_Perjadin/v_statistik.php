<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data Statistik Perjalanan Dinas Pegawai</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-3 ">
                                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%; height:100%">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th title="Nama" style="width:3%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Nama</label></th>
                                                        <th title="NIP" style="width:3%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">NIP</label></th>
                                                        <th title="Pangkat" style="width:3%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Pangkat</label></th>
                                                        <th title="Golongan" style="width:3%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Golongan</label></th>
                                                        <th title="Jumlah Perjalanan" style="width:3%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Jumlah Perjalanan</label></th>
                                                        <th title="Total Hari" style="width:3%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Total Hari</label></th>
                                                        <th title="Estimasi Pendapatan" style="width:3%"><label style="width:100%;height:100%;margin-top:10px" type="button" class="btn-xs"><label style="margin-top:10px;color:gray">Estimasi Pendapatan</label></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($data_anggota_perjadin as $j) {
                                                    ?>

                                                        <tr>
                                                            <td style="font-size: 12px;heigth:40px"><label style="margin-top:5px"><?php echo $j->nama_anggota_perjadin ?></label></td>
                                                            <td style="font-size: 12px;"><?php echo $j->nip_anggota_perjadin ?></td>
                                                            <td style="font-size: 12px;"><?php echo $j->pangkat_anggota ?></td>
                                                            <td style="font-size: 12px;"><?php echo $j->golongan_anggota ?></td>
                                                            <td style="font-size: 12px;"><?php echo
                                                                                            $this->db->select('*')->from('data_anggota_perjadin')->where('nip_anggota_perjadin =', $j->nip_anggota_perjadin)->get()->num_rows(); ?>
                                                            </td>
                                                            <td style="font-size: 12px;"><?php echo
                                                                                            $this->db->select_sum('lama_perjalanan')->from('data_anggota_perjadin')
                                                                                                ->where('nip_anggota_perjadin =', $j->nip_anggota_perjadin)
                                                                                                ->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas')
                                                                                                ->get()->row()->lama_perjalanan; ?>
                                                            </td>
                                                            <td style="font-size: 12px;"><?php echo 'Rp' . number_format($this->db->select_sum('total_pendapatan')->from('data_anggota_perjadin')
                                                                                                ->where('nip_anggota_perjadin =', $j->nip_anggota_perjadin)->get()->row()->total_pendapatan, 0, ',', '.') ?>
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