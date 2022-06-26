<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Surat Tugas TTD Kepala Balai</title>
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/a4.css">
</head>


<body class="main-page">
    <p style="text-align:center"><?php echo $header->nama_kementerian ?></p><br>
    <h4 style="text-align:center;margin-top:-10px"><b><?php echo $header->eslon_tiga ?></b></h4><br>
    <p style="text-align:center;margin-top:-25px"><?php echo $header->alamat ?></p>
    <hr color="black" style="margin-top:-10px; height:0.1px;width:90%">
    <hr color="black" style="margin-top:-14px; height:0.1px;width:90%"><br>
    <h4 style="text-align:center;margin-top:-20px;letter-spacing:3px"><b>SURAT TUGAS</b></h4>
    <hr width=23% color="black" style="margin-top:-7px; height:1px">
    <hr width=23% color="black" style="margin-top:-17px; height:1px">
    <?php
    foreach ($data_anggota_perjadin as $p) {
    ?>
          <p style="margin-left:290px;margin-top:-15px;position:absolute;z-index:0">Nomor : 
        <p style="text-align:left;margin-top:0px;margin-left:400px;width:92%;position:absolute;z-index:0"><?php echo $p->no_surat_tugas ?></p><br><br><br>
        <p style="text-align:left;margin-top:600px;margin-left:420px;width:92%;position:absolute;z-index:0">Dikeluarkan di
        <p style="text-align:left;margin-top:600px;margin-left:520px;width:92%;position:absolute;z-index:0">:
        <p style="text-align:left;margin-top:620px;margin-left:420px;width:92%;position:absolute;z-index:1">Pada tanggal
        <p style="text-align:left;margin-top:620px;margin-left:520px;width:92%;position:absolute;z-index:0">:
        <p style="text-align:left;margin-top:640px;margin-left:420px;width:92%;position:absolute;z-index:2"><b>Kepala Balai,</b>
        <p style="text-align:left;margin-top:750px;margin-left:420px;width:92%;position:absolute;z-index:3"><b><?php echo $p->nama_kb ?></b>
        <p style="text-align:left;margin-top:780px;margin-left:420px;width:92%;position:absolute;z-index:4"><b>NIP.<?php echo ' ' . $p->nip_kb ?></b>
        <p style="text-align:justify;margin-top:-15px;margin-left:75px;width:80%">Yang bertanda tangan di bawah ini Kepala Balai Penelitian Agroklimat dan Hidrologi,
            memberi TUGAS untuk melaksanakan perjalanan dinas kepada :<br><br>
        
        <table id="table" class="table table-bordered table-sm" style="width:90%;margin-left:74px;color:black">
            <thead>
                <tr>
                    <th style="width:7%;text-align:center">No</th>
                    <th style="text-align:center">Nama Pegawai</th>
                    <th style="text-align:center;width:10%">Gol</th>
                    <th style="text-align:center">Nomor SPPD</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($isi_surat as $j) {
                ?>
                    <tr>
                        <td style="text-align:center"><?php echo $no++ ?></td>
                        <td><?php echo $j->nama_pegawai ?></td>
                        <td style="text-align:center"><?php echo $j->golongan ?></td>
                        <td style="text-align:center"><?php echo $j->no_sppd2 ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <p style="text-align:left;margin-top:30px;margin-left:75px;width:80%;position:absolute;z-index:0">Maksud perjalanan
        <p style="text-align:left;margin-top:3px;margin-left:200px;width:70%;position:absolute;z-index:0;line-height:15px">: 
        <p style="text-align:left;margin-top:3px;margin-left:210px;width:65%;position:absolute;z-index:0;line-height:15px"> <?php echo $p->dalam_rangka ?>
        <p style="text-align:left;margin-top:60px;margin-left:75px;width:80%; position:absolute;z-index:0">Tempat tujuan
        <p style="text-align:left;margin-top:60px;margin-left:200px;width:80%;position:absolute;z-index:0">: 
        <p style="text-align:left;margin-top:60px;margin-left:210px;width:80%;position:absolute;z-index:0"><?php echo $p->kota . ', ' . $p->nama_provinsi ?>

        <p style="text-align:left;margin-top:90px;margin-left:75px;width:80%;position:absolute;z-index:0"">Lama perjalanan
        <p style="text-align:left;margin-top:90px;margin-left:200px;width:80%;position:absolute;z-index:0">:
        <p style="text-align:left;margin-top:90px;margin-left:210px;width:80%;position:absolute;z-index:0"><?php echo $p->lama_perjalanan . ' hari' ?>
       
        <p style="text-align:justify;margin-top:140px;margin-left:75px;width:80%;">Demikian surat tugas ini diberikan untuk dapat dilaksanakan sebagaimana mestinya dan
            setelah menyelesaikan tugas tersebut, bersangkutan wajib membuat dan menyampaikan
            laporan secara tertulis.
        <?php } ?>


</body>

</html>