<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Capsah-PNS Halaman 2</title>
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
    <div  style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 736px;
            position:absolute;
            left: 50%;
            width:120%;
            margin-top:-120px"></div>
   
    <hr width=120% color="black" style="margin-top:33%; margin-left:-50px; position:absolute; z-index:1; height:0.2px">
    <hr width=120% color="black" style="margin-top:66%; margin-left:-50px; position:absolute; z-index:1; height:0.2px">
    <hr width=120% color="black" style="margin-top:73%; margin-left:-50px; position:absolute; z-index:1; height:0.2px">


    <p style="text-align:justify;margin-top:0px;margin-left:10px; width:75%; position:absolute;z-index:5">IV. <br>
    <p style="text-align:justify;margin-top:0px;margin-left:40px;width:80%;position:absolute; z-index:0">Tiba di
    <p style="text-align:justify;margin-top:0px;margin-left:140px;width:80%;position:absolute; z-index:0">:
    <p style="text-align:justify;margin-top:20px;margin-left:40px;width:80%;position:absolute; z-index:0">Pada Tanggal
    <p style="text-align:justify;margin-top:20px;margin-left:140px;width:80%;position:absolute; z-index:0">:
    <p style="text-align:justify;margin-top:40px;margin-left:40px;width:80%;position:absolute; z-index:0">Kepala
    <p style="text-align:justify;margin-top:40px;margin-left:140px;width:80%;position:absolute; z-index:0">:
    <p style="text-align:left;margin-top:270px;margin-left:140px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_pegawai ?></b>
    <p style="text-align:left;margin-top:300px;margin-left:140px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip ?>

    <p style="text-align:justify;margin-top:0px;margin-left:420px;width:80%;position:absolute; z-index:0">Berangkat dari
    <p style="text-align:justify;margin-top:0px;margin-left:520px;width:80%;position:absolute; z-index:0">:
    <p style="text-align:justify;margin-top:20px;margin-left:420px;width:80%;position:absolute; z-index:0">Pada Tanggal
    <p style="text-align:justify;margin-top:20px;margin-left:520px;width:80%;position:absolute; z-index:0">:
    <p style="text-align:justify;margin-top:40px;margin-left:420px;width:80%;position:absolute; z-index:0">Ke
    <p style="text-align:justify;margin-top:40px;margin-left:520px;width:80%;position:absolute; z-index:0">:
    <p style="text-align:justify;margin-top:60px;margin-left:420px;width:80%;position:absolute; z-index:0">Kepala
    <p style="text-align:justify;margin-top:60px;margin-left:520px;width:80%;position:absolute; z-index:0">:

    <p style="text-align:left;margin-top:270px;margin-left:520px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_pegawai ?>
    <p style="text-align:left;margin-top:300px;margin-left:520px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip ?>

    <p style="text-align:justify;margin-top:360px;margin-left:10px; width:75%; position:absolute;z-index:5">V. <br>
    <p style="text-align:justify;margin-top:360px;margin-left:40px;width:80%;position:absolute; z-index:0">Tiba kembali di
    <p style="text-align:justify;margin-top:360px;margin-left:140px;width:80%;position:absolute; z-index:0">:
    <p style="text-align:justify;margin-top:375px;margin-left:150px;width:80%;position:absolute; z-index:0; font-size:10px;letter-spacing:0.1px">(tempat kedudukan)
    <p style="text-align:justify;margin-top:400px;margin-left:40px;width:80%;position:absolute; z-index:0">Pada Tanggal
    <p style="text-align:justify;margin-top:400px;margin-left:140px;width:80%;position:absolute; z-index:0">:
    <p style="text-align:left;margin-top:460px;margin-left:140px;width:80%;position:absolute;z-index:1">An. Kuasa Pengguna Anggaran
    <p style="text-align:left;margin-top:480px;margin-left:140px;width:80%;position:absolute;z-index:2">Pejabat Pembuat Komitmen
    <p style="text-align:left;margin-top:620px;margin-left:140px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_ppk ?></b>
    <p style="text-align:left;margin-top:650px;margin-left:140px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip_ppk ?>

    <p style="text-align:left;margin-top:360px;margin-left:420px;width:40%;position:absolute; z-index:0;font-size:11px">Telah diperiksa, dengan keterangan bahwa perjalanan tersebut di atas benar dilakukan atas
        perintahnya semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya
    <p style="text-align:left;margin-top:460px;margin-left:520px;width:80%;position:absolute;z-index:1">An. Kuasa Pengguna Anggaran
    <p style="text-align:left;margin-top:480px;margin-left:520px;width:80%;position:absolute;z-index:2">Pejabat Pembuat Komitmen
    <p style="text-align:left;margin-top:620px;margin-left:520px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_ppk ?></b>
    <p style="text-align:left;margin-top:650px;margin-left:520px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip_ppk ?>

    <p style="text-align:justify;margin-top:710px;margin-left:10px; width:75%; position:absolute;z-index:5">VI. <br>
    <p style="text-align:justify;margin-top:710px;margin-left:40px;width:80%;position:absolute; z-index:0">CATATAN LAIN-LAIN
    <p style="text-align:justify;margin-top:790px;margin-left:10px; width:75%; position:absolute;z-index:5">VII. <br>
    <p style="text-align:justify;margin-top:790px;margin-left:40px;width:80%;position:absolute; z-index:0">PERHATIAN
    <p style="text-align:justify;margin-top:825px;margin-left:40px;width:84%;position:absolute; z-index:0;font-size:11px">Pejabat yang berwenang menerbitkan SPPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan tanggal
        berangkat/tiba serta bendaharawan bertanggung jawab berdasarkan peraturan-peraturan Keuangan Negara, apabila Negara menderita
        rugi akibat kesalahan, kelalaian dan kealpaannya. (Angka 8, lampiran Surat Edaran Menteri Keuangan tanggal 23 April 1996 Nomor: SE67/A/622/0496).


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