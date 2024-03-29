<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text">Detail Barang Keluar</h3><br>
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow p-5 md-12">
                            <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                            <div class="text-center">
                                <img src="<?php echo base_url() ?>assets/file/Barangkeluar/<?php echo $detail->foto ?>" alt="" class="img-thumbnail" style="height: 210px; width:200px">
                            </div><br>
                            <div class="col-lg-12 col-md-12 col-xs-9">
                            <table class="table table-no-bordered">
                                <tr>
                                    <th>ID Barang Keluar</th>
                                    <td><?php echo $detail->id_barangkeluar?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Keluar</th>
                                    <td><?php echo $detail->tanggal_keluar?></td>
                                </tr>
                                <tr>
                                    <th>Nama Barang</th>
                                    <td><?php echo $detail->nama_barang?></td>
                                </tr>
                                <tr>
                                    <th>Jumlah Keluar</th>
                                    <td><?php echo $detail->jumlah_keluar?></td>
                                </tr>
                                <tr>
                                    <th>Satuan</th>
                                    <td><?php echo $detailbarang->nama_satuan?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Barang</th>
                                    <td><?php echo $detailbarang->nama_jenis?></td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td><?php echo $detail->keterangan?></td>
                                </tr>
                                <th>Berita Acara</th>
                                    <td>
                                    <?php
                                        if ($detail->beritaacara) { ?>
                                            <a class="btn btn-outline-primary btn-icon-text btn-sm" href="<?= base_url() ?>assets/file/Barangkeluar/<?= $detail->beritaacara ?>" target="_blank">
                                                <i class="ti ti-download"></i> <?= $detail->beritaacara; ?>
                                            </a>
                                    <?php } ?>
                                    </td>
                                </tr>
                                <th>Dokumen</th>
                                    <td>
                                    <?php
                                        if ($dok)
                                            foreach ($dok as $detail) {
                                            ?>
                                            <a class="btn btn-outline-primary btn-icon-text btn-sm" href="<?= base_url() ?>assets/file/Barangkeluar/<?= $detail->nama_dokumen ?>" target="_blank">
                                                <i class="ti ti-download"></i> <?= $detail->nama_dokumen; ?>
                                            </a>
                                    <?php } ?>
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo base_url() ?>barangkeluar" class="btn btn-warning float-right" >Kembali</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
            </div>
    </div>                   
</div>
</div>