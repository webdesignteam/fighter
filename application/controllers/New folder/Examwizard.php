<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examwizard extends CI_Controller 
{
   function __construct()
    {
        // Construct the parent class
        parent::__construct();
      //   $this->load->model('v1/User_model','User_model');
        // $this->load->model('v1/CRUD','CRUD');
			//$this->load->model('CRUD');
    }

	
		public function index()
	{
		$this->load->view('Admin/Exam-Wizard-Plugin/exam_wizard.html');		
		
	}
	
	
	
	
	
	
	
	
	
}
