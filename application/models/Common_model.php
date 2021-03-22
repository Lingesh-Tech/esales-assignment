<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Common_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct(); 
		$this->load->database(); 
    }

	public function select_table($table)  
    {  
		//data is retrive from this query  
		$this->db->select("*");
		$this->db->from($table);
		$query=$this->db->get();
		return $query->result_array(); 
	}  

	public function getById($table,$id)
	{
		return $this->db->get_where($table,array('id' => $id));
	}


	public function insert_records($table,$data)
	{
		$this->db->insert($table, $data);
	}

	public function updatedata($table,$id,$data)
	{
			// print_r($data);die();
			$this->db->set($data);
			$this->db->where('id', $id);
			$this->db->update($table);
		
    }
	

	public function deletedata($table,$id)
	{
		$this->db->query("delete from $table where id='".$id."'");
	}


	public function searchdata($data,$table)
	{
		$this->db->query("select $data from  $table");
	}
	

}