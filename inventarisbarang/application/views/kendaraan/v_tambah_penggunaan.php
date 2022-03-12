<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="shadow">
                    <div class="card-header py-3">
                        <a style="font-size:40px; color:#000000" href="<?php echo base_url() ?>penggunaan_mobil"><i class="mdi mdi-keyboard-backspace"></i></a>
                        <h3 class="m-0 font-weight-bold">Statistik Sopir</h3><br>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('pesan'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card"></br>
                                        <div id="myBtnContainer">
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('semua')">2022</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('jan')"> Jan</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('feb')"> Feb</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('mar')"> Mar</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('apr')"> Apr</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('mei')"> Mei</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('jun')"> Jun</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('jul')"> Jul</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('ags')"> Ags</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('sep')"> Sep</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('okt')"> Okt</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('nov')"> Nov</button>
                                            <button class="btn-filter btn-secondary" onclick="filterSelection('des')"> Des</button>
                                        </div>
                                        <div class="container-filter">
                                            <div class="filterDiv semua">
                                                <h4>Statistik Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar; ?> kali</p>
                                            </div>
                                            <div class="filterDiv jan">
                                                <h4>Bulan Januari Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_jan; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_jan; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_jan; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_jan; ?> kali</p>
                                            </div>
                                            <div class="filterDiv feb">
                                                <h4>Bulan Februari Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_feb; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_feb; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_feb; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_feb; ?> kali</p>
                                            </div>
                                            <div class="filterDiv mar">
                                                <h4>Bulan Maret Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_mar; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_mar; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_mar; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_mar; ?> kali</p>
                                            </div>
                                            <div class="filterDiv apr">
                                                <h4>Bulan April Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_apr; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_apr; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_apr; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_apr; ?> kali</p>
                                            </div>
                                            <div class="filterDiv mei">
                                                <h4>Bulan Mei Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_mei; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_mei; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_mei; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_mei; ?> kali</p>
                                            </div>
                                            <div class="filterDiv jun">
                                                <h4>Bulan Juni Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_jun; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_jun; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_jun; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_jun; ?> kali</p>
                                            </div>
                                            <div class="filterDiv jul">
                                                <h4>Bulan Juli Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_jul; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_jul; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_jul; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_jul; ?> kali</p>
                                            </div>
                                            <div class="filterDiv ags">
                                                <h4>Bulan Agustus Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_ags; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_ags; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_ags; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_ags; ?> kali</p>
                                            </div>
                                            <div class="filterDiv sep">
                                                <h4>Bulan September Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_sep; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_sep; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_sep; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_sep; ?> kali</p>
                                            </div>
                                            <div class="filterDiv okt">
                                                <h4>Bulan Oktober Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_okt; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_okt; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_okt; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_okt; ?> kali</p>
                                            </div>
                                            <div class="filterDiv nov">
                                                <h4>Bulan November Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_nov; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_nov; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_nov; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_nov; ?> kali</p>
                                            </div>
                                            <div class="filterDiv des">
                                                <h4>Bulan Desember Tahun 2022</h4>
                                                <h5>1. Ujang Suseno</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir1_dalam_des; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir1_luar_des; ?> kali</p>
                                                <h5>2. Asep Pisan</h5>
                                                <p>Perjalanan dalam Kota : <?= $sopir2_dalam_des; ?> kali</p>
                                                <p>Perjalanan luar Kota : <?= $sopir2_luar_des; ?> kali</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="m-0 font-weight-bold">Tambah Penggunaan Mobil</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <form method="post" action="<?php echo base_url('penggunaan_mobil/tambah_aksi') ?>" enctype="multipart/form-data"></br>
                                            <div class="form-group">
                                                <label>Nama Pegawai </label></br>
                                                <select name="nip" id="nip" class="js-example-basic-single form-control" required>
                                                    <option value="">--Pilih Nama Pegawai--</option>
                                                    <?php
                                                    foreach ($pegawai as $row) { ?>
                                                        <option value="<?php echo $row->nip; ?>"><?php echo $row->nama_pegawai; ?></option>';
                                                        }
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>No Polisi </label></br>
                                                <select name="id_kendaraan" id="id_kendaraan" class="js-example-basic-single form-control" required>
                                                    <option value="">--Pilih No Polisi--</option>
                                                    <?php
                                                    foreach ($kendaraan as $row) { ?>
                                                        <option value="<?php echo $row->id_kendaraan; ?>"><?php echo $row->no_polisi; ?></option>';
                                                        }
                                                    <?php } ?>
                                                </select>
                                                <a style="font-size: 12px;">Jika No Polisi tidak ada, silahkan cek data kendaraan</a><a style="font-size: 12px;" href="<?php echo base_url(); ?>kendaraan"> disini.</a>
                                            </div>
                                            <div class="form-group">
                                                <label>Perjalanan </label>
                                                <select name="perjalanan" id="statusperjalanan" onchange="showperjalanan()" class="form-control" required>
                                                    <option value="">--Pilih Perjalanan--</option>
                                                    <option value="Dalam Kota">Dalam Kota</option>
                                                    <option value="Luar Kota">Luar Kota</option>
                                                </select>
                                                <?php echo form_error('perjalanan', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Pemakaian</label>
                                                <input type="date" name="tgl_pemakaian" class="form-control" required>
                                                <?php echo form_error('tgl_pemakaian', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Kembali</label>
                                                <input type="date" name="tgl_kembali" class="form-control" required>
                                                <?php echo form_error('tgl_kembali', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <div id="lama_pakai" class="form-group">
                                                <span>Pemakaian hanya 1 hari?</span>&nbsp;
                                                <input type="button" value="Ya" onclick="ShowHideDiv(this)" />&nbsp;&nbsp;
                                                <input type="button" value="Tidak" onclick="ShowHideDiv(this)" />
                                                <hr />
                                                <div id="dvPassport" style="display: none">
                                                    <label>Lama Pemakaian (Jam)</label>
                                                    <input name="lama_pemakaian" type="text" class="form-control">
                                                    <?php echo form_error('lama_pemakaian', '<div class="text-small text-danger"></div>') ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input type="hidden" name="status_penggunaan" class="form-control" value="1" readonly>
                                                <?php echo form_error('status_penggunaan', '<div class="text-small text-danger"></div>') ?>
                                            </div>
                                            <input type="submit" class="btn btn-success" name="submit" value="Simpan">&nbsp &nbsp
                                            <a class="btn btn-light" href="<?php echo base_url(); ?>penggunaan_mobil">Cancel</a>
                                        </form>
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