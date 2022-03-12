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
        $tglawal = $this->input->post('tglawal');
        $tglakhir = $this->input->post('tglakhir');
        $pdfjns = $this->input->post('pdfjns');
        $pdfpeg = $this->input->post('pdfpeg');
        $pdfstat = $this->input->post('pdfstat');
    }

    public function blok()
    {
        echo "blok";
    }
}
