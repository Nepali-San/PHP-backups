<?php
$math = 50;
$science = 20;
$computer = 70;
$total = $math + $science + $computer;
$per = $total/3;
if($math <40 ||  $science <40 || $computer < 40)
{
     echo 'failed.';
     if($math < 40)
     {
     	echo '<br>in maths.';
     }
     if($science<40)
     {
     	echo ' <br> in science.';
     }
     if($computer<40)
     {
     	echo ' <br> in computer.';
     }
	}
	else{ 
		echo '<br>passed in every subjects.';
	}
	echo "<br>percent is $per.<br>";
	//echo '<br>percent is ',(int)$per; 
	if($per<40) echo 'failed division';
	elseif($per >=40 && $per <60 ) echo 'third division';
	elseif($per >=60 && $per <80) echo 'second division';
	else echo 'distinction.';
?>