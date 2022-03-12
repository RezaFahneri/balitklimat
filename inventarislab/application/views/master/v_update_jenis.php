<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Edit Data Jenis Barang</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <?php foreach ($jenis_barang as $p) { ?>
                                    <form method="POST" action="<?php echo base_url() ?>jenis_barang/update">
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id_jenis" value="<?php echo $p->id_jenis ?>">
                                            </td>
                                        </tr>
                                        <div class="form-group">
                                            <label>Jenis Barang</label>
                                            <input type="text" name="jenis_barang" class="form-control" value="<?php echo $p->jenis_barang ?>" name="jenis_barang" required>
                                        </div>
                                        <button type="submit" class="btn btn-success mr-2">Simpan</a></button>&nbsp &nbsp
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