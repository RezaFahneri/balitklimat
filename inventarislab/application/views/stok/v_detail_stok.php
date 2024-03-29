<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <a title="Kembali" class="btn btn-sm btn-success" style="border-radius:90px; color:white;margin-bottom:15px;" href="<?php echo site_url('stok_alat') ?>"><i class="ti ti-arrow-left" style="border-radius:8px;"></i></a>
                        <h3 class="m-0 font-weight-bold">Detail Data Alat</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <table class="table table-no-bordered">
                                        <tr>
                                                <td><b>Gambar</b></td>
                                                <td>
                                                    <img style="width: 200px" src="<?php echo base_url() . 'assets/images/upload/' . $detail->image ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Nama Alat</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->namaalat ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Kelengkapan</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->deskripsi ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Kondisi</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->kondisi ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Jumlah</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->stock ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a style="color:#ffffff" class="btn btn-secondary" href="<?php echo base_url(); ?>stok_alat">
                                                       &nbsp;&nbsp;&nbsp;Kembali&nbsp;&nbsp;&nbsp;
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
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