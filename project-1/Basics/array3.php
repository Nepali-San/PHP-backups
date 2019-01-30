<?php

// example for 2d array addition ...

$multi[3] = array('10','10','10');
$multi[3] = array('10','10','10');   

 // $multi = ['10','10','10']; // <-don't know why this method is error.May be because it is 2d
 // $multi = ['10','10','10'];   


// two methods to find the sum are illustrated here.

/*$sum = 0;                        //<-this is the first method
foreach ($multi as $array) {
	for($i=0;$i<count($array);$i++)
	{
		$sum += $array[$i];
	}
}
echo $sum;*/
 $add =0;                        //<-this is the second method 
 foreach ($multi as $array) {
	foreach($array as $value)
	{
		$add += $value;
	}
}
echo $add
?>