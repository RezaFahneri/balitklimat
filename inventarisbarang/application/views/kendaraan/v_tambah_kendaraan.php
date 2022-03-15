<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <a title="Kembali" class="btn btn-sm btn-success" style="border-radius:90px; color:white;margin-bottom:15px;" href="<?php echo site_url('kendaraan') ?>"><i class="ti ti-arrow-left" style="border-radius:8px;"></i></a>
                        <h3 class="m-0 font-weight-bold">Tambah Data Kendaraan</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('kendaraan/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <label>No Polisi </label>
                                        <input type="text" name="no_polisi" class="form-control" required>
                                        <?php echo form_error('no_polisi', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Merk </label>
                                        <input type="text" name="merk" class="form-control" required>
                                        <?php echo form_error('merk', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kendaraan </label>
                                        <select name="jenis" id="kondisi_barang" class="form-control" required>
                                            <option value="">--Pilih Jenis Kendaraan--</option>
                                            <option value="Roda 2">Roda 2</option>
                                            <option value="Roda 3">Roda 3</option>
                                            <option value="Roda 4">Roda 4</option>
                                        </select>
                                        <?php echo form_error('jenis', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="status" class="form-control" value="1" readonly>
                                        <?php echo form_error('status', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</></button>&nbsp &nbsp
                                    <a class="btn btn-secondary" href="<?php echo base_url(); ?>kendaraan" style="color: #ffffff;">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>