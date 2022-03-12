<?php

class Kenaikan_Gajiberkala extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kenaikan_gaji');
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
		$data['kenaikan_gajiberkala'] = $this->Model_kenaikan_gaji->getDetail1($email);
		$data['title'] = "ASN BALITKLIMAT | Detail Pegawai";
		$this->load->view('templates/v_template', $data);
		$this->load->view('Kenaikan_Gaji/v_detail_jadwal_gaji', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>