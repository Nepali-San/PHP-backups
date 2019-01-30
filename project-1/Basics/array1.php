<?php
$subject = ['english','math','c'];  // insted of using array() function 
$marks  = ['90','80','99'];
var_dump($marks[1]);               // var_dump() returns the datatype and value of a variable.
echo'<br/>';
//for($i = 0 ; $i < count($marks); $i++)
$i = 0;
while($i<count($marks))
{
	echo "$subject[$i] = $marks[$i]".'<br>';
	//echo "$subject[$i]".'='."$marks[$i]".'<br>';
	$i++;
}
?>