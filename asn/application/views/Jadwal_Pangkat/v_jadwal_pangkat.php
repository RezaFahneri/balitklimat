<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="table-responsive">
                            <h3 class="m-0 font-weight-bold text-primary">Jadwal Kenaikan Pangkat</h3><br>
                            <div class="flash-data" id="flash2"
                                data-flash="<?= $this->session->flashdata(
                                    'sukses'
                                ) ?>"></div>
                            <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata(
                                'error'
                            ) ?>">
                            </div>
                            <div class="col-md-8 grid-margin">
                                <a href="<?php echo base_url(); ?>jadwal_kp/tambah" class="btn btn-success btn-md"><i
                                        class="ti ti-plus"></i>Tambah Jadwal Kenaikan Pangkat</a>
                                <a href="<?php echo base_url(); ?>jadwal_kp/kalender" type="button"
                                    class="btn btn-outline-dark">
                                    <i class="ti ti-calendar"></i>
                                </a>
                            </div>
                            <div class="col-md-12 grid-margin">
                                <div class="card shadow mb-12">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive pt-8 ">
                                                <div class="table-responsive pt-3 ">
                                                <table id="dtTable" class="table table-striped table-bordered table-md"
                                                    data-page-length='25' cellspacing="0" height='50%'>
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th style="width:9%;text-align:center">No</th>
                                                                <th style="width:25%">Nama Pegawai</th>
                                                                <th style="width:13%">Pangkat Baru</th>
                                                                <th style="width:1%">Jadwal Kenaikan Pangkat
                                                                <th style="width:15%">Aksi</th>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            foreach (
                                                                $jadwal_kp
                                                                as $kp
                                                            ) { ?>
                                                            <tr>
                                                                <td style="text-align:center"><?php echo $no++; ?></td>
                                                                <td><?php echo $kp->nama_pegawai; ?></td>
                                                                <td><?php echo $kp->nama_pangkat; ?></td>
                                                                <td><?php echo tanggal_indonesia(
                                                                    $kp->jadwal_kp
                                                                ); ?></td>
                                                                <td>
                                                                    <a title="Detail Jadwal Kenaikan Pangkat"
                                                                        style="color:#ffffff; font-size:30px"
                                                                        class="btn btn-sm btn-info"
                                                                        href="<?php echo base_url(
                                                                            'jadwal_kp/detail/' .
                                                                                $kp->kode_kp
                                                                        ); ?>"><i
                                                                            class="mdi mdi-information-outline"></i></a>
                                                                    <a title="Kirim Pesan Whatsapp"
                                                                        style="font-size:30px"
                                                                        class="btn btn-md btn-success"
                                                                        style="height:25px" href="
                                                                https://web.whatsapp.com/send?phone='.<?php echo base_url(
                                                                    ' jadwal_kp/wa/' .
                                                                        $kp->no_whatsapp
                                                                ); ?>.'&text=
                                                                Assalamaualaikum,...%20Kami dari *Admin Balitklimat*, ingin mengkonfirmasi data berikut, %0a
                                                                NIP : <?php echo $kp->nip; ?> %0a
                                                                Nama : <?php echo $kp->nama_pegawai; ?> %0a
                                                                Pangkat : <?php echo $kp->pangkat; ?> %0a
                                                                Golongan : <?php echo $kp->golongan; ?> %0a
                                                                Pada Tanggal: <?php echo tanggal_indonesia(
                                                                    $kp->jadwal_kp
                                                                ); ?>  %0a
                                                                Menjadi Pangkat: <?php echo $kp->nama_pangkat; ?> %0a
                                                                Golongan :<?php echo $kp->nama_golongan; ?> %0a
                                                                Terimakasih..
                                                                " class="float" target="_blank"><i
                                                                            class="ti ti-brand-whatsapp"></i></a>
                                                                    <a title="Edit Jadwal Kenaikan Pangkat"
                                                                        style="font-size:30px"
                                                                        class="btn btn-md btn-warning"
                                                                        href="<?php echo base_url(); ?>jadwal_kp/edit?kode_kp=<?php echo $kp->kode_kp; ?>"><i
                                                                            class="mdi mdi-pencil"></i></a>
                                                                    <a title="Hapus Jadwal Kenaikan Pangkat"
                                                                        style="font-size:30px" id="hapus_jadwalkp"
                                                                        style="height:25px"
                                                                        class="btn btn-md btn-danger"
                                                                        href="<?php echo site_url(
                                                                            'jadwal_kp/hapus/' .
                                                                                $kp->kode_kp
                                                                        ); ?>"><i
                                                                            class="ti ti-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <?php }
                                                            ?>
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
            </div>
        </div>
    </div>
    </table>