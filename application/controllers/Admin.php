<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
   function __construct()
    {
         parent::__construct();
         $this->load->model('Admin_model','Admin_model');
         $this->load->model('User_model','User_model');
         $this->load->model('CRUD','CRUD');
		 $this->load->library('encryption');
    }
	
	
	public function index()
	{	
	 if(!$this->session->userdata('ADMIN_ID'))
			{
				redirect('/Admin/adminlogin');
			}
					    $data['questionnaire']=$this->User_model->table_count('questionnaire');
		   $data['question_options']=$this->User_model->table_count('question_options');
		   $data['reigistered_employee']=$this->User_model->table_count('reigistered_employee');
		   $data['tutorials']=$this->User_model->table_count('tutorials');
		   $data['tutorial_series']=$this->User_model->table_count('tutorial_series');
		   $data['employee_results']=$this->User_model->table_count('employee_results');
			//print_r($data);
		$this->load->view('Admin/index',$data);		
	}
		public function adminlogin()
	{	
		//$this->load->view('Admin/login');		
				if ($this->input->post('submit')) 
		 {
			// 	print_r($_POST);
			//	exit
			 
		 $list=array();
		 $emsg = "";	
		 $admin_email=trim($this->input->Post('admin_email')," ");
		 $admin_pass=trim($this->input->Post('admin_pass')," ");
		if(!isset($admin_email) || strlen($admin_email)<=0)
		{
			 $emsg = $emsg . " admin_email ";
		}		
		if(!isset($admin_pass) || strlen($admin_pass)<=0)
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
						$where = array('ADMIN_EMAIL'=>$admin_email,'ADMIN_PASSWORD'=>md5($admin_pass));
						$admin_exist=$this->CRUD->GetRecordByID('admin_login', $where);
						if($admin_exist)
						{
						
				 
				  $this->session->set_userdata('ADMIN_ID',$admin_exist[0]->ADMIN_ID);
				  $this->session->set_userdata('ADMIN_NAME',$admin_exist[0]->ADMIN_NAME);
				  $this->session->set_userdata('ADMIN_EMAIL',$admin_exist[0]->ADMIN_EMAIL); 
				  
							
							$message = array(
                'status' => 1,   
				'message' => "Successfully Logged in",              
                'result' => array()  ); 
							
						}
						else
						{
							$message = array(
                'status' => 0,   
				'message' => "Invalid Admin Email Or Password ",              
                'result' => array()  ); 
							
						}
			
		}

						echo json_encode($message);
			
		 }
		 else
		 {		
			$this->load->view('Admin/login');
		 }
	}
	
	
		  function admin_logout()
	{

	    $this->session->unset_userdata('ADMIN_ID');
		$this->session->unset_userdata('ADMIN_NAME');
		$this->session->unset_userdata('ADMIN_EMAIL');
		$this->session->sess_destroy();
		redirect('/Admin/adminlogin','refresh');

	}
	

		public function tutorial_list()
	{
		 if(!$this->session->userdata('ADMIN_ID'))
			{
				redirect('/Admin/adminlogin');
			}
		
        $data['tutorial_list'] = $this->Admin_model->tutorial_list();		
		$this->load->view('Admin/tutoriallist',$data);		
	}

    public function add_tutorial()
	{
		 if(!$this->session->userdata('ADMIN_ID'))
			{
				redirect('/Admin/adminlogin');
			}
	  
	  	if($this->input->post('submit')) 
		 {
		 $list=array();
		 $emsg = "";	
		 $TUTORIAL_TITLE=trim($this->input->Post('TUTORIAL_TITLE')," ");
		 $TUTORIAL_DESC=trim($this->input->Post('TUTORIAL_DESC')," ");
		 $TUTORIAL_SERIES_ID=trim($this->input->Post('TUTORIAL_SERIES_ID')," ");
		if(!isset($TUTORIAL_TITLE) || strlen($TUTORIAL_TITLE)<=0)
		{
			 $emsg = $emsg . " TUTORIAL_TITLE ";
		}	
		if(!isset($TUTORIAL_DESC) || strlen($TUTORIAL_DESC)<=0)
		{
			 $emsg = $emsg . " TUTORIAL_DESC ";
		}			
		if(!isset($TUTORIAL_SERIES_ID) || strlen($TUTORIAL_SERIES_ID)<=0)
		{
			 $emsg = $emsg . " TUTORIAL_SERIES_ID ";
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
				$where = array('TUTORIAL_TITLE'=>$TUTORIAL_TITLE,'TUTORIAL_SERIES_ID'=>$TUTORIAL_SERIES_ID);
						$TUTORIAL_EXIST=$this->CRUD->GetRecordByID('tutorials', $where);
						if(!$TUTORIAL_EXIST)
						{							
							$ins_series = array
							(														
							'TUTORIAL_TITLE'=>$TUTORIAL_TITLE,														
							'TUTORIAL_DESC'=>$TUTORIAL_DESC,														
							'TUTORIAL_SERIES_ID'=>$TUTORIAL_SERIES_ID,													
							'TUTORIAL_STATUS'=>1,														
							'TUTORIAL_CREATED_ID'=>1,														
							'TUTORIAL_CREATED_TS'=>date('Y-m-d h:i:s'),														
							'TUTORIAL_UPDATED_ID'=>1,														
							'TUTORIAL_UPDATED_TS'=>date('Y-m-d h:i:s')
							);	
														
	               	 $ins_activity_id=$this->CRUD->insertData('tutorials', $ins_series);
							
							
							
							$message = array(
                'status' => 1,   
				'message' => "Series Added Successfully",              
                'result' => array()  ); 
							
						}
						else
						{
					$message = array(
                'status' => 0,   
				'message' => "Series Name With Date Already Exist..! ",              
                'result' => array()  ); 
							
						}
		
		}
	      echo  json_encode($message);
		
		 }
		 else
		 {
			$this->load->view('Admin/add_tutorial');		 
		 }		
	}
	
	
	    public function edit_tutorial()
	{
		 if(!$this->session->userdata('ADMIN_ID'))
			{
				redirect('/Admin/adminlogin');
			}
	  
	  	if($this->input->post('update')) 
		 {
			 
		 $list=array();
		 $emsg = "";	
		 $TUTORIAL_TITLE=trim($this->input->Post('TUTORIAL_TITLE')," ");
		 $TUTORIAL_DESC=trim($this->input->Post('TUTORIAL_DESC')," ");
		 $TUTORIAL_SERIES_ID=trim($this->input->Post('TUTORIAL_SERIES_ID')," ");
		if(!isset($TUTORIAL_TITLE) || strlen($TUTORIAL_TITLE)<=0)
		{
			 $emsg = $emsg . " TUTORIAL_TITLE ";
		}	
		if(!isset($TUTORIAL_DESC) || strlen($TUTORIAL_DESC)<=0)
		{
			 $emsg = $emsg . " TUTORIAL_DESC ";
		}			
		if(!isset($TUTORIAL_SERIES_ID) || strlen($TUTORIAL_SERIES_ID)<=0)
		{
			 $emsg = $emsg . " TUTORIAL_SERIES_ID ";
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
			
				//$where = array('TUTORIAL_TITLE'=>$TUTORIAL_TITLE,'TUTORIAL_SERIES_ID'=>$TUTORIAL_SERIES_ID);
			
					   $where = array('TUTORIAL_ID'=> $this->uri->segment(3));	
						$TUTORIAL_EXIST=$this->CRUD->GetRecordByID('tutorials', $where);
						//print_r($_POST);exit;
						if($TUTORIAL_EXIST)
						{							
							$update_tutorial = array
							(														
							'TUTORIAL_TITLE'=>$TUTORIAL_TITLE,														
							'TUTORIAL_DESC'=>$TUTORIAL_DESC,														
							'TUTORIAL_SERIES_ID'=>$TUTORIAL_SERIES_ID,														
							'TUTORIAL_UPDATED_TS'=>date('Y-m-d h:i:s')
							);	
														
	             //  	 $ins_activity_id=$this->CRUD->insertData('tutorials', $ins_series);
					$where = array('TUTORIAL_ID'=>$this->uri->segment(3));	
		           $UPDATE=$this->CRUD->updateData('tutorials',$update_tutorial, $where);
							
							
							$message = array(
                'status' => 1,   
				'message' => "Tutorial Updated Successfully",              
                'result' => array()  ); 
							
						}
						else
						{
					$message = array(
                'status' => 0,   
				'message' => "Tutorial Name With Series Already Exist..! ",              
                'result' => array()  ); 
							
						}
		
		}
	      echo  json_encode($message);
		
		 }
		 else
		 {
			 $tutorial_id1= $this->uri->segment(3);
			 $where ='TUTORIAL_ID='.$tutorial_id1;
			 $data['tutorial_list'] = $this->Admin_model->edittutorial_list($where);	
			 $data['tutorial_id1'] = $tutorial_id1;	
			 $this->load->view('Admin/edit_tutorial',$data);		 
		 }		
	}
	

	    public function GetAllSeries()
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
			$list=$this->Admin_model->GetAllSeries();
			if($list)
			{
				$message = array(
                'status' => 1,   
				'message' => 'Get All Series List'  ,              
                'result' => $list               
                             
            );      
			}
			else
			{
				$message = array(
								'status' => 2,   
								'message' => 'NO  Series Available'  ,              
								'result' => array()               
                             
            );  				
			}	
			
			
		}
	   	   	echo json_encode($message);
    }	
	

	public function series_list()
	{

        $data['series_list'] = $this->Admin_model->series_list();		
		$this->load->view('Admin/serieslist',$data);		
	}		
	
	public function add_series()
	{
		 if(!$this->session->userdata('ADMIN_ID'))
			{
				redirect('/Admin/adminlogin');
			}
	  
	  	if($this->input->post('submit')) 
		 {
		 $list=array();
		 $emsg = "";	
		 $SERIES_TITLE=trim($this->input->Post('SERIES_TITLE')," ");
		 $SERIES_DESC=trim($this->input->Post('SERIES_DESC')," ");
		 $START_DATE=trim($this->input->Post('START_DATE')," ");
		 $END_DATE=trim($this->input->Post('END_DATE')," ");
		if(!isset($SERIES_TITLE) || strlen($SERIES_TITLE)<=0)
		{
			 $emsg = $emsg . " SERIES_TITLE ";
		}	
		if(!isset($SERIES_DESC) || strlen($SERIES_DESC)<=0)
		{
			 $emsg = $emsg . " SERIES_DESC ";
		}			
		if(!isset($START_DATE) || strlen($START_DATE)<=0)
		{
			 $emsg = $emsg . " START_DATE ";
		}		
		if(!isset($END_DATE) || strlen($END_DATE)<=0)
		{
			 $emsg = $emsg . " END_DATE ";
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
				$where = array('SERIES_TITLE'=>$SERIES_TITLE,'SERIES_START_DATE'=>$START_DATE,'SERIES_END_DATE'=>$END_DATE);
						$SERIES_EXIST=$this->CRUD->GetRecordByID('tutorial_series', $where);
						if(!$SERIES_EXIST)
						{							
							$ins_series = array
							(
							'SERIES_ACTIVE_FLAG'=>0,														
							'SERIES_TITLE'=>$SERIES_TITLE,														
							'SERIES_DESC'=>$SERIES_DESC,														
							'SERIES_START_DATE'=>$START_DATE,														
							'SERIES_END_DATE'=>$END_DATE,														
							'SERIES_STATUS'=>1,														
							'SERIES_CREATED_ID'=>1,														
							'SERIES_CREATED_TS'=>date('Y-m-d h:i:s'),														
							'SERIES__UPDATED_ID'=>1,														
							'SERIES_UPDATED_TS'=>date('Y-m-d h:i:s')
							);	
														
		 $ins_activity_id=$this->CRUD->insertData('tutorial_series', $ins_series);
							
							
							
							$message = array(
                'status' => 1,   
				'message' => "Series Added Successfully",              
                'result' => array()  ); 
							
						}
						else
						{
					$message = array(
                'status' => 0,   
				'message' => "Series Name With Date Already Exist..! ",              
                'result' => array()  ); 
							
						}
		
		}
	      echo  json_encode($message);
		
		 }
		 else
		 {
			$this->load->view('Admin/add_series');		 
		 }		
	}	
	
	
	public function edit_series()
	{
		 if(!$this->session->userdata('ADMIN_ID'))
			{
				redirect('/Admin/adminlogin');
			}
	  
	  	if($this->input->post('update')) 
		 {
		 $list=array();
		 $emsg = "";	
		 $SERIES_ID=$this->uri->segment(3);
		 $SERIES_TITLE=trim($this->input->Post('SERIES_TITLE')," ");
		 $SERIES_DESC=trim($this->input->Post('SERIES_DESC')," ");
		 $START_DATE=trim($this->input->Post('START_DATE')," ");
		 $END_DATE=trim($this->input->Post('END_DATE')," ");
		if(!isset($SERIES_TITLE) || strlen($SERIES_TITLE)<=0)
		{
			 $emsg = $emsg . " SERIES_TITLE ";
		}	
		if(!isset($SERIES_DESC) || strlen($SERIES_DESC)<=0)
		{
			 $emsg = $emsg . " SERIES_DESC ";
		}			
		if(!isset($START_DATE) || strlen($START_DATE)<=0)
		{
			 $emsg = $emsg . " START_DATE ";
		}		
		if(!isset($END_DATE) || strlen($END_DATE)<=0)
		{
			 $emsg = $emsg . " END_DATE ";
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
				        $where = array('SERIES_ID'=>$SERIES_ID);
						$SERIES_EXIST=$this->CRUD->GetRecordByID('tutorial_series', $where);
						if($SERIES_EXIST)
						{

				        $where_1 = array('SERIES_TITLE'=>$SERIES_TITLE,'SERIES_START_DATE'=>$START_DATE,'SERIES_END_DATE'=>$END_DATE);
						if(!$this->CRUD->GetRecordByID('tutorial_series', $where_1))
						{
						$update_series = array
							(
							'SERIES_ACTIVE_FLAG'=>1,														
							'SERIES_TITLE'=>$SERIES_TITLE,														
							'SERIES_DESC'=>$SERIES_DESC,														
							'SERIES_START_DATE'=>$START_DATE,														
							'SERIES_END_DATE'=>$END_DATE,													
							'SERIES__UPDATED_ID'=>1,														
							'SERIES_UPDATED_TS'=>date('Y-m-d h:i:s')
							);	
						
		$where = array('SERIES_ID'=>$SERIES_ID);	
		$UPDATE=$this->CRUD->updateData('tutorial_series',$update_series, $where);
		
								$message = array(
                'status' => 1,   
				'message' => "Series Updated Successfully",              
                'result' => array()  ); 
							
						}
						else
						{
					$message = array(
                'status' => 0,   
				'message' => "Series Title Already Exist with date ",              
                'result' => array()  ); 
							
						}
						

 
							
							
							
	
							
						}
						else
						{
					$message = array(
                'status' => 0,   
				'message' => "Invalid Series ID ",              
                'result' => array()  ); 
							
						}
		
		}
	      echo  json_encode($message);
		
		 }
		 else
		 {
			 $series_id= $this->uri->segment(3);
			 $where ='SERIES_ID='.$series_id;
			 $data['series_list'] = $this->Admin_model->editseries_list($where);	
			 $data['series_id'] = $series_id;	
             $this->load->view('admin/edit_series',$data);		 
		 }		
	}	
	
	public function delete_series()
	{
		 if(!$this->session->userdata('ADMIN_ID'))
			{
				redirect('/Admin/adminlogin');
			}
             $delete_id=$this->uri->segment(3);	
			 $where = array('SERIES_ID'=>$delete_id);	
		   if($this->CRUD->deleteData('tutorial_series',$where))
		   {			  
			  $this->session->set_flashdata('series_message','Series Deleted Successfully');
		   }
		   else
		   {
				$this->session->set_flashdata('series_message','Failed to Delete Series');
		   }
		   redirect('/admin/series_list');exit;
			
	}

	
	
	public function employee_list()
	{
		 if(!$this->session->userdata('ADMIN_ID'))
			{
				redirect('/Admin/adminlogin');
			}
        $data['employee_list'] = $this->Admin_model->employee_list();		
		$this->load->view('Admin/employeelist',$data);		
	}
	
		public function result()
	{
		 if(!$this->session->userdata('ADMIN_ID'))
			{
				redirect('/Admin/adminlogin');
			}
			
        $data['result_by_category'] = $this->User_model->result_by_category();
        $data['employee_list'] = $this->Admin_model->result();	
   //  echo "<pre>";print_r($data);exit;		
		$this->load->view('Admin/result',$data);		
	}

	public function question_list()
	{
		 if(!$this->session->userdata('ADMIN_ID'))
			{
				redirect('/Admin/adminlogin');
			}
        $data['question_list'] = $this->Admin_model->question_list();	
        //echo"<pre>"; print_r($data['question_list']);		
		$this->load->view('Admin/questionlist',$data);		
	}
	
	
	    public function add_questions()
	{
		 if(!$this->session->userdata('ADMIN_ID'))
			{
				redirect('/Admin/adminlogin');
			}
	  
	  	if($this->input->post('submit')) 
		 {
		 $list=array();
		 $emsg = "";	
		 $TUTORIAL_SERIES_ID=trim($this->input->Post('TUTORIAL_SERIES_ID')," ");
		 $QUESTION=trim($this->input->Post('QUESTION')," ");
		 $OPT_A=trim($this->input->Post('OPT_A')," ");
		 $OPT_B=trim($this->input->Post('OPT_B')," ");
		 $OPT_C=trim($this->input->Post('OPT_C')," ");
		 $OPT_D=trim($this->input->Post('OPT_D')," ");
		 $ANSWER_OPTION=trim($this->input->Post('ANSWER_OPTION')," ");
		 
	
		 
		 
		if(!isset($QUESTION) || strlen($QUESTION)<=0)
		{
			 $emsg = $emsg . " QUESTION ";
		}	
		if(!isset($OPT_A) || strlen($OPT_A)<=0)
		{
			 $emsg = $emsg . " OPT_A ";
		}		
		if(!isset($OPT_B) || strlen($OPT_B)<=0)
		{
			 $emsg = $emsg . " OPT_B ";
		}		
		if(!isset($OPT_C) || strlen($OPT_C)<=0)
		{
			 $emsg = $emsg . " OPT_C ";
		}	
		if(!isset($OPT_D) || strlen($OPT_D)<=0)
		{
			 $emsg = $emsg . " OPT_D ";
		}		
		if(!isset($ANSWER_OPTION) || strlen($ANSWER_OPTION)<=0)
		{
			 $emsg = $emsg . " ANSWER_OPTION ";
		}			
		if(!isset($TUTORIAL_SERIES_ID) || strlen($TUTORIAL_SERIES_ID)<=0)
		{
			 $emsg = $emsg . " TUTORIAL_SERIES_ID ";
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
				$where = array('QUESTION_TEXT'=>$QUESTION,'QUESTION_SERIES_ID'=>$TUTORIAL_SERIES_ID);
						$TUTORIAL_EXIST=$this->CRUD->GetRecordByID('questionnaire', $where);
						if(!$TUTORIAL_EXIST)
						{			
							$ins_question = array
							(																		
							'QUESTION_TEXT'=>$QUESTION,														
							'QUESTION_SERIES_ID'=>$TUTORIAL_SERIES_ID,													
							'QUESTION_STATUS'=>1,														
							'QUESTION_ANSWER_ID'=>0,														
							'QUESTION_CREATED_ID'=>1,														
							'QUESTION_CREATED_TS'=>date('Y-m-d h:i:s'),														
							'QUESTION_UPDATED_ID'=>1,														
							'QUESTION_UPDATED_TS'=>date('Y-m-d h:i:s')
							);	
														
	             	if($ins_question_id=$this->CRUD->insertData('questionnaire', $ins_question))
					{
						$ins_opt1 = array
							(																		
							'QUESTION_ID'=>$ins_question_id,														
							'OPTION_POSITION'=>1,													
							'QUE_OPTION_TEXT'=>$OPT_A,														
							'QUE_OPTION_STATUS'=>1,														
							'QUE_OPTION_CREATED_ID'=>1,														
							'QUE_OPTION_CREATED_TIME'=>date('Y-m-d h:i:s'),													
							'QUE_OPTION_UPDATED_ID'=>1,														
							'QUE_OPTION_UPDATED_TIME'=>date('Y-m-d h:i:s')
							);
						$this->CRUD->insertData('question_options', $ins_opt1);
						
						$ins_opt2 = array
							(																		
							'QUESTION_ID'=>$ins_question_id,														
							'OPTION_POSITION'=>2,													
							'QUE_OPTION_TEXT'=>$OPT_B,														
							'QUE_OPTION_STATUS'=>1,														
							'QUE_OPTION_CREATED_ID'=>1,														
							'QUE_OPTION_CREATED_TIME'=>date('Y-m-d h:i:s'),													
							'QUE_OPTION_UPDATED_ID'=>1,														
							'QUE_OPTION_UPDATED_TIME'=>date('Y-m-d h:i:s')
							);
						$this->CRUD->insertData('question_options', $ins_opt2);
						
						$ins_opt3 = array
							(																		
							'QUESTION_ID'=>$ins_question_id,														
							'OPTION_POSITION'=>3,													
							'QUE_OPTION_TEXT'=>$OPT_C,														
							'QUE_OPTION_STATUS'=>1,														
							'QUE_OPTION_CREATED_ID'=>1,														
							'QUE_OPTION_CREATED_TIME'=>date('Y-m-d h:i:s'),													
							'QUE_OPTION_UPDATED_ID'=>1,														
							'QUE_OPTION_UPDATED_TIME'=>date('Y-m-d h:i:s')
							);
						$this->CRUD->insertData('question_options', $ins_opt3);
						
						$ins_opt4 = array
							(																		
							'QUESTION_ID'=>$ins_question_id,														
							'OPTION_POSITION'=>4,													
							'QUE_OPTION_TEXT'=>$OPT_D,														
							'QUE_OPTION_STATUS'=>1,														
							'QUE_OPTION_CREATED_ID'=>1,														
							'QUE_OPTION_CREATED_TIME'=>date('Y-m-d h:i:s'),													
							'QUE_OPTION_UPDATED_ID'=>1,														
							'QUE_OPTION_UPDATED_TIME'=>date('Y-m-d h:i:s')
							);
						$this->CRUD->insertData('question_options', $ins_opt4);
						
							$OPT_TEXT=trim($this->input->Post($ANSWER_OPTION)," ");
		 
						
						$where = array('QUE_OPTION_TEXT'=>$OPT_TEXT,'QUESTION_ID'=>$ins_question_id);
						$get_answer_option_id=$this->CRUD->GetRecordByID('question_options', $where); 
			
						
							$update_ANSWERID = array
							(
							   'QUESTION_ANSWER_ID'=>$get_answer_option_id[0]->QUE_OPTION_ID
							);	
						
		$where = array('QUESTION_ID'=>$ins_question_id);	
		$this->CRUD->updateData('questionnaire',$update_ANSWERID, $where);
						
												
							$message = array(
                'status' => 1,   
				'message' => "Series Added Successfully",              
                'result' => array()  ); 
						
					}
					else
					{
						
													
							$message = array(
                'status' => 0,   
				'message' => "Failed To Insert",              
                'result' => array()  ); 
						
					}
					 
					 
							
							

							
						}
						else
						{
					$message = array(
                'status' => 0,   
				'message' => "Series Name With Date Already Exist..! ",              
                'result' => array()  ); 
							
						}
		
		}
	      echo  json_encode($message);
		
		 }
		 else
		 {
			$this->load->view('Admin/add_questions');		 
		 }		
	}
	
	
			public function Exam_report_details()
	{
		
           $data['Exam_result'] = $this->User_model->exam_report();
		  //print_r($data['Exam_result']);exit;
          $data['result_by_category'] = $this->User_model->result_by_category();
          //$data['last_exam'] = $this->User_model->last_exam();
           echo"<pre>";  print_r($data);
	}

			public function result_details()
	{
		   $EMPLOYEE_ID = $this->uri->segment(3);
		    //$EMPLOYEE_ID =205890;
           $data['Exam_result'] = $this->Admin_model->result_details($EMPLOYEE_ID);
		   $this->load->view('Admin/result_details',$data);
          // echo"<pre>";  print_r($data);
	}

	
}
