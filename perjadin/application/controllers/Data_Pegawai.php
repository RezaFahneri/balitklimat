<?php

class Data_Pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_master_pegawai');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') == false) {
            redirect('login');
        }
    }
    function index()
    {
        $data['data_pegawai'] = $this->Model_pegawai->getList();
        $data['title'] = "PERJADIN BALITKLIMAT | Data Pegawai";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Pegawai/v_pegawai', $data);
        $this->load->view('templates/footer', $data);
    }
    public function detail($nip)
    {
        $data['title'] = "PERJADIN BALITKLIMAT | Detail Pegawai";
        $detail = $this->Model_pegawai->detail_data($nip);
        $data['detail'] = $detail;
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Pegawai/v_detail_pegawai', $data);
        $this->load->view('templates/footer');
    }
    function tambah()
    {
        $data['title'] = 'PERJADIN BALITKLIMAT | Tambah Pegawai';
        $data['golongan'] = $this->Model_master_pegawai->getListGolongan();
        $data['status_kepegawaian'] = $this->Model_master_pegawai->getListSPG();
        $data['pangkat'] = $this->Model_master_pegawai->getListPangkat();
        $data['jabatan'] = $data['jabatan'] = $this->Model_master_pegawai->getListJabatan();
        $data['divisi'] = $this->Model_master_pegawai->getListDivisi();
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Pegawai/v_tambah_pegawai', $data);
        $this->load->view('templates/footer', $data);
    }
    function tambah_aksi()
    {
        $nama_pegawai = $this->input->post('nama_pegawai');
        $data = array(
            'nama_pegawai' => $nama_pegawai,
            'nip'   => $this->input->post('nip'),
            'id_golongan'  => $this->input->post('id_golongan'),
            'id_status_peg'  => $this->input->post('id_status_peg'),
            'foto'  => $this->input->post('foto'),
            'id_pangkat'  => $this->input->post('id_pangkat'),
            'id_jabatan' => $this->input->post('id_jabatan'),
            'id_divisi' => $this->input->post('id_divisi'),
            'nik' => $this->input->post('nik'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'no_whatsapp' => $this->input->post('62') . $this->input->post('no_whatsapp')
        );

        if ($this->Model_pegawai->input_data($data, 'data_pegawai')) {
            $this->session->set_flashdata('sukses', 'Data pegawai dengan nama ' . $nama_pegawai . ' berhasil ditambahkan');
            redirect('data_pegawai');
        } else {
            $this->session->set_flashdata('error');
        }
        $this->session->set_flashdata('sukses', 'Data pegawai dengan nama ' . $nama_pegawai . ' berhasil ditambahkan');
        redirect('data_pegawai');
    }
    function edit()
    {
        $nip = $this->input->get('nip');
        $data['primary_view'] = 'Data_Pegawai/v_update_pegawai';
        $data['golongan'] = $this->Model_master_pegawai->getListGolongan();

        $data['spg'] = $this->Model_master_pegawai->getListSPG();

        $data['pangkat'] = $this->Model_master_pegawai->getListPangkat();

        $data['jabatan'] = $this->Model_master_pegawai->getListJabatan();

        $data['divisi'] = $this->Model_master_pegawai->getListDivisi();

        $data['update_pegawai'] = $this->Model_pegawai->getList2($nip);
        $data['title'] = "PERJADIN | Edit Data Pegawai";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Pegawai/v_update_pegawai', $data);
        $this->load->view('templates/footer', $data);
    }

    function update()
    {
        $nip = $this->input->post('nip');
        $data1 = array(
            'nama_pegawai' => $this->input->post('nama_pegawai'),
            'id_golongan'  => $this->input->post('id_golongan'),
            'id_status_peg'  => $this->input->post('id_status_peg'),
            'id_pangkat'  => $this->input->post('id_pangkat'),
            'id_jabatan' => $this->input->post('id_jabatan'),
            'id_divisi' => $this->input->post('id_divisi'),
            'nik' => $this->input->post('nik'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'no_whatsapp' => $this->input->post('62') . $this->input->post('no_whatsapp')
        );
        $where = array(
            'nip'   => $nip,
        );
        if ($this->Model_pegawai->update_data($where, $data1, 'data_pegawai')) {
            $this->session->set_flashdata('sukses', 'Data pegawai berhasil diperbarui');
            redirect('data_pegawai');
        } else {
            $this->session->set_flashdata('error');
        }
        $this->session->set_flashdata('sukses', 'Data pegawai berhasil diperbarui');
        redirect('data_pegawai');
    }
    function hapus($nip)
    {
        $where = array('nip' => $nip);
        if ($this->Model_pegawai->hapus_data($where, 'data_pegawai') == true) :
            $this->session->set_flashdata('sukses', 'Data pegawai berhasil dihapus');
            redirect('data_pegawai');
        endif;
        if ($this->Model_pegawai->hapus_data($where, 'data_pegawai') == false) :
            $this->session->set_flashdata('error', 'Data pegawai gagal dihapus karena data pegawai ini digunakan pada tabel lain');
            redirect('data_pegawai');
        endif;
    }
}
