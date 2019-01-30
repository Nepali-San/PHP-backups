<?php
$con = mysqli_connect('localhost','root','','db_assignment');
if(!$con){
	die ("Error connecting database");
}
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$username = $_POST['username'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$created_date = $_POST['created_date'];
	$last_login = $_POST['last_login'];
	$password = $_POST['password'];
	$sql = "insert into tb_admin(name,username,address,email,contact,created_date,last_login,password) values('$name','$username','$address','$email','$contact','$created_date','$last_login','$password')";
	if(mysqli_query($con,$sql))
	{
		?>
		<script type="text/javascript">
			alert("Successfully added new admin");
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert('Error ! Error ! Error !');
		</script>
		<?php
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form to add admin</title>
</head>
<body>
<form method="post">
<input type = 'text' name = 'name' placeholder="Enter your name"/><br/>
<input type="text" name="username" placeholder = "username"/><br/>
<input type="text" name="address" placeholder = "address"/> <br/>
<input type="text" name="email" placeholder="Email"/><br/>
<input type = "text" name = "contact" placeholder="contact number"/><br/>
<input type="text" name="created_date" placeholder = "created_date"/><br/>
<input type="text" name="last_login" placeholder = "login datetime"/><br/>
<input type="password" name="password" placeholder = "password"/><br/><br/>
<button type = "submit" value="submit" name="submit">Add Admin</button>
</form>
</body>
</html>
