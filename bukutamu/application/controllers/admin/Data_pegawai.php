<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        $data['title'] = 'Admin | Pegawai';
        $data['user2'] = $this->Model_buku_tamu->getuser();
        $ket1 = 'data_divisi.id_divisi = data_pegawai.id_divisi';
        $ket2 = 'data_jabatan.id_jabatan = data_pegawai.id_jabatan';
        $getdetail = $this->Model_buku_tamu->bjoin3('data_pegawai', 'data_divisi', 'data_jabatan', $ket1, $ket2, 'inner', 'inner')->result();
        $data['detail'] = $getdetail;
        // var_dump($getdetail);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar_adm');
        $this->load->view('admin/pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($nip)
    {
        $data['title'] = 'Admin | Detal Pegawai';
        $data['user2'] = $this->Model_buku_tamu->getuser();
        $keta = 'data_divisi.id_divisi = data_pegawai.id_divisi';
        $ketb = 'data_jabatan.id_jabatan = data_pegawai.id_jabatan';
        $getdetail = $this->Model_buku_tamu->ajoin3('data_pegawai', 'data_divisi', 'data_jabatan', $keta, $ketb, 'nip', $nip, 'inner', 'inner')->row();
        $data['detail'] = $getdetail;
        $ket = ['pegawai_nip' => $nip];
        $data['detaila'] = $this->Model_buku_tamu->getdet('buku_tamu', $ket, 'tanggal', 'DESC')->result();
        $keterangan = ['pegawai_nip' => $nip, 'jenis' => 'Bertemu'];
        $data['a'] = $this->Model_buku_tamu->getdet('buku_tamu', $keterangan)->result();
        $keterangan = ['pegawai_nip' => $nip, 'jenis' => 'Tidak Bertemu'];
        $data['b'] = $this->Model_buku_tamu->getdet('buku_tamu', $keterangan)->result();
        // var_dump($detail);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar_adm');
        $this->load->view('admin/pegawai/v_detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapusall($id_buku_tamu)
    {
        $ket = ['id_buku_tamu' => $id_buku_tamu];
        $this->Model_buku_tamu->hapus('buku_tamu', $ket);
        // var_dump($ket, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> </div>');
        redirect('admin/bukutamu_b');
    }
}
