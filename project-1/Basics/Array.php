
<?php
//Array...
$name =array('pratap','santosh','prem');
echo '$name[0]='.$name['0'].'<br/>'; //dot represents concatenation.
echo '$name[1]='.$name['1'].'<br/>'; // displaying each name on newline
echo '$name[2]='.$name['2'].'<br/>';
$score = array('50','80','100'); // a new array.
$s = 0;
for($i = 0; $i<count ($score);$i++)
{
	$s += $score[$i];                //finding the sum of array $score.
}
echo 'sum = '.$s;
// echo "sum = $s"; 
?>
