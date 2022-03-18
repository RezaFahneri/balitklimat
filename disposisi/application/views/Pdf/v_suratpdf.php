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
                        <font size="3"><?php echo $kop->nama_kementerian?></font><br>
                        <font size="3"><?php echo $kop->eslon_satu?></font><br> 
                        <font size="4"><?php echo $kop->eslon_dua?></font><br>
                        <font size="2"><?php echo $kop->eslon_tiga?></font><br>
                        <font size="2"><?php echo $kop->alamat?></font><br>
                        <font size="2"><?php echo $kop->kontak?></font><br>
                        <font size="2"><?php echo $kop->web_email?></font><br>
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
        <!-- <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="height: 3%;">Diteruskan ke&nbsp;: </?php echo $datapeg->nama_pegawai?> </td>
            </tr>
        </table> -->
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="height: 3%;">Diteruskan ke&nbsp;: <?php echo $datapeg->nama_pegawai?> </td>
                <tr><div><label class="col-form-label" style="margin-top: -25px;">I. STRUKTURAL</label></tr>
                    <div class="form-check ">
                        <label class="form-check-label"> 
                        <input type="checkbox" id="kepada" name="kepada[]" value="Kepala Sub Bagian Tata Usaha" class="form-check-input">
                        1. Kepala Sub Bagian Tata Usaha
                        </label>
                    </div>
                    <div class="form-check ">
                        <label class="form-check-label"> 
                        <input type="checkbox" id="kepada" name="kepada[]" value="Subkoordinator Pelayanan Teknis" class="form-check-input">
                        2. Subkoordinator Pelayanan Teknis
                        </label>
                    </div>
                    <div class="form-check ">
                        <label class="form-check-label"> 
                        <input type="checkbox" id="kepada" name="kepada[]" value="Subkoordinator Jasa Penelitian" class="form-check-input">
                        3. Subkoordinator Jasa Penelitian
                        </label>
                    </div>
                    <br>
                <tr><div><label class="col-form-label" style="margin-top: -25px;">II. PENGELOLA KEUANGAN DLL</label></tr>
                    <div class="form-check ">
                        <label class="form-check-label"> 
                        <input type="checkbox" id="kepada" name="kepada[]" value="Kepala Sub Bagian Tata Usaha" class="form-check-input">
                        1. Pejabat Pembuat Komitmen
                        </label>
                    </div>
                    <div class="form-check ">
                        <label class="form-check-label"> 
                        <input type="checkbox" id="kepada" name="kepada[]" value="Kepala Sub Bagian Tata Usaha" class="form-check-input">
                        2. Bendahara Pengeluaran
                        </label>
                    </div>
                    <div class="form-check ">
                        <label class="form-check-label"> 
                        <input type="checkbox" id="kepada" name="kepada[]" value="Kepala Sub Bagian Tata Usaha" class="form-check-input">
                        3. Bendahara Penerimaan
                        </label>
                    </div>
                    <br>
                <tr><div><label class="col-form-label" style="margin-top: -25px;">III. LAIN-LAIN</label></tr>
                    <div class="form-check ">
                        <label class="form-check-label"> 
                        <input type="checkbox" id="kepada" name="kepada[]" value="Kepala Sub Bagian Tata Usaha" class="form-check-input">
                        1. 
                        </label>
                    </div>
                    <div class="form-check ">
                        <label class="form-check-label"> 
                        <input type="checkbox" id="kepada" name="kepada[]" value="Kepala Sub Bagian Tata Usaha" class="form-check-input">
                        2. 
                        </label>
                    </div>
                    <div class="form-check ">
                        <label class="form-check-label"> 
                        <input type="checkbox" id="kepada" name="kepada[]" value="Kepala Sub Bagian Tata Usaha" class="form-check-input">
                        3. 
                        </label>
                    </div>
                    <br>
            </tr>
        </table>
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="height: 3%;">Isi Disposisi&nbsp;&nbsp;&nbsp;: <?php echo $datapeg->isi?> </td>
            </tr>
        </table>
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%">
            <tr>
                <td style="height: 5%;">Catatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $datapeg->catatan?> </td>
            </tr>
        </table>
        <table style="border: 1px solid black; border-collapse: collapse;" width="100%" height="10%">
            <div style="width: 25%; text-align: left; float: right;">Bogor, <?php echo date('d M Y');?></div><br>
            <div style="width: 25%; text-align: left; float: right;">Kepala Balai, </div><br><br><br><br>
            <div style="width: 25%; text-align: left; float: right;"><?php echo $datapeg->nama_pegawai?></div><br>
            <div style="width: 25%; text-align: left; float: right;"><?php echo $datapeg->nip?></div><br>
        </table>
</body>
</html>