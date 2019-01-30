<?php

class admin extends common{

	public $id    , $name , $username , $status     ,
	       $email , $salt , $password , $last_login , $created_at;


	function selectadminbyusername(){
		$sql="select * from tbl_admin where username='$this->username'";
		return $this->select($sql);
	}

	function selectadminbyid(){
		$sql="select * from tbl_admin where id='$this->id'";
		return $this->select($sql);
	}

	function addadmin(){
		$sql = "insert into tbl_admin(name,username,email,password,salt,created_at)values('$this->name','$this->username','$this->email','$this->password','$this->salt','$this->created_at')";
	return $this->insert($sql);
	}

	function selectalladmin(){
		$sql = "select * from tbl_admin";
		return $this->select($sql);
	}
	function updatelastlogin(){
		$date = date('Y-m-d H:i:s');
		  $sql = "update tbl_admin set last_login = '$date' where username ='$this->username'";
	    $this->update($sql);
	}
	function deleteadmin(){
		$sql = "delete from tbl_admin where id = '$this->id'";
		return $this->delete($sql);
	}
	function updateadminbyidwithpwd(){
		  $sql = "update tbl_admin set name = '$this->name',username= '$this->username' ,salt = '$this->salt', email = '$this->email' , password = '$this->password' where id ='$this->id'";
	    return $this->update($sql);
	}

	function updateadminbyidwithoutpwd(){
		  $sql = "update tbl_admin set name = '$this->name',username= '$this->username' , email = '$this->email' where id ='$this->id'";
	    return $this->update($sql);
	}

}
?>