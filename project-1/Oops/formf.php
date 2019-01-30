<?php
//functions and forms
function per($a,$b,$c,$d,$e,$f){
	$percent = ($a+$b+$c+$d+$e+$f)/6;
	echo 'Your percentage is '.$percent;
}
if(isset($_POST['submit'])){
 $dsa = $_POST['dsa'];
 $micro = $_POST['microprocessor'];
 $la = $_POST['la'];
 $discrete = $_POST['discrete'];
 $stat = $_POST['stat'];
 $logic = $_POST['logic'];
 per($dsa,$micro,$la,$discrete,$stat,$logic);

}

?>
<html>
<head>
	<title>With Functions</title>
</head>
<body>
<form action=" " method = "POST">
<input type = 'numbers' name = 'dsa' placeholder= "marks is DSA"><br/>
<input type = "numbers" name = 'microprocessor' placeholder = "marks in Microprocessor"><br/>
<input type = 'numbers' name = 'la' placeholder = "marks in linear algebra"><br/>
<input type = 'numbers' name = 'discrete' placeholder = "marks in discrete"><br/>
<input type = 'numbers' name = 'logic' placeholder = "marks in logic"><br/>
<input type = 'numbers' name = 'stat' placeholder = "marks in stat"><br/>
<button type = 'submit' name= 'submit'  value='submit'>Submit</button>
</form>
</body>
</html>
