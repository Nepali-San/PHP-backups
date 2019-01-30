<?php
class homecontroller extends controller{
	function __construct(){
		$this->info = $this->loadmodel('infomodel');
		$this->cat = $this->loadmodel('categorymodel');
	}
	function index(){
		$this->menu = $this->cat->selectmycategory();
		$this->featured_info = $this->info->selectfeaturedinfo();
		 $this->loadview('home',true,true,true);
	}
}
?>