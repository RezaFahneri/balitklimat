<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text">Detail Surat Masuk</h3><br>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow p-5 md-12">
                            <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                            <div class="col-lg-12 col-md-12 col-xs-9">
                            <table class="table table-no-bordered">
                                <tr>
                                    <th>Sifat Surat</th>
                                    <td><?php echo $detail->sifat_surat?></td>
                                </tr>
                                <tr>
                                    <th>Kode/Indeks</th>
                                    <td><?php echo $datapeg->kode?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Input</th>
                                    <td><?php echo $datapeg->tanggal_input?></td>
                                </tr>
                                <tr>
                                    <th>No Urut</th>
                                    <td><?php echo $datapeg->no_urut?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Surat</th>
                                    <td><?php echo $datapeg->tanggal_surat?></td>
                                </tr>
                                <tr>
                                    <th>No Surat</th>
                                    <td><?php echo $datapeg->no_surat?></td>
                                </tr>
                                <tr>
                                    <th>Asal Surat</th>
                                    <td><?php echo $datapeg->asal_surat?></td>
                                </tr>
                                <tr>
                                    <th>Perihal/Isi Surat</th>
                                    <td><?php echo $datapeg->perihal?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td><?php
                                        if ($datapeg->status == 'Belum Disposisi') { ?>
                                            <a class="badge badge-warning">Belum Disposisi</a>
                                        <?php } else { ?>
                                            <a class="badge badge-success">Diteruskan Ke <?= $datapeg->nama_pegawai?></a>
                                        <?php } ?></td>
                                </tr>
                                <tr>
                                    <th>File Surat</th>
                                    <td><a class="btn btn-sm btn-outline-primary btn-icon-text" href="<?php echo base_url() ?>assets/file/suratmasuk/<?php echo $datapeg->dokumen ?>"><i class="ti ti-download"></i> <?php echo $datapeg->dokumen?></a></td>
                                </tr>
                            </table>
                            <a href="<?php echo base_url() ?>suratmasuk" class="btn btn-warning float-right" >Kembali</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
            </div>
    </div>                   
</div>
</div>