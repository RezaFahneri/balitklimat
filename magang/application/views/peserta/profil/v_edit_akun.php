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
                            <h3 class="font-weight-bold">Edit Akun</h3>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('peserta/profil/edit_akun/' . $detail->id_pm) ?>" method="POST" class="row g-3">
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
                                    <h6 class="font-weight-bold">Kata Sandi Lama<i style="color:red">*</i></h6>
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control form-control-user" id="ks" name="ks">
                                    <!--<span class="input-group-text" id="basic-addon2">Show</span>-->
                                    <div class="input-group-append">
                                        <span id="mybutton" onclick="ks()" class="input-group-text">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <?php echo form_error('ks', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group col-6">
                                <label class="form-label">
                                    <h6 class="font-weight-bold">Kata Sandi Baru<i style="color:red">*</i></h6>
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control form-control-user" id="ks2" name="ks2">
                                    <!--<span class="input-group-text" id="basic-addon2">Show</span>-->
                                    <div class="input-group-append">
                                        <span id="mybutton" onclick="ks2()" class="input-group-text">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <?php echo form_error('ks2', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group col-6">
                                <label class="form-label">
                                    <h6 class="font-weight-bold">Ulangi Kata Sandi Baru<i style="color:red">*</i></h6>
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control form-control-user" id="ks3" name="ks3">
                                    <!--<span class="input-group-text" id="basic-addon2">Show</span>-->
                                    <div class="input-group-append">
                                        <span id="mybutton" onclick="ks3()" class="input-group-text">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <?php echo form_error('ks3', '<small class="text-danger">', '</small>'); ?>
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