<div class="main-panel">
    <div class="content-wrapper">
        <a href="<?php echo base_url(); ?>peserta/profil" class="btn btn-light mb-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg></i> Kembali ke <b>Profil</b></a>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="font-weight-bold">Edit Profil</h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <?= form_open_multipart('peserta/profil/simpanedit', 'class="row g-3"'); ?>
                        <div class="form-group">
                            <input type="hidden" name="id_pm" value="<?= $detail->id_pm ?>">
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label">
                                <h6 class="font-weight-bold">Email </h6>
                            </label>
                            <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $detail->email_pm ?>" readonly>
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label">
                                <h6 class="font-weight-bold">Nama Lengkap </h6>
                            </label>
                            <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $detail->nama_pm ?>">
                        </div>
                        <div class="form-group col-md-12">
                            <label>
                                <h6 class="font-weight-bold">Nomor Whatsapp </h6>
                            </label>
                            <input type="int" class="form-control form-control-user" id="nowa" name="nowa" value="<?= $detail->no_wa_pm ?>">
                        </div>
                        <div class="form-group col-12">
                            <label>
                                <h6 class="font-weight-bold">Jenis Magang </h6>
                            </label>
                            <select class="js-example-basic-single w-100" id="jenis" name="jenis">
                                <option value="" selected disabled> --Pilih Jenis-- </option>
                                <option <?= $detail->jns_magang == "Mahasiswa" ? 'selected' : ''; ?> value="Mahasiswa">Mahasiswa</option>
                                <option <?= $detail->jns_magang == "Siswa" ? 'selected' : ''; ?> value="Siswa">Siswa</option>
                                <option <?= $detail->jns_magang == "Mandiri" ? 'selected' : ''; ?> value="Mandiri">Mandiri</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>
                                <h6 class="font-weight-bold">Asal Instansi/Universitas/Sekolah </h6>
                            </label>
                            <input type="text" class="form-control form-control-user" id="asalinstansi" name="asalinstansi" value="<?= $detail->asal_instansi_pm ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>
                                <h6 class="font-weight-bold">Jurusan </h6>
                            </label>
                            <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan" value="<?= $detail->jurusan_pm ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>
                                <h6 class="font-weight-bold">Pembimbing Instansi/Universitas/Sekolah </h6>
                            </label>
                            <input type="text" class="form-control form-control-user" id="pi" name="pi" value="<?= $detail->pi_pm ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>
                                <h6 class="font-weight-bold">Nomor Whatsapp Pembimbing Instansi/Universitas/Sekolah </h6>
                            </label>
                            <input type="int" class="form-control form-control-user" id="nowapi" name="nowapi" value="<?= $detail->no_wa_pi_pm ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>
                                <h6 class="font-weight-bold">Tanggal Mulai </h6>
                            </label>
                            <input type="date" class="form-control form-control-user" id="tglmli" name="tglmli" value="<?= $detail->tgl_mli_pm ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>
                                <h6 class="font-weight-bold">Tanggal Selesai </h6>
                            </label>
                            <input type="date" class="form-control form-control-user" id="tglsls" name="tglsls" value="<?= $detail->tgl_sls_pm ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>
                                <h6 class="font-weight-bold">Surat Pengajuan </h6>
                            </label>
                            <div class="row">
                                <div class="col-1 mr-1">
                                    <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/surat/<?= $detail->s_pengajuan_pm ?>" target="_blank">
                                        <i class="ti ti-file"></i>
                                    </a>
                                </div>
                                <div class="col-lg">
                                    <input type="file" class="form-control form-control-lg" id="pengajuan" name="pengajuan">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>
                                <h6 class="font-weight-bold">Surat Penerimaan </h6>
                            </label>
                            <div class="row">
                                <div class="col-1 mr-1">
                                    <a class="btn btn-outline-info btn-sm btn-icon-text" href="<?= base_url() ?>assets/dokumen/surat/<?= $detail->s_penerimaan_pm ?>" target="_blank">
                                        <i class="ti ti-file"></i>
                                    </a>
                                </div>
                                <div class="col-lg">
                                    <input type="file" class="form-control form-control-lg" id="penerimaan" name="penerimaan">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label">
                                <h6 class="font-weight-bold">Pembimbing Balitklimat </h6>
                            </label>
                            <select class="js-example-basic-single w-100" id="pb" name="pb">
                                <option value="" selected disabled> --Pilih Pembimbing--</option>
                                <?php foreach ($pegawai as $peg) : ?>
                                    <option <?= $detail->pembimbing_balai == $peg->nip ? 'selected' : ''; ?> value="<?= $peg->nip ?>"><?= $peg->divisi ?> | <?= $peg->nama_pegawai ?></option>
                                <?php endforeach; ?>
                                <!-- <?php foreach ($pegawai as $peg) { ?>
                                    <option value="<?= $peg->nip; ?>"><?= $peg->nama_pegawai; ?></option>';
                                <?php } ?> -->
                            </select>
                        </div>
                        <div class="float-right">
                            <button onclick="return confirm('Apakah anda yakin untuk mengubah data?')" type="submit" class="btn btn-primary ml-2">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>