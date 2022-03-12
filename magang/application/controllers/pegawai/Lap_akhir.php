<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lap_akhir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        //echo 'selamat datang ' . $data['user2']['nama_pm'];
        $data['title'] = 'Pegawai | Laporan Akhir Peserta Bimbingan';
        $data['sub'] = 'Laporan Akhir Peserta Bimbingan';
        $data['user'] = $this->Model_pegawai->getuser();
        $nip = $data['user']['nip'];
        $data['nip'] = $data['user']['nip'];
        $ket1 = 'laporan_akhir.id_pm = peserta_magang.id_pm';
        $ket2 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
        $ket = 'peserta_magang.pembimbing_balai';
        $getdetail = $this->Model_pegawai->ajoin3('peserta_magang', 'laporan_akhir', 'data_pegawai', $ket1, $ket2, $ket, $nip, 'inner', 'inner', 'tgl_up_lapak', 'DESC')->result();
        // $getdetail = $this->Model_pegawai->join3arrinner('peserta_magang', 'laporan_akhir', 'data_pegawai', $ket1, $ket2, $ket, $nip);
        $data['detail'] = $getdetail;
        // var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/lap_akhir/index', $data);
        $this->load->view('templates/footer');
    }
    public function lap_akhir_seluruh()
    {
        //echo 'selamat datang ' . $data['user2']['nama_pm'];
        $data['title'] = 'Pegawai | Laporan Akhir Peserta Bimbingan';
        $data['sub'] = 'Laporan Akhir Seluruh Peserta';
        $data['user'] = $this->Model_pegawai->getuser();
        $nip = $data['user']['nip'];
        $data['nip'] = $data['user']['nip'];
        $ket1 = 'laporan_akhir.id_pm = peserta_magang.id_pm';
        $ket2 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
        $getdetail = $this->Model_pegawai->Bjoin3('peserta_magang', 'laporan_akhir', 'data_pegawai', $ket1, $ket2, 'inner', 'inner', 'tgl_up_lapak', 'DESC')->result();
        $data['details'] = $getdetail;
        // var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/lap_akhir/index', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id_lapak)
    {
        $data['title'] = 'Pegawai | Detail Laporan Akhir';
        $data['user'] = $this->Model_pegawai->getuser();
        $data['nip'] = $data['user']['nip'];
        $ket = ['id_lapak' => $id_lapak];
        $ket1 = 'laporan_akhir.id_pm = peserta_magang.id_pm';
        $ket2 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
        $ket = 'laporan_akhir.id_lapak';
        $getdetail = $this->Model_pegawai->ajoin3('peserta_magang', 'laporan_akhir', 'data_pegawai', $ket1, $ket2, $ket, $id_lapak, 'inner', 'inner')->row();
        // $getdetail = $this->Model_pegawai->specjoin3arrinner('peserta_magang', 'laporan_akhir', 'data_pegawai', $ket1, $ket2, $ket, $id_lapak);
        $data['detail'] = $getdetail;
        // var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/lap_akhir/v_detail', $data);
        $this->load->view('templates/footer');
    }
}
