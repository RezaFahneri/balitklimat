<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        //echo 'selamat datang ' . $data['user2']['nama_pm'];
        $data['title'] = 'Pegawai | Laporan';
        $data['sub'] = 'Laporan Mingguan Peserta Bimbingan';
        $data['user'] = $this->Model_pegawai->getuser();
        $nip = $data['user']['nip'];
        $ket1 = 'laporan_mingguan.id_pm = peserta_magang.id_pm';
        $ket2 = 'peserta_magang.pembimbing_balai';
        $getdetail = $this->Model_pegawai->ajoin2('peserta_magang', 'laporan_mingguan', $ket1, $ket2, $nip, 'inner', 'tgl_lap_ming', 'DESC')->result();
        $data['detail'] = $getdetail;
        //var_dump($getdetail);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/laporan/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_lap_ming)
    {
        //echo 'selamat datang ' . $data['user2']['nama_pm'];
        $data['title'] = 'Pegawai | Detail Laporan';
        $data['jns'] = '1';
        $data['user'] = $this->Model_pegawai->getuser();
        $nip = $data['user']['nip'];
        $ket1 = 'laporan_mingguan.id_pm = peserta_magang.id_pm';
        $ket = 'peserta_magang.pembimbing_balai';
        $ketw = 'laporan_mingguan.id_lap_ming';
        $getdetail = $this->Model_pegawai->cjoin2('peserta_magang', 'laporan_mingguan', $ket1, $ket, $nip, $ketw, $id_lap_ming, 'inner')->row();
        $data['detail'] = $getdetail;
        // var_dump($getdetail);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/laporan/v_detail', $data);
        $this->load->view('templates/footer');
    }

    public function review()
    {
        $idnp = $this->Model_pegawai->idnp();
        $id_lap_ming = $this->input->post('id');
        $ket = ['id_lap_ming' => $id_lap_ming];
        $datarev = [
            'review_lap' => htmlspecialchars($this->input->post('isirev')),
            'status_rev' => 'sent',
        ];
        $ket2 = ['id_aksi' => $id_lap_ming];
        $getdetailnotif = $this->Model_pegawai->getdet('notif_peserta', $ket2)->result();
        if (!$getdetailnotif) {
            $datanp = [
                'id_np' => $idnp,
                'tgl_notif' => mdate('%Y-%m-%d'),
                'jenis' => 'Review',
                'id_aksi' => $id_lap_ming,
                'status_np' => 'sent',
            ];
        } else {
            $datanp = [
                'id_np' => $idnp,
                'tgl_notif' => mdate('%Y-%m-%d'),
                'jenis' => 'UReview',
                'id_aksi' => $id_lap_ming,
                'status_np' => 'sent',
            ];
        }
        $this->Model_pegawai->insert('notif_peserta', $datanp);
        $this->Model_peserta->updata('laporan_mingguan', $datarev, $ket);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Review Laporan Mingguan Berhasil Disimpan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        redirect('pegawai/laporan/detail/' . $id_lap_ming);
    }

    public function hapus($id_lap_ming)
    {
        $ket = ['id_lap_ming' => $id_lap_ming];
        $datarev = [
            'review_lap' => NULL,
            'status_rev' => NULL,
        ];
        $this->Model_peserta->updata('laporan_mingguan', $datarev, $ket);
        $ket1 = ['id_aksi' => $id_lap_ming];
        $this->Model_pegawai->hapus('notif_peserta', $ket1);
        $this->Model_peserta->updata('laporan_mingguan', $datarev, $ket);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Review Laporan Mingguan Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        redirect('pegawai/laporan/detail/' . $id_lap_ming);
    }

    public function laporan_seluruh()
    {
        //echo 'selamat datang ' . $data['user2']['nama_pm'];
        //echo 'selamat datang ' . $data['user2']['nama_pm'];
        $data['title'] = 'Pegawai | Laporan';
        $data['sub'] = 'Laporan Mingguan Seluruh Peserta';
        $data['user'] = $this->Model_pegawai->getuser();
        $data['nip'] = $data['user']['nip'];
        $ket1 = 'laporan_mingguan.id_pm = peserta_magang.id_pm';
        $ket2 = 'data_pegawai.nip= peserta_magang.pembimbing_balai';
        $getdetail = $this->Model_pegawai->bjoin3('peserta_magang', 'laporan_mingguan', 'data_pegawai', $ket1, $ket2, 'inner', 'tgl_lap_ming', 'DESC')->result();
        // $ket1 = 'peserta_magang.id_pm = laporan_mingguan.id_pm';
        // $getdetail = $this->Model_pegawai->alljoin2arrinner('laporan_mingguan', 'peserta_magang', $ket1);
        $data['details'] = $getdetail;
        // var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/laporan/index', $data);
        $this->load->view('templates/footer');
    }

    public function det_lap($id_lap_ming)
    {
        //echo 'selamat datang ' . $data['user2']['nama_pm'];
        $data['title'] = 'Pegawai | Detail Laporan';
        $data['user'] = $this->Model_pegawai->getuser();
        $data['jns'] = '0';
        // $nip = $data['user']['nip'];
        $ket1 = 'laporan_mingguan.id_pm = peserta_magang.id_pm';
        $ketw = 'laporan_mingguan.id_lap_ming';
        $getdetail = $this->Model_pegawai->ajoin2('peserta_magang', 'laporan_mingguan', $ket1, $ketw, $id_lap_ming, 'inner')->row();
        $data['detail'] = $getdetail;
        // var_dump($getdetail);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/laporan/v_detail', $data);
        $this->load->view('templates/footer');
    }
}
