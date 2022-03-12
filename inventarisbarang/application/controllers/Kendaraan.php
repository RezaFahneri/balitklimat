<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kendaraan');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
    }
    function index()
    {
        $data['data_kendaraan'] = $this->Model_kendaraan->tampil_data('data_kendaraan')->result();
        $data['title'] = "Data Kendaraan | Balitklimat";
        $this->load->view('template/template',$data);
		$this->load->view('kendaraan/v_data_kendaraan',$data);
        $this->load->view('template/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'Tambah Data Kendaraan | Balitklimat';
        $this->load->view('template/template',$data);
		$this->load->view('kendaraan/v_tambah_kendaraan',$data);
        $this->load->view('template/footer',$data);
	}
    function tambah_aksi()
    {
        $no_polisi = $this->input->post('no_polisi');
        $merk = $this->input->post('merk');
        $jenis = $this->input->post('jenis');
        $status = $this->input->post('status');
        $data = array(
            'no_polisi' =>$no_polisi,
            'merk' =>$merk,
            'jenis' =>$jenis,
            'status' =>$status,
        );
        $this->Model_kendaraan->input_data($data, 'data_kendaraan');
        $this->session->set_flashdata('sukses', 'Data kendaraan berhasil ditambah');
        redirect('kendaraan');
    }
    function edit($id)
    {
        $where = array('id_kendaraan' => $id);
        $data['edit'] = $this->db->query("SELECT * FROM data_kendaraan WHERE id_kendaraan='$id'")->result();
        $data['title'] = "Edit Data Kendaraan | Balitklimat";
        $this->load->view('template/template',$data);
		$this->load->view('kendaraan/v_update_kendaraan',$data);
        $this->load->view('template/footer',$data);
    }
    function update()
    {
        $id = $this->input->post('id_kendaraan');
        $data['edit'] = $this->db->query("SELECT * FROM data_kendaraan WHERE id_kendaraan='$id'")->result();
        $no_polisi = $this->input->post('no_polisi');
        $merk = $this->input->post('merk');
        $jenis = $this->input->post('jenis');
        $data = array(
            'no_polisi' =>$no_polisi,
            'merk' =>$merk,
            'jenis' =>$jenis,
        );
        $where = array(
            'id_kendaraan' => $id
        );
        $this->load->Model('Model_kendaraan');
        $this->Model_kendaraan->update_data($where, $data, 'data_kendaraan');
        $this->session->set_flashdata('sukses', 'Data kendaraan berhasil diperbarui');
        redirect('kendaraan');
    }
    function hapus($id)
	{
		if ($this->Model_kendaraan->hapus_data($id) == true) :
            $this->session->set_flashdata('sukses', 'Data kendaraan berhasil dihapus');
            redirect('data_kendaraan');
        endif;
        if ($this->Model_kendaraan->hapus_data($id) == false) :
            $this->session->set_flashdata('gagal', 'Data kendaraan ini digunakan pada tabel lain');
            redirect('data_kendaraan');
        endif;
	}
}