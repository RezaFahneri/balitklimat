<?php
include "koneksi.php";
$tampil = mysqli_query($koneksi, "SELECT nama_pegawai,jadwal_kgb FROM data_jadwal_gaji_berkala INNER JOIN data_pegawai ON data_jadwal_gaji_berkala.nip = data_pegawai.nip order by kode_kgb") ;
    $dataArr = array();
    while($data = mysqli_fetch_array($tampil)){
        $dataArr[] = array(
            'title' => $data['nama_pegawai'],
            'start' => $data['jadwal_kgb'],
        );
    }
    echo json_encode($dataArr);
?>