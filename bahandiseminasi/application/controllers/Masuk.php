<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->Model('Masuk_m');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
                redirect('satuan');
            }
        
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Kata Sandi', 'required');
        if ($this->form_validation->run() == false) { //kl form validasi gagal
            $data['title'] = "Bahan Diseminasi | Masuk";
            $this->load->view('v_masuk', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->Masuk_m->getemail($email, 'data_pegawai', 'email');

        if ($user) {
            if ($user['password'] == $password) {
                $data = [
                    'email' => $user['email'],
                    'jenis' => 'pegawai'
                ];
                $this->session->set_userdata($data);
                redirect('satuan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Kata Sandi Salah!</div>');
                redirect('masuk');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Akun Tidak Terdaftar!</div>');
            redirect('masuk');
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Berhasil keluar!</div>');
        redirect('masuk');
    }

}
