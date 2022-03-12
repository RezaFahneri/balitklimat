<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_barang extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_jenis');
        $this->load->helper('url');
        // if ($this->session->userdata('logged_in') == false) {
		// 	redirect('login');
		// }
    }
    function index()
    {
        $data['jenis_barang'] = $this->Model_jenis->tampil_data('jenis_barang')->result();
        $data['title'] = "Jenis Barang | Balitklimat";
        $this->load->view('template/template',$data);
		$this->load->view('master/v_jenis_barang',$data);
        $this->load->view('template/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'Tambah Jenis Barang | Balitklimat';
        $this->load->view('template/template',$data);
		$this->load->view('master/v_tambah_jenis',$data);
        $this->load->view('template/footer',$data);
	}
    function tambah_aksi()
    {
        $jenis_barang = $this->input->post('jenis_barang');
        $data = array(
            'jenis_barang' =>$jenis_barang,
        );
        $this->Model_jenis->input_data($data, 'jenis_barang');
        $this->session->set_flashdata('sukses', 'Data jenis barang berhasil ditambah');
        redirect('jenis_barang');
    }
    function edit($id)
    {
        $where = array('id_jenis' => $id);
        $data['jenis_barang'] = $this->db->query("SELECT * FROM jenis_barang WHERE id_jenis='$id'")->result();
        $data['title'] = "Edit Data Jenis Barang | Balitklimat";
        $this->load->view('template/template',$data);
		$this->load->view('master/v_update_jenis',$data);
        $this->load->view('template/footer',$data);
    }
    function update()
    {
        $id = $this->input->post('id_jenis');
        $data['jenis_barang'] = $this->db->query("SELECT * FROM jenis_barang WHERE id_jenis='$id'")->result();
        $jenis_barang = $this->input->post('jenis_barang');
        $data = array(
            'jenis_barang' =>$jenis_barang,
        );
        $where = array(
            'id_jenis' => $id
        );
        $this->load->Model('Model_jenis');
        $this->Model_jenis->update_data($where, $data, 'jenis_barang');
        $this->session->set_flashdata('sukses', 'Data jenis barang berhasil diperbarui');
        redirect('jenis_barang');
    }
    function hapus($id)
	{
		$where = array('id_jenis' => $id);
		$this->Model_jenis->hapus_data($where, 'jenis_barang');
        $this->session->set_flashdata('sukses', 'Data jenis barang berhasil dihapus');
		redirect('jenis_barang');
	}
}