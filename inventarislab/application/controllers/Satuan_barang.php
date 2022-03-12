<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan_barang extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_satuan');
        $this->load->helper('url');
        // if ($this->session->userdata('logged_in') == false) {
		// 	redirect('login');
		// }
    }
    function index()
    {
        $data['satuan_barang'] = $this->Model_satuan->tampil_data('satuan_barang')->result();
        $data['title'] = "Satuan Barang | Balitklimat";
        $this->load->view('template/template',$data);
		$this->load->view('master/v_satuan_barang',$data);
        $this->load->view('template/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'Tambah Satuan Barang | Balitklimat';
        $this->load->view('template/template',$data);
		$this->load->view('master/v_tambah_satuan',$data);
        $this->load->view('template/footer',$data);
	}
    function tambah_aksi()
    {
        $satuan_barang = $this->input->post('satuan_barang');
        $data = array(
            'satuan_barang' =>$satuan_barang,
        );
        $this->Model_satuan->input_data($data, 'satuan_barang');
        $this->session->set_flashdata('sukses', 'Data satuan barang berhasil ditambah');
        redirect('satuan_barang');
    }
    function edit($id)
    {
        $where = array('id_satuan' => $id);
        $data['satuan_barang'] = $this->db->query("SELECT * FROM satuan_barang WHERE id_satuan='$id'")->result();
        $data['title'] = "Edit Data Satuan Barang | Balitklimat";
        $this->load->view('template/template',$data);
		$this->load->view('master/v_update_satuan',$data);
        $this->load->view('template/footer',$data);
    }
    function update()
    {
        $id = $this->input->post('id_satuan');
        $data['satuan_barang'] = $this->db->query("SELECT * FROM satuan_barang WHERE id_satuan='$id'")->result();
        $satuan_barang = $this->input->post('satuan_barang');
        $data = array(
            'satuan_barang' =>$satuan_barang,
        );
        $where = array(
            'id_satuan' => $id
        );
        $this->load->Model('Model_satuan');
        $this->Model_satuan->update_data($where, $data, 'satuan_barang');
        $this->session->set_flashdata('sukses', 'Data satuan barang berhasil diperbarui');
        redirect('satuan_barang');
    }
    function hapus($id)
	{
		$where = array('id_satuan' => $id);
		$this->Model_satuan->hapus_data($where, 'satuan_barang');
        $this->session->set_flashdata('sukses', 'Data satuan barang berhasil dihapus');
		redirect('satuan_barang');
	}
}