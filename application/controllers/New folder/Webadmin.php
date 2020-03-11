<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webadmin extends CI_Controller 
{
   function __construct()
    {
        // Construct the parent class
        parent::__construct();
         $this->load->model('User_model','User_model');
         $this->load->model('CRUD','CRUD');
			//$this->load->model('CRUD');
/* 			if($this->User_Auth())
			{
				
			}
			else
			{
				redirect('/Adminlogin/index');
				
			} */	
    }
	
	
		public function User_Auth()
	{		    
		if($this->session->userdata('ADMIN_ID') && $this->session->userdata('ADMIN_NAME') && $this->session->userdata('ADMIN_EMAIL'))
		{ 
			return True;
		//print($this->session->userdata('ADMIN_NAME')); exit;
		}
		else
		{
			return  False; 
		}
	}
	
	  function logout()
	{
		$this->session->unset_userdata('ADMIN_ID');
		$this->session->unset_userdata('ADMIN_NAME');
		$this->session->unset_userdata('ADMIN_EMAIL');
		$this->session->sess_destroy();
		redirect('/Adminlogin','refresh');
	}
	
	

	public function index()
	{
		   /*  $data['activity_planning']=$this->User_model->table_count('activity_planning');
		   $data['doctor_data']=$this->User_model->table_count('doctor_data');
		   $data['notificationlist']=$this->User_model->table_count('notificationlist');
		   $data['standard_details']=$this->User_model->table_count('standard_details');
		   $data['_master_brands']=$this->User_model->table_count('_master_brands');
		   $data['_master_division']=$this->User_model->table_count('_master_division');
		   $data['activity_execution']=$this->User_model->table_count('activity_execution');
		 //   $data['activity_execution']; */
		$this->load->view('default/index');
	}
	public function calender()
	{		
		$this->load->view('default/calendar');
	}	
	public function typography()
	{		
		$this->load->view('default/ui-typography');
	}
	public function tabs()
	{		
		$this->load->view('default/ui-tabs');
	}	
	public function sweetalerts()
	{		
		$this->load->view('default/ui-sweet-alert');
	}
	public function progressbars()
	{		
		$this->load->view('default/ui-progressbars');
	}
	public function notifications()
	{		
		$this->load->view('default/ui-notifications');
	}	
	public function modals()
	{		
		$this->load->view('default/ui-modals');
	}	
	public function grid()
	{		
		$this->load->view('default/ui-grid');
	}	
	public function checkbox_radio()
	{		
		$this->load->view('default/ui-checkbox-radio');
	}	
	public function cards()
	{		
		$this->load->view('default/ui-cards');
	}	
	public function buttons()
	{		
		$this->load->view('default/ui-buttons');
	}	
	public function bootstrap()
	{		
		$this->load->view('default/ui-bootstrap');
	}	
	
	public function tablesaw()
	{		
		$this->load->view('default/tables-tablesaw');
	}	
	public function tables_responsive()
	{		
		$this->load->view('default/tables-responsive');
	}	
	public function tables_editable()
	{		
		$this->load->view('default/tables-editable');
	}	
	public function tables_datatable()
	{		
		$this->load->view('default/tables-datatable');
	}
	public function tables_basic()
	{		
		$this->load->view('default/tables-basic');
	}	
	public function page_starter()
	{		
		$this->load->view('default/page-starter');
	}	
	public function page_register()
	{		
		$this->load->view('default/page-register');
	}	
	public function page_recoverpw()
	{		
		$this->load->view('default/page-recoverpw');
	}	
	public function page_logout()
	{		
		$this->load->view('default/page-logout');
	}	
	/*
	public function page_login()
	{
		if ($this->input->post('submit')) 
		 {
			 
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
	
	*/
	public function lock_screen()
	{		
		$this->load->view('default/page-lock-screen');
	}
	public function confirm_mail_screen()
	{		
		$this->load->view('default/page-confirm-mail');
	}
	public function page_500()
	{		
		$this->load->view('default/page-500');
	}		
	public function page_404_alt()
	{		
		$this->load->view('default/page-404-alt');
	}	
	public function page_404()
	{		
		$this->load->view('default/page-404');
	}	
	public function maps_vector()
	{		
		$this->load->view('default/maps-vector');
	}	
	public function maps_mapael()
	{		
		$this->load->view('default/maps-mapael');
	}	
	public function maps_google()
	{		
		$this->load->view('default/maps-google');
	}	
	public function icons_materialdesign()
	{		
		$this->load->view('default/icons-materialdesign');
	}	
	public function icons_fontawesome()
	{		
		$this->load->view('default/icons-fontawesome');
	}	
	
	public function icons_feather()
	{		
		$this->load->view('default/icons-feather');
	}	
	
	public function icons_dripicons()
	{		
		$this->load->view('default/icons-dripicons');
	}	
	
	public function form_x_editable()
	{		
		$this->load->view('default/form-x-editable');
	}	
	
	public function form_wysiwig()
	{		
		$this->load->view('default/form-wysiwig');
	}	
	
	public function form_wizard()
	{		
		$this->load->view('default/form-wizard');
	}

	public function form_validation()
	{		
		$this->load->view('default/form-validation');
	}
	public function form_uploads()
	{		
		$this->load->view('default/form-uploads');
	}	
	public function form_pickers()
	{		
		$this->load->view('default/form-pickers');
	}	
	
	public function form_mask()
	{		
		$this->load->view('default/form-mask');
	}	
	
	public function form_elements()
	{		
		$this->load->view('default/form-elements');
	}	
	public function form_advanced()
	{		
		$this->load->view('default/form-advanced');
	}
	public function extras_timeline()
	{		
		$this->load->view('default/extras-timeline');
	}	
	
	public function extras_pricing()
	{		
		$this->load->view('default/extras-pricing');
	}	
	public function extras_invoice()
	{		
		$this->load->view('default/extras-invoice');
	}

	public function extras_faq()
	{		
		$this->load->view('default/extras-faq');
	}
		public function extras_email_template()
	{		
		$this->load->view('default/extras-email-template');
	}		
	
	public function email_read()
	{		
		$this->load->view('default/email-read');
	}	
	public function email_inbox()
	{		
		$this->load->view('default/email-inbox');
	}	
	public function email_compose()
	{		
		$this->load->view('default/email-compose');
	}
	public function chart_sparkline()
	{		
		$this->load->view('default/chart-sparkline');
	}
	public function chart_morris()
	{		
		$this->load->view('default/chart-morris');
	}

	public function chart_knob()
	{		
		$this->load->view('default/chart-knob');
	}	
	
	public function chart_flot()
	{		
		$this->load->view('default/chart-flot');
	}	
	
	public function chart_chartjs()
	{		
		$this->load->view('default/chart-chartjs');
	}
	
   public function activity_group()
	{		
		$this->load->view('default/activity_group');
	}  
	public function activity_brief()
	{	   
        $data['activity_brief'] = $this->User_model->activity_brief();		
		$this->load->view('default/activity_brief',$data);
	}
	public function activity_execution()
	{	
         $data['activity_execution'] = $this->User_model->activity_execution();	
		$this->load->view('default/activity_execution',$data);
	}	
	
	public function activity_planning()
	{	
         $data['activity_planning'] = $this->User_model->activity_planning();	
		$this->load->view('default/activity_planning',$data);
	}

	public function activity_master()
	{
        $data['activity_master'] = $this->User_model->activity_master();
		//$this->load->view('ExpenseAdmin/CityList',$data);		
		$this->load->view('default/activity_master',$data);
	}	
	
	public function doctorlist()
	{
        $data['doctorlist'] = $this->User_model->doctorlist();
		//$this->load->view('ExpenseAdmin/CityList',$data);		
		$this->load->view('default/doctorlist',$data);
	}	
	
	public function notificationlist()
	{
        $data['notificationlist'] = $this->User_model->notificationlist();
		//$this->load->view('ExpenseAdmin/CityList',$data);		
		$this->load->view('default/notificationlist',$data);
	}	
	public function notification_catagory()
	{
        $data['notification_catagory'] = $this->User_model->notification_catagory();
		//$this->load->view('ExpenseAdmin/CityList',$data);		
		$this->load->view('default/notification_catagory',$data);
	}
	
		public function stand_detailing()
	{
        $data['stand_detailing'] = $this->User_model->stand_detailing();
		//$this->load->view('ExpenseAdmin/CityList',$data);		
		//echo "<pre>";print_R($data);
		$this->load->view('default/stand_detailing',$data);
	}	

	public function detailing_tracking()
	{
        $data['detailing_tracking'] = $this->User_model->detailing_tracking();
		//$this->load->view('ExpenseAdmin/CityList',$data);		
		//echo "<pre>";print_R($data);
	   $this->load->view('default/detailing_tracking',$data);
	}
	
		public function add_activity()
	{
		
		if ($this->input->post('submit')) 
		 {
		 $list=array();
		 $emsg = "";	
		 $activity_name=trim($this->input->Post('activity_name')," ");
		if(!isset($activity_name) || strlen($activity_name)<=0)
		{
			 $emsg = $emsg . " activity_name ";
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
						$where = array('ACTIVITY_NAME'=>$activity_name);
						$actvity_EXIST=$this->CRUD->GetRecordByID('activity_master', $where);
						if(!$actvity_EXIST)
						{
							
						$ins_activity = array
						(
						'ACTIVITY_NAME'=>$activity_name,														
						'STATUS'=>1001,														
						'UPDATEDBY'=>1,														
						'UPDATEDON'=>date('Y-m-d h:i:s'),														
						'CREATEDBY'=>1,														
						'CREATEDON'=>date('Y-m-d h:i:s')
						);	
														
			     $ins_activity_id=$this->CRUD->insertData('activity_master', $ins_activity);
							
							
							
							$message = array(
                'status' => 1,   
				'message' => "Activity Added Successfully",              
                'result' => array()  ); 
							
						}
						else
						{
							$message = array(
                'status' => 0,   
				'message' => "Activity Name Already Exist..! ",              
                'result' => array()  ); 
							
						}
			
		}

						echo json_encode($message);
			
		 }
		 else
		 {		
			  $this->load->view('default/add_activity');
		 }

	 
	}
	
	
	public function add_planning()
	{
		
		if ($this->input->post('submit')) 
		 {
			
		 $list=array();
		 $emsg = "";	
		 $activity_id=trim($this->input->Post('activity_id')," ");
		 $activity_doctor=trim($this->input->Post('activity_doctor')," ");
		 $activity_date=trim($this->input->Post('activity_date')," ");
		if(!isset($activity_id) || strlen($activity_id)<=0)
		{
			 $emsg = $emsg . " activity_id ";
		}	
		if(!isset($activity_doctor) || strlen($activity_doctor)<=0)
		{
			 $emsg = $emsg . " activity_doctor ";
		}	
		if(!isset($activity_date) || strlen($activity_date)<=0)
		{
			 $emsg = $emsg . " activity_date ";
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
						$where = array('ACTIVITY_ID'=>$activity_id,'DOCTOR_CODE'=>$activity_doctor,'PLANNED_DATE'=>$activity_date);
						$actvity_EXIST=$this->CRUD->GetRecordByID('activity_planning', $where);
						if(!$actvity_EXIST)
						{
							
						$ins_activity = array
						(
						'ACTIVITY_ID'=>$activity_id,														
						'PLANNED_DATE'=>$activity_date,														
						'DOCTOR_CODE'=>$activity_doctor,														
						'STATUS'=>1001,														
						'UPDATEDBY'=>1,														
						'UPDATEDON'=>date('Y-m-d h:i:s'),														
						'CREATEDBY'=>1,														
						'CREATEDON'=>date('Y-m-d h:i:s')
						);	
														
			     $ins_activity_id=$this->CRUD->insertData('activity_planning', $ins_activity);
							
							
							
							$message = array(
                'status' => 1,   
				'message' => "Planned Activity Added Successfully",              
                'result' => array()  ); 
							
						}
						else
						{
							$message = array(
                'status' => 0,   
				'message' => "Planned Activity Already Exist..! ",              
                'result' => array()  ); 
							
						}
			
		}

						echo json_encode($message);
			
		 }
		 else
		 {		
			  $this->load->view('default/add_activityplanning');
		 }

	 
	}
	
	
	  
    public function GetAllDoctor()
    {
		$list=array();
		$emsg = "";	
			if($emsg != "" && strlen($emsg) > 0)
		{
				$message = array(
                'status' => 0,   
				'message' => "Missing " . $emsg  ,                  
                'result' => array()       
                             
            );  
		
		}
		else
		{
			$list=$this->User_model->GetAllDoctor();
			if($list)
			{
				$message = array(
                'status' => 1,   
				'message' => 'Doctor List'  ,              
                'result' => $list               
                             
            );      
			}
			else
			{
				$message = array(
								'status' => 2,   
								'message' => 'NO Doctor Available with EMPLOYEEID'  ,              
								'result' => array()               
                             
            );  				
			}	
			
			
		}
	   	   	echo json_encode($message);
    }
	    public function GetAllBrands()
    {
		$list=array();
		$emsg = "";	
			if($emsg != "" && strlen($emsg) > 0)
		{
				$message = array(
                'status' => 0,   
				'message' => "Missing " . $emsg  ,                  
                'result' => array()       
                             
            );  
		
		}
		else
		{
			$list=$this->User_model->GetAllBrands();
			if($list)
			{
				$message = array(
                'status' => 1,   
				'message' => 'Brand List'  ,              
                'result' => $list               
                             
            );      
			}
			else
			{
				$message = array(
								'status' => 2,   
								'message' => 'NO brand'  ,              
								'result' => array()               
                             
            );  				
			}	
			
			
		}
	   	   	echo json_encode($message);
    }
	
	
	    public function GetAllActivity()
    {
		//echo "fgdfgdfg";exit;
		$list=array();
		$emsg = "";	
			if($emsg != "" && strlen($emsg) > 0)
		{
				$message = array(
                'status' => 0,   
				'message' => "Missing " . $emsg  ,                  
                'result' => array()       
                             
            );  
		
		}
		else
		{
			$list=$this->User_model->GetAllActivity();
		//	print_r($list);
			if($list)
			{
				$message = array(
                'status' => 1,   
				'message' => 'Get All Activity List'  ,              
                'result' => $list               
                             
            );      
			}
			else
			{
				$message = array(
								'status' => 2,   
								'message' => 'NO  Activity Available'  ,              
								'result' => array()               
                             
            );  				
			}	
			
			
		}
	   	   	echo json_encode($message);
    }
	
	
	
	public function add_activitybrief()
	{
		
		if ($this->input->post('submit')) 
		 {		 
			
		 $list=array();
		 $emsg = "";	
		 $activity_id=trim($this->input->Post('activity_id')," ");
		// $uploadFile=trim($this->input->Post('uploadFile')," ");
		 $format=trim($this->input->Post('format')," ");
		 //print_r($_POST);exit;
		if(!isset($activity_id) || strlen($activity_id)<=0)
		{
			 $emsg = $emsg . " activity_id ";
		}		
		if(!isset($format) || strlen($format)<=0)
		{
			 $emsg = $emsg . " format ";
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
			
			
						$path = 'Uploads/PDF/';
         //   require_once APPPATH . "/third_party/PHPExcel.php";
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'xlsx|xls|pdf|PDF';
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);            
            if (!$this->upload->do_upload('uploadFile')) 
			{
                $error = array('error' => $this->upload->display_errors());
				//print_r($error);
						$message = array(
                'status' => 0,   
				'message' => "Failed To Upload",              
                'result' => array()  ); 
            } 
			else
			{
                $data = array('upload_data' => $this->upload->data());
				//print_R($data['upload_data']['raw_name']);
				
				$ins_activity = array
				(
				'ACTIVITY_ID'=>$activity_id,														
				'NAME'=>$data['upload_data']['raw_name'],														
				'FORMAT'=>$format,														
				'STATUS'=>1001,														
				'UPDATEDBY'=>1,														
				'UPDATEDON'=>date('Y-m-d h:i:s'),														
				'CREATEDBY'=>1,														
				'CREATEDON'=>date('Y-m-d h:i:s')
				);	

				$ins_activity_id=$this->CRUD->insertData('activity_brief', $ins_activity);
							
							
							
							$message = array(
                'status' => 1,   
				'message' => "Planned Activity Brief Added Successfully",              
                'result' => array()  ); 
            }
       
							

							

			
		}

						echo json_encode($message);
			
		 }
		 else
		 {		
			  $this->load->view('default/add_activitybrief');
		 }

	 
	}
	
	
	
		public function add_standarddetailing()
	{
		
		if ($this->input->post('submit')) 
		 {		 
			
		 $list=array();
		 $emsg = "";	
			 $brand_id=trim($this->input->Post('brand_id')," ");
		// $uploadFile=trim($this->input->Post('uploadFile')," ");
		 $format=trim($this->input->Post('format')," ");
		 //print_r($_POST);exit;
		if(!isset($brand_id) || strlen($brand_id)<=0)
		{
			 $emsg = $emsg . " brand_id ";
		}			
		if(!isset($format) || strlen($format)<=0)
		{
			 $emsg = $emsg . " format ";
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
			
			
						$path = 'Uploads/PDF/';
         //   require_once APPPATH . "/third_party/PHPExcel.php";
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'xlsx|xls|pdf|PDF';
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);            
            if (!$this->upload->do_upload('uploadFile')) 
			{
                $error = array('error' => $this->upload->display_errors());
				//print_r($error);
						$message = array(
                'status' => 0,   
				'message' => "Failed To Upload",              
                'result' => array()  ); 
            } 
			else
			{
                $data = array('upload_data' => $this->upload->data());
				//print_R($data['upload_data']['raw_name']);
				
				$FILE_FORMAT=ltrim($data['upload_data']['file_ext'],'.');
				
			$ins_standerd = array
				(														
				'NAME'=>$data['upload_data']['raw_name'],														
				'FILE_FORMAT'=>$FILE_FORMAT,														
				'FILE_TYPE'=>$format,														
				'STATUS'=>1001,														
				'UPDATEDBY'=>1,														
				'UPDATEDON'=>date('Y-m-d h:i:s'),														
				'CREATEDBY'=>1,														
				'CREATEDON'=>date('Y-m-d h:i:s'),
				'BRAND_ID'=>$brand_id
				);	

				$ins_activity_id=$this->CRUD->insertData('standard_details', $ins_standerd); 
							
							
							
							$message = array(
                'status' => 1,   
				'message' => "Standard Detaling Added Successfully",              
                'result' => array()  ); 
            }
       
							

							

			
		}

		echo json_encode($message);
			
		 }
		 else
		 {		
			  $this->load->view('default/add_standarddetailing');
		 }

	 
	}
	
	
			public function add_notification_cat()
	{
		
		if ($this->input->post('submit')) 
		 {
		 $list=array();
		 $emsg = "";	
		 $catagory_name=trim($this->input->Post('catagory_name')," ");
		 $catagory_desc=trim($this->input->Post('catagory_desc')," ");
		if(!isset($catagory_name) || strlen($catagory_name)<=0)
		{
			 $emsg = $emsg . " catagory_name ";
		}		
		
		if(!isset($catagory_desc) || strlen($catagory_desc)<=0)
		{
			 $emsg = $emsg . " catagory_desc ";
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
						$where = array('CAT_NAME'=>$catagory_name);
						$_EXIST=$this->CRUD->GetRecordByID('notification_catagory', $where);
						if(!$_EXIST)
						{
							
						$ins_activity = array
						(
						'CAT_NAME'=>$catagory_name,														
						'CAT_DESC'=>$catagory_desc,														
						'CAT_STATUS'=>1001,														
						'CAT_CREATED_ID'=>1,														
						'CAT_CREATED_TS'=>date('Y-m-d h:i:s'),														
						'CAT_UPDATED_ID'=>1,														
						'CAT_UPDATED_TS'=>date('Y-m-d h:i:s')
						);	
														
			     $ins_activity_id=$this->CRUD->insertData('notification_catagory', $ins_activity);
							
							
							
							$message = array(
                'status' => 1,   
				'message' => "Noticaion Catagory Added Successfully",              
                'result' => array()  ); 
							
						}
						else
						{
							$message = array(
                'status' => 0,   
				'message' => "Notification Catagory Name Already Exist..! ",              
                'result' => array()  ); 
							
						}
			
		}

						echo json_encode($message);
			
		 }
		 else
		 {		
			  $this->load->view('default/add_notification_cat');
		 }

	 
	}
	
	
	
	
	
	
	
	
	
}
