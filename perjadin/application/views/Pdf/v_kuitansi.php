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
    <p style="text-align:center"><b><?php echo $header->nama_kementerian ?></b></p><br>
    <p style="text-align:center;margin-top:-40px"><b><?php echo $header->eslon_satu ?></b></p><br>
    <h4 style="text-align:center;margin-top:-40px"><b><?php echo $header->eslon_tiga ?></b></h4>
    <div>
        <hr style="margin-top:-17px" width=56% color="black" height=1px>
    </div>
    <div>
        <p style="text-align:center;margin-top:-10px"><b>RINCIAN BIAYA PERJALANAN DINAS</b></p>
    </div>
    <?php
    $p = $isi_surat;
    ?>
    <p style="text-align:justify;margin-top:10px;margin-left:75px;width:92%;position:absolute;z-index:0">Lampiran SPPD Nomor
    <p style="text-align:justify;margin-left:230px;width:92%;;position:absolute;z-index:0">: <?php echo $p->no_sppd . $p->no_sppd2 ?>
    <p style="text-align:justify;margin-top:25px;margin-left:75px;width:92%;position:absolute;z-index:0">Tanggal
    <p style="text-align:justify;margin-top:25px;margin-left:230px;width:92%;position:absolute;z-index:0">:
    <table id="table" class="table table-bordered table-sm" style="width:92%;margin-left:75px;color:black;margin-top:70px;">
        <!-- <table  id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'> -->
        <thead>
            <tr>
                <th style="width:7%;text-align:center">NO</th>
                <th style="text-align:center">RINCIAN BIAYA</th>
                <th style="width:15%;text-align:center">JUMLAH</th>
                <th style="width:15%;text-align:center">KET</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align:center">
                    <label style="margin-top:-15px"><b>1.<b></label><br><br>
                    <label><b>2.</b></label>
                </td>

                <td>
                <label><b>Uang Harian</b></label><br>
                <label>a. Pegawai</label><br>
                <label> <b>Transportasi</b></label>
                </td>

                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align:center"></td>
                <td style="text-align:center"><b>Jumlah</b></td>
                <td></td>
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