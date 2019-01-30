<?php

class categorymodel extends model{
	function selectmycategory(){
		$sql = "select * from tbl_category";
		return $this->select($sql);
	}

	function checkifcategoryexists($category){
		$sql = "select * from tbl_category where name = '$category'";
		$count = $this->select($sql);
		$count = count($count);
		if($count){
			return true;
		}
		else{
			return false;
		}
	}
	
}