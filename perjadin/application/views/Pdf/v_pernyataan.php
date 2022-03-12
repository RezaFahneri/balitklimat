<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Surat Pernyataan</title>
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/a4.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            size: A4
        }
    </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="main-page">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <!-- Write HTML just like a web page -->
    <p style="text-align:center"><?php echo $header->nama_kementerian ?></p><br>
    <h4 style="text-align:center;margin-top:-30px"><b><?php echo $header->eslon_tiga ?></b></h4><br>
    <p style="text-align:center;margin-top:-30px"><?php echo $header->alamat ?></p>
    <hr color="black" style="margin-top:-10px; height:0.1px;width:90%">
    <hr color="black" style="margin-top:-14px; height:0.1px;width:90%"><br><br><br>
    <h4 style="text-align:center;margin-top:-60px"><b>DAFTAR PENGELUARAN RIIL</b></h4>
    <?php
    $p = $isi_surat;
    ?>
    <p style="text-align:justify;margin-top:30px;margin-left:75px;width:92%">Yang bertanda tangan di bawah ini:<br>
    <p style="text-align:justify;margin-top:10px;margin-left:75px;width:92%;position:absolute;z-index:0">Nama
    <p style="text-align:justify;margin-left:150px;width:92%;;position:absolute;z-index:0">: <?php echo $p->nama_pegawai ?>
    <p style="text-align:justify;margin-top:25px;margin-left:75px;width:92%;position:absolute;z-index:0">NIP
    <p style="text-align:justify;margin-top:25px;margin-left:150px;width:92%;position:absolute;z-index:0">: <?php echo $p->nip ?>
    <p style="text-align:justify;margin-top:45px;margin-left:75px;width:92%;position:absolute;z-index:0">Jabatan
    <p style="text-align:justify;margin-top:45px;margin-left:150px;width:92%;position:absolute;z-index:0">: <?php echo $p->jabatan ?><br>
    <p style="text-align:justify;margin-top:85px;margin-left:75px;width:92%;position:absolute;z-index:0">Berdasarkan Surat Perintah Perjalanan Dinas (SPPD) pada :
    <p style="text-align:justify;margin-top:110px;margin-left:75px;width:92%;position:absolute;z-index:0">Tanggal
    <p style="text-align:justify;margin-top:110px;margin-left:150px;width:92%;position:absolute;z-index:0">:
    <p style="text-align:justify;margin-top:135px;margin-left:75px;width:92%;position:absolute;z-index:0">Nomor
    <p style="text-align:justify;margin-top:135px;margin-left:150px;width:92%;position:absolute;z-index:0">: <?php echo $p->no_sppd . $p->no_sppd2 ?><br>
    <p style="text-align:justify;margin-top:180px;margin-left:75px;width:75%; position:absolute;z-index:5">1.
    <p style="text-align:justify;margin-top:180px;margin-left:100px;width:80%; position:absolute;z-index:5">Biaya transport pegawai dan / atau biaya penginapan di bawah ini yang tidak dapat diperoleh bukti-bukti
        pengeluarannya meliputi:
    <table id="table" class="table table-bordered table-sm" style="width:92%;margin-left:100px;color:black;margin-top:260px;">
        <!-- <table  id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'> -->
        <thead>
            <tr>
                <th style="width:7%;text-align:center">No</th>
                <th style="text-align:center">Uraian</th>
                <th style="width:25%;text-align:center">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align:center"></td>
                <td style="height:90px"></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align:center"></td>
                <td style="text-align:center"><b>Jumlah</b></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <p style="text-align:justify;margin-top:25px;margin-left:75px;width:75%; position:absolute;z-index:5">2.
    <p style="text-align:justify;margin-left:100px;width:80%; position:absolute;z-index:5">Jumlah uang tersebut pada angka 1 di atas benar-benar dikeluarkan untuk pelaksanaan perjalanan dinas
        dimaksud dan apabila di kemudian hari terdapat kelebihan atas pembayaran, kami bersedia untuk menyetorkan
        kelebihan tersebut ke Kas Negara.
    <p style="text-align:justify;margin-top:95px;margin-left:100px;width:80%; position:absolute;z-index:5">Demikian pernyataan ini kami buat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.
    <p style="text-align:left;margin-top:170px;margin-left:490px;width:92%;position:absolute;z-index:0">................, .....................................
    <p style="text-align:left;margin-top:190px;margin-left:490px;width:92%;position:absolute;z-index:1">Pejabat Negara/Pegawai Negeri
    <p style="text-align:left;margin-top:210px;margin-left:490px;width:92%;position:absolute;z-index:2">Yang melakukan Perjalanan Dinas,
    <p style="text-align:left;margin-top:320px;margin-left:490px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_pegawai ?></b>
    <p style="text-align:left;margin-top:350px;margin-left:490px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip ?>

    <p style="text-align:left;margin-top:170px;margin-left:100px;width:92%;position:absolute;z-index:0">Mengetahui/Menyetujui:
    <p style="text-align:left;margin-top:190px;margin-left:100px;width:92%;position:absolute;z-index:1">An. Kuasa Pengguna Anggaran
    <p style="text-align:left;margin-top:210px;margin-left:100px;width:92%;position:absolute;z-index:2">Pejabat Pembuat Komitmen
    <p style="text-align:left;margin-top:320px;margin-left:100px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_ppk ?>
    <p style="text-align:left;margin-top:350px;margin-left:100px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip_ppk ?>
   


</body>

</html>