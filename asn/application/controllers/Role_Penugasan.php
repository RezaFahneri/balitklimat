<?php

class Role_Penugasan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_role_tugas');
        $this->load->Model('Model_detail_tugas');
        $this->load->Model('Model_detail_role');
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_golongan');
        $this->load->Model('Model_pangkat');
        $this->load->Model('Model_status_pegawai');
        $this->load->Model('Model_pangkat');
        $this->load->Model('Model_jabatan');
        $this->load->Model('Model_divisi');
        
        $this->load->helper('url');
        $this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
    }
    function index()
    {
        $data['data_role'] = $this->Model_role_tugas->tampil_data('data_role')->result();
        $data['detail_role'] = $this->Model_detail_role->getList();
        $data['title'] = " ASN Balitklimat | Data Role";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Tugas_Role/v_role',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah_role()
	{
		$data['title'] = ' ASN Balitklimat | Tambah Role';
        
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Tugas_Role/v_tambah_role',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_aksi_role()
    {
        $role = $this->input->post('role');
        $data = array(
            'role' =>$role,
        );
        $this->Model_role_tugas->input_data($data, 'data_role');
        $this->session->set_flashdata('sukses','Data role berhasil ditambahkan');
        redirect('role_penugasan');
    }
    function edit_role($id_role)
    {
        $where = array('id_role' => $id_role);
        $data['data_role'] = $this->db->query("SELECT * FROM data_role WHERE id_role='$id_role'")->result();
        $data['title'] = " ASN Balitklimat | Edit Data Role";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Tugas_Role/update_role', $data);
        $this->load->view('templates/footer',$data);
    }
    function update_role()
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
        $this->load->Model('Model_role_tugas');
        $this->Model_role_tugas->update_data($where, $data, 'data_role');
        $this->session->set_flashdata('sukses','Data role berhasil diperbarui');
        redirect('role_penugasan');
    }
    function tambah_tim_role($id_role)
	{
        $where = array('id_role' => $id_role);
        $data['data_role'] = $this->db->query("SELECT * FROM data_role WHERE id_role='$id_role'")->result();
        $data['nip'] = $this->Model_pegawai->getList();
        $data['id_golongan'] = $this->Model_golongan->getList();
        $data['id_pangkat'] = $this->Model_pangkat->getList();
        $data['id_status_peg'] = $this->Model_status_pegawai->getList();
        $data['id_jabatan'] = $this->Model_jabatan->getList();
        $data['id_divisi'] = $this->Model_divisi->getList();
		$data['title'] = 'ASN Balitklimat | Tambah Tim Role';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Tugas_Role/tambah_tim_role',$data);
        $this->load->view('templates/footer',$data);
	}
    function tambah_tim_role_aksi()
    {
        $nip = $this->input->post('nip');
        $id_role = $this->input->post('id_role');
        $role = $this->input->post('role');
        $nama_pegawai = $this->input->post('nama_pegawai');
        $foto = $this->input->post('foto');
        $id_golongan = $this->input->post('id_golongan');
        $id_status_peg	 = $this->input->post('id_status_peg');
        $id_pangkat = $this->input->post('id_pangkat');
        $id_jabatan = $this->input->post('id_jabatan');
        $id_divisi = $this->input->post('id_divisi');
        $nik	 = $this->input->post('nik');
        $email = $this->input->post('email');
        // $password = md5($this->input->post('password'));
        $password = $this->input->post('password');
        $no_whatsapp	 = $this->input->post('no_whatsapp');

        $data = array (
            'id_role'   => $id_role,
            'role' => $role,
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
            
        );
        // if ($this->Model_detail_role->EmailCheck($email) == true) {
            
            $this->Model_detail_role->input_data($data, 'detail_role');
            $this->session->set_flashdata('sukses','Data tim role berhasil ditambahkan');
            redirect('role_penugasan');
        // }
        // else{
            // $this->session->set_flashdata('error', 'Email sudah digunakan, gunakan email lain');
            // redirect('role_penugasan/tambah_tim_role');
        // }
        
    }
    function hapus_tim_role($id_detail_role)
    {
        $this->Model_detail_role->hapus_data($id_detail_role);
        $this->session->set_flashdata('sukses','Data tim role berhasil dihapus');
        redirect('role_penugasan');
    }
    function hapus_role($id_role)
        {
            $where = array(
                'id_role' => $id_role,
            );
            $this->Model_detail_role->hapus_data2($where, 'detail_role');
            $this->Model_role_tugas->hapus_data($where, 'data_role');
            $this->session->set_flashdata('sukses','Data role berhasil dihapus');
        redirect('role_penugasan');
        }

    function penugasan()
    {
        $data['data_tugas'] = $this->Model_role_tugas->tampil_data('data_tugas')->result();
        $data['detail_tugas'] = $this->Model_detail_tugas->getList_tugas();
        $data['title'] = " ASN Balitklimat | Data Penugasan";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Tugas_Role/v_penugasan',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah_penugasan()
	{
		$data['title'] = ' ASN Balitklimat | Tambah Penugasan';
        $this->load->view('templates/v_template',$data);
		$this->load->view('Data_Master/Data_Tugas_Role/v_tambah_penugasan',$data);
        $this->load->view('templates/footer',$data);
	}
   
    function tambah_aksi_penugasan()
    {
        $penugasan = $this->input->post('penugasan');
        $data = array(
            'penugasan' =>$penugasan,
        );
        $this->Model_role_tugas->input_data($data, 'data_tugas');
        $this->session->set_flashdata('sukses','Data penugasan berhasil ditambahkan');
        redirect('role_penugasan/penugasan');
    }
   
    function edit_penugasan($id_tugas)
    {
        $where = array('id_tugas' => $id_tugas);
        $data['data_tugas'] = $this->db->query("SELECT * FROM data_tugas WHERE id_tugas='$id_tugas'")->result();
        $data['title'] = " ASN Balitklimat | Edit Data Penugasan";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Tugas_Role/update_penugasan', $data);
        $this->load->view('templates/footer',$data);
    }
    
    function update_penugasan()
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
        $this->load->Model('Model_role_tugas');
        $this->Model_role_tugas->update_data($where, $data, 'data_tugas');
        $this->session->set_flashdata('sukses','Data penugasan berhasil diperbarui');
        redirect('role_penugasan/penugasan');
    }
    function hapus_tim_penugasan($id_detail_tugas)
    {
        $this->Model_detail_tugas->hapus_data($id_detail_tugas);
        $this->session->set_flashdata('sukses','Data tim penugasan berhasil dihapus');
        redirect('role_penugasan/penugasan');
    }
 
    function tambah_tim_penugasan($id_tugas)
    {
        $where = array('id_tugas' => $id_tugas);
        $data['data_tugas'] = $this->db->query("SELECT * FROM data_tugas WHERE id_tugas='$id_tugas'")->result();
        $data['nip'] = $this->Model_pegawai->getList();
        $data['title'] = "ASN Balitklimat | Tambah Penugasan Tim";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Tugas_Role/tambah_tim_penugasan', $data);
        $this->load->view('templates/footer',$data);
    }
     function tambah_tim_penugasan_aksi()
    {
        $nip = count($this->input->post('nip'));

        for($i = 0; $i < $nip; $i++)
        {
            $datas[$i] = array(
                'id_tugas'   => $this->input->post('id_tugas'),
                'nip' => $this->input->post('nip['.$i.']')
            );
            $this->Model_detail_tugas->insert('detail_tugas', $datas[$i]);
    }
    redirect('role_penugasan/penugasan');
}
    
    function hapus_penugasan($id_tugas)
    {
        $where = array(
            'id_tugas' => $id_tugas,
        );
        $this->Model_detail_tugas->hapus_data2($where, 'detail_tugas');
        $this->Model_role_tugas->hapus_data($where, 'data_tugas');
        $this->session->set_flashdata('sukses','Data penugasan berhasil dihapus');
        redirect('role_penugasan/penugasan');
    }
    function get_peg(){
		$nip=$this->input->post('nip');
		$data=$this->Model_pegawai->get_data_pegawai_bynip($nip);
		echo json_encode($data);
	}
    
}