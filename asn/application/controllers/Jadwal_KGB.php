<?php

class Jadwal_KGB extends CI_Controller
{
    public $result = [
        'status' => false,
        'data' => [],
    ];
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kenaikan_gaji');
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_golongan');
        $this->load->Model('Model_pangkat');
        $this->load->helper('url');
        $this->load->library('session');
        if ($this->session->userdata('logged_in') == false) {
            redirect('login');
        }
    }
    function index()
    {
        $data['jadwal_kgb'] = $this->Model_kenaikan_gaji->getList();
        $data['title'] = 'ASN BALITKLIMAT | Jadwal Kenaikan Gaji Berkala';
        $this->load->view('templates/v_template', $data);
        $this->load->view('Jadwal_Gaji/v_Jadwal_gaji', $data);
        $this->load->view('templates/footer', $data);
    }

    function kalender()
    {
        $data['title'] ='ASN BALITKLIMAT | Kalender Jadwal Kenaikan Gaji Berkala';
        $this->load->view('templates/v_template', $data);
        $this->load->view('Jadwal_Gaji/v_kalender_kgb', $data);
        $this->load->view('templates/footer', $data);
    }
    function tambah()
    {
        $data['title'] =
            'ASN BALITKLIMAT | Tambah Jadwal Kenaikan Gaji Berkala';
        $data['jadwal_kgb'] = $this->Model_kenaikan_gaji->get_kode_kgb($data);
        $data['nip'] = $this->Model_pegawai->getList();
        $data['id_golongan'] = $this->Model_golongan->getList();
        $data['id_pangkat'] = $this->Model_pangkat->getList();

        $this->load->view('templates/v_template', $data);
        $this->load->view('Jadwal_Gaji/v_tambah_jadwal_gaji', $data);
        $this->load->view('templates/footer', $data);
    }
    function get_peg()
    {
        $nip = $this->input->post('nip');
        $data = $this->Model_pegawai->get_data_pegawai_bynip($nip);
        echo json_encode($data);
    }
    function tambah_aksi()
    {
        $this->form_validation->set_rules('kode_kgb', 'Kode KGB', 'required');
        $this->form_validation->set_rules('nip', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('gaji_lama', 'Gaji Lama', 'required');
        $this->form_validation->set_rules('gaji_baru', 'Gaji Baru', 'required');
        $this->form_validation->set_rules('tmt_gaji_1','TMT Gaji 1','required');
        $this->form_validation->set_rules('tmt_gaji_2', 'TMT Gaji 2');
        $this->form_validation->set_rules('tmt_gaji_3', 'TMT Gaji 3');
        $this->form_validation->set_rules('tmt_gaji_4', 'TMT Gaji 4');
        $this->form_validation->set_rules('tmt_gaji_5', 'TMT Gaji 5');
        $this->form_validation->set_rules('jadwal_kgb','Jadwal Kenaikan Gaji Berkala','required');
        $this->form_validation->set_message('required','%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == false) {
            $data['title'] ='ASN BALITKLIMAT | Tambah Jadwal Kenaikan Gaji Berkala';
            $data['jadwal_kgb'] = $this->Model_kenaikan_gaji->get_kode_kgb($data);
            $data['nip'] = $this->Model_pegawai->getList();
            $data['id_golongan'] = $this->Model_golongan->getList();
            $data['id_pangkat'] = $this->Model_pangkat->getList();
            $this->load->view('templates/v_template', $data);
            $this->load->view('Jadwal_Gaji/v_tambah_jadwal_gaji', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $kode_kgb = $this->input->post('kode_kgb');
            $nip = $this->input->post('nip');
            $gaji_lama = $this->input->post('gaji_lama');
            $gaji_baru = $this->input->post('gaji_baru');
            $tmt_gaji_1 = $this->input->post('tmt_gaji_1');
            $tmt_gaji_2 = $this->input->post('tmt_gaji_2');
            $tmt_gaji_3 = $this->input->post('tmt_gaji_3');
            $tmt_gaji_4 = $this->input->post('tmt_gaji_4');
            $tmt_gaji_5 = $this->input->post('tmt_gaji_5');
            $jadwal_kgb = $this->input->post('jadwal_kgb');

            $data = [
                'kode_kgb' => $kode_kgb,
                'nip' => $nip,
                'gaji_lama' => $gaji_lama,
                'gaji_baru' => $gaji_baru,
                'tmt_gaji_1' => $tmt_gaji_1,
                'tmt_gaji_2' => $tmt_gaji_2,
                'tmt_gaji_3' => $tmt_gaji_3,
                'tmt_gaji_4' => $tmt_gaji_4,
                'tmt_gaji_5' => $tmt_gaji_5,
                'jadwal_kgb' => $jadwal_kgb,
            ];
            if ($this->Model_kenaikan_gaji->NIPCheck($nip) == true) {
                $this->Model_kenaikan_gaji->input_data($data,'data_jadwal_gaji_berkala');
                $this->session->set_flashdata('sukses','Jadwal kenaikan gaji berkala berhasil ditambahkan');
                redirect('jadwal_kgb');
            } else {
                $this->session->set_flashdata('error','Pegawai sudah dijadwalkan kenaikan gaji berkala');
                redirect('jadwal_kgb');
            } 
        }
    }
    function edit()
    {
        $kode_kgb = $this->input->get('kode_kgb');
        $data['primary_view'] = 'Jadwal_Gaji/v_update_jadwal_gaji';
        $data['nip'] = $this->Model_pegawai->getList();
        $data['nip1'] = $this->Model_pegawai->getList();

        $data['update_jadwalkgb'] = $this->Model_kenaikan_gaji->getList2(
            $kode_kgb
        );
        $data['title'] = 'Edit Data Jadwal Kenaikan Gaji Berkala | ASN';
        $this->load->view('templates/v_template', $data);
        $this->load->view('Jadwal_Gaji/v_update_jadwal_gaji', $data);
        $this->load->view('templates/footer', $data);
    }
    function update()
    {
        $kode_kgb = $this->input->post('kode_kgb');
        $gaji_lama = $this->input->post('gaji_lama');
        $gaji_baru = $this->input->post('gaji_baru');
        $tmt_gaji_1 = $this->input->post('tmt_gaji_1');
        $tmt_gaji_2 = $this->input->post('tmt_gaji_2');
        $tmt_gaji_3 = $this->input->post('tmt_gaji_3');
        $tmt_gaji_4 = $this->input->post('tmt_gaji_4');
        $tmt_gaji_5 = $this->input->post('tmt_gaji_5');
        $jadwal_kgb = $this->input->post('jadwal_kgb');
        $data = [
            'gaji_lama' => $gaji_lama,
            'gaji_baru' => $gaji_baru,
            'tmt_gaji_1' => $tmt_gaji_1,
            'tmt_gaji_2' => $tmt_gaji_2,
            'tmt_gaji_3' => $tmt_gaji_3,
            'tmt_gaji_4' => $tmt_gaji_4,
            'tmt_gaji_5' => $tmt_gaji_5,
            'jadwal_kgb' => $jadwal_kgb,
        ];
        $where = [
            'kode_kgb' => $kode_kgb,
        ];
        $this->load->Model('Model_kenaikan_gaji');
        $this->Model_kenaikan_gaji->update_data($where, $data,'data_jadwal_gaji_berkala');
        $this->session->set_flashdata('sukses',
            'Jadwal kenaikan gaji berkala berhasil diperbarui');
        redirect('jadwal_kgb');
    }
    public function detail($kode_kgb)
    {
        $data['title'] ='ASN BALITKLIMAT | Detail Jadwal Kenaikan Gaji Berkala';
        $detail = $this->Model_kenaikan_gaji->detail_jadwalkgb($kode_kgb);
        $data['detail'] = $detail;
        $this->load->view('templates/v_template', $data);
        $this->load->view('Jadwal_Gaji/v_detail_gaji', $data);
        $this->load->view('templates/footer');
    }
    function hapus($kode_kgb)
    {
        $where = ['kode_kgb' => $kode_kgb];
        $this->Model_kenaikan_gaji->hapus_data($where,'data_jadwal_gaji_berkala');
        $this->session->set_flashdata('sukses','Jadwal kenaikan gaji berkala berhasil dihapus');
        redirect('jadwal_kgb');
    }
}
?>
