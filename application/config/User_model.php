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
		
/*       //print_r($data);
	  //SELECT A.EMPLOYEENAME,A.EMPLOYEE_ID,A.PASSWORD,C.DIVISION_SHORTNAME DIVISION,B.DESG_SHORTNAME DESG,B.DESG_ID
        $query = $this->remote->query("SELECT *

FROM EMPLOYEE_PRIMARY A

JOIN MASTER_DESIGNATIONS B ON A.DESG_ID=B.DESG_ID

JOIN MASTER_DIVISIONS C ON A.DIVISION_ID=C.DIVISION_ID

WHERE A.DIVISION_ID IN(1,2,3,4,5,6,7,8,9,10,11,12) AND A.DESG_ID IN(2,3,5,8,9,10,12) AND A.EMPLOYEE_ID='" . $data['EMPLOYEE_ID'] . "' AND A.PASSWORD='" . $data['PASSWORD'] . "' LIMIT 1");

        
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
            
        } */
		
		
		    
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

        $this->remote->where('A.PASSWORD', $password);

        $this->remote->where_in('A.DIVISION_ID', array('6')); //Diaspa,Frenza,Genx,HHCL

        $this->remote->limit(1);

        $response = $this->remote->get()->result();
		
		  if ($response) {
            
           // $this->setUserLog($data['EMPLOYEE_ID']);
        
            return $response;
            
        } else {
            
            return false;
            
        } 
		
        
    }
    
	
	
	//APP VERSION
    public function getAppversion() {
        $this->db->select('APPVERSION');
        $this->db->from('appversion');
        $this->db->where('STATUS', 1001);
        $results = $this->db->get()->result();
        return $results;		
    }
    // USER LOGIN
    public function getUserdata($employee_id,$password){  
      $data = array();      
      $this->db->select('A.EMPLOYEE_ID,A.EMPLOYEE_NAME,A.DESG,A.DIVISION,A.HQ');
      $this->db->select('A.REGION,IFNULL(A.PROFILE_IMG,"NA")PROFILE_IMG,A.MOBILENUMBER');
      $this->db->select('C.EMPLOYEE_NAME AS AM,D.EMPLOYEE_NAME AS RM');
      $this->db->select('E.EMPLOYEE_NAME AS SM');
      $this->db->from('employee_master AS A');
      $this->db->join('employee_hierarchy AS B','A.EMPLOYEE_ID = B.EMPLOYEE_ID','LEFT');
      $this->db->join('employee_master AS C','C.EMPLOYEE_ID = B.AM','LEFT');
      $this->db->join('employee_master AS D','D.EMPLOYEE_ID = B.RM','LEFT');
      $this->db->join('employee_master AS E','E.EMPLOYEE_ID = B.SM','LEFT');
      $this->db->where('A.EMPLOYEE_ID',$employee_id);
      $this->db->where('A.PASSWORD',$password);
      $this->db->where('A.STATUS', 1001);
      $this->db->where_in('A.DESG', array('MR','TSE','TTSE','PTSE'));
      $this->db->limit(1);
      $result = $this->db->get();
       if($result->num_rows() >= 1) {
            $data = $result->result();  
            $objDate = new DateTime();
            $userlogvalue=array('LOGID'=>md5($employee_id),'CREATEDON'=>$objDate->format('Y-m-d H:i:s'));
            $logdata= $this->User->user_log($userlogvalue);
            return $data;
        }else{
            return $data;
        }
    }
    //UPDATE USER DATA
    public function userUpdate($data){
        $this->db->select('EMPLOYEE_ID');
        $this->db->from('employee_master');
        $this->db->where('EMPLOYEE_ID', $data['EMPLOYEE_ID']);
        $result = $this->db->get();
        if($result->num_rows() >= 1) {   
            $result = $result->result();
            $this->db->where('EMPLOYEE_ID', $data['EMPLOYEE_ID']);
            $this->db->update('employee_master',$data);
			if(!empty($data)){
			  $this->db->select('A.EMPLOYEE_ID,A.EMPLOYEE_NAME,A.DESG,A.DIVISION,A.HQ');
			  $this->db->select('A.REGION,IFNULL(A.PROFILE_IMG,"NA")PROFILE_IMG,A.MOBILENUMBER');
			  $this->db->select('C.EMPLOYEE_NAME AS AM,D.EMPLOYEE_NAME AS RM');
			  $this->db->select('E.EMPLOYEE_NAME AS SM');
			  $this->db->from('employee_master AS A');
			  $this->db->join('employee_hierarchy AS B','A.EMPLOYEE_ID = B.EMPLOYEE_ID','LEFT');
			  $this->db->join('employee_master AS C','C.EMPLOYEE_ID = B.AM','LEFT');
			  $this->db->join('employee_master AS D','D.EMPLOYEE_ID = B.RM','LEFT');
			  $this->db->join('employee_master AS E','E.EMPLOYEE_ID = B.SM','LEFT');
			  $this->db->where('A.EMPLOYEE_ID',$data['EMPLOYEE_ID']);
			  $this->db->where('A.STATUS', 1001);
			  $this->db->where_in('A.DESG', array('MR','TSE','TTSE','PTSE'));
			  $this->db->limit(1);
			  $result = $this->db->get()->result();
			  return $result;
			}else{
				return array();
			}
           
        }else{
            return array();
        }
    }
    //USER UPDATE LOG
    public function user_update_log($data) {
        if (!empty($data)) {
            $this->db->insert('user_updatelog', $data);
            return $this->db->insert_id();
        }
        return 0;
    }
    //USER LOG
    public function user_log($data) {
        if (!empty($data)) {
            $this->db->insert('userlog', $data);
            return $this->db->insert_id();
        }
        return 0;
    }
    // DOCTOR DATA
    public function getDoctordata($employee_id){
        $data = array();
        $this->db->select('ID as DOCTOR_ID,DOCTOR_NAME AS DOCTORNAME,DOCTOR_CODE');
        $this->db->from('doctor_data');
        $this->db->where('FSCODE',$employee_id);
        $result = $this->db->get();
        if($result->num_rows() >= 1){
            $data = $result->result(); 
            return $data;
        }else{
             return $data;
        }
       
    }
	//Brand Data
	    public function BrandList($DIVISION_ID){
		
	    $this->db->select('*');
		$this->db->from('_master_brands');
		$this->db->join('_master_division', '_master_division.DIVISION_CODE = _master_brands.DIVISION_CODE');
		$this->db->where('_master_division.ID',$DIVISION_ID);
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
	
	
    //DOCTOR DETAILS
    public function getDoctordetails($doctor_code){
      $data = array();
      $this->db->select('DOCTOR_NAME');
      $this->db->select('MOBILENO,DATE_FORMAT(DOB,"%d-%m-%Y") AS DOB');
      $this->db->select('DATE_FORMAT(DOW,"%d-%m-%Y") AS DOW,DOCTOR_CODE');
      $this->db->from('doctor_data');
      $this->db->where('DOCTOR_CODE',$doctor_code);
      $result = $this->db->get();
      if($result->num_rows() >= 1){
          $data = $result->result(); 
            return $data;
      }else{
            return $data;
      }
       
    }
	//UPDATE USER DATA
    public function doctorUpdate($data){
		$this->db->select('*');
        $this->db->from('doctor_data');
        $this->db->where('DOCTOR_CODE', $data['DOCTOR_CODE']);
        $result = $this->db->get();	
        if($result->num_rows() >= 1){   
            $result = $result->result();			
            $this->db->where('DOCTOR_CODE', $data['DOCTOR_CODE']);
            $this->db->update('doctor_data',$data);  
            return $data;
        }else{
            return array();
        }
    }
    //DOCTOR BIRTHDAY DETAILS
    public function getDoctorbirthdays($date){
      $data = array();
      $this->db->select('DOCTOR_NAME AS DOCTORNAME');
      $this->db->select('MOBILENO,DATE_FORMAT(DOB,"%d-%m-%Y") AS DOB');
      $this->db->from('doctor_data');
      $this->db->where('DATE_FORMAT(DOB,"%d-%m-%Y")',$date);
      $result = $this->db->get();
      if($result->num_rows() >= 1){
          $data = $result->result(); 
            return $data;
      }else{
            return $data;
      }
       
    }
    //DOCTOR BIRTHDAY DETAILS
    public function getDetailingdata($type,$BRAND_ID){
      $data = array();
      $this->db->select('DETAILING_ID,CONCAT("'.base_url().'uploads/",'.'FILE_TYPE,'.'"/",'.'NAME,".",'.'LOWER(FILE_FORMAT)) AS URL,NAME,FILE_TYPE');
      $this->db->from('standard_details');
	  $this->db->where('FILE_TYPE',$type);
	  $this->db->where('BRAND_ID',$BRAND_ID);
      $this->db->order_by('DATE_FORMAT(CREATEDON,"%d-%m-%Y")');
      $result = $this->db->get();
      if($result->num_rows() >= 1){
          $data = $result->result(); 
            return $data;
      }else{
            return $data;
      }       
    }
    //ACTIVITY LIST 
    public function getActivitydata(){
      $data = array();
      $this->db->select('ACTIVITY_ID,ACTIVITY_NAME');
      $this->db->from('activity_master');
      $result = $this->db->get();
      if($result->num_rows() >= 1){
          $data = $result->result(); 
            return $data;
      }else{
            return $data;
      }       
    }
    //ACTIVITY PLANNING 
    public function setActivityplanning($data){
      if (!empty($data)) {
            $this->db->insert('activity_planning', $data['activity_planning']);
            $result = $this->db->insert_id();
        }
        if($result >= 0) {
            return true;
        } else {
            return false;
        }
    }
    // PLANNED DR LIST
     public function getPlanneddata($activity_id,$from,$to){
      $data = array();
      $this->db->select('A.ACTIVITY_ID,A.PLANNED_DATE');
      $this->db->select('B.DOCTOR_NAME AS DOCTORNAME,B.DOCTOR_CODE');
      $this->db->from('ACTIVITY_PLANNING AS A');
      $this->db->join('doctor_data AS B','A.DOCTOR_CODE = B.DOCTOR_CODE');
      $this->db->where('A.ACTIVITY_ID',$activity_id);
      $this->db->where('A.PLANNED_DATE >=',$from);
      $this->db->where('A.PLANNED_DATE <=',$to);
      $result = $this->db->get();
      if($result->num_rows() >= 1){
          $data = $result->result(); 
            return $data;
      }else{
            return $data;
      }       
    }
    //ACTIVITY  EXECUTION 
    public function setActivityexecution($data){
      if (!empty($data)) {
            $this->db->insert('activity_execution', $data['activity_execution']);
            $result = $this->db->insert_id();
        }
        if($result >= 0) {
            return true;
        } else {
            return false;
        }
    }
    // ACTIVITY BRIEF
    public function getActivitybriefdata($activity_id){
      $data = array();
      $this->db->select('CONCAT("'.base_url().'uploads/PDF",'.'"/",'.'NAME,".",'.'LOWER(FORMAT)) AS URL,NAME AS FILENAME');
      $this->db->from('activity_brief');
      $this->db->where('ACTIVITY_ID',$activity_id);
      $result = $this->db->get();
      if($result->num_rows() >= 1){
          $data = $result->result(); 
            return $data;
      }else{
            return $data;
      }       
    }
	
		public function GetNotification($EMPLOYEE_ID)
	{				
		$this->db->select('*');
		$this->db->from('notificationlist');
	    $this->db->join('notification_catagory','notification_catagory.CAT_ID = notificationlist.NOT_CAT');
		$this->db->where('notificationlist.NOT_STATUS=1');
        //$this->db->where('NotificationList.EX_HOTEL_ID',$EX_HOTEL_ID);
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
	
	
	public function AutoNotify($EMPLOYEE_ID)
	{				
		$this->db->select('*');
		$this->db->from('notificationlist');
	    $this->db->join('notification_catagory','notification_catagory.CAT_ID = notificationlist.NOT_CAT');
		$this->db->where('notificationlist.NOT_STATUS=1');
        //$this->db->where('notificationlist.EX_HOTEL_ID',$EX_HOTEL_ID);
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