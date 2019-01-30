<?php
class homecontroller extends controller{
	function __construct(){
		$this->news = $this->loadmodel('newsmodel');
		$this->cat= $this->loadmodel('categorymodel');
		//var_dump($this->news);
	}
	function index(){
		$this->menu = $this->cat->selectmycategory();
		$this->featured_news = $this->news->selectfeaturednews();
		$this->sliderdata=$this->news->sliderimage();
		$this->latest = $this->news->selectlatestnews();
		$this->loadview('home',true,true);
	}
}
?>