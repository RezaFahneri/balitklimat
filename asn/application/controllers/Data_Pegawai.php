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
        $this->load->Model('Model_tugas');
        $this->load->helper('url');
        $this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
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
        //$detail = $this->Model_detail_tugas->detail_data($nip);
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
        $data['id_tugas'] = $this->Model_tugas->getList();

        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Pegawai/v_tambah_pegawai',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah_aksi()
    {
        $nama_pegawai = $this->input->post('nama_pegawai');
        $nip = $this->input->post('nip');
        $id_golongan = $this->input->post('id_golongan');
        $id_status_peg = $this->input->post('id_status_peg');
        $id_pangkat = $this->input->post('id_pangkat');
        $foto = $this->input->post('foto');
        $id_jabatan = $this->input->post('id_jabatan');
        $id_divisi = $this->input->post('id_divisi');
        $nik = $this->input->post('nik');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $no_whatsapp = $this->input->post('62') . $this->input->post('no_whatsapp');
        $role = $this->input->post('role');

        $data = array(
            'nama_pegawai' => $nama_pegawai,
            'nip'   => $nip,
            'id_golongan'  => $id_golongan,
            'id_status_peg'  => $id_status_peg,
            'id_pangkat'  => $id_pangkat,
            'foto'   => $foto,
            'id_jabatan' => $id_jabatan,
            'id_divisi' => $id_divisi,
            'nik' => $nik,
            'email' => $email,
            'password' => $password,
            'no_whatsapp' => $no_whatsapp,
            'role' => $role
        );

        $data2 = array(
            'nip'   => $nip,
            'nama_pegawai' => $nama_pegawai,
            'id_jabatan' => $id_jabatan,
            'status_perjalanan' => 0,
        );
        if ($this->Model_pegawai->EmailCheck($email) == true) {

            $this->Model_pegawai->input_data($data, 'data_pegawai');
            $this->Model_pegawai->input_data($data2, 'status_perjalanan');
            $this->session->set_flashdata('sukses', 'Data pegawai berhasil ditambahkan');
            redirect('data_pegawai');
        } else {
            $this->session->set_flashdata('error', 'Email sudah digunakan, gunakan email lain');
            redirect('data_pegawai/tambah');
        }
    }
    // function tambah_penugasan($nip)
    // {
    //     $where = array('nip' => $nip);
    //     $data['data_tugas'] = $this->db->query("SELECT * FROM data_tugas WHERE id_tugas='$id_tugas'")->result();
    //     // $data['nip'] = $this->Model_pegawai->getList();
    //     $data['title'] = 'ASN BALITKLIMAT | Tambah Penugasan Pegawai';
    //     $this->load->view('templates/v_template',$data);
	// 	$this->load->view('Data_Pegawai/v_tambah_penugasan_pegawai',$data);
    //     $this->load->view('templates/footer',$data);
    // }
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
        $nip = $this->input->post('nip');
        $nama_pegawai = $this->input->post('nama_pegawai');
        $id_golongan = $this->input->post('id_golongan');
        $id_status_peg = $this->input->post('id_status_peg');
        $id_jabatan = $this->input->post('id_jabatan');
        $id_divisi = $this->input->post('id_divisi');
        $nik = $this->input->post('nik');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $no_whatsapp = $this->input->post('no_whatsapp');
        $role = $this->input->post('role');

        $data1 = array(
            'nama_pegawai'  => $nama_pegawai,
            'id_golongan'  => $id_golongan,
            'id_status_peg'   => $id_status_peg,
            'id_jabatan'   => $id_jabatan,
            'id_divisi'   => $id_divisi,
            'nik'   => $nik,
            'email' => $email,
            'password' => $password,
            'no_whatsapp' => $this->input->post('62') . $this->input->post('no_whatsapp'),
            'role' => $role,
        );
        $where = array(
            'nip'   => $nip,
        );
        $this->load->Model('Model_pegawai');
        $this->Model_pegawai->update_data($where, $data1, 'data_pegawai');
        $this->session->set_flashdata('sukses','Data Pegawai berhasil diperbarui');
        redirect('data_pegawai');
    }
    function hapus($nip)
	{
		$where = array('nip' => $nip);
        $table = array('status_perjalanan', 'data_pegawai');
        $this->Model_pegawai->hapus_data($where,$table);
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