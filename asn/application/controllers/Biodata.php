<?php

class Biodata extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_pegawai');
		$this->load->Model('Model_login');
        $this->load->helper('url');
        $this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
    }
    function index()
	{
		$email = $this->session->userdata('email');
		$data['data_pegawai'] = $this->Model_pegawai->getDetail1($email);
		$data['update_foto'] = $this->Model_pegawai->getDetail1($email);
		$data['title'] = "ASN BALITKLIMAT | Detail Pegawai";
		$this->load->view('templates/v_template', $data);
		$this->load->view('Biodata_Pegawai/v_detail_biodata', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>