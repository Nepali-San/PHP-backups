<?php
$con = mysqli_connect('localhost','root','','db_news');
if(!$con){
	die("Database connection could not be connected");  
	//this function exits the program and no further operation below it is done.
}
	//echo "Database connection successfully established";
?> 