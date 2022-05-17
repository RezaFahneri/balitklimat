<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->Model('Model_login');
        if ($this->session->userdata('logged_in') == true) {
            redirect('beranda', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = ' ASN Balitklimat | Login';
        $data['id_role'] = $this->db->get('data_role')->result();
        $this->load->view('Login/v_login', $data);
    }

    public function loginadmin()
    {
        $data['title'] = ' ASN Balitklimat | Login Admin';
        $data['id_role'] = $this->db->get('data_role')->result();
        $this->load->view('Login/v_login_admin', $data);
    }
    // private function hash_password($password) {
    //     return password_hash($password, PASSWORD_BCRYPT);
    // }
    public function proseslogin()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            //true
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $nip = $this->input->post('nip');
            $this->load->Model('Model_login');
            if ($this->Model_login->bisalogin($email, $password)) {
                redirect('beranda');
            } else {
                $this->session->set_flashdata(
                    'error',
                    'Invalid Email and Password'
                );
                redirect('login');
            }
        } else {
            //false
            $this->index();
        }
    }
    public function prosesloginadmin()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            //true
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $nip = $this->input->post('nip');
            $this->load->Model('Model_login');
            if ($this->Model_login->bisaloginadmin($email, $password)) {
                redirect('beranda');
            } else {
                $this->session->set_flashdata('error','Invalid Email and Password');
                redirect('login');
            }
        } else {
            //false
            $this->index();
        }
    }
    public function lupapassword()
    {
        $data['title'] = ' ASN Balitklimat | Lupa Password';
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false){
            $data['title'] = ' ASN Balitklimat | Lupa Password';
            $this->load->view('Login/lupapassword', $data);
        }
        else{
            $email = $this->input->post('email');
            $user = $this->db->get_where('detail_role', ['email' => $email])->row_array();

            if($user){ 
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'tgl_dibuat' =>time()
                ];
                $this->load->library('phpmailer_lib');
                $this->db->insert('user_token', $user_token);
                $mail = $this->phpmailer_lib->load();
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'asn.balitklimat@gmail.com';
                $mail->Password   = 'portalinternalasn1';
                $mail->Port       = 587;
                $mail->setFrom('asn.balitklimat@gmail.com', 'ASN BALAI PENELITIAN AGROKLIMAT DAN HIDROLOGI');
                $mail->addAddress($this->input->post('email'));
                $mail->addReplyTo('asn.balitklimat@gmail.com', 'ASN BALAI PENELITIAN AGROKLIMAT DAN HIDROLOGI');
                $mail->isHTML(true);
                $mail->Subject = 'UBAH PASSWORD';
                $mail->Body    = 'Ubah Password anda melalui tautan berikut <a href="' . base_url() . 'login/resetpassword?email=' . $email . '&token=' . urlencode($token) . '">Perbarui Password</a> ';
                if ($mail->send()) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"
                role="alert">Silahkan cek email anda untuk reset password !</div>');
                redirect('login/lupapassword');
                }
            } else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger"
                role="alert">Email belum terdaftar !</div>');
                redirect('login/lupapassword');
            }
        }
       
    }
    public function resetPassword ()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user = $this->Model_login->user($email, 'detail_role', 'email');
        if($user){
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->ubahPassword();
            } else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" 
                role="alert"> Reset password gagal ! Token salah. </div>');
                redirect('login');
            }
        }
        else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger"
            role="alert">Reset password gagal ! Email Salah.</div>');
            redirect('login');
        }
    }
    public function ubahPassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('login');
        }
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', 
        [
            'matches' => 'Password tidak sama',
            'min_length' => 'Password minimal 8 karakter'
        ]);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');
        if($this->form_validation->run() == false){
            $data['title'] = ' ASN Balitklimat | Ubah Password';
            $this->load->view('Login/ubahpassword', $data);
        }
        else{
            $password = md5($this->input->post('password1'));
            $email = $this->session->userdata('reset_email');
            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('detail_role');
            $this->db->update('data_pegawai');
            $this->session->unset_userdata('reset_email');
            $this->session->set_flashdata('message', '<div class="alert alert-success"
            role="alert">Password sudah diperbarui ! Silahkan Login</div>');
            redirect('login');
        }
    }
}
