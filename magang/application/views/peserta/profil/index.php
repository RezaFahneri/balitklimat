<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold mb-10">Profil Peserta</h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-md-12"> <a class="btn btn-sm btn-primary float-right" href="<?= base_url('peserta/profil/edit_profil/' . $user2['id_pm']) ?>"><i class="ti ti-pencil"></i>Edit</a></div>
                                <div class="col-md-12">
                                    <h3> <small class="text-muted">
                                            Biodata
                                        </small>
                                    </h3>
                                </div>
                                <div class="col-md-12">
                                    <address>
                                        <p class="font-weight-bold">ID Peserta</p>
                                        <p><?= $user2['id_pm']; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-12">
                                    <address>
                                        <p class="font-weight-bold">Nama Lengkap</p>
                                        <p><?= $user2['nama_pm']; ?></p>
                                    </address>
                                </div>
                                <!-- <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Jenis Kelamin</p>
                                        <p><?= $user2['jk_pm']; ?></p>
                                    </address>
                                </div> -->
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Email</p>
                                        <p><?= $user2['email_pm']; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Nomor Whatsapp</p>
                                        <p><?= $user2['no_wa_pm']; ?></p>
                                    </address>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h3> <small class="text-muted">
                                            Jenis Magang <a class="badge badge-sm badge-info"><?= $user2['jns_magang']; ?></a>
                                        </small>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Asal Instansi</p>
                                        <p><?= $user2['asal_instansi_pm']; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Jurusan</p>
                                        <p><?= $user2['jurusan_pm']; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Pembimbing Instansi</p>
                                        <p><?= $user2['pi_pm']; ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Nomor Whatsapp Pembimbing Instansi</p>
                                        <p><?= $user2['no_wa_pi_pm']; ?>
                                            <?php
                                            if ($nohp2 !== 'tidak valid') { ?>
                                                <a class="btn btn-success btn-sm btn-icon-text" href="https://api.whatsapp.com/send?phone=<?= $nohp2 ?>" target=" _blank">
                                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                                        </svg></i>
                                                </a>
                                            <?php } ?>
                                        </p>
                                    </address>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h3> <small class="text-muted">
                                            Detail Magang
                                        </small>
                                    </h3>
                                </div>
                                <div class="col-md-12">
                                    <address>
                                        <p class="font-weight-bold">Pembimbing Balai</p>
                                        <p> <?= $peg->nama_pegawai; ?>
                                            <?php
                                            if ($nohp !== 'tidak valid') { ?>
                                                <a class="btn btn-success btn-sm btn-icon-text" href="https://api.whatsapp.com/send?phone=<?= $nohp ?>" target=" _blank">
                                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                                        </svg></i>
                                                </a>
                                            <?php } ?>
                                        </p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Tanggal Mulai</p>
                                        <p><?= date('d M Y', strtotime($user2['tgl_mli_pm'])); ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Tanggal Selesai</p>
                                        <p><?= date('d M Y', strtotime($user2['tgl_sls_pm'])); ?></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Surat Pengajuan</p>
                                        <p><a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/surat/<?= $user2['s_pengajuan_pm']; ?>" target="_blank">
                                                <i class="ti ti-file"></i> <?= $user2['s_pengajuan_pm']; ?>
                                            </a></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Surat Penerimaan</p>
                                        <p> <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/surat/<?= $user2['s_penerimaan_pm']; ?>" target="_blank">
                                                <i class="ti ti-file"></i> <?= $user2['s_penerimaan_pm']; ?>
                                            </a>
                                            <!-- <?= $user2['s_penerimaan_pm']; ?></p> -->
                                    </address>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url(); ?>peserta/laporan" class="btn btn-light float-right">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>