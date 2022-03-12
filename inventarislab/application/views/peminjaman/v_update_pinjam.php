<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Edit Peminjaman Alat</h3><br>
                        <div class="flash-data" id="flash5" data-flash="<?= $this->session->flashdata('gagal');?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <form method="POST" action="<?php echo base_url('pinjam_alat/update'); ?>" enctype="multipart/form-data"></br>
                                            <div class="form-group">
                                                <input type="hidden" name="id_pinjam" class="form-control" value="<?php echo $edit->id_pinjam ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Alat </label>
                                                <input type="text" name="namaalat" class="form-control" value="<?php echo $edit->namaalat ?>" readonly>
                                                <?php echo form_error('namaalat', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Peminjam </label>
                                                <input type="text" name="peminjam" class="form-control" value="<?php echo $edit->peminjam ?>" readonly required>
                                                <?php echo form_error('peminjam', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Pinjam</label>
                                                <input type="text" name="tglpinjam" class="form-control" value="<?php echo $edit->tglpinjam ?>" readonly required>
                                                <?php echo form_error('tglpinjam', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Selesai</label>
                                                <input type="text" name="tglselesai" class="form-control" value="<?php echo $edit->tglselesai ?>" readonly required>
                                                <?php echo form_error('tgl_elesai', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah </label>
                                                <input type="text" name="qty" class="form-control" value="<?php echo $edit->qty ?>" readonly required>
                                                <?php echo form_error('qty', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Kegiatan </label>
                                                <input type="text" name="kegiatan" class="form-control" value="<?php echo $edit->kegiatan ?>" readonly required>
                                                <?php echo form_error('kegiatan', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Lokasi </label>
                                                <input type="text" name="lokasi" class="form-control" value="<?php echo $edit->lokasi ?>" readonly required>
                                                <?php echo form_error('lokasi', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan </label>
                                                <input type="text" name="keterangan" class="form-control" value="<?php echo $edit->keterangan ?>">
                                                <?php echo form_error('keterangan', '<div class="text-small text-danger"></div>') ?>
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