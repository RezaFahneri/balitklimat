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

            if ($jenis == 'pegawai') {
                redirect('pegawai/bukutamu_a');
            } elseif ($jenis == 'admin') {
                redirect('admin/dashboard');
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
            if ($user['password'] == $ks) {
                $data = [
                    'email' => $user['email'],
                    'jenis' => 'pegawai'
                ];
                $this->session->set_userdata($data);
                redirect('pegawai/bukutamu_a');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">  Kata Sandi Salah! </div>');
                redirect('masuk');
            }
        } elseif ($email == 'admin@gmail.com') {
            if ($ks == 'admin1234') {
                $data = [
                    'email' => 'admin@gmail.com',
                    'jenis' => 'admin'
                ];
                $this->session->set_userdata($data);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Kata Sandi Admin Salah!  </div>');
                redirect('masuk');
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
