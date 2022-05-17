<?php

class Biodata extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_pegawai');
		$this->load->Model('Model_detail_role');
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
		$data['detail_role'] = $this->Model_detail_role->getDetail1($email);
		$data['title'] = " ASN Balitklimat | Detail Pegawai";
		$this->load->view('templates/v_template', $data);
		$this->load->view('Biodata_Pegawai/v_detail_biodata', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>