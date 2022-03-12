<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text">Detail Disposisi Surat</h3><br>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow p-5 md-12">
                            <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                            <div class="col-lg-12 col-md-12 col-xs-9">
                            <table class="table table-no-bordered">
                                <tr>
                                    <th>No Surat</th>
                                    <td><?php echo $detail->no_surat?></td>
                                </tr>
                                <tr>
                                    <th>Disposisi Oleh</th>
                                    <td><?php echo $detail->user?></td>
                                </tr>
                                <tr>
                                <tr>
                                    <th>Diteruskan Kepada</th>
                                    <td><?php echo $detail->nama_pegawai?></td>
                                </tr>
                                <tr>
                                    <th>Isi Disposisi</th>
                                    <td><?php echo $detail->isi?></td>
                                </tr>
                                <tr>
                                    <th>Catatan</th>
                                    <td><?php echo $detail->catatan?></td>
                                </tr>
                            </table>
                            <a href="<?php echo base_url() ?>riwayatdisposisi" class="btn btn-warning float-right" >Kembali</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
            </div>
    </div>                   
</div>
</div>