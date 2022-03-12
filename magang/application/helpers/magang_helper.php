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

        if ($jenis == 'peserta' && $akses == 'pegawai') {
            redirect('peserta/laporan');
        } elseif ($jenis == 'pegawai' && $akses == 'peserta') {
            redirect('pegawai/penugasan');
        }
    }
}
