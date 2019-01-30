           Title : Multidimesional assertive array
<?php
$assocmulti = array(
	array('name' =>'Ramesh','faculty'=>'CSIT','year'=>'2073' ),
	array('name' => 'Suresh','faculty'=> 'BCA','year'=>'2073' ),
	array('name' => 'Hari','faculty' => 'MBA','year' => '2072')
	);
echo "<pre>";
echo 'This is the general format of our array.<br/><br/>';
print_r($assocmulti);
echo '<br/><br/>';
echo 'using nested foreach<br/><br/>';
foreach ($assocmulti as $array) {
	foreach($array as $key => $value)
	{
		echo $key.'='.$value.'<br/>';
	}
	echo '<br/>';
}
	//on next way; 
echo '<br/>'.'<br>';
echo 'using single foreach<br/><br/>';
foreach ($assocmulti as $array) {
	echo 'name = '.$array['name'].'<br/>';
	echo 'faculty = '.$array['faculty'].'<br/>';
	echo 'year = '.$array['year'].'<br/>';
	echo '<br/>';
}
// some special function of sublime text app
//ctrl + h  to open find and replace tool.
//put cursor on a variable you want to correct  and press ctrl ,now put on same incorrect variable at other place and correct all simultaneously; 
?>