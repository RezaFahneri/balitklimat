<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sifatsurat extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
        $this->load->Model('Sifatsurat_m');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['sifat_surat'] = $this->Sifatsurat_m->tampil_data('sifat_surat')->result();
        $data['title'] = "Sifat Surat | Disposisi";
        $this->load->view('template/template',$data);
		$this->load->view('DataMaster/sifat_surat/v_sifatsurat',$data);
        $this->load->view('template/footer',$data);
    }

    public function tambah()
	{
		$data['title'] = 'Tambah Sifat Surat | Disposisi';
        $this->load->view('template/template',$data);
		$this->load->view('DataMaster/sifat_surat/v_tambahsifatsurat',$data);
        $this->load->view('template/footer',$data);
    }

    public function tambah_aksi()
    {
        $sifat_surat = $this->input->post('sifat_surat');
        $data = array(
            'sifat_surat' =>$sifat_surat
        );
        $this->Sifatsurat_m->input_data($data, 'sifat_surat');
        $this->session->set_flashdata('sukses', 'Data Sifat Surat Berhasil Ditambahkan');
        redirect('sifatsurat');
    }

    public function edit($id_sifatsurat)
    {
        $where = array('id_sifatsurat' => $id_sifatsurat);
        $data['sifat_surat'] = $this->db->query("SELECT * FROM sifat_surat WHERE id_sifatsurat='$id_sifatsurat'")->result();
        $data['title'] = "Edit Data Sifat Surat | Disposisi";
        $this->load->view('template/template', $data);
		$this->load->view('DataMaster/sifat_surat/v_editsifatsurat', $data);
        $this->load->view('template/footer', $data);
    }

    public function update()
    {
        $id_sifatsurat = $this->input->post('id');
        $data['sifat_surat'] = $this->db->query("SELECT * FROM sifat_surat WHERE id_sifatsurat='$id_sifatsurat'")->result();
        $sifat_surat = $this->input->post('sifat_surat');
        $data = array(
            'sifat_surat' =>$sifat_surat,
        );
        $where = array(
            'id_sifatsurat' => $id_sifatsurat
        );
        $this->load->Model('sifatsurat_m');
        $this->Sifatsurat_m->update_data($where, $data, 'sifat_surat');
        $this->session->set_flashdata('sukses', 'Data Sifat Surat Berhasil Diubah');
        redirect('sifatsurat');
    }

    public function hapus($id_sifatsurat)
	{
		$where = array('id_sifatsurat' => $id_sifatsurat);
		$this->Sifatsurat_m->hapus_data($where, 'sifat_surat');
        $this->session->set_flashdata('sukses', 'Data Sifat Surat Berhasil Dihapus');
		redirect('sifatsurat');
	}
}