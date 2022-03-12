<?php

class Jenis_keg extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_jenis_keg');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
    }
    function index()
    {
        $data['data_jenis_keg'] = $this->Model_jenis_keg->tampil_data('data_jenis_keg')->result();
        $data['title'] = "PERJADIN BALITKLIMAT | Data Jenis Kegiatan";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Jenis_Kegiatan/v_data_jenis_keg',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'PERJADIN BALITKLIMAT | Tambah Data Jenis Kegiatan';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Jenis_Kegiatan/v_tambah_data_jenis_keg',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi()
    {
        $jenis_keg = $this->input->post('jenis_keg');
        $data = array(
            'jenis_keg' =>$jenis_keg,
        );
        $this->Model_jenis_keg->input_data($data, 'data_jenis_keg');
        $this->session->set_flashdata('sukses','Data jenis kegiatan  ('.$jenis_keg.') berhasil ditambahkan');

        redirect('jenis_keg');
    }
    function edit($id_jenis_keg)
    {
        $where = array('id_jenis_keg' => $id_jenis_keg);
        $data['data_jenis_keg'] = $this->db->query("SELECT * FROM data_jenis_keg WHERE id_jenis_keg='$id_jenis_keg'")->result();
        $data['title'] = 'PERJADIN BALITKLIMAT | Edit Data Jenis Kegiatan';
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Jenis_Kegiatan/v_edit_data_jenis_keg', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $id_jenis_keg = $this->input->post('id_jenis_keg');
        $data['data_jenis_keg'] = $this->db->query("SELECT * FROM data_jenis_keg WHERE id_jenis_keg='$id_jenis_keg'")->result();
        $jenis_keg = $this->input->post('jenis_keg');
        $data = array(
            'jenis_keg' =>$jenis_keg,
        );
        $where = array(
            'id_jenis_keg' => $id_jenis_keg
        );
        $this->load->Model('Model_jenis_keg');
        $this->Model_jenis_keg->update_data($where, $data, 'data_jenis_keg');
        $this->session->set_flashdata('sukses','Data jenis kegiatan berhasil diperbarui');
        redirect('jenis_keg');
    }
    function hapus($id_jenis_keg)
	{
		$where = array('id_jenis_keg' => $id_jenis_keg);
        if ($this->Model_jenis_keg->hapus_data($where, 'data_jenis_keg') == true) :
            $this->session->set_flashdata('sukses','Data jenis kegiatan berhasil dihapus');
			redirect('jenis_keg');
		endif;
        if ($this->Model_jenis_keg->hapus_data($where, 'data_jenis_keg') == false) :
            $this->session->set_flashdata('error','Data jenis kegiatan gagal dihapus karena data jenis kegiatan ini digunakan pada tabel lain');
			redirect('jenis_keg');
		endif;
	}
}
