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
    foreach ($data_anggota_perjadin as $p1) {
    ?>
        <img src="assets/images/logo_kementan.png" width="75" height="75" style="position:absolute;margin-top:5px;margin-left:48px">
        <img src="assets/images/agroin.jpg" width="65" height="65" style="position:absolute;margin-top:-5px;margin-left:675px">
        <img src="assets/images/mutu.jpg" width="70" height="35" style="position:absolute;margin-top:61px;margin-left:673.5px">
    <?php } ?>

    <p style="color:#005b8f;margin-top:-20px;font-size:16px;text-align:center"><?php echo $header->nama_kementerian ?></p>
    <p style="color:#005b8f;margin-top:-22px;font-size:16px;text-align:center"><?php echo $header->eslon_satu ?></p>
    <p style="color:#005b8f;margin-top:-18px;font-size:21px;text-align:center"><b><?php echo $header->eslon_tiga ?></b></p>
    <p style="color:#005b8f;margin-top:-24px;font-size:13px;text-align:center"><?php echo $header->alamat ?></p>
    <p style="color:#005b8f;margin-top:-23px;font-size:13px;text-align:center"><?php echo $header->kontak ?></p>
    <p style="color:#005b8f;margin-top:-23px;font-size:13px;text-align:center"><?php echo $header->web_email ?></p>

    <!-- Tabel -->
    <!-- Garis baris 1 -->
    <hr style="margin-left:50px;margin-top:-5px;" width=87% color="black" height=1px>
    <hr style="margin-left:50px;margin-top:-16px;" width=87% color="black" height=1px>
    <p style="margin-top:-40px;font-size:13px;text-align:center"><b>SURAT TUGAS</b></p>
    <?php
    foreach ($data_anggota_perjadin as $data2) {
    ?>
        <?php if ($data2->no_surat == null) { ?>
            <p style="margin-top:-20px;font-size:13px;text-align:center"><?php echo 'Nomor: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;' . $data2->no_surat . $data2->no_surat_tugas_tu ?></p>
        <?php } else { ?>
            <p style="margin-top:-22px;font-size:13px;text-align:center"><?php echo 'Nomor: ' . $data2->no_surat . $data2->no_surat_tugas_tu ?></p>
        <?php } ?>
    <?php } ?>
    <p style="margin-top:-10px;font-size:13px;text-align:center"><b><?php echo 'KEPALA ' . $header->eslon_tiga ?></b></p>
    <p style="margin-top:5px; margin-left:100px;font-size:13px;position:absolute">Menimbang</p>
    <p style="margin-top:0px; margin-left:190px;font-size:13px;position:absolute">:</p>
    <p style="margin-top:0px; margin-left:210px;font-size:13px;position:absolute">a.</p>
    <p style="width:58%;margin-top:10px; margin-left:230px;font-size:13px;position:absolute;line-height:10px;text-align:justify">Bahwa Daftar Isian Pelaksanaan Anggaran Lingkup Kementerian Pertanian perlu dilaksanakan secara tertib dan akuntabel;</p>
    <p style="margin-top:35px; margin-left:210px;font-size:13px;position:absolute">b.</p>
    <p style="width:58%;margin-top:45px; margin-left:230px;font-size:13px;position:absolute;line-height:10px;text-align:justify">Bahwa untuk kelancaran dan ketertiban administrasi pelaksanaan penggunaan anggaran lingkup Badan Litbang Pertanian tahun 2020 dipandang perlu untuk menunjuk petugas yang menangani;</p>
    <p style="margin-top:90px; margin-left:210px;font-size:13px;position:absolute">c.</p>
    <p style="width:58%;margin-top:100px; margin-left:230px;font-size:13px;position:absolute;line-height:10px;text-align:justify">Bahwa berdasarkan pertimbangan sebagaimana dimaksud pada huruf a dan b maka dipandang perlu menunjuk nama, pangkat, dan jabatan yang dianggap cakap dan mampu untuk diserahi tugas, fungsi, dan tanggung jawab dalam melaksanakan tugas. </p>
    <p style="margin-top:170px; margin-left:100px;font-size:13px;position:absolute">Dasar</p>
    <p style="margin-top:170px; margin-left:190px;font-size:13px;position:absolute">:</p>
    <p style="margin-top:170px; margin-left:210px;font-size:13px;position:absolute">1.</p>
    <p style="width:58%;margin-top:180px; margin-left:230px;font-size:13px;position:absolute;line-height:10px;text-align:justify">Peraturan Menteri Pertanian nomor: 20/Permentan/OT.140/3/2013 tanggal 11 Maret 2013 tentang Organisasi dan Tata Kerja Balai Penelitian Agroklimat dan Hidrologi;</p>
    <p style="margin-top:225px; margin-left:210px;font-size:13px;position:absolute">2.</p>
    <p style="width:58%;margin-top:235px; margin-left:230px;font-size:13px;position:absolute;line-height:10px;text-align:justify">Keputusan Menteri Pertanian Nomor 766/Kpts/KU.010/11/2016 tanggal 11 November 2016 tentang Perubahan kedua puluh tujuh Keputusan Menteri Pertanian Nomor : 5118/Kpts/KU.410/12/2013 Tentang Penetapan Pejabat Pengelola Keuangan Lingkup Badan Penelitian dan Pengembangan Pertanian Kementerian Pertanian;</p>
    <p style="margin-top:320px; margin-left:210px;font-size:13px;position:absolute">3.</p>
    <p style="width:58%;margin-top:330px; margin-left:230px;font-size:13px;position:absolute;line-height:10px;text-align:justify">Surat Pengesahan Daftar Isian Pelaksanaan Anggaran (DIPA) Kepala Kanwil XII Direktorat Jenderal Perbendaharaan Nomor : SP DIPA-018.09.2.648694/2020 tanggal 12 November 2019 Tahun Anggaran 2020.</p>
    <p style="margin-left:342px;margin-top:380px;font-size:13px;position:absolute;"><b>MEMBERI TUGAS</b></p>
    <p style="margin-top:400px; margin-left:100px;font-size:13px;position:absolute">Kepada</p>
    <p style="margin-top:400px; margin-left:190px;font-size:13px;position:absolute">:</p>


    <table id="table" class="table table-borderless table-sm" style="margin-top:405px;margin-left:204px; width:75%; font-size:12px">
        <!-- <table  id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'> -->
        <thead>
            <tr>
                <th style="width:5%"></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($isi_surat as $p) {
            ?>
                <tr>
                    <td style="font-size:13px;line-height:5px"><?php echo $no++ . '.' ?></td>
                    <?php if ($p->nip_anggota_perjadin[0] == 'H') { ?>
                        <td style="font-size:13px;line-height:5px"><?php echo 'Nama: ' . $p->nama_pegawai . '/' . 'NIP. ' ?></td>
                    <?php } else { ?>
                        <td style="font-size:13px;line-height:5px"><?php echo 'Nama: ' . $p->nama_pegawai . '/' . 'NIP. ' . $p->nip_anggota_perjadin ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p style="margin-top:-12px; margin-left:100px;font-size:13px">Untuk</p>
    <p style="margin-top:-50px; margin-left:190px;font-size:13px;position:absolute">:</p>
    <p style="margin-top:0px; margin-left:209px;font-size:13px;position:absolute">1.</p>
    <p style="width:58%;margin-top:13px; margin-left:230px;font-size:13px;position:absolute;line-height:10px;text-align:justify"><?php echo $p->dalam_rangka ?></p>
    <p style="margin-top:20px; margin-left:209px;font-size:13px;position:absolute">2.</p>
    <p style="width:58%;margin-top:29px; margin-left:230px;font-size:13px;position:absolute;line-height:10px;text-align:justify">Melaksanakan tugas selama <?php echo $p->lama_perjalanan ?> <?php echo '(' . penyebut($p->lama_perjalanan) . ' )' ?> hari terhitung mulai tanggal <?php echo tanggal_indonesia($p->tanggal_berangkat) ?> – <?php echo tanggal_indonesia($p->tanggal_kembali) ?> di <?php echo $p->kota_tujuan ?>, <?php echo $p->provinsi_tujuan ?>; </p>
    <p style="margin-top:53px; margin-left:209px;font-size:13px;position:absolute">3.</p>
    <p style="width:58%;margin-top:62px; margin-left:230px;font-size:13px;position:absolute;line-height:10px;text-align:justify">Segera membuat laporan tertulis bulanan mengenai hasil pelaksanaan tugas tersebut kepada Kepala <?php echo $header->eslon_tiga_2 ?> dan Badan Litbang Pertanian; </p>
    <p style="margin-top:105px; margin-left:209px;font-size:13px;position:absolute">4.</p>
    <p style="width:58%;margin-top:115px; margin-left:230px;font-size:13px;position:absolute;line-height:10px;text-align:justify">Apabila terjadi penyimpangan dari pelaksanaan surat tugas ini, segala akibatnya diluar tanggung jawab pejabat yang memerintahkannya; </p>
    <p style="margin-top:140px; margin-left:209px;font-size:13px;position:absolute">5.</p>
    <p style="width:58%;margin-top:150px; margin-left:230px;font-size:13px;line-height:10px;text-align:justify">Biaya dibebankan pada DIPA <?php echo $header->eslon_tiga_2 ?> Tahun Anggaran <?php echo $p->tahun ?> </p>
    <p style="margin-top:-10px; margin-left:489px;font-size:13px">................ , .......................................</p>
    <p style="margin-top:-20px; margin-left:489px;font-size:13px">Kepala Balai,</p><br><br><br>
    <p style="margin-top:-20px; margin-left:489px;font-size:13px"><?php echo $p1->nama_kb ?></p>
    <p style="margin-top:-20px; margin-left:489px;font-size:13px"><?php echo $p1->nip_kb ?></p>

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
    };
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