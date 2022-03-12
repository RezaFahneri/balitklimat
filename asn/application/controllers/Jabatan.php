<?php

class Jabatan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_jabatan');
        $this->load->helper('url');
        $this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
    }
    function index()
    {
        $data['data_jabatan'] = $this->Model_jabatan->tampil_data('data_jabatan')->result();
        $data['title'] = "ASN BALITKLIMAT | Data Jabatan";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Jabatan/v_jabatan',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'ASN BALITKLIMAT | Tambah Jabatan';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Jabatan/tambah_jabatan',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi()
    {
        $jabatan = $this->input->post('jabatan');
        $data = array(
            'jabatan' =>$jabatan,
        );
        $this->Model_jabatan->input_data($data, 'data_jabatan');
        $this->session->set_flashdata('sukses','Data jabatan  ('.$jabatan.') berhasil ditambahkan');

        redirect('jabatan');
    }
    function edit($id_jabatan)
    {
        $where = array('id_jabatan' => $id_jabatan);
        $data['data_jabatan'] = $this->db->query("SELECT * FROM data_jabatan WHERE id_jabatan='$id_jabatan'")->result();
        $data['title'] = "Edit Data Jabatan | ASN";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Jabatan/update_jabatan', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $id_jabatan = $this->input->post('id_jabatan');
        $data['data_jabatan'] = $this->db->query("SELECT * FROM data_jabatan WHERE id_jabatan='$id_jabatan'")->result();
        $jabatan = $this->input->post('jabatan');
        $data = array(
            'jabatan' =>$jabatan,
        );
        $where = array(
            'id_jabatan' => $id_jabatan
        );
        $this->load->Model('Model_jabatan');
        $this->Model_jabatan->update_data($where, $data, 'data_jabatan');
        $this->session->set_flashdata('sukses','Data jabatan berhasil diperbarui');
        redirect('jabatan');
    }
    function hapus($id_jabatan)
	{
		$where = array('id_jabatan' => $id_jabatan);
        if ($this->Model_jabatan->hapus_data($where, 'data_jabatan') == true) :
            $this->session->set_flashdata('sukses','Data jabatan berhasil dihapus');
			redirect('jabatan');
		endif;
        if ($this->Model_jabatan->hapus_data($where, 'data_jabatan') == false) :
            $this->session->set_flashdata('error','Data jabatan gagal dihapus karena sudah digunakan pada tabel lain');
			redirect('jabatan');
		endif;
	}
}