<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_tamu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        $data['title'] = 'Admin | Dashboard';
        $data['user'] = $this->Model_buku_tamu->getuser();
        // $data['detail'] = $this->Model_buku_tamu->get_data('buku_tamu');
        $ket1 = 'data_pegawai.nip = buku_tamu.pegawai_nip';
        $getdetail = $this->Model_buku_tamu->join2nowhere('buku_tamu', 'data_pegawai', $ket1);
        $data['detail'] = $getdetail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar_adm');
        $this->load->view('admin/data_tamu/index', $data);
        $this->load->view('templates/footer');
    }
}
