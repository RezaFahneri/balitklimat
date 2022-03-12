<?php

class Statistik extends CI_Controller
{
    public $result = [
        'status'  => false,
        'data'    => []
    ];
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kegiatan');
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_jenis_keg');
        $this->load->Model('Model_perjalanan_dinas');
        $this->load->Model('Model_anggota_perjadin');
        $this->load->Model('Model_kota');
        $this->load->Model('Model_mak');
        $this->load->helper('url');
    }
    function index()
    {
        $data['jumlah_hari'] = $this->Model_anggota_perjadin->jumlahHari();        
        $data['data_anggota_perjadin'] = $this->Model_anggota_perjadin->getListStatistik();
        $data['title'] = "PERJADIN BALITKLIMAT | Data Statistik Perjalanan Dinas Pegawai";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Anggota_Perjadin/v_statistik', $data);
        $this->load->view('templates/footer', $data);
    }
}
