<?php
class homecontroller extends controller{
	function __construct(){
		$this->news = $this->loadmodel('newsmodel');
		//var_dump($this->news);
	}
	function home(){
		return $this->loadview('home',true,true);
	}
	function login(){
		return $this->loadview('login',false,false);
	}
	function showadmin(){
		return $this->loadview('adminlist',true,true);
	}
}
?>