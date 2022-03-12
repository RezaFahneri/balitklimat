<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <a title="Kembali"
                                    class="btn btn-sm btn-success" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('mak') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>
                <br><br><h3 class="m-0 font-weight-bold text-primary">Tambah MAK</h3><br>
                <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <form method="POST" action="<?php echo base_url('mak/tambah_aksi') ?>">
                    <div class="form-group">
                        <label><b>Kode MAK </label>
                        <input type="text" name="kode_mak" class="form-control" required>
                        <?php echo form_error('kode_mak', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label>PAGU </label>
                        <input type="text" name="judul_mak" class="form-control" required>
                        <?php echo form_error('judul_mak', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Tahun </label>
                        <input type="text" pattern="[0-9]{4}"  type="text" name="tahun" class="form-control" required>
                        <?php echo form_error('tahun', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Anggaran </label>
                        <input type="number" pattern="[0-9]" name="banyak_anggaran" class="form-control" required>
                        <?php echo form_error('banyak_anggaran', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>&nbsp &nbsp
                    <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
                </form>
            </div>
        </div>                   
</div>
</div>
</div>
</div>
</div>