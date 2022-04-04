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
            } elseif ($jenis == 'adminmagang') {
                redirect('admin/penugasan');
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

        if ($user) {
            $nip = $user['nip'];
            $nama = $user['nama_pegawai'];
            $ket = ['nip' => $nip, 'role' => 'Admin Laporan Magang'];
            $getrole = $this->Model_masuk->getdet('detail_role', $ket)->row();
            if ($getrole) {
                if ($user['password'] == $ks) {
                    $data = [
                        'email' => $user['email'],
                        'jenis' => 'adminmagang'
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/penugasan');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" >Kata Sandi Salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                    redirect('masuk');
                }
            } else {
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
            }
        } elseif ($user2) {
            $id_pm = $user2['id_pm'];
            $ket = ['id_pm' => $id_pm];
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
                } elseif ($user2['status_pm'] == 'none') {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Akun belum aktivasi! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
                    redirect('masuk');
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

    public function lupa_sandi()
    {
        $data['title'] = 'Magang Balitklimat | Lupa Sandi';
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        if ($this->form_validation->run() == false) { //kl form validasi gagal
            $this->load->view('templates/header', $data);
            $this->load->view('v_lupa_sandi', $data);
        } else {
            $email = $this->input->post('email');
            $getdetail = $this->Model_masuk->getem($email, 'peserta_magang', 'email_pm');
            // var_dump($getdetail);
            if ($getdetail) {
                if ($getdetail['status_pm'] == 'berlangsung') {
                    $token = base64_encode(random_bytes(32));
                    $data = [
                        'token' => $token,
                        'waktu' => time(),
                        'id_pm' => $getdetail['id_pm']
                    ];
                    $this->Model_masuk->insert_data($data, 'magang_token');
                    $this->load->library('phpmailer_lib');
                    $mail = $this->phpmailer_lib->load();
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'magang.balitklimat@gmail.com';
                    $mail->Password   = 'Asdfghjkl;1234';
                    $mail->Port       = 587;
                    $mail->setFrom('magang.balitklimat@gmail.com', 'MAGANG BALAI PENELITIAN AGAROKLIMAT DAN HIDROLOGI');
                    $mail->addAddress($email, $getdetail['nama_pm']);
                    $mail->addReplyTo('magang.balitklimat@gmail.com', 'MAGANG BALAI PENELITIAN AGROKLIMAT DAN HIDROLOGI');
                    $mail->isHTML(true);
                    $mail->Subject = 'PERBARUI KATA SANDI';
                    $mail->Body    = 'Perbarui kata sandi anda melalui tautan berikut <a href="' . base_url() . 'masuk/perbarui_sandi?email=' . $email . '&token=' . urlencode($token) . '">Perbarui</a> ';
                    if ($mail->send()) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Periksa email anda untuk memperbaru kata sandi! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                        redirect('masuk/lupa_sandi');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal dikirim! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
                        redirect('masuk/lupa_sandi');
                    }
                } elseif ($getdetail['status_pm'] == 'selesai') {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Masa magang telah selesai! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                    redirect('masuk/lupa_sandi');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Akun belum aktif! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                    redirect('masuk/lupa_sandi');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Akun peserta tidak terdaftar! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
                redirect('masuk/lupa_sandi');
            }
        }
    }
    public function perbarui_sandi()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $getdetail = $this->Model_masuk->getem($email, 'peserta_magang', 'email_pm');
        if ($getdetail) {
            // var_dump($getdetail);
            $gettoken = $this->Model_masuk->getdet('magang_token', ['token' => $token])->row();
            if ($gettoken) {
                $this->session->set_userdata('perbarui_sandi', $token);
                $this->ubah_sandi();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Token untuk perbarui sandi salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
                redirect('masuk');
            }
            // var_dump($gettoken);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Email untuk perbarui sandi salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
            redirect('masuk');
        }
    }
    public function ubah_sandi()
    {
        if (!$this->session->userdata('perbarui_sandi')) {
            redirect('masuk');
        }
        $data['title'] = 'Magang Balitklimat | Ubah Sandi';
        $this->form_validation->set_rules('ks1', 'Kata Sandi', 'required|trim|min_length[8]|matches[ks2]', [
            'matches' => 'Kata sandi tidak sama',
            'min_length' => 'Kata sandi terlalu pendek'
        ]);
        $this->form_validation->set_rules('ks2', 'Ulangi Kata Sandi', 'required|trim|matches[ks1]');
        if ($this->form_validation->run() == false) { //kl form validasi gagal
            $this->load->view('templates/header', $data);
            $this->load->view('v_ubah_sandi', $data);
        } else {
            // $ks = $this->input->post('ks1');
            $token = $this->session->userdata('perbarui_sandi');
            $getdetail = $this->Model_masuk->getem($token, 'magang_token', 'token');
            $ket = ['id_pm' => $getdetail['id_pm']];
            $ket2 = ['id_magang_token' => $getdetail['id_magang_token']];
            $data = [
                'kata_sandi_pm' => password_hash($this->input->post('ks1'), PASSWORD_DEFAULT),
            ];
            // var_dump($getdetail, $ket, $ket2);
            $this->Model_peserta->updata('peserta_magang', $data, $ket);
            $this->Model_daftar->hapus('magang_token', $ket2);
            $this->session->unset_userdata('perbarui_sandi');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Kata sandi berhasil diubah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
            redirect('masuk');
        }
    }

    // private function _lupa_sandi_aksi()
    // {
    // }
}
