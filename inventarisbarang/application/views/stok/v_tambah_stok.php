<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <a style="font-size:40px; color:#000000" href="<?php echo base_url() ?>stok_barang"><i class="mdi mdi-keyboard-backspace"></i></a>
                        <h3 class="m-0 font-weight-bold">Tambah Data Barang</h3><br>
                        <div class="flash-data" id="flash5" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <form method="post" action="<?php echo base_url('stok_barang/tambah_aksi') ?>" enctype="multipart/form-data"></br>
                                            <div class="form-group">
                                                <label>Gambar </label>
                                                <input type="file" name="gambar" id="gambar" class="form-control">
                                                <?php echo form_error('gambar', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode </label>
                                                <input type="text" name="kode" class="form-control" required>
                                                <?php echo form_error('kode', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Barang </label>
                                                <input type="text" name="nama_barang" class="form-control" required>
                                                <?php echo form_error('nama_barang', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Barang </label></br>
                                                <select name="jenis_barang" id="jenis_barang" class="form-control" required>
                                                    <option value="">--pilih Jenis Barang--</option>
                                                    <?php foreach ($jenis_barang as $row) { ?>
                                                        <option value="<?php echo $row->jenis_barang; ?>"><?php echo $row->jenis_barang; ?></option>';
                                                        }
                                                    <?php } ?>
                                                    <!-- <option value="Kamera">Kamera</option>
                                                    <option value="Sepeda Motor">Sepeda Motor</option>
                                                    <option value="Proyektor">Proyektor</option> -->
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Satuan Barang</label>
                                                <select name="satuan_barang" id="satuan_barang" class="form-control">
                                                    <option value="">--Pilih Satuan Barang--</option>
                                                    <?php foreach ($satuan_barang as $row) { ?>
                                                        <option value="<?php echo $row->satuan_barang; ?>"><?php echo $row->satuan_barang; ?></option>';
                                                        }
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Barang</label>
                                                <input type="text" name="jumlah_barang" class="form-control" required>
                                                <?php echo form_error('jumlah_barang', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Kondisi Barang</label>
                                                <select name="kondisi_barang" id="kondisi_barang" class="form-control" required>
                                                    <option value="">--Pilih Kondisi Barang--</option>
                                                    <option value="Baik">Baik</option>
                                                    <option value="Rusak">Rusak</option>
                                                    <option value="Diperbaiki">Diperbaiki</option>
                                                </select>
                                                <?php echo form_error('kondisi_barang', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label>Keterangan </label>
                                                <input type="text" name="keterangan" class="form-control">
                                                <?php echo form_error('keterangan', '<div class="text-small text-danger"></div>') ?>
                                            </div> -->
                                            <input type="submit" class="btn btn-success" name="submit" value="Simpan">&nbsp &nbsp
                                            <a class="btn btn-light" href="<?php echo base_url(); ?>stok_barang">Batal</a>
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