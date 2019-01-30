<?php 

class categorycontroller extends controller {

	function __construct($category){

			$this->category=$this->loadmodel('categorymodel');
			$this->news=$this->loadmodel('newsmodel');
			$check=$this->category->checkifcategoryexists($category);
			if(!$check){
				die('category doesnot exist');
			}

	}

	function index($category){
		$this->menu=$this->category->selectmycategory();
		$this->categoryname=$category;
		$this->categorynews=$this->news->selectnewsbycategory($category);
		$this->featured_news=$this->news->selectfeaturednews();
		$this->latest_news=$this->news->selectlatestnews();
		$this->loadview('category');
	}
}
?>