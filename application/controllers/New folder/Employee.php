<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller 
{
   function __construct()
    {
        // Construct the parent class
        parent::__construct();
         $this->load->model('User_model','User_model');
         $this->load->model('CRUD','CRUD');
		 $this->load->library('encryption');
		
    }
	
	
			public function login()
	{
	
		if ($this->input->post('submit')) 
		 {
			// 	print_r($_POST);
			//	exit
			 
		 $list=array();
		 $emsg = "";	
		 $emp_id=trim($this->input->Post('emp_id')," ");
		 $emp_pass=trim($this->input->Post('emp_pass')," ");
		if(!isset($emp_id) || strlen($emp_id)<=0)
		{
			 $emsg = $emsg . " emp_id ";
		}		
		if(!isset($emp_pass) || strlen($emp_pass)<=0)
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
						$where = array('RE_EMPLOYEED_ID'=>$emp_id,'RE_PASSWORD'=>$emp_pass);
						$emp_exist=$this->CRUD->GetRecordByID('reigistered_employee', $where);
						if($emp_exist)
						{
						
						 
				  $this->session->set_userdata('EMPLOYEE_ID',$emp_exist[0]->RE_EMPLOYEED_ID);
				  $this->session->set_userdata('EMPLOYEE_NAME',$emp_exist[0]->RE_NAME);
				  $this->session->set_userdata('DIVISION_ID',$emp_exist[0]->RE_DIVISION_ID);
				  
							
							$message = array(
                'status' => 1,   
				'message' => "Successfully Logged in",              
                'result' => array()  ); 
							
						}
						else
						{
							$message = array(
                'status' => 0,   
				'message' => "Invalid Employee ID Password ",              
                'result' => array()  ); 
							
						}
			
		}

						echo json_encode($message);
			
		 }
		 else
		 {		
			$this->load->view('default/emp_login');
		 }		
		
	}
	
	
	
	public function index()
	{		
			if(!$this->session->userdata('EMPLOYEE_ID'))
			{
				redirect('/Employee/login');
			}
			
		    $data['questionnaire']=$this->User_model->table_count('questionnaire');
		   $data['question_options']=$this->User_model->table_count('question_options');
		   $data['reigistered_employee']=$this->User_model->table_count('reigistered_employee');
		   $data['tutorials']=$this->User_model->table_count('tutorials');
		   $data['tutorial_series']=$this->User_model->table_count('tutorial_series');
		   $data['employee_results']=$this->User_model->table_count('employee_results');
		
		    $this->load->view('default/index',$data);
		
	}

	

	public function StartExam()
	{
		if(!$this->session->userdata('EMPLOYEE_ID'))
			{
				redirect('/Employee/login');
			}

        if($SERIES_ID=$this->uri->segment(3))
		{ 
		if($_POST) 
		{	
	  // echo"<pre>";  print_r($_POST);exit;	
		 $list=array();
		 $emsg = "";	
		 $EMPLOYEE_ID=$this->session->userdata('EMPLOYEE_ID');     
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
			
			$data1=$_POST;			
		    $where = array('RESULT_SERIES_ID'=>$SERIES_ID,'RESULT_EMPLOYEE_ID'=>$EMPLOYEE_ID,'RESULT_CREATED_TS  BETWEEN CURDATE() - INTERVAL 15 DAY AND CURDATE()');
						$series_exist=$this->CRUD->GetRecordByID('employee_results', $where);
						if(!$series_exist)
						{
							$total_questions=count($data1['questions']);
							$exam_result_status = array
(
'RESULT_EMPLOYEE_ID'=>$EMPLOYEE_ID,														
'RESULT_DATE'=>date('Y-m-d h:i:s'),																			
'RESULT_SERIES_ID'=>$SERIES_ID,																			
'RESULT_TOTAL'=>$total_questions,
'RESULT_SCORE'=>0,																								
'RESULT_STATUS'=>1,																							
'RESULT_UPDATED_TS'=>date('Y-m-d h:i:s'),														
'RESULT_CREATED_ID'=>$EMPLOYEE_ID,														
'RESULT_UPDATED_ID'=>$EMPLOYEE_ID,	
'RESULT_CREATED_TS'=>date('Y-m-d h:i:s')
);	
//print_r($exam_result_status);exit;
	if($exam_result_ID=$this->CRUD->insertData('employee_results', $exam_result_status))
	{
                
$check_answer_count = 0;
           foreach ($data1['questions'] as $questions) 
			{
                    $value = $data1[$questions];
					$exam_result_details_data = array ( 
									 'RESULT_DETAIL_RESULT_ID'=>$exam_result_ID,	
									 'RESULT_DETAIL_DATE'=>date('Y-m-d h:i:s'),
									 'RESULT_DETAIL_QUESTION_ID'=>$questions,
									 'RESULT_DETAIL_OPTION_ID'=>$value,
									// 'RESULT_DETAIL_ANSWER_ID'=>$data1[$questions],
									 'RESULT_DETAIL_STATUS'=>1,
									 'RESULT_DETAIL_CREATED_TS'=>date('Y-m-d h:i:s'),
									 'RESULT_DETAIL_UPDATED_TS'=>date('Y-m-d h:i:s'),
									 'RESULT_DETAIL_CREATED_ID'=>$EMPLOYEE_ID,
									 'RESULT_DETAIL_UPDATED_ID'=>$EMPLOYEE_ID,



									 );
                         $exam_result_details_ID= $this->CRUD->insertData('employee_result_details', $exam_result_details_data); 
						 
		            	$where = array('QUESTION_ID'=>$questions,'QUESTION_ANSWER_ID'=>$value);
						if($this->CRUD->GetRecordByID('questionnaire', $where))
						{						 
						   $check_answer_count = $check_answer_count + 1;
						}

						 
            }
			
$percentage = $check_answer_count;
$totalWidth = $total_questions;

$new_width = ( $percentage / $totalWidth ) * 100;
			
		  	$update_score = array(
								'RESULT_SCORE'=>$check_answer_count,	
								'RESULT_PERCENTAGE'=>$new_width	
														
								);
		$where = array('RESULT_SERIES_ID'=>$SERIES_ID,'RESULT_EMPLOYEE_ID'=>$EMPLOYEE_ID);					$UPDATE=$this->CRUD->updateData('employee_results',$update_score, $where);
			
				$message = array(
						'status' => 1,   
						'message' => "Successfully Submitted",              
						'result' => array()  ); 
						
						$this->session->unset_userdata('EXAM_TIMER');

	}
	else
	{
			$message = array(
						'status' => 0,   
						'message' => "Failed to Submit",              
						'result' => array()  ); 
		
	}

						}
						else
						{
							
								$message = array(
						'status' => 0,   
						'message' => "Already Submitted",              
						'result' => array()  ); 

						}	
							
			
		}

						echo json_encode($message);
		}
		else			
		{
			 $SERIES_ID=$this->uri->segment(3);
			//print_r($this->User_model->CheckGivenExam($EMPLOYEE_ID));exit;
			// $data['exam_status_1'] = $this->User_model->CheckGivenExam($this->session->userdata('EMPLOYEE_ID'));
			 $data['questionaries'] = $this->User_model->questionaries($SERIES_ID);
			 $data['SERIES_ID'] = $SERIES_ID;
//echo "<pre>";print_r($data['SERIES_ID']);exit;			 
		   // $this->load->view('exam',$data);	
		 $this->load->view('default/exam',$data);
				
		}
			
		}
		else
		{
			echo "<h4> <center>You Dont Have permission for this this..!!</center></h4>";
			
		}
		

		  
	}
	
	
	public function register()
	{
		
		if ($this->input->post('submit')) 
		 {
			// print_r($_POST);exit;
		 $list=array();
		 $emsg = "";	
		 $EMPLOYEE_ID=trim($this->input->Post('emp_id')," ");
		 $EMPLOYEE_PASSWORD=trim($this->input->Post('emp_pass')," ");
		 $emp_mob=trim($this->input->Post('emp_mob')," ");
		 $emp_name=trim($this->input->Post('emp_name')," ");
		 $emp_division=trim($this->input->Post('emp_division')," ");
		 $emp_dept=trim($this->input->Post('emp_dept')," ");
		if(!isset($EMPLOYEE_ID) || strlen($EMPLOYEE_ID)<=0)
		{
			 $emsg = $emsg . " EMPLOYEE_ID ";
		}			
		
		if(!isset($EMPLOYEE_PASSWORD) || strlen($EMPLOYEE_PASSWORD)<=0)
		{
			 $emsg = $emsg . " EMPLOYEE_PASSWORD ";
		}		
		
		if(!isset($emp_mob) || strlen($emp_mob)<=0)
		{
			 $emsg = $emsg . " EMPLOYEE_Mobile ";
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
						$where1 = array('AUTH_EMPCODE'=>$EMPLOYEE_ID);
						$auth_emp=$this->CRUD->GetRecordByID('auth_user', $where1);
						if($auth_emp)
						{
						
							
			  $users_data = $this->User_model->ValidateUser($EMPLOYEE_ID); 			  
			  if($users_data)
			  {

				$where = array('RE_EMPLOYEED_ID'=>$EMPLOYEE_ID);
				$EMP_EXIST=$this->CRUD->GetRecordByID('reigistered_employee', $where);
				if(!$EMP_EXIST)
				{
				$employee_register = array
				(
				'RE_NAME'=>$emp_name,														
				'RE_EMPLOYEED_ID'=>$EMPLOYEE_ID,														
				'RE_PASSWORD'=>$EMPLOYEE_PASSWORD,														
				'RE_MOBILE_NUMBER'=>$emp_mob,													
				'RE_DIVISION'=>$emp_division,	
                'RE_DIVISION_ID'=>$users_data[0]->DIVISION_ID,						
				'RE_DESIGNATION'=>$emp_dept,														
				'RE_STATUS'=>1,																											
				'RE_CREATED_TS	'=>date('Y-m-d h:i:s'),																											
				'RE_UPDATED_TS'=>date('Y-m-d h:i:s')
				);	

				$reigistered_employee_ID=$this->CRUD->insertData('reigistered_employee', $employee_register);


				$message = array(
				'status' => 1,   
				'message' => "Successfully Logged in",              
				'result' => array()  ); 
				
				$this->session->set_userdata('EMPLOYEE_ID',$EMPLOYEE_ID);
				$this->session->set_userdata('EMPLOYEE_NAME',$emp_name);
				$this->session->set_userdata('DIVISION_ID',$users_data[0]->DIVISION_ID);
				}
				else
				{
				$message = array(
				'status' => 0,   
				'message' => "Already Your Employee ID is registered with US.Please go Throught Login..!!",              
				'result' => array()  ); 

				}
			/* 	$this->session->set_userdata('EMPLOYEE_ID',$EMPLOYEE_ID);
				$this->session->set_userdata('EMPLOYEE_NAME',$emp_name);
				$this->session->set_userdata('DIVISION_ID',$users_data[0]->DIVISION_ID); */

				}
				else
				{

				$message = array(
				'status' => 0,   
				'message' => "Invalid Employee ID",              
				'result' => array()  ); 

				}
						}
						else
						{
							$message = array(
                'status' => 0,   
				'message' => "This employee is not authorised for this exam",              
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
	
	
	    public function getEmployeeData() {
        //$empid = $this->input->post('employee_code');
        $empid = '11546';
        $postdata = http_build_query(array('employee_code' => $empid));
        $opts = array('http' => array('method' => 'POST', 'header' => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata));
        $context = stream_context_create($opts);
        $result = file_get_contents('http://androidapp.heterohcl.com/Appraisal/rest/EmployeeCompleteDetails', false, $context);
        $json = json_decode($result, true);
      //  print_r($json);
        if(sizeof($json)>0){
             $data = array('status'=>1,'result'=>$json,'message'=>'Employee details found');
           //  return $data;
         }else{
            $data = array('status'=>2,'message'=>'Employee details not found');
           //  return $data;
         }
         echo json_encode($data);
       
    }
	
		public function postdata()
	{
		echo $this->input->Post('14');
		if ($this->input->Post('submit')) 
		{
					print_r($_POST);
		}
		else
		{
			echo "else";
		}
	}
	
		 public function Sfalogin()
    {  
	    $emsg = "";			
		$employee_id=$this->input->post('employee_code');		
		  $reqData = array(            
            'EMPLOYEE_ID' => $employee_id        
        );
		
		if(!isset($employee_id) || strlen($employee_id)<=0)
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
			
			//$users_data = new stdClass();
				$users_data = $this->User_model->remoteLogin($reqData);            
          //  $resData['EMPLOYEE_DETAILS'] = $users_data; 
           //print_r($resData);	exit;
   
        
        if (is_array($users_data) && !empty($users_data)) 
		{            
            $message = array(                
                'status' => 1,                
                'result' => $users_data,                
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
	//	echo "<pre>";
		//echo $message['result']['EMPLOYEE_DETAILS'][0]->EMPLOYEE_NAME;
		 echo json_encode($message);
 //$output = $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
       // return $output;	
		
		
		
        //$this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code            
        
    }
	
		public function page_starter()
	{	
        $data['questionaries'] = $this->User_model->questionaries();		
		$this->load->view('default/exam',$data);
	}	

	public function form_elements()
	{	
         //$data['questionaries'] = $this->User_model->questionaries();		
		$this->load->view('default/form-elements');
	}	
	
	public function model()
	{	
         //$data['questionaries'] = $this->User_model->questionaries();		
		$this->load->view('default/ui-modals');
	}	
	
	public function Exam_result()
	{	
			if(!$this->session->userdata('EMPLOYEE_ID'))
			{
				redirect('/Employee/login');
			}
	     $EMPLOYEE_ID=$this->session->userdata('EMPLOYEE_ID');
        $data['Exam_result'] = $this->User_model->Exam_result($EMPLOYEE_ID);	
        $data['exam_status'] = $this->User_model->CheckGivenExam($EMPLOYEE_ID);	
        $data['ExamReport'] = $this->User_model->ExamReport($EMPLOYEE_ID);	
        // echo "<pre>";print_r($data);	exit;	
       $this->load->view('default/Exam_result',$data);
	}
	
		public function Exam_report()
	{
		
          $data['Exam_result'] = $this->User_model->exam_report();
		  //print_r($data['Exam_result']);exit;
          $data['result_by_category'] = $this->User_model->result_by_category();
          $data['last_exam'] = $this->User_model->last_exam();
		  $this->load->view('default/view_result',$data);
      // echo"<pre>";  print_r($data);
	}
	
	  function logout()
	{
	     if(!$this->session->userdata('EMPLOYEE_ID'))
			{
				redirect('/Employee/login');
			}
				
		$this->session->unset_userdata('EMPLOYEE_ID');
		$this->session->unset_userdata('EMPLOYEE_NAME');
		$this->session->unset_userdata('DIVISION_ID');
		$this->session->sess_destroy();
		redirect('/Employee/login','refresh');
	}

	
	public function tutorial_series()
	{
		//exit;
			if(!$this->session->userdata('EMPLOYEE_ID'))
			{
				redirect('/Employee/login');
			}
        $data['tutorial_series'] = $this->User_model->tutorial_series();		
		$this->load->view('default/tutorial_series',$data);
	}	
	
	public function exam_series()
	{	
			if(!$this->session->userdata('EMPLOYEE_ID'))
			{
				redirect('/Employee/login');
			}
        $data['exam_series'] = $this->User_model->exam_series();		
	//	echo "<pre>";print_r($data);exit;
		$this->load->view('default/exam_series',$data);
	}
	
	public function tutorial()
	{
		
/* 	   if($_POST) 
		{
			$list=array();
		 $emsg = "";	
		 $EMPLOYEE_ID=trim($this->input->Post('EMPLOYEE_ID')," ");
		 $SERIES_ID=trim($this->input->Post('SERIES_ID')," ");
		if(!isset($EMPLOYEE_ID) || strlen($EMPLOYEE_ID)<=0)
		{
			 $emsg = $emsg . " EMPLOYEE_ID ";
		}	
		if(!isset($SERIES_ID) || strlen($SERIES_ID)<=0)
		{
			 $emsg = $emsg . " SERIES_ID ";
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
			
		}
		
		} */
				if(!$this->session->userdata('EMPLOYEE_ID'))
			{
				redirect('/Employee/login');
			}
		
        if($_POST)
		{
	    $SERIES_ID=trim($this->input->Post('SERIES_ID')," ");
        $data['tutorial'] = $this->User_model->tutorial($SERIES_ID);		
		$this->load->view('default/tutorial',$data);
		}
		else
		{
		
	    $data['activeseries'] = $this->User_model->activeseries();	
        $SERIES_ID=$data['activeseries'][0]->SERIES_ID;		
	    $data['tutorial'] = $this->User_model->tutorial($SERIES_ID);
     //   echo"<pre>"; print_r();		
		$this->load->view('default/tutorial',$data);

		}	 
       
	}
	
		public function tabs()
	{	
        $data['tutorial'] = $this->User_model->tutorial();		
		$this->load->view('default/ui-tabs',$data);
	}		

	
	
		public function wizard()
	{
		if(!$this->session->userdata('EMPLOYEE_ID'))
			{
				redirect('/Employee/login');
			}
			//$SERIES_ID=$this->uri->segment(3)
         $SERIES_ID=trim($this->input->Post('SERIES_ID')," ");;     
        if($SERIES_ID)
		{ 
		if($_POST['questions']) 
		{
         
		 $list=array();
		 $emsg = "";	
		 $EMPLOYEE_ID=$this->session->userdata('EMPLOYEE_ID');     
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
			
			$data1=$_POST;	
//print_r($data1);exit;			
		    $where = array('RESULT_SERIES_ID'=>$SERIES_ID,'RESULT_EMPLOYEE_ID'=>$EMPLOYEE_ID,'RESULT_CREATED_TS  BETWEEN CURDATE() - INTERVAL 15 DAY AND CURDATE()');
						$series_exist=$this->CRUD->GetRecordByID('employee_results', $where);
						if(!$series_exist)
						{
							
							  //echo"<pre>";  print_r($_POST);exit;	
							
							$total_questions=count($data1['questions']);
							$exam_result_status = array
(
'RESULT_EMPLOYEE_ID'=>$EMPLOYEE_ID,														
'RESULT_DATE'=>date('Y-m-d h:i:s'),																			
'RESULT_SERIES_ID'=>$SERIES_ID,																			
'RESULT_TOTAL'=>$total_questions,
'RESULT_SCORE'=>0,																								
'RESULT_STATUS'=>1,																							
'RESULT_UPDATED_TS'=>date('Y-m-d h:i:s'),														
'RESULT_CREATED_ID'=>$EMPLOYEE_ID,														
'RESULT_UPDATED_ID'=>$EMPLOYEE_ID,	
'RESULT_CREATED_TS'=>date('Y-m-d h:i:s')
);	
//echo "<pre>";print_r($exam_result_status);exit;
	if($exam_result_ID=$this->CRUD->insertData('employee_results', $exam_result_status))
	{
           
        $check_answer_count = 0;
           foreach ($data1['questions'] as $questions) 
			{
                     $value = $data1[$questions];
					//echo "<br>";
					if($value)
					{
											$exam_result_details_data = array ( 
									 'RESULT_DETAIL_RESULT_ID'=>$exam_result_ID,	
									 'RESULT_DETAIL_DATE'=>date('Y-m-d h:i:s'),
									 'RESULT_DETAIL_QUESTION_ID'=>$questions,
									 'RESULT_DETAIL_OPTION_ID'=>$value,
									// 'RESULT_DETAIL_ANSWER_ID'=>$data1[$questions],
									 'RESULT_DETAIL_STATUS'=>1,
									 'RESULT_DETAIL_CREATED_TS'=>date('Y-m-d h:i:s'),
									 'RESULT_DETAIL_UPDATED_TS'=>date('Y-m-d h:i:s'),
									 'RESULT_DETAIL_CREATED_ID'=>$EMPLOYEE_ID,
									 'RESULT_DETAIL_UPDATED_ID'=>$EMPLOYEE_ID,



									 );
                         $exam_result_details_ID= $this->CRUD->insertData('employee_result_details', $exam_result_details_data); 
						
					}
					else
					{
						
					}

						 
		            	$where = array('QUESTION_ID'=>$questions,'QUESTION_ANSWER_ID'=>$value);
						if($this->CRUD->GetRecordByID('questionnaire', $where))
						{						 
						   $check_answer_count = $check_answer_count + 1;
						}

						 
            }
			 // print_r($data1['questions']);exit;   
$percentage = $check_answer_count;
$totalWidth = $total_questions;

$new_width = ( $percentage / $totalWidth ) * 100;
			
		  	$update_score = array(
								'RESULT_SCORE'=>$check_answer_count,	
								'RESULT_PERCENTAGE'=>$new_width	
														
								);
		$where = array('RESULT_SERIES_ID'=>$SERIES_ID,'RESULT_EMPLOYEE_ID'=>$EMPLOYEE_ID);					$UPDATE=$this->CRUD->updateData('employee_results',$update_score, $where);
			
				$message = array(
						'status' => 1,   
						'message' => "Successfully Submitted",              
						'result' => array()  ); 
						
						$this->session->unset_userdata('EXAM_TIMER');

	}
	else
	{
			$message = array(
						'status' => 0,   
						'message' => "Failed to Submit",              
						'result' => array()  ); 
		
	}

						}
						else
						{
							
								$message = array(
						'status' => 0,   
						'message' => "Already Submitted",              
						'result' => array()  ); 

						}	
							
			
		}

						echo json_encode($message);
		}
		else			
		{
			// $SERIES_ID=$this->uri->segment(3);
			//print_r($this->User_model->CheckGivenExam($EMPLOYEE_ID));exit;
			// $data['exam_status_1'] = $this->User_model->CheckGivenExam($this->session->userdata('EMPLOYEE_ID'));
			
			
			// $data['questionaries'] = $this->User_model->questionaries($SERIES_ID);
			 $data['questionaries'] = array_merge($this->User_model->questionaries($SERIES_ID),$this->User_model->questionaries_cat2($SERIES_ID),$this->User_model->questionaries_cat3($SERIES_ID));
			 //$data['questionaries_cat2'] = ;
			 $data['SERIES_ID'] = $SERIES_ID;
           //  echo "<pre>";print_r($data['questionaries']);
           //  echo "<pre>";print_r($data['questionaries_cat2']);
			 
			 
			// exit;			 
		   // $this->load->view('exam',$data);	
	 $this->load->view('default/exam_wizard',$data);
				
		}
			
		}
		else
		{
			echo "<h4> <center>You Dont Have permission for this this..!!</center></h4>";
			
		}
		

		  
	}
	
	
		public function test()
	{	

		//$this->load->view('default/Tutorials/ad/addview.php');
		//$this->load->view('default/Tutorials/allergy/allergy.php');
		//$this->load->view('default/Tutorials/anti-allergy/anti-allery.php');
	    //$this->load->view('default/Tutorials/ad.php');
		//$this->load->view('default/Tutorials/digestive.php');
		$this->load->view('default/Tutorials/pantin.php');
	}
	
	
	
	
	
	
	
/*     function logout()
	{
		$this->session->unset_userdata('ADMIN_ID');
		$this->session->unset_userdata('ADMIN_NAME');
		$this->session->unset_userdata('ADMIN_EMAIL');
		$this->session->unset_userdata('EXAM_TIMER');
		$this->session->sess_destroy();
		redirect('/Employeelogin/login','refresh');
	} */
	
}
