<?php
Class User_model extends CI_Model {
	var $CI;
    protected $_timestamps = TRUE;
    function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
        $this->CI->load->database('local');
		    $this->CI->load->helper('url');
			     date_default_timezone_set('Asia/Calcutta');
        $this->remote = $this->load->database('remote', true);

    }
	public function table_count($table)
	{				
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{ 		
				return count($query->result());			
		}
		else
		{
			return false;
		}		
	}
	
	    public function remoteLogin($data)
    {
		

		
		    
          //    print_r($reqdata);
		//echo "sdfdsfdsfdsfds";exit;
		 $employee_id=$data['EMPLOYEE_ID'];
		$password=$data['PASSWORD'];
	
		
	 $this->remote->select('A.EMPLOYEE_ID,A.EMPLOYEENAME as EMPLOYEE_NAME,D.DESG_NAME as DESG,E.DIVISON_NAME as DIVISION ,F.HQ,F.REGION, A.MOBILE_NUMBER as MOBILENUMBER');

      //  $this->remote->select('E.DIVISON_NAME,A.MOBILE_NUMBER');
	 /*   "AM": "TEST AM",
            "RM": "TEST RM",
            "SM": "TEST SM" */

        $this->remote->select('A.DIVISION_ID,A.DESG_ID');

        $this->remote->select('IFNULL(G.EMPLOYEE_ID,0) AS AM_EMPID,IFNULL(G.FE_NAME,"NA") AS AM');

        $this->remote->select('IFNULL(H.EMPLOYEE_ID,0) AS SRAM_EMPID,IFNULL(H.FE_NAME,"NA") AS SRAM_NAME');

        $this->remote->select('IFNULL(I.EMPLOYEE_ID,0) AS RM_EMPID,IFNULL(I.FE_NAME,"NA") AS RM');

        $this->remote->select('IFNULL(J.EMPLOYEE_ID,0) AS SRRM_EMPID,IFNULL(J.FE_NAME,"NA") AS SRRM_NAME');

        $this->remote->select('IFNULL(K.EMPLOYEE_ID,0) AS DM_EMPID,IFNULL(K.FE_NAME,"NA") AS DM_NAME');

        $this->remote->select('IFNULL(L.EMPLOYEE_ID,0) AS ZM_EMPID,IFNULL(L.FE_NAME,"NA") AS ZM_NAME');

        $this->remote->select('IFNULL(M.EMPLOYEE_ID,0) AS SM_EMPID,IFNULL(M.FE_NAME,"NA") AS SM');

        $this->remote->select('IFNULL(N.EMPLOYEE_ID,0) AS DGM_EMPID,IFNULL(N.FE_NAME,"NA") AS DGM_NAME');

        $this->remote->select('IFNULL(O.EMPLOYEE_ID,0) AS PMT_EMPID,IFNULL(O.FE_NAME,"NA") AS PMT_NAME');

        $this->remote->select('IFNULL(P.EMPLOYEE_ID,0) AS GM_EMPID,IFNULL(P.FE_NAME,"NA") AS GM_NAME');

        $this->remote->select('IFNULL(Q.EMPLOYEE_ID,0) AS VP_EMPID,IFNULL(Q.FE_NAME,"NA") AS VP_NAME');

        $this->remote->select('IFNULL(R.EMPLOYEE_ID,0) AS DIR_EMPID,IFNULL(R.FE_NAME,"NA") AS DIR_NAME');

        $this->remote->select('IFNULL(S.EMPLOYEE_ID,0) AS EXEDIR_EMPID,IFNULL(S.FE_NAME,"NA") AS EXEDIR_NAME');

        $this->remote->from('EMPLOYEE_PRIMARY AS A');

        $this->remote->join('TBL_FE_MASTER AS B', 'A.EMPLOYEE_ID = B.EMPLOYEE_ID', 'LEFT');

        $this->remote->join('TBL_FE_HIERARCHY AS C', 'B.FE_CODE = C.FE_CODE', 'LEFT');

        $this->remote->join('MASTER_DESIGNATIONS AS D', 'A.DESG_ID = D.DESG_ID', 'LEFT');

        $this->remote->join('MASTER_DIVISIONS AS E', 'A.DIVISION_ID = E.DIVISION_ID', 'LEFT');

        $this->remote->join('EMPLOYEE_SECONDARY AS F', 'A.EMPLOYEE_ID = F.EMPLOYEE_ID', 'LEFT');

        $this->remote->join('TBL_FE_MASTER AS G', 'G.FE_CODE = C.FE2', 'LEFT');//AM

        $this->remote->join('TBL_FE_MASTER AS H', 'H.FE_CODE = C.FE3', 'LEFT');//SRRM

        $this->remote->join('TBL_FE_MASTER AS I', 'I.FE_CODE = C.FE4', 'LEFT');//RM

        $this->remote->join('TBL_FE_MASTER AS J', 'J.FE_CODE = C.FE5', 'LEFT');//SRRM

        $this->remote->join('TBL_FE_MASTER AS K', 'K.FE_CODE = C.FE6', 'LEFT');//DM

        $this->remote->join('TBL_FE_MASTER AS L', 'L.FE_CODE = C.FE7', 'LEFT');//ZM

        $this->remote->join('TBL_FE_MASTER AS M', 'M.FE_CODE = C.FE8', 'LEFT');//SM

        $this->remote->join('TBL_FE_MASTER AS N', 'N.FE_CODE = C.FE9', 'LEFT');//DGM

        $this->remote->join('TBL_FE_MASTER AS O', 'O.FE_CODE = C.FE10', 'LEFT');//GM

        $this->remote->join('TBL_FE_MASTER AS P', 'P.FE_CODE = C.FE11', 'LEFT');//PMT

        $this->remote->join('TBL_FE_MASTER AS Q', 'Q.FE_CODE = C.FE12', 'LEFT');//VP

        $this->remote->join('TBL_FE_MASTER AS R', 'R.FE_CODE = C.FE13', 'LEFT');//DIRECTOR

        $this->remote->join('TBL_FE_MASTER AS S', 'S.FE_CODE = C.FE14', 'LEFT');//EXECUTIVE DIRECTOR

        $this->remote->where('A.EMPLOYEE_ID', $employee_id);

       // $this->remote->where('A.PASSWORD', $password);

       // $this->remote->where_in('A.DIVISION_ID', array('2', '3', '6', '7')); //Diaspa,Frenza,Genx,HHCL
        $this->remote->where_in('A.DIVISION_ID', array('3','6','7')); //Frenza,Genx,HHCL

        $this->remote->limit(1);

        $response = $this->remote->get()->result();
		
		  if ($response) {
            
           // $this->setUserLog($data['EMPLOYEE_ID']);
        
            return $response;
            
        } else {
            
            return false;
            
        } 
		
        
    }
	
	  public function ValidateUser($EMPLOYEE_ID)
	{
		
        // $query = $this->remote->query("SELECT *

// FROM EMPLOYEE_PRIMARY A

// JOIN MASTER_DESIGNATIONS B ON A.DESG_ID=B.DESG_ID

// JOIN MASTER_DIVISIONS C ON A.DIVISION_ID=C.DIVISION_ID

// WHERE A.DIVISION_ID IN(2,3,6,7) AND A.DESG_ID IN(2,3,5,8,9,10,12) AND A.EMPLOYEE_ID='" .$EMPLOYEE_ID."' LIMIT 1");


   $query = $this->remote->query("SELECT *

FROM EMPLOYEE_PRIMARY A

JOIN MASTER_DESIGNATIONS B ON A.DESG_ID=B.DESG_ID

JOIN MASTER_DIVISIONS C ON A.DIVISION_ID=C.DIVISION_ID

WHERE A.DIVISION_ID IN(2,3,6,7) AND A.EMPLOYEE_ID='" .$EMPLOYEE_ID."' LIMIT 1");

        
        $result = $query->result();
        
     // echo $this->remote->last_query();
        
         $user = $result;
        
        if ($user) {
            
           // $this->setUserLog($data['EMPLOYEE_ID']);
            
            $reqdata = array(
                
                'EMPLOYEE_CODE' => $data['EMPLOYEE_ID'],
                
                'DEVICE_ID' => $data['DEVICE_ID'],
                
                'DEVICE_TOKEN' => $data['DEVICE_TOKEN']
                
            );
          //    print_r($reqdata);
        //    $this->setDeviceToken($reqdata);
            
            return $user;
            
        } else {
            
            return false;
            
        } 
		
	}
    
	
		public function questionaries($SERIES_ID)
	{	
        $data= array();			 	
		$this->db->select('*');
		$this->db->from('questionnaire');
        $this->db->where('questionnaire.QUESTION_SERIES_ID',$SERIES_ID);
        $this->db->where('questionnaire.QUESTION_CAT','1');
		//$this->db->order_by('RAND ( )');
		$this->db->order_by('QUESTION_ID', 'RANDOM');
		$this->db->limit(10);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{ 		
                foreach ($query->result() as $row)
                      {	                          
					$temp_arr['QUESTION_ID'] = $row->QUESTION_ID;
					$temp_arr['QUESTION_TEXT'] = $row->QUESTION_TEXT	;	

 	 $query_options = $this->db->query("SELECT *  FROM question_options WHERE QUESTION_ID = $row->QUESTION_ID  
ORDER BY question_options.OPTION_POSITION ASC");
			  if($query_options->num_rows()>0)
			  {
				   $option_data= array();
				   $temp_arr_2= array();
                   foreach ($query_options->result() as $query_options_row)
				   {
					   $option_data['OPTION_ID'] = $query_options_row->QUE_OPTION_ID;
					   $option_data['OPTION_TEXT'] = $query_options_row->QUE_OPTION_TEXT;
					   $option_data['OPTION_QUESTION_ID'] = $query_options_row->QUESTION_ID;
					   $option_data['OPTION_POSTION'] = $query_options_row->OPTION_POSITION;
					   array_push($temp_arr_2, $option_data);
				   }
				   
			  }
			  $temp_arr['QUESTION_OPTIONS'] = $temp_arr_2;	
					
						array_push($data, $temp_arr);
                      }	
             return $data;					  
		}
		else
		{
			return false;
		}		
	}
	
			public function questionaries_cat2($SERIES_ID)
	{	
        $data1= array();			 	
		$this->db->select('*');
		$this->db->from('questionnaire');
        $this->db->where('questionnaire.QUESTION_SERIES_ID',$SERIES_ID);
		$this->db->where('questionnaire.QUESTION_CAT','2');
		//$this->db->order_by('RAND ( )');
		$this->db->order_by('QUESTION_ID', 'RANDOM');
		$this->db->limit(10);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{ 		
                foreach ($query->result() as $row)
                      {	                          
					$temp_arr['QUESTION_ID'] = $row->QUESTION_ID;
					$temp_arr['QUESTION_TEXT'] = $row->QUESTION_TEXT	;	

 	 $query_options = $this->db->query("SELECT *  FROM question_options WHERE QUESTION_ID = $row->QUESTION_ID  
ORDER BY question_options.OPTION_POSITION ASC");
			  if($query_options->num_rows()>0)
			  {
				   $option_data= array();
				   $temp_arr_2= array();
                   foreach ($query_options->result() as $query_options_row)
				   {
					   $option_data['OPTION_ID'] = $query_options_row->QUE_OPTION_ID;
					   $option_data['OPTION_TEXT'] = $query_options_row->QUE_OPTION_TEXT;
					   $option_data['OPTION_QUESTION_ID'] = $query_options_row->QUESTION_ID;
					   $option_data['OPTION_POSTION'] = $query_options_row->OPTION_POSITION;
					   array_push($temp_arr_2, $option_data);
				   }
				   
			  }
			  $temp_arr['QUESTION_OPTIONS'] = $temp_arr_2;	
					
						array_push($data1, $temp_arr);
                      }	
             return $data1;					  
		}
		else
		{
			return false;
		}		
	}
	
	
	public function questionaries_cat3($SERIES_ID)
	{	
        $data1= array();			 	
		$this->db->select('*');
		$this->db->from('questionnaire');
        $this->db->where('questionnaire.QUESTION_SERIES_ID',$SERIES_ID);
		$this->db->where('questionnaire.QUESTION_CAT','3');
		//$this->db->order_by('RAND ( )');
		$this->db->order_by('QUESTION_ID', 'RANDOM');
		$this->db->limit(5);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{ 		
                foreach ($query->result() as $row)
                      {	                          
					$temp_arr['QUESTION_ID'] = $row->QUESTION_ID;
					$temp_arr['QUESTION_TEXT'] = $row->QUESTION_TEXT	;	

 	 $query_options = $this->db->query("SELECT *  FROM question_options WHERE QUESTION_ID = $row->QUESTION_ID  
ORDER BY question_options.OPTION_POSITION ASC");
			  if($query_options->num_rows()>0)
			  {
				   $option_data= array();
				   $temp_arr_2= array();
                   foreach ($query_options->result() as $query_options_row)
				   {
					   $option_data['OPTION_ID'] = $query_options_row->QUE_OPTION_ID;
					   $option_data['OPTION_TEXT'] = $query_options_row->QUE_OPTION_TEXT;
					   $option_data['OPTION_QUESTION_ID'] = $query_options_row->QUESTION_ID;
					   $option_data['OPTION_POSTION'] = $query_options_row->OPTION_POSITION;
					   array_push($temp_arr_2, $option_data);
				   }
				   
			  }
			  $temp_arr['QUESTION_OPTIONS'] = $temp_arr_2;	
					
						array_push($data1, $temp_arr);
                      }	
             return $data1;					  
		}
		else
		{
			return false;
		}		
	}
	
	
	
	
	
		
	public function Exam_result($EMPLOYEE_ID)
	{
		$answered_questions=0;
		$total_score=15;
		$obtained_score=0;		
		$this->db->select('*');
		$this->db->from('questionnaire');
	    $this->db->join('question_options', 'question_options.QUE_OPTION_ID = questionnaire.QUESTION_ANSWER_ID');
		//$this->db->where('expense_hotels.EX_HOTEL_STATUS=1');
       // $this->db->where('expense_hotels.EX_HOTEL_ID',$EX_HOTEL_ID);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{ 		
				//return $query->result();
                     $option_data= array();
				   $temp_arr_2= array();
                   foreach ($query->result() as $query_options_row)
				   {
					   $option_data['QUESTION_ID'] = $query_options_row->QUESTION_ID;
					   $option_data['QUESTION_TEXT'] = $query_options_row->QUESTION_TEXT;
					   $option_data['QUESTION_ANSWER'] = $query_options_row->QUESTION_ANSWER_ID;
					   $option_data['OPTION_QUESTION_ID'] = $query_options_row->QUESTION_ID;
					   $option_data['OPTION_TEXT'] = $query_options_row->QUE_OPTION_TEXT;
					   
					   
	//	$query = $this->db->query("SELECT * FROM employee_results,employee_result_details,question_options WHERE employee_results.RESULT_ID=employee_results_details.employee_results_ID && employee_results.EMPLOYEE_ID='$EMPLOYEE_ID' && employee_results_details.RESULT_QUESTION_ID =$query_options_row->QUESTION_ID  && question_options.QUE_OPTION_ID = employee_results_details.RESULT_ANSWER_ID ");	
	
	
	$query = $this->db->query("SELECT
    *
FROM
    employee_results,
    employee_result_details,
    question_options
WHERE
    employee_results.RESULT_ID = employee_result_details.RESULT_DETAIL_RESULT_ID && employee_results.RESULT_EMPLOYEE_ID = $EMPLOYEE_ID && employee_result_details.RESULT_DETAIL_QUESTION_ID= $query_options_row->QUESTION_ID  && question_options.QUE_OPTION_ID=employee_result_details.RESULT_DETAIL_OPTION_ID");
	
	
	
						if ($query->num_rows() > 0)
	          	{

						foreach ($query->result() as $row)
						{
						//echo $row->RESULT_QUESTION_ID;
						//echo $row->RESULT_ANSWER_ID;
						 $option_data['RESULT_ANSWER_ID'] = $row->OPTION_TEXT;
						if($query_options_row->QUESTION_ANSWER == $row->QUE_OPTION_ID)
						{
							 $option_data['SCORE'] = 1;
							 $obtained_score=$obtained_score+1;
						}
						else
						{
							 $option_data['SCORE'] = 0;
						}
						
						 //$option_data['QUESTION_ANSWER_'] = $query_options_row->QUESTION_ANSWER;
					   //  $option_data['RESULT_OPTION_TEXT_ID_'] = $row->OPTION_ID;
						
						  $answered_questions=$answered_questions+1;
						}
					   array_push($temp_arr_2, $option_data);
				//	$query_update = $this->db->query("UPDATE employee_results SET ANWERED_QUESTION = '$answered_questions'  WHERE `employee_results`.`RESULT_EMPLOYEE_ID` = $EMPLOYEE_ID"); 
					
					$query_update_2 = $this->db->query("UPDATE `employee_results` SET `RESULT_SCORE` = '$obtained_score' WHERE `employee_results`.`RESULT_EMPLOYEE_ID` = $EMPLOYEE_ID"); 
					
					$query_update_2 = $this->db->query("UPDATE `employee_results` SET `RESULT_TOTAL` = '25' WHERE `employee_results`.`RESULT_EMPLOYEE_ID` = $EMPLOYEE_ID"); 
					   
		}
		else
		{
			  $option_data['RESULT_ANSWER_ID'] = "UnAnswered Question";
			   $option_data['SCORE'] = 0;
			  array_push($temp_arr_2, $option_data);
			
		}

				   }
				    return $temp_arr_2;		
				
		}
		else
		{
			return false;
		}		
	}
	
	
	public function CheckGivenExam($EMPLOYEE_ID)
	{				
		$this->db->select('*');
		$this->db->from('employee_results');
	    $this->db->join('employee_result_details', 'employee_result_details.RESULT_DETAIL_RESULT_ID = employee_results.RESULT_ID');
		$this->db->where('employee_results.RESULT_EMPLOYEE_ID',$EMPLOYEE_ID);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{ 		
			return true;
		}
		else
		{
			return false;
		}		
	}
	
		public function ExamReport($EMPLOYEE_ID)
	{				
		$this->db->select('*');
		$this->db->from('employee_results');
	   // $this->db->join('employee_results_details', 'employee_results_details.employee_results_ID = employee_results.RESULT_ID');
		$this->db->where('employee_results.RESULT_EMPLOYEE_ID',$EMPLOYEE_ID);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{ 		
			return $query->result();	
		}
		else
		{
			return false;
		}		
	}	

	public function tutorial_series()
	{				
		$today=date('Y-m-d');
		$SQL_QUERY ="SELECT * FROM `tutorials` JOIN `tutorial_series` ON `tutorial_series`.`SERIES_ID` = `tutorials`.`TUTORIAL_SERIES_ID` WHERE `tutorials`.`DIVISION` = '6' AND `tutorials`.`TUTORIAL_STATUS` = '1' && '$today' BETWEEN tutorial_series.SERIES_START_DATE AND tutorial_series.SERIES_END_DATE";
		 $query = $this->db->query($SQL_QUERY);
		
		if ($query->num_rows() > 0)
		{ 		
			return $query->result();	
		}
		else
		{
			return false;
		}		
	}
	
		public function exam_series()
	{	
	
        $EMPLOYEE_ID=$this->session->userdata('EMPLOYEE_ID');	
        $DIVISION_ID=$this->session->userdata('DIVISION_ID');	
		$today=date('Y-m-d');
		$SQL_QUERY ="SELECT * FROM `tutorial_series` JOIN `tutorials` ON `tutorials`.`TUTORIAL_SERIES_ID` = `tutorial_series`.`SERIES_ID` WHERE `tutorials`.`DIVISION` = '$DIVISION_ID' AND  '$today' BETWEEN EXAM_START_DATE AND EXAM_END_DATE";
		 $query = $this->db->query($SQL_QUERY);

		if ($query->num_rows() > 0)
		{ 		
                     $option_data= array();
                    
				   $temp_arr_2= array();
				   
				   foreach ($query->result() as $query_row)
				   {
					   $option_data['SERIES_ID'] = $query_row->SERIES_ID;
					   $option_data['SERIES_ACTIVE_FLAG'] = $query_row->SERIES_ACTIVE_FLAG;
					   $option_data['TUTORIAL_TITLE'] = $query_row->TUTORIAL_TITLE;
					   $option_data['SERIES_TITLE'] = $query_row->SERIES_TITLE;
					   $option_data['SERIES_DESC'] = $query_row->SERIES_DESC;
					   $option_data['SERIES_START_DATE'] = $query_row->SERIES_START_DATE;
					   $option_data['SERIES_END_DATE'] = $query_row->SERIES_END_DATE;
					   $option_data['EXAM_START_DATE'] = $query_row->EXAM_START_DATE;
					   $option_data['EXAM_END_DATE'] = $query_row->EXAM_END_DATE;
                       $SERIES_ID=$query_row->SERIES_ID;
					   
					 $query_2 = $this->db->query("SELECT *  FROM `employee_results` WHERE `RESULT_SERIES_ID` = $SERIES_ID AND `RESULT_EMPLOYEE_ID` = $EMPLOYEE_ID && RESULT_PERCENTAGE >= 75");
					 if($query_2->num_rows() > 0)
					 {
/* 						  $option_data2= array();
						   foreach ($query_2->result() as $query_2)
						   {
							   $option_data2['RESULT_ID'] = $query_2->RESULT_ID;
							   $option_data2['RESULT_DATE'] = $query_2->RESULT_DATE;
							   $option_data2['RESULT_SERIES_ID'] = $query_2->RESULT_SERIES_ID;
							   $option_data2['RESULT_SCORE'] = $query_2->RESULT_SCORE;
							   $option_data2['RESULT_PERCENTAGE'] = $query_2->RESULT_PERCENTAGE;
							   $option_data2['RESULT_TOTAL'] = $query_2->RESULT_TOTAL;
							    array_push($option_data['result'], $option_data2);
						   } */
						   
						  $option_data['EXAM_STAUS'] = 1; 
					 }
					 else
					 {
						 $option_data['EXAM_STAUS'] = 0; 
						 
					$query_2 = $this->db->query("SELECT *  FROM `employee_results` WHERE `RESULT_SERIES_ID` = $SERIES_ID AND `RESULT_EMPLOYEE_ID` = $EMPLOYEE_ID && RESULT_PERCENTAGE <= 75 && RESULT_DATE =CURRENT_DATE()  LIMIT 0,1");
					 if($query_2->num_rows() > 0)
					 {
						  $option_data['EXAM_DATE'] = 1; 
					 }
						
					 }
					 
					 	$query_3 = $this->db->query("SELECT * FROM `questionnaire`,tutorial_series WHERE questionnaire.QUESTION_SERIES_ID = tutorial_series.SERIES_ID and tutorial_series.SERIES_ID = $SERIES_ID");
					 if($query_3->num_rows() > 0)
					 {
						  $option_data['Question_available'] = 1; 
					 }
					 else
					 {
						  $option_data['Question_available'] = 0; 
					 }
					 
					  
					   
					     array_push($temp_arr_2, $option_data);
				   }
					   return $temp_arr_2;
					   
	//	$query = $this->db->query("SELECT * FROM employee_results,employee_result_details,question_options WHERE employee_results.RESULT_ID=employee_results_details.employee_results_ID && employee_results.EMPLOYEE_ID='$EMPLOYEE_ID' && employee_results_details.RESULT_QUESTION_ID =$query_options_row->QUESTION_ID  && question_options.QUE_OPTION_ID = employee_results_details.RESULT_ANSWER_ID ");
				   
		}
		else
		{
			return false;
		}		
	}
	
	
	
    	public function tutorial($SERIES_ID)
	{				
		$this->db->select('*');
		$this->db->from('tutorials');
	    $this->db->join('tutorial_series', 'tutorial_series.SERIES_ID = tutorials.TUTORIAL_SERIES_ID');
		$this->db->where('tutorials.TUTORIAL_SERIES_ID',$SERIES_ID);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{ 		
			return $query->result();	
		}
		else
		{
			return false;
		}		
	}
	
	 public function activeseries()
	{				
		$this->db->select('*');
		$this->db->from('tutorial_series');
		$this->db->where('SERIES_START_DATE <= CURDATE()');;
		$this->db->where('SERIES_END_DATE >= CURDATE()');;
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{ 		
			return $query->result();	
		}
		else
		{
			return false;
		}		
	}
    
	
	   	public function exam_report()
	{	

$employee=$this->session->userdata('EMPLOYEE_ID');
	
$query = $this->db->query("SELECT
    *
FROM
    employee_results,
    employee_result_details,
    questionnaire
WHERE
    employee_result_details.RESULT_DETAIL_RESULT_ID = employee_results.RESULT_ID && questionnaire.QUESTION_ID = employee_result_details.RESULT_DETAIL_QUESTION_ID && questionnaire.QUESTION_ANSWER_ID = employee_result_details.RESULT_DETAIL_OPTION_ID && $employee");;
		if ($query->num_rows() > 0)
		{ 		
			return $query->result();	
		}
		else
		{
			return false;
		}		
	}	  


 	public function result_by_category()
	{	

$employee=$this->session->userdata('EMPLOYEE_ID');
	
$query = $this->db->query("SELECT
    COUNT(M.CATEGORYNAME) as Value,CATEGORYNAME,CAT_ID
FROM
    (
    SELECT
        employee_result_details.RESULT_DETAIL_QUESTION_ID,
        employee_result_details.RESULT_DETAIL_OPTION_ID,
        question_cat.CAT_NAME AS CATEGORYNAME,
        question_cat.CAT_ID,
        employee_result_details.RESULT_DETAIL_ID
    FROM
        employee_results,
        employee_result_details,
        questionnaire,
        question_cat
    WHERE
        employee_result_details.RESULT_DETAIL_RESULT_ID = employee_results.RESULT_ID && questionnaire.QUESTION_ID = employee_result_details.RESULT_DETAIL_QUESTION_ID && questionnaire.QUESTION_ANSWER_ID = employee_result_details.RESULT_DETAIL_OPTION_ID && questionnaire.QUESTION_CAT = question_cat.CAT_ID &&  employee_results.RESULT_EMPLOYEE_ID= $employee 
) AS M
GROUP BY
    M.CATEGORYNAME");;
		if ($query->num_rows() > 0)
		{ 		
			return $query->result();	
		}
		else
		{
			return false;
		}		
	}
    
	
	 	public function last_exam()
	{	

$employee=$this->session->userdata('EMPLOYEE_ID');
	
$query = $this->db->query("SELECT *  FROM `employee_results`,tutorial_series WHERE `RESULT_EMPLOYEE_ID` = $employee && tutorial_series.SERIES_ID = employee_results.RESULT_SERIES_ID limit 0,1");;
		if ($query->num_rows() > 0)
		{ 		
			return $query->result();	
		}
		else
		{
			return false;
		}		
	}
    
	
 //END   
}