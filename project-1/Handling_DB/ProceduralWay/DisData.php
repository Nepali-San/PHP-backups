<?php
require_once "news.php";
$sql="select * from tb_admin";
$res=mysqli_query($con,$sql);
echo "<pre/>";
//$row=mysqli_fetch_assoc($res);
//var_dump($row);
while ($row=mysqli_fetch_assoc($res)) {
	echo "</br>The details are:</br></br>";
	var_dump($row);
	echo "</br>let's summarize above data info : </br></br>";
	echo $row['name']."--";
	echo $row['username']."--";
	echo $row['contact']."--";
	echo $row['email']."<br/>";
}
?>
