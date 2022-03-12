<body>
  <nav class="navbar navbar-light bg-light">
    <div>
      <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/'); ?>images/logo.png" alt="logo" width="40" height="40">
      </a>
    </div>
    <div>
      <a class="navbar-brand" href="<?= base_url(); ?>masuk">
        <img src=" <?= base_url('assets/'); ?>images/icons/login-box-line.svg" alt="login" width="20" height="20" href="<?= base_url('masuk'); ?>">
      </a>
    </div>
  </nav>
  <img src="<?= base_url('assets/'); ?>images/balitklimats.jpg" class="img-responsive" alt="Balitklimat" width="100%" height="30%">

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 mx-0">
        <div class="col-lg-12 mx-auto">
          <div class="auth-form-light text-left py-2 px-4 px-sm-4 mt-5">
            <h3 class="font-weight-bold">Buku Tamu Harian Balai Penelitian Agroklimat dan Hidrologi</h3>
            <!-- <h6 class="font-weight-light">Isi biodata di bawah ini untuk mendaftarkan diri!</h6> -->
            <br>
            <?= $this->session->flashdata('message'); ?>
            <?= form_open_multipart('buku_tamu', 'class="row g-3"'); ?>
            <!-- <div class="form-group col-md-12">
              <a class="btn btn-inverse-{light} float-right ml-1">Keperluan</a>
              <a class="btn btn-inverse-{light}  float-right">Alasan</a>
            </div> -->
            <div class="form-group col-12">
              <label>
                <h6 class="font-weight-bold">Jenis Tamu<i style="color:red">*</i></h6>
              </label>
              <select class="js-example-basic-single w-100" id="jenis" name="jenis" value="<?= set_value('jenis'); ?>">
                <option value="" selected disabled> --Pilih Jenis-- </option>
                <option value="Bertemu">Bertemu</option>
                <option value="Tidak Bertemu">Tidak Bertemu</option>
              </select>
              <?= form_error('jenis', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-6">
              <label>
                <h6 class="font-weight-bold">Tanggal<i style="color:red">*</i></h6>
              </label>
              <input type="date" class="form-control form-control-user" id="tgl" name="tgl" value="<?= set_value('tgl'); ?>">
              <?= form_error('tgl', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-6">
              <label>
                <h6 class="font-weight-bold">Waktu<i style="color:red">*</i></h6>
              </label>
              <input type="time" class="form-control form-control-user" id="waktu" name="waktu" value="<?= set_value('waktu'); ?>">
              <?= form_error('waktu', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-12">
              <label class="form-label">
                <h6 class="font-weight-bold">Nama Lengkap<i style="color:red">*</i></h6>
              </label>
              <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= set_value('nama'); ?>">
              <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-12">
              <label>
                <h6 class="font-weight-bold">Asal Instansi<i style="color:red">*</i></h6>
              </label>
              <input type="text" class="form-control form-control-user" id="asalinstansi" name="asalinstansi" value="<?= set_value('asalinstansi'); ?>">
              <?= form_error('asalinstansi', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-6">
              <label>
                <h6 class="font-weight-bold">Email</h6>
              </label>
              <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>">
              <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-6">
              <label>
                <h6 class="font-weight-bold">Nomor Whatsapp</h6>
              </label>
              <input type="int" class="form-control form-control-user" id="nowa" name="nowa" value="<?= set_value('nowa'); ?>">
              <?= form_error('nowa', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-12">
              <label>
                <h6 class="font-weight-bold">Divisi<i style="color:red">*</i></h6>
              </label>
              <select class="js-example-basic-single w-100" id="id_divisi" name="id_divisi" value="<?= set_value('divisi'); ?>">
                <option value="" selected disabled> --Pilih Jenis-- </option>
                <?php foreach ($divisi as $div) { ?>
                  <option value="<?= $div->id_divisi; ?>"><?= $div->divisi; ?></option>';
                <?php } ?>
                <option value="<?= $kepalabalai->nip; ?>">Plt. Kepala Balai | <?= $kepalabalai->nama_pegawai; ?></option>';
              </select>
              <?= form_error('divisi', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-12">
              <label class="form-label">
                <h6 class="font-weight-bold">Pegawai</h6>
              </label>
              <select class="js-example-basic-single w-100" id="peg" name="peg">
                <option value="" selected disabled> --Pilih Pegawai--</option>
                <?php foreach ($pegawai as $peg) { ?>
                  <option value="<?= $peg->nip; ?>"><?= $peg->divisi; ?> | <?= $peg->nama_pegawai; ?></option>';
                <?php } ?>
              </select>
              <?= form_error('peg', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-12">
              <label>
                <h6 class="font-weight-bold">Keperluan<i style="color:red">*</i></h6>
              </label>
              <input type="text" class="form-control form-control-user" id="kep" name="kep" value="<?= set_value('kep'); ?>">
              <?= form_error('kep', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-12" name="alasan" id="alasan" hidden>
              <label>
                <h6 class="font-weight-bold">Alasan<i style="color:red">*</i></h6>
              </label>
              <input type="text" class="form-control form-control-user" id="als" name="als" value="<?= set_value('als'); ?>">
              <?= form_error('als', '<small class="text-danger">', '</small>'); ?>
            </div>
            <!-- <div class="form-group col-12">
              <label class="form-label">
                <h6 class="font-weight-bold">Keperluan<i style="color:red">*</i></h6>
              </label>
              <select class="js-example-basic-single w-100" id="kep" name="kep">
                <option value="" selected disabled> --Pilih Keperluan--</option>
                <?php foreach ($keperluan as $kep) { ?>
                  <option value="<?= $kep->id_keperluan; ?>"><?= $kep->nama_keperluan; ?></option>';
                <?php } ?>
              </select>
              <?= form_error('kep', '<small class="text-danger">', '</small>'); ?>
            </div> -->
            <!-- <div class="form-group col-12" name="alasan" id="alasan">
              <label class="form-label">
                <h6 class="font-weight-bold">Alasan<i style="color:red">*</i></h6>
              </label>
              <select class="js-example-basic-single w-100" id="als" name="als">
                <option value="" selected disabled> --Pilih Alasan--</option>
                <?php foreach ($alasan as $als) { ?>
                  <option value="<?= $als->id_alasan; ?>"><?= $als->nama_alasan; ?></option>';
                <?php } ?>
              </select>
              <?= form_error('als', '<small class="text-danger">', '</small>'); ?>
            </div> -->
            <div class="form-group col-12">
              <label class="form-label">
                <h6 class="font-weight-bold">Keterangan</h6>
              </label>
              <textarea class="form-control" id="ket" name="ket" rows="8"><?= set_value('ket'); ?></textarea>
              <?php echo form_error('ket', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="mt-3 col-12">
              <button onclick="return confirm('Apakah anda yakin menyimpan data?')" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Simpan</button>
            </div>
            </form>
          </div>
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
  <script src="<?= base_url('assets/'); ?>vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('assets/'); ?>js/off-canvas.js"></script>
  <script src="<?= base_url('assets/'); ?>js/select2.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
  <script src="<?= base_url('assets/'); ?>js/hoverable-collapse.js"></script>
  <script src="<?= base_url('assets/'); ?>js/template.js"></script>
  <script src="<?= base_url('assets/'); ?>js/settings.js"></script>
  <script src="<?= base_url('assets/'); ?>js/todolist.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#jenis').on('change', function() {
        var jns = $(this).val();
        if (jns == 'Bertemu') {
          $('#alasan').prop('hidden', true);
        } else {
          $('#alasan').prop('hidden', false);
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#id_divisi').change(function() {
        var id_divisi = $('#id_divisi').val();
        // var country_id = $('#country').val();
        if (id_divisi != '') {
          // $('#yaya').prop('hidden', false);
          $.ajax({
            url: "<?php echo base_url(); ?>buku_tamu/pegawai",
            method: "POST",
            data: {
              id_divisi: id_divisi
            },
            success: function(data) {
              $('#peg').html(data);
              // $('#city').html('<option value="">Select City</option>');
            }
          });
        } else {
          // $('#yaya').prop('hidden', true);
          $('#peg').html('<option value="">-- Pilih Pegawai --</option>');
          // $('#city').html('<option value="">Select City</option>');
        }
      });
    });
  </script>

  <!-- endinject -->
</body>

</html>