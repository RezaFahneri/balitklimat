<div class="main-panel">
    <div class="content-wrapper">
        <?php if ($sub == 'Detail Buku Tamu - Bertemu') { ?>
            <a href="<?= base_url(); ?>admin/bukutamu_a" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg></i> Kembali ke <b>Tamu Bertemu</b></a>
        <?php } else { ?>
            <a href="<?= base_url(); ?>admin/bukutamu_b" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg></i> Kembali ke <b>Tamu Tidak Bertemu</b></a>
        <?php } ?>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10"><?= $sub; ?></h3>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Jenis Tamu </label>
                                <input type="text" class="form-control form-control-user" id="tgl" name="tgl" value="<?= $detail->jenis ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>
                                    Tanggal
                                </label>
                                <input type="text" class="form-control form-control-user" id="tgl" name="tgl" value="<?= date('d M Y', strtotime($detail->tanggal)) ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>
                                    Waktu
                                </label>
                                <input type="text" class="form-control form-control-user" id="waktu" name="waktu" value="<?= $detail->waktu ?>" readonly>
                            </div>
                            <div class="form-group col-12">
                                <label class="form-label">
                                    Nama Lengkap
                                </label>
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $detail->nama_lengkap ?>" readonly>
                            </div>
                            <div class="form-group col-md-12">
                                <label>
                                    Asal Instansi
                                </label>
                                <input type="text" class="form-control form-control-user" id="asalinstansi" name="asalinstansi" value="<?= $detail->asal_instansi ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>
                                    Email
                                </label>
                                <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= $detail->email ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>
                                    Nomor Whatsapp
                                </label>
                                <input type="text" class="form-control form-control-user" id="nowa" name="nowa" value="<?= $detail->no_wa ?>" readonly>
                            </div>
                            <div class="form-group col-6">
                                <label>
                                    Divisi
                                </label>
                                <input type="text" class="form-control form-control-user" id="nowa" name="nowa" value="<?= $detail->divisi ?>" readonly>
                            </div>
                            <div class="form-group col-6">
                                <label>
                                    Pegawai
                                </label>
                                <input type="text" class="form-control form-control-user" id="nowa" name="nowa" value="<?= $detail->nama_pegawai ?>" readonly>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="form-label">
                                    <b> Keperluan</b>
                                </label>
                                <div class="com-text">
                                    <p style="text-align: justify;"><?= nl2br($detail->keperluan); ?></p>
                                </div>
                            </div>
                            <?php
                            if ($sub == 'Detail Buku Tamu - Tidak Bertemu') { ?>
                                <div class="form-group col-md-12">
                                    <label class="form-label">
                                        <b> Alasan</b>
                                    </label>
                                    <div class="com-text">
                                        <p style="text-align: justify;"><?= nl2br($detail->alasan); ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="form-group col-md-12">
                                <label class="form-label">
                                    <b> Keterangan</b>
                                </label>
                                <div class="com-text">
                                    <p style="text-align: justify;"><?= nl2br($detail->keterangan); ?></p>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="form-label">
                                    <b>Laporan</b>
                                </label>
                                <?php
                                if ($detail->laporan) { ?><div class="com-text">
                                        <p style="text-align: justify;"><?= nl2br($detail->laporan); ?></p>
                                    </div>
                                <?php } else { ?>
                                    <p style="color: red;  font-weight:bold; font-size: medium">Belum Ada Laporan</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->