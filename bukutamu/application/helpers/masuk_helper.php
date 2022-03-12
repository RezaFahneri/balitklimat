<?php

function cekmasuk()
{
    $gi = get_instance();
    if (!$gi->session->userdata('email')) {
        redirect('masuk');
    } else {
        $jenis = $gi->session->userdata('jenis');
        $akses = $gi->uri->segment(1);
        $akses2 = $gi->uri->segment(2);

        if ($jenis == 'pegawai' && $akses == 'admin') {
            redirect('pegawai/bukutamu_a');
            // } elseif ($jenis == 'pegawai' && $akses == 'peserta') {
            //     redirect('pegawai/dashboard');
            // } elseif ($jenis == 'pegawai' && $akses == 'admin') {
            //     redirect('pegawai/dashboard');
            // } elseif ($jenis == 'peserta' && $akses == 'admin') {
            //     redirect('peserta/laporan');
        } elseif ($jenis == 'admin' && $akses == 'pegawai') {
            redirect('admin/dashboard');
        } //elseif ($jenis == 'admin' && $akses == 'peserta') {
        //     redirect('admin/dashboard');
        // }
    }
}
