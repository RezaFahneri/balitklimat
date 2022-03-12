<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold">Tambah Surat Masuk</h3><br>
                <div class="col-md-12 grid-margin">
                    <div class="card-body">
                    <?php echo form_open_multipart('suratmasuk/simpan');?>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $detail->id_suratmasuk; ?>">
                    </div>
                    <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Surat Masuk</h4><br>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Sifat Surat</label>
                                <div class="col-sm-9">
                                    <select id="sifatsurat_id" name="sifatsurat_id" class="form-control" required>
                                        <option value="" selected disabled>--Pilih Sifat Surat--</optiion>
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
                                    <input type="text" id="kode" name="kode" value="<?php echo set_value('kode', $suratmasuk['kode']); ?>" class="form-control" required/>
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
                                    <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" value="<?php echo set_value('tanggal_surat', $suratmasuk['tanggal_surat']); ?>" required/>
                                </div>
                                </div>
                                <?php echo form_error('tanggal_surat', '<div class="text-small text-danger"></div>') ?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tanggal Input</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="tanggal_input" name="tanggal_input" value="<?php echo set_value('tanggal_input', $suratmasuk['tanggal_input']); ?>" required/>
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
                                    <input type="numeric" class="form-control" id="no_surat" name="no_surat" value="<?php echo set_value('no_surat', $suratmasuk['no_surat']); ?>" required/>
                                </div>
                                </div>
                                <?php echo form_error('no_surat', '<div class="text-small text-danger"></div>') ?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Urut</label>
                                <div class="col-sm-9">
                                    <input type="numeric" class="form-control" id="no_urut" name="no_urut" value="<?php echo set_value('no_urut', $suratmasuk['no_urut']); ?>" required/>
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
                                    <input type="text" class="form-control" id="asal_surat" name="asal_surat" value="<?php echo set_value('asal_surat', $suratmasuk['asal_surat']); ?>" required/>
                                </div>
                                </div>
                                <?php echo form_error('asal_surat', '<div class="text-small text-danger"></div>') ?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">File Surat</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="dokumen" name="dokumen" value="<?php echo set_value('dokumen', $suratmasuk['dokumen']); ?>"/>
                                </div>
                                </div>
                                <?php echo form_error('dokumen', '<div class="text-small text-danger"></div>') ?>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Perihal/Isi Surat</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="perihal" name="perihal" rows="4" required><?php echo $suratmasuk['perihal']; ?></textarea>
                            </div>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</a></button>&nbsp &nbsp
                            <a href="<?php echo base_url() ?>suratmasuk" class="btn btn-warning" >Kembali</a>
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