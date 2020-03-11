<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

class Service extends REST_Controller
{
    
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
         $this->load->model('v1/User_model','User_model');
         $this->load->model('v1/CRUD','CRUD');
			//$this->load->model('CRUD');
    }
    
    //appversion
	
 
    public function appversion_get()
    {
		
        $appversion = array();
        $appversion = $this->User_model->getAppversion();
        if (is_array($appversion) && !empty($appversion)) {
            $message = array(
                'status' => 1,
                'result' => $appversion,
                'message' => 'Data Retrieved Successfully'
            );
            
        } else {
            $message = array(
                'status' => 2,
                'result' => $appversion,
                'message' => 'No Data Available'
            );
        }
        
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }  

	
	    public function login_post()
    {  
     	$emsg = "";			
		$employee_id=trim($this->Post('EMPLOYEE_ID')," ");
		$password=trim($this->Post('PASSWORD')," ");
		$device_id=trim($this->Post('DEVICE_ID')," ");
		$device_token=trim($this->Post('DEVICE_TOKEN')," ");
		
		  $reqData = array(            
            'EMPLOYEE_ID' => $employee_id,            
            'PASSWORD' => $password,            
            'DEVICE_ID' => $device_id,            
            'DEVICE_TOKEN' => $device_token            
        );
		
		if(!isset($employee_id) || strlen($employee_id)<=0)
		{
			 $emsg = $emsg . " EMPLOYEE_ID ";
		}	
		if(!isset($password) || strlen($password)<=0)
		{
			 $emsg = $emsg . " PASSWORD ";
		}	
		if(!isset($device_id) || strlen($device_id)<=0)
		{
			 $emsg = $emsg . " device_id ";
		}		
		if(!isset($device_token) || strlen($device_token)<=0)
		{
			 $emsg = $emsg . " device_token ";
		}

			if($emsg != "" && strlen($emsg) > 0)
		{
		
		$message = array(
                'status' => 0,   
				'message' => "Missing " . $emsg  ,              
                'result' => array()   ); 			
		}
		else
		{
				$users_data = $this->User_model->remoteLogin($reqData);            
            $resData['EMPLOYEE_DETAILS'] = $users_data; 

    if ($requester > 0 && $requester < 10) 
		{           
            $users_data = $this->User_model->remoteLogin($reqData);            
            $resData['EMPLOYEE_DETAILS'] = $users_data;           
        }         
        
        if (is_array($users_data) && !empty($users_data)) 
		{            
            $message = array(                
                'status' => 1,                
                'result' => $resData,                
                'message' => 'Employee exists'                
            );
            
        } else {
            $message = array(
                'status' => 2,                
                'result' => array(),                
                'message' => 'Employee does not exists'                
            );           
        }			

		}
 $output = $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
        return $output;	
		
		
		
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code            
        
    }
	
	
	




	public function GetData_get()
    {
			$postdata = http_build_query(
			array(
			'EMPLOYEEID' => '2054301'
			)
			);

			$opts = array('http' =>
			array(
			'method'  => 'POST',
			'header'  => 'Content-type: application/x-www-form-urlencoded',
			'content' => $postdata
			)
			);

			$context  = stream_context_create($opts);

			$result = file_get_contents('http://services.heterohcl.com/php/cashcards/Remote_login/GetLoginUserRoles', false, $context);
			//print_r($result);
			 $this->set_response($result, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    
    //login
    


    
	
	   
   
	
	
}