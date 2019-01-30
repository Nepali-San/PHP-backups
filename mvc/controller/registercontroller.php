<?php
class registercontroller extends controller{
	function __construct(){
		$this->user = $this->loadmodel('usermodel');
	}
	function register(){
		return $this->loadview('register',false,false);
	}
	function add(){
		$this->user->set('email',$_POST['email']);
		$this->user->set('password',$_POST['password']);
		if($a = $this->user->adduser()){
			echo $a;
			echo "<script>alert('User created sucessfully')</script>";
		}
		else{
			echo "<script>alert('User couldn't created sucessfully')</script>";
		}
      echo "<script>window.location='/mvc/register';</script>";
	}
}
?>