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
               redirect('dashboard', 'refresh');
          }
     }

     public function index()
     {
          $data['title'] = "PERJADIN BALITKLIMAT | Login";
          $this->load->view('Login/v_login', $data);
     }
     public function proseslogin()
     {
          $this->load->library('form_validation');
          $this->form_validation->set_rules('email', 'Email', 'required');
          $this->form_validation->set_rules('password', 'Password', 'required');
          if ($this->form_validation->run()) {
               $email = $this->input->post('email');
               $password = $this->input->post('password');
               $this->load->Model('Model_login');
               if ($this->Model_login->bisalogin($email, $password)) {
                    redirect('dashboard');
               } else {
                    $this->session->set_flashdata('error', 'Invalid Email and Password');
                    redirect('login');
               }
          } else {
               //false  
               $this->index();
          }
     }
}
