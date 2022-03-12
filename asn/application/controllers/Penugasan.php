<?php

class Penugasan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_tugas');
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_detail_tugas');
        $this->load->helper('url');
        $this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
    }
    function index()
    {
        $data['data_tugas'] = $this->Model_tugas->tampil_data('data_tugas')->result();
        $data['detail_tugas'] = $this->Model_detail_tugas->getList();
        $data['title'] = "ASN BALITKLIMAT | Data Penugasan";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Tugas/v_penugasan',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'ASN BALITKLIMAT | Tambah Penugasan';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Tugas/v_tambah_penugasan',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi()
    {
        $penugasan = $this->input->post('penugasan');
        $data = array(
            'penugasan' =>$penugasan,
        );
        $this->Model_tugas->input_data($data, 'data_tugas');
        $this->session->set_flashdata('sukses','Data penugasan berhasil ditambahkan');
        redirect('penugasan');
    }
    function edit($id_tugas)
    {
        $where = array('id_tugas' => $id_tugas);
        $data['data_tugas'] = $this->db->query("SELECT * FROM data_tugas WHERE id_tugas='$id_tugas'")->result();
        $data['title'] = "Edit Data Penugasan | ASN";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Tugas/update_penugasan', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $id_tugas = $this->input->post('id_tugas');
        $data['data_tugas'] = $this->db->query("SELECT * FROM data_tugas WHERE id_tugas='$id_tugas'")->result();
        $penugasan = $this->input->post('penugasan');
        $data = array(
            'penugasan' =>$penugasan,
        );
        $where = array(
            'id_tugas' => $id_tugas
        );
        $this->load->Model('Model_tugas');
        $this->Model_tugas->update_data($where, $data, 'data_tugas');
        $this->session->set_flashdata('sukses','Data penugasan berhasil diperbarui');
        redirect('penugasan');
    }
    function hapus_tim($id_detail_tugas)
    {
        $this->Model_detail_tugas->hapus_data($id_detail_tugas);
        redirect('penugasan');
    }
    function tambah_tim($id_tugas)
    {
        $where = array('id_tugas' => $id_tugas);
        $data['data_tugas'] = $this->db->query("SELECT * FROM data_tugas WHERE id_tugas='$id_tugas'")->result();
        $data['nip'] = $this->Model_pegawai->getList();
        $data['title'] = "Tambah Penugasan Tim | ASN";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Tugas/tambah_tim_penugasan', $data);
        $this->load->view('templates/footer',$data);
    }
    function tambah_tim_aksi()
    {
        // $this->Model_tugas->insert($data);
        $nip = count($this->input->post('nip'));

        for($i = 0; $i < $nip; $i++)
        {
            $datas[$i] = array(
                'id_tugas'   => $this->input->post('id_tugas'),
                'nip' => $this->input->post('nip['.$i.']')
            );
            $this->Model_detail_tugas->insert('detail_tugas', $datas[$i]);
    }
    redirect('penugasan');
}
    function hapus($id_tugas)
    {
        $where = array(
            'id_tugas' => $id_tugas,
        );
        $this->Model_detail_tugas->hapus_data2($where, 'detail_tugas');
        $this->Model_tugas->hapus_data($where, 'data_tugas');
        $this->session->set_flashdata('sukses','Data penugasan berhasil dihapus');
    redirect('penugasan');
    }
}