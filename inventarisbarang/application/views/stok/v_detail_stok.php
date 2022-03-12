<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Detail Data Barang</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <table class="table table-no-bordered">
                                            <tr>
                                                <td><b>Gambar</b></td>
                                                <td>
                                                    <img style="width: 200px" src="<?php echo base_url() . 'assets/images/upload/' . $detail->gambar ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Nama Barang</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->nama_barang ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Jenis Barang</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->jenis_barang ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Jumlah Barang</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->jumlah_barang ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Satuan Barang</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->satuan_barang ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Kondisi Barang</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->kondisi_barang ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Kondisi Barang</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->kondisi_barang ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a style="color:#ffffff" class="btn btn-secondary" href="<?php echo base_url(); ?>stok_barang">
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