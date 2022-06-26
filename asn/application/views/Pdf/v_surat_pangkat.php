
<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>	Surat Keterangan Kenaikan Pangkat</title>
	<link rel="stylesheet" href="<?= base_url('assets') ?>/css/vertical-layout-light/style.css">
	<style>
        @page {
            size: A4
        }
    </style>
	
</head><body class="main-page">
<table width="100%">
            <tr>
                <td><img src="assets/images/logo.png" width="90" height="90"></td>
                <td width="100%">
                    <center>
                        <font size="3">KEMENTERIAN PERTANIAN</font><br>
						<font size="3">BADAN PENELITIAN DAN PENGEMBANGAN PERTANIAN</font><br> 
                        <font size="4">BALAI PENELITIAN AGROKLIMAT DAN HIDROLOGI</font><br>
                        <font size="2">Jl. Tentara Pelajar No. 1A, Kampus Penelitian Pertanian Cimanggu Bogor 16111</font><br>
                        <font size="2">Telepon (0251) 8312760, Faksimili (0251) 8323909</font><br>
                        <font size="2">Website http://balitklimat.litbang.pertanian.go.id E-MAIL : balitklimat@litbang.pertanian.go.id</font><br>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
        </table>
		<table width="100%">
            <tr>
                <td class=text style="text-align:right;font-size:14px;">Bogor, <?php echo tgl_indo(date('Y-m-d'));?></td>
            </tr>
        </table>
		<br><br>
		<table width="100%">
            <tr>
                <td>
                    <center>
                        <font size="3"><b>SURAT KETERANGAN KENAIKAN PANGKAT</b></font><br>
                    </center>
                </td>
            </tr>
        </table>
        <br><br>
		<table style="width:100%; table-layout:fixed; margin-left:40px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>Yang bertanda tangan dibawah ini : </td>
            </tr>
        </table>
        <table style="width:100%; table-layout:fixed; margin-left:60px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>Nama</td>
                <td width='80%'>: <?php echo ($this->db->where('id_jabatan=2') ->get('data_pegawai')->row('nama_pegawai'));?></td>
            </tr>
        </table>
        <table style="width:100%; table-layout:fixed;margin-left:60px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>NIP</td>
                <td width='80%'>: <?php echo ($this->db->where('id_jabatan=2') ->get('data_pegawai')->row('nip'));?></td>
            </tr>
        </table>
		<table style="width:100%; table-layout:fixed;margin-left:60px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>Pangkat</td>
                <td width='80%'>: <?php echo ($this->db->where('id_jabatan=2') ->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat')->get('data_pegawai')->row('pangkat'));?></td>
            </tr>
        </table>
        <table style="width:100%; table-layout:fixed;margin-left:60px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>Golongan</td>
                <td width='80%'>: <?php echo ($this->db->where('id_jabatan=2') ->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan')->get('data_pegawai')->row('golongan'));?></td>
            </tr>
        </table>
		<table style="width:100%; table-layout:fixed;margin-left:60px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>Jabatan</td>
                <td width='80%'>: Kepala Balai</td>
            </tr>
        </table>
        <table style="width:100%; table-layout:fixed;margin-left:60px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>Nama dan alamat instansi</td>
                <td width='80%'>: Balai Penelitian Agroklimat dan Hidrologi, Jl. Tentara Pelajar No. 1A, Kampus Penelitian Pertanian Cimanggu Bogor 16111</td>
            </tr>
        </table>
		<br><br>
		<table style="width:100%; table-layout:fixed; margin-left:40px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>Menyatakan bahwa : </td>
            </tr>
        </table>
        <table style="width:100%; table-layout:fixed; margin-left:60px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>Nama</td>
                <td width='80%'>: <?php echo ($this->db->where('nip',$this->session->userdata('nip')) ->get('data_pegawai')->row('nama_pegawai'));?></td>
            </tr>
        </table>
        <table style="width:100%; table-layout:fixed;margin-left:60px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>NIP</td>
                <td width='80%'>: <?php echo ($this->db->where('nip',$this->session->userdata('nip')) ->get('data_pegawai')->row('nip'));?></td>
            </tr>
        </table>
		<table style="width:100%; table-layout:fixed;margin-left:60px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>Pangkat</td>
                <td width='80%'>: <?php echo ($this->db->where('nip',$this->session->userdata('nip'))->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat') ->get('data_pegawai')->row('pangkat'));?></td>
            </tr>
        </table>
        <table style="width:100%; table-layout:fixed;margin-left:60px;font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>Golongan</td>
                <td width='80%'>: <?php echo ($this->db->where('nip',$this->session->userdata('nip'))->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan') ->get('data_pegawai')->row('golongan'));?></td>
            </tr>
        </table>
		<table style="width:100%; table-layout:fixed;margin-left:60px;font-size:14px; margin-right:70px; ">
            <tr>
                <td width='50%'>Jabatan</td>
                <td width='80%'>: <?php echo ($this->db->where('nip',$this->session->userdata('nip'))->join('data_jabatan', 'data_pegawai.id_jabatan= data_jabatan.id_jabatan') ->get('data_pegawai')->row('jabatan'));?></td>
            </tr>
        </table>
        <table style="width:100%; table-layout:fixed;margin-left:60px; font-size:14px; margin-right:70px;">
            <tr>
                <td width='50%'>Nama dan alamat instansi</td>
                <td width='80%'>: Balai Penelitian Agroklimat dan Hidrologi, Jl. Tentara Pelajar No. 1A, Kampus Penelitian Pertanian Cimanggu Bogor 16111</td>
            </tr>
    </table>
    <br><br>
    <table style="width:100%; table-layout:fixed;margin-left:40px; font-size:14px; margin-right:70px;text-align:justify;">
        <tr>
            <td width='100%'>Telah menjalankan tugas dan kewajiban di Instansi Balitklimat dengan baik dan disiplin serta berdedikasi tinggi untuk layak mendapatkan kenaikan pangkat ke golongan <?php echo ($this->db->where('nip',$this->session->userdata('nip'))->join('data_golongan as gol','data_jadwal_naik_pangkat.id_golongan_berikutnya= gol.id_golongan')->get('data_jadwal_naik_pangkat')->row('golongan'));?>.
        Yang dapat dilaksanakan pada tanggal <?php echo tanggal_indonesia($this->db->where('nip',$this->session->userdata('nip'))->get('data_jadwal_naik_pangkat')->row('jadwal_kp'));?></td>
        </tr>
    </table>
    <br><br>
    <table style="width:100%; table-layout:fixed;margin-left:40px; font-size:14px; margin-right:70px;text-align:justify;">
        <tr>
            <td width='100%'>Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</td>
        </tr>
    </table>
    <br><br>
    <p style="margin-top:-10px; margin-left:489px;font-size:13px">Bogor, <?php echo tgl_indo(date('Y-m-d'));?></p>
    <p style="margin-top:-20px; margin-left:489px;font-size:13px">Kepala Balai,</p><br><br><br><br>
    <p style="margin-top:-20px; margin-left:489px;font-size:13px"><?php echo ($this->db->where('id_jabatan=2') ->get('data_pegawai')->row('nama_pegawai'));?></p>
    <p style="margin-top:-20px; margin-left:489px;font-size:13px"><?php echo ($this->db->where('id_jabatan=2') ->get('data_pegawai')->row('nip'));?></p>
</body></html>
<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
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
	$pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
}