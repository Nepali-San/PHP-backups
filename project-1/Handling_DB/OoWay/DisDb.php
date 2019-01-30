<?php

require_once "ClassDb.php";
$dis = new model;

$sql1 = "select * from tb_admin";
$res = $dis->display($sql1);


	foreach ($res as $show) {
		echo $show->name.' ';
		echo $show->username.'  ';
		echo $show->email.'  ';
		echo $show->contact.'  ';
		echo $show->created_date.'<br/>';
	}
?>