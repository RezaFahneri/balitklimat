<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold text-primary">Selamat datang, <?php echo $this->db->where('email', $this->session->userdata('email'))->get('data_pegawai')->row('nama_pegawai'); ?></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Total perjalanan dinas:</p><br>
                <p class="fs-30 mb-2"style="font-size:25px">
                  <?php echo
                  $this->db->select('*')->from('data_perjalanan_dinas')->get()->num_rows();
                  ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Total pegawai yang sedang dalam perjalanan dinas: </p>
                <p class="fs-30 mb-2"style="font-size:25px"><?php echo
                                      $this->db->select('*')->from('data_anggota_perjadin')->where('status_perjalanan_dinas =', 'Sedang Berlangsung')->get()->num_rows();
                                      ?></p>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">Total pengeluaran:</p><br>
                <p class="fs-30 mb-2" style="font-size:25px"><?php 
                                       $biaya= $this->db->select_sum('biaya_pengeluaran')->from('data_kegiatan')
                                        ->get()->row()->biaya_pengeluaran; 
                                        echo 'Rp' . number_format($biaya, 0, ',', '.') ?>
                                        </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Total sisa anggaran:</p><br>
                <p class="fs-30 mb-2"style="font-size:25px"><?php 
                                       $anggaran= $this->db->select_sum('banyak_anggaran')->from('data_mak')
                                        ->get()->row()->banyak_anggaran; 
                                        echo 'Rp' . number_format($anggaran, 0, ',', '.') ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">Data sisa anggaran keuangan</p><br>
            <div class="table-responsive">
              <table class="table table-striped table-borderless" style="width:100%">
                <thead>
                  <tr>
                    <th>PAGU</th>
                    <th>Tahun</th>
                    <th>Anggaran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($data_mak as $dm) {
                  ?>
                    <tr>
                       <td style="font-size: 12px;"><?php echo $dm->judul_mak ?></td>
                       <td style="font-size: 12px;"><?php echo $dm->tahun ?></td>
                       <td style="font-size: 12px;"><?php echo 'Rp' . number_format($dm->banyak_anggaran, 0, ',', '.') ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">Data pengeluaran kegiatan</p><br>
            <div class="table-responsive">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th class="pl-0  pb-2 border-bottom">Judul Kegiatan</th>
                    <th class="border-bottom pb-2">Tahun</th>
                    <th class="border-bottom pb-2">Pengeluaran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($data_kegiatan as $dk) {
                  ?>
                    <tr>
                      <td style="font-size: 12px;" class="pl-0"><?php echo $dk->judul_kegiatan ?></td>
                       <td style="font-size: 12px;"><?php echo $dk->tahun ?></td>
                       <td style="font-size: 12px;"><?php echo 'Rp' . number_format($dk->biaya_pengeluaran, 0, ',', '.') ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">Pegawai yang sedang dalam perjalanan dinas</p><br>
            <div class="table-responsive">
              <table class="table table-striped table-borderless" style="width:100%">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Kota Tujuan</th>
                    <th>Dalam Rangka</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($data_anggota_perjadin as $dap) {
                  ?>
                    <tr>
                       <td style="font-size: 12px;"><?php echo $dap->nama_anggota_perjadin ?></td>
                       <td style="font-size: 12px;"><?php echo $dap->kota . ', ' . $dap->nama_provinsi ?></td>
                       <td style="font-size: 12px;"><?php echo $dap->dalam_rangka ?></td>
                      <td class="font-weight-medium">
                        <div class="badge badge-success"><?php echo $dap->status_perjalanan_dinas ?></div>
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
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->