<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Tambah Data Alat</h3><br>
                        <div class="flash-data" id="flash5" data-flash="<?= $this->session->flashdata('gagal');?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <form method="post" action="<?php echo base_url('stok_alat/tambah_aksi') ?>" enctype="multipart/form-data"></br>
                                            <div class="form-group">
                                                <label>Gambar </label>
                                                <input type="file" name="image" id="image" class="form-control">
                                                <?php echo form_error('image', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Alat </label>
                                                <input type="text" name="namaalat" class="form-control" required>
                                                <?php echo form_error('namaalat', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Kelengkapan </label>
                                                <input type="text" name="deskripsi" class="form-control" required>
                                                <?php echo form_error('deskripsi', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Alat</label>
                                                <input type="number" name="stock" class="form-control" required>
                                                <?php echo form_error('stock', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Kondisi Alat</label>
                                                <select name="kondisi" id="kondisi" class="form-control" required>
                                                    <option value="">--Pilih Kondisi Barang--</option>
                                                    <option value="Baik">Baik</option>
                                                    <option value="Kurang Baik">Kurang Baik</option>
                                                </select>
                                                <?php echo form_error('kondisi', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <input type="submit" class="btn btn-success" name="submit" value="Simpan">&nbsp &nbsp
                                            <a class="btn btn-light" href="<?php echo base_url(); ?>stok_alat">Cancel</a>
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
</div>
</div>