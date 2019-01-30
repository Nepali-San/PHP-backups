<?php
require_once "news.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$username=$_POST['username'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$sql = "update  tb_admin set name = '$name',username = '$username',contact = '$contact',email = '$email' where id = '$id'";
	if(mysqli_query($con,$sql))
	{
		?>
		<script>
			alert("Successfully updated");
		</script>
		<?php
	}
	else{
		?>
		<script>
			alert("Error !!!");
		</script>
		<?php
	}
	}

	$sql  = "select *from tb_admin where id = '$id'";
	$res = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($res);
}
?>
<html>
<body>
<p style="font-size: 40px;color : red"> Form to Update admin data   </p> 
<form action="" method = 'POST'>
<input type = "text" value = "<?php echo $row['name'] ?>" name ="name" placeholder= "Enter name"></br>
<input type = "text" value = "<?php echo $row['username'] ?>" name = "username" placeholder= "Enter username"></br>
<input type = "text" value = "<?php echo $row['contact'] ?>" name = "contact" placeholder= "Enter contact number"></br>
<input type = "text" value = "<?php echo $row['email'] ?>" name = "email" placeholder= "Enter email"></br></br>
<button type = "submit" value = "submit" name = "submit">Update Admin </button><br/>
</form>
</body>
</html>