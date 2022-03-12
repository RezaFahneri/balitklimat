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
                        <br><br><h3 class="m-0 font-weight-bold text-primary">Update Anggota Perjalanan Dinas</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <?php foreach ($update_anggota_perjadin as $apd) { ?>
                                    <form method="POST" action="<?php echo base_url() ?>anggota_perjadin/update">
                                        <div class="form-group">
                                            <input readonly type="hidden" name="id_anggota_perjadin" class="form-control" value="<?php echo $apd->id_anggota_perjadin ?>" required>
                                            <input readonly type="hidden" name="id_perjalanan_dinas" class="form-control" value="<?php echo $apd->id_perjalanan_dinas ?>" required>
                                            <input readonly type="hidden" name="kode_mak" class="form-control" value="<?php echo $apd->kode_mak ?>" required>
                                            <input readonly type="hidden" name="kode_kegiatan" class="form-control" value="<?php echo $apd->kode_kegiatan ?>" required>
                                            <input readonly type="hidden" name="total_pendapatan_lama" class="form-control" value="<?php echo $apd->total_pendapatan ?>" required>
                                            <label><b>Nama</b></label></br>
                                            <?php $nap = $apd->nip_anggota_perjadin ?>
                                            <select title="Pilih pegawai yang akan ditambahkan kedalam perjalanan dinas" name="nip_anggota_perjadin" id="nip_anggota_perjadin" class="form-control" required>
                                                <option value="">--Pilih Pegawai--</option>
                                                <?php foreach ($nip as $row) : ?>
                                                    <option <?php if ($nap == $row->nip) {
                                                                echo 'selected="selected"';
                                                            } ?> value="<?php echo $row->nip ?>"><?php echo $row->nip . " | " . $row->nama_pegawai; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><b>No. SPPD</b></label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div style="width:130px;color:dimgray" class="input-group-text">/SPPD/I.8.3/</div>
                                                </div>
                                                <input type="hidden" name="kode_sppd" value="/SPPD/I.8.3/" class="form-control">
                                                <input type="text" name="no_sppd" <?php $no = $apd->no_sppd2;
                                                                                            $no_sppd_fix   = substr($no, 12,); ?> value="<?php echo $no_sppd_fix ?>" placeholder="mm/yyyy" class="form-control" required>
                                                <?php echo form_error('no_surat_tugas', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><b>No. Surat Tugas</b></label>
                                            <input readonly type="text" value="<?php echo $apd->no_surat_tugas ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Berangkat Dari</b></label>
                                            <input readonly type="text" value="<?php echo $apd->kota . ', ' . $apd->nama_provinsi ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Tujuan</b></label>
                                            <input readonly type="text" value="<?php echo $apd->kota_tujuan . ', ' . $apd->provinsi_tujuan ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Tanggal Pelaksanaan</b></label>
                                            <input readonly type="text" value="<?php echo $apd->tanggal_berangkat . ' s.d. ' . $apd->tanggal_kembali . ' (' . $apd->lama_perjalanan . ' hari)' ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Uang Harian</b></label>
                                            <input readonly type="number" name="uang_harian" <?php if ($apd->kota == $apd->kota_tujuan) {
                                                                                                ?> value="<?php echo $apd->dalam_kota_tujuan * $apd->lama_perjalanan ?>" <?php
                                                                                                                                                                    } else {
                                                                                                                                                                        ?>value="<?php echo $apd->luar_kota_tujuan * $apd->lama_perjalanan ?>" <?php
                                                                                                                                                                                                                                            } ?> class="form-control" required>
                                            <?php echo form_error('tahun', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Uang Transportasi</b></label>
                                            <input title="Masukkan total biaya transportasi" value="<?php echo $apd->uang_transportasi ?>" type="number" pattern="[0-9]" name="uang_transportasi" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Uang Penginapan</b></label>
                                            <div class="input-group mb-2">
                                                <input value="<?php echo $apd->hari1 ?>" type="number" min="0" placeholder="--Masukkan jumlah hari pernginapan di hotel 1--" name="hari1" class="form-control">
                                                <input value="<?php echo $apd->biaya1 ?>" type="number" pattern="[0-9]" name="biaya1" placeholder="--Masukkan biaya permalam hotel 1--" class="form-control">
                                            </div>
                                            <div class="input-group mb-2">
                                                <input value="<?php echo $apd->hari2 ?>" type="number" min="0" placeholder="--Masukkan jumlah hari pernginapan di hotel 2--" name="hari2" class="form-control">
                                                <input value="<?php echo $apd->biaya2 ?>" type="number" pattern="[0-9]" name="biaya2" placeholder="--Masukkan biaya permalam hotel 2--" class="form-control">
                                            </div>
                                            <div class="input-group mb-2">
                                                <input value="<?php echo $apd->hari3 ?>" type="number" min="0" placeholder="--Masukkan jumlah hari pernginapan di hotel 3--" name="hari3" class="form-control">
                                                <input value="<?php echo $apd->biaya3 ?>" type="number" pattern="[0-9]" name="biaya3" placeholder="--Masukkan biaya permalam hotel 3--" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Status Perjalanan Dinas</b></label></br>
                                            <?php $jp = $apd->status_perjalanan_dinas ?>
                                            <select class="form-control" name="status_perjalanan_dinas">
                                                <option value="">--Pilih Jenis Pengajuan--</option>
                                                <option <?php if ($jp == 'Belum Berangkat') {
                                                            echo 'selected="selected"';
                                                        } ?> value="Belum Berangkat">Belum Berangkat</option>
                                                <option <?php if ($jp == 'Sedang Berlangsung') {
                                                            echo 'selected="selected"';
                                                        } ?> value="Sedang Berlangsung">Sedang Berlangsung</option>
                                                <option <?php if ($jp == 'Selesai') {
                                                            echo 'selected="selected"';
                                                        } ?> value="Selesai">Selesai</option>
                                            </select>
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