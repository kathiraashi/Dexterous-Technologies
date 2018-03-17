<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

		public function __construct(){
          parent::__construct();
          $this->load->library('curl'); 
		      $this->load->library('session');
          $this->load->model('common_model'); 	

    }


  // ---------------------------------------------- Home  --------------------------------------------
	public function index(){
    $data['Sliders'] = $this->common_model->select('*','sliders');
    $data['WhoWeAre'] = $this->common_model->select('*','who_we_are');
    $data['WhyChooseUs'] = $this->common_model->select('*','why_choose_us');
    $data['Achievements'] = $this->common_model->select('*','achievements');
    $data['OurPartners'] = $this->common_model->select('*','our_partners');
    $data['productsList'] = $this->common_model->select('*','products');
		$this->load->view('index', $data);
  }
  // ---------------------------------------------- AboutUs  --------------------------------------------
  public function about(){ 
    $data['WhoWeAre'] = $this->common_model->select('*','who_we_are');
    $data['WhyChooseUs'] = $this->common_model->select('*','why_choose_us');
    $data['Achievements'] = $this->common_model->select('*','achievements');
    $data['OurPartners'] = $this->common_model->select('*','our_partners');
    $this->load->view('about', $data);
  }
  // ---------------------------------------------- Products  --------------------------------------------
  public function products(){ 
    $id = $_GET['id'];
    $data['productDetail'] = $this->common_model->select('*','products' ,array('id'=> $id));
    $this->load->view('products', $data);
  }
  public function GetQuote() {
    extract($_REQUEST);
      
      // $productDetail = $this->common_model->select('*','products' ,array('id'=> $form_id));

      // $htmlContent = '<h2><b> Product Enquiry </b></h2>';
      // $htmlContent .= '<h4><b> Brand Name : </b> ' . get_object_vars($productDetail[0])['Brand_Name'] . '</h4>';
      // $htmlContent .= '<h4><b> Product Category: </b> ' . get_object_vars($productDetail[0])['Category_Name'] . '</h4>';
      // $htmlContent .= '<h4><b> Product Name: </b> '. get_object_vars($productDetail[0])['Name'] . '</h4>';
      // $htmlContent .= '<h4><b> Name: </b> ' . $form_name . ' </h4>';
      // $htmlContent .= '<h4><b> Email: </b> ' . $form_email . ' </h4>';
      // $htmlContent .= '<h4><b> Phone: </b> ' . $form_phone . ' </h4>';
      // $htmlContent .= '<h4><b> Message: </b> ' . $form_message . ' </h4>';

      // $config = Array(
      //     'protocol' => 'ssl',
      //     'smtp_host' => 'a2plcpnl0076.prod.iad2.secureserver.net',
      //     'smtp_port' => 465,
      //     'smtp_user' => 'kathir@aashitechno.com',
      //     'smtp_pass' => 'aashi@123',
      //     'charset'   => 'utf-8'
      // );

      // $con['mailtype'] = 'html';
      // $this->email->initialize($con);

      // $this->load->library('email', $config);
      // $this->email->set_newline("\r\n");

      // $this->email->from('kathir@aashitechno.com', 'Dexterous Technologies');
      // $this->email->to('kathiraashi@gmail.com');
      // $this->email->subject('Product Enquiry');
      // $this->email->message($htmlContent);

      $mail_status = 'Fail';
      // if($this->email->send()){
      //   $mail_status = 'Success';
      // }
      // else{
      //   $mail_status = 'Fail';
      // }

      $values=array(
        'Name' => $form_name,
        'Email' => $form_email,
        'Phone' => $form_phone,
        'Product_Id' => $form_id,
        'Message'=> $form_message,
        'Mail_Send_Status'=> $mail_status,
        'Created_Date' => date('Y-m-d H:i:s'),
        'Updated_Date' => date('Y-m-d H:i:s')
      );
    $result = $this->common_model->insert('product_quote',$values);

    $this->session->set_tempdata('item', $mail_status, 10); 
    redirect("/Index/products?id=".$form_id);

    //  
  }
  // ---------------------------------------------- Support  --------------------------------------------
  public function Support(){ 
    $data['support'] = $this->common_model->select('*','support');
    $this->load->view('support', $data);
  }
  public function SupportEnquery() {
    extract($_REQUEST);


      // $htmlContent = '<h2><b>  Support Enquery </b></h2>';
      // $htmlContent .= '<h4><b> Company Name : </b> ' . $form_company_name . ' </h4>';
      // $htmlContent .= '<h4><b> Contact Person Name : </b> ' . $form_contact_name . ' </h4>';
      // $htmlContent .= '<h4><b> Email: </b> ' . $form_email . ' </h4>';
      // $htmlContent .= '<h4><b> Phone: </b> ' . $form_phone . ' </h4>';
      // $htmlContent .= '<h4><b> Machine Model: </b> ' . $form_machine_model . ' </h4>';
      // $htmlContent .= '<h4><b> Problem Observed : </b> ' . $form_problem . ' </h4>';

      // $config = Array(
      //     'protocol' => 'ssl',
      //     'smtp_host' => 'a2plcpnl0076.prod.iad2.secureserver.net',
      //     'smtp_port' => 465,
      //     'smtp_user' => 'kathir@aashitechno.com',
      //     'smtp_pass' => 'aashi@123',
      //     'charset'   => 'utf-8'
      // );

      // $con['mailtype'] = 'html';
      // $this->email->initialize($con);

      // $this->load->library('email', $config);
      // $this->email->set_newline("\r\n");

      // $this->email->from('kathir@aashitechno.com', 'Dexterous Technologies');
      // $this->email->to('kathiraashi@gmail.com');
      // $this->email->subject('Product Support Enquery ');
      // $this->email->message($htmlContent);

      $mail_status = 'Fail';
      // if($this->email->send()){
      //   $mail_status = 'Success';
      // }
      // else{
      //   $mail_status = 'Fail';
      // }

      $values=array(
        'Company_Name' => $form_company_name,
        'Contact_Name' => $form_contact_name,
        'Email' => $form_email,
        'Phone' => $form_phone,
        'Machine_Model' => $form_machine_model,
        'Problem'=> $form_problem,
        'Mail_Send_Status'=> $mail_status,
        'Created_Date' => date('Y-m-d H:i:s'),
        'Updated_Date' => date('Y-m-d H:i:s')
      );
    $result = $this->common_model->insert('support_enquery',$values);

    $this->session->set_tempdata('item', $mail_status, 10); 
    redirect("/Index/Support");

    //  
  }
  // ---------------------------------------------- Events  --------------------------------------------
  public function events(){
    $data['events'] = $this->common_model->select('*','events');
    $this->load->view('events', $data);
  }
  // ---------------------------------------------- Case_Studies  --------------------------------------------
  public function case_studies(){
    $data['case_studies'] = $this->common_model->select('*','case_studies');
    $this->load->view('case_studies', $data);
  }
  public function Case_Studies_Download(){
    $data = $this->common_model->select('*','case_studies',array('id'=>$_POST['id']));
    $OldCount = get_object_vars($data[0])['downloads'];
    $where = array('id' => $_POST['id'] );
    $values=array( 
                  'downloads'=> $OldCount + 1,
                  'create_date'=>date('Y-m-d H:i:s')
                  );
    $result = $this->common_model->update('case_studies',$values,$where);
    $resultnew = array();
    $resultnew['data']= $data;
    echo json_encode($resultnew);
  }
  // ---------------------------------------------- Clients  --------------------------------------------
  public function clients(){ 
    $data['clients'] = $this->common_model->select('*','clients');
    $this->load->view('clients', $data);
  }
    // ---------------------------------------------- Contacts  --------------------------------------------
  public function contact(){
    $this->load->view('contact');
  }
  public function ContactInterest() {
    extract($_REQUEST);


      // $htmlContent = '<h2><b> Intereste in Discussion </b></h2>';
      // $htmlContent .= '<h4><b> Name: </b> ' . $form_name . ' </h4>';
      // $htmlContent .= '<h4><b> Email: </b> ' . $form_email . ' </h4>';
      // $htmlContent .= '<h4><b> Phone: </b> ' . $form_phone . ' </h4>';
      // $htmlContent .= '<h4><b> Subject: </b> ' . $form_subject . ' </h4>';
      // $htmlContent .= '<h4><b> Message: </b> ' . $form_message . ' </h4>';

      // $config = Array(
      //     'protocol' => 'ssl',
      //     'smtp_host' => 'a2plcpnl0076.prod.iad2.secureserver.net',
      //     'smtp_port' => 465,
      //     'smtp_user' => 'kathir@aashitechno.com',
      //     'smtp_pass' => 'aashi@123',
      //     'charset'   => 'utf-8'
      // );

      // $con['mailtype'] = 'html';
      // $this->email->initialize($con);

      // $this->load->library('email', $config);
      // $this->email->set_newline("\r\n");

      // $this->email->from('kathir@aashitechno.com', 'Dexterous Technologies');
      // $this->email->to('kathiraashi@gmail.com');
      // $this->email->subject('Intereste in Discussion');
      // $this->email->message($htmlContent);

      $mail_status = 'Fail';
      // if($this->email->send()){
      //   $mail_status = 'Success';
      // }
      // else{
      //   $mail_status = 'Fail';
      // }

      $values=array(
        'Name' => $form_name,
        'Email' => $form_email,
        'Phone' => $form_phone,
        'Subject' => $form_subject,
        'Message'=> $form_message,
        'Mail_Send_Status'=> $mail_status,
        'Created_Date' => date('Y-m-d H:i:s'),
        'Updated_Date' => date('Y-m-d H:i:s')
      );
    $result = $this->common_model->insert('contact_interst',$values);

    $this->session->set_tempdata('item', $mail_status, 10); 
    redirect("/Index/contact");

    //  
  }

}
