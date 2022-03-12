<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold">Edit Disposisi</h3><br>
                <div class="col-md-12 grid-margin">
                    <div class="card-body">
                    <?php echo form_open_multipart('riwayatdisposisi/simpan');?>
                    <div class="col-12 grid-margin">
                    <div class="card">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $detail->id_riwayat; ?>">
                    </div>
                        <div class="card-body">
                        <!-- <h4 class="card-title">Surat Masuk</h4><br> -->
                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Diteruskan Kepada Yth</label>
                                <div class="col-sm-12">
                                        <select id="nip" name="nip" class="form-control" required>
                                            <option value="" selected disabled>--Pilih Nama--</option>
                                            <?php foreach ($data_pegawai as $dp) : ?>
                                                <option <?php echo $riwayat_disposisi->nip == $dp['nip'] ? 'selected' : '';?> <?php echo set_select('nip', $dp['nip']) ?> value="<?php echo $dp['nip'] ?>"><?php echo $dp['nama_pegawai'] ?></option> 
                                            <?php endforeach; ?>
                                        </select>
                                </div>
                                </div>
                                <div>
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Isi Disposisi</label>
                                <div class="col-sm-12">
                                        <?php $isi = $detail->isi ?>
                                        <select id="isi" name="isi" class="form-control" required>
                                            <option value="" selected disabled>--Pilih Isi Disposisi--</option>
                                            <option <?php if($isi=='Harap Penyelesaian Selanjutnya'){echo 'selected="selected"';} ?> value="Harap Penyelesaian Selanjutnya" > Harap Penyelesaian Selanjutnya</option>
                                            <option <?php if($isi=='Minta Saran/Pendapat/Komentar'){echo 'selected="selected"';} ?> value="Minta Saran/Pendapat/Komentar" > Minta Saran/Pendapat/Komentar</option>
                                            <option <?php if($isi=='Untuk Diketahui/Digunakan Seperlunya'){echo 'selected="selected"';} ?> value="Untuk Diketahui/Digunakan Seperlunya" > Untuk Diketahui/Digunakan Seperlunya</option>
                                            <option <?php if($isi=='Harap Mewakili Saya'){echo 'selected="selected"';} ?> value="Harap Mewakili Saya" > Harap Mewakili Saya</option>
                                            <option <?php if($isi=='Untuk Dibicarakan Khusus'){echo 'selected="selected"';} ?> value="Untuk Dibicarakan Khusus" > Untuk Dibicarakan Khusus</option>
                                        </select>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Catatan</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="catatan" name="catatan" rows="4"><?php echo $riwayat_disposisi->catatan; ?></textarea>
                                </div>
                                </div>
                                
                                <button type="submit" class="btn btn-success">Simpan</a></button>&nbsp &nbsp
                                <a href="<?php echo base_url() ?>riwayatdisposisi" class="btn btn-warning" >Kembali</a>
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