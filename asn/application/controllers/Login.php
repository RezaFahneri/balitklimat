<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->Model('Model_login');
		if($this->session->userdata('logged_in') == true){
			redirect('dashboard','refresh');
		}
	}

	public function index()
	{
        $data['title']=" ASN Balitklimat | Login";
        $data['id_role'] = $this->db->get('data_role')->result();
        $this->load->view('Login/v_login',$data);
	}

     public function loginadmin()
	{
        $data['title']=" ASN Balitklimat | Login Admin";
        $data['id_role'] = $this->db->get('data_role')->result();
        $this->load->view('Login/v_login_admin',$data);
	}

	public function proseslogin(){
		$this->load->library('form_validation');  
           $this->form_validation->set_rules('email', 'Email', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $email = $this->input->post('email');  
               //  $password = md5($this->input->post('password'));
                $password = $this->input->post('password');
                $nip = $this->input->post('nip');  
                $this->load->Model('Model_login');  
                if($this->Model_login->bisalogin($email, $password))  
                {  
                     redirect('dashboard');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Email and Password');  
                     redirect('login');  
                }  
           }  
           else  
           {  
                //false  
                $this->index();  
           }  
	}

     public function prosesloginadmin(){
		$this->load->library('form_validation');  
           $this->form_validation->set_rules('email', 'Email', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $email = $this->input->post('email');  
               //  $password = md5($this->input->post('password'));
                $password = $this->input->post('password');
                $nip = $this->input->post('nip');  
                $this->load->Model('Model_login');  
                if($this->Model_login->bisaloginadmin($email, $password))  
                {  
                     redirect('dashboard');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Email and Password');  
                     redirect('login');  
                }  
           }  
           else  
           {  
                //false  
                $this->index();  
           }  
	}
}