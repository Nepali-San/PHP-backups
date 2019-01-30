Title : Our First Example For Assertive Array.

<!-- <?php
$multi = ['1','2','3'];
echo '<pre>';
print_r ($multi); //5 & 6 to see format of our array,print_r => print in readable form.
foreach($multi as $value)
{
	echo $value.'<br/>';
}
?> -->

<?php    
//$array is assertive.
$array = ['name'=>'ramesh','surname'=>'chaudhary','age'=>'56'];
echo '<pre>';
print_r($array);

echo '<br/><br/><br/>';
echo '$array[name] = '.$array['name'];  //prints the value of name i.e. ramesh
echo '<br/><br/><br/>';

echo 'Our overall array using foreach:<br/><br/>';
foreach($array as $key => $value)   
//Even the non-assertive array can be printed this way , then the $key value there is it's subscript and $value is the element at that subscript.
{
	echo $key.'='.$value.'<br/>';
}
?>