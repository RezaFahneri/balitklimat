<?php

class Golongan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_golongan');
        $this->load->helper('url');
        $this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
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
        $this->form_validation->set_rules('golongan', 'Golongan','required|max_length[10]');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('max_length','{field} minimal 10 karakter');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'ASN BALITKLIMAT | Tambah Golongan';
            $this->load->view('templates/v_template',$data);
            $this->load->view('Data_Master/Data_Golongan/tambah_golongan',$data);
            $this->load->view('templates/footer',$data);
        }
        else{
            $data = array(
                'golongan' =>$this->input->post('golongan'),
            );
            $this->Model_golongan->input_data($data, 'data_golongan');
            $this->session->set_flashdata('sukses','Data golongan berhasil ditambahkan');
            redirect('golongan');
        }      
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
        $this->form_validation->set_rules('golongan', 'Golongan','required|max_length[10]');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('max_length','{field} minimal 10 karakter');
        if ($this->form_validation->run() == false) {
            $where = array('id_golongan' => $id_golongan);
            $data['data_golongan'] = $this->db->query("SELECT * FROM data_golongan WHERE id_golongan='$id_golongan'")->result();
            $data['title'] = "Edit Data golongan | ASN";
            $this->load->view('templates/v_template', $data);
            $this->load->view('Data_Master/Data_Golongan/update_golongan', $data);
            $this->load->view('templates/footer',$data);
        }
        else{
            $data = array(
                'golongan' =>$this->input->post('golongan'),
            );
            $where = array(
                'id_golongan' => $id_golongan
            );
            $this->load->Model('Model_golongan');
            $this->Model_golongan->update_data($where, $data, 'data_golongan');
            $this->session->set_flashdata('sukses','Data golongan berhasil diperbarui');
            redirect('golongan');
        }
    }
    function hapus($id_golongan)
	{
		$where = array('id_golongan' => $id_golongan);
        if ($this->Model_golongan->hapus_data($where, 'data_golongan') == true) :
            $this->session->set_flashdata('sukses','Data golongan berhasil dihapus');
			redirect('golongan');
		endif;
        if ($this->Model_golongan->hapus_data($where, 'data_golongan') == false) :
            $this->session->set_flashdata('error','Data golongan gagal dihapus karena sudah digunakan pada tabel lain');
			redirect('golongan');
		endif;
	}
}