<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SPPD Halaman 2</title>
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/a4.css">
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="main-page">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->

    <!-- Write HTML just like a web page -->
    <?php
    $p = $isi_surat;
    ?>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 1089px;
            position:absolute;
            left: 2%;
            margin-top:-96px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 1005px;
            position:absolute;
            left: 50%;
            margin-top:-96px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 1089px;
            position:absolute;
            left: 98%;
            margin-top:-96px"></div>

    <hr width=96.1% color="black" style="margin-top:-2%; margin-left:16px; position:absolute; z-index:1; height:0.2px">
    <hr width=96.1% color="black" style="margin-top:18%; margin-left:16px; position:absolute; z-index:1; height:0.2px">
    <hr width=96.1% color="black" style="margin-top:36%; margin-left:16px; position:absolute; z-index:1; height:0.2px">
    <hr width=96.1% color="black" style="margin-top:54%; margin-left:16px; position:absolute; z-index:1; height:0.2px">
    <hr width=96.1% color="black" style="margin-top:72%; margin-left:16px; position:absolute; z-index:1; height:0.2px">
    <hr width=96.1% color="black" style="margin-top:92.2%; margin-left:16px; position:absolute; z-index:1; height:0.2px">
    <hr width=96.1% color="black" style="margin-top:94,2%; margin-left:16px; position:absolute; z-index:1; height:0.2px">
    <hr width=96.1% color="black" style="margin-top:102%; margin-left:16px; position:absolute; z-index:1; height:0.2px">


    <p style="text-align:justify;margin-top:-20px;margin-left:420px;width:92%;position:absolute; z-index:0;font-size:12px">Berangkat dari
    <p style="text-align:justify;margin-top:-20px;margin-left:520px;width:92%;position:absolute; z-index:0;font-size:12px">: <?php echo $p->kota . ', ' . $p->nama_provinsi ?>
    <p style="text-align:justify;margin-top:0px;margin-left:420px;width:92%;position:absolute; z-index:0;font-size:12px">Pada Tanggal
    <p style="text-align:justify;margin-top:0px;margin-left:520px;width:92%;position:absolute; z-index:0;font-size:12px">: <?php echo tanggal_indonesia($p->tanggal_berangkat) ?>
    <p style="text-align:justify;margin-top:20px;margin-left:420px;width:92%;position:absolute; z-index:0;font-size:12px">ke
    <p style="text-align:justify;margin-top:20px;margin-left:520px;width:92%;position:absolute; z-index:0;font-size:12px">: <?php echo $p->kota_tujuan . ', ' . $p->provinsi_tujuan ?>

    <p style="text-align:left;margin-top:40px;margin-left:520px;width:92%;position:absolute;z-index:1; font-size:12px">Ka. Sub Bag Tata Usaha
    <p style="text-align:left;margin-top:130px;margin-left:520px;width:92%;position:absolute;z-index:3; font-size:12px"><?php echo $p->nama_kasub ?>
    <p style="text-align:left;margin-top:150px;margin-left:520px;width:92%;position:absolute;z-index:4; font-size:12px">NIP.<?php echo ' ' . $p->nip_kasub ?>

    <p style="text-align:justify;margin-top:200px;margin-left:20px; width:75%; position:absolute;z-index:5; font-size:12px">II. <br>
    <p style="text-align:justify;margin-top:200px;margin-left:42px;width:80%;position:absolute; z-index:0;font-size:12px">Tiba di
    <p style="text-align:justify;margin-top:200px;margin-left:150px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:220px;margin-left:42px;width:80%;position:absolute; z-index:0;font-size:12px">Pada Tanggal
    <p style="text-align:justify;margin-top:220px;margin-left:150px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:240px;margin-left:42px;width:80%;position:absolute; z-index:0;font-size:12px">Kepala
    <p style="text-align:justify;margin-top:240px;margin-left:150px;width:80%;position:absolute; z-index:0;font-size:12px">:

    <p style="text-align:justify;margin-top:200px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Berangkat dari
    <p style="text-align:justify;margin-top:200px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:220px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Pada Tanggal
    <p style="text-align:justify;margin-top:220px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:240px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Ke
    <p style="text-align:justify;margin-top:240px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:260px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Kepala
    <p style="text-align:justify;margin-top:260px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:

    <p style="text-align:justify;margin-top:390px;margin-left:20px; width:75%; position:absolute;z-index:5; font-size:12px">III. <br>
    <p style="text-align:justify;margin-top:390px;margin-left:42px;width:80%;position:absolute; z-index:0;font-size:12px">Tiba di
    <p style="text-align:justify;margin-top:390px;margin-left:150px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:410px;margin-left:42px;width:80%;position:absolute; z-index:0;font-size:12px">Pada Tanggal
    <p style="text-align:justify;margin-top:410px;margin-left:150px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:430px;margin-left:42px;width:80%;position:absolute; z-index:0;font-size:12px">Kepala
    <p style="text-align:justify;margin-top:430px;margin-left:150px;width:80%;position:absolute; z-index:0;font-size:12px">:

    <p style="text-align:justify;margin-top:390px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Berangkat dari
    <p style="text-align:justify;margin-top:390px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:410px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Pada Tanggal
    <p style="text-align:justify;margin-top:410px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:430px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Ke
    <p style="text-align:justify;margin-top:430px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:450px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Kepala
    <p style="text-align:justify;margin-top:450px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:

    <p style="text-align:justify;margin-top:580px;margin-left:20px; width:75%; position:absolute;z-index:5; font-size:12px">IV. <br>
    <p style="text-align:justify;margin-top:580px;margin-left:42px;width:80%;position:absolute; z-index:0;font-size:12px">Tiba di
    <p style="text-align:justify;margin-top:580px;margin-left:150px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:600px;margin-left:42px;width:80%;position:absolute; z-index:0;font-size:12px">Pada Tanggal
    <p style="text-align:justify;margin-top:600px;margin-left:150px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:620px;margin-left:42px;width:80%;position:absolute; z-index:0;font-size:12px">Kepala
    <p style="text-align:justify;margin-top:620px;margin-left:150px;width:80%;position:absolute; z-index:0;font-size:12px">:

    <p style="text-align:justify;margin-top:580px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Berangkat dari
    <p style="text-align:justify;margin-top:580px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:600px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Pada Tanggal
    <p style="text-align:justify;margin-top:600px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:620px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Ke
    <p style="text-align:justify;margin-top:620px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:640px;margin-left:420px;width:80%;position:absolute; z-index:0;font-size:12px">Kepala
    <p style="text-align:justify;margin-top:640px;margin-left:520px;width:80%;position:absolute; z-index:0;font-size:12px">:

    <p style="text-align:justify;margin-top:765px;margin-left:20px; width:75%; position:absolute;z-index:5; font-size:12px">V. <br>
    <p style="text-align:justify;margin-top:765px;margin-left:42px;width:80%;position:absolute; z-index:0;font-size:12px">Tiba kembali di
    <p style="text-align:justify;margin-top:765px;margin-left:150px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:justify;margin-top:775px;margin-left:160px;width:80%;position:absolute; z-index:0; font-size:9px;letter-spacing:0.1px">(tempat kedudukan)
    <p style="text-align:justify;margin-top:800px;margin-left:42px;width:80%;position:absolute; z-index:0;font-size:12px">Pada Tanggal
    <p style="text-align:justify;margin-top:800px;margin-left:150px;width:80%;position:absolute; z-index:0;font-size:12px">:
    <p style="text-align:left;margin-top:820px;margin-left:150px;width:92%;position:absolute;z-index:1; font-size:12px">Ka. Sub Bag Tata Usaha
    <p style="text-align:left;margin-top:910px;margin-left:150px;width:92%;position:absolute;z-index:3; font-size:12px"><?php echo $p->nama_kasub ?>
    <p style="text-align:left;margin-top:930px;margin-left:150px;width:92%;position:absolute;z-index:4; font-size:12px">NIP.<?php echo ' ' . $p->nip_kasub ?>

    <p style="line-height:12px;text-align:left;margin-top:765px;margin-left:420px;width:40%;position:absolute; z-index:0;font-size:10px">Telah diperiksa, dengan keterangan bahwa perjalanan tersebut di atas benar dilakukan atas perintahnya semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya
    <p style="text-align:left;margin-top:820px;margin-left:520px;width:80%;position:absolute;z-index:1; font-size:12px">An. Kuasa Pengguna Anggaran
    <p style="text-align:left;margin-top:840px;margin-left:520px;width:80%;position:absolute;z-index:2; font-size:12px">Pejabat Pembuat Komitmen
    <p style="text-align:left;margin-top:910px;margin-left:520px;width:92%;position:absolute;z-index:3; font-size:12px"><?php echo $p->nama_ppk ?></b>
    <p style="text-align:left;margin-top:930px;margin-left:520px;width:92%;position:absolute;z-index:4; font-size:12px">NIP.<?php echo ' ' . $p->nip_ppk ?>

    <p style="text-align:justify;margin-top:953px;margin-left:20px; width:75%; position:absolute;z-index:5; font-size:12px">VI.
    <p style="text-align:justify;margin-top:953px;margin-left:42px;width:80%;position:absolute; z-index:0; font-size:12px">CATATAN LAIN-LAIN

    <p style="text-align:justify;margin-top:978px;margin-left:20px; width:75%; position:absolute;z-index:5; font-size:12px">VII.
    <p style="text-align:justify;margin-top:978px;margin-left:42px;width:80%;position:absolute; z-index:0; font-size:12px">PERHATIAN
    <p style="line-height:12px; text-align:justify;margin-top:1008px;margin-left:42px;width:86%;position:absolute; z-index:0;font-size:10px">Pejabat yang berwenang menerbitkan SPPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan tanggal
        berangkat/tiba serta bendaharawan bertanggung jawab berdasarkan peraturan-peraturan Keuangan Negara, apabila Negara menderita
        rugi akibat kesalahan, kelalaian dan kealpaannya. (Angka 8, lampiran Surat Edaran Menteri Keuangan tanggal 23 April 1996 Nomor: SE-67/A/622/0496).
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

</body>

</html>