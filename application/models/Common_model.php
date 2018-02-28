<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class common_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	
	function count_rows($columns,$table,$where=null){	
		if($where!=null) 
			return $this->db->where($where)->count_all_results($table);
		else 
			return $this->db->count_all_results($table);	
	}	
	function select($columns,$table,$where=null){	
		if($where!=null) 
			$this->db->select($columns)->from($table)->where($where);
		else 
			$this->db->select($columns)->from($table);		
		$query = $this->db->get();					
		return $query->result();		
	}
	function select_limit($columns,$table,$where=null,$limit=null){	
		if($where!=null) 
			$this->db->select($columns)->from($table)->where($where)->limit($limit);
		else 
			$this->db->select($columns)->from($table);		
		$query = $this->db->get();					
		return $query->result();		
	}
	function select_advance($columns,$table,$where=null,$limit=null,$order=null){	
		if($where!=null) 
			$this->db->select($columns)->from($table)->where($where);
		else 
			$this->db->select($columns)->from($table);		
		$query = $this->db->get();					
		return $query->result();		
	}
	function select_join($columns,$table,$where=null){	
		if($where!=null) 
			$this->db->select($columns)->from($table)->where($where);
		else 
			$this->db->select($columns)->from($table);		
		$query = $this->db->get();					
		return $query->result();		
	}
	function insert($table,$values){	
		$this->db->insert($table,$values);	
		return $this->db->insert_id();
	}
	function update($table,$values,$where){	
		$this->db->where($where);
		$this->db->update($table,$values);	
		return true;
	}
	function delete_rows($table,$where){	
		$this->db->where($where);
		$this->db->delete($table);
		return true;	
	}	
}