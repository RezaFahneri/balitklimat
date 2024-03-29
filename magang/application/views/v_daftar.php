<body>
  <nav class="navbar navbar-light bg-light">
    <div>
      <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/'); ?>images/logo.png" alt="logo" width="40" height="40" title="Kembali ke portal">
      </a>
    </div>
    <div>
      <a href="<?= base_url(); ?>masuk" class="btn btn-sm float-left navbar-brand"><b>Masuk </b><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></i></a>
    </div>
  </nav>
  <img src="<?= base_url('assets/'); ?>images/balitklimats.jpg" class="img-responsive" alt="Balitklimat" width="100%" height="30%">

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-12 mx-auto">
            <ul class="nav nav-tabs">
              <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#daftar"><b>Daftar</b></a></li>
              <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#arsip"><b>Arsip Tugas Akhir</b></a> </li>
            </ul>
            <div class="tab-content auth-form-light">
              <div class="tab-pane active" id="daftar">
                <div class="auth-form-light text-left mx-3">
                  <h3 class="font-weight-bold">Daftar Peserta Magang</h3>
                  <h6 class="font-weight-light">Isi biodata di bawah ini untuk mendaftarkan diri!</h6>
                  <br>
                  <?= $this->session->flashdata('message'); ?>
                  <?= form_open_multipart('daftar', 'class="row g-3"'); ?>
                  <div class="form-group col-12">
                    <label class="form-label">
                      <h6 class="font-weight-bold">Nama Lengkap<i style="color:red">*</i></h6>
                    </label>
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <!-- <div class="form-group col-12">
                    <label class="form-label">
                      <h6 class="font-weight-bold">Jenis Kelamin<i style="color:red">*</i></h6>
                    </label>
                    <div class="form-check col-md-6">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" id="jkp" name="jk" value="Pria" checked> Pria
                      </label>
                    </div>
                    <div class="form-check col-md-6">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" id="jkw" name="jk" value="Wanita"> Wanita
                      </label>
                    </div>
                    <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
                  </div> -->
                  <div class="form-group col-md-6">
                    <label>
                      <h6 class="font-weight-bold">Email<i style="color:red">*</i></h6>
                      <h6 class="font-weight-light">Untuk aktivasi akun dan akses sistem | Menggunakan @gmail</h6>
                    </label>
                    <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>
                      <h6 class="font-weight-bold">Nomor Whatsapp<i style="color:red">*</i></h6>
                      <h6 class="font-weight-light">Contoh: 0857123456789 (Tanpa spasi, tanda hubung ('-'), tanda tambah ('+') dll)</h6>
                    </label>
                    <input type="int" class="form-control form-control-user" id="nowa" name="nowa" value="<?= set_value('nowa'); ?>">
                    <?= form_error('nowa', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-12">
                    <label>
                      <h6 class="font-weight-bold">Jenis Magang<i style="color:red">*</i></h6>
                    </label>
                    <select class="js-example-basic-single w-100" id="jenis" name="jenis" value="<?= set_value('jenis'); ?>">
                      <option value="" selected disabled> --Pilih Jenis-- </option>
                      <option value="Mahasiswa">Mahasiswa</option>
                      <option value="Siswa">Siswa</option>
                      <option value="Mandiri">Mandiri</option>
                    </select>
                    <?= form_error('jenis', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>
                      <h6 class="font-weight-bold">Asal Instansi/Universitas/Sekolah<i style="color:red">*</i></h6>
                    </label>
                    <input type="text" class="form-control form-control-user" id="asalinstansi" name="asalinstansi" value="<?= set_value('asalinstansi'); ?>">
                    <?= form_error('asalinstansi', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>
                      <h6 class="font-weight-bold">Jurusan<i style="color:red">*</i></h6>
                    </label>
                    <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan" value="<?= set_value('jurusan'); ?>">
                    <?= form_error('jurusan', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6" id="test" name="test" hidden="true">
                    <label>
                      <h6 class="font-weight-light" style="color: white;">.</h6>
                      <h6 class="font-weight-bold">Pembimbing Instansi/Universitas/Sekolah<i style="color:red">*</i></h6>
                    </label>
                    <input type="text" class="form-control form-control-user" id="pi" name="pi" value="<?= set_value('pi'); ?>">
                    <?= form_error('pi', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6" id="test1" name="test1" hidden="true">
                    <label>
                      <h6 class="font-weight-bold">Nomor Whatsapp Pembimbing Instansi/Universitas/Sekolah<i style="color:red">*</i></h6>
                      <h6 class="font-weight-light">Contoh: 0857123456789 (Tanpa spasi, tanda hubung ('-'), tanda tambah ('+') dll)</h6>
                    </label>
                    <input type="int" class="form-control form-control-user" id="nowapi" name="nowapi" value="<?= set_value('nowapi'); ?>">
                    <?= form_error('nowapi', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>
                      <h6 class="font-weight-bold">Tanggal Mulai<i style="color:red">*</i></h6>
                    </label>
                    <input type="date" class="form-control form-control-user" id="tglmli" name="tglmli" value="<?= set_value('tglmli'); ?>">
                    <?= form_error('tglmli', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>
                      <h6 class="font-weight-bold">Tanggal Selesai<i style="color:red">*</i></h6>
                    </label>
                    <input type="date" class="form-control form-control-user" id="tglsls" name="tglsls" value="<?= set_value('tglsls'); ?>">
                    <?= form_error('tglsls', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>
                      <h6 class="font-weight-bold">Surat Pengajuan<i style="color:red">*</i></h6>
                      <h6 class="font-weight-light">File dalam bentuk doc/docx/pdf | Maks 3Mb</h6>
                    </label>
                    <input type="file" class="form-control form-control-lg" id="pengajuan" name="pengajuan">
                    <?= form_error('pengajuan', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>
                      <h6 class="font-weight-bold">Surat Penerimaan<i style="color:red">*</i></h6>
                      <h6 class="font-weight-light">File dalam bentuk doc/docx/pdf | Maks 3Mb</h6>
                    </label>
                    <input type="file" class="form-control form-control-lg" id="penerimaan" name="penerimaan">
                    <?= form_error('penerimaan', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-12">
                    <label class="form-label">
                      <h6 class="font-weight-bold">Pembimbing Balitklimat<i style="color:red">*</i></h6>
                    </label>
                    <select class="js-example-basic-single w-100" id="pb" name="pb">
                      <option value="" selected disabled> --Pilih Pembimbing--</option>
                      <?php foreach ($pegawai as $peg) { ?>
                        <option value="<?= $peg->nip; ?>"><?= $peg->divisi; ?> | <?= $peg->nama_pegawai; ?></option>';
                      <?php } ?>
                    </select>
                    <?= form_error('pb', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>
                      <h6 class="font-weight-bold">Kata Sandi<i style="color:red">*</i></h6>
                    </label>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control form-control-user" id="ks1" name="ks1">
                      <!--<span class="input-group-text" id="basic-addon2">Show</span>-->
                      <div class="input-group-append">
                        <span id="mybutton" onclick="ks1()" class="input-group-text">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                          </svg>
                        </span>
                      </div>
                    </div>
                    <!--<input type="password" class="form-control form-control-user" id="ks1" name="ks1">-->
                    <?= form_error('ks1', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>
                      <h6 class="font-weight-bold">Ulangi Kata Sandi<i style="color:red">*</i></h6>
                    </label>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control form-control-user" id="ks2" name="ks2">
                      <div class="input-group-append">
                        <span id="mybutton" onclick="ks2()" class="input-group-text">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="mt-3 col-12">
                    <button onclick="return confirm('Apakah anda yakin untuk menyimpan data?')" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Daftar</button>
                  </div>
                  </form>
                </div>
              </div>
              <div class="tab-pane" id="arsip">
                <div class="auth-form-light text-left mx-3">
                  <h3 class="font-weight-bold">Arsip Laporan Akhir Magang Baliklimat</h3>
                  <!-- <h6 class="font-weight-light"></h6> -->
                  <br>
                  <div class="mt-3">
                    <div class="table-responsive">
                      <table class="table table-bordered tabel-hover text-wrap" id="pes_lapak" cellspacing="0">
                        <thead class="table-light">
                          <tr style="text-align: center;">
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Jenis Magang</th>
                            <th>Judul</th>
                            <th>Pembimbing</th>
                            <th>Dokumen</th>
                            <th class="no-sort">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1;
                          foreach ($detail as $d) {
                          ?>
                            <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $d->tgl_up_lapak ?></td>
                              <!-- <td><?= $d->nama_pm ?></td> -->
                              <td><?= $d->jns_magang ?></td>
                              <td><?= character_limiter($d->judul_lapak, 60) ?></td>
                              <td><?= character_limiter($d->nama_pegawai, 40); ?></td>
                              <td style="text-align: center;"><a title="<?= $d->dok_lapak ?>" class="" href="<?= base_url() ?>assets/dokumen/lap_ak/<?= $d->dok_lapak ?>" target="_blank">
                                  <i class="icon-file"></i>
                                </a></td>
                              <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail<?= $d->id_lapak ?>">
                                  <i class="ti ti-eye"></i>
                                </button>
                              </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="detail<?= $d->id_lapak ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle"><?= $d->jns_magang ?> | <?= $d->nama_pm ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <!-- <?= $d->id_lapak ?> -->
                                    <p style="font-size: 18pt; font-weight: bold"><?= $d->judul_lapak ?></p><br>
                                    <label><b>Abstrak</b></label> <br>
                                    <div class="com-text">
                                      <p style="text-align: justify;"><?= nl2br($d->abstrak_lapak); ?></p>
                                    </div> <br><br>
                                    <label><b>Dokumen Laporan Akhir</b></label> <br>
                                    <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/lap_ak/<?= $d->dok_lapak ?>" target="_blank">
                                      <i class="icon-file"></i><?= $d->dok_lapak ?>
                                    </a>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Kembali</button>
                                  </div>
                                </div>
                              </div>
                            </div>
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
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="<?= base_url('assets/'); ?>vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <!-- Plugin js for this page -->
      <script src="<?= base_url('assets/'); ?>vendors/typeahead.js/typeahead.bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
      <script src="<?= base_url('assets/'); ?>vendors/select2/select2.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="<?= base_url('assets/'); ?>js/off-canvas.js"></script>
      <script src="<?= base_url('assets/'); ?>js/hoverable-collapse.js"></script>
      <script src="<?= base_url('assets/'); ?>js/template.js"></script>
      <script src="<?= base_url('assets/'); ?>js/settings.js"></script>
      <script src="<?= base_url('assets/'); ?>js/todolist.js"></script>
      <script src="<?= base_url('assets/'); ?>js/select2.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script>
        function ks1() {
          var x = document.getElementById('ks1').type;
          if (x == 'password') {
            document.getElementById('ks1').type = 'text';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                        </svg>`;
          } else {
            document.getElementById('ks1').type = 'password';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                        </svg>`;
          }
        }
      </script>
      <script>
        function ks2() {
          var x = document.getElementById('ks2').type;
          if (x == 'password') {
            document.getElementById('ks2').type = 'text';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                        </svg>`;
          } else {
            document.getElementById('ks2').type = 'password';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                        </svg>`;
          }
        }
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#jenis').on('change', function() {
            var jns = $(this).val();
            if (jns == 'Mandiri') {
              $('#test').prop('hidden', true);
              $('#test1').prop('hidden', true);
            } else {
              $('#test').prop('hidden', false);
              $('#test1').prop('hidden', false);

            }
          });
        });
      </script>
      <script>
        $(document).ready(function() {
          $('#pes_lapak').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
              targets: 'no-sort',
              orderable: false
            }]
          });
        });
      </script>

      <!-- endinject -->
</body>

</html>