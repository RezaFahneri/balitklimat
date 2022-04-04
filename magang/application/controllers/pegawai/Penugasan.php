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
        //echo 'selamat datang ' . $data['user2']['nama_pm'];
        $data['title'] = 'Pegawai | Penugasan';
        $data['user'] = $this->Model_pegawai->getuser();
        $nip = $data['user']['nip'];
        $ket = ['pembimbing_balai' => $nip];
        $data['detail'] = $this->Model_pegawai->getdet('tugas', $ket, 'id_tugas', 'DESC')->result();
        $ket1 = 'peserta_magang.id_pm = detail_penugasan.id_pm';
        $detailtgs = $this->Model_pegawai->bjoin2('detail_penugasan', 'peserta_magang', $ket1, 'inner', 'nama_pm', 'ASC')->result();
        $data['detailtgs'] = $detailtgs;
        $data['peserta'] = $this->Model_pegawai->getdet('peserta_magang', $ket, 'nama_pm', 'ASC')->result();
        // var_dump($detailtgs);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/penugasan/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['user2'] = $this->Model_pegawai->getuser();
        $nip = $data['user2']['nip'];
        $this->form_validation->set_rules('isitgs', 'Isi penugasan', 'required|trim');
        $this->form_validation->set_rules('tgltgs', 'Tanggal ', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Pegawai | Tambah penugasan';
            $ket = ['pembimbing_balai' => $nip];
            $data['peserta'] = $this->Model_pegawai->getdet('peserta_magang', $ket, 'nama_pm', 'ASC')->result();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('pegawai/penugasan/v_tambah', $data);
            $this->load->view('templates/footer');
        } else {

            $doktgs = $_FILES['doktgs']['name'];
            if ($doktgs) {
                $config['upload_path'] = './assets/dokumen/tugas';
                $config['allowed_types'] = 'pdf|docx';
                $config['max_size']     = '3000';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('doktgs')) {
                    $doktgs = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> File Gagal Diunggah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
                    redirect('pegawai/penugasan/tambah');
                }
            } else {
            }
            $id = $this->Model_pegawai->idp();
            $jmlh = count($this->input->post('pm'));
            $data = [
                'id_tugas' => $id,
                'isi_tugas' => $this->input->post('isitgs'),
                'jumlah_pm' => $jmlh,
                'tgl_pengumpulan' => date('Y-m-d', strtotime($this->input->post('tgltgs'))),
                'dok_tugas' => $doktgs,
                'pembimbing_balai' => $nip,
            ];
            // var_dump($data);
            $this->Model_pegawai->insert('tugas', $data);
            $no = 1;
            for ($x = 0; $x < $jmlh; $x++) {
                $iddettugas = 'D' . $id . $no++;
                $data1[$x] = [
                    'id_det_tugas' => $iddettugas,
                    'id_tugas' => $id,
                    'id_pm' => $this->input->post('pm[' . $x . ']'),
                    'status' => 'Berlangsung'
                ];
                $datanp[$x] = [
                    'id_np' => $this->Model_pegawai->idnp(),
                    'tgl_notif' => mdate('%Y-%m-%d'),
                    'jenis' => 'Tugas',
                    'id_aksi' => $iddettugas,
                    // 'id_pm' => $this->input->post('pm[' . $x . ']'),
                    'status_np' => 'sent',
                ];
                // var_dump($iddettugas);
                // // var_dump($datanp[$x]);
                $this->Model_pegawai->insert('detail_penugasan', $data1[$x]);
                $this->Model_pegawai->insert('notif_peserta', $datanp[$x]);
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Penugasan berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
            redirect('pegawai/penugasan');
        }
    }

    public function detail($id_tugas)
    {
        $data['title'] = 'Pegawai | Detail Penugasan';
        $ket = ['id_tugas' => $id_tugas];
        //ambil 1 row id yang sesuai dengan id tugas
        $getdetail = $this->Model_pegawai->getdet('tugas', $ket)->row();
        $data['detail'] = $getdetail;
        //ambil array dari peserta yg idtugasnya sama
        $ket1 = 'peserta_magang.id_pm = detail_penugasan.id_pm';
        $ket2 = 'detail_penugasan.id_tugas';
        $detailtgs = $this->Model_pegawai->ajoin2('detail_penugasan', 'peserta_magang', $ket1, $ket2, $id_tugas, 'inner', 'nama_pm', 'ASC')->result();
        $data['detailtgs'] = $detailtgs;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/penugasan/v_detail', $data);
        $this->load->view('templates/footer');
    }

    public function detail_peserta($id_det_tugas)
    {
        $data['title'] = 'Pegawai | Detail Peserta Penugasan';
        $ket1 = 'peserta_magang.id_pm = detail_penugasan.id_pm';
        $ket = 'detail_penugasan.id_det_tugas';
        $getdetail = $this->Model_pegawai->ajoin2('detail_penugasan', 'peserta_magang', $ket1, $ket, $id_det_tugas, 'inner')->row();
        $data['detail'] = $getdetail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/penugasan/v_detail_peserta', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id_tugas)
    {
        $data['title'] = 'Pegawai | Edit Penugasan';
        //ambil detail laporan sesuai id yang dipilih
        $ket = ['id_tugas' => $id_tugas];
        $getdetail = $this->Model_pegawai->getdet('tugas', $ket)->row();
        $data['detail'] = $getdetail;
        //ambil data user
        $data['user2'] = $this->Model_pegawai->getuser();
        $nip = $data['user2']['nip'];
        $ket2 = ['pembimbing_balai' => $nip];
        $data['peserta'] = $this->Model_pegawai->getdet('peserta_magang', $ket2, 'nama_pm', 'ASC')->result();
        //var_dump($data['peserta']);
        //ambil nama nama peserta yang ada di tugas; harus join 3 karena harus nampilin nama peserta magang!
        $ket3 = 'tugas.id_tugas = detail_penugasan.id_tugas';
        $ket4 = 'peserta_magang.id_pm = detail_penugasan.id_pm';
        $ket5 = 'detail_penugasan.id_tugas';
        $detailtgs = $this->Model_pegawai->ajoin3('detail_penugasan', 'tugas', 'peserta_magang', $ket3, $ket4, $ket5, $id_tugas, 'inner', 'inner')->result();
        $data['detailtgs'] = $detailtgs;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/penugasan/v_edit', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $id_tugas = $this->input->post('id_tugas');
        $ket = ['id_tugas' => $id_tugas];
        $getdetail = $this->Model_pegawai->getdet('tugas', $ket)->row();
        $doktgs = $_FILES['doktgs']['name'];
        if ($doktgs) {
            $config['upload_path'] = './assets/dokumen/tugas';
            $config['allowed_types'] = 'pdf|docx';
            $config['max_size']     = '3000';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('doktgs')) {
                $filelama = $getdetail->dok_tugas;
                unlink(FCPATH . '/assets/dokumen/tugas/' . $filelama);
                $dok_tgs = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> File Gagal Diunggah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
                redirect('peserta/laporan/detail/' . $id_tugas);
            }
        } else {
            $dok_tgs = $getdetail->dok_tugas;
        }
        $data = [
            'isi_tugas' => $this->input->post('isitgs'),
            'tgl_pengumpulan' => date('Y-m-d', strtotime($this->input->post('tgltgs'))),
            'dok_tugas' => $dok_tgs,
        ];
        $this->Model_pegawai->updata('tugas', $data, $ket);
        $dettgs = $this->Model_pegawai->getdet('detail_penugasan', $ket)->result_array();
        $count = count($dettgs);
        for ($i = 0; $i < $count; $i++) {
            $iddettgs = $dettgs[$i];
            $iddettgss = $iddettgs['id_det_tugas'];
            $datanp[$i] = [
                'id_np' => $this->Model_pegawai->idnp(),
                'tgl_notif' => mdate('%Y-%m-%d'),
                'jenis' => 'UTugas',
                'id_aksi' => $iddettgss,
                'status_np' => 'sent',
            ];
            $this->Model_pegawai->insert('notif_peserta', $datanp[$i]);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Penugasan berhasil diubah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        redirect('pegawai/penugasan/detail/' . $id_tugas);
    }

    public function hapus($id_tugas)
    {
        $ket = ['id_tugas' => $id_tugas];
        $getdetail = $this->Model_pegawai->getdet('tugas', $ket)->row();
        $filelama = $getdetail->dok_tugas;
        unlink(FCPATH . '/assets/dokumen/tugas/' . $filelama);
        $this->Model_pegawai->hapus('tugas', $ket);
        $this->Model_pegawai->hapusnotif('notif_peserta', $id_tugas);
        $this->Model_pegawai->hapus('detail_penugasan', $ket);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Penugasan berhasil dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        redirect('pegawai/penugasan');
    }
}
