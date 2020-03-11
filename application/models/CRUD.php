<?php  
class CRUD extends CI_Model  
{  
    function __construct()  
	{  
		parent::__construct(); 
		$this->load->database();
	}  
	public function insertData($table, $data)
	{		
		$this->db->trans_start();		
		$this->db->insert($table, $data);
		$insert_id = $this->db->insert_id();
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{			
			return false;
		}
		else
		{			
			if($insert_id > 0)
			{
				return $insert_id;
			}
			else
			{				
				return false;
			}
		}
	}
	public function updateData($table, $data, $where)
	{
		$this->db->trans_start();		
		$this->db->where($where);
		$this->db->update($table,$data);
		$afftectedRows = $this->db->affected_rows();
		$this->db->trans_complete();
		//$str = $this->db->last_query();
		
		if ($this->db->trans_status() === FALSE)
		{
			return false;
		}
		else{
			if($afftectedRows > 0)
			{
				return true;
			}
			else
			{
				return true;
			}
		}
	}
	public function deleteData($table, $pkey)
	{
		$this->db->trans_start();	
		$this->db->delete($table, $pkey);
		$delete_rows = $this->db->affected_rows();
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{			
			return false;
		}
		else
		{			
			if($delete_rows > 0)
			{
				return $delete_rows;
			}
			else
			{				
				return false;
			}
		}
	}
	public function getIdofData($table, $idcolumn, $where)
	{
		$this->db->trans_start();	
		$this->db->select($idcolumn);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		$data = $query->result_array();
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{			
			return false;
		}
		else
		{			
			if($query->num_rows() == 1)
			{
				return $data[0][$idcolumn];
			}
			else
			{				
				return false;
			}
		}
	}

	public function isDataExist($table, $where)
	{
		$this->db->trans_start();	
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{			
			return false;
		}
		else
		{			
			if($query->num_rows() > 0)
			{
				return true;
			}
			else
			{				
				return false;
			}
		}
	}
	
	
	public function slugify($text)
	{
		// replace non letter or digits by -
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);
		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);
		// trim
		$text = trim($text, '-');
		// remove duplicate -
		$text = preg_replace('~-+~', '-', $text);
		// lowercase
		$text = strtolower($text);

		if (empty($text)) {
			return '';
		}
		return $text;
	}
	
	
	
		public function totalrecords($table, $where)
	{
		$this->db->trans_start();	
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{			
			return false;
		}
		else
		{			
			if($query->num_rows() > 0)
			{
				return $query->num_rows();
			}
			else
			{				
				return false;
			}
		}
	}
	
			public function Record_Count($table)
	{
		$this->db->trans_start();	
		$this->db->select('*');
		$this->db->from($table);
		//$this->db->where($where);
		$query = $this->db->get();
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{			
			return false;
		}
		else
		{			
			if($query->num_rows() > 0)
			{
				return $query->num_rows();
			}
			else
			{				
				return false;
			}
		}
	}
	
	
			public function GetRecordByID($table, $where)
	{
		$this->db->trans_start();	
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{			
			return false;
		}
		else
		{			
				return $query->result();
		}
	}
	
	
		public function index($to_email,$to_name,$message,$subject)
	{
	//	echo "Exit";exit;
			$this->load->library("PhpMailerLib");
			$mail = $this->phpmailerlib->load();
		
			try {
			//Server settings
			// $mail->SMTPDebug = 2;                                 // Enable verbose debug output
			$mail->isSMTP();  
              	$my_path ="D:/xampp/htdocs/gastro_app/uploads/screencapture-localhost-CashcardWeb-UserHome-2018-09-06-11_04_36.pdf";
			//  $mail->Host = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
			$mail->Host = 'czismtp.logix.in';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;    
			// Enable SMTP authentication
			$mail->Username = 'dhananjay.malipatil@heterohealthcare.com';   //username
			$mail->Password = 'Hhcl@123';   //password	

			//$mail->Username = 'hhcldeveloper@gmail.com';   //username
			//$mail->Password = 'corporatehhcl@123';   //password
			$mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to
			//Recipients
			$mail->setFrom('dhananjay.malipatil@heterohealthcare.com', 'Dhananjay Malipatil');
			$mail->addAddress('dhananjaymalipatil@gmail.com', 'Dhananjay Malipatil');  
			//$mail->AddAttachment($my_path);

			// Add a recipient
			//   $mail->addAddress('RECEIPIENTEMAIL02');               // Name is optional
			// $mail->addReplyTo('RECEIPIENTEMAIL03', 'Ganesha');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			//Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Here is the subject';
			$mail->Body    = $message;
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			return true;
			} catch (Exception $e) {
			return false;
			}
	}
	
		public function Gmail($to_email,$to_name,$message,$subject)
	{
				$this->load->library("PhpMailerLib");
				$mail = $this->phpmailerlib->load();
				try {

				$mail->isSMTP();
				$my_path ="D:/xampp/htdocs/gastro_app/uploads/screencapture-localhost-CashcardWeb-UserHome-2018-09-06-11_04_36.pdf";
				$mail->Host = 'smtp.googlemail.com';  
				$mail->SMTPAuth = true;
				$mail->Username = 'hhcldeveloper@gmail.com';   
				$mail->Password = 'corporatehhcl@123';  
				$mail->SMTPSecure = 'ssl';
				$mail->Port = 465;                
				$mail->setFrom('hhcldeveloper@gmail.com', 'Hetero HealthCare');
				//$mail->addAddress('dhananjay.malipatil@heterohealthcare.com', 'Dhananjay Malipatil');  
				$mail->addAddress($to_email, $to_name);  
				$mail->isHTML(true);          
				$mail->Subject = $subject;
			//	$mail->AddAttachment($my_path);
				$mail->Body    = $message;
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				$mail->send();		
				
				return true;
				} catch (Exception $e)
				{
				return false;
				}
	}
	
	
		public function save_base64_PDF($pdf)
	{
			$this->load->helper('path');
			$pos  = strpos($pdf, ';');
			$type = explode(':', substr($pdf, 0, $pos))[1];
			$split = explode( '/', $type );
			$filetype = $split[1]; 
			$pdf = str_replace('data:image/'.$filetype.';base64,', '', $pdf);
			$pdf1 = base64_decode($pdf);
			$image_name = md5(uniqid(rand(), true));
			$filename = $image_name . '.' . $filetype;
			$path = set_realpath('assets/Patient_Profiles/');
			$success = file_put_contents($path . $filename, $pdf1);
			return $success ? $filename : -1;
	}
	
					public function Notify($DEVICE_TOKEN,$MASSAGE,$TITLE)
	{
					define( 'API_ACCESS_KEY', 'AIzaSyDzjrLoMl_jV1X7JE_YWeyMyk-fS-nfQ_I');
					$registrationIds = array($DEVICE_TOKEN);
					// prep the bundle
					$msg = array
					(
						'message' 	=> $MASSAGE,
						'title'		=> $TITLE,
						'subtitle'	=> 'This is a subtitle. subtitle',
						'tickerText'	=> 'Ticker text here...Ticker text here...Ticker text here',
						'vibrate'	=> 1,
						'sound'		=> 1,
						'largeIcon'	=> 'large_icon',
						'smallIcon'	=> 'small_icon'
					);
					$fields = array
					(
						'registration_ids' 	=> $registrationIds,
						'data'			=> $msg
					);
					 
					$headers = array
					(
						'Authorization: key=' . API_ACCESS_KEY,
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
					echo $result;
	}
	
	
	
}  
   
   
   

?>