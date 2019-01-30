<?php
// 
//  $sum = add(5,5);
//  echo $sum;
// function add($a,$b){   //this is function to add number 5 and 5
//  $sum = $a+$b;
//  return $sum;
// }
fullname('Sher','Bahadur','Deuwa');
function fullname($first,$middle='',$last='')   //if not middle name as arguements are passed serially.
{
	echo $first.' '.$middle.' '.$last;
}
?>

<?php
//just for comments

//It is compulsion for us to pass 3 arguements in above function, but if we want to pass only two arguements then we define 3rd arguement as blank as in above
//in above we may not need middle name so if no middle name is entered than it is replaced with blank as define in function.
//we also put last name blank because in case of only two names (San,Neupane) the first and the middle is assigned but the last is not assigned which causes error...meaning that if there is no middle name we assign last name is the middle name but the real last name is empty giving appearance of first and middle name as first and last name.

?>