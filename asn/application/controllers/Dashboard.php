<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function construct()
    {
        parent::__construct();
        $this->load->Model('Model_dashboard');
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_notifikasi');
        $this->load->Model('Model_kenaikan_pangkat');
        $this->load->Model('Model_kenaikan_gaji');
        $this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
    }  
    
    public function index()
    {
        $total_pegawai = $this->db->query("SELECT * FROM data_pegawai");
        $data['total_pegawai'] = $total_pegawai->num_rows();
        $total_pns = $this->db->query("SELECT * FROM data_pegawai WHERE id_status_peg = 1");
        $data['total_pns'] = $total_pns->num_rows();
        $total_pnstb = $this->db->query("SELECT * FROM data_pegawai WHERE id_status_peg = 2");
        $data['total_pnstb'] = $total_pnstb->num_rows();
        $total_cpns = $this->db->query("SELECT * FROM data_pegawai WHERE id_status_peg = 3");
        $data['total_cpns'] = $total_cpns->num_rows();
        $total_ppnpn = $this->db->query("SELECT * FROM data_pegawai WHERE id_status_peg = 4");
        $data['total_ppnpn'] = $total_ppnpn->num_rows();
        
        $data['title']=" ASN Balitklimat | Dashboard";
        $this->load->view('templates/v_template',$data);
		$this->load->view('templates/v_dashboard',$data);
        $this->load->view('templates/footer',$data);
		
    }
    function tambah_aksi()
    {
        $data = array (
            'nip'   => $this->input->post('nip'),
            'pesan'  => $this->input->post('pesan'),
            'jenis_notif'  => $this->input->post('jenis_notif'));
            if($this->db->insert('data_notifikasi', $data)) {
            $this->session->set_flashdata('sukses','Data notifikasi berhasil ditambahkan');
            redirect('dashboard');
        } 
        else {
            $this->session->set_flashdata('error');
        }
        $this->session->set_flashdata('sukses','Data notifikasi berhasil ditambahkan');
        redirect('dashboard');
    }
    public function hapus($id_notifikasi){
        $where = array('id_notifikasi' => $id_notifikasi);
        $this->db->query("DELETE FROM data_notifikasi WHERE id_notifikasi ='$id_notifikasi'");
		$this->session->set_flashdata('sukses','Notifikasi berhasil dihapus');
        redirect('dashboard');
    }
    public function logout(){
		$data = array(
			'email'	=> '',
			'logged_in'	=> false,
			'role'		=> ''
		);

		$this->session->sess_destroy();
		redirect('login');
	}
}