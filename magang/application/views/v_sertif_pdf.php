<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,400,600,700,900" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        @page {
            margin: 0in;
        }

        body {
            background-image: url('<?= base_url('assets/'); ?>images/sertifikat.png');
            background-position: top left;
            background-repeat: no-repeat;
            background-size: 100%;
            width: 100%;
            height: 100%;
            font-family: 'Montserrat';
        }

        #content {
            position: relative;
        }

        #content img {
            position: absolute;
            top: 50px;
            right: 50px;
        }

        .hr {
            display: inline-block;
        }

        .hr:after {
            content: '';
            display: block;
            border-top: 2px solid grey;
            margin-top: 0.5em;
        }

        .pad {
            padding: 30px;
        }

        .w300 {
            font-weight: 100;
        }

        .w600 {
            font-weight: 600;
            letter-spacing: 2px;
        }

        .w400 {
            font-weight: 400;
            letter-spacing: 2px;
        }

        .w700 {
            font-weight: 700;
            letter-spacing: 4px;
        }
    </style>

</head>

<body>
    <div id="content">
        <img src="<?= base_url('assets'); ?>/images/logo.png" style="width: 70px; height: auto;">
    </div> <br><br><br><br><br>
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span class="w700" style="color: #42747F; font-size:48pt">
                    SERTIFIKAT
                </span> <br>
                <span class="w400" style="color: #42747F; font-size:20pt"> Diberikan Kepada</span>
            </td>
        </tr>
        <tr>
            <td align="center">
                <br>
                <div>
                    <h1 class="hr w700" style="font-size: 32pt;"> <?= $nama ?></h1>
                </div>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding-left: 50px; padding-right: 50px;">
                <span class="w400" style="font-size: 12pt; color:grey"> Karena telah menyelesaikan kegiatan magang di <?= $instansi ?> periode <?= $tgl_mli ?> - <?= $tgl_sls ?> dengan topik kajian magang, yaitu "<?= $judul ?>"</span>
            </td>
        </tr>
    </table>
    <table style="margin-top: 68px; margin-left:50px;" width="60%">
        <tr>
            <td rowspan="2"><img src="<?= base_url('assets'); ?>/images/ribbon.png" style="width: 80px; height: auto;"></td>
            <td><span class="w400" style="font-size: 12pt; "><?= mdate('%d %M %Y') ?><span></td>
        </tr>
        <tr>
            <td><span class="w400" style="font-size: 12pt; ">Kepala Balai Penelitian Agroklimat dan Hidrologi<span></td>
        </tr>
    </table>
</body>

</html>