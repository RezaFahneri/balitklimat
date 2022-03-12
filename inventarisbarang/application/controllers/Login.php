<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->Model('Model_login');
          // 	// // if($this->Login_Model->accountCheck() == true){
          // 	// // 	redirect('setup');
          // 	// // }
          // 	// // if($this->session->userdata('logged_in') == true){
          // 	// // 	redirect('welcome');
          // 	// // }
          if ($this->session->userdata('logged_in') == true) {
               redirect('dashboard', 'refresh');
          }
     }

     public function index()
     {
          $data['title'] = "Login | Balitklimat";
          $this->load->view('v_login', $data);
     }

     public function proseslogin()
     {
          // $this->load->library('form_validation');  
          //  $this->form_validation->set_rules('email', 'Email', 'required');  
          //  $this->form_validation->set_rules('password', 'Password', 'required');  
          //  if($this->form_validation->run())  
          //  {  
          //       //true  
          //       $email = $this->input->post('email');  
          //       $password = $this->input->post('password');
          //       // $status = $this->input->post('status');  
          //       //Model function  
          //       $this->load->Model('Model_login');  
          //       if($this->Model_login->bisalogin($email, $password))  
          //       {  
          //           //  $session_data = array(  
          //           //       'username'     =>     $username,
          // 			// 	  'password' => $password,
          // 			// 	  'logged_in' => true,
          // 			// 	  'status' => $status
          //           //  );  
          //           //  $this->session->set_userdata($session_data);  
          //            redirect('dashboard');  
          //       }  
          //       else  
          //       {  
          //            $this->session->set_flashdata('error', 'Invalid Email and Password');  
          //            redirect('login');  
          //       }  
          //  }  
          //  else  
          //  {  
          //       //false  
          //       $this->index();  
          //  }  

          $this->load->library('form_validation');
          $this->form_validation->set_rules('email', 'Email', 'required');
          $this->form_validation->set_rules('password', 'Password', 'required');
          if ($this->form_validation->run()) {
               //true  
               $email = $this->input->post('email');
               $password = $this->input->post('password');
               //Model function  
               $this->load->Model('Model_login');
               if ($this->Model_login->bisalogin($email, $password)) {
                    $this->session->set_flashdata('sukses', 'Login berhasil');
                    redirect('dashboard');
               } else {
                    $this->session->set_flashdata('gagal', 'Email atau Password salah!');
                    redirect('login');
               }
          } else {
               //false  
               $this->session->set_flashdata('gagal', validation_errors());
               $this->index();
          }
     }
}
