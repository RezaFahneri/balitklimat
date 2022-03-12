<?php

class Perjalanan_dinas extends CI_Controller
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
        $this->load->Model('Model_perjalanan_dinas');
        $this->load->Model('Model_anggota_perjadin');
        $this->load->Model('Model_kota');
        $this->load->Model('Model_mak');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
    }
    function index()
    {
        $data['data_perjalanan_dinas'] = $this->Model_perjalanan_dinas->getList();
        $data['data_anggota_perjadin'] = $this->Model_anggota_perjadin->getList();
        $data['title'] = "PERJADIN BALITKLIMAT | Data Perjalanan Dinas";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Perjalanan_Dinas/v_data_perjalanan_dinas', $data);
        $this->load->view('templates/footer', $data);
    }
    public function detail($id_perjalanan_dinas)
    {
        $data['title'] = "PERJADIN BALITKLIMAT | Detail Pegawai";
        $detail = $this->Model_perjalanan_dinas->detail_data($id_perjalanan_dinas);
        $data['detail'] = $detail;
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Perjalanan_Dinas/v_detail_perjalanan_dinas', $data);
        $this->load->view('templates/footer');
    }
    function tambah()
    {
        $data['title'] = 'PERJADIN BALITKLIMAT | Tambah Data Perjalanan Dinas';
        $data['id_kota'] = $this->Model_kota->getList();
        $data['kode_kegiatan'] = $this->Model_kegiatan->getList();
        $data['kode_mak'] = $this->Model_mak->getList();
        // $data['pumk'] = $this->Model_pegawai->getListPUMK();
        $data['data_pegawai'] = $this->db->get_where('data_pegawai', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['nip'] = $this->Model_pegawai->getList();
        $data['nip_ppk'] = $this->Model_pegawai->getListPPK();
        $data['nip_kpa'] = $this->Model_pegawai->getListKPA();
        $data['nip_bendahara'] = $this->Model_pegawai->getListBendahara();
        $data['nip_kepala_balai'] = $this->Model_pegawai->getListKepalaBalai();
        $data['nip_plt_kb'] = $this->Model_pegawai->getListPltBalai();

        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Perjalanan_Dinas/v_tambah_data_perjalanan_dinas', $data);
        $this->load->view('templates/footer', $data);
    }
    function tambah_aksi()
    {
        $no_surat_tugas = $this->input->post('kode_surat').$this->input->post('no_surat_tugas');
        $tanggal_berangkat = $this->input->post('tanggal_berangkat');
        $tanggal_kembali = $this->input->post('tanggal_kembali');

        $tgl1 = new DateTime($tanggal_berangkat);
        $tgl2 = new DateTime($tanggal_kembali);
        $selisih = $tgl1->diff($tgl2);
        $data = array(
            'kode_kegiatan' => $this->input->post('kode_kegiatan'),
            'dalam_rangka' => $this->input->post('dalam_rangka'),
            'nip_pumk' => $this->input->post('nip_pumk'),
            'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
            'no_st' => $this->generateID(),
            'no_surat_tugas' => $no_surat_tugas,
            'kode_mak' => $this->input->post('kode_mak'),
            'jenis_pengajuan' => $this->input->post('jenis_pengajuan'),
            'jenis_perjalanan_dinas' => $this->input->post('jenis_perjalanan_dinas'),
            'id_kota_asal' => $this->input->post('id_kota_asal'),
            'id_kota_tujuan' => $this->input->post('id_kota_tujuan'),
            'kendaraan' => $this->input->post('kendaraan'),
            'tanggal_berangkat' => $this->input->post('tanggal_berangkat'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'lama_perjalanan' => $selisih->days+1,
            'nip_verifikator' => $this->input->post('nip_verifikator'),
            'nip_ppk' => $this->input->post('nip_ppk'),
            'nip_bendahara' => $this->input->post('nip_bendahara'),
            'nip_kpa' => $this->input->post('nip_kpa'),
            'nip_kepala_balai' => $this->input->post('nip_kepala_balai'),
            'nip_plt_kb' => $this->input->post('nip_plt_kb')
        );
        $this->Model_perjalanan_dinas->input_data($data, 'data_perjalanan_dinas');
        $this->session->set_flashdata('sukses','Data perjalanan dinas berhasil ditambahkan');
        redirect('perjalanan_dinas');
    }
    public function generateID(){
		$query = $this->db->order_by('no_st', 'DESC')->limit(1)->get('data_perjalanan_dinas')->row('no_st');
		$lastNo = (int) substr($query, 0);
		$next = $lastNo + 1;
		return ($next);
	}
    function edit()
    {
        $id_perjalanan_dinas = $this->input->get('id_perjalanan_dinas');
        $data['update_perjalanan_dinas'] = $this->Model_perjalanan_dinas->getList2($id_perjalanan_dinas);
        $data['title'] = 'PERJADIN BALITKLIMAT | Edit Data Perjalanan Dinas';
        $data['detail'] = $this->Model_perjalanan_dinas->getDetail($id_perjalanan_dinas);

        $data['jenis_kegiatan'] = $this->Model_jenis_keg->getList();
        $data['mak'] = $this->Model_mak->getList();
        $data['kg'] = $this->Model_kegiatan->getList();

        // $data['pumk'] = $this->Model_pegawai->getListPUMK();
        $data['data_pegawai'] = $this->db->get_where('data_pegawai', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['kota'] = $this->Model_kota->getList();
        $data['nip'] = $this->Model_pegawai->getList();
        $data['nip_ppk'] = $this->Model_pegawai->getListPPK();
        $data['nip_kpa'] = $this->Model_pegawai->getListKPA();
        $data['nip_bendahara'] = $this->Model_pegawai->getListBendahara();
        $data['nip_kepala_balai'] = $this->Model_pegawai->getListKepalaBalai();
        $data['nip_plt_kb'] = $this->Model_pegawai->getListPltBalai();
        $data['title'] = "PERJADIN | Edit Data Perjalanan Dinas";

        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Perjalanan_Dinas/v_edit_data_perjalanan_dinas', $data);
        $this->load->view('templates/footer', $data);
    }
    function update()
    {
        $id_perjalanan_dinas = $this->input->post('id_perjalanan_dinas');
        $no_surat_tugas = $this->input->post('kode_surat').$this->input->post('no_surat_tugas');
        $tanggal_berangkat = $this->input->post('tanggal_berangkat');
        $tanggal_kembali = $this->input->post('tanggal_kembali');

        $tgl1 = new DateTime($tanggal_berangkat);
        $tgl2 = new DateTime($tanggal_kembali);
        $selisih = $tgl1->diff($tgl2);
        $data = array(
            'kode_kegiatan' => $this->input->post('kode_kegiatan'),
            'dalam_rangka' => $this->input->post('dalam_rangka'),
            'nip_pumk' => $this->input->post('nip_pumk'),
            'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
            'no_surat_tugas' => $no_surat_tugas,
            'kode_mak' => $this->input->post('kode_mak'),
            'jenis_pengajuan' => $this->input->post('jenis_pengajuan'),
            'jenis_perjalanan_dinas' => $this->input->post('jenis_perjalanan_dinas'),
            'id_kota_asal' => $this->input->post('id_kota_asal'),
            'id_kota_tujuan' => $this->input->post('id_kota_tujuan'),
            'kendaraan' => $this->input->post('kendaraan'),
            'tanggal_berangkat' => $this->input->post('tanggal_berangkat'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'lama_perjalanan' => $selisih->days+1,
            'nip_verifikator' => $this->input->post('nip_verifikator'),
            'nip_ppk' => $this->input->post('nip_ppk'),
            'nip_bendahara' => $this->input->post('nip_bendahara'),
            'nip_kpa' => $this->input->post('nip_kpa'),
            'nip_kepala_balai' => $this->input->post('nip_kepala_balai'),
            'nip_plt_kb' => $this->input->post('nip_plt_kb')
        );
        $where = array(
            'id_perjalanan_dinas' => $id_perjalanan_dinas
        );
        $this->load->Model('Model_perjalanan_dinas');
        $this->Model_perjalanan_dinas->update_data($where, $data, 'data_perjalanan_dinas');
        $this->session->set_flashdata('sukses','Data perjalanan dinas berhasil diperbarui! Jika anda memperbarui kota tujuan, harap perbarui juga data anggota pada perjalanan dinas ini!');
        redirect('perjalanan_dinas');
    }
    function hapus($id_perjalanan_dinas)
    {
        $where = array('id_perjalanan_dinas' => $id_perjalanan_dinas);
        if($this->Model_perjalanan_dinas->hapus_data($where, 'data_perjalanan_dinas')==true):{
            $this->session->set_flashdata('sukses','Data perjalanan dinas berhasil dihapus');
            redirect('perjalanan_dinas');
        }endif;
        if($this->Model_perjalanan_dinas->hapus_data($where, 'data_perjalanan_dinas')==false):{
            $this->session->set_flashdata('error','Data perjalanan dinas gagal dihapus karena data perjalanan dinas ini digunakan pada tabel lain');
            redirect('perjalanan_dinas');
        }endif;
    }
    
}
