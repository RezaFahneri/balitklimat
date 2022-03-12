<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <a title="Kembali"
                                    class="btn btn-sm btn-success" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('jenis_keg') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>
                <br><br><h3 class="m-0 font-weight-bold text-primary">Edit Data Jenis Kegiatan</h3><br>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <?php foreach ($data_jenis_keg as $p) { ?>
                <form method="POST" action="<?php echo base_url() ?>jenis_keg/update">
                <tr>
                  <td>
                    <input type="hidden" name="id_jenis_keg" value="<?php echo $p->id_jenis_keg ?>">
                  </td>
                </tr>    
                <div class="form-group">
                    <label><b>Jenis Kegiatan </label>
                    <input type="text" name="jenis_keg" class="form-control" value="<?php echo $p->jenis_keg?>" name="jenis_keg" required>
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