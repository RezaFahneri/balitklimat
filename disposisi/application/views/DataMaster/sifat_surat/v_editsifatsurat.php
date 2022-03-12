<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Edit Data Sifat Surat Barang</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <?php foreach ($sifat_surat as $ss) { ?>
                                    <form method="POST" action="<?php echo base_url() ?>sifatsurat/update">
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id" value="<?php echo $ss->id_sifatsurat?>">
                                            </td>
                                        </tr>
                                        <div class="form-group">
                                            <label>Sifat Surat</label>
                                            <input type="text" name="sifat_surat" class="form-control" value="<?php echo $ss->sifat_surat ?>" name="sifat_surat" required>
                                        </div>
                                        <button type="submit" class="btn btn-success">Simpan</a></button>&nbsp &nbsp
                                        <a href="<?php echo base_url() ?>sifatsurat" class="btn btn-warning" >Kembali</a>
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