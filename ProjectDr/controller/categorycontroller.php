<?php 

class categorycontroller extends controller {

	function __construct($category){

			$this->category=$this->loadmodel('categorymodel');
			$this->info=$this->loadmodel('infomodel');
			$check=$this->category->checkifcategoryexists($category);
			if(!$check){
				die('category doesnot exist');
			}

	}

	function index($category){
		$this->menu=$this->category->selectmycategory();
		$this->name=$category;
		$this->categoryinfo=$this->info->selectinfobycategory($category);
		$this->loadview('category');
	}
}
?>