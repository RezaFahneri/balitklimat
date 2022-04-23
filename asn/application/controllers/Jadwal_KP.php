<?php

class Jadwal_KP extends CI_Controller
{
    public $result = [
        'status' => false,
        'data' => [],
    ];
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kenaikan_pangkat');
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
        $data['jadwal_kp'] = $this->Model_kenaikan_pangkat->getList();
        $data['title'] = 'ASN BALITKLIMAT | Jadwal Kenaikan Pangkat';

        $this->load->view('templates/v_template', $data);
        $this->load->view('Jadwal_Pangkat/v_jadwal_pangkat', $data);
        $this->load->view('templates/footer', $data);
    }
    function kalender()
    {
        $data['title'] = 'ASN BALITKLIMAT | Kalender Jadwal Kenaikan Pangkat';
        //$data['jadwal_kp'] = $this->Model_kenaikan_pangkat->fetch_all_event('data_jadwal_naik_pangkat')->result();
        // foreach($event_data->result_array() as $row)
        // {
        // $events[] = array(
        //     'title' => $row['nip'],
        //     'start' => $row['jadwal_kp'],
        // );
        // }
        // echo json_encode($data);
        // $data['calendar'] = json_encode($data);
        $this->load->view('templates/v_template', $data);
        $this->load->view('Jadwal_Pangkat/v_kalender_kp', $data);
        $this->load->view('templates/footer', $data);
    }
    function tambah()
    {
        $data['title'] = 'ASN BALITKLIMAT | Tambah Jadwal Kenaikan Pangkat';
        $data['jadwal_kp'] = $this->Model_kenaikan_pangkat->get_kode_kp($data);
        $data['nip'] = $this->Model_pegawai->getList();
        $data['id_golongan'] = $this->Model_golongan->getList();
        $data['id_pangkat'] = $this->Model_pangkat->getList();

        $this->load->view('templates/v_template', $data);
        $this->load->view('Jadwal_Pangkat/v_tambah_jadwal_pangkat', $data);
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
        $this->form_validation->set_rules('kode_kp', 'Kode KP', 'required');
        $this->form_validation->set_rules('nip', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules(
            'id_golongan_berikutnya',
            'Golongan Berikutnya',
            'required'
        );
        $this->form_validation->set_rules(
            'id_pangkat_berikutnya',
            'Pangkat Berikutnya',
            'required'
        );
        $this->form_validation->set_rules(
            'tmt_pangkat_1',
            'TMT Pangkat 1',
            'required'
        );
        $this->form_validation->set_rules('tmt_pangkat_2', 'TMT Pangkat 2');
        $this->form_validation->set_rules('tmt_pangkat_3', 'TMT Pangkat 3');
        $this->form_validation->set_rules('tmt_pangkat_4', 'TMT Pangkat 4');
        $this->form_validation->set_rules('tmt_pangkat_5', 'TMT Pangkat 5');
        $this->form_validation->set_rules(
            'jadwal_kp',
            'Jadwal Kenaikan Pangkat',
            'required'
        );
        $this->form_validation->set_message(
            'required',
            '%s masih kosong, silahkan isi'
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'ASN BALITKLIMAT | Tambah Jadwal Kenaikan Pangkat';
            $data['jadwal_kp'] = $this->Model_kenaikan_pangkat->get_kode_kp(
                $data
            );
            $data['nip'] = $this->Model_pegawai->getList();
            $data['id_golongan'] = $this->Model_golongan->getList();
            $data['id_pangkat'] = $this->Model_pangkat->getList();

            $this->load->view('templates/v_template', $data);
            $this->load->view('Jadwal_Pangkat/v_tambah_jadwal_pangkat', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $kode_kp = $this->input->post('kode_kp');
            $nip = $this->input->post('nip');
            $id_golongan = $this->input->post('id_golongan_berikutnya');
            $id_pangkat = $this->input->post('id_pangkat_berikutnya');
            $tmt_pangkat_1 = $this->input->post('tmt_pangkat_1');
            $tmt_pangkat_2 = $this->input->post('tmt_pangkat_2');
            $tmt_pangkat_3 = $this->input->post('tmt_pangkat_3');
            $tmt_pangkat_4 = $this->input->post('tmt_pangkat_4');
            $tmt_pangkat_5 = $this->input->post('tmt_pangkat_5');
            $jadwal_kp = $this->input->post('jadwal_kp');
            $data = [
                'kode_kp' => $kode_kp,
                'nip' => $nip,
                'id_golongan_berikutnya' => $id_golongan,
                'id_pangkat_berikutnya' => $id_pangkat,
                'tmt_pangkat_1' => $tmt_pangkat_1,
                'tmt_pangkat_2' => $tmt_pangkat_2,
                'tmt_pangkat_3' => $tmt_pangkat_3,
                'tmt_pangkat_4' => $tmt_pangkat_4,
                'tmt_pangkat_5' => $tmt_pangkat_5,
                'jadwal_kp' => $jadwal_kp,
            ];

            if ($this->Model_kenaikan_pangkat->NIPCheck($nip) == true) {
                $this->Model_kenaikan_pangkat->input_data(
                    $data,
                    'data_jadwal_naik_pangkat'
                );
                $this->session->set_flashdata(
                    'sukses',
                    'Jadwal kenaikan pangkat berhasil ditambahkan'
                );
                redirect('jadwal_kp');
            } else {
                $this->session->set_flashdata(
                    'error',
                    'Pegawai sudah dijadwalkan kenaikan pangkat'
                );
                redirect('jadwal_kp');
            }
        }
    }

    function edit()
    {
        $kode_kp = $this->input->get('kode_kp');
        $data['primary_view'] = 'Jadwal_Pangkat/v_update_jadwal_pangkat';
        $data['nip'] = $this->Model_pegawai->getList();
        $data['nip1'] = $this->Model_pegawai->getList();
        $data['id_golongan'] = $this->Model_golongan->getList();
        $data['id_golongan1'] = $this->Model_golongan->getList();
        $data['id_pangkat'] = $this->Model_pangkat->getList();
        $data['id_pangkat1'] = $this->Model_pangkat->getList();
        //$data['detail'] = $this->Model_kenaikan_pangkat->getDetail($kode_kp);
        $data['update_jadwalkp'] = $this->Model_kenaikan_pangkat->getList2(
            $kode_kp
        );
        $data['title'] = 'Edit Jadwal Kenaikan Pangkat | ASN';
        $this->load->view('templates/v_template', $data);
        $this->load->view('Jadwal_Pangkat/v_update_jadwal_pangkat', $data);
        $this->load->view('templates/footer', $data);
    }
    function update()
    {
        $kode_kp = $this->input->post('kode_kp');
        $id_golongan = $this->input->post('id_golongan_berikutnya');
        $id_pangkat = $this->input->post('id_pangkat_berikutnya');
        $tmt_pangkat_1 = $this->input->post('tmt_pangkat_1');
        $tmt_pangkat_2 = $this->input->post('tmt_pangkat_2');
        $tmt_pangkat_3 = $this->input->post('tmt_pangkat_3');
        $tmt_pangkat_4 = $this->input->post('tmt_pangkat_4');
        $tmt_pangkat_5 = $this->input->post('tmt_pangkat_5');
        $jadwal_kp = $this->input->post('jadwal_kp');

        $data = [
            'id_golongan_berikutnya' => $id_golongan,
            'id_pangkat_berikutnya' => $id_pangkat,
            'tmt_pangkat_1' => $tmt_pangkat_1,
            'tmt_pangkat_2' => $tmt_pangkat_2,
            'tmt_pangkat_3' => $tmt_pangkat_3,
            'tmt_pangkat_4' => $tmt_pangkat_4,
            'tmt_pangkat_5' => $tmt_pangkat_5,
            'jadwal_kp' => $jadwal_kp,
        ];
        $where = [
            'kode_kp' => $kode_kp,
        ];
        $this->load->Model('Model_kenaikan_pangkat');
        $this->Model_kenaikan_pangkat->update_data(
            $where,
            $data,
            'data_jadwal_naik_pangkat'
        );
        $this->session->set_flashdata(
            'sukses',
            'Jadwal Kenaikan Pangkat berhasil diperbarui'
        );
        redirect('jadwal_kp');
    }
    public function detail($kode_kp)
    {
        $data['title'] = 'ASN BALITKLIMAT | Detail Jadwal Kenaikan Pangkat';
        $detail = $this->Model_kenaikan_pangkat->detail_jadwalkp($kode_kp);
        $data['detail'] = $detail;
        $this->load->view('templates/v_template', $data);
        $this->load->view('Jadwal_Pangkat/v_detail_jadwal_pangkat', $data);
        $this->load->view('templates/footer');
    }
    function hapus($kode_kp)
    {
        $where = ['kode_kp' => $kode_kp];
        $this->Model_kenaikan_pangkat->hapus_data(
            $where,
            'data_jadwal_naik_pangkat'
        );
        $this->session->set_flashdata(
            'sukses',
            'Jadwal kenaikan pangkat berhasil dihapus'
        );
        redirect('jadwal_kp');
    }
}
?>
