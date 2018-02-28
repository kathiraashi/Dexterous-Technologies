<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

		public function __construct(){
          parent::__construct();
          $this->load->library('curl'); 
		      $this->load->library('session');
          $this->load->model('common_model'); 	

    }

	public function index()
	{
		$this->load->view('index');
	}
  public function about()
  { 
    $this->load->view('about');
  }
  public function products()
  { 
    $this->load->view('products');
  }
  public function services()
  { 
    $this->load->view('services');
  }
  public function events()
  {
    $this->load->view('events');
  }
  public function case_studies()
  {
    $this->load->view('case_studies');
  }
  public function clients()
  { 
    $this->load->view('clients');
  }
  public function contact()
  {
    $this->load->view('contact');
  }


}
