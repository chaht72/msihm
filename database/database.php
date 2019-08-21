<?php
require_once("config.php");
class Database{
	public $host   = DB_HOST;
	public $user   = DB_USER;
	public $pass   = DB_PASS;
	public $dbname = DB_NAME;

	public $link;
	public $error;

	public function __construct(){
		$this->connectDB();
	}
	//connect database 
	private function connectDB(){
		$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
		$this->link->set_charset('utf8');

		if (!$this->link) {
			$this->error = "connection failed".$this->link->connect_error;
			return false;
		}
	}

	//insert data into database
	public function insert($query){
         $result = $this->link->query($query) or die($this->link->error.__LINE__);          
         if ($result == null) {
         	return false;
         }else{
         	return true;
         }
	}

	//select or read data 
	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if ($result->num_rows > 0) {
			return $result;
		}
		
	}

	//update data 
	public function execute($query) 
    {
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
        
        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }

    //delete data
     public function delete($query) 
    { 
        
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
    
        if ($result == null) {
            return false;
        } else {
            return true;
        }
    }
}

?> 