<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4 mb-4 stretch-card transparent">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="mb-4 font-weight-bold text-info" style="font-size: 15pt;">PESERTA BERLANGSUNG</div>
                        <table class="mt-3" style="width: 100%; table-layout:fixed;">
                            <?php
                            if ($sub == 'Data Peserta Bimbingan') { ?>
                                <tbody>
                                    <tr>
                                        <td rowspan="3" width="40%" style="text-align: center;">
                                            <p class="font-weight-bold text-info" style="font-size: 45pt;"><?= $b4 ?></p>
                                        </td>
                                        <td width="45%">
                                            <p class="font-weight-bold text-info">Mahasiswa</p>
                                        </td>
                                        <td width="15%">
                                            <p class="font-weight-bold text-info"><?= $b1 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-info">Mandiri</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-info"><?= $b2 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-info">Siswa</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-info"><?= $b3 ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } else { ?>
                                <tbody>
                                    <tr>
                                        <td rowspan="3" width="40%" style="text-align: center;">
                                            <p class="font-weight-bold text-info" style="font-size: 45pt;"><?= $ab4 ?></p>
                                        </td>
                                        <td width="45%">
                                            <p class="font-weight-bold text-info">Mahasiswa</p>
                                        </td>
                                        <td width="15%">
                                            <p class="font-weight-bold text-info"><?= $ab1 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-info">Mandiri</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-info"><?= $ab2 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-info">Siswa</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-info"><?= $ab3 ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 stretch-card transparent">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="mb-4 font-weight-bold text-warning text-uppercase" style="font-size: 15pt;">Peserta Selesai</div>
                        <table class="mt-3" style="width: 100%; table-layout:fixed;">
                            <?php
                            if ($sub == 'Data Peserta Bimbingan') { ?>
                                <tbody>
                                    <tr>
                                        <td rowspan="3" width="40%" style="text-align: center;">
                                            <p class="font-weight-bold text-warning" style="font-size: 45pt;"><?= $s4 ?></p>
                                        </td>
                                        <td width="45%">
                                            <p class="font-weight-bold text-warning">Mahasiswa</p>
                                        </td>
                                        <td width="15%">
                                            <p class="font-weight-bold text-warning"><?= $s1 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-warning">Mandiri</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-warning"><?= $s2 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-warning">Siswa</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-warning"><?= $s3 ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } else { ?>
                                <tbody>
                                    <tr>
                                        <td rowspan="3" width="40%" style="text-align: center;">
                                            <p class="font-weight-bold text-warning" style="font-size: 45pt;"><?= $as4 ?></p>
                                        </td>
                                        <td width="45%">
                                            <p class="font-weight-bold text-warning">Mahasiswa</p>
                                        </td>
                                        <td width="15%">
                                            <p class="font-weight-bold text-warning"><?= $as1 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-warning">Mandiri</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-warning"><?= $as2 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-warning">Siswa</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-warning"><?= $as3 ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 stretch-card transparent">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="mb-4 font-weight-bold text-danger text-uppercase" style="font-size: 15pt;">Seluruh Peserta</div>
                        <table class="mt-3" style="width: 100%; table-layout:fixed;">
                            <?php
                            if ($sub == 'Data Peserta Bimbingan') { ?>
                                <tbody>
                                    <tr>
                                        <td rowspan="3" width="40%" style="text-align: center;">
                                            <p class="font-weight-bold text-danger" style="font-size: 45pt;"><?= $all1 ?></p>
                                        </td>
                                        <td width="45%">
                                            <p class="font-weight-bold text-danger">Mahasiswa</p>
                                        </td>
                                        <td width="15%">
                                            <p class="font-weight-bold text-danger"><?= $s1 + $b1 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-danger">Mandiri</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-danger"><?= $s2 + $b2 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-danger">Siswa</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-danger"><?= $s3 + $b3 ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } else { ?>
                                <tbody>
                                    <tr>
                                        <td rowspan="3" width="40%" style="text-align: center;">
                                            <p class="font-weight-bold text-danger" style="font-size: 45pt;"><?= $aall1 ?></p>
                                        </td>
                                        <td width="45%">
                                            <p class="font-weight-bold text-danger">Mahasiswa</p>
                                        </td>
                                        <td width="15%">
                                            <p class="font-weight-bold text-danger"><?= $as1 + $ab1 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-danger">Mandiri</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-danger"><?= $as2 + $ab2 ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold text-danger">Siswa</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-danger"><?= $as3 + $ab3 ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold mb-10"><?= $sub; ?></h3>
                <?php
                if ($sub == 'Data Peserta Bimbingan') { ?>
                    <button title="Ekspor ke PDF" type="button" class="btn btn-sm btn-primary float-right mb-2" data-toggle="modal" data-target="#exportpdf">
                        <i class="icon-file"></i> PDF
                    </button>
                <?php } else { ?>
                    <button title="Ekspor ke PDF" type="button" class="btn btn-sm btn-primary float-right mb-2" data-toggle="modal" data-target="#exportpdf2">
                        <i class="icon-file"></i> PDF
                    </button>
                <?php } ?>
                <?= $this->session->flashdata('message'); ?>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered tabel-hover text-wrap" id="peg_pes" cellspacing="0" style="width:100%; table-layout:fixed">
                            <?php
                            if ($sub == 'Data Seluruh Peserta Magang') { ?>
                                <thead class="table-light">
                                    <tr style="text-align: center;">
                                        <th width="4%">No.</th>
                                        <th width="23%">Nama</th>
                                        <th width="12%">Jenis Magang</th>
                                        <!-- <th>Asal Instansi</th> -->
                                        <th width="12%">Mulai</th>
                                        <th width="12%">Selesai</th>
                                        <th style="width: 18%;">Pembimbing</th>
                                        <th width="8%">Status</th>
                                        <th class="no-sort" width="7%">Aksi</th>
                                    </tr>
                                </thead>
                            <?php } else { ?>
                                <thead class="table-light">
                                    <tr style="text-align: center;">
                                        <th width="3%">No.</th>
                                        <th width="25%">Nama</th>
                                        <th width="7%">Jenis Magang</th>
                                        <!-- <th>Asal Instansi</th> -->
                                        <th width="8%">Mulai</th>
                                        <th width="8%">Selesai</th>
                                        <!-- <th style="width: 20%;">Pembimbing</th> -->
                                        <th width="8%">Status</th>
                                        <th class="no-sort" width="6%">Aksi</th>
                                    </tr>
                                </thead>
                            <?php } ?>
                            <tbody>
                                <?php
                                if ($sub == 'Data Peserta Bimbingan') { ?>
                                    <?php
                                    $no = 1;
                                    foreach ($ps as $pm) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $pm->nama_pm ?></td>
                                            <td><?= $pm->jns_magang ?></td>
                                            <!-- <td><?= $pm->asal_instansi_pm ?></td> -->
                                            <td><?= date('d M Y', strtotime($pm->tgl_mli_pm)); ?></td>
                                            <td><?= date('d M Y', strtotime($pm->tgl_sls_pm)); ?></td>
                                            <td style="text-align: center;"><?php
                                                                            if ($pm->status_pm == 'berlangsung') { ?>
                                                    <a class="badge badge-success">Berlangsung</a>
                                                <?php } else { ?>
                                                    <a class="badge badge-danger">Selesai</a>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <a title="Lihat detail peserta" class="btn btn-sm btn-info" href=" <?= base_url('pegawai/peserta/detail/' . $pm->id_pm) ?>"><i class="ti ti-eye"></i></a>
                                                <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                    <?php
                                    $no = 1;
                                    foreach ($detail as $pm) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= character_limiter($pm->nama_pm, 15) ?></td>
                                            <td><?php
                                                if ($pm->jns_magang == 'Mahasiswa') { ?>
                                                    Mhs
                                                <?php } elseif ($pm->jns_magang == 'Siswa') { ?>
                                                    Siswa
                                                <?php } else { ?>
                                                    Mandiri
                                                <?php } ?></td>
                                            <!-- <td><?= $pm->asal_instansi_pm ?></td> -->
                                            <td><?= date("d M y", strtotime($pm->tgl_mli_pm)); ?></td>
                                            <td><?= date("d M y", strtotime($pm->tgl_sls_pm)); ?></td>
                                            <td><?= character_limiter($pm->nama_pegawai, 15); ?></td>
                                            <td style="text-align: center;"><?php
                                                                            if ($pm->status_pm == 'berlangsung') { ?>
                                                    <a class="badge badge-success">Brjln</a>
                                                <?php } else { ?>
                                                    <a class="badge badge-danger">Sls</a>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php
                                                if ($pm->pembimbing_balai != $nip) { ?>
                                                    <a title="Lihat detail peserta" class="btn btn-sm btn-primary" href=" <?= base_url('pegawai/peserta/detail/' . $pm->id_pm) ?>"><i class="ti ti-eye"></i></a>
                                                <?php } else { ?>
                                                    <a title="Lihat detail peserta" class="btn btn-sm btn-info" href=" <?= base_url('pegawai/peserta/detail/' . $pm->id_pm) ?>"><i class="ti ti-eye"></i></a>
                                                <?php } ?>
                                                <!-- <a class="btn btn-sm btn-success"><i class="ti ti-pencil"></i></a> -->
                                            </td>
                                        </tr>
                                    <?php } ?>
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
<div class="modal fade" id="exportpdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('pegawai/peserta/export_pdf') ?>" target="_blank">
                    <label>
                        <h6 class="font-weight-bold">Tanggal Mulai</h6>
                    </label>
                    <input type="date" class="form-control form-control-user mb-2" id="tglawal1" name="tglawal1" placeholder="Tanggal Awal">
                    <label class="mt-2">
                        <h6 class="font-weight-bold">Tanggal Akhir</h6>
                    </label>
                    <input type="date" class="form-control form-control-user mb-3" id="tglakhir1" name="tglakhir1" placeholder="Tanggal Akhir">
                    <select class="js-example-basic-single w-100 " id="pdfjns1" name="pdfjns1">
                        <option value="" selected disabled> --Pilih Jenis Magang-- </option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Siswa">Siswa</option>
                        <option value="Mandiri">Mandiri</option>
                    </select>
                    <select class="js-example-basic-single w-100 " id="pdfstat1" name="pdfstat1">
                        <option value="" selected disabled> --Pilih Status-- </option>
                        <option value="berlangsung">Berlangsung</option>
                        <option value="selesai">Selesai</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Ekspor</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<div class="modal fade" id="exportpdf2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('pegawai/peserta/export_pdf2') ?>" target="_blank">
                    <!-- <?= form_open_multipart('pegawai/peserta/export_pdf2') ?> -->
                    <label>
                        <h6 class="font-weight-bold">Tanggal Mulai</h6>
                    </label>
                    <input type="date" class="form-control form-control-user mb-2" id="tglawal" name="tglawal" placeholder="Tanggal Awal">
                    <label class="mt-2">
                        <h6 class="font-weight-bold">Tanggal Akhir</h6>
                    </label>
                    <input type="date" class="form-control form-control-user mb-3" id="tglakhir" name="tglakhir" placeholder="Tanggal Akhir">
                    <!-- <div class="form-group col-12"> -->
                    <select class="js-example-basic-single w-100" id="pdfjns" name="pdfjns">
                        <option value="" selected disabled> --Pilih Jenis Magang-- </option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Siswa">Siswa</option>
                        <option value="Mandiri">Mandiri</option>
                    </select>
                    <!-- </div>
                <div class="form-group col-12"> -->
                    <select class="js-example-basic-single w-100" id="pdfpeg" name="pdfpeg">
                        <option value="" selected disabled> --Pilih Pembimbing--</option>
                        <?php foreach ($pegawai as $peg) { ?>
                            <option value="<?= $peg->nip; ?>"><?= $peg->nama_pegawai; ?></option>';
                        <?php } ?>
                    </select>
                    <select class="js-example-basic-single w-100 " id="pdfstat" name="pdfstat">
                        <option value="" selected disabled> --Pilih Status-- </option>
                        <option value="berlangsung">Berlangsung</option>
                        <option value="selesai">Selesai</option>
                    </select>
                    <!-- </form> -->
                    <!-- </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Ekspor</button>
            </div>
            </form>
            <!-- <?= form_close() ?> -->
        </div>
    </div>
</div>