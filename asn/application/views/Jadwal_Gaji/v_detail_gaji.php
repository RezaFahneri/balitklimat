<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">
                            <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                    class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('jadwal_kgb') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>&nbsp Detail Jadwal Kenaikan Gaji Berkala</h3>
                            <br>
                            <div class="col-md-12 grid-margin">
                                <div class="card shadow p-5 md-12">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="col-lg-12 col-md-12 col-xs-9">
                                                <table class="table table-no-bordered">
                                                    <tr>
                                                        <th>Nama Pegawai</th>
                                                        <td><input class="form-control" type="text" readonly
                                                                value="<?php echo $detail->nama_pegawai ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>NIP</th>
                                                        <td><input class="form-control" type="text" readonly
                                                                value="<?php echo $detail->nip?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Gaji Lama</th>
                                                        <td><input class="form-control" type="text" readonly
                                                                value="Rp. <?php echo $detail->gaji_lama ;?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Gaji Berikutnya</th>
                                                        <td><input class="form-control" type="text" readonly
                                                                value="Rp. <?php echo $detail->gaji_baru?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>TMT 1</th>
                                                        <td><input class="form-control" type="text" readonly
                                                                value="<?php echo $detail->tmt_gaji_1?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>TMT 2</th>
                                                        <td><input class="form-control" type="text" readonly
                                                                value="<?php echo $detail->tmt_gaji_2?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>TMT 3</th>
                                                        <td><input class="form-control" type="text" readonly
                                                                value="<?php echo $detail->tmt_gaji_3?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>TMT 4</th>
                                                        <td><input class="form-control" type="text" readonly
                                                                value="<?php echo $detail->tmt_gaji_4?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>TMT 5</th>
                                                        <td><input class="form-control" type="text" readonly
                                                                value="<?php echo $detail->tmt_gaji_5?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jadwal kenaikan gaji berkala</th>
                                                        <td><input class="form-control" type="text" readonly
                                                                value="<?php echo $detail->jadwal_kgb?>"></td>
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
</div>
</div>