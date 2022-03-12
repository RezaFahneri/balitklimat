<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <a title="Kembali"
                                    class="btn btn-sm btn-success" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('perjalanan_dinas') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>
                        <br><br><h3 class="m-0 font-weight-bold text-primary">Detail Perjalanan Dinas</h3><br>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow p-5 md-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="col-lg-12 col-md-12 col-xs-9">
                                            <table class="table table-no-bordered">
                                                <tr>
                                                    <th>Kode Kegiatan</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->kode_kegiatan ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kegiatan</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->jenis_keg ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Judul Kegiatan</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->judul_kegiatan ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Dalam Rangka</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->dalam_rangka ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Diajukan Oleh</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->nama_pumk ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Verifikator</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->nama_verifikator ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Kuasa Pengguna Anggaran</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->nama_kpa ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Pejabat Pembuat Komitmen</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->nama_ppk ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Bendahara</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->nama_bendahara ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Pengajuan</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->tanggal_pengajuan ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>No Surat Tugas</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->no_surat_tugas ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>MAK</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->judul_mak ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Pengajuan</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->jenis_pengajuan ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Perjalanan Dinas</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->jenis_perjalanan_dinas ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Berangkat Dari Kota</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->kota . ', ' . $detail->nama_provinsi ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Tujuan</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->kota_tujuan . ', ' . $detail->provinsi_tujuan ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Kendaraan</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->kendaraan?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Berangkat</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->tanggal_berangkat ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Kembali</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->tanggal_kembali ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>Lama Perjalanan</th>
                                                    <td><input class="form-control" type="text" readonly value="<?php echo $detail->lama_perjalanan.' hari' ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td></td>
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