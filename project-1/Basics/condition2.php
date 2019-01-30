<?php
//if statement
// if (2>1) {
// 	echo "true";
// }
// //ifelse statement

// if (condition) {
// 	# code...
// }else{
// 	# code...
// }
// //elseif statement
// if (condition) {
// 	# code...
// }elseif (condition) {
// 	# code...
// }else{

// }

//Comparison Operator
// $name="Football is life";

// if (strlen($name)>0) {
// 	echo $name;
// }else{
// 	echo "String is Empty";
// }
//isset checks if a variable has been declared or not
// echo isset($name);
// if (isset($name)) {
// 	echo $name;
// }else{
// 	echo '$name is not defined';
// }
//unsets a variable ie makes variable undefined
// unset($name);
// echo $name;
$english="40";
$math="45";
$cee="60";
$ceeplusplus="75";
$processor="80";
$total=$english+$math+$cee+$ceeplusplus+$processor;
$percentage=$total/5;
// if ($total<40) {
// 	echo "Fail";
// }else{
// 	echo "true";
// }
if ($english<40 || $math<40 || $cee<40 || $ceeplusplus <40 || $processor<40) {
	$result="fail";
	$divison="fail";
}else{
	$result="pass";
	if($percentage<50) {
		$divison="third";
	}elseif ($percentage<60) {
		$divison="second";
	}elseif ($percentage<80) {
		$divison="first";
	}else{
		$divison="distinction";
	}
}

echo "total=".$total."\r\n";
echo "Percentage=".$percentage."\r\n";
echo "Result:".$result."\r\n";
echo "Divison=".$divison."\r\n";

//LOOP
for($i=0;$i<10;$i++){

}

while (condition) {
	# code...
}

do {
	# code...
} while (condition);

switch (variable) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}