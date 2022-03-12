<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Model_pegawai');
		$this->load->Model('Model_login');
		$this->load->Model('Model_profil');
		$this->load->helper('url');
		$this->load->library('session');
		if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
	}

	function index()
	{
		$email = $this->session->userdata('email');
		$data['data_pegawai'] = $this->Model_pegawai->getDetail($email);
		$data['update_foto'] = $this->Model_pegawai->getDetail($email);
		// $nip = $this->input->post('nip');
		// $data['detail'] =  $this->Model_pegawai->getDetail($nip);
		$data['title'] = "PERJADIN BALITKLIMAT | Detail Pegawai";
		$this->load->view('template/template', $data);
		$this->load->view('profil/v_detail_profil', $data);
		$this->load->view('template/footer', $data);
	}

	function edit()
	{
		$data['title'] = "PERJADIN BALITKLIMAT | Edit Detail Pegawai";
		$data['update_profil'] = $this->db->get_where('data_pegawai', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('template/template', $data);
		$this->load->view('Profil/v_edit_detail_profil', $data);
		$this->load->view('template/footer', $data);
	}
	function update()
	{
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		$cpassword = $this->input->post('cpassword');
		if ($password == $cpassword) {
			$data1 = array(
				'password' => $this->input->post('password'),
			);
			$where = array(
				'nip'   => $nip,
			);
			if ($this->Model_profil->update_data($where, $data1, 'data_pegawai')) {
				$this->session->set_flashdata('sukses', 'Password berhasil diperbaharui');
				redirect('profil');
			} else {
				$this->session->set_flashdata('error');
			}
			$this->session->set_flashdata('sukses', 'Password berhasil diperbaharui');
			redirect('profil');
		} else {
			$this->session->set_flashdata('error', 'Konfirmasi password tidak sesuai');
			redirect('profil/edit');
		}
	}

	function update_foto()
	{
		$config['upload_path'] = './assets/images/foto/';
		$config['allowed_types'] = 'jpg|jpeg|png|svg';
		$config['max_size'] = 10000;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			$nip = $this->input->post('nip');
			$fileData = $this->upload->data();
			$data1 = array(
				'foto'  => $fileData['file_name'],
			);
			$where = array(
				'nip'   => $nip,
			);
			if ($this->Model_profil->update_data($where, $data1, 'data_pegawai')) {
				$this->session->set_flashdata('sukses', 'Data profil berhasil diperbaharui');
				redirect('profil');
			} else {
				$this->session->set_flashdata('error');
			}
			$this->session->set_flashdata('sukses', 'Data profil berhasil diperbaharui');
			redirect('profil');
		} else {
			$this->session->set_flashdata('error', 'Format foto tidak didukung');
			redirect('profil');
		}
	}
}
