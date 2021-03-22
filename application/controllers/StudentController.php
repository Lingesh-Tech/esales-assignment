<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller 
{   
    public function __construct()
	{
        parent::__construct();
        $this->load->model('Common_model');
        if(!$this->session->userdata('user'))
            redirect('/');
	}

    public function logout()
    {  
    
        $this->session->sess_destroy();	
        redirect('/','refresh');  
    }  
	public function index()
	{
		$this->load->view('student-form');
	}

    public function student_create()
    {
        $data = array(
            
            'firstname'              => $_POST['firstname'],
            'lastname'               => $_POST['lastname'],
            'email'                  => $_POST['email'],
            'classname'              => $_POST['classname'],
            'section'                => $_POST['section'],
            'dob'                    => $_POST['dob'],
            'status'                 => $_POST['status'],
            'address'                => $_POST['address'],
            'extracurricular'        => $_POST['extracurricular']
           
        );

        //  print_r($data);die();
        $this->db->insert('student_table',$data);

        echo "<script> alert('Student data has been stored successfully') </script>";

        redirect('student-form','refresh');
    }

    public function student_edit($id)
    {   
        $table="student_table";
        $data['student'] = $this->Common_model->getById($table,$id);
        $this->load->view('student-update',$data,$id);
    }

    // public function student_update()
    // {
    //     $table = "student_table";
    //     $this->Common_model->insert_records($table,$data);
    // }
    public function student_update($id)
    {
        $data = array(
            
            'firstname'              => $_POST['firstname'],
            'lastname'               => $_POST['lastname'],
            'email'                  => $_POST['email'],
            'classname'              => $_POST['classname'],
            'section'                => $_POST['section'],
            'dob'                    => $_POST['dob'],
            'status'                 => $_POST['status'],
            'address'                => $_POST['address'],
            'extracurricular'        => $_POST['extracurricular']
           
        );

        $table="student_table";
        $this->load->model('Common_model');
        $this->Common_model->updatedata($table,$id,$data);
        $this->session->set_flashdata('success','updated successfully');
        $this->load->view('student-update',$id,$data);

    }

    public function student_delete($id)
    {
        $table='student_table';
        $this->load->model('Common_model');
        $this->Common_model->deletedata($table,$id);
        redirect('student-details','refresh');
        
    }

    public function student_details()
    {
        $this->load->model('Common_model');
        
        $table='student_table';
        $data['students']  = $this->Common_model->select_table($table);
        
        $this->load->view('student-details',$data);
    }

}
