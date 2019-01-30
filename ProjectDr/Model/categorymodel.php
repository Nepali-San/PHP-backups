<?php

class categorymodel extends model{
	function selectmycategory(){
		$sql = "select * from tbl_category";
		return $this->select($sql);
	}

	// function getcategoryname($slug){
 //        $sql = "select name from tbl_category where slug = '$slug'";
 //        return $this->select($sql);
 //    }

	function checkifcategoryexists($name){
		$sql = "select * from tbl_category where name = '$name'";
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