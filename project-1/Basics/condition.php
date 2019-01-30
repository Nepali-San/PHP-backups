<?php
/*if(2>1){
	echo 'true<br>';
}
else{
	echo'false<br>';
}*/
$name = 'Football is life.';
/*$a = strlen($name);
if ($a != 0) {
	echo $name;
}*/
echo isset($name);   // returns value 1 if defined variable.
if(isset($name)){ echo $name;}
else {echo '$name is not defined.';}
unset($name);  // undeclares the variable. 
//echo $name;  //causes error when used after unset.
?>