<?php

class Kenaikan_Pangkat extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kenaikan_pangkat');
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
		$data['kenaikan_pangkat'] = $this->Model_kenaikan_pangkat->getDetail1($email);
		$data['title'] = "ASN BALITKLIMAT | Detail Pegawai";
		$this->load->view('templates/v_template', $data);
		$this->load->view('Kenaikan_Pangkat/v_detail_jadwal_pangkat', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>