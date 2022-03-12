<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Riwayat Peminjaman Barang</h3><br>
                        <!-- <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>pinjam_barang/pinjam" class="btn btn-success btn-md">Pinjam Barang</a>
                        </div> -->
                        <div class="col-md-12 grid-margin">
                            <div class="card mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-4">
                                            <table id="datatable" class="table table-bordered" cellspacing="0" width="100%">
                                                <thead style='height:auto' class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Barang</th>
                                                        <th>Peminjam</th>
                                                        <th>Tanggal Pinjam</th>
                                                        <th>Tanggal Selesai</th>
                                                        <th>Jumlah</th>
                                                        <!-- <th>Kegiatan</th> -->
                                                        <!-- <th>Lokasi</th> -->
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_riwayat as $dr) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo $dr->nama_barang ?></td>
                                                            <td><?php echo $dr->peminjam ?></td>
                                                            <td><?php echo tanggal_indonesia($dr->tglpinjam) ?></td>
                                                            <td><?php echo tanggal_indonesia($dr->tglselesai) ?></td>
                                                            <td><?php echo $dr->qty ?></td>
                                                            <!-- <td><?php echo $dr->kegiatan ?></td> -->
                                                            <!-- <td><?php echo $dr->lokasi ?></td> -->
                                                            <?php if ($dr->status_riwayat == '3') { ?>
                                                                <td>
                                                                    <button class="btn btn-outline-secondary btn-md" disabled>Selesai</button>
                                                                </td>
                                                            <?php } ?>
                                                            <td>
                                                                <a data-toggle="tooltip" title="Detail" style="font-size:25px" class="btn btn-sm btn-info" href="<?php echo base_url('/riwayat_peminjaman/detail/' . $dr->id_riwayat) ?>"><i class="mdi mdi-information-outline"></i></a>                                                    
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
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