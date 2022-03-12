<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <a title="Kembali"
                                    class="btn btn-sm btn-success" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('perjalanan_dinas') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>
                        <br><br><h3 class="m-0 font-weight-bold text-primary">Tambah Anggota Perjalanan Dinas</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <?php foreach ($data_perjalanan_dinas as $dpd) { ?>
                                    <form method="POST" action="<?php echo base_url() ?>anggota_perjadin/tambah_aksi">
                                        <!-- <div style="border: 3px solid #e7e7e7; width:430px;height:205px">
                                            <div style="margin-top:5px; margin-left:15px" class="form-group">
                                                <label><b>No. Surat Tugas : <?php //echo $dpd->no_surat_tugas 
                                                                            ?></b></label>
                                            </div>
                                            <div style="margin-left:15px" class="form-group">
                                                <label><b>Berangkat Dari : <?php //echo $dpd->kota . ', ' . $dpd->nama_provinsi 
                                                                            ?></b></label></br>
                                            </div>
                                            <div style="margin-left:15px" class="form-group">
                                                <label><b>Tujuan : <?php //echo $dpd->kota_tujuan . ', ' . $dpd->provinsi_tujuan 
                                                                    ?></b></label></br>
                                            </div>
                                            <div style="margin-left:15px" class="form-group">
                                                <label><b>Tanggal Pelaksanaan : <?php //echo $dpd->tanggal_berangkat . ' s.d. ' . $dpd->tanggal_kembali . ' (' . $dpd->lama_perjalanan . ' hari)' 
                                                                                ?></b></label>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <input readonly type="hidden" name="id_perjalanan_dinas" class="form-control" value="<?php echo $dpd->id_perjalanan_dinas ?>" required>
                                            <input readonly type="hidden" name="kode_mak" class="form-control" value="<?php echo $dpd->kode_mak ?>" required>
                                            <input readonly type="hidden" name="kode_kegiatan" class="form-control" value="<?php echo $dpd->kode_kegiatan ?>" required>
                                            <input readonly type="hidden" name="status_perjalanan_dinas" class="form-control" value="Belum Berangkat" required>
                                            <label><b>Nama</b></label></br>
                                            <select title="Pilih pegawai yang akan ditambahkan kedalam perjalanan dinas" name="nip_anggota_perjadin" id="nip_anggota_perjadin" class="form-control" required>
                                                <option value="">--Pilih Pegawai--</option>
                                                <?php foreach ($nip as $row) { ?>
                                                    <option value="<?php echo $row->nip; ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>';
                                                    }
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label><b>No. SPPD</b></label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div style="width:130px;color:dimgray" class="input-group-text">/SPPD/I.8.3/</div>
                                            </div>
                                            <input type="hidden" name="kode_sppd" value="/SPPD/I.8.3/" class="form-control">
                                            <input type="text" name="no_sppd" placeholder="mm/yyyy" class="form-control" required>
                                            <?php echo form_error('no_sppd', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <label><b>No. Surat Tugas</b></label>
                                            <input readonly type="text" value="<?php echo $dpd->no_surat_tugas ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Berangkat Dari</b></label>
                                            <input readonly type="text" value="<?php echo $dpd->kota . ', ' . $dpd->nama_provinsi ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Tujuan</b></label>
                                            <input readonly type="text" value="<?php echo $dpd->kota_tujuan . ', ' . $dpd->provinsi_tujuan ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Tanggal Pelaksanaan</b></label>
                                            <input readonly type="text" value="<?php echo $dpd->tanggal_berangkat . ' s.d. ' . $dpd->tanggal_kembali . ' (' . $dpd->lama_perjalanan . ' hari)' ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Uang Harian</b></label>
                                            <input readonly type="number" name="uang_harian" <?php if ($dpd->kota == $dpd->kota_tujuan) {
                                                                                            ?> value="<?php echo $dpd->dalam_kota_tujuan * $dpd->lama_perjalanan ?>" <?php
                                                                                                                                                                    } else {
                                                                                                                                                                        ?>value="<?php echo $dpd->luar_kota_tujuan * $dpd->lama_perjalanan ?>" <?php
                                                                                                                                                                                                                                            } ?> class="form-control" required>
                                            <?php echo form_error('tahun', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Uang Transportasi</b></label>
                                            <input title="Masukkan total biaya transportasi" type="number" pattern="[0-9]" name="uang_transportasi" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Uang Penginapan</b></label>
                                            <div class="input-group mb-2">
                                                <input type="number" min="0" placeholder="--Masukkan jumlah hari pernginapan di hotel 1--" name="hari1" class="form-control">
                                                <input type="number" pattern="[0-9]" name="biaya1" placeholder="--Masukkan biaya permalam hotel 1--" class="form-control">
                                            </div>
                                            <div class="input-group mb-2">
                                                <input type="number" min="0" placeholder="--Masukkan jumlah hari pernginapan di hotel 2--" name="hari2" class="form-control">
                                                <input type="number" pattern="[0-9]" name="biaya2" placeholder="--Masukkan biaya permalam hotel 2--" class="form-control">
                                            </div>
                                            <div class="input-group mb-2">
                                                <input type="number" min="0" placeholder="--Masukkan jumlah hari pernginapan di hotel 3--" name="hari3" class="form-control">
                                                <input type="number" pattern="[0-9]" name="biaya3" placeholder="--Masukkan biaya permalam hotel 3--" class="form-control">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success mr-2">Submit</a></button>&nbsp &nbsp
                                        <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
                                    </form>
                                <?php } ?>
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