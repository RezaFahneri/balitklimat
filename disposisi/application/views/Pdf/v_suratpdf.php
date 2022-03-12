<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf;?></title>
    <style>
        table tr .text2  {
            text-align: center;
        }

        #table tr td {
            font-size: 13px;
        }

        /* table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        } */

        table tr .text{
            text-align: right;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <!-- <center> -->
        <table width="100%">
            <tr>
                <td><img src="<?= base_url('assets'); ?>/images/logo.png" width="90" height="90"></td>
                <td width="100%">
                    <center>
                        <font size="3">KEMENTERIAN PERTANIAN</font><br>
                        <font size="3">BADAN PENELITIAN DAN PENGEMBAGAN PERTANIAN</font><br>
                        <font size="4">BADAN PENELITIAN AGROKLIMAT DAN HIDROLOGI</font><br>
                        <font size="2">Jl. Tentara Pelajar No. 1A, Kampus Penelitian Pertanian Cimanggu Bogor 16111</font><br>
                        <font size="2">Telepon (0251) 8312760, Faksimili (0251) 8323909</font><br>
                        <font size="2">WEBSITE http://balitklimat.litbang.pertanian.go.id EMAIL: balitklimat@litbang.pertanian.go.id</font><br>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
        </table>
        <table width="100%">
            <tr>
                <td class=text>Bogor, <?php echo date('d M Y');?></td>
            </tr>
        </table>
        <br>
        
        <table width="100%">
            <tr>
                <td class="text2">
                    LEMBAR DISPOSISI
                </td>
            </tr>
        </table>
        <br>
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="border: 1px solid black; border-collapse: collapse; height: 3%;" width="50%">Sifat Surat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $detail->sifat_surat?> </td>
                <td style="border: 1px solid black; border-collapse: collapse;" width="50%">Kode/Indeks&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $datapeg->kode?> </td>
            </tr>
        </table>
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="border: 1px solid black; border-collapse: collapse; height: 3%;" width="50%">Tanggal Surat&nbsp;&nbsp;: <?php echo $datapeg->tanggal_surat?> </td>
                <td style="border: 1px solid black; border-collapse: collapse;" width="50%">Tanggal Input&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $datapeg->tanggal_input?> </td>
            </tr>
        </table>
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="border: 1px solid black; border-collapse: collapse; height: 3%;" width="50%">No. Surat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $datapeg->no_surat?> </td>
                <td style="border: 1px solid black; border-collapse: collapse;" width="50%">No. Urut&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $datapeg->no_urut?> </td>
            </tr>
        </table>
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="border: 1px solid black; border-collapse: collapse; height: 3%;" width="50%">Asal Surat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $datapeg->asal_surat?> </td>
                <td style="border: 1px solid black; border-collapse: collapse;" width="50%">File Surat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $datapeg->dokumen?> </td>
            </tr>
        </table>
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="height: 3%;">Perihal/Isi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $datapeg->perihal?> </td>
            </tr>
        </table>
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="height: 3%;">Diteruskan ke&nbsp;: <?php echo $datapeg->nama_pegawai?> </td>
            </tr>
        </table>
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="height: 3%;">Isi Disposisi&nbsp;&nbsp;&nbsp;: <?php echo $datapeg->isi?> </td>
            </tr>
        </table>
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="height: 3%;">Catatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $datapeg->catatan?> </td>
            </tr>
        </table>
        
</body>
</html>