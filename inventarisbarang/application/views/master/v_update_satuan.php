<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <a title="Kembali" class="btn btn-sm btn-success" style="border-radius:90px; color:white;margin-bottom:15px;" href="<?php echo site_url('satuan_barang') ?>"><i class="ti ti-arrow-left" style="border-radius:8px;"></i></a>
                        <h3 class="m-0 font-weight-bold">Edit Data Satuan Barang</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <?php foreach ($satuan_barang as $p) { ?>
                                    <form method="POST" action="<?php echo base_url() ?>satuan_barang/update">
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id_satuan" value="<?php echo $p->id_satuan ?>">
                                            </td>
                                        </tr>
                                        <div class="form-group">
                                            <label>Satuan Barang</label>
                                            <input type="text" name="satuan_barang" class="form-control" value="<?php echo $p->satuan_barang ?>" name="satuan_barang" required>
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