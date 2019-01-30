<?php
session_start();  //first we start our session
$_SESSION['name'] = 'San';
//here we set a name on our session .Everything we set on session can be accessed from any other php program until the session ends   
//until session_destroy is called you may echo name from anywhere [echo $_SESSION['name'];]
?>
