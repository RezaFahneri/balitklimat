<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <a title="Kembali"
                                    class="btn btn-sm btn-success" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('header_surat') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>
                <br><br><h3 class="m-0 font-weight-bold text-primary">Edit Data Status Kepegawaian</h3><br>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <?php foreach ($header_surat as $sp) { ?>
                <form method="POST" action="<?php echo base_url() ?>header_surat/update">
                <tr>
                  <td>
                    <input type="hidden" name="id_header_surat" value="<?php echo $sp->id_header_surat ?>">
                  </td>
                </tr>    
                <div class="form-group">
                    <label><b>Nama Kementerian </label>
                    <input type="text" name="nama_kementerian" class="form-control" value="<?php echo $sp->nama_kementerian?>" required>
                </div>
                <div class="form-group">
                    <label>Eslon Satu </label>
                    <input type="text" name="eslon_satu" class="form-control" value="<?php echo $sp->eslon_satu?>"  required>
                </div>
                <div class="form-group">
                    <label>Eslon Dua </label>
                    <input type="text" name="eslon_dua" class="form-control" value="<?php echo $sp->eslon_dua?>" required>
                </div>
                <div class="form-group">
                    <label>Eslon Tiga </label>
                    <input type="text" name="eslon_tiga" class="form-control" value="<?php echo $sp->eslon_tiga?>" required>
                </div>
                <div class="form-group">
                    <label>alamat </label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $sp->alamat?>" required>
                </div>
                <button type="submit" class="btn btn-success mr-2">Submit</a></button>&nbsp &nbsp
                <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
            </form>
            <?php } ?>
        </div>
    </div>                   
</div>
</div>