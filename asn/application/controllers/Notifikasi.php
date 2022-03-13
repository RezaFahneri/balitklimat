<?php

class Notifikasi extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_golongan');
        $this->load->Model('Model_pangkat');
        $this->load->Model('Model_notifikasi');
        $this->load->helper('url');
        $this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
    }
    // function index()
    // {
    //     $data['data_pegawai'] = $this->Model_pegawai->getList();
        
    //     $data['title'] = " ASN Balitklimat | Data Pegawai";
    //     $this->load->view('templates/v_template',$data);
	// 	$this->load->view('Data_Pegawai/v_pegawai',$data);
    //     $this->load->view('templates/footer',$data);
        
    // }
    
    function beritahu_pangkat()
	{ 
		$data['title'] = ' ASN Balitklimat | Kirim Pemberitahuan Kenaikan Pangkat';

        $this->load->view('templates/v_template',$data);
		$this->load->view('Notifikasi/v_tambah_notif_pangkat',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah_aksi()
    {
        $data = array (
            'nip'   => $this->input->post('nip'),
            'pesan'  => $this->input->post('pesan'),
            'jenis_notif'  => $this->input->post('jenis_notif'));
            // 'tanggal_notifikasi'  => $this->input->post('tanggal_notifikasi'));
            
            if($this->Model_notifikasi->input_data($data, 'data_notifikasi')) {
            $this->session->set_flashdata('sukses','Data notifikasi berhasil ditambahkan');
            redirect('dashboard');
        } 
        else {
            $this->session->set_flashdata('error');
        }
        $this->session->set_flashdata('sukses','Data notifikasi berhasil ditambahkan');
        redirect('dashboard');
    }
    function hapus($id_notifikasi)
    {
        $this->Model_notifikasi->hapus_data($id_notifikasi);
        redirect('dashboard');
    }
}
?>