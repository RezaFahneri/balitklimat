<?php

class Pangkat extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_pangkat');
        $this->load->helper('url');
        $this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
    }
    function index()
    {
        $data['data_pangkat'] = $this->Model_pangkat->tampil_data('data_pangkat')->result();
        $data['title'] = "ASN BALITKLIMAT | Data Pangkat";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Pangkat/v_pangkat',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'ASN BALITKLIMAT | Tambah Pangkat';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Pangkat/tambah_pangkat',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi()
    {
        $this->form_validation->set_rules('pangkat', 'Pangkat','required|max_length[40]');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('max_length','{field} minimal 40 karakter');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'ASN BALITKLIMAT | Tambah Pangkat';
            $this->load->view('templates/v_template',$data);
            $this->load->view('Data_Master/Data_Pangkat/tambah_pangkat',$data);
            $this->load->view('templates/footer',$data);
        }
        else{
            $data = array(
                'pangkat' => $pangkat = $this->input->post('pangkat'),
            );
            $this->Model_pangkat->input_data($data, 'data_pangkat');
            $this->session->set_flashdata('sukses','Data pangkat berhasil ditambahkan');
            redirect('pangkat');
        }      
    }
    function edit($id_pangkat)
    {
        $where = array('id_pangkat' => $id_pangkat);
        $data['data_pangkat'] = $this->db->query("SELECT * FROM data_pangkat WHERE id_pangkat='$id_pangkat'")->result();
        $data['title'] = "Edit Data Pangkat | ASN";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Pangkat/update_pangkat', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $id_pangkat = $this->input->post('id_pangkat');
        $data['data_pangkat'] = $this->db->query("SELECT * FROM data_pangkat WHERE id_pangkat='$id_pangkat'")->result();
        $this->form_validation->set_rules('pangkat', 'Pangkat','required|max_length[40]');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('max_length','{field} minimal 40 karakter');
        if ($this->form_validation->run() == false) {
            $where = array('id_pangkat' => $id_pangkat);
            $data['data_pangkat'] = $this->db->query("SELECT * FROM data_pangkat WHERE id_pangkat='$id_pangkat'")->result();
            $data['title'] = "Edit Data Pangkat | ASN";
            $this->load->view('templates/v_template', $data);
            $this->load->view('Data_Master/Data_Pangkat/update_pangkat', $data);
            $this->load->view('templates/footer',$data);
        }
        else{
            $data = array(
                'pangkat' =>$this->input->post('pangkat'),
            );
            $where = array(
                'id_pangkat' => $id_pangkat
            );
            $this->load->Model('Model_pangkat');
            $this->Model_pangkat->update_data($where, $data, 'data_pangkat');
            $this->session->set_flashdata('sukses','Data Pangkat berhasil diperbarui');
            redirect('pangkat');
        }
    }
    function hapus($id_pangkat)
	{
		$where = array('id_pangkat' => $id_pangkat);
        if ($this->Model_pangkat->hapus_data($where, 'data_pangkat') == true) :
            $this->session->set_flashdata('sukses','Data pangkat berhasil dihapus');
			redirect('pangkat');
		endif;
        if ($this->Model_pangkat->hapus_data($where, 'data_pangkat') == false) :
            $this->session->set_flashdata('error','Data pangkat gagal dihapus karena sudah digunakan pada tabel lain');
			redirect('pangkat');
		endif;
	}
}