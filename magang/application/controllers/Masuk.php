<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            $jenis = $this->session->userdata('jenis');

            if ($jenis == 'peserta') {
                redirect('peserta/laporan');
            } elseif ($jenis == 'pegawai') {
                redirect('pegawai/penugasan');
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
        $user = $this->Model_masuk->getem($email, 'data_pegawai', 'email');
        $user2 = $this->Model_masuk->getem($email, 'peserta_magang', 'email_pm');
        $id_pm = $user2['id_pm'];
        $ket = ['id_pm' => $id_pm];

        if ($user) {
            if ($user['password'] == $ks) {
                $data = [
                    'email' => $user['email'],
                    'jenis' => 'pegawai'
                ];
                $this->session->set_userdata($data);
                redirect('pegawai/penugasan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" >Kata Sandi Salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
                redirect('masuk');
            }
        } elseif ($user2) {
            if (password_verify($ks, $user2['kata_sandi_pm'])) {
                if ($user2['status_pm'] == 'berlangsung') {
                    if (time() > strtotime($user2['tgl_sls_pm'])) {
                        $data = [
                            'status_pm' => 'selesai',
                        ];
                        $this->Model_peserta->updata('peserta_magang', $data, $ket);
                        $getdetail = $this->Model_peserta->getdet('laporan_akhir', $ket)->row();
                        if (!$getdetail) {
                            redirect('tambah_lap_akhir/tambah/' . $id_pm);
                        } else {
                            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Masa magang telah selesai! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button> </div>');
                            redirect('masuk');
                        }
                    } else {
                        $data = [
                            'email' => $user2['email_pm'],
                            'jenis' => 'peserta'
                        ];
                        $this->session->set_userdata($data);
                        redirect('peserta/laporan');
                    }
                } else {
                    $getdetail = $this->Model_peserta->getdet('laporan_akhir', $ket)->row();
                    if (!$getdetail) {
                        redirect('tambah_lap_akhir/tambah/' . $id_pm);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Masa magang telah selesai! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                        redirect('masuk');
                    }
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Kata sandi salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
                redirect('masuk');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Akun tidak terdaftar! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
            redirect('masuk');
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('jenis');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil keluar! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> </div>');
        redirect('masuk');
    }
}

//cek keberlangsungan user
            // if ($user2['status_pm'] == 'berlangsung') {
            //     if (time() > strtotime($user2['tgl_sls_pm'])) {
            //         $data = [
            //             'status_pm' => 'selesai',
            //         ];
            //         $this->Model_peserta->updata('peserta_magang', $data, $ket);
            //         $getdetail = $this->Model_peserta->getdet('laporan_akhir', $ket)->row();
            //         if (!$getdetail) {
            //             redirect('tambah_lap_akhir/tambah/' . $id_pm);
            //         } else {
            //             $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Masa magang sudah selesai! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //             <span aria-hidden="true">&times;</span>
            //           </button> </div>');
            //             redirect('masuk');
            //         }
            //     } else {
            //         //cek password
            //         if (password_verify($ks, $user2['kata_sandi_pm'])) {
            //             $data = [
            //                 'email' => $user2['email_pm'],
            //                 'jenis' => 'peserta'
            //             ];
            //             $this->session->set_userdata($data);
            //             redirect('peserta/laporan');
            //         } else {
            //             $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Kata sandi salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //             <span aria-hidden="true">&times;</span>
            //           </button> </div>');
            //             redirect('masuk');
            //         }
            //     }
            // } else {
            //     $getdetail = $this->Model_peserta->getdet('laporan_akhir', $ket)->row();
            //     if (!$getdetail) {
            //         redirect('tambah_lap_akhir/tambah/' . $id_pm);
            //     } else {
            //         $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Masa magangtelah selesai! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //         <span aria-hidden="true">&times;</span>
            //       </button> </div>');
            //         redirect('masuk');
            //     }
            // }
