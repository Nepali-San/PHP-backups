<?php
//require_once 'index.php';
$salt = uniqid();
$password = 'helloworld';
echo "Hashing for password $password = ".sha1($salt.$password);
echo "<br/>Salt = ".$salt;
?>