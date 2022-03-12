<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Edit Data Status Kepegawaian</h3><br>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <?php foreach ($status_kepegawaian as $sp) { ?>
                <form method="POST" action="<?php echo base_url() ?>status_kepegawaian/update">
                <tr>
                  <td>
                    <input type="hidden" name="id_status_peg" value="<?php echo $sp->id_status_peg ?>">
                  </td>
                </tr>    
                <div class="form-group">
                    <label>Status Kepegawaian </label>
                    <input type="text" name="status_kepegawaian" class="form-control" value="<?php echo $sp->status_kepegawaian?>" name="status_kepegawaian" required>
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