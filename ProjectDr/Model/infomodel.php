<?php
class infomodel extends model{
    function selectfeaturedinfo(){
        $sql = "select * from tbl_info where featured = 1 and status = 1 limit 6";
        return $this->select($sql);
    }

    function selectlatestinfo(){
        $sql = "select * from tbl_info where status = 1 order by created_at DESC limit 8";
        return $this->select($sql);
    }

    function GetCategorySlugByCategoryName($category){
      $sql = "select slug from tbl_category where name = '$category'";
      return $this->select($sql);
    }

    function selectinfobycategory($category){
        $sql = "select * from tbl_info where category = '$category' and status = 1";
       return $this->select($sql);
    }

    function checkifinfoexists($info){
        $sql = "select * from tbl_info where slug = '$info'";
        $count = $this->select($sql);
        $count = count($count);
        if($count){
            return true;
        }
        else{
            return false;
        }
    }

    function selectainfo($slug){
        $sql = "select * from tbl_info where slug = '$slug'";
        return $this->select($sql);
    }

    function selectsomeinfo(){
        $sql = "select * from tbl_info limit 5";
        return $this->select($sql);
    }

}

?>