<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold mb-10">Data Pegawai</h3>
                <?= $this->session->flashdata('message'); ?>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered tabel-hover text-wrap" id="peg_pes" cellspacing="0" style="width:100%; table-layout:fixed">
                            <thead class="table-light">
                                <tr style="text-align: center;">
                                    <th width="2%">No.</th>
                                    <th width="18%">NIP</th>
                                    <th width="23%">Nama Pegawai</th>
                                    <th width="8%">Divisi</th>
                                    <th width="8%">Jabatan</th>
                                    <th width="5%">Brlsg</th>
                                    <th width="5%">Slsi</th>
                                    <th width="5%">Total</th>
                                    <th width="5%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($detail as $pm) {
                                ?>
                                    <?php
                                    $peserta = $this->db->select('*')->from('peserta_magang')->where('pembimbing_balai', $pm->nip)->get()->result();
                                    $peserta2 = $this->db->select('*')->from('peserta_magang')->where('pembimbing_balai', $pm->nip)->where('status_pm', 'berlangsung')->get()->result();
                                    $peserta3 = $this->db->select('*')->from('peserta_magang')->where('pembimbing_balai', $pm->nip)->where('status_pm', 'selesai')->get()->result(); {
                                    ?>
                                        <?php
                                        if ($peserta) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $pm->nip ?></td>
                                                <td><?= $pm->nama_pegawai ?></td>
                                                <td><?= $pm->divisi ?></td>
                                                <td><?= $pm->jabatan ?></td>
                                                <td style="text-align: center;"><?= count($peserta2) ?></td>
                                                <td style="text-align: center;"><?= count($peserta3) ?></td>
                                                <td style="text-align: center;"><?= count($peserta) ?></td>
                                                <td><a title="Lihat detail pegawai" class="btn btn-sm btn-info" href=" <?= base_url('admin/pegawai/detail/' . $pm->nip) ?>"><i class="ti ti-eye"></i></a></td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
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