<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Edit Data Pangkat</h3><br>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <?php foreach ($data_pangkat as $p) { ?>
                <form method="POST" action="<?php echo base_url() ?>pangkat/update">
                <tr>
                  <td>
                    <input type="hidden" name="id_pangkat" value="<?php echo $p->id_pangkat ?>">
                  </td>
                </tr>    
                <div class="form-group">
                    <label>Pangkat </label>
                    <input type="text" name="pangkat" class="form-control" value="<?php echo $p->pangkat?>" name="pangkat" required>
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