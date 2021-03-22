<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class user extends CI_Model
{
	public function __construct()
	{
		parent::__construct(); 
		$this->load->database(); 
    }

    public function validate()
    {
        $arr['email'] = $this->input->post('email');
		$arr['password'] = md5($this->input->post('password'));
        return $this->db->get_where('users_table',$arr)->row();
    }
	
}