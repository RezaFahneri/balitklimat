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
    <?php
    $p = $isi_surat;
    ?>

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <!-- Write HTML just like a web page -->
    <hr width=30% color="black" style="margin-top:5px; margin-left:483px; position:absolute; z-index:1; height:0.2px">

    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 60px;
            position:absolute;
            left: 483px;
            margin-top:-70.5px"></div>

    <p style="text-align:justify;margin-top:-8px;margin-left:491px; width:75%; position:absolute;z-index:5; font-size:9px"><b>M A K</b>
    <p style="text-align:justify;margin-top:-8px;margin-left:615px; width:75%; position:absolute;z-index:5; font-size:9px"><b><?php echo $p->kode_mak ?></b>
        <hr width=30% color="black" style="margin-top:25px; margin-left:483px; position:absolute; z-index:1; height:0.2px">
    <p style="text-align:justify;margin-top:13px;margin-left:491px; width:75%; position:absolute;z-index:5; font-size:9px"><b>Buku Kas No.</b>
        <hr width=30% color="black" style="margin-top:45px; margin-left:483px; position:absolute; z-index:1; height:0.2px">
    <p style="text-align:justify;margin-top:34px;margin-left:491px; width:75%; position:absolute;z-index:5; font-size:9px"><b>Tahun Anggaran</b>
    <p style="text-align:justify;margin-top:34px;margin-left:615px; width:75%; position:absolute;z-index:5; font-size:9px"><b><?php echo $p->tahun ?></b>



    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 60px;
            position:absolute;
            left: 603px;
            margin-top:-70.5px"></div>

    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 60px;
            position:absolute;
            left: 720px;
            margin-top:-70.5px"></div>

    <hr width=30% color="black" style="margin-top:65px; margin-left:483px; position:absolute; z-index:1; height:0.2px">

    <!-- <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 1000px;
            position:absolute;
            left: 50%;
            margin-top:-70.5px"></div> -->
    <!-- Tabel -->
    <!-- Garis baris 1 -->
    <hr style="margin-left:50px;margin-top:230px;position:absolute;z-index:0" width=84.5% color="black" height=1px>
    <!-- Garis baris 2 -->
    <hr style="margin-left:50px;margin-top:250px;position:absolute;z-index:0" width=84.5% color="black" height=1px>
    <!-- Garis baris 2 -->
    <hr style="margin-left:50px;margin-top:510px;position:absolute;z-index:0" width=84.5% color="black" height=1px>
    <hr style="margin-left:50px;margin-top:530px;position:absolute;z-index:0" width=84.5% color="black" height=1px>
    <hr style="margin-left:50px;margin-top:560px;position:absolute;z-index:0" width=84.5% color="black" height=1px>

    <!-- kolom kiri ujung -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 330px;
            position:absolute;
            left: 50px;
            margin-top:154.5px"></div>
    <!-- garis kolom 2 -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 280px;
            position:absolute;
            left: 80px;
            margin-top:154.5px"></div>
    <!-- garis kolom 3 -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 300px;
            position:absolute;
            left: 55%;
            margin-top:154.5px"></div>
    <!-- garis kolom 4 -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 300px;
            position:absolute;
            left: 73%;
            margin-top:154.5px"></div>
    <!-- kanan ujung -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 330px;
            position:absolute;
            left: 720px;
            margin-top:154.5px"></div>
    <p style="text-align:justify;margin-top:160px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px">Lampiran SPPD Nomor
    <p style="text-align:justify;margin-top:160px;margin-left:227px; width:75%; position:absolute;z-index:5; font-size:12px">:
    <p style="text-align:justify;margin-top:160px;margin-left:287px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo $p->no_sppd2 ?>
    <p style="text-align:justify;margin-top:180px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px">Tanggal
    <p style="text-align:justify;margin-top:180px;margin-left:227px; width:75%; position:absolute;z-index:5; font-size:12px">:


        <!-- Header tabel -->
    <p style="text-align:justify;margin-top:220px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px"><b>NO</b>
    <p style="text-align:justify;margin-top:240px;margin-left:61px; width:75%; position:absolute;z-index:5; font-size:12px"><b>1</b>
    <p style="text-align:justify;margin-top:240px;margin-left:85px; width:75%; position:absolute;z-index:5; font-size:12px"><b>Uang Harian</b>
    <p style="text-align:justify;margin-top:260px;margin-left:90px; width:75%; position:absolute;z-index:5; font-size:12px">a.
    <p style="text-align:justify;margin-top:260px;margin-left:110px; width:75%; position:absolute;z-index:5; font-size:12px"><?php $golongan  = $p->golongan;
                                                                                                                                if ($golongan != 'Tidak Ada') {
                                                                                                                                    if (strlen($golongan) == 4) {
                                                                                                                                        echo 'Pegawai Gol .' . ' ' . substr($golongan, 0, 2);
                                                                                                                                    } else {
                                                                                                                                        echo 'Pegawai Gol .' . ' ' . substr($golongan, 0, 3);
                                                                                                                                    }
                                                                                                                                } else {
                                                                                                                                    echo 'Pegawai Harian';
                                                                                                                                } ?>
    <p style="text-align:justify;margin-top:260px;margin-left:240px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo $p->lama_perjalanan . ' hari' . ' ' . 'x' . ' ' . 'Rp' . number_format($p->uang_harian / $p->lama_perjalanan, 0, ',', '.') ?>
    <p style="text-align:justify;margin-top:260px;margin-left:448px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'Rp' . number_format($p->uang_harian, 0, ',', '.') ?>


    <p style="text-align:justify;margin-top:300px;margin-left:61px; width:75%; position:absolute;z-index:5; font-size:12px"><b>2</b>
    <p style="text-align:justify;margin-top:300px;margin-left:85px; width:75%; position:absolute;z-index:5; font-size:12px"><b>Transportasi</b>
    <p style="text-align:justify;margin-top:300px;margin-left:448px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'Rp' . number_format($p->uang_transportasi, 0, ',', '.') ?>
    <p style="text-align:justify;margin-top:420px;margin-left:61px; width:75%; position:absolute;z-index:5; font-size:12px"><b>3</b>
    <p style="text-align:justify;margin-top:420px;margin-left:85px; width:75%; position:absolute;z-index:5; font-size:12px"><b>Penginapan</b>
    <p style="text-align:justify;margin-top:440px;margin-left:90px; width:75%; position:absolute;z-index:5; font-size:12px">a.
    <p style="text-align:justify;margin-top:440px;margin-left:110px; width:75%; position:absolute;z-index:5; font-size:12px"><?php if ($p->hari1 != 0) {
                                                                                                                                    echo $p->hari1 . ' ' . 'malam' . ' ' . 'x' . ' ' . 'Rp' . number_format($p->biaya1, 0, ',', '.');
                                                                                                                                } else {
                                                                                                                                    echo ' ';
                                                                                                                                } ?>
    <p style="text-align:justify;margin-top:440px;margin-left:448px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'Rp' . number_format($p->hari1 * $p->biaya1, 0, ',', '.') ?>

    <p style="text-align:justify;margin-top:460px;margin-left:90px; width:75%; position:absolute;z-index:5; font-size:12px">b.
    <p style="text-align:justify;margin-top:460px;margin-left:110px; width:75%; position:absolute;z-index:5; font-size:12px"><?php if ($p->hari2 != 0) {
                                                                                                                                    echo $p->hari2 . ' ' . 'malam' . ' ' . 'x' . ' ' . 'Rp' . number_format($p->biaya2, 0, ',', '.');
                                                                                                                                } else {
                                                                                                                                    echo ' ';
                                                                                                                                } ?>
    <p style="text-align:justify;margin-top:460px;margin-left:448px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'Rp' . number_format($p->hari2 * $p->biaya2, 0, ',', '.') ?>

    <p style="text-align:justify;margin-top:480px;margin-left:90px; width:75%; position:absolute;z-index:5; font-size:12px">c.
    <p style="text-align:justify;margin-top:480px;margin-left:110px; width:75%; position:absolute;z-index:5; font-size:12px"><?php if ($p->hari3 != 0) {
                                                                                                                                    echo $p->hari3 . ' ' . 'malam' . ' ' . 'x' . ' ' . 'Rp' . number_format($p->biaya3, 0, ',', '.');
                                                                                                                                } else {
                                                                                                                                    echo ' ';
                                                                                                                                } ?>
    <p style="text-align:justify;margin-top:480px;margin-left:448px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'Rp' . number_format($p->hari3 * $p->biaya3, 0, ',', '.') ?>



    <p style="text-align:justify;margin-top:220px;margin-left:210px; width:75%; position:absolute;z-index:5; font-size:12px"><b>RINCIAN BIAYA</b>
    <p style="text-align:justify;margin-top:220px;margin-left:480px; width:75%; position:absolute;z-index:5; font-size:12px"><b>JUMLAH</b>
    <p style="text-align:justify;margin-top:220px;margin-left:635px; width:75%; position:absolute;z-index:5; font-size:12px"><b>KET</b>
    <p style="text-align:justify;margin-top:500px;margin-left:220px; width:75%; position:absolute;z-index:5; font-size:12px"><b>JUMLAH</b>
    <p style="text-align:justify;margin-top:500px;margin-left:448px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'Rp' . number_format($p->total_pendapatan, 0, ',', '.') ?>

    <p style="text-align:justify;margin-top:525px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px"><b>Terbilang:</b>
    <p style="text-align:justify;margin-top:525px;margin-left:150px; width:75%; position:absolute;z-index:5; font-size:12px"><b><?php echo strtoupper(penyebut($p->total_pendapatan) . ' Rupiah') ?></b>

    <p style="text-align:justify;margin-top:585px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px">Telah dibayar
    <p style="text-align:justify;margin-top:605px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px">jumlah uang sebesar:
    <p style="text-align:justify;margin-top:635px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px"><b><?php echo 'Rp' . number_format($p->total_pendapatan, 0, ',', '.') ?></b>
        <hr style="margin-left:50px;margin-top:640px;position:absolute;z-index:0" width=18.5% color="black" height=1px>
        <!-- kolom kiri ujung -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 30px;
            position:absolute;
            left: 50px;
            margin-top:564.5px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 30px;
            position:absolute;
            left: 196px;
            margin-top:564.5px"></div>
    <hr style="margin-left:50px;margin-top:670px;position:absolute;z-index:0" width=18.5% color="black" height=1px>
    <p style="text-align:justify;margin-top:680px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px">Bendahara,
    <p style="text-align:justify;margin-top:750px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo $p->nama_bendahara ?>
    <p style="text-align:justify;margin-top:770px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'NIP. ' . $p->nip_bendahara ?>


    <p style="text-align:justify;margin-top:565px;margin-left:407px; width:75%; position:absolute;z-index:5; font-size:12px">.................., ..................................
    <p style="text-align:justify;margin-top:585px;margin-left:407px; width:75%; position:absolute;z-index:5; font-size:12px">Telah menerima
    <p style="text-align:justify;margin-top:605px;margin-left:407px; width:75%; position:absolute;z-index:5; font-size:12px">jumlah uang sebesar:
    <p style="text-align:justify;margin-top:635px;margin-left:407px; width:75%; position:absolute;z-index:5; font-size:12px"><b><?php echo 'Rp' . number_format($p->total_pendapatan, 0, ',', '.') ?></b>

        <hr style="margin-left:400px;margin-top:640px;position:absolute;z-index:0" width=18.5% color="black" height=1px>

    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 30px;
            position:absolute;
            left: 400px;
            margin-top:564.5px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 30px;
            position:absolute;
            left: 546px;
            margin-top:564.5px"></div>
    <hr style="margin-left:400px;margin-top:670px;position:absolute;z-index:0" width=18.5% color="black" height=1px>
    <p style="text-align:justify;margin-top:680px;margin-left:407px; width:75%; position:absolute;z-index:5; font-size:12px">Yang menerima,
    <p style="text-align:justify;margin-top:750px;margin-left:407px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo $p->nama_pegawai ?>
    <p style="text-align:justify;margin-top:770px;margin-left:407px; width:75%; position:absolute;z-index:5; font-size:12px"><?php if ($p->nip[0] == 'H') {
                                                                                                                                    echo ' ';
                                                                                                                                } else {
                                                                                                                                    echo 'NIP. ' . $p->nip;
                                                                                                                                } ?>
        <hr style="margin-left:50px;margin-top:803px;position:absolute;z-index:0" width=84.5% color="black" height=1px>
        <hr style="margin-left:50px;margin-top:804px;position:absolute;z-index:0" width=84.5% color="black" height=1px>
    <p style="margin-left:285px;margin-top:805px;position:absolute;z-index:0;font-size:14px"><b>PERHITUNGAN SPPD RAMPUNG</b></p><br>
    <hr style="margin-left:284px;margin-top:830px;position:absolute;z-index:0" width=28% color="black" height=1px>

    <p style="text-align:justify;margin-top:810px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px">Ditetapkan sejumlah
    <p style="text-align:justify;margin-top:810px;margin-left:350px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'Rp' . number_format($p->total_pendapatan, 0, ',', '.') ?>

    <p style="text-align:justify;margin-top:830px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px">Yang telah dibayar semula
    <p style="text-align:justify;margin-top:830px;margin-left:350px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'Rp' . number_format($p->total_pendapatan, 0, ',', '.') ?>

        <hr style="margin-left:50px;margin-top:890px;position:absolute;z-index:0" width=84.5% color="black" height=1px>
    <p style="text-align:justify;margin-top:860px;margin-left:57px; width:75%; position:absolute;z-index:5; font-size:12px"><b>Sisa kurang/lebih</b>
    <p style="text-align:justify;margin-top:860px;margin-left:350px; width:75%; position:absolute;z-index:5; font-size:12px"><b><?php echo 'Rp' . number_format('0', 0, ',', '.') ?></b>
    <p style="text-align:justify;margin-top:870px;margin-left:500px; width:75%; position:absolute;z-index:5; font-size:12px">Mengetahui/Menyetujui:
    <p style="text-align:justify;margin-top:890px;margin-left:500px; width:75%; position:absolute;z-index:5; font-size:12px">a.n. Kuasa Pengguna Anggaran
    <p style="text-align:justify;margin-top:910px;margin-left:500px; width:75%; position:absolute;z-index:5; font-size:12px">Pejabat Pembuat Komitmen
    <p style="text-align:justify;margin-top:980px;margin-left:500px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo $p->nama_ppk ?>
    <p style="text-align:justify;margin-top:1000px;margin-left:500px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'NIP. ' . $p->nip_ppk ?>










    <p style="margin-left:308px;margin-top:55px;position:absolute;z-index:0;font-size:14px"><b><?php echo $header->nama_kementerian ?></b></p><br>
    <p style="margin-left:200px;margin-top:53px;position:absolute;z-index:0;font-size:14px"><b><?php echo $header->eslon_satu ?></b></p><br>
    <h4 style="margin-left:194px;margin-top:56px;position:absolute;z-index:0;font-size:16px"><b><?php echo $header->eslon_tiga ?></b></h4>
    <hr style="margin-left:193px;margin-top:136px;position:absolute;z-index:0" width=50% color="black" height=1px>

    <p style="margin-left:275px;margin-top:80px;position:absolute;z-index:0;font-size:14px"><b>RINCIAN BIAYA PERJALANAN DINAS</b></p>
    <?php
    function penyebut($nilai)
    {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = penyebut($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = penyebut($nilai / 1000) . " ribu" . penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = penyebut($nilai / 1000000) . " juta" . penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = penyebut($nilai / 1000000000) . " milyar" . penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = penyebut($nilai / 1000000000000) . " trilyun" . penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;
    } ?>




</body>

</html>