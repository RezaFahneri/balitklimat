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
    foreach ($data_anggota_perjadin as $data2) {
    ?>


        <!-- Each sheet element should have the class "sheet" -->
        <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
        <!-- Write HTML just like a web page -->
        <hr width=17.4% color="black" style="margin-top:5px; margin-left:603px; position:absolute; z-index:1; height:0.2px">

        <p style="text-align:justify;margin-top:-6px;margin-left:613px; width:75%; position:absolute;z-index:5; font-size:10px"><b>NO</b>
            <hr width=17.4% color="black" style="margin-top:25px; margin-left:603px; position:absolute; z-index:1; height:0.2px">



        <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 20px;
            position:absolute;
            left: 603px;
            margin-top:-70.5px"></div>

        <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 20px;
            position:absolute;
            left: 640px;
            margin-top:-70.5px"></div>

        <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 20px;
            position:absolute;
            left: 740px;
            margin-top:-70.5px"></div>


        <!-- <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 1000px;
            position:absolute;
            left: 50%;
            margin-top:-70.5px"></div> -->
        <p style="margin-top:15px;font-size:16px;text-align:center"><b>PERMOHONAN SURAT TUGAS PERJALANAN DINAS</b></p>
        <p style="margin-top:-20px;font-size:12px;text-align:center"><b><?php echo $data2->kode_kegiatan . ' ' . '-' . ' ' . $data2->judul_kegiatan ?></b></p><br>
    <?php } ?>


    <!-- Tabel -->
    <!-- Garis baris 1 -->
    <hr style="margin-left:50px;margin-top:120px;position:absolute;z-index:0" width=87% color="black" height=1px>
    <!-- Garis baris 2 -->
    <hr style="margin-left:531.8px;margin-top:140px;position:absolute;z-index:0" width=26.3% color="black" height=1px>
    <!-- Garis baris 2 -->
    <hr style="margin-left:50px;margin-top:290px;position:absolute;z-index:0" width=87% color="black" height=1px>
    <hr style="margin-left:50px;margin-top:340px;position:absolute;z-index:0" width=87% color="black" height=1px>

    <!-- kolom kiri ujung -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 220px;
            position:absolute;
            left: 50px;
            margin-top:44.5px"></div>


    <!-- garis kolom 4 -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 220px;
            position:absolute;
            left: 67%;
            margin-top:44.5px"></div>
    <!-- kanan ujung -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 220px;
            position:absolute;
            left: 740px;
            margin-top:44.5px"></div>
    <p style="text-align:justify;margin-top:-10px;margin-left:50px; width:75%; position:absolute;z-index:5; font-size:12px">1. JUSTIFIKASI PENANGGUNGJAWAB/SEKRETARIS KEGIATAN
    <p style="text-align:justify;margin-top:40px;margin-left:100px; width:47%; position:absolute;z-index:5; font-size:12px"><label style="line-height:13px;margin-top:6px"><?php echo $data2->dalam_rangka ?></label>
    <p style="text-align:justify;margin-top:17px;margin-left:586px; width:75%; position:absolute;z-index:5; font-size:12px">Tim Pelaksana

    <table id="table" class="table table-borderless table-sm" style="margin-top:47px;margin-left:535px; width:75%; position:absolute;z-index:5; font-size:12px">
        <!-- <table  id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'> -->
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($isi_surat as $p) {
            ?>
                <tr>
                    <td style="font-size:12px;line-height:5px"><?php echo $p->nama_pegawai ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p style="text-align:justify;margin-top:250px;margin-left:50px; width:75%; position:absolute;z-index:5; font-size:12px">Yang mengajukan,
    <p style="text-align:justify;margin-top:270px;margin-left:50px; width:75%; position:absolute;z-index:5; font-size:12px">PJ. RKTM/RPTP
    <p style="text-align:justify;margin-top:340px;margin-left:50px; width:75%; position:absolute;z-index:5; font-size:11px"><b><?php echo $data2->nama_rrr ?></b>
        <hr style="margin-left:47.8px;margin-top:464px;position:absolute;z-index:0" width=20.8% color="black" height=1px>
    <p style="text-align:justify;margin-top:360px;margin-left:50px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'NIP. ' . $data2->nip_pj_rrr ?>


    <p style="text-align:justify;margin-top:250px;margin-left:558px; width:75%; position:absolute;z-index:5; font-size:12px">Menyetujui,
    <p style="text-align:justify;margin-top:270px;margin-left:558px; width:75%; position:absolute;z-index:5; font-size:12px">Kasub/Kasie/Ka.Kelti
    <p style="text-align:justify;margin-top:340px;margin-left:558px; width:75%; position:absolute;z-index:5; font-size:11px"><b><?php echo $data2->nama_kkk ?></b>
        <hr style="margin-left:555.8px;margin-top:464px;position:absolute;z-index:0" width=20.8% color="black" height=1px>
    <p style="text-align:justify;margin-top:360px;margin-left:558px; width:75%; position:absolute;z-index:5; font-size:12px"><?php echo 'NIP. ' . $data2->nip_pj_kegiatan ?>


        <hr style="margin-left:50px;margin-top:520px;position:absolute;z-index:0" width=87% color="black" height=1px>
        <!-- Garis baris 2 -->
        <hr style="margin-left:50px;margin-top:540px;position:absolute;z-index:0" width=60.8% color="black" height=1px>
        <!-- Garis baris 2 -->
        <hr style="margin-left:50px;margin-top:600px;position:absolute;z-index:0" width=87% color="black" height=1px>

        <hr style="margin-left:50px;margin-top:560px;position:absolute;z-index:0" width=5.1% color="black" height=1px>
        <hr style="margin-left:50px;margin-top:580px;position:absolute;z-index:0" width=5.1% color="black" height=1px>


        <!-- kolom kiri ujung -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 80px;
            position:absolute;
            left: 50px;
            margin-top:444.5px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 60px;
            position:absolute;
            left: 90px;
            margin-top:464.5px"></div>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 80px;
            position:absolute;
            left: 245px;
            margin-top:444.5px"></div>


    <!-- garis kolom 4 -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 80px;
            position:absolute;
            left: 67%;
            margin-top:444.5px"></div>
    <!-- kanan ujung -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 80px;
            position:absolute;
            left: 740px;
            margin-top:444.5px"></div>
    <p style="text-align:justify;margin-top:390px;margin-left:50px; width:75%; position:absolute;z-index:5; font-size:12px">2. VERIFIKATOR
    <p style="text-align:justify;margin-top:390px;margin-left:576px; width:75%; position:absolute;z-index:5; font-size:12px">Tanda tangan/ paraf
    <p style="text-align:justify;margin-top:417px;margin-left:64px; width:75%; position:absolute;z-index:5; font-size:12px">Verifikasi :
    <p style="text-align:justify;margin-top:437px;margin-left:95px; width:75%; position:absolute;z-index:5; font-size:12px">Kelengkapan dokumen
    <p style="text-align:justify;margin-top:457px;margin-left:95px; width:75%; position:absolute;z-index:5; font-size:12px">Kebenaran perhitungan
    <p style="text-align:justify;margin-top:477px;margin-left:95px; width:75%; position:absolute;z-index:5; font-size:12px">Ketersediaan anggaran
    <p style="text-align:justify;margin-top:477px;margin-left:540px; width:75%; position:absolute;z-index:5; font-size:11px"><b><?php echo $data2->nama_verif ?></b>


    <p style="text-align:justify;margin-top:417px;margin-left:250px; width:75%; position:absolute;z-index:5; font-size:12px">Catatan :

        <hr style="margin-left:50px;margin-top:640px;position:absolute;z-index:0" width=87% color="black" height=1px>
        <!-- Garis baris 2 -->
        <hr style="margin-left:50px;margin-top:660px;position:absolute;z-index:0" width=19.6% color="black" height=1px>
        <!-- Garis baris 2 -->
        <hr style="margin-left:50px;margin-top:810px;position:absolute;z-index:0" width=60.8% color="black" height=1px>
        <hr style="margin-left:50px;margin-top:860px;position:absolute;z-index:0" width=87% color="black" height=1px>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 20.6px;
            position:absolute;
            left: 205px;
            margin-top:564.7px"></div>

    <!-- kolom kiri ujung -->
    <!-- kolom kiri ujung -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 220px;
            position:absolute;
            left: 50px;
            margin-top:564.5px"></div>
    <!-- garis kolom 4 -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 220px;
            position:absolute;
            left: 67%;
            margin-top:564.5px"></div>
    <!-- kanan ujung -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 220px;
            position:absolute;
            left: 740px;
            margin-top:564.5px"></div>
    <p style="text-align:justify;margin-top:510px;margin-left:50px; width:75%; position:absolute;z-index:5; font-size:12px">3. PEJABAT PEMBUAT KOMITMEN
    <p style="text-align:justify;margin-top:537px;margin-left:60px; width:75%; position:absolute;z-index:5; font-size:12px">Disetujui / Tidak disetujui
    <p style="text-align:justify;margin-top:510px;margin-left:576px; width:75%; position:absolute;z-index:5; font-size:12px">Tanda tangan/ paraf
    <p style="text-align:justify;margin-top:737px;margin-left:540px; width:75%; position:absolute;z-index:5; font-size:11px"><b><?php echo $data2->nama_ppk ?></b>


        <hr style="margin-left:50px;margin-top:900px;position:absolute;z-index:0" width=87% color="black" height=1px>
        <!-- Garis baris 2 -->
        <hr style="margin-left:50px;margin-top:920px;position:absolute;z-index:0" width=19.6% color="black" height=1px>
        <!-- Garis baris 2 -->
        <hr style="margin-left:50px;margin-top:1029px;position:absolute;z-index:0" width=87% color="black" height=1px>
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 20.6px;
            position:absolute;
            left: 205px;
            margin-top:824.7px"></div>

    <!-- kolom kiri ujung -->
    <!-- kolom kiri ujung -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 130px;
            position:absolute;
            left: 50px;
            margin-top:824.5px"></div>
    <!-- garis kolom 4 -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 130px;
            position:absolute;
            left: 67%;
            margin-top:824.5px"></div>
    <!-- kanan ujung -->
    <div style="border-left: 1px solid rgba(0, 0, 0, 0.1);
            height: 130px;
            position:absolute;
            left: 740px;
            margin-top:824.5px"></div>

    <p style="text-align:justify;margin-top:770px;margin-left:50px; width:75%; position:absolute;z-index:5; font-size:12px">4. KUASA PENGGUNA ANGGARAN
    <p style="text-align:justify;margin-top:797px;margin-left:60px; width:75%; position:absolute;z-index:5; font-size:12px">Disetujui / Tidak disetujui
    <p style="text-align:justify;margin-top:770px;margin-left:576px; width:75%; position:absolute;z-index:5; font-size:12px">Tanda tangan/ paraf
    <p style="text-align:justify;margin-top:905px;margin-left:540px; width:75%; position:absolute;z-index:5; font-size:11px"><b><?php echo $data2->nama_kpa ?></b>


</body>

</html>