<?php

class Data_Pegawai extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_golongan');
        $this->load->Model('Model_status_pegawai');
        $this->load->Model('Model_pangkat');
        $this->load->Model('Model_jabatan');
        $this->load->Model('Model_divisi');
        $this->load->helper('url');
        $this->load->library('session');
		// if($this->session->userdata('logged_in') == false){
		// 	redirect('login');
		// }
    }
    function index()
    {
        $data['data_pegawai'] = $this->Model_pegawai->getList();
        $data['title'] = "ASN BALITKLIMAT | Data Pegawai";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Pegawai/v_pegawai',$data);
        $this->load->view('templates/footer',$data);
    }
    public function detail($nip)
    {
        $data['title'] = "ASN BALITKLIMAT | Detail Pegawai";
        $detail = $this->Model_pegawai->detail_data($nip);
        $data['detail'] = $detail;
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Pegawai/v_detail_pegawai', $data);
        $this->load->view('templates/footer');
    }
    
    function tambah()
	{
		$data['title'] = 'ASN BALITKLIMAT | Tambah Pegawai';
        $data['id_golongan'] = $this->Model_golongan->getList();
        $data['id_status_peg'] = $this->Model_status_pegawai->getList();
        $data['id_pangkat'] = $this->Model_pangkat->getList();
        $data['id_jabatan'] = $this->Model_jabatan->getList();
        $data['id_divisi'] = $this->Model_divisi->getList();

        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Pegawai/v_tambah_pegawai',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah_aksi()
    {
        $config['upload_path'] = './assets/images/foto/';
        $config['allowed_types'] = 'jpg|jpeg|png|svg';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('foto')) {
             $fileData = $this->upload->data();
             $data = array (
                  'nama_pegawai' => $this->input->post('nama_pegawai'),
                  'nip'   => $this->input->post('nip'),
                  'foto'  => $fileData['file_name'],
                  'id_golongan'  => $this->input->post('id_golongan'),
                  'id_status_peg'  => $this->input->post('id_status_peg'),
                  'id_pangkat'  => $this->input->post('id_pangkat'),
                  'id_jabatan' => $this->input->post('id_jabatan'),
                  'id_divisi' => $this->input->post('id_divisi'),
                  'nik' => $this->input->post('nik'),
                  'email' => $this->input->post('email'),
                  'password' => $this->input->post('password'), 
                  'no_whatsapp' => $this->input->post('62').$this->input->post('no_whatsapp'),
                  'admin' => $this->input->post('admin'), 
                  'pumk' => $this->input->post('pumk'), 
                  'kpa' => $this->input->post('kpa'), 
                  'ppk' => $this->input->post('ppk'),
                  'pj' => $this->input->post('pj'));

                  if($this->Model_pegawai->input_data($data, 'data_pegawai')) {
                    $this->session->set_flashdata('sukses','Data pegawai dengan nama '. $nama_pegawai. ' berhasil ditambahkan');
                    redirect('data_pegawai');
                } 
                else {
                  $this->session->set_flashdata('error');
             }
             $this->session->set_flashdata('sukses','Data Pegawai dengan nama '. $nama_pegawai. ' berhasil ditambahkan');
             redirect('data_pegawai');
        } else {
             redirect(base_url('data_pegawai/tambah'));
        }
    }
    function edit()
    {
        $nip = $this->input->get('nip');
        $data['primary_view'] = 'Data_Pegawai/v_update_pegawai';
        $data['id_golongan'] = $this->Model_golongan->getList();  
        $data['id_status_peg'] = $this->Model_status_pegawai->getList();  
        $data['id_pangkat'] = $this->Model_pangkat->getList();  
        $data['id_jabatan'] = $this->Model_jabatan->getList();  
        $data['id_divisi'] = $this->Model_divisi->getList();  
        
        $data['update_pegawai'] = $this->Model_pegawai->getList2($nip);
        $data['title'] = "Edit Data Pegawai | ASN";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Pegawai/v_update_pegawai', $data);
        $this->load->view('templates/footer',$data);
    }
    function update()
    {
        $config['upload_path'] = './assets/images/foto/';
        $config['allowed_types'] = 'jpg|jpeg|png|svg';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('foto')) {
             $nip = $this->input->post('nip');
             $fileData = $this->upload->data();
             $data1 = array (
                  'nama_pegawai' => $this->input->post('nama_pegawai'),
                  'foto'  => $fileData['file_name'],
                  'id_golongan'  => $this->input->post('id_golongan'),
                  'id_status_peg'  => $this->input->post('id_status_peg'),
                  'id_pangkat'  => $this->input->post('id_pangkat'),
                  'id_jabatan' => $this->input->post('id_jabatan'),
                  'id_divisi' => $this->input->post('id_divisi'),
                  'nik' => $this->input->post('nik'),
                  'email' => $this->input->post('email'),
                  'password' => $this->input->post('password'), 
                  'no_whatsapp' => $this->input->post('62').$this->input->post('no_whatsapp'),
                  'admin' => $this->input->post('admin'), 
                  'pumk' => $this->input->post('pumk'), 
                  'kpa' => $this->input->post('kpa'), 
                  'ppk' => $this->input->post('ppk'),
                  'pj' => $this->input->post('pj')
                );
                $where = array(
                    'nip'   => $nip,
                );
                if($this->Model_pegawai->update_data($where, $data1, 'data_pegawai')) {
                    $this->session->set_flashdata('sukses','Data pegawai berhasil diperbaharui');
                    redirect('data_pegawai');
                } 
                else {
                  $this->session->set_flashdata('error');
             }
             $this->session->set_flashdata('sukses','Data pegawai berhasil diperbaharui');
             redirect('data_pegawai');
        } else {
             redirect('data_pegawai/edit?nip='. $this->input->post('nip'));
        }
    }
    function hapus($nip)
	{
		$where = array('nip' => $nip);
		$this->Model_pegawai->hapus_data($where, 'data_pegawai');
        $error = $this->db->error();
        if ($error ['code'] != 0){
            echo $this->session->set_flashdata('error','Data pegawai digunakan pada tabel lain');
        }
        else{
            echo $this->session->set_flashdata('sukses','Data pegawai berhasil dihapus');
        }
        echo "<script>window.location='".site_url('data_pegawai')."';</script>";
		// redirect('data_pegawai');
	}
}
?>