<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		public function __construct(){
          parent::__construct();
		  $this->load->library('session');
          $this->load->model('login_model'); 
          
       
		  if($this->session->userdata("user_id")!="") {
			   echo '<script>window.location.href="'.base_url().'index.php/Admin/Product_Brand"</script>';
		  }

		

    }


	public function index()
	{
		  $username = $this->input->post("username");
          $password = $this->input->post("password");
		  
          $this->form_validation->set_rules("username", "Username", "trim|required");
          $this->form_validation->set_rules("password", "Password", "trim|required");
		  
          if ($this->form_validation->run() == FALSE){
               $this->load->view('admin/login');
          }
          else {
			  $usr_result = $this->login_model->authenticate($username, $password);
			  if ($usr_result->id != 0) { 
				   $sessiondata = array('user_id' => $usr_result->id,'username' => $usr_result->username);
				  $this->session->set_userdata($sessiondata);

                  redirect("Admin/Product_Brand");
			  }
			  else {
                  redirect('Login');
			  }
		 }  
	}












}
