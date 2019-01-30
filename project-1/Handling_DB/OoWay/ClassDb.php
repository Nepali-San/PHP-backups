<?php

class model{

	public $con;

	function __construct(){
		$this->con = new mysqli('localhost','root','','db_news');
		if($this->con->connect_error){
			die("Connection couldn't be established.");
		}
	}
     function insert($sql){
     	$this->con->query($sql);
     	if($this->con->affected_rows > 0)
     	{
     		return true;

     	}
     	else{
     		return false;
     	}
     }

     function display($sql){
     	$res = $this->con->query($sql);
     	$data = [];
     	if($res->num_rows > 0){
     		while($row=$res->fetch_object()){
     			array_push($data,$row);
     		}

     	}
     	return $data;
     }

}
?>