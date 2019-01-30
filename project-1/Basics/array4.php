 Program to display the sum of marks of different students.<br/>

<?php
$subject = ['eng','math','nep'];
$mark[] = array('10','20','30');  //<- marks of std-1;
$mark[] = array('20','30','20');  //<- marks of std-2;
$mark[] = array('30','40','10');  //<- marks of std-3;
$mark[] = array('40','50','20');  //<- marks of std-4;
$i =1;

foreach ($mark as $student) {
	$sum =0;
	foreach($student as $eachmark){
		$sum += $eachmark; 
	}
	echo "student$i =".$sum.'<br/>';
$i++;
}
?>