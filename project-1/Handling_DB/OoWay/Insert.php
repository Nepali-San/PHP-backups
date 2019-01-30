<?php
require_once 'ClassDb.php';
$obj = new model;
$date = date('Y-m-d H:i:s');
$sql = "insert into tb_admin(name,username,email,contact,created_date)values('ads','df2sa','gam2il','1221213d','$date')";
$chk = $obj->insert($sql);
if($chk){
	echo "inserted successfully";
}
else{
	echo "Error!!!";
}
?>