<?php

class Role extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_role');
        $this->load->helper('url');
    }
    function index()
    {
        $data['data_role'] = $this->Model_role->tampil_data('data_role')->result();
        $data['title'] = "ASN BALITKLIMAT | Data Role";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Role/v_role',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'ASN BALITKLIMAT | Tambah Role';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Role/tambah_role',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi()
    {
        $role = $this->input->post('role');
        $data = array(
            'role' =>$role,
        );
        $this->Model_role->input_data($data, 'data_role');
        redirect('role');
    }
    function edit($id_role)
    {
        $where = array('id_role' => $id_role);
        $data['data_role'] = $this->db->query("SELECT * FROM data_role WHERE id_role='$id_role'")->result();
        $data['title'] = "Edit Data role | ASN";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_role/update_role', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $id_role = $this->input->post('id_role');
        $data['data_role'] = $this->db->query("SELECT * FROM data_role WHERE id_role='$id_role'")->result();
        $role = $this->input->post('role');
        $data = array(
            'role' =>$role,
        );
        $where = array(
            'id_role' => $id_role
        );
        $this->load->Model('Model_role');
        $this->Model_role->update_data($where, $data, 'data_role');
        redirect('role');
    }
    function hapus($id_role)
	{
		$where = array('id_role' => $id_role);
		$this->Model_role->hapus_data($where, 'data_role');
		redirect('role');
	}
}
