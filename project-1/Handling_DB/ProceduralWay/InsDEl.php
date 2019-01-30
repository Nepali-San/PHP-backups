<?php
require_once "news.php";
$sql = "insert into tb_post(id,title,short_desc,content,category,created_date,created_by,modifed_date,modified_by) values('3','wins','many parties','Happy','Football','2017-12-30','San-360','2017-12-22','San-360')";

echo $sql;
 
  if(mysqli_query($con,$sql))
  	echo "succesfully inserted</br>";
  else
  	echo 'insertion error</br>';

$sql = 'delete from tb_post where id = 3';
echo $sql;
if(mysqli_query($con,$sql))
echo '<br>sucessfully deleted';
else 
echo 'ERROR ! ! !';

?>