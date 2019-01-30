<?php
class infocontroller extends controller{
	function __construct($category,$info){
		$this->Cinfo = $this->loadmodel('infomodel');
		$this->cat = $this->loadmodel('categorymodel');
		$check=$this->cat->checkifcategoryexists($category);
			if(!$check){
				die('category doesnot exist');
			}
			$check = $this->Cinfo->checkifinfoexists($info);
			if(!$check){
				die('info doesnot exist');
			}

	}
	function index($info){
		$this->menu = $this->cat->selectmycategory();
		$this->ainfo = $this->Cinfo->selectainfo($info);
		$this->latestinfo = $this->Cinfo->selectlatestinfo();
		$this->loadview('info',true,true,false);
	}
}