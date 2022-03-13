<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">
                            <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                    class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('role_penugasan') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>&nbsp Tambah Tim Penugasan</h3><br>
                            <div class="flash-data" id="flash2"
                                data-flash="<?= $this->session->flashdata('sukses'); ?>">
                            </div>
                            <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>">
                            </div>
                            <div class="col-md-12 grid-margin">
                                <div class="card-body">
                                    <?php foreach ($data_tugas as $tp) { ?>
                                    <form method="POST"
                                        action="<?php echo base_url() ?>role_penugasan/tambah_tim_penugasan_aksi">
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id_tugas"
                                                    value="<?php echo $tp->id_tugas ?>">
                                            </td>
                                        </tr>
                                        <div class="form-group">
                                            <label>Penugasan </label>
                                            <input readonly type="text" name="penugasan" class="form-control"
                                                value="<?php echo $tp->penugasan?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tim Penugasan<i style="color:red">*</label>
                                            <select name="nip[]" id="nip" class="js-example-basic-single w-100"
                                                multiple="multiple">
                                                <option value="" disabled>-- Pilih Anggota Penugasan --</option>
                                                <?php foreach($nip as $row){?>
                                                <option value="<?php echo $row->nip;?>">
                                                    <?php echo $row->nama_pegawai ;?>
                                                </option>';
                                                }
                                                <?php }?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success mr-2">Simpan</a></button>&nbsp
                                        &nbsp
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
</div>
</div>
<script>
$('#nip').select2();
</script>