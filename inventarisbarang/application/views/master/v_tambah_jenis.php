<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <a title="Kembali" class="btn btn-sm btn-success" style="border-radius:90px; color:white;margin-bottom:15px;" href="<?php echo site_url('jenis_barang') ?>"><i class="ti ti-arrow-left" style="border-radius:8px;"></i></a>
                        <h3 class="m-0 font-weight-bold">Tambah Jenis Barang</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('jenis_barang/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <label>Jenis Barang </label>
                                        <input type="text" name="jenis_barang" class="form-control" required>
                                        <?php echo form_error('jenis_barang', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</></button>&nbsp &nbsp
                                    <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
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