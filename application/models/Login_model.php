<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

     function __construct(){
          parent::__construct();
     }

     function authenticate($usr, $pwd){
          $sql = "select * from admin where username = '".$usr."' and password = '".$pwd."'";
          $query = $this->db->query($sql);
          if ($query->num_rows()==0){
          	return 0;
          }else{
          	$record=$query->row();
          	return $record;
          }
     }
} 