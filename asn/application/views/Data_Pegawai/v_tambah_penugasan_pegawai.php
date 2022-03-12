<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Tambah Data Penugasan Pegawai</h3><br>
                        <div class="col-md-12 grid-margin">
                            <?php echo validation_errors()?>
                            <!-- <?php //echo form_open($action)?> -->
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data"
                                    action="<?php echo base_url('data_pegawai/tambah_penugasan') ?>">
                                    <div class="form-group">
                                        <label><b>NIP</b></label>
                                        <input type="text" name="nip" placeholder="Nomor Induk Pegawai"
                                            autocomplete="off" class="form-control" required>
                                        <?php echo form_error('nip', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Tugas Tambahan</b></label>
                                        <select name="id_tugas[]" id="id_tugas" class="form-control" multiple>
                                            <!-- <option value=""></option> -->
                                            <?php foreach($id_tugas as $row){?>
                                            <option value="<?php echo $row->id_tugas;?>"><?php echo $row->penugasan;?>
                                            </option>';
                                            }
                                            <?php }?>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-success">Submit</a></button>&nbsp &nbsp
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
</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$('#id_tugas').select2();
</script>
</script>