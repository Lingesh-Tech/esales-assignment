<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        // $this->load->model('Common_model');
        if($this->session->userdata('user'))
            redirect('student-details');
	}

    public function logout()
    {  
    
        $this->session->sess_destroy();	
        redirect('/','refresh');  
    }  

	public function index()
    {
    
        $this->load->view('login');	

    }

    public function login()
	{
		//email:leaf@gmail.com	pass:123456
        $this->load->model('user');
		$check = $this->user->validate();
        if($check)
        {
            $this->session->set_userdata('user','1');
            redirect('student-details');
        }
        else
        {
            $this->session->flashdata('Error,Sorry not a valid user');
            redirect('/','refresh');
        }
 
    }

 
    
    public function register()
    {
    //     $data = array(
    //         'name'      => $_POST['name'],
    //         'email'     => $_POST['email'],
    //         'password'  => $_POST['password']
    //     );

    //     //  print_r($data);die();
    //     $this->db->insert('users_table',$data);

    //     echo "<script type='text/javascript'>alert('User created!')</script>";

        $this->load->view('register');
    }
      
    public function resetpwd()
    {
        
        $this->load->view('reset-password');	

    }
	
}
