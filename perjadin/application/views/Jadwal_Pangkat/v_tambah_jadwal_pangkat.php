<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Tambah Jadwal Kenaikan Pangkat</h3><br>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <form method="POST" action="<?php echo base_url('jadwal_kp/tambah_aksi') ?>">
                    <div class="form-group">
                        <label><b>Kode Kenaikan Pangkat</b></label>
                        <input readonly type="text" name="kode_kp" value="<?php echo $jadwal_kp;?>" class="form-control" required>
                        <?php echo form_error('kode_kp', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label><b>Nama Pegawai</b></label>
                        <input type="text" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" class="form-control" required>
                        <?php echo form_error('nama_pegawai', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                        <label><b>NIP</b></label>
                        <input type="text" name="nip" id="nip" placeholder="NIP" class="form-control" required>
                        <?php echo form_error('nip', '<div class="text-small text-danger"></div>') ?>
                    </div>
                </div>

                    </div>
                    <button type="submit" class="btn btn-success"><a onclick="return confirm('Data Pegawai berhasil ditambahkan!')">Submit</a></button>&nbsp &nbsp
                    <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
                </form>
            </div>
        </div>                   
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        $('#nama_pegawai').autocomplete({
            source: "<?php echo site_url('jadwal_kp/get_autocomplete');?>",
    
            select: function (event, ui) {
                $('[name="nama_pegawai"]').val(ui.item.label); 
                $('[name="nip"]').val(ui.item.description); 
            }
        });

    });
</script>