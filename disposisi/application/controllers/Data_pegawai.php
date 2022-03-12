<?php

class Data_Pegawai extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        cekmasuk();
        $this->load->Model('Datapegawai_m');
        // $this->load->Model('Model_golongan');
        $this->load->helper('url');
    }
    function index()
    {
        $data['data_pegawai'] = $this->Datapegawai_m->tampil_data('data_pegawai')->result();
        $data['title'] = "Data Pegawai | Disposisi";
        $this->load->view('template/template',$data);
		$this->load->view('DataMaster/data_pegawai/v_datapegawai',$data);
        $this->load->view('template/footer',$data);
    }
    // function get_golongan()
    // {
    //     $data['golongan'] = $this->Datapegawai_m->get_golongan()->result();
    // }
    public function detail($nip)
    {
        $data['title'] = "Detail Data Pegawai | Disposisi";
        $detail = $this->Datapegawai_m->detail_data($nip);
        $data['detail'] = $detail;
        $this->load->view('template/template',$data);
		$this->load->view('DataMaster/data_pegawai/v_detaildatapegawai',$data);
        $this->load->view('template/footer',$data);
    }
    function tambah()
	{
        $data['title'] = "Tambah Data Pegawai | Disposisi";
        $id_golongan = $this->input->post('id', TRUE);
        $data['golongan'] = $this->Datapegawai_m->get_golongan($id_golongan);
        $id_status_peg = $this->input->post('id', TRUE);
        $data['status_kepegawaian'] = $this->Datapegawai_m->get_statuspeg($id_status_peg);
        $id_pangkat = $this->input->post('id', TRUE);
        $data['pangkat'] = $this->Datapegawai_m->get_pangkat($id_pangkat);
        $id_jabatan = $this->input->post('id', TRUE);
        $data['jabatan'] = $this->Datapegawai_m->get_jabatan($id_jabatan);
        $id_role = $this->input->post('id', TRUE);
        // $data['role'] = $this->Datapegawai_m->get_role($id_role);
        $this->load->view('template/template', $data);
		$this->load->view('DataMaster/data_pegawai/v_tambahdatapegawai', $data);
        $this->load->view('template/footer', $data);
        // $data = array('get_golongan' => $this->Datapegawai_m->get_option());
    }
    function tambah_aksi()
    {
        //$data_pegawai = $this->input->post('data_pegawai');
        $nama_pegawai = $this->input->post('nama_pegawai');
        $nip = $this->input->post('nip');
        $foto = $this->input->post('foto');
        $id_golongan = $this->input->post('golongan');
        $id_status_peg = $this->input->post('status_kepegawaian');
        $id_pangkat = $this->input->post('pangkat');
        $id_jabatan = $this->input->post('jabatan');
        // $id_role = $this->input->post('role');
        $nik = $this->input->post('nik');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $no_whatsapp = $this->input->post('no_whatsapp');

        // $golongan = $this->input->post('golongan');
        // $status_kepegawaian = $this->input->post('status_kepegawaian');
        // $pangkat = $this->input->post('pangkat');
        // $jabatan = $this->input->post('jabatan');
        // $role = $this->input->post('role');
        // $nik = $this->input->post('nik');
        // $email = $this->input->post('email');
        // $password = $this->input->post('password');
        // $no_whatsapp = $this->input->post('no_whatsapp');

        //$data['data_golongan'] = $this->Datapegawai_m->get_golongan()->result();
        // $this->data['data_golongan'] = $this->Datapegawai_m->get_golongan();
        // $data = array('get_golongan' => $this->Datapegawai_m->get_option());
        $data = array(
            'nama_pegawai' =>$nama_pegawai,
            'nip'   => $nip,
            'foto'  => $foto,
            'golongan'  => $id_golongan,
            'status_kepegawaian'  => $id_status_peg,
            'pangkat'  => $id_pangkat,
            'jabatan' => $id_jabatan,
            // 'role' => $id_role,
            'nik' => $nik,
            'email' => $email,
            'password' => $password, 
            'no_whatsapp' => $no_whatsapp,
        );
        $this->Datapegawai_m->input_data($data, 'data_pegawai');
        redirect('data_pegawai');
    }
    function edit($nip)
    {
        $where = array('nip' => $nip);
        $id_golongan = $this->input->post('id', TRUE);
        $data['golongan'] = $this->Datapegawai_m->get_golongan($id_golongan);
        $id_status_peg = $this->input->post('id', TRUE);
        $data['status_kepegawaian'] = $this->Datapegawai_m->get_statuspeg($id_status_peg);
        $id_pangkat = $this->input->post('id', TRUE);
        $data['pangkat'] = $this->Datapegawai_m->get_pangkat($id_pangkat);
        $id_jabatan = $this->input->post('id', TRUE);
        $data['jabatan'] = $this->Datapegawai_m->get_jabatan($id_jabatan);
        // $id_role = $this->input->post('id', TRUE);
        // $data['role'] = $this->Datapegawai_m->get_role($id_role);
        // $data['golongan'] = $this->Datapegawai_m->get_golongan();
        // $data['status_kepegawaian'] = $this->Datapegawai_m->get_statuspeg();
        // $data['pangkat'] = $this->Datapegawai_m->get_pangkat();
        // $data['jabatan'] = $this->Datapegawai_m->get_jabatan();
        // $data['role'] = $this->Datapegawai_m->get_role();
        $data['update_pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE nip='$nip'")->result();
        $data['title'] = "Edit Data Pegawai | Disposisi";
        $this->load->view('template/template',$data);
		$this->load->view('DataMaster/data_pegawai/v_editdatapegawai',$data);
        $this->load->view('template/footer',$data);
    }
    function update()
    {
        $nip = $this->input->post('nip');
        $data['update_pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE nip='$nip'")->result();
        $nama_pegawai = $this->input->post('nama_pegawai',TRUE);
        $nip = $this->input->post('nip',TRUE);
        $foto = $this->input->post('foto',TRUE);
        $id_golongan = $this->input->post('golongan',TRUE);
        $id_status_peg = $this->input->post('status_kepegawaian',TRUE);
        $id_pangkat = $this->input->post('pangkat',TRUE);
        $id_jabatan = $this->input->post('jabatan',TRUE);
        // $id_role = $this->input->post('role',TRUE);
        $nik = $this->input->post('nik',TRUE);
        $email = $this->input->post('email',TRUE);
        $password = $this->input->post('password',TRUE);
        $admin = $this->input->post('admin');
        $no_whatsapp = $this->input->post('no_whatsapp',TRUE);
        $data = array(
            'nama_pegawai' =>$nama_pegawai,
            'nip'   => $nip,
            'foto'  => $foto,
            'golongan'  => $id_golongan,
            'status_kepegawaian'  => $id_status_peg,
            'pangkat'  => $id_pangkat,
            'jabatan' => $id_jabatan,
            // 'role' => $id_role,
            'nik' => $nik,
            'email' => $email,
            'password' => $password, 
            'no_whatsapp' => $no_whatsapp,
        );
        $where = array(
            'nip'   => $nip,
        );
        $this->load->Model('Datapegawai_m');
        $this->Datapegawai_m->update_data($where, $data, 'data_pegawai');
        redirect('data_pegawai');
    }
    function hapus($nip)
	{
		$where = array('nip' => $nip);
		$this->Datapegawai_m->hapus_data($where, 'data_pegawai');
		redirect('data_pegawai');
	}
}
?>