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
                    <button title="Ekspor ke PDF" type="button" class="btn btn-sm btn-danger ml-2 float-right mb-2" data-toggle="modal" data-target="#exportpdf">
                        <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                            </svg></i> PDF
                    </button>
                    <a title="Exspor ke Excel" class="btn btn-sm btn-primary float-right mb-2" href=" <?= base_url('pegawai/peserta/export_excel') ?>"> <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z" />
                            </svg></i> Excel</a>
                <?php } else { ?>
                    <button title="Ekspor ke PDF" type="button" class="btn btn-sm btn-danger float-right mb-2 ml-2" data-toggle="modal" data-target="#exportpdf2">
                        <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                            </svg></i> PDF
                    </button>
                    <a title="Exspor ke Excel" class="btn btn-sm btn-primary float-right mb-2" href=" <?= base_url('pegawai/peserta/export_excel2') ?>"> <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z" />
                            </svg></i> Excel</a>
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