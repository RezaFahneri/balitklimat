<?php

class Kota extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kota');
        $this->load->Model('Model_sbuh');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
    }
    function index()
    {
        $data['data_kota'] = $this->Model_kota->getList();
        $data['title'] = "PERJADIN BALITKLIMAT | Data Kota";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Kota/v_kota',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'PERJADIN BALITKLIMAT | Tambah Data Kota';
        $data['provinsi'] = $this->Model_sbuh->getList();
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Kota/v_tambah_data_kota',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi()
    {
        $kota = $this->input->post('kota');
        $data = array(
            'kota' =>$kota,
            'id_sbuh' =>$this->input->post('id_sbuh'),
        );
        $this->Model_kota->input_data($data, 'data_kota');
        $this->session->set_flashdata('sukses','Data '.$kota.' berhasil ditambahkan');
        redirect('kota');
    }
    function edit()
    {
        $id_kota = $this->input->get('id_kota');
        $data['data_kota'] = $this->Model_kota->getList2($id_kota);
        $data['provinsi'] = $this->Model_sbuh->getList();
        $data['title'] = 'PERJADIN BALITKLIMAT | Edit Data Kota';
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Kota/v_edit_data_kota', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $id_kota = $this->input->post('id_kota');
        $kota = $this->input->post('kota');
        $data = array(
            'kota' =>$kota,
        );
        $where = array(
            'id_kota' => $id_kota
        );
        $this->load->Model('Model_kota');
        $this->Model_kota->update_data($where, $data, 'data_kota');
        $this->session->set_flashdata('sukses','Data kota berhasil diperbarui');
        redirect('kota');
    }
    function hapus($id_kota)
	{
		$where = array('id_kota' => $id_kota);
		if($this->Model_kota->hapus_data($where, 'data_kota')==true):
        $this->session->set_flashdata('sukses','Data kota berhasil dihapus');
		redirect('kota');
        endif;
        $where = array('id_kota' => $id_kota);
		if($this->Model_kota->hapus_data($where, 'data_kota')==false):
        $this->session->set_flashdata('error','Data kota gagal dihapus karena data kota ini digunakan pada tabel lain');
        redirect('kota');
        endif;
	}

    function get_data_sbuh(){
		$id_sbuh=$this->input->post('id_sbuh');
		$data=$this->Model_sbuh->get_data_sbuh($id_sbuh);
		echo json_encode($data);
	}
}