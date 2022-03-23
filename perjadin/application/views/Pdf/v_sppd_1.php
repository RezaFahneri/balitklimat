<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SPPD Halaman 1</title>
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/a4.css">
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="main-page">
    <h6 style="margin-left:250px;margin-top:150px;position:absolute;z-index:0"><b>SURAT PERINTAH PERJALANAN DINAS</b></h6>
    <hr width=36.5% color="black" style="margin-left:248px;margin-top:172px; height:3px;position:absolute;z-index:0">
    <hr width=36.5% color="black" style="margin-left:248px;margin-top:173px; height:3px;position:absolute;z-index:0">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->

    <!-- Write HTML just like a web page -->
    <?php
    $p = $isi_surat;
    ?>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 943px;
            position:absolute;
            left: 2%;
            margin-top:-23px"></div>

    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 345px;
            position:absolute;
            left: 44%;
            margin-top:116px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 60px;
            position:absolute;
            left: 30%;
            margin-top:461px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 60px;
            position:absolute;
            left: 58%;
            margin-top:461px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 465px;
            position:absolute;
            left: 33px;
            margin-top:116px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 465px;
            position:absolute;
            left: 58px;
            margin-top:116px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 465px;
            position:absolute;
            left: 763px;
            margin-top:116px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 60px;
            position:absolute;
            left: 44%;
            margin-top:521px"></div>


    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 943px;
            position:absolute;
            left: 98%;
            margin-top:-23px"></div>

    <hr width=96.1% color="black" style="margin-top:5%; margin-left:16px; position:absolute; z-index:1; height:0.2px">

    <hr width=30% color="black" style="margin-top:65px; margin-left:33px; position:absolute; z-index:1; height:0.2px">
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 60px;
            position:absolute;
            left: 33px;
            margin-top:-10.5px"></div>

    <p style="text-align:justify;margin-top:52px;margin-left:100px; width:75%; position:absolute;z-index:5; font-size:8px"><b><?php echo $header->nama_kementerian ?></b>
    <p style="text-align:justify;margin-top:66px;margin-left:42px; width:75%; position:absolute;z-index:5; font-size:8px"><b><?php echo $header->eslon_satu ?></b>
    <p style="text-align:justify;margin-top:80px;margin-left:55px; width:75%; position:absolute;z-index:5; font-size:6.7px"><b><?php echo $header->eslon_dua ?></b>
    <p style="text-align:justify;margin-top:94px;margin-left:53px; width:75%; position:absolute;z-index:5; font-size:8px"><b><?php echo $header->eslon_tiga ?></b>
    <p style="text-align:justify;margin-top:52px;margin-left:380px; width:75%; position:absolute;z-index:5; font-size:12px">Lembar ke
    <p style="text-align:justify;margin-top:52px;margin-left:480px; width:75%; position:absolute;z-index:5; font-size:12px">:
    <p style="text-align:justify;margin-top:94px;margin-left:380px; width:75%; position:absolute;z-index:5; font-size:12px">No SPPD
    <p style="text-align:justify;margin-top:94px;margin-left:480px; width:75%; position:absolute;z-index:5; font-size:12px">:
    <p style="text-align:justify;margin-top:94px;margin-left:550px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo $p->no_sppd2 ?>

    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 60px;
            position:absolute;
            left: 270px;
            margin-top:-10.5px"></div>

    <hr width=30% color="black" style="margin-top:125px; margin-left:33px; position:absolute; z-index:1; height:0.2px">


    <hr width=92% color="black" style="margin-top:191px; margin-left:33px; position:absolute; z-index:1; height:0.2px">
    <hr width=92% color="black" style="margin-top:216px; margin-left:33px; position:absolute; z-index:1; height:0.2px">
    <hr width=92% color="black" style="margin-top:256px; margin-left:33px; position:absolute; z-index:1; height:0.2px">
    <hr width=92% color="black" style="margin-top:336px; margin-left:33px; position:absolute; z-index:1; height:0.2px">
    <hr width=92% color="black" style="margin-top:416px; margin-left:33px; position:absolute; z-index:1; height:0.2px">
    <hr width=92% color="black" style="margin-top:436px; margin-left:33px; position:absolute; z-index:1; height:0.2px">
    <hr width=92% color="black" style="margin-top:476px; margin-left:33px; position:absolute; z-index:1; height:0.2px">
    <hr width=92% color="black" style="margin-top:536px; margin-left:33px; position:absolute; z-index:1; height:0.2px">
    <hr width=88.9% color="black" style="margin-top:556px; margin-left:58px; position:absolute; z-index:1; height:0.2px">
    <hr width=92% color="black" style="margin-top:596px; margin-left:33px; position:absolute; z-index:1; height:0.2px">
    <hr width=92% color="black" style="margin-top:656px; margin-left:33px; position:absolute; z-index:1; height:0.2px">

    <hr width=96.1% color="black" style="margin-top:95%; margin-left:16px; position:absolute; z-index:1; height:0.2px">


    <p style="text-align:justify;margin-top:178px;margin-left:42px; width:75%; position:absolute;z-index:5;font-size:12px">1
    <p style="text-align:justify;margin-top:178px;margin-left:62px; width:75%; position:absolute;z-index:5; font-size:12px">Pejabat yang memberi perintah
    <p style="text-align:justify;margin-top:178px;margin-left:380px; width:75%; position:absolute;z-index:5; font-size:12px">Kuasa Pengguna Anggaran Balai Penelitian Agroklimat dan Hidrologi
    <p style="text-align:justify;margin-top:203px;margin-left:42px; width:75%; position:absolute;z-index:5;font-size:12px">2
    <p style="text-align:justify;margin-top:203px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">Nama pegawai yang diperintah
    <p style="text-align:justify;margin-top:203px;margin-left:380px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo $p->nama_pegawai ?>
    <p style="text-align:justify;margin-top:223px;margin-left:380px; width:75%; position:absolute;z-index:5; font-size:12px"><?php $nip = $p->nip;
                                                                                                                                if ($nip[0] == 'H') {
                                                                                                                                    echo ' ';
                                                                                                                                } else {
                                                                                                                                    echo 'NIP. ' . $nip;
                                                                                                                                } ?>
    <p style="text-align:justify;margin-top:243px;margin-left:42px; width:75%; position:absolute;z-index:5;font-size:12px">3
    <p style="text-align:justify;margin-top:243px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">a.
    <p style="text-align:justify;margin-top:243px;margin-left:80px; width:75%; position:absolute;z-index:5;font-size:12px">Pangkat dan golongan ruang gaji
    <p style="text-align:justify;margin-top:243px;margin-left:355px; width:75%; position:absolute;z-index:5;font-size:12px">a.
    <p style="text-align:justify;margin-top:243px;margin-left:380px; width:75%; position:absolute;z-index:5; font-size:12px"><?php $golongan  = $p->golongan;
                                                                                                                                if ($golongan != 'Tidak Ada') {
                                                                                                                                    if (strlen($golongan) == 4) {
                                                                                                                                        echo substr($golongan, 0, 2);
                                                                                                                                    } else {
                                                                                                                                        echo substr($golongan, 0, 3);
                                                                                                                                    }
                                                                                                                                } else {
                                                                                                                                    echo $golongan;
                                                                                                                                } ?>
    <p style="text-align:justify;margin-top:263px;margin-left:80px; width:75%; position:absolute;z-index:5;font-size:12px">menurut PP. No. 11 Thn. 2003
    <p style="text-align:justify;margin-top:283px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">b.
    <p style="text-align:justify;margin-top:283px;margin-left:80px; width:75%; position:absolute;z-index:5;font-size:12px">Jabatan
    <p style="text-align:justify;margin-top:283px;margin-left:355px; width:75%; position:absolute;z-index:5;font-size:12px">b.
    <p style="text-align:justify;margin-top:283px;margin-left:380px; width:75%; position:absolute;z-index:5;font-size:12px"><?php echo $p->jabatan ?>
    <p style="text-align:justify;margin-top:303px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">c.
    <p style="text-align:justify;margin-top:303px;margin-left:80px; width:75%; position:absolute;z-index:5;font-size:12px">Tingkat menurut peraturan perjalanan dinas
    <p style="text-align:justify;margin-top:303px;margin-left:355px; width:75%; position:absolute;z-index:5;font-size:12px">c.
    <p style="text-align:justify;margin-top:303px;margin-left:380px; width:75%; position:absolute;z-index:5;font-size:12px"><?php $golongan  = $p->golongan;
                                                                                                                            if ($golongan != 'Tidak Ada') {
                                                                                                                                if (strlen($golongan) == 4) {
                                                                                                                                    echo substr($golongan, 3, 4);
                                                                                                                                } else {
                                                                                                                                    echo substr($golongan, 4, 5);
                                                                                                                                }
                                                                                                                            } else {
                                                                                                                                echo $golongan;
                                                                                                                            } ?>
    <p style="text-align:justify;margin-top:323px;margin-left:42px; width:75%; position:absolute;z-index:5;font-size:12px">4
    <p style="text-align:justify;margin-top:323px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">Maksud perjalanan dinas
    <p style="text-align:justify;margin-top:323px;margin-left:380px; width:75%; position:absolute;z-index:5; font-size:12px; width:45%;line-height:20px"><?php echo $p->dalam_rangka ?>
    <p style="text-align:justify;margin-top:403px;margin-left:42px; width:75%; position:absolute;z-index:5;font-size:12px">5
    <p style="text-align:justify;margin-top:403px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">Alat angkutan yang digunakan
    <p style="text-align:justify;margin-top:403px;margin-left:380px; width:75%; position:absolute;z-index:5;font-size:12px"><?php echo 'Kendaraan ' . $p->kendaraan ?>
    <p style="text-align:justify;margin-top:423px;margin-left:42px; width:75%; position:absolute;z-index:5;font-size:12px">6
    <p style="text-align:justify;margin-top:423px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">a.
    <p style="text-align:justify;margin-top:423px;margin-left:80px; width:75%; position:absolute;z-index:5;font-size:12px">Tempat berangkat
    <p style="text-align:justify;margin-top:423px;margin-left:355px; width:75%; position:absolute;z-index:5;font-size:12px">a.
    <p style="text-align:justify;margin-top:423px;margin-left:380px; width:75%; position:absolute;z-index:5;font-size:12px"><?php echo $p->kota . ', ' . $p->nama_provinsi ?>
    <p style="text-align:justify;margin-top:443px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">b.
    <p style="text-align:justify;margin-top:443px;margin-left:80px; width:75%; position:absolute;z-index:5;font-size:12px">Tempat tujuan
    <p style="text-align:justify;margin-top:443px;margin-left:355px; width:75%; position:absolute;z-index:5;font-size:12px">b.
    <p style="text-align:justify;margin-top:443px;margin-left:380px; width:75%; position:absolute;z-index:5;font-size:12px"><?php echo $p->kota_tujuan . ', ' . $p->provinsi_tujuan ?>

    <p style="text-align:justify;margin-top:463px;margin-left:42px; width:75%; position:absolute;z-index:5;font-size:12px">7
    <p style="text-align:justify;margin-top:463px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">a.
    <p style="text-align:justify;margin-top:463px;margin-left:80px; width:75%; position:absolute;z-index:5;font-size:12px">Lamanya perjalanan dinas
    <p style="text-align:justify;margin-top:463px;margin-left:355px; width:75%; position:absolute;z-index:5;font-size:12px">a.
    <p style="text-align:justify;margin-top:463px;margin-left:380px; width:75%; position:absolute;z-index:5;font-size:12px"><?php echo $p->lama_perjalanan . ' ' . '(' . Terbilang($p->lama_perjalanan) . ')' . ' ' . 'Hari' ?>
    <p style="text-align:justify;margin-top:483px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">b.
    <p style="text-align:justify;margin-top:483px;margin-left:80px; width:75%; position:absolute;z-index:5;font-size:12px">Tanggal berangkat
    <p style="text-align:justify;margin-top:483px;margin-left:355px; width:75%; position:absolute;z-index:5;font-size:12px">b.
    <p style="text-align:justify;margin-top:483px;margin-left:380px; width:75%; position:absolute;z-index:5;font-size:12px"><?php echo tanggal_indonesia($p->tanggal_berangkat) ?>
    <p style="text-align:justify;margin-top:503px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">c.
    <p style="text-align:justify;margin-top:503px;margin-left:80px; width:75%; position:absolute;z-index:5;font-size:12px">Tanggal harus kembali/tiba
    <p style="text-align:justify;margin-top:503px;margin-left:355px; width:75%; position:absolute;z-index:5;font-size:12px">c.
    <p style="text-align:justify;margin-top:503px;margin-left:380px; width:75%; position:absolute;z-index:5;font-size:12px"><?php echo tanggal_indonesia($p->tanggal_kembali) ?>
    <p style="text-align:justify;margin-top:523px;margin-left:42px; width:75%; position:absolute;z-index:5;font-size:12px">8
    <p style="text-align:justify;margin-top:523px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">Pengikut: Nama **)
    <p style="text-align:justify;margin-top:523px;margin-left:280px; width:75%; position:absolute;z-index:5;font-size:12px">Umur
    <p style="text-align:justify;margin-top:523px;margin-left:470px; width:75%; position:absolute;z-index:5;font-size:12px">Hubungan keluarga/ keterangan
    <p style="text-align:justify;margin-top:543px;margin-left:42px; width:75%; position:absolute;z-index:5;font-size:12px">
    <p style="text-align:justify;margin-top:583px;margin-left:42px; width:75%; position:absolute;z-index:5;font-size:12px">9
    <p style="text-align:justify;margin-top:583px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">Pembebanan anggaran
    <p style="text-align:justify;margin-top:603px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">a.
    <p style="text-align:justify;margin-top:603px;margin-left:80px; width:75%; position:absolute;z-index:5;font-size:12px">Nama instansi/ satker dan kode
    <p style="text-align:justify;margin-top:603px;margin-left:355px; width:75%; position:absolute;z-index:5;font-size:12px">a.
    <p style="text-align:justify;margin-top:603px;margin-left:380px; width:75%; position:absolute;z-index:5;font-size:12px"><?php echo $header->eslon_tiga_2 . ' ' . '(' . $header->kode_balai . ')' ?>
    <p style="text-align:justify;margin-top:623px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">b.
    <p style="text-align:justify;margin-top:623px;margin-left:80px; width:75%; position:absolute;z-index:5;font-size:12px">Mata anggaran
    <p style="text-align:justify;margin-top:623px;margin-left:355px; width:75%; position:absolute;z-index:5;font-size:12px">b.
    <p style="text-align:justify;margin-top:623px;margin-left:380px; width:75%; position:absolute;z-index:5;font-size:12px"><?php echo substr($p->kode_mak, 4, 6) ?>

    <p style="text-align:justify;margin-top:653px;margin-left:39px; width:75%; position:absolute;z-index:5;font-size:12px">10
    <p style="text-align:justify;margin-top:653px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px"><b>Keterangan lain-lain</b>
    <p style="text-align:justify;margin-top:673px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">Tembusan disampaikan kepada:
    <p style="text-align:justify;margin-top:693px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">1. ..........................................................
    <p style="text-align:justify;margin-top:713px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">2. ..........................................................
    <p style="text-align:justify;margin-top:733px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">3. Pejabat yang berwenang menerbitkan SPPD
    <p style="text-align:justify;margin-top:783px;margin-left:62px; width:75%; position:absolute;z-index:5;font-size:12px">**) Hanya untuk perjalanan pindah


    <p style="text-align:left;margin-top:673px;margin-left:500px;width:80%;position:absolute;z-index:1;font-size:12px">Dikeluarkan di
    <p style="text-align:left;margin-top:693px;margin-left:500px;width:80%;position:absolute;z-index:1;font-size:12px">Pada tanggal
    <p style="text-align:left;margin-top:713px;margin-left:500px;width:80%;position:absolute;z-index:1;font-size:12px"><b>An. Kuasa Pengguna Anggaran</b>
    <p style="text-align:left;margin-top:733px;margin-left:500px;width:80%;position:absolute;z-index:2;font-size:12px"><b>Pejabat Pembuat Komitmen</b>
    <p style="text-align:left;margin-top:850px;margin-left:500px;width:92%;position:absolute;z-index:3;font-size:12px"><b><?php echo $p->nama_ppk ?></b>
    <p style="text-align:left;margin-top:870px;margin-left:500px;width:92%;position:absolute;z-index:4;font-size:12px"><b>NIP.<?php echo ' ' . $p->nip_ppk ?></b>

        <?php
        function tanggal_indonesia($tanggal)
        {

            $bulan = array(
                1 =>       'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );

            $var = explode('-', $tanggal);

            return $var[2] . ' ' . $bulan[(int)$var[1]] . ' ' . $var[0];
            // var 0 = tanggal
            // var 1 = bulan
            // var 2 = tahun
        } ?>
        <?php
        function Terbilang($nilai)
        {
            $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
            if ($nilai == 0) {
                return "Kosong";
            } elseif ($nilai < 12 & $nilai != 0) {
                return "" . $huruf[$nilai];
            } elseif ($nilai < 20) {
                return Terbilang($nilai - 10) . " Belas ";
            } elseif ($nilai < 100) {
                return Terbilang($nilai / 10) . " Puluh " . Terbilang($nilai % 10);
            } elseif ($nilai < 200) {
                return " Seratus " . Terbilang($nilai - 100);
            } elseif ($nilai < 1000) {
                return Terbilang($nilai / 100) . " Ratus " . Terbilang($nilai % 100);
            } elseif ($nilai < 2000) {
                return " Seribu " . Terbilang($nilai - 1000);
            } elseif ($nilai < 1000000) {
                return Terbilang($nilai / 1000) . " Ribu " . Terbilang($nilai % 1000);
            } elseif ($nilai < 1000000000) {
                return Terbilang($nilai / 1000000) . " Juta " . Terbilang($nilai % 1000000);
            } elseif ($nilai < 1000000000000) {
                return Terbilang($nilai / 1000000000) . " Milyar " . Terbilang($nilai % 1000000000);
            } elseif ($nilai < 100000000000000) {
                return Terbilang($nilai / 1000000000000) . " Trilyun " . Terbilang($nilai % 1000000000000);
            } elseif ($nilai <= 100000000000000) {
                return "Maaf Tidak Dapat di Prose Karena Jumlah nilai Terlalu Besar ";
            }
        }
        ?>

</body>

</html>