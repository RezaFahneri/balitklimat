<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <a href="<?php echo base_url() ?>suratmasuk" class="btn btn-sm btn-warning float-right"><i class="ti ti-arrow-left"></i> Kembali ke Surat Masuk</a>
                <h3 class="m-0 font-weight-bold">Tambah Disposisi</h3><br>
                <div class="col-md-12 grid-margin">
                    <div class="card-body">
                    <?php echo form_open_multipart('riwayatdisposisi/tambah_aksi');?>
                    <div class="col-12 grid-margin">
                    <div class="card">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $suratmasuk['id_suratmasuk']; ?>">
                    </div>
                        <div class="card-body">
                        <h4 class="card-title">Surat Masuk</h4><br>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Sifat Surat</label>
                                <div class="col-sm-9">
                                    <select id="sifatsurat_id" name="sifatsurat_id" class="form-control" disabled required>
                                        <option value="" selected disabled>--Pilih Sifat Surat--</option>
                                        <?php foreach ($sifatsurat as $ss) : ?>
                                            <option <?php echo $suratmasuk['sifatsurat_id'] == $ss['id_sifatsurat'] ? 'selected' : '';?> <?php echo set_select('sifatsurat_id', $ss['id_sifatsurat']) ?> value="<?php echo $ss['id_sifatsurat'] ?>"><?php echo $ss['sifat_surat']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                </div>
                                <?php echo form_error('sifat_surat', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode/Indeks</label>
                                    <div class="col-sm-9">
                                        <input type='numeric' id="kode" name="kode" value="<?php echo set_value('kode', $suratmasuk['kode']); ?>" class="form-control" readonly required/>
                                    </div>
                                    </div>
                                    <?php echo form_error('kode', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Surat</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" value="<?php echo set_value('tanggal_surat', $suratmasuk['tanggal_surat']); ?>" readonly required/>
                                    </div>
                                    </div>
                                    <?php echo form_error('tanggal_surat', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Input</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="tanggal_input" name="tanggal_input" value="<?php echo set_value('tanggal_input', $suratmasuk['tanggal_input']); ?>" readonly required/>
                                    </div>
                                    </div>
                                    <?php echo form_error('tanggal_input', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Surat</label>
                                    <div class="col-sm-9">
                                        <input type="numeric" class="form-control" id="no_surat" name="no_surat" value="<?php echo set_value('no_surat', $suratmasuk['no_surat']); ?>" readonly required/>
                                    </div>
                                    </div>
                                    <?php echo form_error('no_surat', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Urut</label>
                                    <div class="col-sm-9">
                                        <input type="numeric" class="form-control" id="no_urut" name="no_urut" value="<?php echo set_value('no_urut', $suratmasuk['no_urut']); ?>" readonly required/>
                                    </div>
                                    </div>
                                    <?php echo form_error('no_urut', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Asal Surat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="asal_surat" name="asal_surat" value="<?php echo set_value('asal_surat', $suratmasuk['asal_surat']); ?>" readonly required/>
                                    </div>
                                    </div>
                                    <?php echo form_error('asal_surat', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">File Surat</label>
                                    <div class="col-sm-9">
                                        <a class="btn btn-rd btn-outline-primary btn-icon-text" href="<?php echo base_url() ?>assets/file/suratmasuk/<?php echo $suratmasuk['dokumen'] ?>"><i class="ti ti-download"></i><?php echo $suratmasuk['dokumen'] ?></a>
                                    </div>
                                    </div>
                                    <?php echo form_error('dokumen', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Perihal/Isi Surat</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="perihal" name="perihal" rows="4" readonly required><?php echo set_value('perihal', $suratmasuk['perihal']); ?></textarea>
                                </div>
                                </div> <br>
                                <h4 class="card-title">Tambah Disposisi</h4>
                                <div class="form-group row">
                                <label class="col-sm-3">Diteruskan Kepada Yth <span style="color: red;"> *</span></label></div>
                                    <div class="col-md-4 mb-3">
                                        <div><label class="col-form-label" style="margin-top: -25px;">I. STRUKTURAL</label>
                                        <div class="form-check ">
                                            <label class="form-check-label"> 
                                            <input type="checkbox" id="kepada" name="kepada[]" value="Kepala Sub Bagian Tata Usaha" class="form-check-input">
                                            1. Kepala Sub Bagian Tata Usaha
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <label class="form-check-label"> 
                                            <input type="checkbox" id="kepada" name="kepada[]" value="Subkoordinator Pelayanan Teknis" class="form-check-input">
                                            2. Subkoordinator Pelayanan Teknis
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <label class="form-check-label"> 
                                            <input type="checkbox" id="kepada" name="kepada[]" value="Subkoordinator Jasa Penelitian" class="form-check-input">
                                            3. Subkoordinator Jasa Penelitian
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    <div>
                                    <div class="col-md-4 mb-3">
                                    <div><label class="col-form-label">II. PENGELOLA KEUANGAN DLL</label></div>
                                    <div class="form-check ">
                                        <label class="form-check-label"> 
                                        <input type="checkbox" id="kepada" name="kepada[]" value="Pejabat Pembuat Komitmen" class="form-check-input">
                                        1. Pejabat Pembuat Komitmen
                                        </label>
                                    </div>
                                    <div class="form-check ">
                                        <label class="form-check-label"> 
                                        <input type="checkbox" id="kepada" name="kepada[]" value="Bendahara Pengeluaran" class="form-check-input">
                                        2. Bendahara Pengeluaran
                                        </label>
                                    </div>
                                    <div class="form-check ">
                                        <label class="form-check-label"> 
                                        <input type="checkbox" id="kepada" name="kepada[]" value="Bendahara Penerimaan" class="form-check-input">
                                        3. Bendahara Penerimaan
                                        </label>
                                    </div>
                                    <div><label class="col-form-label">III. LAIN-LAIN</label></div>
                                    <div class="form-check ">
                                        <label class="form-check-label"> 
                                        <input type="checkbox" class="form-check-input">
                                        1. 
                                        </label>
                                    </div>
                                    <div class="form-check ">
                                        <label class="form-check-label"> 
                                        <input type="checkbox" class="form-check-input">
                                        2. 
                                        </label>
                                    </div>
                                    <div class="form-check ">
                                        <label class="form-check-label"> 
                                        <input type="checkbox" class="form-check-input">
                                        3. 
                                        </label>
                                    </div>
                                </div>
                                </div>
                                <div>
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Isi Disposisi <span style="color: red;"> *</span></label>
                                <div class="col-sm-12">
                                        <select id="isi" name="isi" class="form-control" required>
                                            <option value="" selected disabled>--Pilih Isi Disposisi--</option>
                                            <option>Harap Penyelesaian Selanjutnya</option>
                                            <option>Minta Saran/Pendapat/Komentar</option>
                                            <option>Untuk Diketahui/Digunakan Seperlunya</option>
                                            <option>Harap Mewakili Saya</option>
                                            <option>Untuk Dibicarakan Khusus</option>
                                        </select>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Catatan</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="catatan" name="catatan" rows="4"></textarea>
                                </div>
                                </div>
                                
                                <button type="submit" class="btn btn-success">Simpan</a></button>&nbsp; &nbsp;
                                <!-- <a href="</?php echo base_url() ?>suratmasuk" class="btn btn-warning" >Kembali</a> -->
                        </div>
                    </div>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>   