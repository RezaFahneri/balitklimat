<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <a title="Kembali"
                                    class="btn btn-sm btn-success" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('mak') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>
                <br><br><h3 class="m-0 font-weight-bold text-primary">Edit Data MAK</h3><br>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <?php foreach ($data_mak as $m) { ?>
                <form method="POST" action="<?php echo base_url() ?>mak/update">
                <tr>
                  <td>
                    <input type="hidden" name="kode_mak" value="<?php echo $m->kode_mak ?>">
                  </td>
                </tr>    
                <div class="form-group">
                    <label><b>PAGU </label>
                    <input type="text" name="judul_mak" class="form-control" value="<?php echo $m->judul_mak?>" required>
                </div>
                <div class="form-group">
                    <label>Tahun </label>
                    <input type="text" pattern="[0-9]{4}" name="tahun" class="form-control" value="<?php echo $m->tahun?>" required>
                </div>
                <div class="form-group">
                    <label>Anggaran </label>
                    <input type="number" name="banyak_anggaran" pattern="[0-9]" class="form-control" value="<?php echo $m->banyak_anggaran?>" required>
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