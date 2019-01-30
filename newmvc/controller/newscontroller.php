<?php
class newscontroller extends controller{
	function __construct($category,$news){
		$this->newsm = $this->loadmodel('newsmodel');
		$this->cat = $this->loadmodel('categorymodel');
		$check=$this->cat->checkifcategoryexists($category);
			if(!$check){
				die('category doesnot exist');
			}
			$check = $this->newsm->checkifnewsexists($news);
			if(!$check){
				die('news doesnot exist');
			}

	}
	function index($news){
		$this->menu = $this->cat->selectmycategory();
		$this->anews = $this->newsm->selectanews($news);
		$this->loadview('news',true,true);
	}
}