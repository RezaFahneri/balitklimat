<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold mb-10">Data Pegawai</h3>
                <?= $this->session->flashdata('message'); ?>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered tabel-hover text-wrap" id="adm_peg" cellspacing="0" style="width:100%; table-layout:fixed">
                            <thead class="table-light">
                                <tr style="text-align: center;">
                                    <th width="2%">No.</th>
                                    <th width="18%">NIP</th>
                                    <th width="23%">Nama Pegawai</th>
                                    <th width="8%">Divisi</th>
                                    <th width="8%">Jabatan</th>
                                    <th width="5%">Brtmu</th>
                                    <th width="5%">Tdk Brtmu</th>
                                    <th width="5%">Total</th>
                                    <th width="5%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($detail as $pm) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $pm->nip ?></td>
                                        <td><?= $pm->nama_pegawai ?></td>
                                        <td><?= $pm->divisi ?></td>
                                        <td><?= $pm->jabatan ?></td>
                                        <?php
                                        $peserta = $this->db->select('*')->from('buku_tamu')->where('pegawai_nip', $pm->nip)->get()->result();
                                        $peserta2 = $this->db->select('*')->from('buku_tamu')->where('pegawai_nip', $pm->nip)->where('jenis', 'Tidak Bertemu')->get()->result();
                                        $peserta3 = $this->db->select('*')->from('buku_tamu')->where('pegawai_nip', $pm->nip)->where('jenis', 'Bertemu')->get()->result(); {
                                        ?>
                                            <?php
                                            if ($peserta) { ?>
                                                <td style="text-align: center;"><?= count($peserta3) ?></td>
                                                <td style="text-align: center;"><?= count($peserta2) ?></td>
                                                <td style="text-align: center;"><?= count($peserta) ?></td>
                                                <td><a title="Lihat detail pegawai" class="btn btn-sm btn-info" href=" <?= base_url('admin/data_pegawai/detail/' . $pm->nip) ?>"><i class="ti ti-eye"></i></a></td>
                                            <?php } else { ?>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">0</td>
                                                <td><a title="Lihat detail pegawai" class="btn btn-sm btn-info" href=" <?= base_url('admin/data_pegawai/detail/' . $pm->nip) ?>"><i class="ti ti-eye"></i></a></td>
                                            <?php } ?>
                                        <?php } ?>
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