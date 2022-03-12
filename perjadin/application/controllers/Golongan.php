<?php

class Golongan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_golongan');
        $this->load->helper('url');
    }
    function index()
    {
        $data['data_golongan'] = $this->Model_golongan->tampil_data('data_golongan')->result();
        $data['title'] = "ASN BALITKLIMAT | Data Golongan";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_golongan/v_golongan',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'ASN BALITKLIMAT | Tambah Golongan';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Golongan/tambah_golongan',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi()
    {
        $golongan = $this->input->post('golongan');
        $data = array(
            'golongan' =>$golongan,
        );
        $this->Model_golongan->input_data($data, 'data_golongan');
        redirect('golongan');
    }
    function edit($id_golongan)
    {
        $where = array('id_golongan' => $id_golongan);
        $data['data_golongan'] = $this->db->query("SELECT * FROM data_golongan WHERE id_golongan='$id_golongan'")->result();
        $data['title'] = "Edit Data Golongan | ASN";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/data_golongan/update_golongan', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $id_golongan = $this->input->post('id_golongan');
        $data['data_golongan'] = $this->db->query("SELECT * FROM data_golongan WHERE id_golongan='$id_golongan'")->result();
        $golongan = $this->input->post('golongan');
        $data = array(
            'golongan' =>$golongan,
        );
        $where = array(
            'id_golongan' => $id_golongan
        );
        $this->load->Model('Model_golongan');
        $this->Model_golongan->update_data($where, $data, 'data_golongan');
        redirect('golongan');
    }
    function hapus($id_golongan)
	{
		$where = array('id_golongan' => $id_golongan);
		$this->Model_golongan->hapus_data($where, 'data_golongan');
		redirect('golongan');
	}
}