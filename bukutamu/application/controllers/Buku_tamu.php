<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_tamu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            $jenis = $this->session->userdata('jenis');

            if ($jenis == 'pegawai') {
                redirect('pegawai');
            } elseif ($jenis == 'admin') {
                redirect('admin');
            }
        }
        $this->form_validation->set_rules('jenis', 'Jenis Tamu', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('asalinstansi', 'Asal Instansi', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required');
        // $this->form_validation->set_rules('nowa', 'Nomor Whatsapp', 'required');
        $this->form_validation->set_rules('id_divisi', 'Divisi', 'required');
        $this->form_validation->set_rules('kep', 'Keperluan', 'required');

        $divisi = $this->Model_buku_tamu->get_data('data_divisi');
        $keta = 'data_divisi.id_divisi = data_pegawai.id_divisi';
        $pegawai = $this->Model_buku_tamu->joinpegdiv('data_pegawai', 'data_divisi', $keta, 'inner', 'nama_pegawai', 'ASC')->result();
        $ketc = ['jabatan' => 'Plt. Kepala Balai'];
        $namakepbalai = $this->Model_buku_tamu->getdetail('data_jabatan', $ketc);
        $ketb = 'data_jabatan.id_jabatan = data_pegawai.id_jabatan';
        $where = 'data_pegawai.id_jabatan';
        $kepalabalai = $this->Model_buku_tamu->join2where('data_pegawai', 'data_jabatan', $ketb, $where, $namakepbalai->id_jabatan, 'inner')->row();

        // $keperluan = $this->Model_buku_tamu->get_data('bt_keperluan');
        // $alasan = $this->Model_buku_tamu->get_data('bt_alasan');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Buku Tamu Balitklimat";
            $data['divisi'] = $divisi;
            $data['pegawai'] = $pegawai;
            $data['kepalabalai'] = $kepalabalai;
            // var_dump($kepalabalai);
            // $data['keperluan'] = $keperluan;
            // $data['alasan'] = $alasan;
            $this->load->view('templates/header', $data);
            $this->load->view('v_index');
        } else {
            $data = [
                'id_buku_tamu' => $this->Model_buku_tamu->idbt(),
                'jenis' => $this->input->post('jenis'),
                'tanggal' => date('Y-m-d', strtotime($this->input->post('tgl'))),
                'waktu' => $this->input->post('waktu'),
                'nama_lengkap' => htmlspecialchars($this->input->post('nama')),
                'asal_instansi' => htmlspecialchars($this->input->post('asalinstansi')),
                'email' => $this->input->post('email'),
                'no_wa' => $this->input->post('nowa'),
                'id_divisi' => $this->input->post('id_divisi'),
                'pegawai_nip' => $this->input->post('peg'),
                'keperluan' => $this->input->post('kep'),
                'alasan' => $this->input->post('als'),
                'keterangan' => htmlspecialchars($this->input->post('ket'))
            ];
            // var_dump($data);
            $this->Model_buku_tamu->insert_data('buku_tamu', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil disimpan!   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('buku_tamu');
        }
    }

    public function pegawai()
    {
        if ($this->input->post('id_divisi')) {
            echo $this->Model_buku_tamu->fetch_pegawai($this->input->post('id_divisi'));
        }
    }
}
