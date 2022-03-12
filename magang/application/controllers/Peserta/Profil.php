<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        $data['title'] = 'Peserta | Profil';
        $data['user2'] = $this->Model_peserta->getuser();
        $id_pm = $data['user2']['id_pm'];
        $ket1 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
        $ket2 = 'peserta_magang.id_pm';
        $peg = $this->Model_peserta->ajoin2('peserta_magang', 'data_pegawai', $ket1, $ket2, $id_pm, 'inner')->row();
        $data['peg'] = $peg;
        $nohp = $peg->no_whatsapp;
        $nohp2 = $data['user2']['no_wa_pi_pm'];
        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp), 0, 2) == '62') {
                $data['nohp'] = '+' . substr(trim($nohp), 0);
            } elseif (substr(trim($nohp), 0, 3) == '+62') {
                $data['nohp'] = trim($nohp);
            } elseif (substr(trim($nohp), 0, 1) == '0') {
                $data['nohp'] = '+62' . substr(trim($nohp), 1);
            } else {
                $data['nohp'] = 'tidak valid';
            }
        }
        if (!preg_match('/[^+0-9]/', trim($nohp2))) {
            if (substr(trim($nohp2), 0, 2) == '62') {
                $data['nohp2'] = '+' . substr(trim($nohp2), 0);
            } elseif (substr(trim($nohp2), 0, 3) == '+62') {
                $data['nohp2'] = trim($nohp2);
            } elseif (substr(trim($nohp2), 0, 1) == '0') {
                $data['nohp2'] = '+62' . substr(trim($nohp2), 1);
            } else {
                $data['nohp2'] = 'tidak valid';
            }
        }
        // var_dump($peg);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('peserta/profil/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit_profil($id_pm)
    {
        $data['title'] = 'Peserta | Edit Profil';
        $ket = ['id_pm' => $id_pm];
        $getdetail = $this->Model_peserta->getdet('peserta_magang', $ket)->row();
        $data['detail'] = $getdetail;
        $pegawai = $this->Model_peserta->getall('data_pegawai')->result();
        $data['pegawai'] = $pegawai;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('peserta/profil/v_edit_profil', $data);
        $this->load->view('templates/footer');
    }

    public function simpanedit()
    {
        $id_pm = $this->input->post('id_pm');
        $ket = ['id_pm' => $id_pm];
        $getdetail = $this->Model_peserta->getdet('peserta_magang', $ket)->row();
        $pengajuan = $_FILES['pengajuan']['name'];
        if ($pengajuan) {
            $config['upload_path'] = './assets/dokumen/surat';
            $config['allowed_types'] = 'pdf|docx';
            $config['max_size']     = '3000';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('pengajuan')) {
                $filelama = $getdetail->s_pengajuan_pm;
                unlink(FCPATH . '/assets/dokumen/surat/' . $filelama);
                $s_pengajuan = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> File Gagal Diunggah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
                redirect('peserta/profil/edit_profil/' . $id_pm);
            }
        } else {
            $s_pengajuan = $getdetail->s_pengajuan_pm;
        }
        $penerimaan = $_FILES['penerimaan']['name'];
        if ($penerimaan) {
            $config['upload_path'] = './assets/dokumen/surat';
            $config['allowed_types'] = 'pdf|docx';
            $config['max_size']     = '3000';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('penerimaan')) {
                $filelama = $getdetail->s_penerimaan_pm;
                unlink(FCPATH . '/assets/dokumen/surat/' . $filelama);
                $s_penerimaan = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> File Gagal Diunggah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
                redirect('peserta/profil/edit_profil/' . $id_pm);
            }
        } else {
            $s_penerimaan = $getdetail->s_penerimaan_pm;
        }
        $data = [
            'nama_pm' => htmlspecialchars($this->input->post('nama')),
            // 'jk_pm' => $this->input->post('jk'),
            'no_wa_pm' => htmlspecialchars($this->input->post('nowa')),
            'jns_magang' => $this->input->post('jenis'),
            'asal_instansi_pm' => htmlspecialchars($this->input->post('asalinstansi')),
            'jurusan_pm' => htmlspecialchars($this->input->post('jurusan')),
            'pi_pm' => htmlspecialchars($this->input->post('pi')),
            'no_wa_pi_pm' => htmlspecialchars($this->input->post('nowapi')),
            'tgl_mli_pm' => $this->input->post('tglmli'),
            'tgl_sls_pm' => $this->input->post('tglsls'),
            's_pengajuan_pm' => $s_pengajuan,
            's_penerimaan_pm' => $s_penerimaan,
            'pembimbing_balai' => $this->input->post('pb')
        ];
        // var_dump($data);
        $this->Model_peserta->updata('peserta_magang', $data, $ket);
        //$this->Model_peserta->updata('laporan_mingguan', $data, $ket);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Profil Berhasil Diubah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> </div>');
        redirect('peserta/profil');
    }

    public function blok()
    {
        echo "blok";
    }
}
