<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Edit Data Divisi</h3><br>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <?php foreach ($data_divisi as $d) { ?>
                <form method="POST" action="<?php echo base_url() ?>divisi/update">
                <tr>
                  <td>
                    <input type="hidden" name="id_divisi" value="<?php echo $d->id_divisi ?>">
                  </td>
                </tr>    
                <div class="form-group">
                    <label>Divisi </label>
                    <input type="text" name="divisi" class="form-control" value="<?php echo $d->divisi?>" name="pangkat" required>
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
</div>
</div>