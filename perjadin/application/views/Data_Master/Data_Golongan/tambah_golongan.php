<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Tambah Data Golongan</h3><br>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <form method="POST" action="<?php echo base_url('golongan/tambah_aksi') ?>">
                    <div class="form-group">
                        <label>Golongan</label>
                        <input type="text" name="golongan" class="form-control" required>
                        <?php echo form_error('golongan', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <button type="submit" class="btn btn-success"><a onclick="return confirm('Data Golongan berhasil ditambahkan!')">Submit</a></button>&nbsp &nbsp
                    <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
                </form>
            </div>
        </div>                   
</div>
</div>