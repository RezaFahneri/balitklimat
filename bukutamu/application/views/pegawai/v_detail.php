<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Detail Buku Tamu - Bertemu</h3>
                            <?php
                            if ($detail->laporan) { ?>
                                <button class="btn btn-sm btn-info float-right mb-3 " data-toggle="modal" data-target="#editlap"><i class="ti ti-pencil"></i> Laporan</button>

                            <?php } else { ?>
                                <button class="btn btn-sm btn-primary float-right mb-3 " data-toggle="modal" data-target="#addlap"><i class="ti ti-plus"></i> Laporan</button>
                            <?php } ?>
                            <?= $this->session->flashdata('message'); ?>
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
                                <input type="date" class="form-control form-control-user" id="tgl" name="tgl" value="<?= date('d M Y', strtotime($detail->tanggal)) ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>
                                    Waktu
                                </label>
                                <input type="time" class="form-control form-control-user" id="waktu" name="waktu" value="<?= date('h:i', strtotime($detail->tanggal)) ?>" readonly>
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
                            <div class="form-group col-12">
                                <label>
                                    Divisi
                                </label>
                                <input type="text" class="form-control form-control-user" id="nowa" name="nowa" value="<?= $detail->divisi ?>" readonly>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="form-label">
                                    <b> Keperluan</b>
                                </label>
                                <div class="com-text">
                                    <p style="text-align: justify;"><?= nl2br($detail->keperluan); ?></p>
                                </div>
                            </div>
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
                                if ($detail->laporan) { ?>
                                    <a onclick="return confirm('Apakah anda yakin untuk menghapus laporan?')" href="<?= base_url('pegawai/bukutamu_a/hapus/' . $detail->id_buku_tamu) ?>" class="btn btn-sm btn-danger float-right"><i class="ti ti-trash"></i></a>
                                    <div class="com-text">
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
    <div class="modal fade" id="addlap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambahkan Laporan <?= $detail->id_buku_tamu ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?= base_url('pegawai/bukutamu_a/tambah/' . $detail->id_buku_tamu) ?>">
                        <!-- <div class="form-group">
                            <input type="hidden" name="id" value="<?= $detail->id_buku_tamu; ?>">
                        </div> -->
                        <label class="form-label">
                            <h6 class="font-weight-bold">Laporan</h6>
                        </label>
                        <textarea class="form-control" id="ket" name="ket" rows="8"><?= set_value('ket'); ?></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editlap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Laporan <?= $detail->id_buku_tamu ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?= base_url('pegawai/bukutamu_a/tambah/' . $detail->id_buku_tamu) ?>">
                        <!-- <div class="form-group">
                            <input type="hidden" name="id" value="<?= $detail->id_buku_tamu; ?>">
                        </div> -->
                        <label class="form-label">
                            <h6 class="font-weight-bold">Laporan</h6>
                        </label>
                        <textarea class="form-control" id="ket" name="ket" rows="8"><?= $detail->laporan ?></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
                </form>
            </div>
        </div>
    </div>