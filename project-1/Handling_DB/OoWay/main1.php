<?php

class crud{
	
	public $con;

	public function __construct()
     {
		$this->con = new mysqli('localhost','root','','db_data');
    
    if ($this->con->connect_error)
    	die("failure");
   
	    }

	public function select($sql){
		$res = $this->con->query($sql);
		$data = [];
		if($res->num_rows>0)
			while($row= $res->fetch_object()){
				array_push($data,$row);
			}
		return $data;
	}
     
     public function update($sql){
     	if($this->con->query($sql)){
     	  if($this->con->affected_rows){
     		echo "successfully updated";
     	  }
     	  else{
     		echo "duplicated data entered";
     	  }
          }
     	else {
     		echo "Error !!!".'<br/>'.$this->con->error;
     	}
     }

     public function insert($sql){
     	if($this->con->query($sql)){
     		return $this->con->insert_id; 
               //insert_id is a pre-defined property of the class mysqli
     	}
          else
               return false;
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