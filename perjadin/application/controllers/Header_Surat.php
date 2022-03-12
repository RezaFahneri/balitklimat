<?php

class Header_Surat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_header_surat');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
    }
    function index()
    {
        $data['header_surat'] = $this->Model_header_surat->tampil_data('data_header_surat')->result();
        $data['title'] = "PERJADIN BALITKLIMAT | Data Header Surat";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Header_Surat/v_data_header_surat', $data);
        $this->load->view('templates/footer', $data);
    }

    function edit($id_header_surat)
    {
        $where = array('id_header_surat' => $id_header_surat);
        $data['header_surat'] = $this->db->query("SELECT * FROM data_header_surat WHERE id_header_surat='$id_header_surat'")->result();
        $data['title'] = "PERJADIN BALITKLIMAT | Edit Data Header Surat";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Header_Surat/v_edit_data_header_surat', $data);
        $this->load->view('templates/footer', $data);
    }
    function update()
    {
        $id_header_surat = $this->input->post('id_header_surat');
        $data['header_surat'] = $this->db->query("SELECT * FROM data_header_surat WHERE id_header_surat='$id_header_surat'")->result();
        $nama_kementerian = $this->input->post('nama_kementerian');
        $eslon_satu = $this->input->post('eslon_satu');
        $eslon_dua = $this->input->post('eslon_dua');
        $eslon_tiga = $this->input->post('eslon_tiga');
        $alamat = $this->input->post('alamat');
        $data = array(
            'nama_kementerian' => $nama_kementerian,
            'eslon_satu' => $eslon_satu,
            'eslon_dua' => $eslon_dua,
            'eslon_tiga' => $eslon_tiga,
            'alamat' => $alamat
        );
        $where = array(
            'id_header_surat' => $id_header_surat
        );
        $this->load->Model('Model_header_surat');
        $this->Model_header_surat->update_data($where, $data, 'data_header_surat');
        $this->session->set_flashdata('sukses','Data header surat berhasil diperbarui');
        redirect('header_surat');
    }
}
