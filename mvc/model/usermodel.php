<?php
class usermodel extends model{
public $email,$password;
function adduser(){
	$sql = "insert into tb_admin(email,password)values('$this->email','$this->password')";
	return $this->insert($sql);

}
function showuser(){
	$sql = "select * from tb_admin";
	return $this->select($sql);
}
}
?>