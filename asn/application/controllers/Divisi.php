<?php

class Divisi extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_divisi');
        $this->load->helper('url');
        $this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
    }
    function index()
    {
        $data['data_divisi'] = $this->Model_divisi->tampil_data('data_divisi')->result();
        $data['title'] = "ASN BALITKLIMAT | Data Divisi";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Divisi/v_divisi',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'ASN BALITKLIMAT | Tambah Divisi';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Divisi/v_tambah_divisi',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi()
    {
        $divisi = $this->input->post('divisi');
        $data = array(
            'divisi' =>$divisi,
        );
        $this->Model_divisi->input_data($data, 'data_divisi');
        $this->session->set_flashdata('sukses','Data divisi berhasil ditambahkan');
        redirect('divisi');
    }
    function edit($id_divisi)
    {
        $where = array('id_divisi' => $id_divisi);
        $data['data_divisi'] = $this->db->query("SELECT * FROM data_divisi WHERE id_divisi='$id_divisi'")->result();
        $data['title'] = "Edit Data Divisi | ASN";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Divisi/update_divisi', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $id_divisi = $this->input->post('id_divisi');
        $data['data_divisi'] = $this->db->query("SELECT * FROM data_divisi WHERE id_divisi='$id_divisi'")->result();
        $divisi = $this->input->post('divisi');
        $data = array(
            'divisi' =>$divisi,
        );
        $where = array(
            'id_divisi' => $id_divisi
        );
        $this->load->Model('Model_divisi');
        $this->Model_divisi->update_data($where, $data, 'data_divisi');
        $this->session->set_flashdata('sukses','Data divisi berhasil diperbarui');
        redirect('divisi');
    }
    function hapus($id_divisi)
	{
		$where = array('id_divisi' => $id_divisi);
        if ($this->Model_divisi->hapus_data($where, 'data_divisi') == true) :
            $this->session->set_flashdata('sukses','Data divisi berhasil dihapus');
			redirect('divisi');
		endif;
        if ($this->Model_divisi->hapus_data($where, 'data_divisi') == false) :
            $this->session->set_flashdata('error','Data divisi gagal dihapus karena sudah digunakan pada tabel lain');
			redirect('divisi');
		endif;
	}
}