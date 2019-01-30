<?php

class category extends common{

	public $id,$name,$created_by,$created_at,$modified_by,$modified_at,$status;

	function addcategory(){
		$sql = "insert into tbl_category(name,created_by,created_at,status)values('$this->name','$this->created_by','$this->created_at','$this->status')";
		return $this->insert($sql);
	}

	function selectallcategory(){
		$sql = "select * from tbl_category";
		return $this->select($sql);
	}

	function selectcategorybyid(){
		$sql="select * from tbl_category where id='$this->id'";
		return $this->select($sql);
	}

	
	function updatecategory(){
		$sql="update tbl_category set name='$this->name',modified_by='$this->modified_by',modified_at='$this->modified_at',status = '$this->status' where id='$this->id' ";
		return $this->update($sql);
	}

	function deletecategory(){
		$sql = "delete from tbl_category where id = '$this->id'";
		return $this->delete($sql);

	}
	
}
?>