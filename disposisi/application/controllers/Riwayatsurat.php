<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayatsurat extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
        $this->load->Model('Riwayatsurat_m');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['suratmasuk'] = $this->Riwayatsurat_m->join2left();
        $data['title'] = "Riwayat Surat Masuk | Disposisi";
        $this->load->view('template/template',$data);
		$this->load->view('RiwayatSurat/v_riwayatsuratmasuk',$data);
        $this->load->view('template/footer',$data);
    }

    public function detail($id_suratmasuk)
    {
        $detail = $this->Riwayatsurat_m->detail_data($id_suratmasuk);
        $data['detail'] = $detail;
        $sifatsurat_id = $detail->sifatsurat_id;
        $data['title'] = 'Detail Riwayat Surat Masuk | Disposisi';
        $this->load->view('template/template', $data);
        $this->load->view('RiwayatSurat/v_detailriwayatsurat', $data);
        $this->load->view('template/footer', $data);
    }
}