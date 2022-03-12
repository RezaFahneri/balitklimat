<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold">Data Barang</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash5" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>stok_barang/tambah" class="btn btn-success btn-md"><i class="ti ti-plus">&nbsp;</i>Tambah Data Barang</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-4 ">
                                            <table id="datatable" class="table table-bordered display" cellspacing="0" width="100%">
                                                <thead style='height:auto' class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <!-- <th>Kode</th> -->
                                                        <th>Gambar</th>
                                                        <th>Nama Barang</th>
                                                        <!-- <th>Jenis Barang</th> -->
                                                        <th>Jumlah Barang</th>
                                                        <th>Satuan Barang</th>
                                                        <!-- <th>Kondisi Barang</th> -->
                                                        <!-- <th>Keterangan</th> -->
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_stok as $dp) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <!-- <td><?php echo $dp->kode ?></td> -->
                                                            <td>
                                                                <img class="zoomable img-lg" src="<?php echo base_url() . 'assets/images/upload/' . $dp->gambar ?>" style="height:40px;">
                                                            <td><?php echo character_limiter($dp->nama_barang, 35) ?></td>
                                                            <!-- <td><?php echo $dp->jenis_barang ?></td> -->
                                                            <td><?php echo $dp->jumlah_barang ?></td>
                                                            <td><?php echo $dp->satuan_barang ?></td>
                                                            <!-- <td><?php echo $dp->kondisi_barang ?></td> -->
                                                            <!-- <td><?php echo $dp->keterangan ?></td> -->
                                                            <td>
                                                                <a data-toggle="tooltip" title="Detail" style="font-size:25px" class="btn btn-sm btn-info" href="<?php echo base_url('/stok_barang/detail/' . $dp->id_barang) ?>"><i class="mdi mdi-information-outline"></i></a>
                                                                <a data-toggle="tooltip" title="Edit" style="font-size:25px" class="btn btn-md btn-success" href="<?php echo base_url() ?>stok_barang/edit?id_barang=<?php echo $dp->id_barang ?>"><i class="mdi mdi-pencil"></i></a>
                                                                <a data-toggle="tooltip" title="Hapus" style="font-size:25px" id="tombol-hapus3" class="btn btn-sm btn-danger" href="<?php echo site_url('stok_barang/hapus/' . $dp->id_barang) ?>"><i class="mdi mdi-delete"></i></a>
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