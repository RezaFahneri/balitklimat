<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Edit Jadwal Kenaikan Pangkat</h3><br>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <?php foreach ($update_jadwalkp as $up) { ?>
                <form method="POST" action="<?php echo base_url() ?>jadwal_kp/update">
                <tr>
                  <td>
                  <div class="form-group">
                        <input readonly type="hidden" name="kode_kp" value="<?php echo $up->kode_kp;?>" class="form-control" required>
                        <?php echo form_error('kode_kp', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                    <label for ="nip"><b>Nama Pegawai</b></label></br>
                    <?php $nip1 = $up->nip ?> 
                        <select name="nip" id="nip" class="form-control" disabled="true" required>
                            <option value=""></option>
                            <?php foreach($nip as $row){?>
                                <option <?php if($nip1==$row->nip){echo 'selected="selected"';} ?> value = "<?php echo $row->nip;?>"><?php echo $row->nip. " | ".$row->nama_pegawai ;?></option>';
                            }
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b>Golongan Sekarang</b></label>
                        <input type="text" name="golongan" id="golongan" value="<?php echo $up->golongan;?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                    <?php $id_golongan1 = $up->id_golongan_berikutnya ?> 
                        <label><b>Golongan Berikutnya</b></label></br>
                        <select style="color:dimgray" name="id_golongan_berikutnya" id="id_golongan_berikutnya" class="form-control" required>
                            <option value="">--Pilih Golongan--</option>
                            <?php foreach($id_golongan as $row){?>
                                <option <?php if($id_golongan1==$row->id_golongan){echo 'selected="selected"';} ?>  value = "<?php echo $row->id_golongan;?>"><?php echo $row->golongan;?></option>';
                            }
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b>Pangkat Sekarang</b></label>
                        <input type="text" name="pangkat" id="pangkat" value="<?php echo $up->pangkat;?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label><b>Pangkat Berikutnya</b></label></br>
                        <?php $id_pangkat1 = $up->id_pangkat_berikutnya ?> 
                        <select style="color:dimgray" name="id_pangkat_berikutnya" id="id_pangkat_berikutnya" class="form-control" required>
                            <option value="">--Pilih Pangkat--</option>
                            <?php foreach($id_pangkat as $row){?>
                                <option <?php if($id_pangkat1==$row->id_pangkat){echo 'selected="selected"';} ?> value = "<?php echo $row->id_pangkat ; ?>"><?php echo $row->pangkat; ?></option>';
                            }
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b>TMT 1</b></label>
                        <input type="date" name="tmt_pangkat_1" id="tmt_pangkat_1" value="<?php echo $up->tmt_pangkat_1;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>TMT 2</b></label>
                        <input type="date" name="tmt_pangkat_2" id="tmt_pangkat_2" value="<?php echo $up->tmt_pangkat_2;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>TMT 3</b></label>
                        <input type="date" name="tmt_pangkat_3" id="tmt_pangkat_3" value="<?php echo $up->tmt_pangkat_3;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>TMT 4</b></label>
                        <input type="date" name="tmt_pangkat_4" id="tmt_pangkat_4" value="<?php echo $up->tmt_pangkat_4;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>TMT 5</b></label>
                        <input type="date" name="tmt_pangkat_5" id="tmt_pangkat_5" value="<?php echo $up->tmt_pangkat_5;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Jadwal Kenaikan Pangkat</b></label>
                        <input type="date" name="jadwal_kp" id="jadwal_kp" value="<?php echo $up->jadwal_kp;?>" placeholder="Jadwal Kenaikan Pangkat" class="form-control" required>
                        <?php echo form_error('jadwal_kp', '<div class="text-small text-danger"></div>') ?>
                    </div>
                  </td>
                </tr>    
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
</div>
</div>                   
</div><script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('#nip').select2({
        placeholder: "Pilih Pegawai",
        theme: "bootstrap-5",
        // $('#nip select [nip=nama_pegawai]').up(nip.nama_pegawai);
    });
    $('#id_golongan_berikutnya').select2({
        allowClear: true,
        placeholder: "---Pilih Golongan---",
        theme: "bootstrap-5",
    });
    $('#id_pangkat_berikutnya').select2({
        allowClear: true,
        placeholder: "---Pilih Pangkat---",
        theme: "bootstrap-5",
    });
</script>
</div>