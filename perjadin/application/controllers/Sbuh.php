<?php

class Sbuh extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_sbuh');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
    }
    function index()
    {
        $data['data_sbuh'] = $this->Model_sbuh->getList();
        $data['title'] = "PERJADIN BALITKLIMAT | Data Standar Biaya Uang Harian";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Sbuh/v_data_sbuh',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'PERJADIN BALITKLIMAT | Tambah Data Standar Biaya Uang Harian';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Sbuh/v_tambah_data_sbuh',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi()
    {
        $nama_provinsi=$this->input->post('nama_provinsi');
        $data = array(
            'nama_provinsi' => $nama_provinsi,
            'luar_kota' =>$this->input->post('luar_kota'),
            'dalam_kota' =>$this->input->post('dalam_kota'),
        );
        $this->Model_sbuh->input_data($data, 'data_sbuh');
        $this->session->set_flashdata('sukses','Data standar biaya uang harian provinsi '.$nama_provinsi.' berhasil ditambahkan');
        redirect('sbuh');
    }
    function edit()
    {
        $id_sbuh = $this->input->get('id_sbuh');
        $data['data_sbuh'] = $this->Model_sbuh->getList2($id_sbuh);
        $data['title'] = 'PERJADIN BALITKLIMAT | Edit Data Standar Biaya Uang Harian';
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Sbuh/v_edit_data_sbuh', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $nama_provinsi=$this->input->post('nama_provinsi');
        $id_sbuh = $this->input->post('id_sbuh');
        $data = array(
            'nama_provinsi' => $nama_provinsi,
            'luar_kota' =>$this->input->post('luar_kota'),
            'dalam_kota' =>$this->input->post('dalam_kota'),
        );
        $where = array(
            'id_sbuh' => $id_sbuh
        );
        $this->Model_sbuh->update_data($where, $data, 'data_sbuh');
        $this->session->set_flashdata('sukses','Data standar biaya uang harian provinsi '.$nama_provinsi.' berhasil diperbarui');
        redirect('sbuh');
    }
    function hapus($id_sbuh)
	{
		$where = array('id_sbuh' => $id_sbuh);
		if($this->Model_sbuh->hapus_data($where, 'data_sbuh')==true):
        $this->session->set_flashdata('sukses','Data standar biaya uang harian berhasil dihapus');
		redirect('sbuh');
        endif;
        $where = array('id_sbuh' => $id_sbuh);
		if($this->Model_sbuh->hapus_data($where, 'data_sbuh')==false):
        $this->session->set_flashdata('error','Data standar biaya uang harian gagal dihapus karena data ini digunakan pada tabel lain');
        redirect('sbuh');
        endif;
	}
}