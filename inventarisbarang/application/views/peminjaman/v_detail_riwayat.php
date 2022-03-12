<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Detail Riwayat Peminjaman Barang</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <table class="table table-no-bordered">
                                            <tr>
                                                <td><b>Nama Barang</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->nama_barang ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Peminjam</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->peminjam ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Tanggal Pinjam</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo tanggal_indonesia($detail->tglpinjam) ?>" disabled>
                                                </td>
                                            </tr>                                            
                                            <tr>
                                                <td><b>Tanggal Selesai</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo tanggal_indonesia($detail->tglselesai) ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Jumlah</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->qty ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Kegiatan</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->kegiatan ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Lokasi</b></td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" value="<?php echo $detail->lokasi ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Status</b></td>
                                                <td colspan="2">
                                                    <?php if ($detail->status_riwayat == '3') { ?>
                                                        <input type="text" class="form-control" value="<?php echo "Selesai" ?>" disabled>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a style="color:#ffffff" class="btn btn-secondary" href="<?php echo base_url(); ?>riwayat_peminjaman">
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