<?php
class newsmodel extends model{
    function sliderimage()
    {
    	$sql="select image from tbl_news where image is NOT NULL order by id DESC limit 4";
    	//var_dump($sql);
    	return $this->select($sql);
    }	
    function selectfeaturednews(){
        $sql = "select * from tbl_news where featured = 1 and status = 1 limit 3";
        return $this->select($sql);
    }

    function selectlatestnews(){
        $sql = "select * from tbl_news where status = 1 order by created_at DESC limit 3";
        return $this->select($sql);
    }

    function selectnewsbycategory($category){
        $sql = "select * from tbl_news where category = '$category' and status = 1";
        //var_dump($sql);
       return $this->select($sql);
    }

    function checkifnewsexists($news){
        $sql = "select * from tbl_news where id = '$news'";
        $count = $this->select($sql);
        $count = count($count);
        if($count){
            return true;
        }
        else{
            return false;
        }
    }

    function selectanews($news){
        $sql = "select * from tbl_news where id = '$news'";
        return $this->select($sql);
    }

}

?>