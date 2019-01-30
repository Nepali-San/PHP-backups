<?php

class common{
	
	public $con;

	public function __construct()
     {
		$this->con = new mysqli('localhost','root','','db_news2');
    
    if ($this->con->connect_error)
    	die("Database Connection Error");
   }

     public function set($var,$value){
          $this->$var = $value;
     }
     
     public function realescapestring($data){
     return $this->con->real_escape_string($data);
}
     
     public function get($var){
         
          return $this->$var;
     }

	public function select($sql){
		$res = $this->con->query($sql);
		$data = [];
		if($res->num_rows>0)
			while($row= $res->fetch_object()){
				$data[] = $row;    //array_push($data,$row);
			}
		return $data;
	}
     
     public function update($sql){
     	if($this->con->query($sql)){
     	  if($this->con->affected_rows > 0){
               return "Updated successfully";
     	  }
     	  else{
     		return "Trying to update duplicate record";
     	  }
          }
     	else {
     		return "Failed to update";
     	}
     }

     public function insert($sql){
     	if($this->con->query($sql)){
     		return $this->con->insert_id;
     	}
          else{
               return false;
          }
     }

     public function delete($sql){
          $this->con->query($sql);
          if ($this->con->affected_rows>0) {
               return true;
          }
          else{
               return false;
}
}
}
?>