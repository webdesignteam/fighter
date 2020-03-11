<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Api extends REST_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('v1/User_model','User');
		  $this->load->model('v1/CRUD','CRUD');
        error_reporting(E_ALL); 
        ini_set('display_errors', '1');
    }
    //APPVERSION
    public function appversion_get() {
        $appversion = array();
        $appversion = $this->User->getAppversion();
        if (is_array($appversion) && !empty($appversion)) {
        $message = ['status' => 1, 'result' => $appversion, 'message' => 'App Version Retrieved Successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
/*     //USER LOGIN
    public function login_post() {
        $user_data = array();
        $employee_id = $this->post('EMPLOYEE_ID');
        $password = $this->post('PASSWORD');
        $user_data = $this->User->getUserdata($employee_id,$password);
        if (is_array($user_data) && !empty($user_data)) {
        $message = ['status' => 1, 'result' => $user_data, 'message' => 'User data Retrieved Successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
	 */
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
			 $emsg = $emsg . " DEVICE_ID ";
		}		
		if(!isset($device_token) || strlen($device_token)<=0)
		{
			 $emsg = $emsg . " DEVICE_TOKEN ";
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
				$users_data = $this->User->remoteLogin($reqData);            
            $resData['EMPLOYEE_DETAILS'] = $users_data;         
        
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
	
	
	
    //UPDATE USER DETAILS 
    public function Userupdate_post() {
        $update_data = array();
        $form_data = $this->input->post();
        $update_data = $this->User->userUpdate($form_data);
        if (is_array($update_data) && !empty($update_data)) {
        $message = ['status' => 1,'result'=>$update_data,'message' => 'User data Updated Successfully'];
        } else {
        $message = ['status' => 2, 'message' => 'Error in updating Data'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
     //DOCTOR LIST 
    public function DoctorList_post() {
        $doctor_list = array();
        $employee_id = $this->post('EMPLOYEE_ID');
        $doctor_list = $this->User->getDoctordata($employee_id);
        if (is_array($doctor_list) && !empty($doctor_list)) {
        $message = ['status' => 1, 'result' => $doctor_list, 'message' => 'Doctor List Retrieved Successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
	
	// Brand List
	    public function BrandList_post() {
        $doctor_list = array();
        $DIVISION_ID = $this->post('DIVISION_ID');
        $brand_list = $this->User->BrandList($DIVISION_ID);
        if (is_array($brand_list) && !empty($brand_list)) {
        $message = ['status' => 1, 'result' => $brand_list, 'message' => 'Brand List Retrieved Successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
	
	
    //DOCTOR DETAILS
    public function Doctordetails_post() {
        $doctor_data = array();
        $doctor_code = $this->post('DOCTOR_CODE');
        $doctor_data = $this->User->getDoctordetails($doctor_code);
        if (is_array($doctor_data) && !empty($doctor_data)) {
        $message = ['status' => 1, 'result' => $doctor_data, 'message' => 'Doctor data Retrieved Successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    } 
	//UPDATE DOCTOR DETAILS 
    public function Doctorupdate_post() {
        $update_data = array();
        $form_data = $this->input->post();
		// echo "<pre>";print_r($form_data);exit;
        $update_data = $this->User->doctorUpdate($form_data);
        if (is_array($update_data) && !empty($update_data)) {
        $message = ['status' => 1,'message' => 'Doctor data Updated Successfully'];
        } else {
        $message = ['status' => 2, 'message' => 'Error in updating Data'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
    //DOCTOR BIRTHDAY
    public function Doctorbirthday_post() {
        $doctor_birthday = array();
        $date = $this->post('DATE');
        $doctor_birthday = $this->User->getDoctorbirthdays($date);
        if (is_array($doctor_birthday) && !empty($doctor_birthday)) {
        $message = ['status' => 1, 'result' => $doctor_birthday, 'message' => 'Doctor birthday list Retrieved Successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
    //STANDARD DETAILING    
/*     public function Standarddetailing_post() {
		$type = $this->post('TYPE');
		$BRAND_ID = $this->post('BRAND_ID');
        $detailing_data = array();
        $detailing_data = $this->User->getDetailingdata($type,$BRAND_ID);
        if (is_array($detailing_data) && !empty($detailing_data)) {
        $message = ['status' => 1, 'result' => $detailing_data, 'message' => 'Detailing data retrieved Successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }  */ 
	
	
			    public function Standarddetailing_post()
    {  

     	$emsg = "";			
		$TYPE=trim($this->Post('TYPE')," ");
		$BRAND_ID=trim($this->Post('BRAND_ID')," ");

		if(!isset($TYPE) || strlen($TYPE)<=0)
		{
			 $emsg = $emsg . " TYPE ";
		}	
		if(!isset($BRAND_ID) || strlen($BRAND_ID)<=0)
		{
			 $emsg = $emsg . " BRAND_ID ";
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
			$where = array('ID'=>$BRAND_ID);
				$_master_brands=$this->CRUD->isDataExist('_master_brands', $where);
				if($_master_brands)
				{
					
				if($list=$this->User->getDetailingdata($TYPE,$BRAND_ID))
					{
							$message = array(
							'status' => 1,   
							'message' => "Detailing data retrieved Successfully" ,              
							'result' => $list ); 
					}
					else
					{
								$message = array(
							'status' => 0,   
							'message' => "No Data Available" ,              
							'result' => array()  ); 
								
					}
					
					
				}
				else
				{
					$message = array(
                'status' => 0,   
				'message' => "Invalid brand ID",              
                'result' => array()   ); 
					
				}
				}
        $output = $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
        return $output;			
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code            
        
    }
	
	
   public function Detailingrecording_post()
    {  

     	$emsg = "";			
		$EMPLOYEE_ID=trim($this->Post('EMPLOYEE_ID')," ");
		$TYPE=trim($this->Post('TYPE')," ");
		$BRAND_ID=trim($this->Post('BRAND_ID')," ");
		$DIV_ID=trim($this->Post('DIV_ID')," ");

		if(!isset($TYPE) || strlen($TYPE)<=0)
		{
			 $emsg = $emsg . " TYPE ";
		}	
		if(!isset($BRAND_ID) || strlen($BRAND_ID)<=0)
		{
			 $emsg = $emsg . " BRAND_ID ";
		}		
		if(!isset($DIV_ID) || strlen($DIV_ID)<=0)
		{
			 $emsg = $emsg . " DIV_ID ";
		}
        if(!isset($EMPLOYEE_ID) || strlen($EMPLOYEE_ID)<=0)
		{
			 $emsg = $emsg . " EMPLOYEE_ID ";
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
			    $where = array('ID'=>$BRAND_ID);
				$_master_brands=$this->CRUD->isDataExist('_master_brands', $where);
				if($_master_brands)
				{
					
				if($list=$this->User->getDetailingdata($TYPE,$BRAND_ID))
					{
							$message = array(
							'status' => 1,   
							'message' => "Detailing data retrieved Successfully" ,              
							'result' => $list ); 
					}
					else
					{
								$message = array(
							'status' => 0,   
							'message' => "No Data Available" ,              
							'result' => array()  ); 
								
					}
					
					
				}
				else
				{
					$message = array(
                'status' => 0,   
				'message' => "Invalid brand ID",              
                'result' => array()   ); 
					
				}
				}
        $output = $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
        return $output;			
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code            
        
    }
	
	
	   public function Updatestatus_post()
    {  

     	$emsg = "";			
		$EMPLOYEE_ID=trim($this->Post('EMPLOYEE_ID')," ");
		$READ_STATUS=trim($this->Post('READ_STATUS')," ");
		$DETAILING_ID=trim($this->Post('DETAILING_ID')," ");
		$DOCTOR_ID=trim($this->Post('DOCTOR_ID')," ");
		$TYPE=trim($this->Post('TYPE')," ");
		$BRAND_ID=trim($this->Post('BRAND_ID')," ");
		$DIV_ID=trim($this->Post('DIV_ID')," ");
	//	$standard_details_DATA=array();

		if(!isset($EMPLOYEE_ID) || strlen($EMPLOYEE_ID)<=0)
		{
			 $emsg = $emsg . " EMPLOYEE_ID ";
		}	
		if(!isset($BRAND_ID) || strlen($BRAND_ID)<=0)
		{
			 $emsg = $emsg . " BRAND_ID ";
		}		
		if(!isset($READ_STATUS) || strlen($READ_STATUS)<=0)
		{
			 $emsg = $emsg . " READ_STATUS ";
		}
        if(!isset($DETAILING_ID) || strlen($DETAILING_ID)<=0)
		{
			 $emsg = $emsg . " DETAILING_ID ";
		}       
		if(!isset($DOCTOR_ID) || strlen($DOCTOR_ID)<=0)
		{
			 $emsg = $emsg . " DOCTOR_ID ";
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
			    $where = array('ID'=>$DOCTOR_ID);
				$doctor_data=$this->CRUD->isDataExist('doctor_data', $where);
				if($doctor_data)
				{
				$where = array('DETAILING_ID'=>$DETAILING_ID);
				$standard_details=$this->CRUD->isDataExist('standard_details', $where);
				if($standard_details)
				{
														$standard_details_DATA = array(
											'DOCTOR_ID'=>$DOCTOR_ID,
											'EMPLOYEE_ID'=>$EMPLOYEE_ID,
											'READ_STATUS'=>$READ_STATUS,
											'DETAILING_ID'=>$DETAILING_ID,
											'STATUS'=>1	);		
											
											
							if($insertdata=$this->CRUD->insertData('DETAILING_TRACKING', $standard_details_DATA))
											{
												$message = array(
														'status' => 1,   
														'message' => "Record Added Successfully..!!" ,              
														'result' => array ($standard_details_DATA) ); 
												
											}
											else
											{
												$message = array(
														'status' => 0,   
														'message' => "Failed To Add..!!!" ,              
														'result' => array()  );
												
											}
				}
				else
				{
					$message = array(
														'status' => 0,   
														'message' => "Invlid Detailing ID..!!!" ,              
														'result' => array()  );
					
				}
					
				


					
				}
				else
				{
					$message = array(
                'status' => 0,   
				'message' => "Invalid DOCTOrID",              
                'result' => array()   ); 				
				}					
		}
				
				
        $output = $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
        return $output;			
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code            
        
    }
	
	
    //ACTIVITY LIST
    public function Activitylist_get() {
        $activity_data = array();
        $activity_data = $this->User->getActivitydata();
        if (is_array($activity_data) && !empty($activity_data)) {
        $message = ['status' => 1, 'result' => $activity_data, 'message' => 'Activity List retrieved successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }  
    //ACTIVITY PLANNING
    public function Activityplanning_post() {
        $objDate = new DateTime();
        $activity_planning = array();
        $form_data = $this->input->post();
        $data['ACTIVITY_PLANNING'] = array('ACTIVITY_ID' => $form_data['ACTIVITY_ID'],
                                           'PLANNED_DATE' => $form_data['PLANNED_DATE'],
                                           'DOCTOR_CODE' => $form_data['DOCTOR_CODE'],
                                           'CREATEDBY' =>$form_data['EMPLOYEE_ID'],
                                           'CREATEDON' => $objDate->format('Y-m-d H:i:s'));
        $activity_planning = $this->User->setActivityplanning($data);
        if ($activity_planning >0) {
        $message = ['status' => 1, 'message' => 'Activity planning done successfully'];
        } else {
        $message = ['status' => 2, 'message' => 'Error in Acrtivity Planning'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    } 
    // ACTIVITY PLANNED DOCTOR LIST
    public function Plannedlist_post() {
        $planned_data = array();
        $activity_id = $this->post('ACTIVITY_ID');
		$from = $this->post('FROM');
		$to = $this->post('TO');
        $planned_data = $this->User->getPlanneddata($activity_id,$from,$to);
        if (is_array($planned_data) && !empty($planned_data)) {
        $message = ['status' => 1, 'result' => $planned_data, 'message' => 'Planned Doctor List retrieved successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }  
    //ACTIVITY EXECUTION
     public function Activityexecution_post() {
        $objDate = new DateTime();
        $activity_execution = array();
        $form_data = $this->input->post();
        $data['ACTIVITY_EXECUTION'] = array('ACTIVITY_ID' => $form_data['ACTIVITY_ID'],
                                           'PLANNED_DATE' => $form_data['PLANNED_DATE'],
                                           'DOCTOR_CODE' => $form_data['DOCTOR_CODE'],
                                           'CREATEDBY' =>$form_data['EMPLOYEE_ID'],
                                           'EXECUTED_DATE' =>$form_data['EXECUTED_DATE'],
                                           'ACTIVITY_STATUS' =>1001,
                                           'CREATEDON' => $objDate->format('Y-m-d H:i:s'));
        $activity_execution = $this->User->setActivityexecution($data);
        if ($activity_execution >0) {
        $message = ['status' => 1, 'message' => 'Activity execution done successfully'];
        } else {
        $message = ['status' => 2, 'message' => 'Error in Activity Execution'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    } 
    // ACTIVITY BRIEF
     public function Activitybrief_post() {
        $activitybrief_data = array();
        $activity_id = $this->post('ACTIVITY_ID');
        $activitybrief_data = $this->User->getActivitybriefdata($activity_id);
        if (is_array($activitybrief_data) && !empty($activitybrief_data)) {
        $message = ['status' => 1, 'result' => $activitybrief_data, 'message' => 'Activity Brief retrieved successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }  
    // controller end
	
	
		public function GetNotifications_post()
    {
         $list=array();
		 $emsg = "";	
		 $EMPLOYEE_ID=trim($this->Post('EMPLOYEE_ID')," ");
		if(!isset($EMPLOYEE_ID) || strlen($EMPLOYEE_ID)<=0)
		{
			 $emsg = $emsg . " EMPLOYEE_ID ";
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
		$list=$this->User->GetNotification($EMPLOYEE_ID);
			if($list)
			{
				$message = array(
                'status' => 1,   
				'message' => 'Notification List'  ,              
                'result' => $list );      
			}
			else
			{				
					$message = array(
                'status' => 0,   
				'message' => "No Notification Available" ,              
                'result' => array()  ); 
			}			
		}
        $output = $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
        return $output;
    }
	
	
	
	
			public function AutoNotify_post()
    {
         $list=array();
		 $emsg = "";	
		 $EMPLOYEE_ID=trim($this->Post('EMPLOYEE_ID')," ");
		if(!isset($EMPLOYEE_ID) || strlen($EMPLOYEE_ID)<=0)
		{
			 $emsg = $emsg . " EMPLOYEE_ID ";
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
		$list=$this->User->AutoNotify($EMPLOYEE_ID);
			if($list)
			{
				 foreach ($list as $list) 
		{
			$list->NOT_CODE;
			$list->NOT_TITLE;
			$list->NOT_MESSAGE;
			$list->NOT_LARGE_ICON;
			$list->NOT_SMALL_ICON;
			$list->NOT_VIABRATE;
			$list->NOT_SOUND;
			
			
			   // define('API_ACCESS_KEY', 'AIzaSyCALiulLEBSNLtIlCCl4R58TASr7xgiaH4');
  
    $registrationIds = array('dTdtixjme0Y:APA91bFxAiCsu_m3iz2Pg9VJy9VfEuBf-Od1IFQUBl-J2yEaqIs2Eb-TSguwn2GRLpGYFh4w7rituA_5v6a19MsByUaYH0vsD6ZzxY8av3V0jZYonLoVXhdgdJfz__aj55BvTgElZEux');
  


// prep the bundle
$msg = array
(
	'message' 	=> $list->NOT_MESSAGE,
	'title'		=> $list->NOT_TITLE,
	'subtitle'	=> 'This is a subtitle. subtitle',
	'tickerText'	=> 'Ticker text here...Ticker text here...Ticker text here',
	'vibrate'	=> $list->NOT_VIABRATE,
	'sound'		=> $list->NOT_SOUND,
	'largeIcon'	=> $list->NOT_LARGE_ICON,
	'smallIcon'	=> $list->NOT_SMALL_ICON
);
$fields = array
(
	'registration_ids' 	=> $registrationIds,
	'data'			=> $msg
);
 
$headers = array
(
	//'Authorization: key=' . API_ACCESS_KEY,
	'Authorization: key=AIzaSyCALiulLEBSNLtIlCCl4R58TASr7xgiaH4',
	'Content-Type: application/json'
);
 
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://android.googleapis.com/gcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec($ch );
curl_close( $ch );
//echo $result;

			
		}
				
				$message = array(
                'status' => 1,   
				'message' => 'Notification Messages send Successfully..!!!'  ,              
                'result' => array() );      
			}
			else
			{				
					$message = array(
                'status' => 0,   
				'message' => "No Notification Available" ,              
                'result' => array()  ); 
			}			
		}
        $output = $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
        return $output;
    }
	
	
	
	
	
	
	
	
	
	
	
	
}