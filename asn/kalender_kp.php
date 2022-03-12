<?php
include "koneksi.php";
$tampil = mysqli_query($koneksi, "SELECT nama_pegawai,jadwal_kp FROM data_jadwal_naik_pangkat INNER JOIN data_pegawai ON data_jadwal_naik_pangkat.nip = data_pegawai.nip order by kode_kp") ;
    $dataArr = array();
    while($data = mysqli_fetch_array($tampil)){
        $dataArr[] = array(
            'title' => $data['nama_pegawai'],
            'start' => $data['jadwal_kp'],
        );
    }
    echo json_encode($dataArr);
?>