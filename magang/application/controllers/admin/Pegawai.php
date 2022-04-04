<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        $data['title'] = 'Admin | Pegawai';
        $data['user2'] = $this->Model_admin->getuser();
        $ket1 = 'data_divisi.id_divisi = data_pegawai.id_divisi';
        $ket2 = 'data_jabatan.id_jabatan = data_pegawai.id_jabatan';
        $getdetail = $this->Model_pegawai->bjoin3('data_pegawai', 'data_divisi', 'data_jabatan', $ket1, $ket2, 'inner', 'inner')->result();
        $data['detail'] = $getdetail;
        // var_dump($getdetail);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pegawai/index', $data);
        $this->load->view('templates/footer');
    }
    public function detail($nip)
    {
        $data['title'] = 'Admin | Detail Pegawai';
        $data['user2'] = $this->Model_admin->getuser();
        $ket1 = ['pembimbing_balai' => $nip];
        $keta = 'data_divisi.id_divisi = data_pegawai.id_divisi';
        $ketb = 'data_jabatan.id_jabatan = data_pegawai.id_jabatan';
        $getdetail = $this->Model_pegawai->ajoin3('data_pegawai', 'data_divisi', 'data_jabatan', $keta, $ketb, 'nip', $nip, 'inner', 'inner')->row();
        $data['detail'] = $getdetail;
        $getpeserta = $this->Model_admin->getdet('peserta_magang', $ket1, 'nama_pm', 'ASC')->result();
        $data['peserta'] = $getpeserta;
        $ket = ['pembimbing_balai' => $nip];
        $data['ps'] = $this->Model_admin->getdet('peserta_magang', $ket, 'nama_pm', 'ASC')->result();
        $data['all1'] = count($this->Model_admin->getdet('peserta_magang', $ket, 'nama_pm', 'ASC')->result());
        $ketb1 = ['pembimbing_balai' => $nip, 'status_pm' => 'berlangsung', 'jns_magang' => 'Mahasiswa'];
        $ketb2 = ['pembimbing_balai' => $nip, 'status_pm' => 'berlangsung', 'jns_magang' => 'Mandiri'];
        $ketb3 = ['pembimbing_balai' => $nip, 'status_pm' => 'berlangsung', 'jns_magang' => 'Siswa'];
        $ketb4 = ['pembimbing_balai' => $nip, 'status_pm' => 'berlangsung'];
        $data['b1'] = count($this->Model_admin->getdet('peserta_magang', $ketb1)->result());
        $data['b2'] = count($this->Model_admin->getdet('peserta_magang', $ketb2)->result());
        $data['b3'] = count($this->Model_admin->getdet('peserta_magang', $ketb3)->result());
        $data['b4'] = count($this->Model_admin->getdet('peserta_magang', $ketb4)->result());
        $kets1 = ['pembimbing_balai' => $nip, 'status_pm' => 'selesai', 'jns_magang' => 'Mahasiswa'];
        $kets2 = ['pembimbing_balai' => $nip, 'status_pm' => 'selesai', 'jns_magang' => 'Mandiri'];
        $kets3 = ['pembimbing_balai' => $nip, 'status_pm' => 'selesai', 'jns_magang' => 'Siswa'];
        $kets4 = ['pembimbing_balai' => $nip, 'status_pm' => 'selesai'];
        $data['s1'] = count($this->Model_admin->getdet('peserta_magang', $kets1)->result());
        $data['s2'] = count($this->Model_admin->getdet('peserta_magang', $kets2)->result());
        $data['s3'] = count($this->Model_admin->getdet('peserta_magang', $kets3)->result());
        $data['s4'] = count($this->Model_admin->getdet('peserta_magang', $kets4)->result());
        // var_dump($getdetail);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pegawai/v_detail', $data);
        $this->load->view('templates/footer');
    }
}
