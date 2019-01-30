<?php
$subject = ['english','math','c']; // insted of using array() function
$marks  = ['90','80','99'];

//for($i = 0 ; $i < count($marks); $i++)
$i = 0;
while($i<count($marks))
{
//displays subjects  and their respective marks.
echo "$subject[$i] = $marks[$i]".'<br>';   //'.'is for concatenation.
// or echo "$subject[$i]".'='."$marks[$i]".'<br>';
	$i++;
}
?>