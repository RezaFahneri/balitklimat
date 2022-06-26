<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function construct()
    {
        parent::__construct();
        $this->load->Model('Model_dashboard');
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_notifikasi');
        $this->load->Model('Model_kenaikan_pangkat');
        $this->load->Model('Model_kenaikan_gaji');
        $this->load->library('session');
        if ($this->session->userdata('logged_in') == false) {
            redirect('login');
        }
    }

    public function index()
    {
        $total_pegawai = $this->db->query('SELECT * FROM data_pegawai');
        $data['total_pegawai'] = $total_pegawai->num_rows();
        $total_pns = $this->db->query(
            'SELECT * FROM data_pegawai WHERE id_status_peg = 3'
        );
        $data['total_pns'] = $total_pns->num_rows();
        $total_pnstb = $this->db->query(
            'SELECT * FROM data_pegawai WHERE id_status_peg = 4'
        );
        $data['total_pnstb'] = $total_pnstb->num_rows();
        $total_cpns = $this->db->query(
            'SELECT * FROM data_pegawai WHERE id_status_peg = 5'
        );
        $data['total_cpns'] = $total_cpns->num_rows();
        $total_ppnpn = $this->db->query(
            'SELECT * FROM data_pegawai WHERE id_status_peg = 7'
        );
        $data['total_ppnpn'] = $total_ppnpn->num_rows();
        $total_oh = $this->db->query(
            'SELECT * FROM data_pegawai WHERE id_status_peg = 8'
        );
        $data['total_oh'] = $total_oh->num_rows();

        $data['title'] = ' ASN Balitklimat | Beranda';
        $this->load->view('templates/v_template', $data);
        $this->load->view('templates/v_dashboard', $data);
        $this->load->view('templates/footer', $data);
    }
    function tambah_aksi()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'pesan' => $this->input->post('pesan'),
            'jadwal_kenaikan' => $this->input->post('jadwal_kenaikan'),
            'jenis_notif' => $this->input->post('jenis_notif'),
        ];
        if ($this->db->insert('data_notifikasi', $data)) {
            $this->session->set_flashdata(
                'sukses',
                'Notifikasi berhasil dikirim'
            );
            redirect('beranda');
        } else {
            $this->session->set_flashdata('error');
        }
    }
    public function surat_pangkat(){
        $this->load->library('dompdf_gen');
        $data['jadwal_kp'] = $this->Model_kenaikan_pangkat->tampil_data('data_jadwal_naik_pangkat')->resutl();
        $this->load->view('Jadwal_Pangkat/surat_pangkat', $data);

        $paper_size ='A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('surat_keterangan_naik_pangkat.pdf');
    }
    public function hapus($id_notifikasi)
    {
        $where = ['id_notifikasi' => $id_notifikasi];
        $this->db->query(
            "DELETE FROM data_notifikasi WHERE id_notifikasi ='$id_notifikasi'"
        );
        $this->session->set_flashdata('sukses', 'Notifikasi berhasil dihapus');
        redirect('beranda');
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $data = [
            'email' => '',
            'logged_in' => false,
            'role' => '',
        ];
        $this->session->sess_destroy();
        redirect('login');
    }
}
