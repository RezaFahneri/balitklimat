<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// 	$this->load->library('session');
		// 	// $this->load->Model('Model_login');
		// 	// // if($this->Login_Model->accountCheck() == true){
		// 	// // 	redirect('setup');
		// 	// // }
		// 	// // if($this->session->userdata('logged_in') == true){
		// 	// // 	redirect('welcome');
		// 	// // }
		if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
		$this->load->model('Model_dashboard');
	}

	public function index()
	{
		$data['title'] = "Dashboard | Balitklimat";
		$data['total_barang'] = $this->Model_dashboard->count('stok_barang');
		$data['total_stok'] = $this->Model_dashboard->sum('stok_barang', 'jumlah_barang');
		$data['peminjam'] = $this->Model_dashboard->count('pinjam_barang', 'peminjam');
		$data['barang_pinjam'] = $this->Model_dashboard->sum('pinjam_barang', 'qty');
		$this->load->view('template/template', $data);
		$this->load->view('v_dashboard');
		$this->load->view('template/footer', $data);
	}

	public function logout()
	{
		$data = array(
			'email'	=> '',
			'logged_in'	=> false,
		);

		$this->session->sess_destroy();
		redirect('login');
	}
}
