<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penugasan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        $data['title'] = 'Peserta | Penugasan';
        $data['user2'] = $this->Model_peserta->getuser();
        $id_pm = $data['user2']['id_pm'];
        $ket1 = 'tugas.id_tugas = detail_penugasan.id_tugas';
        $ket2 = 'detail_penugasan.id_pm';
        $getdetail = $this->Model_pegawai->ajoin2('detail_penugasan', 'tugas', $ket1, $ket2, $id_pm, 'inner', 'tgl_pengumpulan', 'DESC')->result();
        $data['detail'] = $getdetail;
        //var_dump($getdetail);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('peserta/penugasan/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_tugas)
    {
        $data['title'] = 'Peserta | Detail Penugasan';
        $data['user2'] = $this->Model_peserta->getuser();
        $id_pm = $data['user2']['id_pm'];
        $ket1 = 'tugas.id_tugas = detail_penugasan.id_tugas';
        $ketparam1 = 'detail_penugasan.id_tugas';
        $ketparam2 = 'detail_penugasan.id_pm';
        $detail = $this->Model_peserta->cjoin2('detail_penugasan', 'tugas', $ket1, $ketparam1, $id_tugas, $ketparam2, $id_pm, 'inner', 'inner')->row();
        $data['detail'] = $detail;
        // var_dump($detailtgs);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('peserta/penugasan/v_detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah($id_det_tugas)
    {
        $data['title'] = 'Peserta | Tambah Hasil Penugasan';
        $data['user2'] = $this->Model_peserta->getuser();
        $ket = ['id_det_tugas' => $id_det_tugas];
        //ambil detail data sesuai dengan id detail tugas
        $data['detail'] = $this->Model_peserta->getdet('detail_penugasan', $ket)->row();
        //$id_pm = $data['user2']['id_pm'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('peserta/penugasan/v_tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $id_det_tugas = $this->input->post('id_det_tugas');
        $ket = ['id_det_tugas' => $id_det_tugas];
        $getdetail = $this->Model_peserta->getdet('detail_penugasan', $ket)->row();
        $id_tugas = $getdetail->id_tugas;
        $doktgs = $_FILES['doktgs']['name'];
        if ($doktgs) {
            $config['upload_path'] = './assets/dokumen/hasil_tugas';
            $config['allowed_types'] = 'pdf|docx|doc';
            $config['max_size']     = '3000';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('doktgs')) {
                $filelama = $getdetail->dok_hasil_tugas;
                unlink(FCPATH . '/assets/dokumen/hasil_tugas/' . $filelama);
                $dok_tgs = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> File Gagal Diunggah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
                redirect('peserta/penugasan/detail/' . $id_tugas);
            }
        } else {
            $dok_tgs = $getdetail->dok_hasil_tugas;
        }
        $data = [
            'hasil_tugas' => htmlspecialchars($this->input->post('isitgs')),
            'dok_hasil_tugas' => $dok_tgs,
            'status' => 'Terkumpul'
        ];
        $this->Model_peserta->updata('detail_penugasan', $data, $ket);
        //$this->Model_peserta->updata('laporan_mingguan', $data, $ket);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Hasil penugasan berhasil disimpan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        redirect('peserta/penugasan/detail/' . $id_tugas);
    }


    public function blok()
    {
        echo "blok";
    }
    public function hapus($id_det_tugas)
    {
        $ket = ['id_det_tugas' => $id_det_tugas];
        $getdetail = $this->Model_peserta->getdet('detail_penugasan', $ket)->row();
        $id_tugas = $getdetail->id_tugas;
        $filelama = $getdetail->dok_hasil_tugas;
        unlink(FCPATH . '/assets/dokumen/hasil_tugas/' . $filelama);
        $data = [
            'hasil_tugas' => NULL,
            'dok_hasil_tugas' => NULL,
            'status' => 'Berlangsung'
        ];
        $this->Model_peserta->updata('detail_penugasan', $data, $ket);
        //$this->Model_peserta->updata('laporan_mingguan', $data, $ket);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Hasil penugasan berhasil dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        redirect('peserta/penugasan/detail/' . $id_tugas);
    }
}
