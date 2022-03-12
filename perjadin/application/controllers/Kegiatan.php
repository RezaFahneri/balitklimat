<?php

class Kegiatan extends CI_Controller
{
    public $result = [
        'status'  => false,
        'data'    => []
    ];
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kegiatan');
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_jenis_keg');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') == false) {
            redirect('login');
        }
    }
    function index()
    {
        $data['data_kegiatan'] = $this->Model_kegiatan->getList();
        $data['title'] = "PERJADIN BALITKLIMAT | Data Kegiatan";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Kegiatan/v_data_kegiatan', $data);
        $this->load->view('templates/footer', $data);
    }
    function tambah()
    {
        $data['title'] = 'PERJADIN BALITKLIMAT | Tambah Data Kegiatan';
        $data['jenis_kegiatan'] = $this->Model_jenis_keg->getList();
        $data['nip'] = $this->Model_pegawai->getList();
        $data['nip_pj'] = $this->Model_pegawai->getListPj();
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Kegiatan/v_tambah_data_kegiatan', $data);
        $this->load->view('templates/footer', $data);
    }
    function tambah_aksi()
    {
        $kode_kegiatan = $this->input->post('kode_kegiatan');
        $data = array(
            'kode_kegiatan' => $kode_kegiatan,
            'judul_kegiatan' => $this->input->post('judul_kegiatan'),
            'id_jenis_keg' => $this->input->post('id_jenis_keg'),
            'tahun' => $this->input->post('tahun'),
            'nip_pj_kegiatan' => $this->input->post('nip_pj_keg'),
            'nip_pj_rrr' => $this->input->post('nip_pj_rrr'),
            'biaya_pengeluaran' => $this->input->post('biaya_pengeluaran')
        );
        if ($this->Model_kegiatan->kodeKegiatanCheck($kode_kegiatan) == true) {
            $this->Model_kegiatan->input_data($data, 'data_kegiatan');
            $this->session->set_flashdata('sukses', 'Data kegiatan dengan kode kegiatan ' . $kode_kegiatan . ' berhasil ditambahkan');
            redirect('kegiatan');
        } else {
            $this->session->set_flashdata('error', 'Kode kegiatan sudah tersedia, pilih kode kegiatan lain');
            redirect('kegiatan/tambah');
        }
    }
    function edit()
    {
        $kode_kegiatan = $this->input->get('kode_kegiatan');
        $data['title'] = 'PERJADIN BALITKLIMAT | Edit Data Kegiatan';

        $data['update_kegiatan'] = $this->Model_kegiatan->getList2($kode_kegiatan);
        $data['jenis_kegiatan'] = $this->Model_jenis_keg->getList();

        $data['pjk'] = $this->Model_pegawai->getList();

        $data['pjr'] = $this->Model_pegawai->getList();
        $data['title'] = "PERJADIN | Edit Data Kegiatan";

        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Master/Data_Kegiatan/v_edit_data_kegiatan', $data);
        $this->load->view('templates/footer', $data);
    }
    function update()
    {
        $kode_kegiatan = $this->input->post('kode_kegiatan');
        $data = array(
            'judul_kegiatan' => $this->input->post('judul_kegiatan'),
            'id_jenis_keg' => $this->input->post('id_jenis_keg'),
            'tahun' => $this->input->post('tahun'),
            'nip_pj_kegiatan' => $this->input->post('nip_pj_keg'),
            'nip_pj_rrr' => $this->input->post('nip_pj_rrr')
        );
        $where = array(
            'kode_kegiatan' => $kode_kegiatan
        );
        $this->load->Model('Model_kegiatan');
        $this->Model_kegiatan->update_data($where, $data, 'data_kegiatan');
        $this->session->set_flashdata('sukses', 'Data kegiatan berhasil diperbarui');
        redirect('kegiatan');
    }
    function hapus($kode_kegiatan)
    {
        $where = array('kode_kegiatan' => $kode_kegiatan);
        if ($this->Model_kegiatan->hapus_data($where, 'data_kegiatan') == true) :
            $this->session->set_flashdata('sukses', 'Data kegiatan berhasil dihapus');
            redirect('kegiatan');
        endif;
        if ($this->Model_kegiatan->hapus_data($where, 'data_kegiatan') == false) :
            $this->session->set_flashdata('error', 'Data kegiatan gagal dihapus karena data kegiatan ini digunakan pada tabel lain');
            redirect('kegiatan');
        endif;
    }

    function get_pegawai()
    {
        $kode = $this->input->post('nip_pj_keg');
        $data = $this->Model_pegawai->get_data_barang_bykode($kode);
        echo json_encode($data);
    }
}
