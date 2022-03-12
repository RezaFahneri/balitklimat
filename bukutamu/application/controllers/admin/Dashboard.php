<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar_adm');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}
