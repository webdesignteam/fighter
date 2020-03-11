<?php
Class Admin_model extends CI_Model {
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
	
	
	
    	public function tutorial_list()
	{				
		$this->db->select('*');
		$this->db->from('tutorials');
	    $this->db->join('tutorial_series', 'tutorial_series.SERIES_ID = tutorials.TUTORIAL_SERIES_ID');
		$this->db->where('tutorials.TUTORIAL_STATUS',1);
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
	
	public function GetAllSeries()
	{				
		$this->db->select('*');
		$this->db->from('tutorial_series');
		$this->db->where('tutorial_series.SERIES_STATUS',1);
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
	
	public function editseries_list($where)
	{				
		$this->db->select('*');
		$this->db->from('tutorial_series');
	   // $this->db->join('tutorial_series', 'tutorial_series.SERIES_ID = tutorials.TUTORIAL_SERIES_ID');
		//$this->db->where('tutorial_series.SERIES_STATUS',1);
		$this->db->where($where);
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
	
		public function edittutorial_list($where)
	{				
		$this->db->select('*');
		$this->db->from('tutorials');
	   // $this->db->join('tutorial_series', 'tutorial_series.SERIES_ID = tutorials.TUTORIAL_SERIES_ID');
		//$this->db->where('tutorial_series.SERIES_STATUS',1);
		$this->db->where($where);
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
	
	
		public function series_list()
	{				
		$this->db->select('*');
		$this->db->from('tutorial_series');
	    $this->db->join('tutorials', 'tutorial_series.SERIES_ID = tutorials.TUTORIAL_SERIES_ID');
		$this->db->where('tutorial_series.SERIES_STATUS',1);
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

	public function employee_list()
	{				
		$this->db->select('*');
		$this->db->from('reigistered_employee');
		$this->db->where('reigistered_employee.RE_STATUS',1);
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
	
		public function result()
	{				
		$this->db->select('*');
		$this->db->from('employee_results');
		$this->db->join('reigistered_employee', 'employee_results.RESULT_EMPLOYEE_ID = reigistered_employee.RE_EMPLOYEED_ID');
		$this->db->join('tutorial_series', 'tutorial_series.SERIES_ID = employee_results.RESULT_SERIES_ID');
		$this->db->where('reigistered_employee.RE_STATUS',1);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{ 	
          $temp_arr_2 =array();	
          $option_data =array();	
		//	return $query->result();	
			  foreach ($query->result() as $query_options_row)
				   {
					//   echo "<pre>";print_r($query_options_row);exit;
					   $option_data['RESULT_EMPLOYEE_ID'] = $query_options_row->RESULT_EMPLOYEE_ID;
					   $option_data['RE_NAME'] = $query_options_row->RE_NAME;
					   $option_data['SERIES_DESC'] = $query_options_row->SERIES_DESC;
					   $option_data['RE_DIVISION'] = $query_options_row->RE_DIVISION;
					   $option_data['RESULT_DATE'] = $query_options_row->RESULT_DATE;
					   $option_data['RESULT_SCORE'] = $query_options_row->RESULT_SCORE;
					   $option_data['RESULT_PERCENTAGE'] = $query_options_row->RESULT_PERCENTAGE;
					   $option_data['RESULT_TOTAL'] = $query_options_row->RESULT_TOTAL;
					   
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
        employee_result_details.RESULT_DETAIL_RESULT_ID = employee_results.RESULT_ID && questionnaire.QUESTION_ID = employee_result_details.RESULT_DETAIL_QUESTION_ID && questionnaire.QUESTION_ANSWER_ID = employee_result_details.RESULT_DETAIL_OPTION_ID && questionnaire.QUESTION_CAT = question_cat.CAT_ID &&  employee_results.RESULT_EMPLOYEE_ID= $query_options_row->RESULT_EMPLOYEE_ID 
) AS M
GROUP BY
    M.CATEGORYNAME");;
		if ($query->num_rows() > 0)
		{ 	
   //  echo "<pre>";print_r($query->result()[0]);

    $option_data['Brand'] = $query->result()[0]->Value;	   
	


    $option_data['Marketing'] = $query->result()[1]->Value;	   



    $option_data['Medical'] = $query->result()[2]->Value;	   
	
      // echo "<pre>";print_r($query->result());	
	//  exit;
			/* foreach ($query->result() as $query_result)
			{
				 $option_data['CATEGORYNAME'] = $query_result->CATEGORYNAME;
				 $option_data['Value'] = $query_result->Value;
			} */
		}
		else
		{
			return false;
		}
					   
					   
					   array_push($temp_arr_2, $option_data);
				   }
				   return $temp_arr_2;
		}
		else
		{
			return false;
		}		
	}

	public function question_list()
	{				
		$this->db->select('*');
		$this->db->from('questionnaire');
		$this->db->join('tutorial_series', 'tutorial_series.SERIES_ID = questionnaire.QUESTION_SERIES_ID');
		$this->db->join('question_options', 'question_options.QUE_OPTION_ID = questionnaire.QUESTION_ANSWER_ID');
		$this->db->where('questionnaire.QUESTION_STATUS',1);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{ 		
			//return $query->result();	
		//	print_r($query->result());
			$temp_arr=array();
			$data=array();
			  foreach ($query->result() as $row)
			  {
		$temp_arr['QUESTION_ID'] = $row->QUESTION_ID;
		$temp_arr['QUESTION_TEXT'] = $row->QUESTION_TEXT;	
		$temp_arr['QUESTION_SERIES_ID'] = $row->QUESTION_SERIES_ID;	
		$temp_arr['SERIES_TITLE'] = $row->SERIES_TITLE;	
		$temp_arr['QUESTION_ANSWER_ID'] = $row->QUE_OPTION_TEXT;	
		//echo $row->QUESTION_TEXT;	

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
				   $temp_arr['test'] = $temp_arr_2;
			  }  
			  $temp_arr['QUESTION_OPTIONS'] = $temp_arr_2;	
					
						array_push($data, $temp_arr);
			  }
			  return $data;
			//echo"</pre>"; print_r($data);
		}
		else
		{
			return false;
		}		
	}
	
	
	
	
		public function result_details($EMPLOYEE_ID)
	{	
//employee_result_details.RESULT_DETAIL_QUESTION_ID,employee_result_details.RESULT_DETAIL_OPTION_ID,question_options.QUE_OPTION_TEXT,questionnaire.QUESTION_ANSWER_ID,questionnaire.QUESTION_TEXT	

     $temp_arr_2= array();				   
  	 $query_options = $this->db->query("SELECT * FROM `employee_results`,employee_result_details,question_options,questionnaire  WHERE `RESULT_EMPLOYEE_ID` = $EMPLOYEE_ID && employee_result_details.RESULT_DETAIL_RESULT_ID = employee_results.RESULT_ID && question_options.QUE_OPTION_ID = employee_result_details.RESULT_DETAIL_OPTION_ID && questionnaire.QUESTION_ID =employee_result_details.RESULT_DETAIL_QUESTION_ID");
			  if($query_options->num_rows()>0)
			  {
				   $option_data= array();
				  
                   foreach ($query_options->result() as $query_options_row)
				   {
					//  echo "<pre>"; print_r($query_options_row);exit;
					     	 
					   
					   $option_data['QUESION_ID'] = $query_options_row->RESULT_DETAIL_QUESTION_ID;
					   $option_data['QUESTION'] = $query_options_row->QUESTION_TEXT;
					   $option_data['OPTION_ID'] = $query_options_row->RESULT_DETAIL_OPTION_ID;
					   $option_data['GIVEN_ANWSER'] = $query_options_row->QUE_OPTION_TEXT;
					   $option_data['ORININAL_ANSWER_ID'] = $query_options_row->QUESTION_ANSWER_ID;
			$ANS_OPT = $this->db->query("SELECT *  FROM `question_options` WHERE `QUE_OPTION_ID` = $query_options_row->QUESTION_ANSWER_ID");
				if($ANS_OPT->num_rows()>0)
			  {
				   foreach ($ANS_OPT->result() as $ANS_OPT)
				   {
					    $option_data['ANSWER_OPTION'] = $ANS_OPT->QUE_OPTION_TEXT;
				   }
				  
			  }
			  else
			  {
				   $option_data['ANSWER_OPTION'] = "";
			  }
					   
					   array_push($temp_arr_2, $option_data);
				   }
				    $temp_arr_2;
			  }  
					
						
						return $temp_arr_2;
		
	}
	
	 	public function employee_result_by_cat($EMPLOYEE_ID)
	{	

//$employee=$this->session->userdata('EMPLOYEE_ID');
	
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
        employee_result_details.RESULT_DETAIL_RESULT_ID = employee_results.RESULT_ID && questionnaire.QUESTION_ID = employee_result_details.RESULT_DETAIL_QUESTION_ID && questionnaire.QUESTION_ANSWER_ID = employee_result_details.RESULT_DETAIL_OPTION_ID && questionnaire.QUESTION_CAT = question_cat.CAT_ID &&  employee_results.RESULT_EMPLOYEE_ID= $EMPLOYEE_ID 
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
    
    
	
 //END   
}