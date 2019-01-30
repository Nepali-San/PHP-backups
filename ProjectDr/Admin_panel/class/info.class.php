<?php

class info extends common{
	public $id , $title , $category , $short_desc,
	$description , $image , $status , $created_by , $created_at,
	$modified_by , $modified_at , $slug ,$featured;

	function selectinfo(){
	    $sql = "select * from tbl_info";
	    return $this->select($sql);
	}
	function selectinfobyid(){
	    $sql = "select * from tbl_info where id= '$this->id'";
	    return $this->select($sql);
	}

	function updateinfo(){
		if(!empty($this->image)){
		$sql = "update tbl_info set title='$this->title',category='$this->category',short_desc = '$this->short_desc',status = '$this->status',description = '$this->description',modified_by = '$this->modified_by',modified_at= '$this->modified_at',slug = '$this->slug',featured = '$this->featured',image= '$this->image' where id = '$this->id'";
	}
	else{
		$sql = "update tbl_info set title='$this->title',category='$this->category',short_desc = '$this->short_desc',status = '$this->status',description = '$this->description',modified_by = '$this->modified_by',modified_at= '$this->modified_at',slug = '$this->slug',featured = '$this->featured' where id = '$this->id'";

	}
		return $this->update($sql);
	}

	function deleteinfo(){
		$sql = "delete from tbl_info where id = $this->id";
		return $this->delete($sql);
	}

	function addinfo(){
		if(!empty($this->image)){
	$sql = "insert into tbl_info(title,category,short_desc,description,created_at,created_by,status,featured,image,slug)values('$this->title','$this->category','$this->short_desc','$this->description','$this->created_at','$this->created_by','$this->status','$this->featured','$this->image','$this->slug')";
    }
    else
	{
		$sql = "insert into tbl_info(title,category,short_desc,description,created_at,created_by,status,featured,slug)values('$this->title','$this->category','$this->short_desc','$this->description','$this->created_at','$this->created_by','$this->status','$this->featured','$this->slug')";
	}
	return $this->insert($sql);
	}
}