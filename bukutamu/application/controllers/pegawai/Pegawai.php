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
        $data['title'] = 'Pegawai | Dashboard';
        $data['user'] = $this->Model_buku_tamu->getuser();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function bukutamu_a()
    {
        $data['title'] = 'Pegawai | Buku Tamu A';
        echo 'bukutamu a';
    }
    public function bukutamu_b()
    {
        $data['title'] = 'Pegawai | Buku Tamu B';
        echo 'bukutamu b';
    }
}
