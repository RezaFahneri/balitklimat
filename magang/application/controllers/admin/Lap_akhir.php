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
        $data['user'] = $this->Model_admin->getuser();
        $nip = $data['user']['nip'];
        $data['nip'] = $data['user']['nip'];
        $ket1 = 'laporan_akhir.id_pm = peserta_magang.id_pm';
        $ket2 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
        $ket = 'peserta_magang.pembimbing_balai';
        $getdetail = $this->Model_admin->ajoin3('peserta_magang', 'laporan_akhir', 'data_pegawai', $ket1, $ket2, $ket, $nip, 'inner', 'inner', 'tgl_up_lapak', 'DESC')->result();
        // $getdetail = $this->Model_admin->join3arrinner('peserta_magang', 'laporan_akhir', 'data_pegawai', $ket1, $ket2, $ket, $nip);
        $data['detail'] = $getdetail;
        // var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/lap_akhir/index', $data);
        $this->load->view('templates/footer');
    }
    public function lap_akhir_seluruh()
    {
        //echo 'selamat datang ' . $data['user2']['nama_pm'];
        $data['title'] = 'Pegawai | Laporan Akhir Peserta Bimbingan';
        $data['sub'] = 'Laporan Akhir Seluruh Peserta';
        $data['user'] = $this->Model_admin->getuser();
        $nip = $data['user']['nip'];
        $data['nip'] = $data['user']['nip'];
        $ket1 = 'laporan_akhir.id_pm = peserta_magang.id_pm';
        $ket2 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
        $getdetail = $this->Model_admin->Bjoin3('peserta_magang', 'laporan_akhir', 'data_pegawai', $ket1, $ket2, 'inner', 'inner', 'tgl_up_lapak', 'DESC')->result();
        $data['details'] = $getdetail;
        // var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/lap_akhir/index', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id_lapak)
    {
        $data['title'] = 'Pegawai | Detail Laporan Akhir';
        $data['user'] = $this->Model_admin->getuser();
        $data['nip'] = $data['user']['nip'];
        $ket = ['id_lapak' => $id_lapak];
        $ket1 = 'laporan_akhir.id_pm = peserta_magang.id_pm';
        $ket2 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
        $ket = 'laporan_akhir.id_lapak';
        $getdetail = $this->Model_admin->ajoin3('peserta_magang', 'laporan_akhir', 'data_pegawai', $ket1, $ket2, $ket, $id_lapak, 'inner', 'inner')->row();
        // $getdetail = $this->Model_admin->specjoin3arrinner('peserta_magang', 'laporan_akhir', 'data_pegawai', $ket1, $ket2, $ket, $id_lapak);
        $data['detail'] = $getdetail;
        // var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/lap_akhir/v_detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id_lapak)
    {
        $ket = ['id_lapak' => $id_lapak];
        $this->Model_pegawai->hapus('peserta_magang', $ket);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Peserta berhasil dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        redirect('admin/lap_akhir/lap_akhir_seluruh');
        // var_dump($getdetail);
    }
    public function hapus2($id_lapak)
    {
        $$ket = ['id_lapak' => $id_lapak];
        $this->Model_pegawai->hapus('peserta_magang', $ket);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Peserta berhasil dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        redirect('admin/lap_akhir');
        // var_dump($getdetail);
    }
}
