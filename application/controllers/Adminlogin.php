<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller 
{
   function __construct()
    {
        // Construct the parent class
        parent::__construct();
         $this->load->model('v1/User_model','User_model');
         $this->load->model('v1/CRUD','CRUD');
			//$this->load->model('CRUD');
    }

	
		public function index()
	{
	
		if ($this->input->post('submit')) 
		 {
			// 	print_r($_POST);
			//	exit
			 
		 $list=array();
		 $emsg = "";	
		 $email=trim($this->input->Post('email')," ");
		 $password=trim($this->input->Post('password')," ");
		if(!isset($email) || strlen($email)<=0)
		{
			 $emsg = $emsg . " email ";
		}		
		if(!isset($password) || strlen($password)<=0)
		{
			 $emsg = $emsg . " password ";
		}
		if($emsg != "" && strlen($emsg) > 0)
		{		
				$message = array(
                'status' => 0,   
				'message' => "Missing " . $emsg  ,              
                'result' => array()  ); 			
		}
		else
		{
						$where = array('ADMIN_EMAIL'=>$email,'ADMIN_PASSWORD'=>md5($password));
						$Admin_EXIST=$this->CRUD->GetRecordByID('admin', $where);
						if($Admin_EXIST)
						{
						
							
					$sessiondata = array(
					'ADMIN_ID'  => $Admin_EXIST[0]->ADMIN_ID,
					'ADMIN_NAME'     => $Admin_EXIST[0]->ADMIN_NAME,
					'ADMIN_EMAIL' => $Admin_EXIST[0]->ADMIN_EMAIL,
					'ADMIN_MOBILE' => $Admin_EXIST[0]->ADMIN_MOBILE,
					'ADMIN_LOGGEDIN' => true
					);

                         $this->session->set_userdata($sessiondata);
							
							$message = array(
                'status' => 1,   
				'message' => "Successfully Logged in",              
                'result' => array()  ); 
							
						}
						else
						{
							$message = array(
                'status' => 0,   
				'message' => "Invalid Admin Email Password ",              
                'result' => array()  ); 
							
						}
			
		}

						echo json_encode($message);
			
		 }
		 else
		 {		
			$this->load->view('default/page-login');
		 }



		
		
	}
	
	
	
	
	
	
	
	
	
}
