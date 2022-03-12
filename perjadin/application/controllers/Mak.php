<?php

class Mak extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_mak');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
    }
    function index()
    {
        $data['data_mak'] = $this->Model_mak->tampil_data('data_mak')->result();
        $data['title'] = "PERJADIN BALITKLIMAT | Data MAK";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Mak/v_data_mak',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'PERJADIN BALITKLIMAT | Tambah Data MAK';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Mak/v_tambah_data_mak',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi()
    {
        $kode_mak = $this->input->post('kode_mak');
        $judul_mak = $this->input->post('judul_mak');
        $tahun = $this->input->post('tahun');
        $banyak_anggaran = $this->input->post('banyak_anggaran');
        $data = array(
            'kode_mak' =>$kode_mak,
            'judul_mak' =>$judul_mak,
            'tahun' =>$tahun,
            'banyak_anggaran' =>$banyak_anggaran,

        );
        if($this->Model_mak->input_data($data, 'data_mak')==true):{
        $this->session->set_flashdata('sukses','Data MAK berhasil ditambahkan');
        redirect('mak');
        }endif;
        if($this->Model_mak->input_data($data, 'data_mak')==false):{
            $this->session->set_flashdata('error','Kode MAK telah tersedia, silahkan inputkan kode lain');
            redirect('mak/tambah');
        }endif;
    }
    function edit($kode_mak)
    {
        $where = array('kode_mak' => $kode_mak);
        $data['data_mak'] = $this->db->query("SELECT * FROM data_mak WHERE kode_mak='$kode_mak'")->result();
        $data['title'] = 'PERJADIN BALITKLIMAT | Edit Data MAK';
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Mak/v_edit_data_mak', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $kode_mak = $this->input->post('kode_mak');
        $judul_mak = $this->input->post('judul_mak');
        $tahun = $this->input->post('tahun');
        $banyak_anggaran = $this->input->post('banyak_anggaran');
        $data = array(
            'judul_mak' =>$judul_mak,
            'tahun' =>$tahun,
            'banyak_anggaran' =>$banyak_anggaran,
        );
        $where = array(
            'kode_mak' => $kode_mak
        );
        $this->load->Model('Model_mak');
        $this->Model_mak->update_data($where, $data, 'data_mak');
        $this->session->set_flashdata('sukses','Data MAK berhasil diperbarui');
        redirect('mak');
    }
    function hapus($kode_mak)
	{
		$where = array('kode_mak' => $kode_mak);
		if($this->Model_mak->hapus_data($where, 'data_mak')==true):
        $this->session->set_flashdata('sukses','Data MAK berhasil dihapus');
		redirect('mak');
        endif;
        $where = array('kode_mak' => $kode_mak);
		if($this->Model_mak->hapus_data($where, 'data_mak')==false):
        $this->session->set_flashdata('error','Data MAK gagal dihapus karena data MAK ini digunakan pada tabel lain');
        redirect('mak');
        endif;
	}
}