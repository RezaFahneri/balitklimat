<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bukutamu_b extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        $data['title'] = 'Pegawai | Tamu Tidak Bertemu';
        $data['user'] = $this->Model_buku_tamu->getuser();
        $data['sub'] = 'Buku Tamu - Tidak Bertemu';
        $ket = ['pegawai_nip' => $data['user']['nip'], 'jenis' => 'Tidak Bertemu'];
        $data['detail'] = $this->Model_buku_tamu->getdet('buku_tamu', $ket, 'tanggal', 'DESC')->result();
        // var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/bukutamu_b', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_buku_tamu)
    {
        $data['title'] = 'Pegawai | Detail Penugasan';
        $ketb = 'data_divisi.id_divisi = buku_tamu.id_divisi';
        $where = 'buku_tamu.id_buku_tamu';
        $detail = $this->Model_buku_tamu->join2where('buku_tamu', 'data_divisi', $ketb, $where, $id_buku_tamu, 'left')->row();
        $data['detail'] = $detail;
        // var_dump($detail);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/v_detail_b', $data);
        $this->load->view('templates/footer');
    }

    public function tambah($id_buku_tamu)
    {
        $ket = ['id_buku_tamu' => $id_buku_tamu];
        $data = [
            'laporan' => htmlspecialchars($this->input->post('ket'))
        ];
        $this->Model_buku_tamu->updata('buku_tamu', $data, $ket);
        // var_dump($ket, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:90%">Laporan Berhasil Disimpan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> </div>');
        redirect('pegawai/bukutamu_b/detail/' . $id_buku_tamu);
    }
    public function hapus($id_buku_tamu)
    {
        $ket = ['id_buku_tamu' => $id_buku_tamu];
        $data = [
            'laporan' => null
        ];
        $this->Model_buku_tamu->updata('buku_tamu', $data, $ket);
        // var_dump($ket, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:90%">Laporan Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> </div>');
        redirect('pegawai/bukutamu_b/detail/' . $id_buku_tamu);
    }
    public function hapusall($id_buku_tamu)
    {
        $ket = ['id_buku_tamu' => $id_buku_tamu];
        $this->Model_buku_tamu->hapus('buku_tamu', $ket);
        // var_dump($ket, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> </div>');
        redirect('pegawai/bukutamu_b');
    }
}
