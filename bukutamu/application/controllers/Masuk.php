<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
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

            if ($jenis == 'pegbt') {
                redirect('pegawai/bukutamu_a');
            } elseif ($jenis == 'adminbt') {
                redirect('admin/peg_tamu_a');
            }
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('ks', 'Kata Sandi', 'required');
        if ($this->form_validation->run() == false) { //kl form validasi gagal
            $data['title'] = "Magang Balitklimat | Masuk";
            $this->load->view('templates/header', $data);
            $this->load->view('v_masuk');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $ks = $this->input->post('ks');
        $user = $this->Model_buku_tamu->getem($email, 'data_pegawai', 'email');
        if ($user) {
            $nip = $user['nip'];
            $ket = ['nip' => $nip, 'role' => 'Admin Buku Tamu'];
            $getrole = $this->Model_buku_tamu->getdet('detail_role', $ket)->row();
            if ($getrole) {
                if ($user['password'] == $ks) {
                    $data = [
                        'email' => $user['email'],
                        'jenis' => 'adminbt'
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/peg_tamu_a');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Kata sandi salah!  </div>');
                    redirect('masuk');
                }
            } else {
                if ($user['password'] == $ks) {
                    $data = [
                        'email' => $user['email'],
                        'jenis' => 'pegbt'
                    ];
                    $this->session->set_userdata($data);
                    redirect('pegawai/bukutamu_a');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Kata sandi salah!  </div>');
                    redirect('masuk');
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun tidak terdaftar!  </div>');
            redirect('masuk');
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('jenis');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil keluar!  </div>');
        redirect('masuk');
    }

    public function blok()
    {
        echo "blok";
    }
}
