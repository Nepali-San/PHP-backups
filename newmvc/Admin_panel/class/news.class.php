<?php

class news extends common{
	public $id , $title , $category , $short_desc,
	$description , $image , $status , $created_by , $created_at,
	$modified_by , $modified_at;

	function selectnews(){
	    $sql = "select * from tbl_news";
	    return $this->select($sql);
	}
	function selectnewsbyid(){
	    $sql = "select * from tbl_news where id= '$this->id'";
	    return $this->select($sql);
	}

	function updatenews(){
		if(!empty($this->image)){
		$sql = "update tbl_news set title='$this->title',category='$this->category',short_desc = '$this->short_desc',status = '$this->status',description = '$this->description',modified_by = '$this->modified_by',modified_at= '$this->modified_at',image= '$this->image' where id = '$this->id'";
	}
	else{
		$sql = "update tbl_news set title='$this->title',category='$this->category',short_desc = '$this->short_desc',status = '$this->status',description = '$this->description',modified_by = '$this->modified_by',modified_at= '$this->modified_at' where id = '$this->id'";

	}
		return $this->update($sql);
	}

	function deletenews(){
		$sql = "delete from tbl_news where id = $this->id";
		return $this->delete($sql);
	}

	function addnews(){
		if(!empty($this->image)){
	$sql = "insert into tbl_news(title,category,short_desc,description,created_at,created_by,status,image)values('$this->title','$this->category','$this->short_desc','$this->description','$this->created_at','$this->created_by','$this->status','$this->image')";
    }
    else
	{
		$sql = "insert into tbl_news(title,category,short_desc,description,created_at,created_by,status)values('$this->title','$this->category','$this->short_desc','$this->description','$this->created_at','$this->created_by','$this->status')";
	}
	return $this->insert($sql);
	}
}