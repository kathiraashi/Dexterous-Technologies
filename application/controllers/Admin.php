<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->model('login_model'); 
    $this->load->model('common_model'); 	
  
    if($this->session->userdata('user_id') =="") {
      echo '<script>window.location.href="'.base_url().'index.php/Login"</script>';
    }
}


public function index(){
		redirect('Login');
}





// ---------------------------------------------- Product Brand  --------------------------------------------
public function Product_Brand() {
    $data['product_brands'] = $this->common_model->select('*','product_brands');
    $msg = $this->session->tempdata('item');
      if ($msg != "" && $msg == "Success") {
         $data['icon'] = "fa-check";
         $data['type'] = "alert-success";
         $data['msg'] = "New Brand Successfully Added";   
      }
      if ($msg != "" && $msg == "Update") {
         $data['icon'] = "fa-check";
         $data['type'] = "alert-success";
         $data['msg'] = "Brand Details Successfully Updated";
      }
      if ($msg != "" && $msg == "Delete") {
         $data['icon'] = "fa-check";
         $data['type'] = "alert-success";
         $data['msg'] = "Brand Details Successfully Deleted";  
      }
  $this->load->view('admin/Product_Brand',$data);
}
public function Get_Brand_List() {
    $data=$this->common_model->select('*','product_brands' ,array());
    $result=array();
    $result['data']= $data;
    echo json_encode($result);
}
public function Add_Brand() {
    extract($_REQUEST);
    $values=array(
              'User_Id' => $this->session->userdata('user_id'),
              'Name' => $Name,
              'Short_Order' => $ShortOrder,
              'Created_Date' => date('Y-m-d H:i:s'),
              'Updated_Date' => date('Y-m-d H:i:s')
            );
    $result = $this->common_model->insert('product_brands',$values);
    $this->session->set_tempdata('item','Success',5); 
    redirect("/Admin/Product_Brand");
}
public function Brand_Info_Get() {
    $data=$this->common_model->select('*','product_brands' ,array('id'=>$_POST['id']));
    $result=array();
    $result['data']= $data;
    echo json_encode($result);
}
public function Brand_Update($id) {
    $session_data = $this->session->all_userdata();
    extract($_REQUEST); 
    $where = array('id' => $id);
    $values=array(
        'User_Id' => $this->session->userdata('user_id'),
        'Name' => $Name,
        'Short_Order' => $ShortOrder,
        'Updated_Date' => date('Y-m-d H:i:s')
    );
    $result = $this->common_model->update('product_brands',$values,$where);
    $this->session->set_tempdata('item','Update',5); 
    redirect("/Admin/Product_Brand");
}
public function Delete_Brand($id) {
    $this->common_model->delete_rows('product_brands',array('id'=> $id));
    $this->session->set_tempdata('item','Delete',5); 
    redirect("/Admin/Product_Brand");
}
// ---------------------------------------------- Product Category  --------------------------------------------
public function Product_Category() {
  $data['product_category'] = $this->common_model->select('*','product_category');
  $data['product_brands'] = $this->common_model->select('*','product_brands');
  $msg = $this->session->tempdata('item');
    if ($msg != "" && $msg == "Success") {
       $data['icon'] = "fa-check";
       $data['type'] = "alert-success";
       $data['msg'] = "New Product Category Successfully Added";   
    }
    if ($msg != "" && $msg == "Update") {
       $data['icon'] = "fa-check";
       $data['type'] = "alert-success";
       $data['msg'] = "Product Category Details Successfully Updated";
    }
    if ($msg != "" && $msg == "Delete") {
       $data['icon'] = "fa-check";
       $data['type'] = "alert-success";
       $data['msg'] = "Product Category Details Successfully Deleted";  
    }
  $this->load->view('admin/Product_Category',$data);
}
public function Get_Category_List() {
  $data=$this->common_model->select('*','product_category' ,array());
  $result=array();
  $result['data']= $data;
  echo json_encode($result);
}
public function Filter_Category_List() {
  $data=$this->common_model->select('*','product_category' ,array('Brand_Id'=>$_POST['id'] ));
  $result=array();
  $result['data']= $data;
  echo json_encode($result);
}
public function Add_Category() {
  extract($_REQUEST);
  $BrandData = $this->common_model->select('*','product_brands' ,array('id'=>$SelectBrand ));
  $values=array(
            'User_Id' => $this->session->userdata('user_id'),
            'Name' => $Name,
            'Short_Order' => $ShortOrder,
            'Brand_Id' => $SelectBrand,
            'Brand_Name' => get_object_vars($BrandData[0])['Name'],
            'Created_Date' => date('Y-m-d H:i:s'),
            'Updated_Date' => date('Y-m-d H:i:s')
          );
  $result = $this->common_model->insert('product_category',$values);
  $this->session->set_tempdata('item','Success',5); 
  redirect("/Admin/Product_Category");
}
public function Category_Info_Get() {
  $data=$this->common_model->select('*','product_category' ,array('id'=>$_POST['id']));
  $result=array();
  $result['data']= $data;
  echo json_encode($result);
}
public function Category_Update($id) {
  $session_data = $this->session->all_userdata();
  extract($_REQUEST); 
  $BrandData = $this->common_model->select('*','product_brands' ,array('id'=>$SelectBrand ));
  $where = array('id' => $id);
    $values=array(
      'User_Id' => $this->session->userdata('user_id'),
      'Name' => $Name,
      'Short_Order' => $ShortOrder,
      'Brand_Id' => $SelectBrand,
      'Brand_Name' => get_object_vars($BrandData[0])['Name'],
      'Updated_Date' => date('Y-m-d H:i:s')
    );
  $result = $this->common_model->update('product_category',$values,$where);
  $this->session->set_tempdata('item','Update',5); 
  redirect("/Admin/Product_Category");
}
public function Delete_Category($id) {
  $this->common_model->delete_rows('product_category',array('id'=> $id));
  $this->session->set_tempdata('item','Delete',5); 
  redirect("/Admin/Product_Category");
}
// ---------------------------------------------- Product List  --------------------------------------------
public function Product_List() {
  $data['products'] = $this->common_model->select('*','products');
  $msg = $this->session->tempdata('item');
    if ($msg != "" && $msg == "Success") {
       $data['icon'] = "fa-check";
       $data['type'] = "alert-success";
       $data['msg'] = "New Product Successfully Added";   
    }
    if ($msg != "" && $msg == "Update") {
       $data['icon'] = "fa-check";
       $data['type'] = "alert-success";
       $data['msg'] = "Product Details Successfully Updated";
    }
    if ($msg != "" && $msg == "Delete") {
       $data['icon'] = "fa-check";
       $data['type'] = "alert-success";
       $data['msg'] = "Product Details Successfully Deleted";  
    }
  $this->load->view('admin/Product_List',$data);
}
public function Delete_Product($id){
  $this->common_model->delete_rows('products',array('id'=> $id));
  $this->session->set_tempdata('item','Delete',5); 
  redirect("/Admin/Product_List");
}
// ---------------------------------------------- Product Add  --------------------------------------------
public function Product_Add() {
  $data['product_brands'] = $this->common_model->select('*','product_brands');
  $this->load->view('admin/Product_Add',$data);
}
public function Get_Product_List() {
  $data=$this->common_model->select('*','products');
  $result=array();
  $result['data']= $data;
  echo json_encode($result);
}
public function Product_Submit() {
  extract($_REQUEST);
  $target_dir = "./assets/Uploads/Images/";
  $image_name= "product_".date("h-i-s").basename($_FILES["image"]["name"]);
  $target_image = $target_dir.$image_name;     
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_image)) {
    $BrandData = $this->common_model->select('*','product_brands' ,array('id'=>$SelectBrand ));
    $CategoryData = $this->common_model->select('*','product_category' ,array('id'=>$SelectCategory ));
    $values=array(
              'User_Id' => $this->session->userdata('user_id'),
              'Name' => $Name,
              'Short_Order' => $ShortOrder,
              'Brand_Id' => $SelectBrand,
              'Brand_Name' =>  get_object_vars($BrandData[0])['Name'],
              'Category_Id' => $SelectCategory,
              'Category_Name' => get_object_vars($CategoryData[0])['Name'],
              'Detail'=>$Details,
              'Specifications'=>$Specifications,
              'Technical'=>$Technical,
              'Image'=>$image_name,
              'Created_Date' => date('Y-m-d H:i:s'),
              'Updated_Date' => date('Y-m-d H:i:s')
            );
    $result = $this->common_model->insert('products',$values);
    $this->session->set_tempdata('item','Success',5); 
    redirect("/Admin/Product_List");
  }
}
// ---------------------------------------------- Product Update  --------------------------------------------
public function Product_Update($id) {
  $data['product_brands'] = $this->common_model->select('*','product_brands');
  $data['product_categories'] = $this->common_model->select('*','product_category');
  $data['products'] =$this->common_model->select('*','products' ,array('id'=>$id));
  $this->load->view('admin/Product_Update',$data);
}
public function Update_Product($id) {
  $session_data = $this->session->all_userdata();
  extract($_REQUEST);
  $where = array('id' => $id);
  $target_dir = "./assets/Uploads/Images/";
  $image_name = $OldImage;
  if($_FILES["image"]["name"] !== '') {
    $image_name= "product_".date("h-i-s").basename($_FILES["image"]["name"]);
    $target_image = $target_dir.$image_name;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_image);
  }   
    $BrandData = $this->common_model->select('*','product_brands' ,array('id'=>$SelectBrand ));
    $CategoryData = $this->common_model->select('*','product_category' ,array('id'=>$SelectCategory ));
    $values=array(
              'User_Id' => $this->session->userdata('user_id'),
              'Name' => $Name,
              'Short_Order' => $ShortOrder,
              'Brand_Id' => $SelectBrand,
              'Brand_Name' =>  get_object_vars($BrandData[0])['Name'],
              'Category_Id' => $SelectCategory,
              'Category_Name' => get_object_vars($CategoryData[0])['Name'],
              'Detail'=>$Details,
              'Specifications'=>$Specifications,
              'Technical'=>$Technical,
              'Image'=>$image_name,
              'Updated_Date' => date('Y-m-d H:i:s')
            );
  $result = $this->common_model->update('products',$values,$where);
  $this->session->set_tempdata('item','Update',5); 
  redirect("/Admin/Product_List");
}
// ---------------------------------------------- AboutUs Who_We_Are  --------------------------------------------
public function Who_We_Are() {
  $data['WhoWeAre'] = $this->common_model->select('*','who_we_are');
  $msg = $this->session->tempdata('item');
  if ($msg != "" && $msg == "Update") {
     $data['icon'] = "fa-check";
     $data['type'] = "alert-success";
     $data['msg'] = " Who We Are, Details Successfully Updated";
  }
  $this->load->view('admin/Who_We_Are',$data);
}
public function Who_We_Are_Update($id) {
  $session_data = $this->session->all_userdata();
  extract($_REQUEST);
  $where = array('id' => $id);
  $values=array(
            'User_Id' => $this->session->userdata('user_id'),
            'Text' => $WhoWeAre,
            'Updated_Date' => date('Y-m-d H:i:s')
          );
  $result = $this->common_model->update('who_we_are',$values,$where);
  $this->session->set_tempdata('item','Update',5); 
  redirect("/Admin/Who_We_Are");
}
// ---------------------------------------------- AboutUs Why_Choose_Us  --------------------------------------------
public function Why_Choose_Us() {
  $data['WhyChooseUs'] = $this->common_model->select('*','why_choose_us');
  $msg = $this->session->tempdata('item');
  if ($msg != "" && $msg == "Update") {
     $data['icon'] = "fa-check";
     $data['type'] = "alert-success";
     $data['msg'] = " Why Choose Us, Details Successfully Updated";
  }
  $this->load->view('admin/Why_Choose_Us',$data);
}
public function Why_Choose_Us_Update($id) {
  $session_data = $this->session->all_userdata();
  extract($_REQUEST);
  $where = array('id' => $id);
  $values=array(
            'User_Id' => $this->session->userdata('user_id'),
            'Title_1' => $Title_1,
            'Text_1' => $Text_1,
            'Title_2' => $Title_2,
            'Text_2' => $Text_2,
            'Title_3' => $Title_3,
            'Text_3' => $Text_3,
            'Title_4' => $Title_4,
            'Text_4' => $Text_4,
            'Updated_Date' => date('Y-m-d H:i:s')
          );
  $result = $this->common_model->update('why_choose_us',$values,$where);
  $this->session->set_tempdata('item','Update',5); 
  redirect("/Admin/Why_Choose_Us");
}
// ---------------------------------------------- AboutUs Achievements  --------------------------------------------
public function Achievements() {
  $data['Achievements'] = $this->common_model->select('*','achievements');
  $msg = $this->session->tempdata('item');
  if ($msg != "" && $msg == "Update") {
     $data['icon'] = "fa-check";
     $data['type'] = "alert-success";
     $data['msg'] = " Achievement Details Successfully Updated";
  }
  $this->load->view('admin/Achievements',$data);
}
public function Achievements_Update($id) {
  $session_data = $this->session->all_userdata();
  extract($_REQUEST);
  $where = array('id' => $id);
  $values=array(
            'User_Id' => $this->session->userdata('user_id'),
            'NoOfClients' => $NoOfClients,
            'ProjectDone' => $ProjectDone,
            'MachineSold' => $MachineSold,
            'AwardsWon' => $AwardsWon,
            'Updated_Date' => date('Y-m-d H:i:s')
          );
  $result = $this->common_model->update('achievements',$values,$where);
  $this->session->set_tempdata('item','Update',5); 
  redirect("/Admin/Achievements");
}
// ---------------------------------------------- AboutUs Our_Partners  --------------------------------------------
public function Our_Partners() {
  $data['OurPartners'] = $this->common_model->select('*','our_partners');
  $msg = $this->session->tempdata('item');
  if ($msg != "" && $msg == "Update") {
     $data['icon'] = "fa-check";
     $data['type'] = "alert-success";
     $data['msg'] = " Partners Details Successfully Updated";
  }
  $this->load->view('admin/Our_Partners',$data);
}
public function Our_Partners_Update($id) {
  $session_data = $this->session->all_userdata();
  extract($_REQUEST);

  $this->db->empty_table('our_partners');
  $target_dir = "./assets/Uploads/Images/";
  foreach ($_FILES["logo_img"]["name"] as $key => $logo_img) {
                
    if ($_FILES["logo_img"]["name"][$key] != "") {
       $image_name= "OurPartners_".date("h-i-s").basename($_FILES["logo_img"]["name"][$key]); 
       $target_file = $target_dir .$image_name;
    if (move_uploaded_file($_FILES["logo_img"]["tmp_name"][$key] , $target_file)) { 
       $value1 =array('User_Id' => $this->session->userdata('user_id'),
                      'Image'=> $image_name,
                      'Updated_Date' => date('Y-m-d H:i:s'));
       $result1 = $this->common_model->insert('our_partners',$value1);
      }   
    }
 }

 foreach ($logo_img_empty as $key1 => $img_empty) {
   if ($logo_img_empty[$key1] != "") {
     $value2 =array('User_Id' => $this->session->userdata('user_id'),
                    'Image'=> $logo_img_empty[$key1],
                    'Updated_Date' => date('Y-m-d H:i:s'));
     $result2 = $this->common_model->insert('our_partners',$value2);
   }
 }
  $this->session->set_tempdata('item','Update',5); 
  redirect("/Admin/Our_Partners");
}
// ---------------------------------------------- Events  --------------------------------------------
public function Events() {
  $data['events'] = $this->common_model->select('*','events');
  $msg = $this->session->tempdata('item');
  if ($msg != "" && $msg == "Update") {
     $data['icon'] = "fa-check";
     $data['type'] = "alert-success";
     $data['msg'] = " Partners Details Successfully Updated";
  }
  $this->load->view('admin/Events',$data);
}
public function Events_Update($id) {
  $session_data = $this->session->all_userdata();
  extract($_REQUEST);
  $where = array('id' => $id);
  $image_name = $OldImage;
  if($_FILES["image"]["name"] !== ''){
    $target_dir = "./assets/Uploads/Images/";
    $image_name= "Events_".date("h-i-s").basename($_FILES["image"]["name"]);
    $target_file = $target_dir .$image_name;
    move_uploaded_file($_FILES["image"]["tmp_name"] , $target_file);
  }
  if(isset($Status)){
    $Event_Status = 'Active';
  }else{
    $Event_Status = 'Inactive';
  }
  $values=array(
      'User_Id' => $this->session->userdata('user_id'),
      'Event_Name' => $Title,
      'Image' => $image_name,
      'Topics' => implode("///",$Event_Topic),
      'Event_Details' =>  $Details,
      'Start_Date' => $Start_Date,
      'Start_Time' => $Start_Time,
      'End_Date'=>$End_Date,
      'End_Time'=>$End_Time,
      'Address'=> nl2br($Address),
      'Location'=>$Location,
      'Mobile'=>$Mobile,
      'Email'=>$Email,
      'Status'=> $Event_Status,
      'Updated_Date' => date('Y-m-d H:i:s')
  );
  $result = $this->common_model->update('events',$values,$where);
  $this->session->set_tempdata('item','Update',5); 
  redirect("/Admin/Events");
}
// ---------------------------------------------- Resources Support  --------------------------------------------
public function Support() {
  $data['support'] = $this->common_model->select('*','support');
  $msg = $this->session->tempdata('item');
  if ($msg != "" && $msg == "Update") {
     $data['icon'] = "fa-check";
     $data['type'] = "alert-success";
     $data['msg'] = " Support, Details Successfully Updated";
  }
  $this->load->view('admin/Support',$data);
}
public function Support_Update($id) {
  $session_data = $this->session->all_userdata();
  extract($_REQUEST);
  $where = array('id' => $id);
  $values=array(
            'User_Id' => $this->session->userdata('user_id'),
            'Text' => $Support,
            'Updated_Date' => date('Y-m-d H:i:s')
          );
  $result = $this->common_model->update('support',$values,$where);
  $this->session->set_tempdata('item','Update',5); 
  redirect("/Admin/Support");
}
// ---------------------------------------------- Resources Case_Studies  --------------------------------------------
public function Case_Studies(){
  $msg = $this->session->tempdata('item');
   if ($msg != "") {
    if ($msg == "Success") {
        $data['icon'] = "fa-check";
       $data['type'] = "alert-success";
       $data['msg'] = " New Case Studies Detailes Successfully Added";
    }
    if ($msg == "Update") {
       $data['icon'] = "fa-check";
       $data['type'] = "alert-success";
       $data['msg'] = "Case Studies Detailes Successfully Updated ";
    }
    if ($msg == "Delete") {
       $data['icon'] = "fa-check";
       $data['type'] = "alert-success";
       $data['msg'] = "Case Studies Detailes Successfully Deleted ";
    }
   }

  $data['case_studies'] = $this->common_model->select('*','case_studies');
  $this->load->view('admin/Case_Studies',$data);
}
public function Add_CaseStudies(){
      extract($_REQUEST); 
            $target_dir = "./assets/Uploads/Images/";
            $target_dir_file = "./assets/Uploads/Files/";
            $file_name = "CaseStudies_".date("h-i-s").basename($_FILES["pdf"]["name"]);
            $image_name= "CaseStudies_".date("h-i-s").basename($_FILES["image"]["name"]);
            $target_file = $target_dir_file .$file_name;
            $target_image = $target_dir .$image_name;   

       move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file);

       move_uploaded_file($_FILES["image"]["tmp_name"], $target_image);
            
           $values=array( 
                        'name'=>$name,
                        'image'=>$image_name,
                        'pdf'=> $file_name,
                        'create_date'=>date('Y-m-d H:i:s')
                        );
           $result = $this->common_model->insert('case_studies',$values);

      $this->session->set_tempdata('item','Success',5); 
      redirect("/Admin/Case_Studies");  
}
public function Case_Studies_Get(){
      $data=$this->common_model->select('*','case_studies',array('id'=>$_POST['id']));
      $result=array();
      $result['data']= $data;
      echo json_encode($result);
}
public function Update_Case_Studies($id){
      extract($_REQUEST); 

      if ($_FILES["pdf"]["name"] != "") {
            $target_dir_file = "./assets/Uploads/Files/";
            $file_name = "CaseStudies_".date("h-i-s").basename($_FILES["pdf"]["name"]);
            $target_file = $target_dir_file .$file_name;
            move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file);
        }else{
          $file_name = $old_pdf;
        }
        if ($_FILES["image"]["name"] != "") {
            $target_dir = "./assets/Uploads/Images/";
            $image_name= "CaseStudies_".date("h-i-s").basename($_FILES["image"]["name"]);
            $target_image = $target_dir .$image_name;   
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_image);
        }else{
          $image_name = $old_img;
        }
          $where = array('id' => $id );
           $values=array( 
                        'name'=>$name,
                        'image'=>$image_name,
                        'pdf'=> $file_name,
                        'create_date'=>date('Y-m-d H:i:s')
                        );
           $result = $this->common_model->update('case_studies',$values,$where);

        $this->session->set_tempdata('item','Update',5); 
        redirect("/Admin/Case_Studies"); 
}
public function Delete_Case_Studies($id){
  $this->common_model->delete_rows('case_studies',array('id'=> $id));
  $this->session->set_tempdata('item','Delete',5); 
  redirect("/Admin/Case_Studies");
}
// ---------------------------------------------- Clients  --------------------------------------------
public function Clients() {
  $data['clients'] = $this->common_model->select('*','clients');
  $msg = $this->session->tempdata('item');
  if ($msg != "" && $msg == "Update") {
     $data['icon'] = "fa-check";
     $data['type'] = "alert-success";
     $data['msg'] = "Clients Successfully Updated";
  }
  $this->load->view('admin/Clients',$data);
}
public function Clients_Update($id) {
  $session_data = $this->session->all_userdata();
  extract($_REQUEST);

  $this->db->empty_table('clients');
  $target_dir = "./assets/Uploads/Images/";
  foreach ($_FILES["logo_img"]["name"] as $key => $logo_img) {     
    if ($_FILES["logo_img"]["name"][$key] != "") {
       $image_name= "Clients_".date("h-i-s").basename($_FILES["logo_img"]["name"][$key]); 
       $target_file = $target_dir .$image_name;
    if (move_uploaded_file($_FILES["logo_img"]["tmp_name"][$key] , $target_file)) { 
       $value1 =array('User_Id' => $this->session->userdata('user_id'),
                      'Image'=> $image_name,
                      'Updated_Date' => date('Y-m-d H:i:s'));
       $result1 = $this->common_model->insert('clients',$value1);
      }   
    }
  }

  foreach ($logo_img_empty as $key1 => $img_empty) {
   if ($logo_img_empty[$key1] != "") {
     $value2 =array('User_Id' => $this->session->userdata('user_id'),
                    'Image'=> $logo_img_empty[$key1],
                    'Updated_Date' => date('Y-m-d H:i:s'));
     $result2 = $this->common_model->insert('clients',$value2);
   }
  }
  $this->session->set_tempdata('item','Update',5); 
  redirect("/Admin/Clients");
}
// ---------------------------------------------- Requests  --------------------------------------------
public function SupportEnqueries() {
  $data['supportEnqueries'] = $this->common_model->select('*','support_enquery');
  $this->load->view('admin/SupportEnqueries',$data);
}
public function SupportEnqueryGet() {
  $data=$this->common_model->select('*','support_enquery',array('id'=>$_POST['id']));
  $result=array();
  $result['data']= $data;
  echo json_encode($result);
}
public function QuoteRequests() {
  $data['quoteRequests'] = $this->common_model->select('*','product_quote');
  $this->load->view('admin/QuoteRequests',$data);
}
public function QuoteRequestGet() {
  $data=$this->common_model->select('*','product_quote',array('id'=>$_POST['id']));
  $result=array();
  $result['data']= $data;
  echo json_encode($result);
}
public function ContactInterests() {
  $data['contactInterests'] = $this->common_model->select('*','contact_interst');
  $this->load->view('admin/ContactInterests',$data);
}
public function ContactInterestGet() {
  $data=$this->common_model->select('*','contact_interst',array('id'=>$_POST['id']));
  $result=array();
  $result['data']= $data;
  echo json_encode($result);
}
// ---------------------------------------------- Slider  --------------------------------------------
public function Slider() {
  $data['sliders'] = $this->common_model->select('*','sliders');
  $msg = $this->session->tempdata('item');
  if ($msg != "" && $msg == "Success") {
    $data['icon'] = "fa-check";
    $data['type'] = "alert-success";
    $data['msg'] = "Slider Successfully Submited";
  }
  if ($msg != "" && $msg == "Update") {
     $data['icon'] = "fa-check";
     $data['type'] = "alert-success";
     $data['msg'] = "Slider Successfully Updated";
  }
  if ($msg != "" && $msg == "Deleted") {
    $data['icon'] = "fa-check";
    $data['type'] = "alert-success";
    $data['msg'] = "Slider Successfully Deleted";
  }
  $this->load->view('admin/Slider',$data);
}
public function SliderSubmit() {
  $session_data = $this->session->all_userdata();
  extract($_REQUEST);

    $target_dir = "./assets/Uploads/Images/";
    $image_name= "Slider_".date("h-i-s").basename($_FILES["slider_img"]["name"]); 
    $target_file = $target_dir .$image_name;
    if (move_uploaded_file($_FILES["slider_img"]["tmp_name"] , $target_file)) {
      $values =array( 'User_Id' => $this->session->userdata('user_id'),
                      'Text_One' => $Text_One,
                      'Text_Two' => $Text_Two,
                      'Text_Three' => $Text_Three,
                      'Image'=> $image_name,
                      'Updated_Date' => date('Y-m-d H:i:s'));
      $result = $this->common_model->insert('sliders',$values);
    }   

  $this->session->set_tempdata('item','Success',5); 
  redirect("/Admin/Slider");
}
public function SliderGet() {
  $data=$this->common_model->select('*','sliders',array('id'=>$_POST['id']));
  $result=array();
  $result['data']= $data;
  echo json_encode($result);
}
public function SliderUpdate($id) {
  $session_data = $this->session->all_userdata();
  extract($_REQUEST);
  $where = array('id' => $id);

    if( $_FILES["slider_img"]["name"] !== '' ) {
      $target_dir = "./assets/Uploads/Images/";
      $image_name = "Slider_".date("h-i-s").basename($_FILES["slider_img"]["name"]); 
      $target_file = $target_dir .$image_name;
      move_uploaded_file($_FILES["slider_img"]["tmp_name"] , $target_file);
    }else{
      $image_name = $old_Image;
    }

    $values =array( 'User_Id' => $this->session->userdata('user_id'),
                    'Text_One' => $Text_One,
                    'Text_Two' => $Text_Two,
                    'Text_Three' => $Text_Three,
                    'Image'=> $image_name,
                    'Updated_Date' => date('Y-m-d H:i:s'));
    $result = $this->common_model->update('sliders',$values,$where); 

  $this->session->set_tempdata('item','Update',5); 
  redirect("/Admin/Slider");
}
public function SliderDelete($id){
  $this->common_model->delete_rows('sliders',array('id'=> $id));
  $this->session->set_tempdata('item','Deleted',5); 
  redirect("/Admin/Slider");
}
// ---------------------------------------------- LogOut  --------------------------------------------
public function logout(){
    $this->session->unset_userdata('user_id');
    redirect('Login');
}








}
