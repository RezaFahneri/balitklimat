<?php

class Status_Kepegawaian extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_status_pegawai');
        $this->load->helper('url');
        $this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
    }
    function index()
    {
        $data['status_kepegawaian'] = $this->Model_status_pegawai->tampil_data('status_kepegawaian')->result();
        $data['title'] = "ASN BALITKLIMAT | Data Status Kepegawaian";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Status_Pegawai/v_status_peg',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'ASN BALITKLIMAT | Tambah Status Kepegawaian';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Status_Pegawai/tambah_status_peg',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi()
    {
        $this->form_validation->set_rules('status_kepegawaian', 'Status Kepegawaian','required|max_length[50]');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('max_length','{field} minimal 50 karakter');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'ASN BALITKLIMAT | Tambah Status Kepegawaian';
            $this->load->view('templates/v_template',$data);
            $this->load->view('Data_Master/Status_Pegawai/tambah_status_peg',$data);
            $this->load->view('templates/footer',$data);
        }
        else{
            $data = array(
                'status_kepegawaian' =>$this->input->post('status_kepegawaian'),
            );
            $this->Model_status_pegawai->input_data($data, 'status_kepegawaian');
            $this->session->set_flashdata('sukses','Data status kepegawaian berhasil ditambahkan');
            redirect('status_kepegawaian');
        }      
    }

    function edit($id_status_peg)
    {
        $where = array('id_status_peg' => $id_status_peg);
        $data['status_kepegawaian'] = $this->db->query("SELECT * FROM status_kepegawaian WHERE id_status_peg='$id_status_peg'")->result();
        $data['title'] = "Edit Data Status Kepegawaian | ASN";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Status_Pegawai/update_status_peg', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $id_status_peg = $this->input->post('id_status_peg');
        $data['status_kepegawaian'] = $this->db->query("SELECT * FROM status_kepegawaian WHERE id_status_peg='$id_status_peg'")->result();
        $this->form_validation->set_rules('status_kepegawaian', 'Status Kepegawaian','required|max_length[50]');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('max_length','{field} minimal 50 karakter');
        if ($this->form_validation->run() == false) {
            $where = array('id_status_peg' => $id_status_peg);
            $data['status_kepegawaian'] = $this->db->query("SELECT * FROM status_kepegawaian WHERE id_status_peg='$id_status_peg'")->result();
            $data['title'] = "Edit Data Status Kepegawaian | ASN";
            $this->load->view('templates/v_template', $data);
            $this->load->view('Data_Master/Status_Pegawai/update_status_peg', $data);
            $this->load->view('templates/footer',$data);
        }
        else{
            $data = array(
                'status_kepegawaian' =>$this->input->post('status_kepegawaian'),
            );
            $where = array(
                'id_status_peg' => $id_status_peg
            );
            $this->load->Model('Model_status_pegawai');
            $this->Model_status_pegawai->update_data($where, $data, 'status_kepegawaian');
            $this->session->set_flashdata('sukses','Data status kepegawaian berhasil diperbarui');
            redirect('status_kepegawaian');
        }
    }
    function hapus($id_status_peg)
	{
		$where = array('id_status_peg' => $id_status_peg);
        if ($this->Model_status_pegawai->hapus_data($where, 'status_kepegawaian') == true) :
            $this->session->set_flashdata('sukses','Data status kepegawaian berhasil dihapus');
			redirect('status_kepegawaian');
		endif;
        if ($this->Model_status_pegawai->hapus_data($where, 'status_kepegawaian') == false) :
            $this->session->set_flashdata('error','Data status kepegawaian gagal dihapus karena sudah digunakan pada tabel lain');
			redirect('status_kepegawaian');
		endif;
	}
}