<?php

class Riwayat_peminjaman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_riwayat');
        $this->load->Model('Model_stok');
        $this->load->helper('url', 'array', 'fungsi');
        $this->load->library('form_validation', 'upload');
        $this->load->library('session');
        if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
    }

    function index()
    {
        $data['data_riwayat'] = $this->Model_riwayat->getList();
        $data['title'] = "Riwayat Peminjaman Barang | Balitklimat";
        $this->load->view('template/template', $data);
        $this->load->view('peminjaman/v_riwayat_peminjaman', $data);
        $this->load->view('template/footer', $data);
    }

    public function detail($id)
    {
        $data['title'] = "Detail Riwayat Peminjaman Barang | Balitklimat";
        $data['detail'] = $this->Model_riwayat->detail_data($id);
        $this->load->view('template/template', $data);
        $this->load->view('peminjaman/v_detail_riwayat', $data);
        $this->load->view('template/footer');
    }
}
