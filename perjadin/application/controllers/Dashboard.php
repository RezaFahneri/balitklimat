<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kegiatan');
        $this->load->Model('Model_dashboard');
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->helper('url');
        $data['title']="PERJADIN BALITKLIMAT | Dashboard";
        $data['data_anggota_perjadin'] = $this->Model_dashboard->getListAnggota();
        $data['data_mak'] = $this->Model_dashboard->getListMak();
        $data['data_kegiatan'] = $this->Model_dashboard->getListKegiatan();
        $this->load->view('templates/v_template',$data);
		$this->load->view('templates/v_dashboard',$data);
        $this->load->view('templates/footer',$data);
    }
    public function logout(){
		$data = array(
			'email'	=> '',
			'logged_in'	=> false
		);

		$this->session->sess_destroy();
		redirect('login');
	}
}