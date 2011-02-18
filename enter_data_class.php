<?php
class formdata{
	protected $id;		
	protected $firstname;
	protected $lastname;
	protected $message;
	protected $active;
	protected $date_created;
	protected $date_modified;

	protected $conn;
	protected $error;



	
	function insert_formdata($firstname,$lastname, $message){
		$conn = db_connect();
	//	$result = $conn->query("INSERT INTO forms VALUES (NULL,'".$firstname."','".$lastname."', '".$message."',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)");	
		$result = $conn->query("INSERT INTO forms VALUES ('".$firstname."','".$lastname."', '".$message."')");	
		
		if (!$result) {
			throw new Exception('You Could not connect to the database - please try again later.');
		}

		return true;		
	}
	


	
	function SetField($name,$value){
		switch ($name)
		{
			case 'firstname':
				$bool=$this->validate_firstname($value);				
				break;	
			
			case 'lastname':
				$bool=$this->validate_lastname($value);				
				break;
			
			case 'message':
				$bool=$this->validate_message($value);				
				break;
			
			default:
					
				break;		
		}
	}
	
	
	
	#************************************

	
	protected function validate_firstname($value){
		$bool=(valid_string_type2($value) && (strlen($value)<=100));		
		if ($bool) 
		{
			$this->firstname=$value;
		}
		else
		{
			$this->firstname='';
			$this->error='First Name Invalid';
		}
		return $bool;
	}
	
	protected function validate_lastname($value){
		$bool=(valid_string_type2($value) && (strlen($value)<=100));		
		if ($bool) 
		{
			$this->lastname=$value;
		}
		else
		{
			$this->lastname='';
			$this->error='Last Name Invalid';
		}
		return $bool;
	}
	
	protected function validate_message($value){
		$bool=(valid_string_type2($value) && (strlen($value)<=225));		
		if ($bool) 
		{
			$this->message=$value;
		}
		else
		{
			$this->message='';
			$this->error='Message Text Invalid';
		}
		return $bool;
	}

	

	
	public function __get($name){
		return $this->$name;		
	}
	
	public function __set($name, $value){		
		switch ($name)
		{
			case 'firstname':
				$bool=$this->validate_firstname($value);				
				break;	
			
			case 'lastname':
				$bool=$this->validate_lastname($value);				
				break;
			
			case 'message':
				$bool=$this->validate_message($value);				
				break;
			
			
			
			default:			
				break;		
		}
		
	}

	}



?>