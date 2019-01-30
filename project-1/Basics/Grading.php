<?php
if(isset($_POST["submit"]))
{
	$per = ($_POST["m1"] + $_POST["m2"] + $_POST["m3"] + $_POST["m4"] + $_POST["m5"])/5;
	echo 'per = '.$per .'</br>';
	if($per  >= 97)
	{
		echo 'grade = A+ '.'</br>'.'scale = 4.0';
	}
	else if($per >=93)
	{
		echo 'grade = A'.'</br>'.'scale = 4.0';
	}
	else if($per >=90)
	{
		echo 'grade = A-'.'</br>'.'scale = 3.7';
	}
	else if($per >=87)
	{
		echo 'grade = B+'.'</br>'.'scale = 3.3';
	}
	else if($per >=83)
	{
		echo 'grade = B'.'</br>'.'scale = 3.0';
	}	
	else if($per >=80)
	{
		echo 'grade = B-'.'</br>'.'scale = 2.7';
	}
	else if($per >=77)
	{
		echo 'grade = C+'.'</br>'.'scale = 2.3';
	}
	else if($per >=73)
	{
		echo 'grade = C'.'</br>'.'scale = 2.0';
	}
	else if($per >=70)
	{
		echo 'grade = C-'.'</br>'.'scale = 1.7';
	}
	else if($per >=67)
	{
		echo 'grade = D+'.'</br>'.'scale = 1.3';
	}
	else if($per < 67)
	{
		echo 'grade = F'.'</br>'.'scale = 0';
	}
}
?>
<html>
<head> 
<title>Grading</title>
</head>
<body>
<form method= "POST">
<h1 style="color:Green;text-align: center"> Marks Evaluator </h1>
<input type="number" name = "m1" placeholder="Marks In C"><br/>
<input type="number" name = "m2" placeholder="Marks In Microprocessor"><br/>
<input type="number" name = "m3" placeholder="Marks In Maths"><br/>
<input type="number" name = "m4" placeholder="Marks In Stat"><br/>
<input type="number" name = "m5" placeholder="Marks In IT"></br></br>
<input type = "submit" value = "sent" name = "submit">
</form>
</body>
</html>